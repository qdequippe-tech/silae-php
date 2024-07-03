<?php

namespace QdequippeTech\Silae\Api\Endpoint;

use Psr\Http\Message\ResponseInterface;
use QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireSalarieCCNBadRequestException;
use QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireSalarieCCNInternalServerErrorException;
use QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireSalarieCCNUnauthorizedException;
use QdequippeTech\Silae\Api\Model\AcquisitionQuestionnaireCCNRequest;
use QdequippeTech\Silae\Api\Model\AcquisitionQuestionnaireCCNResponse;
use QdequippeTech\Silae\Api\Model\ApiErrors;
use QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint;
use QdequippeTech\Silae\Api\Runtime\Client\Endpoint;
use QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class AcquisitionQuestionnaireSalarieCCN extends BaseEndpoint implements Endpoint
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
    public function __construct(AcquisitionQuestionnaireCCNRequest $request, array $headerParameters = [])
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
        return '/v1/QuestionnaireCCN/AcquisitionQuestionnaireSalarieCCN';
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
     * @return AcquisitionQuestionnaireCCNResponse|null
     *
     * @throws AcquisitionQuestionnaireSalarieCCNBadRequestException
     * @throws AcquisitionQuestionnaireSalarieCCNUnauthorizedException
     * @throws AcquisitionQuestionnaireSalarieCCNInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, AcquisitionQuestionnaireCCNResponse::class, 'json');
        }

        if (400 === $status) {
            throw new AcquisitionQuestionnaireSalarieCCNBadRequestException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (401 === $status) {
            throw new AcquisitionQuestionnaireSalarieCCNUnauthorizedException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        if (500 === $status) {
            throw new AcquisitionQuestionnaireSalarieCCNInternalServerErrorException($serializer->deserialize($body, ApiErrors::class, 'json'), $response);
        }

        return null;
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
