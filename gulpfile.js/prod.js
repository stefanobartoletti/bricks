// --- Gulp ---

const { src, dest } = require('gulp');


// --- Plugins ---

const zip = require('gulp-zip');
const ftp = require('vinyl-ftp');
const fs = require('fs-extra');
const path = require('path');
const notify = require('gulp-notify');
const gulpif = require('gulp-if');

const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;


// --- Configuration Variables ---

const config = require('../config/config');
const project = require('../config/project');
const ftpFile = '../config/ftp';
const ftpFileCheck = fs.existsSync(path.join(__dirname, ftpFile+'.js'));
const ftpConfig = require( ftpFileCheck ? ftpFile+'.js' : ftpFile+'.js.sample');
const ftpConn = ftp.create(ftpConfig.login);


// --- Functions ---

function pkg() {
    return src(config.prod.files, {base: '..'})
        .pipe(zip(project.textdomain+'.zip'))
        .pipe(dest(config.prod.pkg.dist));
};

function deploy() {
    return src(config.prod.files, {base: '.', buffer: false})
        .pipe(gulpif(ftpFileCheck, ftpConn.newerOrDifferentSize(ftpConfig.path)))          
        .pipe(gulpif(ftpFileCheck, ftpConn.dest(ftpConfig.path)))
        .pipe(gulpif(!ftpFileCheck, notify({ message: ftpConfig.warning, onLast: true })));
};


// --- Exports ---

exports.pkg = pkg;
exports.deploy = deploy;