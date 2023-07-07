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
        string $baseUri = 'https://payroll-api.silae.fr',
        ClientInterface $httpClient = null
    ): Client
    {
        // Find a default HTTP client if none provided
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
        }

        // Decorates the HTTP client with some plugins
        $hostUri = Psr17FactoryDiscovery::findUriFactory()->createUri($baseUri);
        $pathUri = Psr17FactoryDiscovery::findUriFactory()->createUri($baseUri.'/payroll');
        $pluginClient = new PluginClient($httpClient, [
            new AddHostPlugin($hostUri),
            new AddPathPlugin($pathUri)
        ]);

        $authenticationRegistry = new AuthenticationRegistry([new OAuth2AuthenticationPlugin([
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
            'urlAuthorize' => '',
            'urlAccessToken' => 'https://payroll-api-auth.silae.fr/oauth2/v2.0/token',
            'urlResourceOwnerDetails' => '',
        ])]);

        return Client::create($pluginClient, [$authenticationRegistry]);
    }
}