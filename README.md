# Laravel Validation Rules

A set of laravel validation rules

## Installation

You can install the package via composer:

```bash
composer require kcdev/laravel-validation-rules
```

You need to publish:
```bash
php artisan vendor:publish --provider="Kcdev\ValidationRules\ValidationRulesServiceProvider"
```

## Available Rules
- `basic_password`
- `current_password`

## Usage

```php
$request->validate([
    'old_password' => 'required|current_password',
    'new_password' => 'required|basic_password|confirmed',
]);
```

### Security

If you discover any security related issues, please email amiruddinmarmul@gmail.com instead of using the issue tracker.

## Credits

- [Amir Marmul](https://github.com/amirmarmul)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
