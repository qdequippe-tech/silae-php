<?php

namespace QdequippeTech\Silae\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use QdequippeTech\Silae\Api\Exception\RecupererFichiersVirementHorsBulletinBadRequestException;
use QdequippeTech\Silae\Api\Exception\RecupererFichiersVirementHorsBulletinInternalServerErrorException;
use QdequippeTech\Silae\Api\Exception\RecupererFichiersVirementHorsBulletinUnauthorizedException;
use QdequippeTech\Silae\Api\Exception\UnexpectedStatusCodeException;
use QdequippeTech\Silae\Api\Model\ApiErrors;
use QdequippeTech\Silae\Api\Model\RecupererFichiersVirementHorsBulletinRequest;
use QdequippeTech\Silae\Api\Model\RecupererFichiersVirementResponse;
use QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint;
use QdequippeTech\Silae\Api\Runtime\Client\Endpoint;
use QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class RecupererFichiersVirementHorsBulletin extends BaseEndpoint implements Endpoint
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
    public function __construct(RecupererFichiersVirementHorsBulletinRequest $request, array $headerParameters = [])
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
        return '/v1/Paiements/RecupererFichiersVirementHorsBulletin';
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
     * @return RecupererFichiersVirementResponse
     *
     * @throws RecupererFichiersVirementHorsBulletinBadRequestException
     * @throws RecupererFichiersVirementHorsBulletinUnauthorizedException
     * @throws RecupererFichiersVirementHorsBulletinInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, RecupererFichiersVirementResponse::class, 'json');
        }

        if (400 === $status) {
            throw new RecupererFichiersVirementHorsBulletinBadRequestException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (401 === $status) {
            throw new RecupererFichiersVirementHorsBulletinUnauthorizedException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (500 === $status) {
            throw new RecupererFichiersVirementHorsBulletinInternalServerErrorException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
