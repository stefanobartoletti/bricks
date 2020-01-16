// --- Gulp ---

const { src, dest, series } = require('gulp');


// --- Plugins ---

const fs = require('fs-extra')
const gulpif = require('gulp-if')
const checktextdomain = require('gulp-checktextdomain')
const jsonedit = require('gulp-json-editor')
const bump = require('gulp-bump')
const prompt = require('gulp-prompt')


// --- Configuration ---

const config = require('../config/config');
const project = require('../config/project');


// --- Functions ---

function setup(done) {
    // create required directories
    config.setup.dirs.forEach(function (dir) {
        fs.ensureDir(dir);
    })
    // copy required files
    fs.copy(config.setup.ftpconf.src, config.setup.ftpconf.dist, { overwrite: false })
    done();
};

function projectfiles(done) {
    // write style.css
    fs.writeFile(config.setup.stylecss.dist, config.setup.stylecss.content)
    // update package.json
    src('./package.json')
        .pipe(jsonedit(
            config.setup.jsonfiles.package,
        ))
        .pipe(dest('./'))
    // update composer.json
    src('./composer.json')
        .pipe(jsonedit(
            config.setup.jsonfiles.composer,
            {},
            { arrayMerge: function (dist,source,options) {return source;} }
        ))
        .pipe(dest('./'))
    done();
};

function domain() {
    return src(config.php.watch)
        .pipe(checktextdomain({
            text_domain: project.textdomain,
            keywords: config.i18n.functions,
            correct_domain: true,
        }))
};

function resetversion() {
    return src('.').pipe(gulpif(project.textdomain != 'bricks', prompt.prompt({
            type: 'list',
            message: 'This seems a new project, should I reset the version to 0.1.0?',
            choices: [ 'yes', 'no' ],
            name: 'reset',
        }, function(res) {
            src(config.prod.versioned, {base: './'})
                .pipe(gulpif(res.reset === 'yes', bump({version: '0.1.0'})))
                .pipe(dest('./'))
        }
    )))
};


// --- Exports ---

exports.setup = setup;
exports.conf = series(projectfiles, domain, resetversion);