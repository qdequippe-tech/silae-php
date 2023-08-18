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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieSalaireDeBaseResult' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof SalarieSalaireDeBaseResult;
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

    /**
     * @param mixed|null $format
     * @param mixed      $object
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('matriculeSalarie') && null !== $object->getMatriculeSalarie()) {
            $data['matriculeSalarie'] = $object->getMatriculeSalarie();
        }
        if ($object->isInitialized('identifiantEmploi') && null !== $object->getIdentifiantEmploi()) {
            $data['identifiantEmploi'] = $object->getIdentifiantEmploi();
        }
        if ($object->isInitialized('salaireDeBase') && null !== $object->getSalaireDeBase()) {
            $data['salaireDeBase'] = $object->getSalaireDeBase();
        }
        if ($object->isInitialized('salaireDeBaseHeuresNormales') && null !== $object->getSalaireDeBaseHeuresNormales()) {
            $data['salaireDeBaseHeuresNormales'] = $object->getSalaireDeBaseHeuresNormales();
        }
        if ($object->isInitialized('salaireDeBaseHeuresMajorees') && null !== $object->getSalaireDeBaseHeuresMajorees()) {
            $data['salaireDeBaseHeuresMajorees'] = $object->getSalaireDeBaseHeuresMajorees();
        }
        if ($object->isInitialized('salaireDeBaseHLibre1') && null !== $object->getSalaireDeBaseHLibre1()) {
            $data['salaireDeBaseHLibre1'] = $object->getSalaireDeBaseHLibre1();
        }
        if ($object->isInitialized('salaireDeBaseHLibre2') && null !== $object->getSalaireDeBaseHLibre2()) {
            $data['salaireDeBaseHLibre2'] = $object->getSalaireDeBaseHLibre2();
        }
        if ($object->isInitialized('salaireDeBaseHLibre3') && null !== $object->getSalaireDeBaseHLibre3()) {
            $data['salaireDeBaseHLibre3'] = $object->getSalaireDeBaseHLibre3();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalarieSalaireDeBaseResult' => false];
    }
}
