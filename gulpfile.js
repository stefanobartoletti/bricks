// --- Gulp ---

const { src, dest, task, watch, series, parallel } = require('gulp');


// --- Gulp plugins ---

// CSS
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

// JS
var uglify = require('gulp-uglify');

// Utility
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');


// --- Variables ---

var cssSrc = 'src/sass/**/*.scss';
var cssDist = 'dist/css/';
var cssWatch = 'src/sass/**/*.scss';


// --- CSS functions ---

function css(done) {
    src(cssSrc)
        .pipe(sourcemaps.init())
        .pipe(sass({
            errorLogToConsole: true,
            outputStyle: 'compressed',
        }))
        .on('error', console.error.bind(console))
        .pipe(autoprefixer({
            browsers: ['last 2 versions', '> 5%',],
            cascade: false
        }))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(sourcemaps.write('./'))
        .pipe(dest(cssDist))
    done();
};


// --- Watch functions ---

function watch_files() {
	watch(cssWatch, series(css));
}


// --- Tasks ---

task('default', parallel(css));

task("watch", parallel(watch_files));
