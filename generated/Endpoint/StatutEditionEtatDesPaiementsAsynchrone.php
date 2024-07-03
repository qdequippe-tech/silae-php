<?php

namespace QdequippeTech\Silae\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use QdequippeTech\Silae\Api\Exception\StatutEditionEtatDesPaiementsAsynchroneBadRequestException;
use QdequippeTech\Silae\Api\Exception\StatutEditionEtatDesPaiementsAsynchroneInternalServerErrorException;
use QdequippeTech\Silae\Api\Exception\StatutEditionEtatDesPaiementsAsynchroneUnauthorizedException;
use QdequippeTech\Silae\Api\Model\ApiErrors;
use QdequippeTech\Silae\Api\Model\StatutAsynchroneDocumentResponse;
use QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint;
use QdequippeTech\Silae\Api\Runtime\Client\Endpoint;
use QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class StatutEditionEtatDesPaiementsAsynchrone extends BaseEndpoint implements Endpoint
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
        return '/v1/EditionEtatsPaie/StatutEditionEtatDesPaiementsAsynchrone';
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
     * @return StatutAsynchroneDocumentResponse|null
     *
     * @throws StatutEditionEtatDesPaiementsAsynchroneBadRequestException
     * @throws StatutEditionEtatDesPaiementsAsynchroneUnauthorizedException
     * @throws StatutEditionEtatDesPaiementsAsynchroneInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, StatutAsynchroneDocumentResponse::class, 'json');
        }

        if (202 === $status) {
            return $serializer->deserialize($body, StatutAsynchroneDocumentResponse::class, 'json');
        }

        if (400 === $status) {
            throw new StatutEditionEtatDesPaiementsAsynchroneBadRequestException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (401 === $status) {
            throw new StatutEditionEtatDesPaiementsAsynchroneUnauthorizedException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (500 === $status) {
            throw new StatutEditionEtatDesPaiementsAsynchroneInternalServerErrorException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        return null;
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
