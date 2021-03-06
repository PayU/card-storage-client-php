[![Travis CI](https://travis-ci.org/PayU/card-storage-client-php.svg)](https://travis-ci.org/PayU/card-storage-client-php) [![Latest Stable Version](https://poser.pugx.org/payu/card-storage-client-php/v/stable.svg)](https://packagist.org/packages/payu/card-storage-client-php) [![Total Downloads](https://poser.pugx.org/payu/card-storage-client-php/downloads.svg)](https://packagist.org/packages/payu/card-storage-client-php) [![License](https://poser.pugx.org/payu/card-storage-client-php/license.svg)](https://packagist.org/packages/payu/card-storage-client-php)

## Prerequisites

 * PHP 5.6 and above
 * curl extension with support for OpenSSL
 * PHPUnit 4.2.0 for running test suite (Optional)
 * Composer (Optional)

## Composer

You can install the library via [Composer](http://getcomposer.org/).
1. Method #1
 - Run
```bash
composer require payu/card-storage-client-php
```
2. Method #2
 - Add this to your composer.json
```bash
    {
      "require": {
        "payu/card-storage-client-php": "^0.1.0"
      }
    }
```
 - Then install via:
```bash
    composer install
```
To use the library, include Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading]):

    require_once('vendor/autoload.php');

To use the examples, add the following to the example script:

    require_once('/path/to/vendor/autoload.php');

## Manual Installation

Obtain the latest version of the PayU Card Storage Client Library with:

    git clone https://github.com/PayU/card-storage-client-php.git

To use the Library, add the following to your PHP script:

    require_once __DIR__ . '/path/to/card-storage-client-php/src/init.php';

To use the examples, add the following to the example script:

    require_once __DIR__ . '/../src/init.php';

## Getting Started

You can find usage examples in the examples directory:

* cardStorageExample.php - Minimal requirements for getting card info based on a card number
