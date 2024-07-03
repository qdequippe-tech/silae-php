<?php

declare(strict_types=1);

namespace QdequippeTech\Silae;

use Http\Discovery\Psr17FactoryDiscovery;
use Psr\Http\Client\ClientExceptionInterface;
use QdequippeTech\Silae\Api\Client as ApiClient;
use QdequippeTech\Silae\Model\AccessToken;

final class Client extends ApiClient
{
    /**
     * @throws ClientExceptionInterface
     */
    public function authenticate(
        string $clientId,
        string $clientSecret,
        string $grantType = 'client_credentials',
        string $scope = 'https://silaecloudb2c.onmicrosoft.com/36658aca-9556-41b7-9e48-77e90b006f34/.default',
    ): ?AccessToken {
        $uri = Psr17FactoryDiscovery::findUriFactory()->createUri('https://payroll-api-auth.silae.fr/oauth2/v2.0/token');
        $uri = $uri->withQuery(http_build_query([
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'grant_type' => $grantType,
            'scope' => $scope,
        ]));
        $authenticationRequest = $this->requestFactory->createRequest('POST', $uri);
        $authenticationRequest = $authenticationRequest->withHeader('Content-Type', 'application/x-www-form-urlencoded');

        $response = $this->httpClient->sendRequest($authenticationRequest);

        if (200 === $response->getStatusCode()) {
            $data = json_decode((string) $response->getBody(), true);

            return new AccessToken(
                $data['access_token'],
                $data['token_type'],
                $data['not_before'],
                $data['expires_in'],
                $data['expires_on'],
                $data['resource'],
            );
        }

        return null;
    }
}
