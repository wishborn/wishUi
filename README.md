# WishUI

WishUI is an elegant collection of pre-built Livewire components designed to accelerate your Laravel application development. Built with Livewire and Volt, these components provide a beautiful, responsive, and interactive user interface right out of the box.

## Features

- 🎨 **Elegant Design**: Modern and clean components that follow best UI/UX practices
- ⚡ **Livewire Powered**: Built on top of Livewire v3, providing real-time interactivity without complexity
- 🔌 **Easy Integration**: Simple installation process with auto-discovery support
- 📱 **Responsive**: All components are fully responsive and work great on any device
- 🎯 **Ready to Use**: Pre-built components that you can start using immediately

## Installation

You can install the package via composer:

```bash
composer require wishborn/wish-ui
```

The package will automatically register its service provider with Laravel.

## Available Components

### Alert Component
A versatile alert component for displaying messages, notifications, and feedback:
- Multiple styles (success, error, warning, info)
- Dismissible alerts
- Custom icons support
- Animated transitions

### Tabs Component
A flexible tabs component for organizing content:
- Dynamic tab switching
- Customizable tab styles
- Support for icons
- Responsive design

## Usage

### Alert Component
```php
<livewire:wish-ui.alert type="success" dismissible>
    Your changes have been saved successfully!
</livewire:wish-ui.alert>
```

### Tabs Component
```php
<livewire:wish-ui.tabs>
    <livewire:wish-ui,tab name="Profile" :active="true">
        Profile content here...
    </livewire:wish-ui.tab>
    <livewire:wish-ui.tab name="Settings">
        Settings content here...
    </livewire:wish-ui.tab>
</livewire:wish-ui.tabs>
```

## Customization

You can publish the views to customize them according to your needs:

```bash
php artisan vendor:publish --tag="wish-ui-views"
```

## Requirements

- PHP 8.1 or higher
- Laravel 10.x or higher
- Livewire 3.x
- Volt 1.x

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on recent changes.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Credits

- [Wish Born](https://github.com/wishborn)
- [All Contributors](../../contributors)

## Support

If you discover any issues or have questions, please [create an issue](https://github.com/wishborn/wish-ui/issues). 