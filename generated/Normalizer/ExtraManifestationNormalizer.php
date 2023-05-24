<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\ExtraManifestation' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\ExtraManifestation' === $data::class;
    }

    /**
     * @param mixed|null $format
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \QdequippeTech\Silae\Api\Model\ExtraManifestation();
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
            $object->setDateDebut(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateDebut']));
        } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
            $object->setDateDebut(null);
        }
        if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
            $object->setDateFin(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateFin']));
        } elseif (\array_key_exists('dateFin', $data) && null === $data['dateFin']) {
            $object->setDateFin(null);
        }

        return $object;
    }

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
            $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
        }
        if ($object->isInitialized('axeAnalytique') && null !== $object->getAxeAnalytique()) {
            $data['axeAnalytique'] = $object->getAxeAnalytique();
        }
        if ($object->isInitialized('valeurAxeAnalytique') && null !== $object->getValeurAxeAnalytique()) {
            $data['valeurAxeAnalytique'] = $object->getValeurAxeAnalytique();
        }
        if ($object->isInitialized('axeAnalytique2') && null !== $object->getAxeAnalytique2()) {
            $data['axeAnalytique2'] = $object->getAxeAnalytique2();
        }
        if ($object->isInitialized('valeurAxeAnalytique2') && null !== $object->getValeurAxeAnalytique2()) {
            $data['valeurAxeAnalytique2'] = $object->getValeurAxeAnalytique2();
        }
        if ($object->isInitialized('referenceExterneManifestation') && null !== $object->getReferenceExterneManifestation()) {
            $data['referenceExterneManifestation'] = $object->getReferenceExterneManifestation();
        }
        if ($object->isInitialized('intituleManifestation') && null !== $object->getIntituleManifestation()) {
            $data['intituleManifestation'] = $object->getIntituleManifestation();
        }
        if ($object->isInitialized('dateDebut') && null !== $object->getDateDebut()) {
            $data['dateDebut'] = $object->getDateDebut()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('dateFin') && null !== $object->getDateFin()) {
            $data['dateFin'] = $object->getDateFin()->format('Y-m-d\\TH:i:sP');
        }

        return $data;
    }
}
