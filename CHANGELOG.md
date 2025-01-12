# Changelog

All relevant changes in `mateusjunges/laravel-trackable-jobs` will be documented here.

### [v1.5.2 (2022-08-05)](https://github.com/mateusjunges/trackable-jobs-for-laravel/compare/1.5.1...v1.5.2)
### Fixed
- Fixed jobs being marked as failed without attempting any retries on [#36](https://github.com/mateusjunges/trackable-jobs-for-laravel/pull/36) by @DimaVIII

### [v1.5.1 (2022-06-02)](https://github.com/mateusjunges/trackable-jobs-for-laravel/compare/1.5.0...v1.5.1)
### Fixed
- Fixed Trackable to respect custom morph map [(#29)](https://github.com/mateusjunges/trackable-jobs-for-laravel/issues/29)

### [v1.5.0 (2022-04-12)](https://github.com/mateusjunges/trackable-jobs-for-laravel/compare/1.4.0...v1.5.0)
### Added
- Added support for Laravel v9.x

### [1.4.0 (2021-12-20)](https://github.com/mateusjunges/trackable-jobs-for-laravel/compare/1.3.0...1.4.0)
### Added
- Added `prunable` trait to base `TrackedJob` model

### Removed
- Drop support for laravel 7

### [1.3.0 (2021-10-25)](https://github.com/mateusjunges/trackable-jobs-for-laravel/compare/1.2.0...1.3.0)
### Fixed
- Fixes `Trackable namespace`

## [1.2.0 (2021-06-16)](https://github.com/mateusjunges/trackable-jobs-for-laravel/compare/1.1.3...1.2.0)
### Added
- Added support for UUID's ([#19](https://github.com/mateusjunges/trackable-jobs-for-laravel/issues/19))

## [1.1.3 (2021-04-22)](https://github.com/mateusjunges/trackable-jobs-for-laravel/compare/1.1.2...1.1.3)
### Added
- Added two new methods to be used with the package UI.

## [1.1.2 (2021-04-19)](https://github.com/mateusjunges/trackable-jobs-for-laravel/compare/1.1.1...1.1.2)
### Fixed
- Update docs in README.md

## [1.1.1 (2021-04-16)](https://github.com/mateusjunges/trackable-jobs-for-laravel/compare/1.1.0...1.1.1)
### Fixed
- Fixes [#6](https://github.com/mateusjunges/trackable-jobs-for-laravel/issues/6)

## [1.1.0 (2021-04-06)](https://github.com/mateusjunges/trackable-jobs-for-laravel/compare/1.0.0...1.1.0)
### Added
- Allow the `TrackedJob` model to be replaced with a new custom one.

### Fixed
- Improve docs.

## 1.0.0 (2021-04-06)
- Initial release.
