<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\HttpPlugin;

use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use QdequippeTech\Silae\Model\AccessToken;

final class OAuth2AuthenticationPlugin implements AuthenticationPlugin
{
    private ?AccessToken $accessToken = null;
    private ClientInterface $httpClient;

    public function __construct(
        private readonly string $clientId,
        private readonly string $clientSecret,
    ) {
        $this->httpClient = Psr18ClientDiscovery::find();
    }

    /**
     * @throws ClientExceptionInterface
     */
    public function authentication(RequestInterface $request): RequestInterface
    {
        if (null === $this->accessToken || $this->accessToken->isExpired()) {
            $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
            $uri = Psr17FactoryDiscovery::findUriFactory()->createUri('https://payroll-api-auth.silae.fr/oauth2/v2.0/token');
            $uri->withQuery(http_build_query([
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'grant_type' => 'client_credentials',
                'scope' => 'https://silaecloudb2c.onmicrosoft.com/36658aca-9556-41b7-9e48-77e90b006f34/.default',
            ]));
            $authenticationRequest = $requestFactory->createRequest('POST', $uri);
            $authenticationRequest->withHeader('Content-Type', 'application/x-www-form-urlencoded');
            $response = $this->httpClient->sendRequest($authenticationRequest);

            if (200 === $response->getStatusCode()) {
                $this->accessToken = json_decode((string) $response->getBody(), true)['access_token'];
            }
        }

        return $request->withHeader(
            'Authorization', 'Bearer '.$this->accessToken
        );
    }

    public function getScope(): string
    {
        return 'oauth2';
    }
}
