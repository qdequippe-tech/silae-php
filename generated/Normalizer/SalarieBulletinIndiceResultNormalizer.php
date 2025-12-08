<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieBulletinIndiceResult;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieBulletinIndiceResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieBulletinIndiceResult::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieBulletinIndiceResult::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieBulletinIndiceResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('indicePeriode', $data) && null !== $data['indicePeriode']) {
            $object->setIndicePeriode($data['indicePeriode']);
        } elseif (\array_key_exists('indicePeriode', $data) && null === $data['indicePeriode']) {
            $object->setIndicePeriode(null);
        }

        if (\array_key_exists('bul_Com1', $data) && null !== $data['bul_Com1']) {
            $object->setBulCom1($data['bul_Com1']);
        } elseif (\array_key_exists('bul_Com1', $data) && null === $data['bul_Com1']) {
            $object->setBulCom1(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('indicePeriode') && null !== $data->getIndicePeriode()) {
            $dataArray['indicePeriode'] = $data->getIndicePeriode();
        }

        if ($data->isInitialized('bulCom1') && null !== $data->getBulCom1()) {
            $dataArray['bul_Com1'] = $data->getBulCom1();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieBulletinIndiceResult::class => false];
    }
}
