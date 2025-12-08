<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AcquisitionQuestionnaireContratComplementaireResponse;
use QdequippeTech\Silae\Api\Model\QuestionnaireContratComplementaire;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AcquisitionQuestionnaireContratComplementaireResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AcquisitionQuestionnaireContratComplementaireResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AcquisitionQuestionnaireContratComplementaireResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new AcquisitionQuestionnaireContratComplementaireResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('qContratComplementaire', $data) && null !== $data['qContratComplementaire']) {
            $values = [];
            foreach ($data['qContratComplementaire'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, QuestionnaireContratComplementaire::class, 'json', $context);
            }

            $object->setQContratComplementaire($values);
        } elseif (\array_key_exists('qContratComplementaire', $data) && null === $data['qContratComplementaire']) {
            $object->setQContratComplementaire(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('qContratComplementaire') && null !== $data->getQContratComplementaire()) {
            $values = [];
            foreach ($data->getQContratComplementaire() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['qContratComplementaire'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AcquisitionQuestionnaireContratComplementaireResponse::class => false];
    }
}
