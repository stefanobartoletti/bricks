// --- Gulp ---

const { src, dest } = require('gulp');


// --- Plugins ---

const ttf2woff = require('gulp-ttf2woff');
const ttf2woff2 = require('gulp-ttf2woff2');

const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;

const browserSync  = require('browser-sync').create();


// --- Configuration ---

const config = require('../config/config');
const project = require('../config/project');


// --- Functions ---

function fonts(done) {
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


// --- Exports ---

exports.fonts = fonts;