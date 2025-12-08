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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return Domain::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && Domain::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->setValidityStartDate(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['validityStartDate']));
        } elseif (\array_key_exists('validityStartDate', $data) && null === $data['validityStartDate']) {
            $object->setValidityStartDate(null);
        }

        if (\array_key_exists('validityEndDate', $data) && null !== $data['validityEndDate']) {
            $object->setValidityEndDate(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['validityEndDate']));
        } elseif (\array_key_exists('validityEndDate', $data) && null === $data['validityEndDate']) {
            $object->setValidityEndDate(null);
        }

        if (\array_key_exists('silaePaieApiUrl', $data) && null !== $data['silaePaieApiUrl']) {
            $object->setSilaePaieApiUrl($data['silaePaieApiUrl']);
        } elseif (\array_key_exists('silaePaieApiUrl', $data) && null === $data['silaePaieApiUrl']) {
            $object->setSilaePaieApiUrl(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('internalId') && null !== $data->getInternalId()) {
            $dataArray['internalId'] = $data->getInternalId();
        }

        if ($data->isInitialized('groupName') && null !== $data->getGroupName()) {
            $dataArray['groupName'] = $data->getGroupName();
        }

        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }

        if ($data->isInitialized('validityStartDate') && null !== $data->getValidityStartDate()) {
            $dataArray['validityStartDate'] = $data->getValidityStartDate()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('validityEndDate') && null !== $data->getValidityEndDate()) {
            $dataArray['validityEndDate'] = $data->getValidityEndDate()->format('Y-m-d\TH:i:s');
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Domain::class => false];
    }
}
