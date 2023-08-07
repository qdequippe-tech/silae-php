# PHP client for Silae's API

PHP library to communicate with [Silae REST API](https://silae-api.document360.io/api-rest/docs).

This SDK is generated automatically with [JanePHP](https://github.com/janephp/janephp).

## Installation

This library is built atop of [PSR-7](https://www.php-fig.org/psr/psr-7/) and
[PSR-18](https://www.php-fig.org/psr/psr-18/). So you will need to install some
implementations for those standard interfaces.

If no PSR-18 client or PSR-7 message factory is available yet in your project
or you don't know or don't care which one to use, just install some default:

```bash
composer require symfony/http-client nyholm/psr7
```

You can now install the  client:

```bash
composer require qdequippe-tech/silae-php
```

## Usage

```php
$client = new \QdequippeTech\Silae\ClientFactory::create();

$request = new \QdequippeTech\Silae\Api\Model\ListeDossiersRequest();
$request->setTypeDossiers(1);

$client->listeDossiers($request);
```

## Thanks

💙 [JoliCode PHP Slack Client](https://github.com/jolicode/slack-php-api)