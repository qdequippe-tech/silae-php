<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieEmploiExterneInformations;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieEmploiExterneInformationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieEmploiExterneInformations' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof SalarieEmploiExterneInformations;
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
        $object = new SalarieEmploiExterneInformations();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('identifiantEmploi', $data) && null !== $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi($data['identifiantEmploi']);
        } elseif (\array_key_exists('identifiantEmploi', $data) && null === $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi(null);
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
        if (\array_key_exists('intituleEmploi', $data) && null !== $data['intituleEmploi']) {
            $object->setIntituleEmploi($data['intituleEmploi']);
        } elseif (\array_key_exists('intituleEmploi', $data) && null === $data['intituleEmploi']) {
            $object->setIntituleEmploi(null);
        }
        if (\array_key_exists('motif', $data) && null !== $data['motif']) {
            $object->setMotif($data['motif']);
        } elseif (\array_key_exists('motif', $data) && null === $data['motif']) {
            $object->setMotif(null);
        }
        if (\array_key_exists('codeSociete', $data) && null !== $data['codeSociete']) {
            $object->setCodeSociete($data['codeSociete']);
        } elseif (\array_key_exists('codeSociete', $data) && null === $data['codeSociete']) {
            $object->setCodeSociete(null);
        }
        if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
        } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement(null);
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
        if ($object->isInitialized('identifiantEmploi') && null !== $object->getIdentifiantEmploi()) {
            $data['identifiantEmploi'] = $object->getIdentifiantEmploi();
        }
        if ($object->isInitialized('dateDebut') && null !== $object->getDateDebut()) {
            $data['dateDebut'] = $object->getDateDebut()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('dateFin') && null !== $object->getDateFin()) {
            $data['dateFin'] = $object->getDateFin()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('intituleEmploi') && null !== $object->getIntituleEmploi()) {
            $data['intituleEmploi'] = $object->getIntituleEmploi();
        }
        if ($object->isInitialized('motif') && null !== $object->getMotif()) {
            $data['motif'] = $object->getMotif();
        }
        if ($object->isInitialized('codeSociete') && null !== $object->getCodeSociete()) {
            $data['codeSociete'] = $object->getCodeSociete();
        }
        if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
            $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalarieEmploiExterneInformations' => false];
    }
}
