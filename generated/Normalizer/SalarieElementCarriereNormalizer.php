<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieElementCarriere;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieElementCarriereNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieElementCarriere' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof SalarieElementCarriere;
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
        $object = new SalarieElementCarriere();
        if (\array_key_exists('heuresContractuelles', $data) && \is_int($data['heuresContractuelles'])) {
            $data['heuresContractuelles'] = (float) $data['heuresContractuelles'];
        }
        if (\array_key_exists('salaireDeBase', $data) && \is_int($data['salaireDeBase'])) {
            $data['salaireDeBase'] = (float) $data['salaireDeBase'];
        }
        if (\array_key_exists('tauxHeuresNormales', $data) && \is_int($data['tauxHeuresNormales'])) {
            $data['tauxHeuresNormales'] = (float) $data['tauxHeuresNormales'];
        }
        if (\array_key_exists('salaireDeBaseETP', $data) && \is_int($data['salaireDeBaseETP'])) {
            $data['salaireDeBaseETP'] = (float) $data['salaireDeBaseETP'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('libelleEmploi', $data) && null !== $data['libelleEmploi']) {
            $object->setLibelleEmploi($data['libelleEmploi']);
        } elseif (\array_key_exists('libelleEmploi', $data) && null === $data['libelleEmploi']) {
            $object->setLibelleEmploi(null);
        }
        if (\array_key_exists('estCadre', $data) && null !== $data['estCadre']) {
            $object->setEstCadre($data['estCadre']);
        } elseif (\array_key_exists('estCadre', $data) && null === $data['estCadre']) {
            $object->setEstCadre(null);
        }
        if (\array_key_exists('typeContrat', $data) && null !== $data['typeContrat']) {
            $object->setTypeContrat($data['typeContrat']);
        } elseif (\array_key_exists('typeContrat', $data) && null === $data['typeContrat']) {
            $object->setTypeContrat(null);
        }
        if (\array_key_exists('heuresContractuelles', $data) && null !== $data['heuresContractuelles']) {
            $object->setHeuresContractuelles($data['heuresContractuelles']);
        } elseif (\array_key_exists('heuresContractuelles', $data) && null === $data['heuresContractuelles']) {
            $object->setHeuresContractuelles(null);
        }
        if (\array_key_exists('salaireDeBase', $data) && null !== $data['salaireDeBase']) {
            $object->setSalaireDeBase($data['salaireDeBase']);
        } elseif (\array_key_exists('salaireDeBase', $data) && null === $data['salaireDeBase']) {
            $object->setSalaireDeBase(null);
        }
        if (\array_key_exists('coeff1', $data) && null !== $data['coeff1']) {
            $object->setCoeff1($data['coeff1']);
        } elseif (\array_key_exists('coeff1', $data) && null === $data['coeff1']) {
            $object->setCoeff1(null);
        }
        if (\array_key_exists('libelleCoeff1', $data) && null !== $data['libelleCoeff1']) {
            $object->setLibelleCoeff1($data['libelleCoeff1']);
        } elseif (\array_key_exists('libelleCoeff1', $data) && null === $data['libelleCoeff1']) {
            $object->setLibelleCoeff1(null);
        }
        if (\array_key_exists('coeff2', $data) && null !== $data['coeff2']) {
            $object->setCoeff2($data['coeff2']);
        } elseif (\array_key_exists('coeff2', $data) && null === $data['coeff2']) {
            $object->setCoeff2(null);
        }
        if (\array_key_exists('libelleCoeff2', $data) && null !== $data['libelleCoeff2']) {
            $object->setLibelleCoeff2($data['libelleCoeff2']);
        } elseif (\array_key_exists('libelleCoeff2', $data) && null === $data['libelleCoeff2']) {
            $object->setLibelleCoeff2(null);
        }
        if (\array_key_exists('coeff3', $data) && null !== $data['coeff3']) {
            $object->setCoeff3($data['coeff3']);
        } elseif (\array_key_exists('coeff3', $data) && null === $data['coeff3']) {
            $object->setCoeff3(null);
        }
        if (\array_key_exists('libelleCoeff3', $data) && null !== $data['libelleCoeff3']) {
            $object->setLibelleCoeff3($data['libelleCoeff3']);
        } elseif (\array_key_exists('libelleCoeff3', $data) && null === $data['libelleCoeff3']) {
            $object->setLibelleCoeff3(null);
        }
        if (\array_key_exists('coeff4', $data) && null !== $data['coeff4']) {
            $object->setCoeff4($data['coeff4']);
        } elseif (\array_key_exists('coeff4', $data) && null === $data['coeff4']) {
            $object->setCoeff4(null);
        }
        if (\array_key_exists('libelleCoeff4', $data) && null !== $data['libelleCoeff4']) {
            $object->setLibelleCoeff4($data['libelleCoeff4']);
        } elseif (\array_key_exists('libelleCoeff4', $data) && null === $data['libelleCoeff4']) {
            $object->setLibelleCoeff4(null);
        }
        if (\array_key_exists('tauxHeuresNormales', $data) && null !== $data['tauxHeuresNormales']) {
            $object->setTauxHeuresNormales($data['tauxHeuresNormales']);
        } elseif (\array_key_exists('tauxHeuresNormales', $data) && null === $data['tauxHeuresNormales']) {
            $object->setTauxHeuresNormales(null);
        }
        if (\array_key_exists('salaireDeBaseETP', $data) && null !== $data['salaireDeBaseETP']) {
            $object->setSalaireDeBaseETP($data['salaireDeBaseETP']);
        } elseif (\array_key_exists('salaireDeBaseETP', $data) && null === $data['salaireDeBaseETP']) {
            $object->setSalaireDeBaseETP(null);
        }
        if (\array_key_exists('dateReelleDebutEmploi', $data) && null !== $data['dateReelleDebutEmploi']) {
            $object->setDateReelleDebutEmploi(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateReelleDebutEmploi']));
        } elseif (\array_key_exists('dateReelleDebutEmploi', $data) && null === $data['dateReelleDebutEmploi']) {
            $object->setDateReelleDebutEmploi(null);
        }
        if (\array_key_exists('dateReelleFinEmploi', $data) && null !== $data['dateReelleFinEmploi']) {
            $object->setDateReelleFinEmploi(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateReelleFinEmploi']));
        } elseif (\array_key_exists('dateReelleFinEmploi', $data) && null === $data['dateReelleFinEmploi']) {
            $object->setDateReelleFinEmploi(null);
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
        if ($object->isInitialized('dateDebut') && null !== $object->getDateDebut()) {
            $data['dateDebut'] = $object->getDateDebut()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('dateFin') && null !== $object->getDateFin()) {
            $data['dateFin'] = $object->getDateFin()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('libelleEmploi') && null !== $object->getLibelleEmploi()) {
            $data['libelleEmploi'] = $object->getLibelleEmploi();
        }
        if ($object->isInitialized('estCadre') && null !== $object->getEstCadre()) {
            $data['estCadre'] = $object->getEstCadre();
        }
        if ($object->isInitialized('typeContrat') && null !== $object->getTypeContrat()) {
            $data['typeContrat'] = $object->getTypeContrat();
        }
        if ($object->isInitialized('heuresContractuelles') && null !== $object->getHeuresContractuelles()) {
            $data['heuresContractuelles'] = $object->getHeuresContractuelles();
        }
        if ($object->isInitialized('salaireDeBase') && null !== $object->getSalaireDeBase()) {
            $data['salaireDeBase'] = $object->getSalaireDeBase();
        }
        if ($object->isInitialized('coeff1') && null !== $object->getCoeff1()) {
            $data['coeff1'] = $object->getCoeff1();
        }
        if ($object->isInitialized('libelleCoeff1') && null !== $object->getLibelleCoeff1()) {
            $data['libelleCoeff1'] = $object->getLibelleCoeff1();
        }
        if ($object->isInitialized('coeff2') && null !== $object->getCoeff2()) {
            $data['coeff2'] = $object->getCoeff2();
        }
        if ($object->isInitialized('libelleCoeff2') && null !== $object->getLibelleCoeff2()) {
            $data['libelleCoeff2'] = $object->getLibelleCoeff2();
        }
        if ($object->isInitialized('coeff3') && null !== $object->getCoeff3()) {
            $data['coeff3'] = $object->getCoeff3();
        }
        if ($object->isInitialized('libelleCoeff3') && null !== $object->getLibelleCoeff3()) {
            $data['libelleCoeff3'] = $object->getLibelleCoeff3();
        }
        if ($object->isInitialized('coeff4') && null !== $object->getCoeff4()) {
            $data['coeff4'] = $object->getCoeff4();
        }
        if ($object->isInitialized('libelleCoeff4') && null !== $object->getLibelleCoeff4()) {
            $data['libelleCoeff4'] = $object->getLibelleCoeff4();
        }
        if ($object->isInitialized('tauxHeuresNormales') && null !== $object->getTauxHeuresNormales()) {
            $data['tauxHeuresNormales'] = $object->getTauxHeuresNormales();
        }
        if ($object->isInitialized('salaireDeBaseETP') && null !== $object->getSalaireDeBaseETP()) {
            $data['salaireDeBaseETP'] = $object->getSalaireDeBaseETP();
        }
        if ($object->isInitialized('dateReelleDebutEmploi') && null !== $object->getDateReelleDebutEmploi()) {
            $data['dateReelleDebutEmploi'] = $object->getDateReelleDebutEmploi()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('dateReelleFinEmploi') && null !== $object->getDateReelleFinEmploi()) {
            $data['dateReelleFinEmploi'] = $object->getDateReelleFinEmploi()->format('Y-m-d\\TH:i:sP');
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalarieElementCarriere' => false];
    }
}
