// --- Gulp ---

const { src, dest, parallel } = require('gulp');


// --- Plugins ---

const ttf2woff = require('gulp-ttf2woff');
const ttf2woff2 = require('gulp-ttf2woff2');

const gulpif = require('gulp-if');

const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;

const browserSync  = require('browser-sync').create();


// --- Configuration ---

const config = require('../config/config');
const project = require('../config/project');


// --- Functions ---

function localfonts(done) {
    src(config.fonts.src)
        .pipe(ttf2woff())
        .pipe(dest(config.fonts.dist))
        .pipe(browserSync.stream())
    src(config.fonts.src)
        .pipe(ttf2woff2())
        .pipe(dest(config.fonts.dist))
        .pipe(browserSync.stream())
    done();
};

function libfonts() {
    return src(config.fonts.lg)
        .pipe(gulpif(project.use.lightgallery, dest(config.fonts.dist)))
        .pipe(browserSync.stream());
};


// --- Exports ---

exports.fonts = parallel(localfonts, libfonts);