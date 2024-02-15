<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\BilanMatricules;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BilanMatriculesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\BilanMatricules' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof BilanMatricules;
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
        $object = new BilanMatricules();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('matriculesInclus', $data) && null !== $data['matriculesInclus']) {
            $values = [];
            foreach ($data['matriculesInclus'] as $value) {
                $values[] = $value;
            }
            $object->setMatriculesInclus($values);
        } elseif (\array_key_exists('matriculesInclus', $data) && null === $data['matriculesInclus']) {
            $object->setMatriculesInclus(null);
        }
        if (\array_key_exists('matriculesExclus', $data) && null !== $data['matriculesExclus']) {
            $values_1 = [];
            foreach ($data['matriculesExclus'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setMatriculesExclus($values_1);
        } elseif (\array_key_exists('matriculesExclus', $data) && null === $data['matriculesExclus']) {
            $object->setMatriculesExclus(null);
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
        if ($object->isInitialized('matriculesInclus') && null !== $object->getMatriculesInclus()) {
            $values = [];
            foreach ($object->getMatriculesInclus() as $value) {
                $values[] = $value;
            }
            $data['matriculesInclus'] = $values;
        }
        if ($object->isInitialized('matriculesExclus') && null !== $object->getMatriculesExclus()) {
            $values_1 = [];
            foreach ($object->getMatriculesExclus() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['matriculesExclus'] = $values_1;
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\BilanMatricules' => false];
    }
}
