// --- Gulp ---

const { src, dest, watch, series, parallel } = require('gulp');


// --- Gulp plugins ---

// CSS
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

// JS
var uglify = require('gulp-uglify');

// Utility
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');

// Browser
var browserSync  = require( 'browser-sync' ).create();
var cache = require('gulp-cache');


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
        .pipe(browserSync.stream())
    done();
};


// --- Browser functions ---

function browser_sync(done) {
	browserSync.init({
        open: false,
        injectChanges: true,
        // server: { baseDir: './dist/' },
        proxy: "opensuse-kde:8080/sbbase",
        // tunnel: "sbbase",
    });
    done();
}

function reload(done) {
	browserSync.reload();
	done();
}

function clear(done) {
    cache.clearAll();
	done();
}


// --- Watch functions ---

function watch_files(done) {
    watch(cssWatch, series(css, clear, reload));
    done();
}


// --- Tasks ---

exports.default = parallel(css);
exports.watch = parallel(browser_sync, watch_files);
