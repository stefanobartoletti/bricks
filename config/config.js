const project = require('../config/project');

module.exports = {

    // --- CSS ---

    css: {
        src: './src/sass/**/*.scss',
        dist: './dist/css/',
        watch: './src/sass/**/*.scss',
        purge: {
            content: [
                './**/*.php',
                './src/js/**/*.js',
                './src/js/**/*.mjs',
            ]
        }
    },

    // --- JS ---

    js: {
        src: './src/js/**/*.js',
        dist: './dist/js/',
        watch: [
            './src/js/**/*.js',
            './src/js/**/*.mjs',
        ]
    },

    // --- PHP ---

    php: {
        watch: [
            './**/*.php',
            '!node_modules/**',
            '!lib/**',
            '!vendor/**',
        ]
    },

    // --- Images ---

    img: {
        src: './src/img/**/*.{png,jpg,gif,svg}',
        dist: './dist/img/',
        watch: './src/img/**/*.{png,jpg,gif,svg}',
    },

    // --- Fonts ---

    fonts: {
        src: './src/fonts/**/*.ttf',
        dist: './dist/fonts/',
        watch: './src/fonts/**/*.ttf',
    },

    // --- Icons ---

    icons: {
        src: './node_modules/@fortawesome/fontawesome-free/js/all.js',
    },

    // --- Translations ---

    i18n: {
        dist: './languages/',
    },

    // --- Production ---

    prod: {
        files: [
            'dist/**/*',
            'functions/**/*',
            'languages/**/*',
            'lib/**/*',
            'templates/**/*',
            '*.php',
            'screenshot.png',
            'style.css',
        ],
        pkg: {
            dist: './packages/',
        }   
    },

    // --- Setup ---

    setup: {
        dirs: [
            './src/fonts/',
            './src/img/',
        ],
        ftpconf: {
            src: './config/ftp.js.sample',
            dist: './config/ftp.js',
        },
        navwalker: {
            src: './vendor/wp-bootstrap/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php',
            dist: './lib/class-wp-bootstrap-navwalker.php',
        },
        stylecss: {
            content: [
                '/*'+
                '\nTheme Name: '+project.name+
                '\nTheme URI: '+project.URL+
                '\nAuthor: '+project.author+' <'+project.authorEmail+'>'+
                '\nAuthor URI: '+project.authorURL+
                '\nDescription: '+project.desc+
                '\nVersion: '+//version+
                '\nLicense: '+project.license+
                '\nLicense URI: '+project.licenseURL+
                '\nText Domain: '+project.textdomain+
                '\n*/'
            ],
            dist: './style.css',
        },

    }
    
}