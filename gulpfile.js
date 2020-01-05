/**
 * Gulp general setup.
 * Project related variables are defined in tools/gulp-project.js to keep gulpfile.js clean.
 */

// --- Gulp ---

const { src, dest, watch, series, parallel } = require('gulp');


// --- Gulp plugins ---

// CSS
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const purgecss = require('gulp-purgecss');
const cleancss = require('gulp-clean-css');

// JS
const rollup = require('gulp-better-rollup');
const babel = require('rollup-plugin-babel');
const commonjs = require('@rollup/plugin-commonjs');
const resolve = require('@rollup/plugin-node-resolve');
const uglify = require('gulp-uglify');

// Images
const imagemin = require('gulp-imagemin');

// Fonts
const ttf2woff = require('gulp-ttf2woff');
const ttf2woff2 = require('gulp-ttf2woff2');

// Icons
const faMinify = require('gulp-fa-minify');

// Utility
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');
const zip = require('gulp-zip');
const del = require('del');
const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;
const ftp = require('vinyl-ftp');
const wpPot = require('gulp-wp-pot');

// Browser
const browserSync  = require('browser-sync').create();
const cache = require('gulp-cache');


// --- Variables ---

// Project variables file
const projectVars = './tools/gulp-project';
const ftpVars = './tools/gulp-ftp';

// CSS
const cssSrc = './src/sass/**/*.scss';
const cssDist = './dist/css/';
const cssWatch = [ cssSrc ];

const purgeContent = ['**/*.php', 'src/**/*.js', 'src/**/*.mjs'];
const { purgeWLP } = require(projectVars);

// JS
const jsSrc = './src/js/';
const jsDist = './dist/js/';
const jsEntry = [ jsSrc ] + 'scripts.js';
const jsWatch = [ jsSrc ] + '**/*.js';

// PHP
const phpWatch = [
    './**/*.php',
    '!node_modules/**',
    '!lib/**',
    '!vendor/**',
];

// Images
const imgSrc = './src/img/**/*.{png,jpg,gif,svg}';
const imgDist = './dist/img/';
const imgWatch = [ imgSrc ];

// Fonts
const fontsSrc = './src/fonts/**/*.ttf';
const fontsDist = './dist/fonts/';
const fontsWatch = [ fontsSrc ];

// Icons
const iconsSrc = './node_modules/@fortawesome/fontawesome-free/js/all.js';
const { iconsUsed } = require(projectVars);

// Production
const { prodFiles } = require(projectVars);
const { ftpLogin } = require(ftpVars);
const { ftpPath } = require(ftpVars);
const conn = ftp.create(ftpLogin);
const pkgDist = 'packages/';
const localeDist = 'languages/';
const { textdomain } = require(projectVars);

// Browser Sync
const { siteUrl } = require(projectVars);

// Environment

function setDev(done) {
    environments.current(development);
    done();
}

function setProd(done) {
    environments.current(production);
    done();
}


// --- CSS functions ---

function css() {
    return src(cssSrc)
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
            content: purgeContent,
            whitelistPatterns: purgeWLP,
        })))
        .pipe(production(cleancss()))
        .pipe(development(sourcemaps.write('./')))
        .pipe(dest(cssDist))
        .pipe(browserSync.stream());
};


// --- JS functions ---

function js() {
    return src(jsEntry)
        .pipe(development(sourcemaps.init()))
        .pipe(rollup({plugins: [babel(), commonjs(), resolve()]}, 'umd'))
        .pipe(production(uglify()))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(development(sourcemaps.write('./')))
        .pipe(dest(jsDist))
        .pipe(browserSync.stream());
};


// --- Images functions ---

function img() {
    return src(imgSrc)
        .pipe(imagemin({
            verbose: true
        }))
        .pipe(dest(imgDist))
        .pipe(browserSync.stream());
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

function icons() {
    return src(iconsSrc)
        .pipe(rename('fa5.min.js')) 
        .pipe(production(faMinify(iconsUsed)))
        .pipe(production(uglify()))
        .pipe(dest(jsDist));
};


// --- Utility functions ---

function clean() {
    return del('dist/**', {force:true});
};


// --- Production functions ---

function pkg() {
    return src(prodFiles, {base: '..'})
        .pipe(zip('archive.zip'))
        .pipe(dest(pkgDist));
};

function deploy() {
    return src(prodFiles, {base: '.', buffer: false})
        .pipe(conn.newerOrDifferentSize(ftpPath))
        .pipe(conn.dest(ftpPath));
};

function pot() {
    return src(phpWatch)
        .pipe(wpPot({
            domain: textdomain,
        }))
        .pipe(dest(localeDist+textdomain+'.pot'));
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

exports.pkg = pkg;
exports.deploy = deploy;
exports.pot = pot;

exports.default = series(setDev, clean, parallel(css, js, img, fonts, icons));
exports.prod = series(setProd, clean, parallel(css, js, img, fonts, icons, pot));
exports.watch = parallel(browser_sync, watch_files);
