// --- Gulp ---

const { src, dest, watch, series, parallel } = require('gulp');


// --- Configuration ---

const config = require('./bricks.config');


// --- Plugins ---

// CSS
const { sass } = require('@mr-hope/gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const purgecss = require('gulp-purgecss');
const cleancss = require('gulp-clean-css');

// JS
const rollup = require('@rbnlffl/gulp-rollup');
const babel = require('@rollup/plugin-babel').babel;
const commonjs = require('@rollup/plugin-commonjs');
const resolve = require('@rollup/plugin-node-resolve').nodeResolve;
const terser = require('gulp-terser');

// Images
const imagemin = require('gulp-imagemin');

// Fonts
const ttf2woff2 = require('gulp-ttf2woff2');

// Icons
const faMinify = require('gulp-fa-minify');

// i18n
const checktextdomain = require('gulp-checktextdomain');
const wpPot = require('gulp-wp-pot');

// Utils
const rename = require('gulp-rename');
const gulpif = require('gulp-if');
const del = require('del');
const sourcemaps = require('gulp-sourcemaps');

const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;

// Browser
const cache = require('gulp-cache');
const browserSync  = require('browser-sync').create();


// --- CSS ---

function css() {
    return src(config.css.src)
        .pipe(development(sourcemaps.init()))
        .pipe(sass({
            quietDeps: true
        }).on("error", sass.logError))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(production(gulpif(config.enable.purgecss, purgecss({
            content: config.css.content,
            safelist: config.cssSafelist,
        }))))
        .pipe(production(cleancss()))
        .pipe(development(sourcemaps.write('./')))
        .pipe(dest(config.css.dist))
        .pipe(browserSync.stream());
};


// --- JS ---

function js(done) {
    src(config.js.src)
        .pipe(development(sourcemaps.init()))
        .pipe(rollup({
            plugins: [
                babel({ babelHelpers: 'bundled' }),
                commonjs(),
                resolve()
            ]},{ format: 'umd' }))
        .pipe(production(terser({
            format: {
                comments: false,
            },
        })))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(development(sourcemaps.write('./')))
        .pipe(dest(config.js.dist))
        .pipe(browserSync.stream())
    done();
};


// --- Images ---

function img() {
    return src(config.img.src)
        .pipe(imagemin({
            // verbose: true
        }))
        .pipe(dest(config.img.dist))
        .pipe(browserSync.stream());
};


// --- Fonts ---

function fonts(done) {
    src(config.fonts.src.ttf)
        .pipe(ttf2woff2({
            ignoreExt: true,
        }))
        .pipe(dest(config.fonts.dist))
        .pipe(browserSync.stream())
    src(config.fonts.src.woff)
        .pipe(dest(config.fonts.dist))
        .pipe(browserSync.stream())       
    done();
};


// --- Icons ---

function icons() {
    return src(config.icons.src)
        .pipe(rename('fa5.min.js')) 
        .pipe(production(faMinify(config.faIconSafelist)))
        .pipe(production(terser({
            format: {
                comments: false,
            },
        })))
        .pipe(dest(config.js.dist));
};


// --- i18n ---

function domain() {
    return src(config.php.watch)
        .pipe(checktextdomain({
            text_domain: config.textdomain,
            keywords: config.i18n.functions,
            correct_domain: true,
        }))
};

function pot() {
    return src(config.php.watch)
        .pipe(wpPot({
            domain: config.textdomain,
        }))
        .pipe(dest(config.i18n.dist+'template.pot'));
};


// --- Utils ---

function setDev(done) {
    environments.current(development);
    done();
};

function setProd(done) {
    environments.current(production);
    done();
};

function clean() {
    return del('dist/**', {force:true});
};


// --- Browser ---

function browser_sync(done) {
	browserSync.init({
        open: false,
        injectChanges: true,
        proxy: config.siteURL,
    });
    done();
};

function reload(done) {
    browserSync.reload();
    done();
};

function clearCache(done) {
    cache.clearAll();
    done();
};

function watchFiles(done) {
    watch(config.css.watch, series(css, clearCache, reload));
    watch(config.js.watch, series(js, clearCache, reload));
    watch(config.php.watch, series(clearCache, reload));
    watch(config.img.watch, series(img, clearCache, reload));
    watch(config.fonts.watch, series(fonts, clearCache, reload));
    done();
};


// --- Tasks ---

exports.css = css;
exports.js = js;
exports.img = img;
exports.fonts = fonts;
exports.icons = icons;
exports.pot = series(domain, pot);

exports.default = series(setDev, clean, parallel(css, js, img, fonts, icons));
exports.build = series(setProd, clean, parallel(css, js, img, fonts, icons, series(domain, pot)));
exports.watch = parallel(browser_sync, watchFiles);
