<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LigneBulletin;
use QdequippeTech\Silae\Api\Model\SalarieBulletinEnteteSimpleResult;
use QdequippeTech\Silae\Api\Model\SalarieBulletinResult;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieBulletinResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieBulletinResult::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieBulletinResult::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieBulletinResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('identifiantBulletin', $data) && null !== $data['identifiantBulletin']) {
            $object->setIdentifiantBulletin($data['identifiantBulletin']);
        } elseif (\array_key_exists('identifiantBulletin', $data) && null === $data['identifiantBulletin']) {
            $object->setIdentifiantBulletin(null);
        }

        if (\array_key_exists('entete', $data) && null !== $data['entete']) {
            $object->setEntete($this->denormalizer->denormalize($data['entete'], SalarieBulletinEnteteSimpleResult::class, 'json', $context));
        } elseif (\array_key_exists('entete', $data) && null === $data['entete']) {
            $object->setEntete(null);
        }

        if (\array_key_exists('lignesBulletin', $data) && null !== $data['lignesBulletin']) {
            $values = [];
            foreach ($data['lignesBulletin'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, LigneBulletin::class, 'json', $context);
            }

            $object->setLignesBulletin($values);
        } elseif (\array_key_exists('lignesBulletin', $data) && null === $data['lignesBulletin']) {
            $object->setLignesBulletin(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('identifiantBulletin') && null !== $data->getIdentifiantBulletin()) {
            $dataArray['identifiantBulletin'] = $data->getIdentifiantBulletin();
        }

        if ($data->isInitialized('entete') && null !== $data->getEntete()) {
            $dataArray['entete'] = $this->normalizer->normalize($data->getEntete(), 'json', $context);
        }

        if ($data->isInitialized('lignesBulletin') && null !== $data->getLignesBulletin()) {
            $values = [];
            foreach ($data->getLignesBulletin() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['lignesBulletin'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieBulletinResult::class => false];
    }
}
