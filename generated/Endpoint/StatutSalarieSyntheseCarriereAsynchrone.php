<?php

namespace QdequippeTech\Silae\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use QdequippeTech\Silae\Api\Exception\StatutSalarieSyntheseCarriereAsynchroneBadRequestException;
use QdequippeTech\Silae\Api\Exception\StatutSalarieSyntheseCarriereAsynchroneInternalServerErrorException;
use QdequippeTech\Silae\Api\Exception\StatutSalarieSyntheseCarriereAsynchroneUnauthorizedException;
use QdequippeTech\Silae\Api\Exception\UnexpectedStatusCodeException;
use QdequippeTech\Silae\Api\Model\ApiErrors;
use QdequippeTech\Silae\Api\Model\StatutSalarieSyntheseCarriereResponse;
use QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint;
use QdequippeTech\Silae\Api\Runtime\Client\Endpoint;
use QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class StatutSalarieSyntheseCarriereAsynchrone extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     * @var string $dossiers
     * @var string $Authorization Authorization de type Bearer.
     *             }
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/v1/InfosSalaries/StatutSalarieSyntheseCarriereAsynchrone';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    protected function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['guidTache']);
        $optionsResolver->setRequired(['guidTache']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('guidTache', ['string']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Ocp-Apim-Subscription-Key', 'dossiers', 'Authorization']);
        $optionsResolver->setRequired(['Authorization']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Ocp-Apim-Subscription-Key', ['string']);
        $optionsResolver->addAllowedTypes('dossiers', ['string']);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);

        return $optionsResolver;
    }

    /**
     * @return StatutSalarieSyntheseCarriereResponse
     *
     * @throws StatutSalarieSyntheseCarriereAsynchroneBadRequestException
     * @throws StatutSalarieSyntheseCarriereAsynchroneUnauthorizedException
     * @throws StatutSalarieSyntheseCarriereAsynchroneInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, StatutSalarieSyntheseCarriereResponse::class, 'json');
        }

        if (202 === $status) {
            return $serializer->deserialize($body, StatutSalarieSyntheseCarriereResponse::class, 'json');
        }

        if (400 === $status) {
            throw new StatutSalarieSyntheseCarriereAsynchroneBadRequestException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (401 === $status) {
            throw new StatutSalarieSyntheseCarriereAsynchroneUnauthorizedException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (500 === $status) {
            throw new StatutSalarieSyntheseCarriereAsynchroneInternalServerErrorException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
