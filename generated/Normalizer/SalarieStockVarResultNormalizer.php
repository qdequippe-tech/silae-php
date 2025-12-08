<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieStockVarResult;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieStockVarResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieStockVarResult::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieStockVarResult::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieStockVarResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
        }

        if (\array_key_exists('codesStockVar', $data) && null !== $data['codesStockVar']) {
            $values = [];
            foreach ($data['codesStockVar'] as $value) {
                $values[] = $value;
            }

            $object->setCodesStockVar($values);
        } elseif (\array_key_exists('codesStockVar', $data) && null === $data['codesStockVar']) {
            $object->setCodesStockVar(null);
        }

        if (\array_key_exists('valeursStockVar', $data) && null !== $data['valeursStockVar']) {
            $values_1 = [];
            foreach ($data['valeursStockVar'] as $value_1) {
                $values_1[] = $value_1;
            }

            $object->setValeursStockVar($values_1);
        } elseif (\array_key_exists('valeursStockVar', $data) && null === $data['valeursStockVar']) {
            $object->setValeursStockVar(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('matriculeSalarie') && null !== $data->getMatriculeSalarie()) {
            $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        }

        if ($data->isInitialized('codesStockVar') && null !== $data->getCodesStockVar()) {
            $values = [];
            foreach ($data->getCodesStockVar() as $value) {
                $values[] = $value;
            }

            $dataArray['codesStockVar'] = $values;
        }

        if ($data->isInitialized('valeursStockVar') && null !== $data->getValeursStockVar()) {
            $values_1 = [];
            foreach ($data->getValeursStockVar() as $value_1) {
                $values_1[] = $value_1;
            }

            $dataArray['valeursStockVar'] = $values_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieStockVarResult::class => false];
    }
}
