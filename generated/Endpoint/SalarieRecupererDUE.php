<?php

namespace QdequippeTech\Silae\Api\Endpoint;

use QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint;
use QdequippeTech\Silae\Api\Runtime\Client\Endpoint;
use QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;
use QdequippeTech\Silae\Api\Model\DossierMatriculeSalarieRequest;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use QdequippeTech\Silae\Api\Model\SalarieRecupererDUEResponse;
use QdequippeTech\Silae\Api\Exception\SalarieRecupererDUEBadRequestException;
use QdequippeTech\Silae\Api\Exception\SalarieRecupererDUEUnauthorizedException;
use QdequippeTech\Silae\Api\Exception\SalarieRecupererDUEInternalServerErrorException;
use Psr\Http\Message\ResponseInterface;
class SalarieRecupererDUE extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     * @var string $dossiers
     *             }
     */
    public function __construct(DossierMatriculeSalarieRequest $request, array $headerParameters = [])
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
        return '/v1/GenerationEnvoiDUE/SalarieRecupererDUE';
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
     * @return SalarieRecupererDUEResponse|null
     *
     * @throws SalarieRecupererDUEBadRequestException
     * @throws SalarieRecupererDUEUnauthorizedException
     * @throws SalarieRecupererDUEInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\SalarieRecupererDUEResponse', 'json');
        }
        if (400 === $status) {
            throw new SalarieRecupererDUEBadRequestException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (401 === $status) {
            throw new SalarieRecupererDUEUnauthorizedException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (500 === $status) {
            throw new SalarieRecupererDUEInternalServerErrorException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
