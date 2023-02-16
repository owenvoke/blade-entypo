# Blade Entypo

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-github-actions]][link-github-actions]
[![Static Analysis][ico-static-analysis]][link-static-analysis]
[![Total Downloads][ico-downloads]][link-downloads]
[![Buy us a tree][ico-treeware-gifting]][link-treeware-gifting]

A package to easily make use of [Entypo](http://entypo.com) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](./resources/svg).

## Documentation for older versions

You are reading the documentation for `2.x`.

If you're using Laravel 8 or below, please see the [docs for 1.x][link-1.x-docs].

Please see the [upgrade guide](UPGRADE.md) for information on how to upgrade to the latest version.

## Requirements

- PHP 8.0 or higher
- Laravel 9.0 or higher

## Install

Via Composer

```shell
$ composer require owenvoke/blade-entypo
```

## Configuration

Blade Entypo also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-entypo.php` config file:

```shell
php artisan vendor:publish --tag=blade-entypo-config
```

## Usage

Icons can be used a self-closing Blade components which will be compiled to SVG icons:

```blade
<x-entypo-cloud/>
```

You can also pass classes to your icon components:

```blade
<x-entypo-cloud class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-entypo-cloud style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```shell
php artisan vendor:publish --tag=blade-entypo --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-entypo/cloud.svg') }}" width="10" height="10"/>
```

### Blade Icons

Blade Entypo uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

```bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email security@voke.dev instead of using the issue tracker.

## Credits

- [Owen Voke][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Treeware

You're free to use this package, but if it makes it to your production environment you are required to buy the world a tree.

It’s now common knowledge that one of the best tools to tackle the climate crisis and keep our temperatures from rising above 1.5C is to plant trees. If you support this package and contribute to the Treeware forest you’ll be creating employment for local families and restoring wildlife habitats.

You can buy trees [here][link-treeware-gifting].

Read more about Treeware at [treeware.earth][link-treeware].

[ico-version]: https://img.shields.io/packagist/v/owenvoke/blade-entypo.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-github-actions]: https://img.shields.io/github/actions/workflow/status/owenvoke/blade-entypo/tests.yml?branch=main&style=flat-square&label=Tests
[ico-static-analysis]: https://img.shields.io/github/actions/workflow/status/owenvoke/blade-entypo/static.yml?branch=main&style=flat-square&label=Static%20Analysis
[ico-downloads]: https://img.shields.io/packagist/dt/owenvoke/blade-entypo.svg?style=flat-square
[ico-treeware-gifting]: https://img.shields.io/badge/Treeware-%F0%9F%8C%B3-lightgreen?style=flat-square

[link-packagist]: https://packagist.org/packages/owenvoke/blade-entypo
[link-github-actions]: https://github.com/owenvoke/blade-entypo/actions
[link-static-analysis]: https://github.com/owenvoke/blade-entypo/actions/workflows/static.yml
[link-downloads]: https://packagist.org/packages/owenvoke/blade-entypo
[link-treeware]: https://treeware.earth
[link-treeware-gifting]: https://ecologi.com/owenvoke?gift-trees
[link-1.x-docs]: https://github.com/owenvoke/blade-entypo/blob/1.x/README.md
[link-author]: https://github.com/owenvoke
[link-contributors]: ../../contributors
