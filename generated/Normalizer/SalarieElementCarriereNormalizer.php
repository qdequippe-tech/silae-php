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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieElementCarriere::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieElementCarriere::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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

        if (\array_key_exists('estCadre', $data) && \is_int($data['estCadre'])) {
            $data['estCadre'] = (bool) $data['estCadre'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
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
            $object->setDateReelleDebutEmploi(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateReelleDebutEmploi']));
        } elseif (\array_key_exists('dateReelleDebutEmploi', $data) && null === $data['dateReelleDebutEmploi']) {
            $object->setDateReelleDebutEmploi(null);
        }

        if (\array_key_exists('dateReelleFinEmploi', $data) && null !== $data['dateReelleFinEmploi']) {
            $object->setDateReelleFinEmploi(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateReelleFinEmploi']));
        } elseif (\array_key_exists('dateReelleFinEmploi', $data) && null === $data['dateReelleFinEmploi']) {
            $object->setDateReelleFinEmploi(null);
        }

        if (\array_key_exists('identifiantEmploi', $data) && null !== $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi($data['identifiantEmploi']);
        } elseif (\array_key_exists('identifiantEmploi', $data) && null === $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dateDebut') && null !== $data->getDateDebut()) {
            $dataArray['dateDebut'] = $data->getDateDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateFin') && null !== $data->getDateFin()) {
            $dataArray['dateFin'] = $data->getDateFin()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('libelleEmploi') && null !== $data->getLibelleEmploi()) {
            $dataArray['libelleEmploi'] = $data->getLibelleEmploi();
        }

        if ($data->isInitialized('estCadre') && null !== $data->getEstCadre()) {
            $dataArray['estCadre'] = $data->getEstCadre();
        }

        if ($data->isInitialized('typeContrat') && null !== $data->getTypeContrat()) {
            $dataArray['typeContrat'] = $data->getTypeContrat();
        }

        if ($data->isInitialized('heuresContractuelles') && null !== $data->getHeuresContractuelles()) {
            $dataArray['heuresContractuelles'] = $data->getHeuresContractuelles();
        }

        if ($data->isInitialized('salaireDeBase') && null !== $data->getSalaireDeBase()) {
            $dataArray['salaireDeBase'] = $data->getSalaireDeBase();
        }

        if ($data->isInitialized('coeff1') && null !== $data->getCoeff1()) {
            $dataArray['coeff1'] = $data->getCoeff1();
        }

        if ($data->isInitialized('libelleCoeff1') && null !== $data->getLibelleCoeff1()) {
            $dataArray['libelleCoeff1'] = $data->getLibelleCoeff1();
        }

        if ($data->isInitialized('coeff2') && null !== $data->getCoeff2()) {
            $dataArray['coeff2'] = $data->getCoeff2();
        }

        if ($data->isInitialized('libelleCoeff2') && null !== $data->getLibelleCoeff2()) {
            $dataArray['libelleCoeff2'] = $data->getLibelleCoeff2();
        }

        if ($data->isInitialized('coeff3') && null !== $data->getCoeff3()) {
            $dataArray['coeff3'] = $data->getCoeff3();
        }

        if ($data->isInitialized('libelleCoeff3') && null !== $data->getLibelleCoeff3()) {
            $dataArray['libelleCoeff3'] = $data->getLibelleCoeff3();
        }

        if ($data->isInitialized('coeff4') && null !== $data->getCoeff4()) {
            $dataArray['coeff4'] = $data->getCoeff4();
        }

        if ($data->isInitialized('libelleCoeff4') && null !== $data->getLibelleCoeff4()) {
            $dataArray['libelleCoeff4'] = $data->getLibelleCoeff4();
        }

        if ($data->isInitialized('tauxHeuresNormales') && null !== $data->getTauxHeuresNormales()) {
            $dataArray['tauxHeuresNormales'] = $data->getTauxHeuresNormales();
        }

        if ($data->isInitialized('salaireDeBaseETP') && null !== $data->getSalaireDeBaseETP()) {
            $dataArray['salaireDeBaseETP'] = $data->getSalaireDeBaseETP();
        }

        if ($data->isInitialized('dateReelleDebutEmploi') && null !== $data->getDateReelleDebutEmploi()) {
            $dataArray['dateReelleDebutEmploi'] = $data->getDateReelleDebutEmploi()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateReelleFinEmploi') && null !== $data->getDateReelleFinEmploi()) {
            $dataArray['dateReelleFinEmploi'] = $data->getDateReelleFinEmploi()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('identifiantEmploi') && null !== $data->getIdentifiantEmploi()) {
            $dataArray['identifiantEmploi'] = $data->getIdentifiantEmploi();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieElementCarriere::class => false];
    }
}
