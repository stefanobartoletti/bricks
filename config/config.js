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
    }
    
}