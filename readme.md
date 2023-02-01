# PHP Ok

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
