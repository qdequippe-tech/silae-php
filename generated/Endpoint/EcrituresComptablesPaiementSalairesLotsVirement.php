<?php

namespace QdequippeTech\Silae\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use QdequippeTech\Silae\Api\Exception\EcrituresComptablesPaiementSalairesLotsVirementBadRequestException;
use QdequippeTech\Silae\Api\Exception\EcrituresComptablesPaiementSalairesLotsVirementInternalServerErrorException;
use QdequippeTech\Silae\Api\Exception\EcrituresComptablesPaiementSalairesLotsVirementUnauthorizedException;
use QdequippeTech\Silae\Api\Exception\UnexpectedStatusCodeException;
use QdequippeTech\Silae\Api\Model\ApiErrors;
use QdequippeTech\Silae\Api\Model\DossierPeriodePaiementSalairesLotsVirementRequest;
use QdequippeTech\Silae\Api\Model\EcrituresComptablesPaiementSalairesLotsVirementResponse;
use QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint;
use QdequippeTech\Silae\Api\Runtime\Client\Endpoint;
use QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class EcrituresComptablesPaiementSalairesLotsVirement extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key Clé d'abonnement api management
     * @var string $dossiers
     * @var string $Authorization Authorization de type Bearer.
     *             }
     */
    public function __construct(DossierPeriodePaiementSalairesLotsVirementRequest $request, array $headerParameters = [])
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
        return '/v1/EcrituresComptables/EcrituresComptablesPaiementSalairesLotsVirement';
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
     * @return EcrituresComptablesPaiementSalairesLotsVirementResponse
     *
     * @throws EcrituresComptablesPaiementSalairesLotsVirementBadRequestException
     * @throws EcrituresComptablesPaiementSalairesLotsVirementUnauthorizedException
     * @throws EcrituresComptablesPaiementSalairesLotsVirementInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): mixed
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            return $serializer->deserialize($body, EcrituresComptablesPaiementSalairesLotsVirementResponse::class, 'json');
        }

        if (400 === $status) {
            throw new EcrituresComptablesPaiementSalairesLotsVirementBadRequestException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (401 === $status) {
            throw new EcrituresComptablesPaiementSalairesLotsVirementUnauthorizedException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (500 === $status) {
            throw new EcrituresComptablesPaiementSalairesLotsVirementInternalServerErrorException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
