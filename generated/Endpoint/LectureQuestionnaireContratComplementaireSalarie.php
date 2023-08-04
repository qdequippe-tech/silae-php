<?php

namespace QdequippeTech\Silae\Api\Endpoint;

use QdequippeTech\Silae\Api\Runtime\Client\BaseEndpoint;
use QdequippeTech\Silae\Api\Runtime\Client\Endpoint;
use QdequippeTech\Silae\Api\Runtime\Client\EndpointTrait;
use QdequippeTech\Silae\Api\Model\LectureQuestionnaireContratComplementaireRequest;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use QdequippeTech\Silae\Api\Model\LectureQuestionnaireContratComplementaireResponse;
use QdequippeTech\Silae\Api\Exception\LectureQuestionnaireContratComplementaireSalarieBadRequestException;
use QdequippeTech\Silae\Api\Exception\LectureQuestionnaireContratComplementaireSalarieUnauthorizedException;
use QdequippeTech\Silae\Api\Exception\LectureQuestionnaireContratComplementaireSalarieInternalServerErrorException;
use Psr\Http\Message\ResponseInterface;
class LectureQuestionnaireContratComplementaireSalarie extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     * @var string $dossiers
     *             }
     */
    public function __construct(LectureQuestionnaireContratComplementaireRequest $request, array $headerParameters = [])
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
        return '/v1/SalarieEmplois/LectureQuestionnaireContratComplementaireSalarie';
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
     * @return LectureQuestionnaireContratComplementaireResponse|null
     *
     * @throws LectureQuestionnaireContratComplementaireSalarieBadRequestException
     * @throws LectureQuestionnaireContratComplementaireSalarieUnauthorizedException
     * @throws LectureQuestionnaireContratComplementaireSalarieInternalServerErrorException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\LectureQuestionnaireContratComplementaireResponse', 'json');
        }
        if (400 === $status) {
            throw new LectureQuestionnaireContratComplementaireSalarieBadRequestException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (401 === $status) {
            throw new LectureQuestionnaireContratComplementaireSalarieUnauthorizedException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
        if (500 === $status) {
            throw new LectureQuestionnaireContratComplementaireSalarieInternalServerErrorException($serializer->deserialize($body, 'QdequippeTech\\Silae\\Api\\Model\\ApiErrors', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2'];
    }
}
