<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieSalaireDeBaseResult;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieSalaireDeBaseResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieSalaireDeBaseResult::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieSalaireDeBaseResult::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieSalaireDeBaseResult();
        if (\array_key_exists('salaireDeBase', $data) && \is_int($data['salaireDeBase'])) {
            $data['salaireDeBase'] = (float) $data['salaireDeBase'];
        }

        if (\array_key_exists('salaireDeBaseHeuresNormales', $data) && \is_int($data['salaireDeBaseHeuresNormales'])) {
            $data['salaireDeBaseHeuresNormales'] = (float) $data['salaireDeBaseHeuresNormales'];
        }

        if (\array_key_exists('salaireDeBaseHeuresMajorees', $data) && \is_int($data['salaireDeBaseHeuresMajorees'])) {
            $data['salaireDeBaseHeuresMajorees'] = (float) $data['salaireDeBaseHeuresMajorees'];
        }

        if (\array_key_exists('salaireDeBaseHLibre1', $data) && \is_int($data['salaireDeBaseHLibre1'])) {
            $data['salaireDeBaseHLibre1'] = (float) $data['salaireDeBaseHLibre1'];
        }

        if (\array_key_exists('salaireDeBaseHLibre2', $data) && \is_int($data['salaireDeBaseHLibre2'])) {
            $data['salaireDeBaseHLibre2'] = (float) $data['salaireDeBaseHLibre2'];
        }

        if (\array_key_exists('salaireDeBaseHLibre3', $data) && \is_int($data['salaireDeBaseHLibre3'])) {
            $data['salaireDeBaseHLibre3'] = (float) $data['salaireDeBaseHLibre3'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
        }

        if (\array_key_exists('identifiantEmploi', $data) && null !== $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi($data['identifiantEmploi']);
        } elseif (\array_key_exists('identifiantEmploi', $data) && null === $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi(null);
        }

        if (\array_key_exists('salaireDeBase', $data) && null !== $data['salaireDeBase']) {
            $object->setSalaireDeBase($data['salaireDeBase']);
        } elseif (\array_key_exists('salaireDeBase', $data) && null === $data['salaireDeBase']) {
            $object->setSalaireDeBase(null);
        }

        if (\array_key_exists('salaireDeBaseHeuresNormales', $data) && null !== $data['salaireDeBaseHeuresNormales']) {
            $object->setSalaireDeBaseHeuresNormales($data['salaireDeBaseHeuresNormales']);
        } elseif (\array_key_exists('salaireDeBaseHeuresNormales', $data) && null === $data['salaireDeBaseHeuresNormales']) {
            $object->setSalaireDeBaseHeuresNormales(null);
        }

        if (\array_key_exists('salaireDeBaseHeuresMajorees', $data) && null !== $data['salaireDeBaseHeuresMajorees']) {
            $object->setSalaireDeBaseHeuresMajorees($data['salaireDeBaseHeuresMajorees']);
        } elseif (\array_key_exists('salaireDeBaseHeuresMajorees', $data) && null === $data['salaireDeBaseHeuresMajorees']) {
            $object->setSalaireDeBaseHeuresMajorees(null);
        }

        if (\array_key_exists('salaireDeBaseHLibre1', $data) && null !== $data['salaireDeBaseHLibre1']) {
            $object->setSalaireDeBaseHLibre1($data['salaireDeBaseHLibre1']);
        } elseif (\array_key_exists('salaireDeBaseHLibre1', $data) && null === $data['salaireDeBaseHLibre1']) {
            $object->setSalaireDeBaseHLibre1(null);
        }

        if (\array_key_exists('salaireDeBaseHLibre2', $data) && null !== $data['salaireDeBaseHLibre2']) {
            $object->setSalaireDeBaseHLibre2($data['salaireDeBaseHLibre2']);
        } elseif (\array_key_exists('salaireDeBaseHLibre2', $data) && null === $data['salaireDeBaseHLibre2']) {
            $object->setSalaireDeBaseHLibre2(null);
        }

        if (\array_key_exists('salaireDeBaseHLibre3', $data) && null !== $data['salaireDeBaseHLibre3']) {
            $object->setSalaireDeBaseHLibre3($data['salaireDeBaseHLibre3']);
        } elseif (\array_key_exists('salaireDeBaseHLibre3', $data) && null === $data['salaireDeBaseHLibre3']) {
            $object->setSalaireDeBaseHLibre3(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('matriculeSalarie') && null !== $data->getMatriculeSalarie()) {
            $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        }

        if ($data->isInitialized('identifiantEmploi') && null !== $data->getIdentifiantEmploi()) {
            $dataArray['identifiantEmploi'] = $data->getIdentifiantEmploi();
        }

        if ($data->isInitialized('salaireDeBase') && null !== $data->getSalaireDeBase()) {
            $dataArray['salaireDeBase'] = $data->getSalaireDeBase();
        }

        if ($data->isInitialized('salaireDeBaseHeuresNormales') && null !== $data->getSalaireDeBaseHeuresNormales()) {
            $dataArray['salaireDeBaseHeuresNormales'] = $data->getSalaireDeBaseHeuresNormales();
        }

        if ($data->isInitialized('salaireDeBaseHeuresMajorees') && null !== $data->getSalaireDeBaseHeuresMajorees()) {
            $dataArray['salaireDeBaseHeuresMajorees'] = $data->getSalaireDeBaseHeuresMajorees();
        }

        if ($data->isInitialized('salaireDeBaseHLibre1') && null !== $data->getSalaireDeBaseHLibre1()) {
            $dataArray['salaireDeBaseHLibre1'] = $data->getSalaireDeBaseHLibre1();
        }

        if ($data->isInitialized('salaireDeBaseHLibre2') && null !== $data->getSalaireDeBaseHLibre2()) {
            $dataArray['salaireDeBaseHLibre2'] = $data->getSalaireDeBaseHLibre2();
        }

        if ($data->isInitialized('salaireDeBaseHLibre3') && null !== $data->getSalaireDeBaseHLibre3()) {
            $dataArray['salaireDeBaseHLibre3'] = $data->getSalaireDeBaseHLibre3();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieSalaireDeBaseResult::class => false];
    }
}
