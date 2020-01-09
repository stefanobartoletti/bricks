// --- Gulp ---

const {} = require('gulp');


// --- Plugins ---

const cache = require('gulp-cache');

const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;

const browserSync  = require('browser-sync').create();


// --- Configuration ---

const config = require('../config/config');
const project = require('../config/project');


// --- Functions ---

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


// --- Exports ---

exports.browser_sync = browser_sync;
exports.reload = reload;
exports.clearCache = clearCache;