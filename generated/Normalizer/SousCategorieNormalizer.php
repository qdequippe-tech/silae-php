<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SousCategorie;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SousCategorieNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SousCategorie::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SousCategorie::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SousCategorie();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nomSousCategorie', $data) && null !== $data['nomSousCategorie']) {
            $object->setNomSousCategorie($data['nomSousCategorie']);
        } elseif (\array_key_exists('nomSousCategorie', $data) && null === $data['nomSousCategorie']) {
            $object->setNomSousCategorie(null);
        }

        if (\array_key_exists('nouveauNomSousCategorie', $data) && null !== $data['nouveauNomSousCategorie']) {
            $object->setNouveauNomSousCategorie($data['nouveauNomSousCategorie']);
        } elseif (\array_key_exists('nouveauNomSousCategorie', $data) && null === $data['nouveauNomSousCategorie']) {
            $object->setNouveauNomSousCategorie(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nomSousCategorie') && null !== $data->getNomSousCategorie()) {
            $dataArray['nomSousCategorie'] = $data->getNomSousCategorie();
        }

        if ($data->isInitialized('nouveauNomSousCategorie') && null !== $data->getNouveauNomSousCategorie()) {
            $dataArray['nouveauNomSousCategorie'] = $data->getNouveauNomSousCategorie();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SousCategorie::class => false];
    }
}
