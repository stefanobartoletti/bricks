/**
 * Gulp general setup.
 * Project related variables are defined in tools/gulp-project.js to keep gulpfile.js clean.
 */

// --- Gulp ---

const { src, dest, watch, series, parallel } = require('gulp');


// --- Gulp plugins ---

// CSS
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var purgecss = require('gulp-purgecss');

// JS
var uglify = require('gulp-uglify');

// Images
var imagemin = require('gulp-imagemin');

// Fonts
var ttf2woff = require('gulp-ttf2woff');
var ttf2woff2 = require('gulp-ttf2woff2');

// Icons
var faMinify = require('gulp-fa-minify');

// Utility
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var zip = require('gulp-zip');

// Browser
var browserSync  = require('browser-sync').create();
var cache = require('gulp-cache');


// --- Variables ---

// Project variables file
var projectVars = './tools/gulp-project';

// CSS
var cssSrc = './src/sass/**/*.scss';
var cssDist = './dist/css/';
var cssWatch = [ cssSrc ];

var purgeContent = ['**/*.php', 'src/**/*.js'];
var { purgeWLP } = require(projectVars);

// JS
var jsSrc = './src/js/**/*.js';
var jsDist = './dist/js/';
var jsWatch = [ jsSrc ];

// PHP
var phpWatch = [
    './**/*.php',
    '!node_modules/**',
    '!lib/**',
    '!vendor/**',
];

// Images
var imgSrc = './src/img/**/*.{png,jpg,gif,svg)}';
var imgDist = './dist/img/';
var imgWatch = [ imgSrc ];

// Fonts
var fontsSrc = './src/fonts/**/*.ttf';
var fontsDist = './dist/fonts/';
var fontsWatch = [ fontsSrc ];

// Icons
var iconsSrc = './node_modules/@fortawesome/fontawesome-free/js/all.js';
var { iconsUsed } = require(projectVars);

// Libs
var navwalkerSrc = './vendor/**/class-wp-bootstrap-navwalker.php';
var navwalkerDist = './lib/navwalker/';

// Zip package
var pkgSrc = [
    './**',
    '!.vscode/**',
    '!tools/**',
    '!node_modules/**',
    '!packages/**',
    '!src/**',
    '!vendor/**',
    '!.browserslistrc',
    '!.directory',
    '!.gitignore',
    '!gulpfile.js',
    '!README.md',
    '!*.json',
    '!*.lock',
    '!*.todo',
];
var pkgDist = 'packages/';

// Browser Sync
var { siteUrl } = require(projectVars);


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
            cascade: false
        }))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(purgecss({
            content: purgeContent,
            whitelistPatterns: purgeWLP,
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


// --- Icons functions ---

function icons(done) {
    src(iconsSrc)
        .pipe(rename('fa5.min.js')) 
        .pipe(faMinify(iconsUsed))
        .pipe(uglify())
        .pipe(dest(jsDist))
    done();
};


// --- Setup functions ---

function dirs(done) {
    src('*.*', {read: false})
        .pipe(dest('./src/fonts'))
        .pipe(dest('./src/img'))
    done();
};

function libs(done) {
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
        proxy: siteUrl,
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
exports.icons = icons;

exports.setup = series(dirs, libs); 

exports.pkg = pkg;

exports.default = parallel(css, js, img, fonts, icons);
exports.watch = parallel(browser_sync, watch_files);
