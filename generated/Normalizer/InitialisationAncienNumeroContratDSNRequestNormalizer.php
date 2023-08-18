<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\InitialisationAncienNumeroContratDSNRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class InitialisationAncienNumeroContratDSNRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\InitialisationAncienNumeroContratDSNRequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof InitialisationAncienNumeroContratDSNRequest;
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
        $object = new InitialisationAncienNumeroContratDSNRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('initAncienContratDSN', $data) && null !== $data['initAncienContratDSN']) {
            $object->setInitAncienContratDSN($this->denormalizer->denormalize($data['initAncienContratDSN'], 'QdequippeTech\\Silae\\Api\\Model\\InitialisationAncienNumeroContratDSN', 'json', $context));
        } elseif (\array_key_exists('initAncienContratDSN', $data) && null === $data['initAncienContratDSN']) {
            $object->setInitAncienContratDSN(null);
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
        if ($object->isInitialized('initAncienContratDSN') && null !== $object->getInitAncienContratDSN()) {
            $data['initAncienContratDSN'] = $this->normalizer->normalize($object->getInitAncienContratDSN(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\InitialisationAncienNumeroContratDSNRequest' => false];
    }
}
