# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog][Keep a Changelog] and this project adheres to [Semantic Versioning][Semantic Versioning].

## [0.30.2] - 2022-06-27

### Changed
- Updated Dependencies

## [0.30.1] - 2022-05-17

### Fixed
- Fixed Pattern Library syntax

## [0.30.0] - 2022-05-17

### Added
- Added support to configure compression value for images

### Changed
- Added responsive image examples to the pattern library
- Moved image sizes functions out from the default setup to their own action
- Updated Dependencies

### Fixed
- Added filter to properly style active items on nav-menus with Bootstrap Nav-Walker

## [0.29.1] - 2022-04-04

### Security
- Secondary dependencies security updates

## [0.29.0] - 2022-03-16

### Added
- Added a new Pattern Library page to test and showcase Bootstrap custom theme

### Changed
- Redesigned Homepage
- Updated Dev Dependencies

## [0.28.0] - 2022-02-17

### Changed
- Updated Font Awesome to version 6
- Updated templates to use the [new Font Awesome 6 syntax](https://fontawesome.com/docs/web/setup/upgrade/whats-changed) 
- Renamed the compiled Font Awesome file from `fa5.min.js` to `fontawesome.min.js`
- Updated Dev Dependencies

### Fixed
- Fixed flex layout in the footer

## [0.27.3] - 2022-01-24

### Changed
- Updated Dev Dependencies

### Security
- Secondary dependencies security updates

## [0.27.2] - 2022-01-17

### Changed
- Updated Dev Dependencies

### Security
- Secondary dependencies security updates

## [0.27.1] - 2022-01-10

### Changed
- Updated Dev Dependencies

## [0.27.0] - 2021-11-03

### Added
- Added translations for some languages:
  - 🇨🇿 Czech (contributed by [PapuleX](https://github.com/PapuleX))
  - 🇫🇷 French (contributed by [Tititesouris](https://github.com/Tititesouris))
  - 🇩🇪 German (contributed by [m1ga](https://github.com/m1ga))
  - 🇱🇹 Lithuanian (contributed by [mantasio](https://github.com/mantasio))
  - 🇪🇸 Spanish (contributed by [aitorres](https://github.com/aitorres))
- Added [Contributing](https://github.com/stefanobartoletti/bricks/blob/master/.github/CONTRIBUTING.md) guidelines

### Changed
- Replaced `@mr-hope/gulp-sass` with the updated version of `gulp-sass`, which now uses `dart-sass` instead of the deprecated `node-sass`
- Updated Dev Dependencies

### Fixed
- Minor bug fixes

## [0.26.0] - 2021-09-22

### Added
- Added ESLint for JavaScript code linting and formatting
- Added Stylelint for CSS/SASS code linting and formatting
- Added phpcs for PHP code linting and formatting (with WordPress coding standards)

### Changed
- Updated Dev Dependencies

## [0.25.0] - 2021-08-29

### Changed
- Updated Bootstrap to version 5.1.0
- Updated Font Awesome to version 5.15.4
- Converted `gulpfile.js` from CommonJS to ESM
- Updated localization files
- Updated Dev Dependencies
- Moved release-it configuration to package.json

### Removed
- Removed TripAdisor icon and custom field (no longer supported by FontAwesome)

## [0.24.0] - 2021-08-04

### Added
- Added filters to disable the block editor for widgets (introduced by WordPress 5.8)

### Changed
- Updated localizations files
- Updated Dev Dependencies

### Security

- Security update of secondary dependencies in yarn.lock

## [0.23.0] - 2021-07-07

### Changed
- Updated Bootstrap to version 5.
- Updated theme template files to new Bootstrap standards and best practices.
- Removed bootstrap.native (no longer needed as Bootstrap 5 doesn't have jQuery as dependency)
- Updated Dev Dependencies

## [0.22.1] - 2021-06-25

### Changed
- Updated Dev Dependencies

### Security

- Security update of secondary dependencies in yarn.lock

## [0.22.0] - 2021-06-14

### Changed
- Refactored `functions/integrations/acf.php` for cleaner code.
- Refactored `functions/cleanup.php` for cleaner code; separated functions in smaller scopes.
- Bump bootstrap.native from 3.0.14 to 4.0.1
- Added version strings to static resources.
- Replaced `gulp-sass` with `@mr-hope/gulp-sass`, which uses `dart-sass` instead of the deprecated `node-sass`
- Updated Dev Dependencies

## [0.21.3] - 2021-06-01

### Fixed
- Revert bootstrap.native to version 3.0.14

## [0.21.2] - 2021-05-31

### Changed 
- Updated Dev Dependencies

### Fixed
- Security update ws from 7.4.2 to 7.4.6

## [0.21.1] - 2021-05-26

### Changed 
- Updated Dev Dependencies

### Fixed
- Security update browserslist from 4.16.1 to 4.16.6

## [0.21.0] - 2021-05-19

### Changed 
- Bump bootstrap.native from 3.0.14 to 3.0.15
- Replaced outdated `gulp-uglify` with `gulp-terser` as JavaScript minifier
- Updated Dev Dependencies
- Minor updates to `README.md`

### Removed
- Removed unneeded `setup` task from Gulp
- Removed `fs-extra` dependency

### Fixed
- Add a condition that checks ACF existence before using its functions
- Minor fixes to `release-it` config

## [0.20.2] - 2021-05-09

### Security

- Security update of some dependencies in yarn.lock (`ua-parser-js`, `hosted-git-info`, `lodash`)

## [0.20.1] - 2021-04-30

### Added
- Added [release-it](https://github.com/release-it/release-it) config file

### Changed 
- Updated Dev Dependencies

## [0.20.0] - 2021-04-27

### Added
- First public and documented version
- Adoption of a changelog under [Keep a Changelog][Keep a Changelog] standard


<!-- Links -->
[Keep a Changelog]: https://keepachangelog.com/
[Semantic Versioning]: https://semver.org/

<!-- Versions -->
[Unreleased]: https://github.com/stefanobartoletti/bricks/compare/master...devel

[0.30.2]: https://github.com/stefanobartoletti/bricks/compare/v0.30.1...v0.30.2
[0.30.1]: https://github.com/stefanobartoletti/bricks/compare/v0.30.0...v0.30.1
[0.30.0]: https://github.com/stefanobartoletti/bricks/compare/v0.29.1...v0.30.0
[0.29.1]: https://github.com/stefanobartoletti/bricks/compare/v0.29.0...v0.29.1
[0.29.0]: https://github.com/stefanobartoletti/bricks/compare/v0.28.0...v0.29.0
[0.28.0]: https://github.com/stefanobartoletti/bricks/compare/v0.27.3...v0.28.0
[0.27.3]: https://github.com/stefanobartoletti/bricks/compare/v0.27.2...v0.27.3
[0.27.2]: https://github.com/stefanobartoletti/bricks/compare/v0.27.1...v0.27.2
[0.27.1]: https://github.com/stefanobartoletti/bricks/compare/v0.27.0...v0.27.1
[0.27.0]: https://github.com/stefanobartoletti/bricks/compare/v0.26.0...v0.27.0
[0.26.0]: https://github.com/stefanobartoletti/bricks/compare/v0.25.0...v0.26.0
[0.25.0]: https://github.com/stefanobartoletti/bricks/compare/v0.24.0...v0.25.0
[0.24.0]: https://github.com/stefanobartoletti/bricks/compare/v0.23.0...v0.24.0
[0.23.0]: https://github.com/stefanobartoletti/bricks/compare/v0.22.1...v0.23.0
[0.22.1]: https://github.com/stefanobartoletti/bricks/compare/v0.22.0...v0.22.1
[0.22.0]: https://github.com/stefanobartoletti/bricks/compare/v0.21.3...v0.22.0
[0.21.3]: https://github.com/stefanobartoletti/bricks/compare/v0.21.2...v0.21.3
[0.21.2]: https://github.com/stefanobartoletti/bricks/compare/v0.21.1...v0.21.2
[0.21.1]: https://github.com/stefanobartoletti/bricks/compare/v0.21.0...v0.21.1
[0.21.0]: https://github.com/stefanobartoletti/bricks/compare/v0.20.2...v0.21.0
[0.20.2]: https://github.com/stefanobartoletti/bricks/compare/v0.20.1...v0.20.2
[0.20.1]: https://github.com/stefanobartoletti/bricks/compare/v0.20.0...v0.20.1
[0.20.0]: https://github.com/stefanobartoletti/bricks/releases/v0.20.0

[unreleased]: https://github.com/stefanobartoletti/bricks/compare/v0.30.2...HEAD
