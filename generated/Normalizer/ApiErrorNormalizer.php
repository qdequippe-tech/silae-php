<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ApiError;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ApiErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ApiError::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ApiError::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new ApiError();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }

        if (\array_key_exists('message', $data) && null !== $data['message']) {
            $object->setMessage($data['message']);
        } elseif (\array_key_exists('message', $data) && null === $data['message']) {
            $object->setMessage(null);
        }

        if (\array_key_exists('metadata', $data) && null !== $data['metadata']) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value) {
                $values[$key] = $value;
            }

            $object->setMetadata($values);
        } elseif (\array_key_exists('metadata', $data) && null === $data['metadata']) {
            $object->setMetadata(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('message') && null !== $data->getMessage()) {
            $dataArray['message'] = $data->getMessage();
        }

        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values = [];
            foreach ($data->getMetadata() as $key => $value) {
                $values[$key] = $value;
            }

            $dataArray['metadata'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ApiError::class => false];
    }
}
