<?php

namespace QdequippeTech\Silae\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use QdequippeTech\Silae\Api\Exception\SalarieAjouterPrimeBadRequestException;
use QdequippeTech\Silae\Api\Exception\SalarieAjouterPrimeInternalServerErrorException;
use QdequippeTech\Silae\Api\Exception\SalarieAjouterPrimeUnauthorizedException;
use QdequippeTech\Silae\Api\Model\SalarieAjouterPrimeRequest;
use QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint;
use QdequippeTech\Silae\Api\Runtime\Client\Endpoint;
use QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class SalarieAjouterPrime extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     * @var string $dossiers
     * @var string $Authorization Authorization de type Bearer.
     *             }
     */
    public function __construct(SalarieAjouterPrimeRequest $request, array $headerParameters = [])
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
        return '/v1/ElementsVariables/SalarieAjouterPrime';
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
        $optionsResolver->setDefined(['Ocp-Apim-Subscription-Key', 'dossiers', 'Authorization']);
        $optionsResolver->setRequired(['Authorization']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Ocp-Apim-Subscription-Key', ['string']);
        $optionsResolver->addAllowedTypes('dossiers', ['string']);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);

        return $optionsResolver;
    }

    /**
     * @throws SalarieAjouterPrimeBadRequestException
     * @throws SalarieAjouterPrimeUnauthorizedException
     * @throws SalarieAjouterPrimeInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new SalarieAjouterPrimeBadRequestException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (401 === $status) {
            throw new SalarieAjouterPrimeUnauthorizedException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (500 === $status) {
            throw new SalarieAjouterPrimeInternalServerErrorException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
