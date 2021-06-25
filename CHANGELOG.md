# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog][Keep a Changelog] and this project adheres to [Semantic Versioning][Semantic Versioning].

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

[0.22.1]: https://github.com/stefanobartoletti/bricks/compare/v0.22.0...v0.22.1
[0.22.0]: https://github.com/stefanobartoletti/bricks/compare/v0.21.3...v0.22.0
[0.21.3]: https://github.com/stefanobartoletti/bricks/compare/v0.21.2...v0.21.3
[0.21.2]: https://github.com/stefanobartoletti/bricks/compare/v0.21.1...v0.21.2
[0.21.1]: https://github.com/stefanobartoletti/bricks/compare/v0.21.0...v0.21.1
[0.21.0]: https://github.com/stefanobartoletti/bricks/compare/v0.20.2...v0.21.0
[0.20.2]: https://github.com/stefanobartoletti/bricks/compare/v0.20.1...v0.20.2
[0.20.1]: https://github.com/stefanobartoletti/bricks/compare/v0.20.0...v0.20.1
[0.20.0]: https://github.com/stefanobartoletti/bricks/releases/v0.20.0
