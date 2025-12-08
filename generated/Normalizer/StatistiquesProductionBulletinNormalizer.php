<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\StatistiquesProductionBulletin;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatistiquesProductionBulletinNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return StatistiquesProductionBulletin::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && StatistiquesProductionBulletin::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new StatistiquesProductionBulletin();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('periodePaie', $data) && null !== $data['periodePaie']) {
            $object->setPeriodePaie(\DateTime::createFromFormat('Y-m-d', $data['periodePaie'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('periodePaie', $data) && null === $data['periodePaie']) {
            $object->setPeriodePaie(null);
        }

        if (\array_key_exists('nbBulletinsOriginaux', $data) && null !== $data['nbBulletinsOriginaux']) {
            $object->setNbBulletinsOriginaux($data['nbBulletinsOriginaux']);
        } elseif (\array_key_exists('nbBulletinsOriginaux', $data) && null === $data['nbBulletinsOriginaux']) {
            $object->setNbBulletinsOriginaux(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('periodePaie') && null !== $data->getPeriodePaie()) {
            $dataArray['periodePaie'] = $data->getPeriodePaie()->format('Y-m-d');
        }

        if ($data->isInitialized('nbBulletinsOriginaux') && null !== $data->getNbBulletinsOriginaux()) {
            $dataArray['nbBulletinsOriginaux'] = $data->getNbBulletinsOriginaux();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [StatistiquesProductionBulletin::class => false];
    }
}
