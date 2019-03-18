// --- Gulp ---

const { src, dest, watch, series, parallel } = require('gulp');


// --- Gulp plugins ---

// CSS
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

// JS
var uglify = require('gulp-uglify');

// Images
var imagemin = require('gulp-imagemin');

// Fonts
var ttf2woff = require('gulp-ttf2woff');
var ttf2woff2 = require('gulp-ttf2woff2');

// Utility
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var zip = require('gulp-zip');

// Browser
var browserSync  = require('browser-sync').create();
var cache = require('gulp-cache');


// --- Variables ---

var cssSrc = './src/sass/**/*.scss';
var cssDist = './dist/css/';
var cssWatch = [ cssSrc ];

var jsSrc = './src/js/**/*.js';
var jsDist = './dist/js/';
var jsWatch = [ jsSrc ];

var phpWatch = [
    './**/*.php',
    '!node_modules/**',
    '!lib/**',
    '!vendor/**',
];

var imgSrc = './src/img/**/*.{png,jpg,gif,svg)}';
var imgDist = './dist/img/';
var imgWatch = [ imgSrc ];

var fontsSrc = './src/fonts/**/*.ttf';
var fontsDist = './dist/fonts/';
var fontsWatch = [ fontsSrc ];

var navwalkerSrc = './vendor/**/class-wp-bootstrap-navwalker.php';
var navwalkerDist = './lib/navwalker/';

var pkgSrc = [
    './**',
    '!node_modules/**',
    '!packages/**',
    '!src/**',
    '!vendor/**',
    '!.gitignore',
    '!gulpfile.js',
    '!README.md',
    '!*.json',
    '!*.lock',
    '!*.todo',
];
var pkgDist = 'packages/';


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


// --- JS functions ---

function js(done) {
    src(jsSrc)
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(sourcemaps.write('./'))
        .pipe(dest(jsDist))
        .pipe(browserSync.stream())
    done();
};


// --- Images functions ---

function img(done) {
    src(imgSrc)
        .pipe(imagemin({
            verbose: true
        }))
        .pipe(dest(imgDist))
        .pipe(browserSync.stream())
    done();
};


// --- Fonts functions ---

function fonts(done) {
    src(fontsSrc)
        .pipe(ttf2woff())
        .pipe(dest(fontsDist))
        .pipe(browserSync.stream())
    src(fontsSrc)
        .pipe(ttf2woff2())
        .pipe(dest(fontsDist))
        .pipe(browserSync.stream())
    done();
};


// --- Libraries functions ---

function navwalker(done) {
    src(navwalkerSrc)
        .pipe(rename({dirname:''}))
        .pipe(dest(navwalkerDist))
    done();
};


// --- Packages functions ---

function pkg(done) {
    src(pkgSrc, {base: '..'})
        .pipe(zip('archive.zip'))
        .pipe(dest(pkgDist))
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

function clearCache(done) {
    cache.clearAll();
	done();
}


// --- Watch functions ---

function watch_files(done) {
    watch(cssWatch, series(css, clearCache, reload));
    watch(jsWatch, series(js, clearCache, reload));
    watch(phpWatch, series(clearCache, reload));
    watch(imgWatch, series(img, clearCache, reload));
    watch(fontsWatch, series(fonts, clearCache, reload));
    done();
}


// --- Tasks ---

exports.css = css;
exports.js = js;
exports.img = img;
exports.fonts = fonts;

exports.lib = series(navwalker); 

exports.pkg = pkg;

exports.default = parallel(css, js, img, fonts);
exports.watch = parallel(browser_sync, watch_files);
