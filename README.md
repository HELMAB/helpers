# Helpers for Laravel

[comment]: <> ([![Latest Version on Packagist]&#40;https://img.shields.io/packagist/v/asorasoft/helpers.svg?style=flat-square&#41;]&#40;https://packagist.org/packages/asorasoft/helpers&#41;)
[comment]: <> ([![Total Downloads]&#40;https://img.shields.io/packagist/dt/asorasoft/helpers.svg?style=flat-square&#41;]&#40;https://packagist.org/packages/asorasoft/helpers&#41;)
[comment]: <> (![GitHub Actions]&#40;https://github.com/asorasoft/helpers/actions/workflows/main.yml/badge.svg&#41;)

Helper functions

## Installation

You can install the package via composer:

```bash
composer require asorasoft/helpers
```

## Available Methods

- `message_error($message, $statusCode = 404)` return `Illumate\Http\Response` 
- `message_sucess($data)` return `Illumate\Http\Response`
- `message_pagination($paginate, $number_per_page)` return `Illumate\Http\Response`
- `to_khmer_number($str)` return `String`
- `to_standard_number($str)` return `String`
- `get_random_str()` return `String`
- `in_development` return `Boolean`
- `is_production` return `Boolean`
- `get_phone_with_country_code($str)` return `String`
- `get_phone_without_country_code($str)` return `String`
- `my_logs($err, Exception $e)` Logging errors

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email mab@asorasoft.com instead of using the issue tracker.

## Credits

-   [Hel Mab](https://github.com/helmab)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
