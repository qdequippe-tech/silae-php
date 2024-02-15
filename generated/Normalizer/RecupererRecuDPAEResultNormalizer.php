<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\RecupererRecuDPAEResult;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RecupererRecuDPAEResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\RecupererRecuDPAEResult' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof RecupererRecuDPAEResult;
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
        $object = new RecupererRecuDPAEResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('idEmploi', $data) && null !== $data['idEmploi']) {
            $object->setIdEmploi($data['idEmploi']);
        } elseif (\array_key_exists('idEmploi', $data) && null === $data['idEmploi']) {
            $object->setIdEmploi(null);
        }
        if (\array_key_exists('recuDPAE', $data) && null !== $data['recuDPAE']) {
            $object->setRecuDPAE($data['recuDPAE']);
        } elseif (\array_key_exists('recuDPAE', $data) && null === $data['recuDPAE']) {
            $object->setRecuDPAE(null);
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
        if ($object->isInitialized('idEmploi') && null !== $object->getIdEmploi()) {
            $data['idEmploi'] = $object->getIdEmploi();
        }
        if ($object->isInitialized('recuDPAE') && null !== $object->getRecuDPAE()) {
            $data['recuDPAE'] = $object->getRecuDPAE();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\RecupererRecuDPAEResult' => false];
    }
}
