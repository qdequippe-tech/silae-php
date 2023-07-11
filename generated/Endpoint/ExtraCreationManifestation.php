<?php

namespace QdequippeTech\Silae\Api\Endpoint;

class ExtraCreationManifestation extends \QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint implements \QdequippeTech\Silae\Api\Runtime\Client\Endpoint
{
    use \QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;

    /**
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     */
    public function __construct(\QdequippeTech\Silae\Api\Model\ExtraCreationManifestationRequest $request, array $headerParameters = [])
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
        return '/v1/ModuleCTCD/ExtraCreationManifestation';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Ocp-Apim-Subscription-Key']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Ocp-Apim-Subscription-Key', ['string']);

        return $optionsResolver;
    }

    /**
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraCreationManifestationBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraCreationManifestationUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraCreationManifestationInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \QdequippeTech\Silae\Api\Exception\ExtraCreationManifestationBadRequestException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (401 === $status) {
            throw new \QdequippeTech\Silae\Api\Exception\ExtraCreationManifestationUnauthorizedException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (500 === $status) {
            throw new \QdequippeTech\Silae\Api\Exception\ExtraCreationManifestationInternalServerErrorException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
