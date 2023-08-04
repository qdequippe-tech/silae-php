<?php

namespace QdequippeTech\Silae\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use QdequippeTech\Silae\Api\Exception\SpectacleSalarieAcquisitionAffectationsBadRequestException;
use QdequippeTech\Silae\Api\Exception\SpectacleSalarieAcquisitionAffectationsInternalServerErrorException;
use QdequippeTech\Silae\Api\Exception\SpectacleSalarieAcquisitionAffectationsUnauthorizedException;
use QdequippeTech\Silae\Api\Model\SpectacleSalarieAcquisitionAffectationsRequest;
use QdequippeTech\Silae\Api\Model\SpectacleSalarieAffectations;
use QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint;
use QdequippeTech\Silae\Api\Runtime\Client\Endpoint;
use QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class SpectacleSalarieAcquisitionAffectations extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     * @var string $dossiers
     *             }
     */
    public function __construct(SpectacleSalarieAcquisitionAffectationsRequest $request, array $headerParameters = [])
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
        return '/v1/ModuleSpectacle/SpectacleSalarieAcquisitionAffectations';
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
     * @return SpectacleSalarieAffectations|null
     *
     * @throws SpectacleSalarieAcquisitionAffectationsBadRequestException
     * @throws SpectacleSalarieAcquisitionAffectationsUnauthorizedException
     * @throws SpectacleSalarieAcquisitionAffectationsInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\SpectacleSalarieAffectations', 'json');
        }
        if (400 === $status) {
            throw new SpectacleSalarieAcquisitionAffectationsBadRequestException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (401 === $status) {
            throw new SpectacleSalarieAcquisitionAffectationsUnauthorizedException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (500 === $status) {
            throw new SpectacleSalarieAcquisitionAffectationsInternalServerErrorException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
