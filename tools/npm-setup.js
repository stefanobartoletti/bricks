/**
 * NPM postinstall setup
 */

// --- Load modules ---

const fs = require('fs-extra');


// --- Dirs ---

fs.ensureDir('./src/fonts/');
fs.ensureDir('./src/img/');

// --- Files ---

fs.copy('./tools/gulp-ftp.js.sample', './tools/gulp-ftp.js', { overwrite: false })


// --- Libs ---

const walkerSrc = './vendor/wp-bootstrap/wp-bootstrap-navwalker/';
const walkerDest = './lib/navwalker/';
const walkerName = 'class-wp-bootstrap-navwalker.php';

fs.copy(walkerSrc + walkerName, walkerDest + walkerName)