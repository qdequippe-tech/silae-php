<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EffortConstruction;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EffortConstructionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\EffortConstruction' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof EffortConstruction;
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
        $object = new EffortConstruction();
        if (\array_key_exists('pourcentageAnneeN', $data) && \is_int($data['pourcentageAnneeN'])) {
            $data['pourcentageAnneeN'] = (float) $data['pourcentageAnneeN'];
        }
        if (\array_key_exists('pourcentageAnneeNPlus1', $data) && \is_int($data['pourcentageAnneeNPlus1'])) {
            $data['pourcentageAnneeNPlus1'] = (float) $data['pourcentageAnneeNPlus1'];
        }
        if (\array_key_exists('pourcentageAnneeNPlus2', $data) && \is_int($data['pourcentageAnneeNPlus2'])) {
            $data['pourcentageAnneeNPlus2'] = (float) $data['pourcentageAnneeNPlus2'];
        }
        if (\array_key_exists('pourcentageAnneeNPlus3', $data) && \is_int($data['pourcentageAnneeNPlus3'])) {
            $data['pourcentageAnneeNPlus3'] = (float) $data['pourcentageAnneeNPlus3'];
        }
        if (\array_key_exists('pourcentageAnneeNPlus4', $data) && \is_int($data['pourcentageAnneeNPlus4'])) {
            $data['pourcentageAnneeNPlus4'] = (float) $data['pourcentageAnneeNPlus4'];
        }
        if (\array_key_exists('pourcentageAnneeNPlus5', $data) && \is_int($data['pourcentageAnneeNPlus5'])) {
            $data['pourcentageAnneeNPlus5'] = (float) $data['pourcentageAnneeNPlus5'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('assujettissement', $data) && null !== $data['assujettissement']) {
            $object->setAssujettissement($data['assujettissement']);
        } elseif (\array_key_exists('assujettissement', $data) && null === $data['assujettissement']) {
            $object->setAssujettissement(null);
        }
        if (\array_key_exists('anneeN', $data) && null !== $data['anneeN']) {
            $object->setAnneeN(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['anneeN']));
        } elseif (\array_key_exists('anneeN', $data) && null === $data['anneeN']) {
            $object->setAnneeN(null);
        }
        if (\array_key_exists('pourcentageAnneeN', $data) && null !== $data['pourcentageAnneeN']) {
            $object->setPourcentageAnneeN($data['pourcentageAnneeN']);
        } elseif (\array_key_exists('pourcentageAnneeN', $data) && null === $data['pourcentageAnneeN']) {
            $object->setPourcentageAnneeN(null);
        }
        if (\array_key_exists('pourcentageAnneeNPlus1', $data) && null !== $data['pourcentageAnneeNPlus1']) {
            $object->setPourcentageAnneeNPlus1($data['pourcentageAnneeNPlus1']);
        } elseif (\array_key_exists('pourcentageAnneeNPlus1', $data) && null === $data['pourcentageAnneeNPlus1']) {
            $object->setPourcentageAnneeNPlus1(null);
        }
        if (\array_key_exists('pourcentageAnneeNPlus2', $data) && null !== $data['pourcentageAnneeNPlus2']) {
            $object->setPourcentageAnneeNPlus2($data['pourcentageAnneeNPlus2']);
        } elseif (\array_key_exists('pourcentageAnneeNPlus2', $data) && null === $data['pourcentageAnneeNPlus2']) {
            $object->setPourcentageAnneeNPlus2(null);
        }
        if (\array_key_exists('pourcentageAnneeNPlus3', $data) && null !== $data['pourcentageAnneeNPlus3']) {
            $object->setPourcentageAnneeNPlus3($data['pourcentageAnneeNPlus3']);
        } elseif (\array_key_exists('pourcentageAnneeNPlus3', $data) && null === $data['pourcentageAnneeNPlus3']) {
            $object->setPourcentageAnneeNPlus3(null);
        }
        if (\array_key_exists('pourcentageAnneeNPlus4', $data) && null !== $data['pourcentageAnneeNPlus4']) {
            $object->setPourcentageAnneeNPlus4($data['pourcentageAnneeNPlus4']);
        } elseif (\array_key_exists('pourcentageAnneeNPlus4', $data) && null === $data['pourcentageAnneeNPlus4']) {
            $object->setPourcentageAnneeNPlus4(null);
        }
        if (\array_key_exists('pourcentageAnneeNPlus5', $data) && null !== $data['pourcentageAnneeNPlus5']) {
            $object->setPourcentageAnneeNPlus5($data['pourcentageAnneeNPlus5']);
        } elseif (\array_key_exists('pourcentageAnneeNPlus5', $data) && null === $data['pourcentageAnneeNPlus5']) {
            $object->setPourcentageAnneeNPlus5(null);
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
        if ($object->isInitialized('assujettissement') && null !== $object->getAssujettissement()) {
            $data['assujettissement'] = $object->getAssujettissement();
        }
        if ($object->isInitialized('anneeN') && null !== $object->getAnneeN()) {
            $data['anneeN'] = $object->getAnneeN()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('pourcentageAnneeN') && null !== $object->getPourcentageAnneeN()) {
            $data['pourcentageAnneeN'] = $object->getPourcentageAnneeN();
        }
        if ($object->isInitialized('pourcentageAnneeNPlus1') && null !== $object->getPourcentageAnneeNPlus1()) {
            $data['pourcentageAnneeNPlus1'] = $object->getPourcentageAnneeNPlus1();
        }
        if ($object->isInitialized('pourcentageAnneeNPlus2') && null !== $object->getPourcentageAnneeNPlus2()) {
            $data['pourcentageAnneeNPlus2'] = $object->getPourcentageAnneeNPlus2();
        }
        if ($object->isInitialized('pourcentageAnneeNPlus3') && null !== $object->getPourcentageAnneeNPlus3()) {
            $data['pourcentageAnneeNPlus3'] = $object->getPourcentageAnneeNPlus3();
        }
        if ($object->isInitialized('pourcentageAnneeNPlus4') && null !== $object->getPourcentageAnneeNPlus4()) {
            $data['pourcentageAnneeNPlus4'] = $object->getPourcentageAnneeNPlus4();
        }
        if ($object->isInitialized('pourcentageAnneeNPlus5') && null !== $object->getPourcentageAnneeNPlus5()) {
            $data['pourcentageAnneeNPlus5'] = $object->getPourcentageAnneeNPlus5();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\EffortConstruction' => false];
    }
}
