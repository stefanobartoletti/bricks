// --- Gulp ---

const { src, dest } = require('gulp');


// --- Plugins ---

const faMinify = require('gulp-fa-minify');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');

const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;


// --- Configuration ---

const config = require('../config/config.json');
const project = require('../config/project.json');


// --- Functions ---

function icons() {
    return src(config.icons.src)
        .pipe(rename('fa5.min.js')) 
        .pipe(production(faMinify(project.icons.used)))
        .pipe(production(uglify()))
        .pipe(dest(config.js.dist));
};


// --- Exports ---

exports.icons = icons;
