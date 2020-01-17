// --- Gulp ---

const { src, dest } = require('gulp');


// --- Plugins ---

const imagemin = require('gulp-imagemin');

const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;

const browserSync  = require('browser-sync').create();


// --- Configuration ---

const config = require('../config/config');
const project = require('../config/project');


// --- Functions ---

function img() {
    return src(config.img.src)
        .pipe(imagemin({
            verbose: true
        }))
        .pipe(dest(config.img.dist))
        .pipe(browserSync.stream());
};


// --- Exports ---

exports.img = img;