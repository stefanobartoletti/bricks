// --- Gulp ---

const { src, dest, parallel } = require('gulp');


// --- Plugins ---

const imagemin = require('gulp-imagemin');

const gulpif = require('gulp-if');

const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;

const browserSync  = require('browser-sync').create();


// --- Configuration ---

const config = require('../config/config');
const project = require('../config/project');


// --- Functions ---

function localimg() {
    return src(config.img.src)
        .pipe(imagemin({
            verbose: true
        }))
        .pipe(dest(config.img.dist))
        .pipe(browserSync.stream());
};

function libimg() {
    return src(config.img.lg)
        .pipe(gulpif(project.use.lightgallery, dest(config.img.dist)))
        .pipe(browserSync.stream());
};


// --- Exports ---

exports.img = parallel(localimg, libimg);