# Bricks

_A modular WordPress starter theme built with Boostrap_

## Requirements

- [Git](https://git-scm.com/) to clone this repository.
- [Npm](https://nodejs.org/) or [Yarn](https://yarnpkg.com/) to manage dependencies and run tasks (Yarn is the preferred tool and will be used in the examples inside this documentation).
## Installation

- Run `git clone https://github.com/stefanobartoletti/bricks.git` inside the `wp-content/themes` directory in your WordPress installation
- (Optional) delete `.git` directory inside the newly created `bricks` theme folder and run `git init` to initialize a new repository from scratch.
- Run `yarn` to install dependencies and perform the initial setup.

## Configuration

## Scripts

Yarn is the preferred way to run development tasks:
- `yarn dev` quickly compiles all resources for a local development environment (it is also run after the initial installation).
- `yarn watch` starts both the watcher and BrowserSync to automatically compile resources during local development.
- `yarn build` compiles all resources with all the optimizations required for a production environment (minification, treeshaking).

## Features

This starter theme includes:
- [Bootstrap](https://getbootstrap.com/)
- [WP Bootstrap Navwalker](https://github.com/wp-bootstrap/wp-bootstrap-navwalker)
- [Font Awesome 5](https://fontawesome.com/)
## Folder structure

- `acf-json`: support for ACF [local JSON](https://www.advancedcustomfields.com/resources/local-json/) feature.
- `dist`: compiled resources built by Gulp and loaded into the theme.
- `functions`: modularization of functions.php file
- `functions/cpt`: Custom Post Types and Taxonomies definitions.
- `functions/lib`: Third-party php resources (i.e. wp-bootstrap-navwalker).
- `languages`: translations files.
- `src`: uncompiled source files, ready to be edited and customized.
- `templates`: modularization of template files, to be called with get_template_part();

## License