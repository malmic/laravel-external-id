# Create a morph-table to keep track of external id/relationship

[![Latest Version on Packagist](https://img.shields.io/packagist/v/eeappdev/laravel-external-id.svg?style=flat-square)](https://packagist.org/packages/eeappdev/laravel-external-id)
[![Total Downloads](https://img.shields.io/packagist/dt/eeappdev/laravel-external-id.svg?style=flat-square)](https://packagist.org/packages/eeappdev/laravel-external-id)

When you are working with an external API, and need to syncronize clients, products, services, categories or like, this package help you to store the external id for all the models you want.

This package provides a `HasExternalId` trait that, once installed on a model, allows you to do things like this:

```php
// Store (update or create) the external id
$model->addExternalId('external_unique_id');

// Remove/unlink an external ID
$model->removeExternalId();

// Get the external ID
$model->getExternalID();

// Get all external information
$model->external()
```

## Installation

You can install the package via composer:

```bash
composer require eeappdev/laravel-external-id
```

You must publish the migration with:
```bash
php artisan vendor:publish --provider="Eeappdev\ExternalId\ExternalIdServiceProvider" --tag="migrations"
```

Migrate the `external_ids` table:

```bash
php artisan migrate
```


## Usage

Add the `HasExternalId` trait to a model you like to use external relationships on.

```php
use Eeappdev\ExternalId\HasExternalId;

class Client extends Model
{
    use HasExternalId;
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
