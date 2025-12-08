<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EffectifEtablissement;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EffectifEtablissementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EffectifEtablissement::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EffectifEtablissement::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new EffectifEtablissement();
        if (\array_key_exists('effectifCT', $data) && \is_int($data['effectifCT'])) {
            $data['effectifCT'] = (float) $data['effectifCT'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('annee', $data) && null !== $data['annee']) {
            $object->setAnnee(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['annee']));
        } elseif (\array_key_exists('annee', $data) && null === $data['annee']) {
            $object->setAnnee(null);
        }

        if (\array_key_exists('effectifCT', $data) && null !== $data['effectifCT']) {
            $object->setEffectifCT($data['effectifCT']);
        } elseif (\array_key_exists('effectifCT', $data) && null === $data['effectifCT']) {
            $object->setEffectifCT(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('annee') && null !== $data->getAnnee()) {
            $dataArray['annee'] = $data->getAnnee()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('effectifCT') && null !== $data->getEffectifCT()) {
            $dataArray['effectifCT'] = $data->getEffectifCT();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EffectifEtablissement::class => false];
    }
}
