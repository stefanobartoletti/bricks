// --- Gulp ---

const { src, dest } = require('gulp');


// --- Plugins ---

const zip = require('gulp-zip');
const ftp = require('vinyl-ftp');

const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;


// --- Configuration Variables ---

const config = require('../config/config.json');
const project = require('../config/project.json');
const ftpConfig = require('../config/ftp.json');

const conn = ftp.create(ftpConfig.login);


// --- Functions ---

function pkg() {
    return src(project.files.production, {base: '..'})
        .pipe(zip(project.textdomain+'.zip'))
        .pipe(dest(config.pkg.dist));
};

function deploy() {
    return src(project.files.production, {base: '.', buffer: false})
        .pipe(conn.newerOrDifferentSize(ftpConfig.path))
        .pipe(conn.dest(ftpConfig.path));
};


// --- Exports ---

exports.pkg = pkg;
exports.deploy = deploy;