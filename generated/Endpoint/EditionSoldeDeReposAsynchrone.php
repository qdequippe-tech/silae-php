<?php

namespace QdequippeTech\Silae\Api\Endpoint;

use QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint;
use QdequippeTech\Silae\Api\Runtime\Client\Endpoint;
use QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;
use QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse;
use QdequippeTech\Silae\Api\Exception\EditionSoldeDeReposAsynchroneBadRequestException;
use QdequippeTech\Silae\Api\Exception\EditionSoldeDeReposAsynchroneUnauthorizedException;
use QdequippeTech\Silae\Api\Exception\EditionSoldeDeReposAsynchroneInternalServerErrorException;
use Psr\Http\Message\ResponseInterface;
class EditionSoldeDeReposAsynchrone extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     * @var string $dossiers
     *             }
     */
    public function __construct(DossierPeriodeRangeRequest $request, array $headerParameters = [])
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
        return '/v1/EditionEtatsPaie/EditionSoldeDeReposAsynchrone';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getHeadersOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Ocp-Apim-Subscription-Key', 'dossiers']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Ocp-Apim-Subscription-Key', ['string']);
        $optionsResolver->addAllowedTypes('dossiers', ['string']);

        return $optionsResolver;
    }

    /**
     * @return TraitementAsynchroneResponse|null
     *
     * @throws EditionSoldeDeReposAsynchroneBadRequestException
     * @throws EditionSoldeDeReposAsynchroneUnauthorizedException
     * @throws EditionSoldeDeReposAsynchroneInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            return $serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\TraitementAsynchroneResponse', 'json');
        }
        if (400 === $status) {
            throw new EditionSoldeDeReposAsynchroneBadRequestException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (401 === $status) {
            throw new EditionSoldeDeReposAsynchroneUnauthorizedException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (500 === $status) {
            throw new EditionSoldeDeReposAsynchroneInternalServerErrorException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
