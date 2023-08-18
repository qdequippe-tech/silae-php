<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LectureCCNSocieteResponse;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LectureCCNSocieteResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\LectureCCNSocieteResponse' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof LectureCCNSocieteResponse;
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
        $object = new LectureCCNSocieteResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ccnSociete', $data) && null !== $data['ccnSociete']) {
            $values = [];
            foreach ($data['ccnSociete'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\CCNSociete', 'json', $context);
            }
            $object->setCcnSociete($values);
        } elseif (\array_key_exists('ccnSociete', $data) && null === $data['ccnSociete']) {
            $object->setCcnSociete(null);
        }
        if (\array_key_exists('pasDeCCSiege', $data) && null !== $data['pasDeCCSiege']) {
            $object->setPasDeCCSiege($data['pasDeCCSiege']);
        } elseif (\array_key_exists('pasDeCCSiege', $data) && null === $data['pasDeCCSiege']) {
            $object->setPasDeCCSiege(null);
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
        if ($object->isInitialized('ccnSociete') && null !== $object->getCcnSociete()) {
            $values = [];
            foreach ($object->getCcnSociete() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ccnSociete'] = $values;
        }
        if ($object->isInitialized('pasDeCCSiege') && null !== $object->getPasDeCCSiege()) {
            $data['pasDeCCSiege'] = $object->getPasDeCCSiege();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\LectureCCNSocieteResponse' => false];
    }
}
