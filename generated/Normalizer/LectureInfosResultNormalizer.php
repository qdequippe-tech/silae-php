<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LectureInfosResult;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LectureInfosResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return LectureInfosResult::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && LectureInfosResult::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new LectureInfosResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('champ', $data) && null !== $data['champ']) {
            $object->setChamp($data['champ']);
        } elseif (\array_key_exists('champ', $data) && null === $data['champ']) {
            $object->setChamp(null);
        }

        if (\array_key_exists('valeur', $data) && null !== $data['valeur']) {
            $object->setValeur($data['valeur']);
        } elseif (\array_key_exists('valeur', $data) && null === $data['valeur']) {
            $object->setValeur(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('champ') && null !== $data->getChamp()) {
            $dataArray['champ'] = $data->getChamp();
        }

        if ($data->isInitialized('valeur') && null !== $data->getValeur()) {
            $dataArray['valeur'] = $data->getValeur();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [LectureInfosResult::class => false];
    }
}
