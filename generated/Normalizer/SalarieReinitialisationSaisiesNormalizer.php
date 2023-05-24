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

class SalarieReinitialisationSaisiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieReinitialisationSaisies' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\SalarieReinitialisationSaisies' === $data::class;
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
        $object = new \QdequippeTech\Silae\Api\Model\SalarieReinitialisationSaisies();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('periodeReinitialisation', $data) && null !== $data['periodeReinitialisation']) {
            $object->setPeriodeReinitialisation(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['periodeReinitialisation']));
        } elseif (\array_key_exists('periodeReinitialisation', $data) && null === $data['periodeReinitialisation']) {
            $object->setPeriodeReinitialisation(null);
        }
        if (\array_key_exists('reinitialiserHeures', $data) && null !== $data['reinitialiserHeures']) {
            $object->setReinitialiserHeures($data['reinitialiserHeures']);
        } elseif (\array_key_exists('reinitialiserHeures', $data) && null === $data['reinitialiserHeures']) {
            $object->setReinitialiserHeures(null);
        }
        if (\array_key_exists('reinitialiserPrimes', $data) && null !== $data['reinitialiserPrimes']) {
            $object->setReinitialiserPrimes($data['reinitialiserPrimes']);
        } elseif (\array_key_exists('reinitialiserPrimes', $data) && null === $data['reinitialiserPrimes']) {
            $object->setReinitialiserPrimes(null);
        }
        if (\array_key_exists('reinitialiserAbsences', $data) && null !== $data['reinitialiserAbsences']) {
            $object->setReinitialiserAbsences($data['reinitialiserAbsences']);
        } elseif (\array_key_exists('reinitialiserAbsences', $data) && null === $data['reinitialiserAbsences']) {
            $object->setReinitialiserAbsences(null);
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
        if ($object->isInitialized('periodeReinitialisation') && null !== $object->getPeriodeReinitialisation()) {
            $data['periodeReinitialisation'] = $object->getPeriodeReinitialisation()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('reinitialiserHeures') && null !== $object->getReinitialiserHeures()) {
            $data['reinitialiserHeures'] = $object->getReinitialiserHeures();
        }
        if ($object->isInitialized('reinitialiserPrimes') && null !== $object->getReinitialiserPrimes()) {
            $data['reinitialiserPrimes'] = $object->getReinitialiserPrimes();
        }
        if ($object->isInitialized('reinitialiserAbsences') && null !== $object->getReinitialiserAbsences()) {
            $data['reinitialiserAbsences'] = $object->getReinitialiserAbsences();
        }

        return $data;
    }
}
