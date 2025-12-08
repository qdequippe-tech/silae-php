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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return BilanMatricules::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && BilanMatricules::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('matriculesInclus') && null !== $data->getMatriculesInclus()) {
            $values = [];
            foreach ($data->getMatriculesInclus() as $value) {
                $values[] = $value;
            }

            $dataArray['matriculesInclus'] = $values;
        }

        if ($data->isInitialized('matriculesExclus') && null !== $data->getMatriculesExclus()) {
            $values_1 = [];
            foreach ($data->getMatriculesExclus() as $value_1) {
                $values_1[] = $value_1;
            }

            $dataArray['matriculesExclus'] = $values_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [BilanMatricules::class => false];
    }
}
