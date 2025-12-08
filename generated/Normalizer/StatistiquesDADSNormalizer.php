<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\StatistiquesDADS;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatistiquesDADSNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return StatistiquesDADS::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && StatistiquesDADS::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new StatistiquesDADS();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('annee', $data) && null !== $data['annee']) {
            $object->setAnnee($data['annee']);
        } elseif (\array_key_exists('annee', $data) && null === $data['annee']) {
            $object->setAnnee(null);
        }

        if (\array_key_exists('nbSalaries', $data) && null !== $data['nbSalaries']) {
            $object->setNbSalaries($data['nbSalaries']);
        } elseif (\array_key_exists('nbSalaries', $data) && null === $data['nbSalaries']) {
            $object->setNbSalaries(null);
        }

        if (\array_key_exists('effectif3112', $data) && null !== $data['effectif3112']) {
            $object->setEffectif3112($data['effectif3112']);
        } elseif (\array_key_exists('effectif3112', $data) && null === $data['effectif3112']) {
            $object->setEffectif3112(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('annee') && null !== $data->getAnnee()) {
            $dataArray['annee'] = $data->getAnnee();
        }

        if ($data->isInitialized('nbSalaries') && null !== $data->getNbSalaries()) {
            $dataArray['nbSalaries'] = $data->getNbSalaries();
        }

        if ($data->isInitialized('effectif3112') && null !== $data->getEffectif3112()) {
            $dataArray['effectif3112'] = $data->getEffectif3112();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [StatistiquesDADS::class => false];
    }
}
