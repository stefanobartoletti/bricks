// --- Gulp ---

const { src, dest } = require('gulp');


// --- Plugins ---

const fs = require('fs-extra')


// --- Configuration ---

const config = require('../config/config');
const project = require('../config/project');


// --- Functions ---

function setup(done) {
    // create required directories
    config.setup.dirs.forEach(function (dir) {
        fs.ensureDir(dir);
    })
    // copy required files
    fs.copy(config.setup.ftpconf.src, config.setup.ftpconf.dist, { overwrite: false })
    fs.copy(config.setup.navwalker.src, config.setup.navwalker.dist)
    done();
};


// --- Exports ---

exports.setup = setup;