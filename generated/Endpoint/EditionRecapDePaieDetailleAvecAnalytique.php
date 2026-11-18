<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use QdequippeTech\Silae\Api\Exception\BadResponseException;
use QdequippeTech\Silae\Api\Exception\EditionRecapDePaieDetailleAvecAnalytiqueBadRequestException;
use QdequippeTech\Silae\Api\Exception\EditionRecapDePaieDetailleAvecAnalytiqueInternalServerErrorException;
use QdequippeTech\Silae\Api\Exception\EditionRecapDePaieDetailleAvecAnalytiqueUnauthorizedException;
use QdequippeTech\Silae\Api\Model\ApiErrors;
use QdequippeTech\Silae\Api\Model\EditionRecapDePaieDetailleAvecAnalytiqueRequest;
use QdequippeTech\Silae\Api\Model\EditionRecapDePaieDetailleAvecAnalytiqueResponse;
use QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint;
use QdequippeTech\Silae\Api\Runtime\Client\Endpoint;
use QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class EditionRecapDePaieDetailleAvecAnalytique extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key Clé d'abonnement api management
     * @var string $dossiers
     * @var string $Authorization Authorization de type Bearer.
     *             }
     */
    public function __construct(EditionRecapDePaieDetailleAvecAnalytiqueRequest $request, array $headerParameters = [])
    {
        $this->body = $request;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/v1/EditionEtatsPaie/EditionRecapDePaieDetailleAvecAnalytique';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedObjectBody($serializer);
    }

    protected function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
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
     * @return EditionRecapDePaieDetailleAvecAnalytiqueResponse
     *
     * @throws EditionRecapDePaieDetailleAvecAnalytiqueBadRequestException
     * @throws EditionRecapDePaieDetailleAvecAnalytiqueUnauthorizedException
     * @throws EditionRecapDePaieDetailleAvecAnalytiqueInternalServerErrorException
     * @throws BadResponseException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): mixed
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, EditionRecapDePaieDetailleAvecAnalytiqueResponse::class, 'json');
        }

        if (400 === $status) {
            throw new EditionRecapDePaieDetailleAvecAnalytiqueBadRequestException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (401 === $status) {
            throw new EditionRecapDePaieDetailleAvecAnalytiqueUnauthorizedException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (500 === $status) {
            throw new EditionRecapDePaieDetailleAvecAnalytiqueInternalServerErrorException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        throw new BadResponseException($status, $body, $response);
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
