<?php

namespace QdequippeTech\Silae\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use QdequippeTech\Silae\Api\Exception\ListeMatriculesDupliquesBadRequestException;
use QdequippeTech\Silae\Api\Exception\ListeMatriculesDupliquesInternalServerErrorException;
use QdequippeTech\Silae\Api\Exception\ListeMatriculesDupliquesUnauthorizedException;
use QdequippeTech\Silae\Api\Model\ApiErrors;
use QdequippeTech\Silae\Api\Model\ListeMatriculesDupliquesRequest;
use QdequippeTech\Silae\Api\Model\ListeMatriculesDupliquesResponse;
use QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint;
use QdequippeTech\Silae\Api\Runtime\Client\Endpoint;
use QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class ListeMatriculesDupliques extends BaseEndpoint implements Endpoint
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
    public function __construct(ListeMatriculesDupliquesRequest $request, array $headerParameters = [])
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
        return '/v1/InfosTechniquesDossiers/ListeMatriculesDupliques';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
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
     * @return ListeMatriculesDupliquesResponse|null
     *
     * @throws ListeMatriculesDupliquesBadRequestException
     * @throws ListeMatriculesDupliquesUnauthorizedException
     * @throws ListeMatriculesDupliquesInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, ListeMatriculesDupliquesResponse::class, 'json');
        }

        if (400 === $status) {
            throw new ListeMatriculesDupliquesBadRequestException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (401 === $status) {
            throw new ListeMatriculesDupliquesUnauthorizedException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (500 === $status) {
            throw new ListeMatriculesDupliquesInternalServerErrorException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        return null;
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
