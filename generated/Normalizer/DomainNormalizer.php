<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\Domain;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DomainNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\Domain' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof Domain;
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
        $object = new Domain();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('internalId', $data) && null !== $data['internalId']) {
            $object->setInternalId($data['internalId']);
        } elseif (\array_key_exists('internalId', $data) && null === $data['internalId']) {
            $object->setInternalId(null);
        }
        if (\array_key_exists('groupName', $data) && null !== $data['groupName']) {
            $object->setGroupName($data['groupName']);
        } elseif (\array_key_exists('groupName', $data) && null === $data['groupName']) {
            $object->setGroupName(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('validityStartDate', $data) && null !== $data['validityStartDate']) {
            $object->setValidityStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['validityStartDate']));
        } elseif (\array_key_exists('validityStartDate', $data) && null === $data['validityStartDate']) {
            $object->setValidityStartDate(null);
        }
        if (\array_key_exists('validityEndDate', $data) && null !== $data['validityEndDate']) {
            $object->setValidityEndDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['validityEndDate']));
        } elseif (\array_key_exists('validityEndDate', $data) && null === $data['validityEndDate']) {
            $object->setValidityEndDate(null);
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
        if ($object->isInitialized('groupName') && null !== $object->getGroupName()) {
            $data['groupName'] = $object->getGroupName();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('validityStartDate') && null !== $object->getValidityStartDate()) {
            $data['validityStartDate'] = $object->getValidityStartDate()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('validityEndDate') && null !== $object->getValidityEndDate()) {
            $data['validityEndDate'] = $object->getValidityEndDate()->format('Y-m-d\\TH:i:s');
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\Domain' => false];
    }
}
