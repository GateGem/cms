# This is GateGem CMS(Content Management System)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/GateGem/cms.svg?style=flat-square)](https://packagist.org/packages/GateGem/cms)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/GateGem/cms/run-tests?label=tests)](https://github.com/GateGem/cms/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/GateGem/cms/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/GateGem/cms/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/GateGem/cms.svg?style=flat-square)](https://packagist.org/packages/GateGem/cms)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.


## Installation

You can install the package via composer:

```bash
composer require gategem/cms
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="cms-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="cms-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="cms-views"
```


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Nguyen Van Hau](https://github.com/GateGem)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
