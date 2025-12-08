<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AjoutSousCategorieAxeAnalytiqueRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AjoutSousCategorieAxeAnalytiqueRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AjoutSousCategorieAxeAnalytiqueRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AjoutSousCategorieAxeAnalytiqueRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new AjoutSousCategorieAxeAnalytiqueRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nomAxe', $data) && null !== $data['nomAxe']) {
            $object->setNomAxe($data['nomAxe']);
        } elseif (\array_key_exists('nomAxe', $data) && null === $data['nomAxe']) {
            $object->setNomAxe(null);
        }

        if (\array_key_exists('nomSousCategorie', $data) && null !== $data['nomSousCategorie']) {
            $object->setNomSousCategorie($data['nomSousCategorie']);
        } elseif (\array_key_exists('nomSousCategorie', $data) && null === $data['nomSousCategorie']) {
            $object->setNomSousCategorie(null);
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nomAxe') && null !== $data->getNomAxe()) {
            $dataArray['nomAxe'] = $data->getNomAxe();
        }

        if ($data->isInitialized('nomSousCategorie') && null !== $data->getNomSousCategorie()) {
            $dataArray['nomSousCategorie'] = $data->getNomSousCategorie();
        }

        $dataArray['numeroDossier'] = $data->getNumeroDossier();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AjoutSousCategorieAxeAnalytiqueRequest::class => false];
    }
}
