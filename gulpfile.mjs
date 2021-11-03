// --- Gulp ---

import gulp from 'gulp';

// --- Configuration ---

import config from './bricks.config.mjs';

// --- Plugins ---

// CSS
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
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

// Browser
import cache from 'gulp-cache';
import browserSync from 'browser-sync';

// Consts
const { src, dest, watch, series, parallel } = gulp;
const sass = gulpSass(dartSass);
const development = environments.development;
const production = environments.production;

// --- CSS ---

function css () {
  return src(config.css.src)
    .pipe(development(sourcemaps.init()))
    .pipe(sass({
      quietDeps: true
    }).on('error', sass.logError))
    .pipe(autoprefixer({
      cascade: false
    }))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(production(gulpif(config.enable.purgecss, purgecss({
      content: config.css.content,
      safelist: config.cssSafelist
    }))))
    .pipe(production(cleancss()))
    .pipe(development(sourcemaps.write('./')))
    .pipe(dest(config.css.dist))
    .pipe(browserSync.stream());
};

// --- JS ---

function js (done) {
  src(config.js.src)
    .pipe(development(sourcemaps.init()))
    .pipe(rollup({
      plugins: [
        babel({ babelHelpers: 'bundled' }),
        commonjs(),
        nodeResolve()
      ]
    }, { format: 'umd' }))
    .pipe(production(terser({
      format: {
        comments: false
      }
    })))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(development(sourcemaps.write('./')))
    .pipe(dest(config.js.dist))
    .pipe(browserSync.stream());
  done();
};

// --- Images ---

function img () {
  return src(config.img.src)
    .pipe(imagemin({
      // verbose: true
    }))
    .pipe(dest(config.img.dist))
    .pipe(browserSync.stream());
};

// --- Fonts ---

function fonts (done) {
  src(config.fonts.src.ttf)
    .pipe(ttf2woff2({
      ignoreExt: true
    }))
    .pipe(dest(config.fonts.dist))
    .pipe(browserSync.stream());
  src(config.fonts.src.woff)
    .pipe(dest(config.fonts.dist))
    .pipe(browserSync.stream());
  done();
};

// --- Icons ---

function icons () {
  return src(config.icons.src)
    .pipe(rename('fa5.min.js'))
    .pipe(production(faMinify(config.faIconSafelist)))
    .pipe(production(terser({
      format: {
        comments: false
      }
    })))
    .pipe(dest(config.js.dist));
};

// --- i18n ---

function domain () {
  return src(config.php.watch)
    .pipe(checktextdomain({
      text_domain: config.textdomain,
      keywords: config.i18n.functions,
      correct_domain: true
    }));
};

function pot () {
  return src(config.php.watch)
    .pipe(wpPot({
      domain: config.textdomain
    }))
    .pipe(dest(config.i18n.dist + 'template.pot'));
};

// --- Utils ---

function setDev (done) {
  environments.current(development);
  done();
};

function setProd (done) {
  environments.current(production);
  done();
};

function clean () {
  return del('dist/**', { force: true });
};

// --- Browser ---

function bsInit (done) {
  browserSync.init({
    open: false,
    injectChanges: true,
    proxy: config.siteURL
  });
  done();
};

function bsReload (done) {
  browserSync.reload();
  done();
};

function clearCache (done) {
  cache.clearAll();
  done();
};

function watchFiles (done) {
  watch(config.css.watch, series(css, clearCache, bsReload));
  watch(config.js.watch, series(js, clearCache, bsReload));
  watch(config.php.watch, series(clearCache, bsReload));
  watch(config.img.watch, series(img, clearCache, bsReload));
  watch(config.fonts.watch, series(fonts, clearCache, bsReload));
  done();
};

// --- Tasks ---

const i18n = series(domain, pot);
const dev = series(setDev, clean, parallel(css, js, img, fonts, icons));
const build = series(setProd, clean, parallel(css, js, img, fonts, icons, i18n));
const watcher = parallel(bsInit, watchFiles);

export { css, js, img, fonts, icons, i18n, dev, build, watcher as watch };
export default dev;
