<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieRecupererPeriodeDernierBulletinCalculeResponse;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieRecupererPeriodeDernierBulletinCalculeResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieRecupererPeriodeDernierBulletinCalculeResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieRecupererPeriodeDernierBulletinCalculeResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieRecupererPeriodeDernierBulletinCalculeResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('periodeDernierBulletinCalcule', $data) && null !== $data['periodeDernierBulletinCalcule']) {
            $object->setPeriodeDernierBulletinCalcule(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeDernierBulletinCalcule']));
        } elseif (\array_key_exists('periodeDernierBulletinCalcule', $data) && null === $data['periodeDernierBulletinCalcule']) {
            $object->setPeriodeDernierBulletinCalcule(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('periodeDernierBulletinCalcule') && null !== $data->getPeriodeDernierBulletinCalcule()) {
            $dataArray['periodeDernierBulletinCalcule'] = $data->getPeriodeDernierBulletinCalcule()->format('Y-m-d\TH:i:s');
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieRecupererPeriodeDernierBulletinCalculeResponse::class => false];
    }
}
