// --- Gulp ---

import gulp from 'gulp';


// --- Configuration ---

import config from './bricks.config.js';


// --- Plugins ---

// CSS
import { sass } from '@mr-hope/gulp-sass';
import autoprefixer from 'gulp-autoprefixer';
import purgecss from 'gulp-purgecss';
import cleancss from 'gulp-clean-css';

// JS
import rollup from '@rbnlffl/gulp-rollup';
import { babel } from '@rollup/plugin-babel';
import commonjs from '@rollup/plugin-commonjs';
import nodeResolve from '@rollup/plugin-node-resolve';
import terser from 'gulp-terser';

// Images
import imagemin from 'gulp-imagemin';

// Fonts
import ttf2woff2 from 'gulp-ttf2woff2';

// Icons
import faMinify from 'gulp-fa-minify';

// i18n
import checktextdomain from 'gulp-checktextdomain';
import wpPot from 'gulp-wp-pot';

// Utils
import rename from 'gulp-rename';
import gulpif from 'gulp-if';
import del from 'del';
import sourcemaps from 'gulp-sourcemaps';

import environments from 'gulp-environments';
const development = environments.development;
const production = environments.production;

// Browser
import cache from 'gulp-cache';
import browserSync from 'browser-sync';


// --- CSS ---

function css() {
    return gulp.src(config.css.src)
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
        .pipe(gulp.dest(config.css.dist))
        .pipe(browserSync.stream());
};


// --- JS ---

function js(done) {
    gulp.src(config.js.src)
        .pipe(development(sourcemaps.init()))
        .pipe(rollup({
            plugins: [
                babel({ babelHelpers: 'bundled' }),
                commonjs(),
                nodeResolve()
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
        .pipe(gulp.dest(config.js.dist))
        .pipe(browserSync.stream())
    done();
};


// --- Images ---

function img() {
    return gulp.src(config.img.src)
        .pipe(imagemin({
            // verbose: true
        }))
        .pipe(gulp.dest(config.img.dist))
        .pipe(browserSync.stream());
};


// --- Fonts ---

function fonts(done) {
    gulp.src(config.fonts.src.ttf)
        .pipe(ttf2woff2({
            ignoreExt: true,
        }))
        .pipe(gulp.dest(config.fonts.dist))
        .pipe(browserSync.stream())
    gulp.src(config.fonts.src.woff)
        .pipe(gulp.dest(config.fonts.dist))
        .pipe(browserSync.stream())       
    done();
};


// --- Icons ---

function icons() {
    return gulp.src(config.icons.src)
        .pipe(rename('fa5.min.js')) 
        .pipe(production(faMinify(config.faIconSafelist)))
        .pipe(production(terser({
            format: {
                comments: false,
            },
        })))
        .pipe(gulp.dest(config.js.dist));
};


// --- i18n ---

function domain() {
    return gulp.src(config.php.watch)
        .pipe(checktextdomain({
            text_domain: config.textdomain,
            keywords: config.i18n.functions,
            correct_domain: true,
        }))
};

function pot() {
    return gulp.src(config.php.watch)
        .pipe(wpPot({
            domain: config.textdomain,
        }))
        .pipe(gulp.dest(config.i18n.dist+'template.pot'));
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
    gulp.watch(config.css.watch, gulp.series(css, clearCache, reload));
    gulp.watch(config.js.watch, gulp.series(js, clearCache, reload));
    gulp.watch(config.php.watch, gulp.series(clearCache, reload));
    gulp.watch(config.img.watch, gulp.series(img, clearCache, reload));
    gulp.watch(config.fonts.watch, gulp.series(fonts, clearCache, reload));
    done();
};


// --- Tasks ---

const i18n = gulp.series(domain, pot);
const dev = gulp.series(setDev, clean, gulp.parallel(css, js, img, fonts, icons));
const build = gulp.series(setProd, clean, gulp.parallel(css, js, img, fonts, icons, gulp.series(domain, pot)));
const watch = gulp.parallel(browser_sync, watchFiles);

export { css, js, img, fonts, icons, i18n, dev, build, watch };
export default dev;