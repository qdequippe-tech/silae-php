<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\StatistiquesProductionUtilisateur;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatistiquesProductionUtilisateurNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return StatistiquesProductionUtilisateur::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && StatistiquesProductionUtilisateur::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new StatistiquesProductionUtilisateur();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('identifiantUtilisateur', $data) && null !== $data['identifiantUtilisateur']) {
            $object->setIdentifiantUtilisateur($data['identifiantUtilisateur']);
        } elseif (\array_key_exists('identifiantUtilisateur', $data) && null === $data['identifiantUtilisateur']) {
            $object->setIdentifiantUtilisateur(null);
        }

        if (\array_key_exists('periode', $data) && null !== $data['periode']) {
            $object->setPeriode(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periode']));
        } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
            $object->setPeriode(null);
        }

        if (\array_key_exists('nbBulletins', $data) && null !== $data['nbBulletins']) {
            $object->setNbBulletins($data['nbBulletins']);
        } elseif (\array_key_exists('nbBulletins', $data) && null === $data['nbBulletins']) {
            $object->setNbBulletins(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('identifiantUtilisateur') && null !== $data->getIdentifiantUtilisateur()) {
            $dataArray['identifiantUtilisateur'] = $data->getIdentifiantUtilisateur();
        }

        if ($data->isInitialized('periode') && null !== $data->getPeriode()) {
            $dataArray['periode'] = $data->getPeriode()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('nbBulletins') && null !== $data->getNbBulletins()) {
            $dataArray['nbBulletins'] = $data->getNbBulletins();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [StatistiquesProductionUtilisateur::class => false];
    }
}
