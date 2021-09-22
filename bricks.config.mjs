const config = {

  // --- Project variables ---

  textdomain: 'bricks',
  siteURL: 'http://localhost',

  enable: {
    purgecss: true
  },

  // Purgecss safelist https://purgecss.com/safelisting.html
  cssSafelist: [
    /^carousel-item.*/, // Bootstrap Carousel Animation
    /collapsing/, // Bootstrap Navbar Animation
    /show/ // Bootstrap Dropdown
  ],

  // gulp-fa-minify whitelisted icons https://github.com/FA-Minify/gulp-fa-minify
  // Light (Pro), Regular (Pro), Solid (Free), Brands (Free)
  faIconSafelist: {
    fal: [],
    far: [],
    fas: [
      'angle-up',
      'search'
    ],
    fab: [
      'facebook-f',
      'linkedin-in',
      'instagram',
      'twitter'
    ]
  },

  // --- Path variables ---

  css: {
    src: './src/sass/**/*.scss',
    dist: './dist/css/',
    watch: './src/sass/**/*.scss',
    content: [
      './**/*.php',
      './src/js/**/*.js'
    ]
  },

  js: {
    src: './src/js/*.js',
    dist: './dist/js/',
    watch: './src/js/**/*.js'
  },

  php: {
    watch: [
      './**/*.php',
      '!node_modules/**'
    ]
  },

  img: {
    src: './src/img/**/*.{png,jpg,gif,svg}',
    dist: './dist/img/',
    watch: './src/img/**/*.{png,jpg,gif,svg}'
  },

  fonts: {
    src: {
      ttf: './src/fonts/**/*.{otf,ttf}',
      woff: './src/fonts/**/*.{woff,woff2}'
    },
    dist: './dist/fonts/',
    watch: './src/fonts/**/*'
  },

  icons: {
    src: './node_modules/@fortawesome/fontawesome-free/js/all.js'
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
    ]
  }

};

export default config;
