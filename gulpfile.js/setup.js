// --- Gulp ---

const { src, dest, series } = require('gulp');


// --- Plugins ---

const fs = require('fs-extra')
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
    fs.copy(config.setup.navwalker.src, config.setup.navwalker.dist)
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
    // update textdomain instances
    return src(config.php.watch)
        .pipe(checktextdomain({
            text_domain: project.textdomain,
            keywords: config.i18n.functions,
            correct_domain: true,
        }))
};


// --- Exports ---

exports.setup = setup;
exports.conf = series(projectfiles, domain);