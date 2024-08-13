# Laravel UI Kit

[![Latest Version on Packagist](https://img.shields.io/packagist/v/laravel-ui-kit/laravel-ui-kit.svg?style=flat-square)](https://packagist.org/packages/laravel-ui-kit/laravel-ui-kit)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel-ui-kit/laravel-ui-kit.svg?style=flat-square)](https://packagist.org/packages/laravel-ui-kit/laravel-ui-kit)
![GitHub Actions](https://github.com/laravel-ui-kit/laravel-ui-kit/actions/workflows/main.yml/badge.svg)

Laravel UI Kit is a comprehensive collection of customizable components built with Blade, TailwindCSS, and AlpineJS.

## Installation

### Install Laravel UI Kit

You can install Laravel UI Kit via Composer. Run the following command:

```bash
composer require laravel-ui-kit/laravel-ui-kit
```

### Install TailwindCSS

Ensure that TailwindCSS is installed in your Laravel project. If you're using starter kits like Jetstream or Breeze, TailwindCSS is included by default. Otherwise, follow the official TailwindCSS documentation for Laravel installation:

[Install TailwindCSS with Laravel](https://tailwindcss.com/docs/guides/laravel)

### Install AlpineJS

Verify that AlpineJS is installed in your Laravel project. It's included by default if you're using Jetstream, Breeze, or Livewire. For manual installation, refer to the AlpineJS documentation:

[Install AlpineJS with Laravel](https://alpinejs.dev/essentials/installation)

### Update TailwindCSS config

TailwindCSS requires paths to all HTML templates, JavaScript components, and other source files containing Tailwind class names.

Add the following paths to your `tailwind.config.js` file:

```javascript
/* tailwind.config.js */

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './config/ui-kit.php',
        './vendor/laravel-ui-kit/laravel-ui-kit/config/ui-kit.php',
    ],
    // ... rest of your config
};
```

This configuration ensures that TailwindCSS processes all necessary files, including those from Laravel UI Kit.

### For older Laravel versions (<5.5)

For Laravel versions prior to 5.5, you need to manually register the service provider and facade.

## Usage

For usage and examples, please visit our documentation:

[Laravel UI Kit](https://laravel-ui-kit.com)

### Testing

TBD

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email harrison@harlew.com instead of using the issue tracker.

## Credits

- [Harlew.com](https://harlew.com)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
