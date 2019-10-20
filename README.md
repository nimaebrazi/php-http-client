# PHP HTTP Client

## Installation
### composer
```composer require nimaebrazi/php-http-client```

## Usage

ClientFactory methods return a instance of Client contract.

```php
require_once "vendor/autoload.php";

$response = \NimaEbrazi\HttpClient\ClientFactory::guzzle()->get('YOUR_URL');
$response = \NimaEbrazi\HttpClient\ClientFactory::guzzle()->post('YOUR_URL');
$response = \NimaEbrazi\HttpClient\ClientFactory::guzzle()->put('YOUR_URL');
```
### Client Option
If client has special config, you can pass it to factory methods:

```php
$response = \NimaEbrazi\HttpClient\ClientFactory::guzzle([
                'config_key' => 'config_value
             '])->get('YOUR_URL');
```

### Request Options
You can also pass request option

```php
$response = \NimaEbrazi\HttpClient\ClientFactory::guzzle()->get('YOUR_URL', ['OPTION_KEY' => 'OPTION_VALUE']);
```
