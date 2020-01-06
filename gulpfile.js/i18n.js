// --- Gulp ---

const { src, dest } = require('gulp');


// --- Plugins ---

const wpPot = require('gulp-wp-pot');

const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;


// --- Configuration ---

const config = require('../config/config.json');
const project = require('../config/project.json');


// --- Functions ---

function pot() {
    return src(config.php.watch)
        .pipe(wpPot({
            domain: project.textdomain,
        }))
        .pipe(dest(config.i18n.dist+project.textdomain+'.pot'));
};


// --- Exports ---

exports.pot = pot;