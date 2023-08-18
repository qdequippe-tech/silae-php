<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ActivationDSN;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ActivationDSNNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\ActivationDSN' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof ActivationDSN;
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
        $object = new ActivationDSN();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }
        if (\array_key_exists('periodeDemarrageDsnMensuelle', $data) && null !== $data['periodeDemarrageDsnMensuelle']) {
            $object->setPeriodeDemarrageDsnMensuelle(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['periodeDemarrageDsnMensuelle']));
        } elseif (\array_key_exists('periodeDemarrageDsnMensuelle', $data) && null === $data['periodeDemarrageDsnMensuelle']) {
            $object->setPeriodeDemarrageDsnMensuelle(null);
        }
        if (\array_key_exists('periodeDemarrageDsnArretDeTravail', $data) && null !== $data['periodeDemarrageDsnArretDeTravail']) {
            $object->setPeriodeDemarrageDsnArretDeTravail(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['periodeDemarrageDsnArretDeTravail']));
        } elseif (\array_key_exists('periodeDemarrageDsnArretDeTravail', $data) && null === $data['periodeDemarrageDsnArretDeTravail']) {
            $object->setPeriodeDemarrageDsnArretDeTravail(null);
        }
        if (\array_key_exists('periodeDemarrageDsnFinDeContrat', $data) && null !== $data['periodeDemarrageDsnFinDeContrat']) {
            $object->setPeriodeDemarrageDsnFinDeContrat(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['periodeDemarrageDsnFinDeContrat']));
        } elseif (\array_key_exists('periodeDemarrageDsnFinDeContrat', $data) && null === $data['periodeDemarrageDsnFinDeContrat']) {
            $object->setPeriodeDemarrageDsnFinDeContrat(null);
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
        if ($object->isInitialized('numeroDossier') && null !== $object->getNumeroDossier()) {
            $data['numeroDossier'] = $object->getNumeroDossier();
        }
        if ($object->isInitialized('periodeDemarrageDsnMensuelle') && null !== $object->getPeriodeDemarrageDsnMensuelle()) {
            $data['periodeDemarrageDsnMensuelle'] = $object->getPeriodeDemarrageDsnMensuelle()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('periodeDemarrageDsnArretDeTravail') && null !== $object->getPeriodeDemarrageDsnArretDeTravail()) {
            $data['periodeDemarrageDsnArretDeTravail'] = $object->getPeriodeDemarrageDsnArretDeTravail()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('periodeDemarrageDsnFinDeContrat') && null !== $object->getPeriodeDemarrageDsnFinDeContrat()) {
            $data['periodeDemarrageDsnFinDeContrat'] = $object->getPeriodeDemarrageDsnFinDeContrat()->format('Y-m-d\\TH:i:s');
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\ActivationDSN' => false];
    }
}
