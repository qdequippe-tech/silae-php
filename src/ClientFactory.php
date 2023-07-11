<?php

declare(strict_types=1);

namespace QdequippeTech\Silae;

use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use QdequippeTech\Silae\Api\Client;
use QdequippeTech\Silae\HttpPlugin\OAuth2AuthenticationPlugin;

final class ClientFactory
{
    public static function create(
        string $clientId,
        string $clientSecret,
    ): Client {
        $authenticationRegistry = new AuthenticationRegistry([new OAuth2AuthenticationPlugin($clientId, $clientSecret)]);

        return Client::create(null, [$authenticationRegistry]);
    }
}
