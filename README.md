# With this optional Package you can easiely call heartbeats for sinusrhythm.de

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

## Credits

- [Patrick Flügge](https://github.com/schruptor)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
