<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ModificationChampByte;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ModificationChampByteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ModificationChampByte::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ModificationChampByte::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ModificationChampByte();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nomChamp', $data) && null !== $data['nomChamp']) {
            $object->setNomChamp($data['nomChamp']);
        } elseif (\array_key_exists('nomChamp', $data) && null === $data['nomChamp']) {
            $object->setNomChamp(null);
        }

        if (\array_key_exists('valeurByte', $data) && null !== $data['valeurByte']) {
            $object->setValeurByte($data['valeurByte']);
        } elseif (\array_key_exists('valeurByte', $data) && null === $data['valeurByte']) {
            $object->setValeurByte(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nomChamp') && null !== $data->getNomChamp()) {
            $dataArray['nomChamp'] = $data->getNomChamp();
        }

        if ($data->isInitialized('valeurByte') && null !== $data->getValeurByte()) {
            $dataArray['valeurByte'] = $data->getValeurByte();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ModificationChampByte::class => false];
    }
}
