// --- Gulp ---

const {} = require('gulp');


// --- Plugins ---

const del = require('del');

const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;


// --- Functions ---

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


// --- Exports ---

exports.setDev = setDev;
exports.setProd = setProd;
exports.clean = clean;