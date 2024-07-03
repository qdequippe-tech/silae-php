<?php

namespace QdequippeTech\Silae\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use QdequippeTech\Silae\Api\Exception\RechercheCCNBadRequestException;
use QdequippeTech\Silae\Api\Exception\RechercheCCNInternalServerErrorException;
use QdequippeTech\Silae\Api\Exception\RechercheCCNUnauthorizedException;
use QdequippeTech\Silae\Api\Model\ApiErrors;
use QdequippeTech\Silae\Api\Model\RechercheCCNRequest;
use QdequippeTech\Silae\Api\Model\RechercheCCNResponse;
use QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint;
use QdequippeTech\Silae\Api\Runtime\Client\Endpoint;
use QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class RechercheCCN extends BaseEndpoint implements Endpoint
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
    public function __construct(RechercheCCNRequest $request, array $headerParameters = [])
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
        return '/v1/InformationBaseCommune/RechercheCCN';
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
     * @return RechercheCCNResponse|null
     *
     * @throws RechercheCCNBadRequestException
     * @throws RechercheCCNUnauthorizedException
     * @throws RechercheCCNInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RechercheCCNResponse::class, 'json');
        }

        if (400 === $status) {
            throw new RechercheCCNBadRequestException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (401 === $status) {
            throw new RechercheCCNUnauthorizedException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (500 === $status) {
            throw new RechercheCCNInternalServerErrorException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        return null;
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
