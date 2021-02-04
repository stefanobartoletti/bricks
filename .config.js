module.exports = {

    // --- Project variables ---

    textdomain: 'bricks',
    siteURL: 'http://localhost',

    csspurge: {
        // Purgecss whitelists
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

    icons: {
        used: {
            // faMinify used icons
            // Light (Pro), Regular (Pro), Solid (Free), Brands (Free)
            fal: [],
            far: [],
            fas: [ 
                'angle-up',
                'envelope',
                'share-alt',
                'search',
            ],
            fab: [ 
                'facebook-f',
                'linkedin-in',
                'instagram',
                'twitter',
                'pinterest-p',
                'get-pocket',
                'telegram-plane',
                'whatsapp',
            ] 
        }
    },

    // --- Path variables ---

    css: {
        src: './src/sass/**/*.scss',
        dist: './dist/css/',
        watch: './src/sass/**/*.scss',   
        content: [
            './**/*.php',
            './src/js/**/*.js',
            './src/js/**/*.mjs',
        ]
    },

    js: {
        src: './src/js/**/*.js',
        dist: './dist/js/',
        watch: [
            './src/js/**/*.js',
            './src/js/**/*.mjs',
        ]
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
        src: './src/fonts/**/*.ttf',
        dist: './dist/fonts/',
        watch: './src/fonts/**/*.ttf',
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
        lg: './node_modules/lightgallery.js',
    }, 

    setup: {
        dirs: [
            './src/fonts/',
            './src/img/',
        ]
    }
    

}