// --- Gulp ---

const { src, dest } = require('gulp');


// --- Plugins ---

const zip = require('gulp-zip');
const ftp = require('vinyl-ftp');

const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;


// --- Configuration Variables ---

const config = require('../config/config');
const project = require('../config/project');
const ftpConfig = require('../config/ftp');

const conn = ftp.create(ftpConfig.login);


// --- Functions ---

function pkg() {
    return src(config.prod.files, {base: '..'})
        .pipe(zip(project.textdomain+'.zip'))
        .pipe(dest(config.prod.pkg.dist));
};

function deploy() {
    return src(config.prod.files, {base: '.', buffer: false})
        .pipe(conn.newerOrDifferentSize(ftpConfig.path))
        .pipe(conn.dest(ftpConfig.path));
};


// --- Exports ---

exports.pkg = pkg;
exports.deploy = deploy;