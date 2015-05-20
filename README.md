# libphonenumber-laravel

This is a Service Provider and Facade package for the PHP library libphonenumber-for-php to make using the package with Laravel really easy.

[![Latest Stable Version](https://poser.pugx.org/ritey/libphonenumber-laravel/v/stable.svg)](https://packagist.org/packages/ritey/libphonenumber-laravel) [![Total Downloads](https://poser.pugx.org/ritey/libphonenumber-laravel/downloads.svg)](https://packagist.org/packages/ritey/libphonenumber-laravel) [![Latest Unstable Version](https://poser.pugx.org/ritey/libphonenumber-laravel/v/unstable.svg)](https://packagist.org/packages/ritey/libphonenumber-laravel) [![License](https://poser.pugx.org/ritey/libphonenumber-laravel/license.svg)](https://packagist.org/packages/ritey/libphonenumber-laravel)

## Composer

To install libphonenumber-laravel as a Composer package, simply add this to your composer.json:

```json
"ritey/libphonenumber-laravel": "dev-master"
```

..and run `composer update`.  Once it's installed, if you're using Laravel 5, you can register the service provider in `app/config/app.php` in the `providers` array add :

```php
'Ritey\LibPhoneNumberLaravel\LibPhoneNumberLaravelServiceProvider',
```

You can also benefit from using a Facade in Laravel 5 by adding to the alias array also in app.php below the providers array

```php
'LibPhoneNumber' => 'Ritey\LibPhoneNumberLaravel\LibPhoneNumberLaravelFacade',
```

## Copyright and Licence

libphonenumber-laravel has been coded by David Wright (@ritey) and is released under the MIT License.
