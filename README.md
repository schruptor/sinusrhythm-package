# With this Package you can easiely call heartbeats for sinusrhythm.de

With this optional Package for [sinusrhythm.dev](https://sinusrhythm.dev) you can easily call a provided UUID.

## Installation

You can install the package via composer:

```bash
composer require schruptor/sinusrhythm
```

## Usage

```php
$uuid = 'UUID from sinusrhythm.dev'

Schruptor\Sinusrhythm::ping($uuid);
```

or you can use the trait

```php
use Schruptor\HasSinusrhythm;

protected string $uuid = 'UUID from sinusrhythm.dev';
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Patrick Flügge](https://github.com/schruptor)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
