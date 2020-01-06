// --- Gulp ---

const { src, dest } = require('gulp');


// --- Plugins ---

// CSS
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const purgecss = require('gulp-purgecss');
const cleancss = require('gulp-clean-css');
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');

const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;

const browserSync  = require('browser-sync').create();


// --- Configuration ---

const config = require('../config/config.json');
const project = require('../config/project.json');


// --- Functions ---

function css() {
    return src(config.css.src)
        .pipe(development(sourcemaps.init()))
        .pipe(sass({
            errorLogToConsole: true,
        }))
        .on('error', console.error.bind(console))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(production(purgecss({
            content: config.css.purge.content,
            whitelist: project.css.purge.wl,
            whitelistPatterns: project.css.purge.wlp
                .map(item => new RegExp(item)),
            whitelistPatternsChildren: project.css.purge.wlpc
                .map(item => new RegExp(item)),
        })))
        .pipe(production(cleancss()))
        .pipe(development(sourcemaps.write('./')))
        .pipe(dest(config.css.dist))
        .pipe(browserSync.stream());
};


// --- Exports ---

exports.css = css;