# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog][Keep a Changelog] and this project adheres to [Semantic Versioning][Semantic Versioning].

## [0.21.0] - 2021-05-19

### Changed 
- Replaced outdated `gulp-uglify` with `gulp-terser` as JavaScript minifier
- Bump rollup from 2.46.0 to 2.48.0
- Bump @rollup/plugin-node-resolve from 11.2.1 to 13.0.0
- Bump @rollup/plugin-commonjs from 18.0.0 to 19.1.0
- Bump @babel/preset-env from 7.14.0 to 7.14.2
- Bump @babel/core from 7.14.0 to 7.14.3
- Bump bootstrap.native from 3.0.14 to 3.0.15
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
- Bump @babel/core from 7.13.16 to 7.14.0
- Bump @babel/preset-env from 7.13.15 to 7.14.0
- Bump rollup from 2.45.2 to 2.46.0

## [0.20.0] - 2021-04-27

### Added
- First public and documented version
- Adoption of a changelog under [Keep a Changelog][Keep a Changelog] standard


<!-- Links -->
[Keep a Changelog]: https://keepachangelog.com/
[Semantic Versioning]: https://semver.org/

<!-- Versions -->
[Unreleased]: https://github.com/stefanobartoletti/bricks/compare/master...devel

[0.21.0]: https://github.com/stefanobartoletti/bricks/compare/v0.20.2...v0.21.0
[0.20.2]: https://github.com/stefanobartoletti/bricks/compare/v0.20.1...v0.20.2
[0.20.1]: https://github.com/stefanobartoletti/bricks/compare/v0.20.0...v0.20.1
[0.20.0]: https://github.com/stefanobartoletti/bricks/releases/v0.20.0
