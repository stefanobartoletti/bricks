![Bricks](https://repository-images.githubusercontent.com/170774557/10d31c80-75ea-11eb-8adc-1b7b7d15f46c)


<div align="center">

_A modular WordPress starter theme built with Bootstrap_

---

</div>

## 🪄 Features

Bricks features:
- [Bootstrap 4](https://getbootstrap.com/) (compiled from source Sass files, JavaScript with [Bootstrap Native](https://github.com/thednp/bootstrap.native/)).
- [WP Bootstrap Navwalker](https://github.com/wp-bootstrap/wp-bootstrap-navwalker).
- [Font Awesome 5](https://fontawesome.com/) (_SVG with JavaScript_ version, parsed and minified by [gulp-fa-minify](https://github.com/FA-Minify/gulp-fa-minify)).
- [Autoprefixer](https://autoprefixer.github.io/).
- [PurgeCSS](https://purgecss.com/).
- [Rollup](https://www.rollupjs.org/) and [Babel](https://babeljs.io/).
- [BrowserSync](https://www.browsersync.io/).
- Automatic conversion of custom fonts into *woff/woff2* web formats.
- Support for localization, with a task that creates a `.pot` [template file](https://developer.wordpress.org/themes/functionality/internationalization/).
- Support for integration of some optional libraries ([aos](https://michalsnik.github.io/aos/), [lightgallery.js](https://sachinchoolur.github.io/lightgallery.js/), [swiper](https://swiperjs.com/)).

## 📦 Requirements

- [Git](https://git-scm.com/) to clone this repository.
- [Npm](https://nodejs.org/) or [Yarn](https://yarnpkg.com/) to manage dependencies and run tasks (Yarn is the preferred tool and will be used in the examples inside this documentation).
## 🛠️ Installation

- Run `git clone https://github.com/stefanobartoletti/bricks.git` inside the `wp-content/themes` directory in your WordPress installation
- (Optional) delete `.git` directory inside the newly created `bricks` theme folder and run `git init` to initialize a new repository from scratch.
- Run `yarn` to install dependencies and perform the initial setup.

## ⚙️ Configuration

Some configuration variables are available in `.config.js`.
Options listed under *Project Variables* can be edited on a per-project basis, while *Path Variables* define paths used by Gulp tasks and they usually should be left unmodified.

*Project Variables* are:

- **`textdomain`**: WordPress theme [text domain](https://developer.wordpress.org/themes/functionality/internationalization/#text-domain), used for localizations. You don't always need to edit this, `yarn build` will update all localization functions with this value if modified. Please note that you also need to manually set this value in `load_theme_textdomain()` inside `functions/setup.php` if you modify it.
- **`siteURL`**: local development URL, used by BrowserSync as the [local proxy](https://www.browsersync.io/docs/api#api-init).
- **`cssSafelist`**: an array of values used as a [safelist for PurgeCSS](https://purgecss.com/safelisting.html).
- **`usedIcons`**: a whitelist of icons used by [gulp-fa-minify](https://github.com/FA-Minify/gulp-fa-minify), a Gulp plugin which removes unused icons from FontAwesome 5 when using _SVG with JavaScript_, to reduce the bundle size.

## 📜 Scripts

Yarn is the preferred way to run development tasks:
- **`yarn dev`** quickly compiles all resources for a local development environment (it is also run as a post-install script after the initial installation).
- **`yarn watch`** starts both the watcher and BrowserSync to automatically compile resources during local development.
- **`yarn build`** compiles all resources with all the optimizations required for a production environment (minification, treeshaking).

These scripts run individual sub-tasks, which manage CSS (Sass compilation, Autoprefixer, PurgeCSS, minification), JavaScript (Rollup, Babel, minification), images (imagemin), fonts (conversion into web formats), icons (*Font Awesome 5* optimization) and localization.
  
## 🗂️ Folder structure

- **`acf-json`**: support for ACF [local JSON](https://www.advancedcustomfields.com/resources/local-json/) (delete this directory if you don't use this feature).
- **`dist`**: compiled resources built by Gulp and directly loaded into the theme.
- **`functions`**: modularization of functions.php file
  - **`functions/cpt`**: Custom Post Types and Taxonomies definitions.
  - **`functions/lib`**: Third-party php resources (i.e. wp-bootstrap-navwalker).
- **`languages`**: translations files.
- **`src`**: uncompiled source files, ready to be edited and customized.
  - **`src/fonts`**: custom font files (*ttf/otf* will be converted into web formats, *woff/woff2* will be simply copied).
  - **`src/img`**: source images (will be optimized with [_imagemin_](https://github.com/sindresorhus/gulp-imagemin)).
  - **`src/js`**: source JavaScript files (will be bundled by [Rollup](https://www.rollupjs.org)).
  - **`src/sass`**: source Sass files.
- **`templates`**: modularization of template files, to be called with *get_template_part()*;

## 📝 License

[GNU GPLv3](https://github.com/stefanobartoletti/bricks/blob/master/LICENSE.txt)