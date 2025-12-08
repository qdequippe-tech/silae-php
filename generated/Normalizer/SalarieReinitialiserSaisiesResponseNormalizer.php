<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieReinitialiserSaisiesResponse;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieReinitialiserSaisiesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieReinitialiserSaisiesResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieReinitialiserSaisiesResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieReinitialiserSaisiesResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('saisiesHeuresReinitialisees', $data) && null !== $data['saisiesHeuresReinitialisees']) {
            $object->setSaisiesHeuresReinitialisees($data['saisiesHeuresReinitialisees']);
        } elseif (\array_key_exists('saisiesHeuresReinitialisees', $data) && null === $data['saisiesHeuresReinitialisees']) {
            $object->setSaisiesHeuresReinitialisees(null);
        }

        if (\array_key_exists('saisiesPrimesReinitialisees', $data) && null !== $data['saisiesPrimesReinitialisees']) {
            $object->setSaisiesPrimesReinitialisees($data['saisiesPrimesReinitialisees']);
        } elseif (\array_key_exists('saisiesPrimesReinitialisees', $data) && null === $data['saisiesPrimesReinitialisees']) {
            $object->setSaisiesPrimesReinitialisees(null);
        }

        if (\array_key_exists('saisiesAbsencesReinitialisees', $data) && null !== $data['saisiesAbsencesReinitialisees']) {
            $object->setSaisiesAbsencesReinitialisees($data['saisiesAbsencesReinitialisees']);
        } elseif (\array_key_exists('saisiesAbsencesReinitialisees', $data) && null === $data['saisiesAbsencesReinitialisees']) {
            $object->setSaisiesAbsencesReinitialisees(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('saisiesHeuresReinitialisees') && null !== $data->getSaisiesHeuresReinitialisees()) {
            $dataArray['saisiesHeuresReinitialisees'] = $data->getSaisiesHeuresReinitialisees();
        }

        if ($data->isInitialized('saisiesPrimesReinitialisees') && null !== $data->getSaisiesPrimesReinitialisees()) {
            $dataArray['saisiesPrimesReinitialisees'] = $data->getSaisiesPrimesReinitialisees();
        }

        if ($data->isInitialized('saisiesAbsencesReinitialisees') && null !== $data->getSaisiesAbsencesReinitialisees()) {
            $dataArray['saisiesAbsencesReinitialisees'] = $data->getSaisiesAbsencesReinitialisees();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieReinitialiserSaisiesResponse::class => false];
    }
}
