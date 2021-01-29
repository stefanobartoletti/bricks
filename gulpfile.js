// --- Gulp ---

const { src, dest, watch, series, parallel } = require('gulp');


// --- Configuration ---

const config = require('./config/config');
const project = require('./config/project');


// --- Plugins ---

// CSS
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const purgecss = require('gulp-purgecss');
const cleancss = require('gulp-clean-css');

// JS
const rollup = require('@rbnlffl/gulp-rollup');
const babel = require('@rollup/plugin-babel').babel;
const commonjs = require('@rollup/plugin-commonjs');
const resolve = require('@rollup/plugin-node-resolve').nodeResolve;
const uglify = require('gulp-uglify');

// Images
const imagemin = require('gulp-imagemin');

// Fonts
const ttf2woff = require('gulp-ttf2woff');
const ttf2woff2 = require('gulp-ttf2woff2');

// Icons
const faMinify = require('gulp-fa-minify');

// i18n
const checktextdomain = require('gulp-checktextdomain')
const wpPot = require('gulp-wp-pot');

// Utils
const rename = require('gulp-rename');
const gulpif = require('gulp-if');
const del = require('del');
const fs = require('fs-extra')
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
            safelist: project.css.purge.safelist,
        })))
        .pipe(production(cleancss()))
        .pipe(development(sourcemaps.write('./')))
        .pipe(dest(config.css.dist))
        .pipe(browserSync.stream());
};


// --- JS ---

function js() {
    return src(config.js.src)
        .pipe(development(sourcemaps.init()))
        .pipe(rollup({
            plugins: [
                babel({ babelHelpers: 'bundled' }),
                commonjs(),
                resolve()
            ]},{ format: 'umd' }))
        .pipe(production(uglify()))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(development(sourcemaps.write('./')))
        .pipe(dest(config.js.dist))
        .pipe(browserSync.stream());
};


// --- Images ---

function localimg() {
    return src(config.img.src)
        .pipe(imagemin({
            verbose: true
        }))
        .pipe(dest(config.img.dist))
        .pipe(browserSync.stream());
};

function libimg() {
    return src(config.img.lg)
        .pipe(gulpif(project.use.lightgallery, dest(config.img.dist)))
        .pipe(browserSync.stream());
};


// --- Fonts ---

function localfonts(done) {
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

function libfonts() {
    return src(config.fonts.lg)
        .pipe(gulpif(project.use.lightgallery, dest(config.fonts.dist)))
        .pipe(browserSync.stream());
};


// --- Icons ---
function icons() {
    return src(config.icons.src)
        .pipe(rename('fa5.min.js')) 
        .pipe(production(faMinify(project.icons.used)))
        .pipe(production(uglify()))
        .pipe(dest(config.js.dist));
};


// --- i18n ---

function domain() {
    return src(config.php.watch)
        .pipe(checktextdomain({
            text_domain: project.textdomain,
            keywords: config.i18n.functions,
            correct_domain: true,
        }))
};

function pot() {
    return src(config.php.watch)
        .pipe(wpPot({
            domain: project.textdomain,
            package: project.name,
            lastTranslator: project.author+' <'+project.authorEmail+'>',
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
        // server: { baseDir: './dist/' },
        proxy: project.siteURL,
        // tunnel: "sbbase",
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

function watch_files(done) {
    watch(config.css.watch, series(css, clearCache, reload));
    watch(config.js.watch, series(js, clearCache, reload));
    watch(config.php.watch, series(clearCache, reload));
    watch(config.img.watch, series(parallel(localimg, libimg), clearCache, reload));
    watch(config.fonts.watch, series(parallel(localfonts, libfonts), clearCache, reload));
    done();
};

// --- Setup ---

function setup(done) {
    // create required directories
    config.setup.dirs.forEach(function (dir) {
        fs.ensureDir(dir);
    })
    done();
};


// --- Tasks ---

exports.css = css;
exports.js = js;
exports.img = parallel(localimg, libimg);
exports.fonts = parallel(localfonts, libfonts);
exports.icons = icons;
exports.pot = series(domain, pot);

exports.setup = setup;

exports.default = series(setDev, clean, parallel(css, js, parallel(localimg, libimg), parallel(localfonts, libfonts), icons));
exports.prod = series(setProd, clean, parallel(css, js, parallel(localimg, libimg), parallel(localfonts, libfonts), icons, domain, pot));
exports.watch = parallel(browser_sync, watch_files);
