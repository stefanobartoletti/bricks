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
            '!vendor/**',
        ]
    },

    // --- Images ---

    img: {
        src: './src/img/**/*.{png,jpg,gif,svg}',
        dist: './dist/img/',
        watch: './src/img/**/*.{png,jpg,gif,svg}',
        lg: './node_modules/lightgallery.js/src/img/*.*',
    },

    // --- Fonts ---

    fonts: {
        src: './src/fonts/**/*.ttf',
        dist: './dist/fonts/',
        watch: './src/fonts/**/*.ttf',
        lg: './node_modules/lightgallery.js/src/fonts/*.*',
    },

    // --- Icons ---

    icons: {
        src: './node_modules/@fortawesome/fontawesome-free/js/all.js',
    },

    // --- Translations ---

    i18n: {
        dist: './languages/',
        functions: [
            '__:1,2d',
            '_e:1,2d',
            '_x:1,2c,3d',
            'esc_html__:1,2d',
            'esc_html_e:1,2d',
            'esc_html_x:1,2c,3d',
            'esc_attr__:1,2d',
            'esc_attr_e:1,2d',
            'esc_attr_x:1,2c,3d',
            '_ex:1,2c,3d',
            '_n:1,2,4d',
            '_nx:1,2,4c,5d',
            '_n_noop:1,2,3d',
            '_nx_noop:1,2,3c,4d'
        ],
    },

    // --- Production ---

    prod: {
        files: [
            'acf-json/**/*',
            'dist/**/*',
            'functions/**/*',
            'languages/**/*',
            'templates/**/*',
            'vendor/**/*',
            '*.php',
            'screenshot.png',
            'style.css',
        ],
        pkg: {
            dist: './packages/',
        },
        versioned: [
            './config/project.js',
            './package.json',
            './composer.json',
            './style.css',
        ]   
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
        stylecss: {
            content: [
                '/*'+
                '\nTheme Name: '+project.name+
                '\nTheme URI: '+project.URL+
                '\nAuthor: '+project.author+' <'+project.authorEmail+'>'+
                '\nAuthor URI: '+project.authorURL+
                '\nDescription: '+project.desc+
                '\nVersion: '+project.version+
                '\nLicense: '+project.license+
                '\nLicense URI: '+project.licenseURL+
                '\nText Domain: '+project.textdomain+
                '\n*/'
            ],
            dist: './style.css',
        },
        jsonfiles: {
            package: {
                'name': project.textdomain,
                'description': project.desc,
                'author': project.author+' <'+project.authorEmail+'>',
                'version': project.version,
            },
            composer: {
                'name': 'stefano-b/'+project.textdomain,
                'description': project.desc,
                'authors': [{
                    'name': project.author,
                    'email': project.authorEmail,
                    'homepage': project.authorURL,
                    }],
                'version': project.version,
            },
        }

    }
    
}