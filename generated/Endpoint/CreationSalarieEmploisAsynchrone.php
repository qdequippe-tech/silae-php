<?php

namespace QdequippeTech\Silae\Api\Endpoint;

class CreationSalarieEmploisAsynchrone extends \QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint implements \QdequippeTech\Silae\Api\Runtime\Client\Endpoint
{
    use \QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;

    /**
     * @param array $headerParameters {
     *
     *     @var string $Ocp-Apim-Subscription-Key
     * }
     */
    public function __construct(\QdequippeTech\Silae\Api\Model\CreationSalarieEmploisRequest $request, array $headerParameters = [])
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
        return '/v1/SalarieEmplois/CreationSalarieEmploisAsynchrone';
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
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\CreationSalarieEmploisAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationSalarieEmploisAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationSalarieEmploisAsynchroneInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            return $serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\TraitementAsynchroneResponse', 'json');
        }
        if (400 === $status) {
            throw new \QdequippeTech\Silae\Api\Exception\CreationSalarieEmploisAsynchroneBadRequestException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (401 === $status) {
            throw new \QdequippeTech\Silae\Api\Exception\CreationSalarieEmploisAsynchroneUnauthorizedException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (500 === $status) {
            throw new \QdequippeTech\Silae\Api\Exception\CreationSalarieEmploisAsynchroneInternalServerErrorException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
