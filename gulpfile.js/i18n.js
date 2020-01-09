// --- Gulp ---

const { src, dest } = require('gulp');


// --- Plugins ---

const wpPot = require('gulp-wp-pot');

const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;


// --- Configuration ---

const config = require('../config/config');
const project = require('../config/project');


// --- Functions ---

function pot() {
    return src(config.php.watch)
        .pipe(wpPot({
            domain: project.textdomain,
            package: project.name,
            lastTranslator: project.author+' <'+project.authorEmail+'>',
        }))
        .pipe(dest(config.i18n.dist+project.textdomain+'.pot'));
};


// --- Exports ---

exports.pot = pot;