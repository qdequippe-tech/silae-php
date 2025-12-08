<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ExistenceMatriculeResponse;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ExistenceMatriculeResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ExistenceMatriculeResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ExistenceMatriculeResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ExistenceMatriculeResponse();
        if (\array_key_exists('existe', $data) && \is_int($data['existe'])) {
            $data['existe'] = (bool) $data['existe'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('existe', $data) && null !== $data['existe']) {
            $object->setExiste($data['existe']);
        } elseif (\array_key_exists('existe', $data) && null === $data['existe']) {
            $object->setExiste(null);
        }

        if (\array_key_exists('matricules', $data) && null !== $data['matricules']) {
            $values = [];
            foreach ($data['matricules'] as $value) {
                $values[] = $value;
            }

            $object->setMatricules($values);
        } elseif (\array_key_exists('matricules', $data) && null === $data['matricules']) {
            $object->setMatricules(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('existe') && null !== $data->getExiste()) {
            $dataArray['existe'] = $data->getExiste();
        }

        if ($data->isInitialized('matricules') && null !== $data->getMatricules()) {
            $values = [];
            foreach ($data->getMatricules() as $value) {
                $values[] = $value;
            }

            $dataArray['matricules'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ExistenceMatriculeResponse::class => false];
    }
}
