<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\HistoriqueDesModificationsResponse;
use QdequippeTech\Silae\Api\Model\HistoriqueModification;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HistoriqueDesModificationsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return HistoriqueDesModificationsResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && HistoriqueDesModificationsResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new HistoriqueDesModificationsResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('modifications', $data) && null !== $data['modifications']) {
            $values = [];
            foreach ($data['modifications'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, HistoriqueModification::class, 'json', $context);
            }

            $object->setModifications($values);
        } elseif (\array_key_exists('modifications', $data) && null === $data['modifications']) {
            $object->setModifications(null);
        }

        if (\array_key_exists('warning', $data) && null !== $data['warning']) {
            $object->setWarning($data['warning']);
        } elseif (\array_key_exists('warning', $data) && null === $data['warning']) {
            $object->setWarning(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('modifications') && null !== $data->getModifications()) {
            $values = [];
            foreach ($data->getModifications() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['modifications'] = $values;
        }

        if ($data->isInitialized('warning') && null !== $data->getWarning()) {
            $dataArray['warning'] = $data->getWarning();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [HistoriqueDesModificationsResponse::class => false];
    }
}
