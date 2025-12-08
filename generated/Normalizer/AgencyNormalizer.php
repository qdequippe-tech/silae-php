<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\Agency;
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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return Agency::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && Agency::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new Agency();
        if (\array_key_exists('isPrincipal', $data) && \is_int($data['isPrincipal'])) {
            $data['isPrincipal'] = (bool) $data['isPrincipal'];
        }

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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('internalId') && null !== $data->getInternalId()) {
            $dataArray['internalId'] = $data->getInternalId();
        }

        if ($data->isInitialized('codeClientFacturation') && null !== $data->getCodeClientFacturation()) {
            $dataArray['codeClientFacturation'] = $data->getCodeClientFacturation();
        }

        if ($data->isInitialized('codeAgence') && null !== $data->getCodeAgence()) {
            $dataArray['codeAgence'] = $data->getCodeAgence();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Agency::class => false];
    }
}
