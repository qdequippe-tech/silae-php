<?php

namespace QdequippeTech\Silae\Api\Endpoint;

class ListeModulesActifs extends \QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint implements \QdequippeTech\Silae\Api\Runtime\Client\Endpoint
{
    use \QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;

    /**
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     */
    public function __construct(array $headerParameters = [])
    {
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/v1/AnalyseProduction/ListeModulesActifs';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
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
     * @return \QdequippeTech\Silae\Api\Model\ListeModulesActifsResponse|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ListeModulesActifsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeModulesActifsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeModulesActifsInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ListeModulesActifsResponse', 'json');
        }
        if (400 === $status) {
            throw new \QdequippeTech\Silae\Api\Exception\ListeModulesActifsBadRequestException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (401 === $status) {
            throw new \QdequippeTech\Silae\Api\Exception\ListeModulesActifsUnauthorizedException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (500 === $status) {
            throw new \QdequippeTech\Silae\Api\Exception\ListeModulesActifsInternalServerErrorException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
