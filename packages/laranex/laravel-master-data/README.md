# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/laranex/laravel-master-data.svg?style=flat-square)](https://packagist.org/packages/laranex/laravel-master-data)
[![Total Downloads](https://img.shields.io/packagist/dt/laranex/laravel-master-data.svg?style=flat-square)](https://packagist.org/packages/laranex/laravel-master-data)
![GitHub Actions](https://github.com/laranex/laravel-master-data/actions/workflows/main.yml/badge.svg)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require laranex/laravel-master-data
```

## Usage

```php
// Usage description here
```

## Example Model

```php
<?php

namespace App\Models;

class User extends Model
{
   
    /**
     * The attributes that should be hidden in master data.
     *
     * @var array<int, string>
     */
    public $unpublished = [
        'password',
    ];

    /**
     * The attributes that should be sortable in master data.
     *
     * @var array<int, string>
     */
    public $sortable = [
        'name',
        'email',
        'age',
    ];

    /**
     * The attributes that should be searchable in master data.
     *
     * @var array<int, string>
     */
    public $searchable = [
        'name',
        'email',
    ];

    /**
     * The attributes that should be filterable in master data.
     *
     * @var array<string, array<string, string>>
     */
    public $filterable = [
        'created_at' => [
            'type' => 'date',
            'format' => 'YYYY-MM-DD',
        ],
        'gender' => [
            'type' => 'select',
            'options' => [
                'male',
                'female',
            ],
        ],
        'age' => [
            'type' => 'range',
            'min' => 0,
            'max' => 100,
        ],
    ];
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email thixpin@gmail.com instead of using the issue tracker.

## Credits

-   [Soe Thura](https://github.com/thixpin)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
