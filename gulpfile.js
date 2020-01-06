/**
 * Gulp general setup.
 * Configuration & Project variables are defined in "config" directory.
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


// --- Configuration Variables ---

const config = require('./config/config.json');
const project = require('./config/project.json');
const ftpConfig = require('./config/ftp.json');

const conn = ftp.create(ftpConfig.login);


// --- Environment functions ---

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


// --- JS functions ---

function js() {
    return src(config.js.src)
        .pipe(development(sourcemaps.init()))
        .pipe(rollup({plugins: [babel(), commonjs(), resolve()]}, 'umd'))
        .pipe(production(uglify()))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(development(sourcemaps.write('./')))
        .pipe(dest(config.js.dist))
        .pipe(browserSync.stream());
};


// --- Images functions ---

function img() {
    return src(config.img.src)
        .pipe(imagemin({
            verbose: true
        }))
        .pipe(dest(config.img.dist))
        .pipe(browserSync.stream());
};


// --- Fonts functions ---

function fonts(done) {
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


// --- Icons functions ---

function icons() {
    return src(config.icons.src)
        .pipe(rename('fa5.min.js')) 
        .pipe(production(faMinify(project.icons.used)))
        .pipe(production(uglify()))
        .pipe(dest(config.js.dist));
};


// --- Utility functions ---

function clean() {
    return del('dist/**', {force:true});
};


// --- Production functions ---

function pkg() {
    return src(project.files.production, {base: '..'})
        .pipe(zip(project.textdomain+'.zip'))
        .pipe(dest(config.pkg.dist));
};

function deploy() {
    return src(project.files.production, {base: '.', buffer: false})
        .pipe(conn.newerOrDifferentSize(ftpConfig.path))
        .pipe(conn.dest(ftpConfig.path));
};

function pot() {
    return src(config.php.watch)
        .pipe(wpPot({
            domain: project.textdomain,
        }))
        .pipe(dest(config.i18n.dist+project.textdomain+'.pot'));
};


// --- Browser functions ---

function browser_sync(done) {
	browserSync.init({
        open: false,
        injectChanges: true,
        // server: { baseDir: './dist/' },
        proxy: project.siteurl,
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
    watch(config.css.watch, series(css, clearCache, reload));
    watch(config.js.watch, series(js, clearCache, reload));
    watch(config.php.watch, series(clearCache, reload));
    watch(config.img.watch, series(img, clearCache, reload));
    watch(config.fonts.watch, series(fonts, clearCache, reload));
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
