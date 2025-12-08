<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\StatistiquesProductionBulletinCoffreFort;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatistiquesProductionBulletinCoffreFortNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return StatistiquesProductionBulletinCoffreFort::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && StatistiquesProductionBulletinCoffreFort::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new StatistiquesProductionBulletinCoffreFort();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('periodePaie', $data) && null !== $data['periodePaie']) {
            $object->setPeriodePaie(\DateTime::createFromFormat('Y-m-d', $data['periodePaie'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('periodePaie', $data) && null === $data['periodePaie']) {
            $object->setPeriodePaie(null);
        }

        if (\array_key_exists('nbBulletinsCoffresForts', $data) && null !== $data['nbBulletinsCoffresForts']) {
            $object->setNbBulletinsCoffresForts($data['nbBulletinsCoffresForts']);
        } elseif (\array_key_exists('nbBulletinsCoffresForts', $data) && null === $data['nbBulletinsCoffresForts']) {
            $object->setNbBulletinsCoffresForts(null);
        }

        if (\array_key_exists('nbBulletinsCoffresFortsEditique', $data) && null !== $data['nbBulletinsCoffresFortsEditique']) {
            $object->setNbBulletinsCoffresFortsEditique($data['nbBulletinsCoffresFortsEditique']);
        } elseif (\array_key_exists('nbBulletinsCoffresFortsEditique', $data) && null === $data['nbBulletinsCoffresFortsEditique']) {
            $object->setNbBulletinsCoffresFortsEditique(null);
        }

        if (\array_key_exists('nbDocsSortieCoffresForts', $data) && null !== $data['nbDocsSortieCoffresForts']) {
            $object->setNbDocsSortieCoffresForts($data['nbDocsSortieCoffresForts']);
        } elseif (\array_key_exists('nbDocsSortieCoffresForts', $data) && null === $data['nbDocsSortieCoffresForts']) {
            $object->setNbDocsSortieCoffresForts(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('periodePaie') && null !== $data->getPeriodePaie()) {
            $dataArray['periodePaie'] = $data->getPeriodePaie()->format('Y-m-d');
        }

        if ($data->isInitialized('nbBulletinsCoffresForts') && null !== $data->getNbBulletinsCoffresForts()) {
            $dataArray['nbBulletinsCoffresForts'] = $data->getNbBulletinsCoffresForts();
        }

        if ($data->isInitialized('nbBulletinsCoffresFortsEditique') && null !== $data->getNbBulletinsCoffresFortsEditique()) {
            $dataArray['nbBulletinsCoffresFortsEditique'] = $data->getNbBulletinsCoffresFortsEditique();
        }

        if ($data->isInitialized('nbDocsSortieCoffresForts') && null !== $data->getNbDocsSortieCoffresForts()) {
            $dataArray['nbDocsSortieCoffresForts'] = $data->getNbDocsSortieCoffresForts();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [StatistiquesProductionBulletinCoffreFort::class => false];
    }
}
