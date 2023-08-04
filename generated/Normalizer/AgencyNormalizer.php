<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use QdequippeTech\Silae\Api\Model\Agency;
use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AgencyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\Agency' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\Agency' === $data::class;
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
        $object = new Agency();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('internalId', $data) && null !== $data['internalId']) {
            $object->setInternalId($data['internalId']);
        } elseif (\array_key_exists('internalId', $data) && null === $data['internalId']) {
            $object->setInternalId(null);
        }
        if (\array_key_exists('isPrincipal', $data) && null !== $data['isPrincipal']) {
            $object->setIsPrincipal($data['isPrincipal']);
        } elseif (\array_key_exists('isPrincipal', $data) && null === $data['isPrincipal']) {
            $object->setIsPrincipal(null);
        }
        if (\array_key_exists('codeClientFacturation', $data) && null !== $data['codeClientFacturation']) {
            $object->setCodeClientFacturation($data['codeClientFacturation']);
        } elseif (\array_key_exists('codeClientFacturation', $data) && null === $data['codeClientFacturation']) {
            $object->setCodeClientFacturation(null);
        }
        if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
            $object->setCodeAgence($data['codeAgence']);
        } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
            $object->setCodeAgence(null);
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
        if ($object->isInitialized('internalId') && null !== $object->getInternalId()) {
            $data['internalId'] = $object->getInternalId();
        }
        if ($object->isInitialized('codeClientFacturation') && null !== $object->getCodeClientFacturation()) {
            $data['codeClientFacturation'] = $object->getCodeClientFacturation();
        }
        if ($object->isInitialized('codeAgence') && null !== $object->getCodeAgence()) {
            $data['codeAgence'] = $object->getCodeAgence();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\Agency' => false];
    }
}
