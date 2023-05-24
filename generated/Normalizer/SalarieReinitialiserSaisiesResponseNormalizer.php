<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieReinitialiserSaisiesResponse' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\SalarieReinitialiserSaisiesResponse' === $data::class;
    }

    /**
     * @param mixed|null $format
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \QdequippeTech\Silae\Api\Model\SalarieReinitialiserSaisiesResponse();
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

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('saisiesHeuresReinitialisees') && null !== $object->getSaisiesHeuresReinitialisees()) {
            $data['saisiesHeuresReinitialisees'] = $object->getSaisiesHeuresReinitialisees();
        }
        if ($object->isInitialized('saisiesPrimesReinitialisees') && null !== $object->getSaisiesPrimesReinitialisees()) {
            $data['saisiesPrimesReinitialisees'] = $object->getSaisiesPrimesReinitialisees();
        }
        if ($object->isInitialized('saisiesAbsencesReinitialisees') && null !== $object->getSaisiesAbsencesReinitialisees()) {
            $data['saisiesAbsencesReinitialisees'] = $object->getSaisiesAbsencesReinitialisees();
        }

        return $data;
    }
}
