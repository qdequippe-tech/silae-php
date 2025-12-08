<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ExtraManifestation;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ExtraManifestationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ExtraManifestation::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ExtraManifestation::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ExtraManifestation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
        } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement(null);
        }

        if (\array_key_exists('axeAnalytique', $data) && null !== $data['axeAnalytique']) {
            $object->setAxeAnalytique($data['axeAnalytique']);
        } elseif (\array_key_exists('axeAnalytique', $data) && null === $data['axeAnalytique']) {
            $object->setAxeAnalytique(null);
        }

        if (\array_key_exists('valeurAxeAnalytique', $data) && null !== $data['valeurAxeAnalytique']) {
            $object->setValeurAxeAnalytique($data['valeurAxeAnalytique']);
        } elseif (\array_key_exists('valeurAxeAnalytique', $data) && null === $data['valeurAxeAnalytique']) {
            $object->setValeurAxeAnalytique(null);
        }

        if (\array_key_exists('axeAnalytique2', $data) && null !== $data['axeAnalytique2']) {
            $object->setAxeAnalytique2($data['axeAnalytique2']);
        } elseif (\array_key_exists('axeAnalytique2', $data) && null === $data['axeAnalytique2']) {
            $object->setAxeAnalytique2(null);
        }

        if (\array_key_exists('valeurAxeAnalytique2', $data) && null !== $data['valeurAxeAnalytique2']) {
            $object->setValeurAxeAnalytique2($data['valeurAxeAnalytique2']);
        } elseif (\array_key_exists('valeurAxeAnalytique2', $data) && null === $data['valeurAxeAnalytique2']) {
            $object->setValeurAxeAnalytique2(null);
        }

        if (\array_key_exists('referenceExterneManifestation', $data) && null !== $data['referenceExterneManifestation']) {
            $object->setReferenceExterneManifestation($data['referenceExterneManifestation']);
        } elseif (\array_key_exists('referenceExterneManifestation', $data) && null === $data['referenceExterneManifestation']) {
            $object->setReferenceExterneManifestation(null);
        }

        if (\array_key_exists('intituleManifestation', $data) && null !== $data['intituleManifestation']) {
            $object->setIntituleManifestation($data['intituleManifestation']);
        } elseif (\array_key_exists('intituleManifestation', $data) && null === $data['intituleManifestation']) {
            $object->setIntituleManifestation(null);
        }

        if (\array_key_exists('dateDebut', $data) && null !== $data['dateDebut']) {
            $object->setDateDebut(\DateTime::createFromFormat('Y-m-d', $data['dateDebut'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
            $object->setDateDebut(null);
        }

        if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
            $object->setDateFin(\DateTime::createFromFormat('Y-m-d', $data['dateFin'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('dateFin', $data) && null === $data['dateFin']) {
            $object->setDateFin(null);
        }

        if (\array_key_exists('axeAnalytique3', $data) && null !== $data['axeAnalytique3']) {
            $object->setAxeAnalytique3($data['axeAnalytique3']);
        } elseif (\array_key_exists('axeAnalytique3', $data) && null === $data['axeAnalytique3']) {
            $object->setAxeAnalytique3(null);
        }

        if (\array_key_exists('valeurAxeAnalytique3', $data) && null !== $data['valeurAxeAnalytique3']) {
            $object->setValeurAxeAnalytique3($data['valeurAxeAnalytique3']);
        } elseif (\array_key_exists('valeurAxeAnalytique3', $data) && null === $data['valeurAxeAnalytique3']) {
            $object->setValeurAxeAnalytique3(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nomInterneEtablissement') && null !== $data->getNomInterneEtablissement()) {
            $dataArray['nomInterneEtablissement'] = $data->getNomInterneEtablissement();
        }

        if ($data->isInitialized('axeAnalytique') && null !== $data->getAxeAnalytique()) {
            $dataArray['axeAnalytique'] = $data->getAxeAnalytique();
        }

        if ($data->isInitialized('valeurAxeAnalytique') && null !== $data->getValeurAxeAnalytique()) {
            $dataArray['valeurAxeAnalytique'] = $data->getValeurAxeAnalytique();
        }

        if ($data->isInitialized('axeAnalytique2') && null !== $data->getAxeAnalytique2()) {
            $dataArray['axeAnalytique2'] = $data->getAxeAnalytique2();
        }

        if ($data->isInitialized('valeurAxeAnalytique2') && null !== $data->getValeurAxeAnalytique2()) {
            $dataArray['valeurAxeAnalytique2'] = $data->getValeurAxeAnalytique2();
        }

        if ($data->isInitialized('referenceExterneManifestation') && null !== $data->getReferenceExterneManifestation()) {
            $dataArray['referenceExterneManifestation'] = $data->getReferenceExterneManifestation();
        }

        if ($data->isInitialized('intituleManifestation') && null !== $data->getIntituleManifestation()) {
            $dataArray['intituleManifestation'] = $data->getIntituleManifestation();
        }

        if ($data->isInitialized('dateDebut') && null !== $data->getDateDebut()) {
            $dataArray['dateDebut'] = $data->getDateDebut()->format('Y-m-d');
        }

        if ($data->isInitialized('dateFin') && null !== $data->getDateFin()) {
            $dataArray['dateFin'] = $data->getDateFin()->format('Y-m-d');
        }

        if ($data->isInitialized('axeAnalytique3') && null !== $data->getAxeAnalytique3()) {
            $dataArray['axeAnalytique3'] = $data->getAxeAnalytique3();
        }

        if ($data->isInitialized('valeurAxeAnalytique3') && null !== $data->getValeurAxeAnalytique3()) {
            $dataArray['valeurAxeAnalytique3'] = $data->getValeurAxeAnalytique3();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ExtraManifestation::class => false];
    }
}
