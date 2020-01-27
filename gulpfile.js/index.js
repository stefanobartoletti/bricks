/**
 * Gulp general setup.
 * Configuration & Project variables are defined in "config" directory.
 */

// --- Gulp ---

const { src, dest, watch, series, parallel } = require('gulp');


// --- Modules ---

const { css } = require('./css');
const { js } = require('./js');
const { img } = require('./img');
const { fonts } = require('./fonts');
const { icons } = require('./icons');
const { pot } = require('./i18n');
const { setDev, setProd, clean } = require('./utils');
const { setup, conf } = require('./setup');
const { pkg, deploy } = require('./prod');
const { browser_sync, reload, clearCache } = require('./browser');


// --- Configuration ---


const config = require('../config/config');
const project = require('../config/project');


// --- Functions ---

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
exports.pot = pot;

exports.pkg = pkg;
exports.deploy = deploy;

exports.setup = setup;
exports.conf = series(conf, pot);

exports.default = series(setDev, clean, parallel(css, js, img, fonts, icons));
exports.prod = series(setProd, clean, parallel(css, js, img, fonts, icons, pot));
exports.watch = parallel(browser_sync, watch_files);