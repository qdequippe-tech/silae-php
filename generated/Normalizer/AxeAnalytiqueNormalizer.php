<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AxeAnalytique;
use QdequippeTech\Silae\Api\Model\SousCategorie;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AxeAnalytiqueNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AxeAnalytique::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AxeAnalytique::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new AxeAnalytique();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('titreCategorie', $data) && null !== $data['titreCategorie']) {
            $object->setTitreCategorie($data['titreCategorie']);
        } elseif (\array_key_exists('titreCategorie', $data) && null === $data['titreCategorie']) {
            $object->setTitreCategorie(null);
        }

        if (\array_key_exists('sousCategorie', $data) && null !== $data['sousCategorie']) {
            $values = [];
            foreach ($data['sousCategorie'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, SousCategorie::class, 'json', $context);
            }

            $object->setSousCategorie($values);
        } elseif (\array_key_exists('sousCategorie', $data) && null === $data['sousCategorie']) {
            $object->setSousCategorie(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('titreCategorie') && null !== $data->getTitreCategorie()) {
            $dataArray['titreCategorie'] = $data->getTitreCategorie();
        }

        if ($data->isInitialized('sousCategorie') && null !== $data->getSousCategorie()) {
            $values = [];
            foreach ($data->getSousCategorie() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['sousCategorie'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AxeAnalytique::class => false];
    }
}
