# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [0.0.3.4] - 2024-03-21

### Changed
- Updated README examples to use correct Livewire component syntax
- Fixed component naming convention in examples (using dots instead of colons)

## [0.0.3.3] - 2024-03-21

### Changed
- Updated Laravel requirement from laravel/laravel to laravel/framework
- Improved component registration in service provider

## [0.0.3.2] - 2024-03-21

### Added
- Set minimum-stability to dev with prefer-stable
- Added explicit PHP version requirement (^8.1)

## [0.0.3.1] - 2024-03-21

### Changed
- Updated composer.json package configuration

## [0.0.3] - 2024-03-21

### Changed
- Extended Laravel compatibility to support both Laravel 10.x and 11.x
- Updated documentation to reflect broader Laravel version support

## [0.0.2] - 2024-03-21

### Fixed
- Removed duplicate service provider file from root directory
- Consolidated service provider functionality in `src/Providers/WishUiServiceProvider.php`

## [0.0.1] - 2024-03-21

### Added
- Initial release of the WishUI package
- Alert component with support for different styles and dismissible functionality
- Tabs component with dynamic tab switching and content management
- Tab subcomponent for individual tab items
- Basic Laravel service provider setup
- Component registration and auto-discovery
- Initial Livewire integration
- Basic Heroicons integration

[Unreleased]: https://github.com/wish/wish-ui/compare/v0.0.3.4...HEAD
[0.0.3.4]: https://github.com/wish/wish-ui/compare/v0.0.3.3...v0.0.3.4
[0.0.3.3]: https://github.com/wish/wish-ui/compare/v0.0.3.2...v0.0.3.3
[0.0.3.2]: https://github.com/wish/wish-ui/compare/v0.0.3.1...v0.0.3.2
[0.0.3.1]: https://github.com/wish/wish-ui/compare/v0.0.3...v0.0.3.1
[0.0.3]: https://github.com/wish/wish-ui/compare/v0.0.2...v0.0.3
[0.0.2]: https://github.com/wish/wish-ui/compare/v0.0.1...v0.0.2
[0.0.1]: https://github.com/wish/wish-ui/releases/tag/v0.0.1 