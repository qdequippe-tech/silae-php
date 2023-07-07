<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\HttpPlugin;

use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;
use League\OAuth2\Client\OptionProvider\PostAuthOptionProvider;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Provider\GenericProvider;
use League\OAuth2\Client\Token\AccessTokenInterface;
use Psr\Http\Message\RequestInterface;

final class OAuth2AuthenticationPlugin implements AuthenticationPlugin
{
    private ?AccessTokenInterface $accessToken;
    private AbstractProvider $provider;

    public function __construct(array $options = [])
    {
        $this->provider = new GenericProvider($options, [
            'optionProvider' => new PostAuthOptionProvider(),
        ]);
        $this->accessToken = null;
    }

    public function authentication(RequestInterface $request): RequestInterface
    {
        if ($this->accessToken === null || $this->accessToken?->hasExpired() === true) {
            $this->accessToken = $this->provider->getAccessToken(
                'client_credentials'
            );
        }

        return $request->withHeader(
            'Authorization', 'Bearer ' . $this->accessToken
        );
    }

    public function getScope(): string
    {
        return 'oauth2';
    }
}