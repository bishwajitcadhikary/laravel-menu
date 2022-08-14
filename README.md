# Menu and sidebar management package for Laravel

This package intends to create and manage menus and sidebars for your Laravel app. It ships with ready-to-go presenters and you can create your own ones.

## Getting Started

### 1. Install

Run the following command:

```bash
composer require bishwajitcadhikary/laravel-menu
```

### 2. Register

Service provider and facade will be registered automatically. If you want to register them manually in `config/app.php`:

```php
WovoSoft\Menu\Facade::class,
WovoSoft\Menu\Provider::class,
```

### 3. Publish

Publish config file.

```bash
php artisan vendor:publish --tag=menu
```

### 4. Configure

You can change the configuration from `config/menu.php` file

## Usage

Check out the [wiki](../../wiki) about the usage and further documentation.

## Changelog

Please see [Releases](../../releases) for more information what has changed recently.

## Contributing

Pull requests are more than welcome. You must follow the PSR coding standards.

## Credits

- [Bishwajit Adhikary](https://bishwajit.top)
- [Denis Duliçi](https://github.com/denisdulici)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [LICENSE](LICENSE.md) for more information.
