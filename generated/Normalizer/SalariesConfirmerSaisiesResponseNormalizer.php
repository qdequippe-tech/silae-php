<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalariesConfirmerSaisiesResponse;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalariesConfirmerSaisiesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalariesConfirmerSaisiesResponse' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof SalariesConfirmerSaisiesResponse;
    }

    /**
     * @param mixed|null $format
     * @param mixed      $data
     * @param mixed      $class
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new SalariesConfirmerSaisiesResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('saisiesHeuresConfirmees', $data) && null !== $data['saisiesHeuresConfirmees']) {
            $object->setSaisiesHeuresConfirmees($data['saisiesHeuresConfirmees']);
        } elseif (\array_key_exists('saisiesHeuresConfirmees', $data) && null === $data['saisiesHeuresConfirmees']) {
            $object->setSaisiesHeuresConfirmees(null);
        }
        if (\array_key_exists('saisiesPrimesConfirmees', $data) && null !== $data['saisiesPrimesConfirmees']) {
            $object->setSaisiesPrimesConfirmees($data['saisiesPrimesConfirmees']);
        } elseif (\array_key_exists('saisiesPrimesConfirmees', $data) && null === $data['saisiesPrimesConfirmees']) {
            $object->setSaisiesPrimesConfirmees(null);
        }

        return $object;
    }

    /**
     * @param mixed|null $format
     * @param mixed      $object
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('saisiesHeuresConfirmees') && null !== $object->getSaisiesHeuresConfirmees()) {
            $data['saisiesHeuresConfirmees'] = $object->getSaisiesHeuresConfirmees();
        }
        if ($object->isInitialized('saisiesPrimesConfirmees') && null !== $object->getSaisiesPrimesConfirmees()) {
            $data['saisiesPrimesConfirmees'] = $object->getSaisiesPrimesConfirmees();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalariesConfirmerSaisiesResponse' => false];
    }
}
