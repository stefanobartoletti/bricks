module.exports = {

    // --- Project variables ---

    textdomain: 'bricks',
    siteURL: 'http://localhost',

    csspurge: {
        // Purgecss safelist https://purgecss.com/safelisting.html
        safelist: [
            /^carousel-item.*/,     // Bootstrap Carousel Animation
            /collapsing/,           // Bootstrap Navbar Animation
            /show/,                 // Bootstrap Dropdown
                            
            /form-group/,           // Used in cf7
            /form-control/,
            /form-check/,
            /form-check-input/,
            /btn-block/,
        ]
    },

    usedicons: {
        // gulp-fa-minify whitelisted icons https://github.com/FA-Minify/gulp-fa-minify
        // Light (Pro), Regular (Pro), Solid (Free), Brands (Free)
        fal: [],
        far: [],
        fas: [ 
            'angle-up',
            'search',
        ],
        fab: [ 
            'facebook-f',
            'linkedin-in',
            'instagram',
            'twitter',
        ] 
    },

    // --- Path variables ---

    css: {
        src: './src/sass/**/*.scss',
        dist: './dist/css/',
        watch: './src/sass/**/*.scss',   
        content: [
            './**/*.php',
            './src/js/**/*.js',
        ]
    },

    js: {
        src: './src/js/*.js',
        dist: './dist/js/',
        watch: './src/js/**/*.js',
    },

    php: {
        watch: [
            './**/*.php',
            '!node_modules/**',
        ]
    },

    img: {
        src: './src/img/**/*.{png,jpg,gif,svg}',
        dist: './dist/img/',
        watch: './src/img/**/*.{png,jpg,gif,svg}',
        lg: './node_modules/lightgallery.js/src/img/*.*',
    },

    fonts: {
        src: {
            ttf: './src/fonts/**/*.{otf,ttf}',
            woff: './src/fonts/**/*.{woff,woff2}',
        },
        dist: './dist/fonts/',
        watch: './src/fonts/**/*',
        lg: './node_modules/lightgallery.js/src/fonts/*.*',
    },

    icons: {
        src: './node_modules/@fortawesome/fontawesome-free/js/all.js',
    },

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

    libs: {
        bs: [
            // './node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
            './node_modules/bootstrap.native/dist/bootstrap-native.min.js',
            './node_modules/@popperjs/core/dist/umd/popper.min.js',
        ],
        lg: './node_modules/lightgallery.js',
    }, 

    setup: {
        dirs: [
            './src/fonts/',
            './src/img/',
        ]
    }
    

}