<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\Spectacle;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SpectacleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return Spectacle::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && Spectacle::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new Spectacle();
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

        if (\array_key_exists('referenceExterneSpectacle', $data) && null !== $data['referenceExterneSpectacle']) {
            $object->setReferenceExterneSpectacle($data['referenceExterneSpectacle']);
        } elseif (\array_key_exists('referenceExterneSpectacle', $data) && null === $data['referenceExterneSpectacle']) {
            $object->setReferenceExterneSpectacle(null);
        }

        if (\array_key_exists('numeroObjet', $data) && null !== $data['numeroObjet']) {
            $object->setNumeroObjet($data['numeroObjet']);
        } elseif (\array_key_exists('numeroObjet', $data) && null === $data['numeroObjet']) {
            $object->setNumeroObjet(null);
        }

        if (\array_key_exists('intituleSpectacle', $data) && null !== $data['intituleSpectacle']) {
            $object->setIntituleSpectacle($data['intituleSpectacle']);
        } elseif (\array_key_exists('intituleSpectacle', $data) && null === $data['intituleSpectacle']) {
            $object->setIntituleSpectacle(null);
        }

        if (\array_key_exists('dateDebut', $data) && null !== $data['dateDebut']) {
            $object->setDateDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDebut']));
        } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
            $object->setDateDebut(null);
        }

        if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
            $object->setDateFin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateFin']));
        } elseif (\array_key_exists('dateFin', $data) && null === $data['dateFin']) {
            $object->setDateFin(null);
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

        if ($data->isInitialized('axeAnalytique3') && null !== $data->getAxeAnalytique3()) {
            $dataArray['axeAnalytique3'] = $data->getAxeAnalytique3();
        }

        if ($data->isInitialized('valeurAxeAnalytique3') && null !== $data->getValeurAxeAnalytique3()) {
            $dataArray['valeurAxeAnalytique3'] = $data->getValeurAxeAnalytique3();
        }

        if ($data->isInitialized('referenceExterneSpectacle') && null !== $data->getReferenceExterneSpectacle()) {
            $dataArray['referenceExterneSpectacle'] = $data->getReferenceExterneSpectacle();
        }

        if ($data->isInitialized('numeroObjet') && null !== $data->getNumeroObjet()) {
            $dataArray['numeroObjet'] = $data->getNumeroObjet();
        }

        if ($data->isInitialized('intituleSpectacle') && null !== $data->getIntituleSpectacle()) {
            $dataArray['intituleSpectacle'] = $data->getIntituleSpectacle();
        }

        if ($data->isInitialized('dateDebut') && null !== $data->getDateDebut()) {
            $dataArray['dateDebut'] = $data->getDateDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateFin') && null !== $data->getDateFin()) {
            $dataArray['dateFin'] = $data->getDateFin()->format('Y-m-d\TH:i:s');
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Spectacle::class => false];
    }
}
