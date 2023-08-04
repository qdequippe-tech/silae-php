<?php

declare(strict_types=1);

namespace QdequippeTech\Silae;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Psr\Http\Client\ClientInterface;
use QdequippeTech\Silae\Api\Client;
use QdequippeTech\Silae\HttpPlugin\OAuth2AuthenticationPlugin;

final class ClientFactory
{
    public static function create(
        string $clientId,
        string $clientSecret,
        ClientInterface $httpClient = null,
    ): Client {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
        }

        $authenticationRegistry = new AuthenticationRegistry([
            new OAuth2AuthenticationPlugin($clientId, $clientSecret, $httpClient),
        ]);

        $uri = Psr17FactoryDiscovery::findUriFactory()->createUri('https://payroll-api.silae.fr/payroll');
        $plugins[] = new AddHostPlugin($uri);
        $plugins[] = new AddPathPlugin($uri);
        $plugins[] = $authenticationRegistry;

        $pluginClient = new PluginClient($httpClient, $plugins);

        return Client::create($pluginClient, [$authenticationRegistry]);
    }
}
