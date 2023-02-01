# PHP Ok

[![Latest Version on Packagist](https://img.shields.io/packagist/v/salamwaddah/ok.svg?style=flat-square)](https://packagist.org/packages/salamwaddah/ok)
[![Total Downloads](https://img.shields.io/packagist/dt/salamwaddah/ok.svg?style=flat-square)](https://packagist.org/packages/salamwaddah/ok)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

## Installation

```bash
composer require salamwaddah/ok
```

## Usage

```php
// directly using constant
$ok = Ok::OK; // returns 'ok'

// using method
$ok = new Ok();
$ok = $ok->ok(); // returns 'ok'
```

## Tests

> vendor/bin/phpunit

## License

The PHP Ok is open-sourced software licensed under the [MIT license](LICENSE).
