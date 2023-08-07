<?php

declare(strict_types=1);

namespace QdequippeTech\Silae;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\HeaderAppendPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;
use QdequippeTech\Silae\Api\Client;

final class ClientFactory
{
    public static function create(
        string $token,
        ClientInterface $httpClient = null,
    ): Client {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
        }

        $uri = Psr17FactoryDiscovery::findUriFactory()->createUri('https://payroll-api.silae.fr/payroll');

        $pluginClient = new PluginClient($httpClient, [
            new AddHostPlugin($uri),
            new AddPathPlugin($uri),
            new HeaderAppendPlugin([
                'Authorization' => 'Bearer '.$token,
            ]),
        ]);

        return Client::create($pluginClient);
    }
}
