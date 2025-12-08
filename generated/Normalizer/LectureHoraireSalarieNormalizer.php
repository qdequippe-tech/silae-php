<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LectureHoraireSalarie;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LectureHoraireSalarieNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return LectureHoraireSalarie::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && LectureHoraireSalarie::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new LectureHoraireSalarie();
        if (\array_key_exists('totalMensuelHeuresNormales', $data) && \is_int($data['totalMensuelHeuresNormales'])) {
            $data['totalMensuelHeuresNormales'] = (float) $data['totalMensuelHeuresNormales'];
        }

        if (\array_key_exists('totalMensuelHeuresMajorees', $data) && \is_int($data['totalMensuelHeuresMajorees'])) {
            $data['totalMensuelHeuresMajorees'] = (float) $data['totalMensuelHeuresMajorees'];
        }

        if (\array_key_exists('pourcentageHeuresMajorees', $data) && \is_int($data['pourcentageHeuresMajorees'])) {
            $data['pourcentageHeuresMajorees'] = (float) $data['pourcentageHeuresMajorees'];
        }

        if (\array_key_exists('totalMensuelHeuresLibres1', $data) && \is_int($data['totalMensuelHeuresLibres1'])) {
            $data['totalMensuelHeuresLibres1'] = (float) $data['totalMensuelHeuresLibres1'];
        }

        if (\array_key_exists('totalMensuelHeuresLibres2', $data) && \is_int($data['totalMensuelHeuresLibres2'])) {
            $data['totalMensuelHeuresLibres2'] = (float) $data['totalMensuelHeuresLibres2'];
        }

        if (\array_key_exists('totalMensuelHeuresLibres3', $data) && \is_int($data['totalMensuelHeuresLibres3'])) {
            $data['totalMensuelHeuresLibres3'] = (float) $data['totalMensuelHeuresLibres3'];
        }

        if (\array_key_exists('tauxHeuresLibres1', $data) && \is_int($data['tauxHeuresLibres1'])) {
            $data['tauxHeuresLibres1'] = (float) $data['tauxHeuresLibres1'];
        }

        if (\array_key_exists('tauxHeuresLibres2', $data) && \is_int($data['tauxHeuresLibres2'])) {
            $data['tauxHeuresLibres2'] = (float) $data['tauxHeuresLibres2'];
        }

        if (\array_key_exists('tauxHeuresLibres3', $data) && \is_int($data['tauxHeuresLibres3'])) {
            $data['tauxHeuresLibres3'] = (float) $data['tauxHeuresLibres3'];
        }

        if (\array_key_exists('totHT', $data) && \is_int($data['totHT'])) {
            $data['totHT'] = (float) $data['totHT'];
        }

        if (\array_key_exists('totHTN', $data) && \is_int($data['totHTN'])) {
            $data['totHTN'] = (float) $data['totHTN'];
        }

        if (\array_key_exists('totHN', $data) && \is_int($data['totHN'])) {
            $data['totHN'] = (float) $data['totHN'];
        }

        if (\array_key_exists('totHM', $data) && \is_int($data['totHM'])) {
            $data['totHM'] = (float) $data['totHM'];
        }

        if (\array_key_exists('totHL1', $data) && \is_int($data['totHL1'])) {
            $data['totHL1'] = (float) $data['totHL1'];
        }

        if (\array_key_exists('totHL2', $data) && \is_int($data['totHL2'])) {
            $data['totHL2'] = (float) $data['totHL2'];
        }

        if (\array_key_exists('totHL3', $data) && \is_int($data['totHL3'])) {
            $data['totHL3'] = (float) $data['totHL3'];
        }

        if (\array_key_exists('totHLun', $data) && \is_int($data['totHLun'])) {
            $data['totHLun'] = (float) $data['totHLun'];
        }

        if (\array_key_exists('totHMar', $data) && \is_int($data['totHMar'])) {
            $data['totHMar'] = (float) $data['totHMar'];
        }

        if (\array_key_exists('totHMer', $data) && \is_int($data['totHMer'])) {
            $data['totHMer'] = (float) $data['totHMer'];
        }

        if (\array_key_exists('totHJeu', $data) && \is_int($data['totHJeu'])) {
            $data['totHJeu'] = (float) $data['totHJeu'];
        }

        if (\array_key_exists('totHVen', $data) && \is_int($data['totHVen'])) {
            $data['totHVen'] = (float) $data['totHVen'];
        }

        if (\array_key_exists('totHSam', $data) && \is_int($data['totHSam'])) {
            $data['totHSam'] = (float) $data['totHSam'];
        }

        if (\array_key_exists('totHDim', $data) && \is_int($data['totHDim'])) {
            $data['totHDim'] = (float) $data['totHDim'];
        }

        if (\array_key_exists('nonSoumisHEta', $data) && \is_int($data['nonSoumisHEta'])) {
            $data['nonSoumisHEta'] = (bool) $data['nonSoumisHEta'];
        }

        if (\array_key_exists('gestionModulationHeures', $data) && \is_int($data['gestionModulationHeures'])) {
            $data['gestionModulationHeures'] = (bool) $data['gestionModulationHeures'];
        }

        if (\array_key_exists('cotisRetraiteTpsPlein', $data) && \is_int($data['cotisRetraiteTpsPlein'])) {
            $data['cotisRetraiteTpsPlein'] = (bool) $data['cotisRetraiteTpsPlein'];
        }

        if (\array_key_exists('saisieManuelleHeuresAbsences', $data) && \is_int($data['saisieManuelleHeuresAbsences'])) {
            $data['saisieManuelleHeuresAbsences'] = (bool) $data['saisieManuelleHeuresAbsences'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nomGrilleHoraire', $data) && null !== $data['nomGrilleHoraire']) {
            $object->setNomGrilleHoraire($data['nomGrilleHoraire']);
        } elseif (\array_key_exists('nomGrilleHoraire', $data) && null === $data['nomGrilleHoraire']) {
            $object->setNomGrilleHoraire(null);
        }

        if (\array_key_exists('heuresTravaillees', $data) && null !== $data['heuresTravaillees']) {
            $values = [];
            foreach ($data['heuresTravaillees'] as $value) {
                $values[] = $value;
            }

            $object->setHeuresTravaillees($values);
        } elseif (\array_key_exists('heuresTravaillees', $data) && null === $data['heuresTravaillees']) {
            $object->setHeuresTravaillees(null);
        }

        if (\array_key_exists('heuresDeNuit', $data) && null !== $data['heuresDeNuit']) {
            $values_1 = [];
            foreach ($data['heuresDeNuit'] as $value_1) {
                $values_1[] = $value_1;
            }

            $object->setHeuresDeNuit($values_1);
        } elseif (\array_key_exists('heuresDeNuit', $data) && null === $data['heuresDeNuit']) {
            $object->setHeuresDeNuit(null);
        }

        if (\array_key_exists('heuresPayeesNormales', $data) && null !== $data['heuresPayeesNormales']) {
            $values_2 = [];
            foreach ($data['heuresPayeesNormales'] as $value_2) {
                $values_2[] = $value_2;
            }

            $object->setHeuresPayeesNormales($values_2);
        } elseif (\array_key_exists('heuresPayeesNormales', $data) && null === $data['heuresPayeesNormales']) {
            $object->setHeuresPayeesNormales(null);
        }

        if (\array_key_exists('heuresPayeesMajorees', $data) && null !== $data['heuresPayeesMajorees']) {
            $values_3 = [];
            foreach ($data['heuresPayeesMajorees'] as $value_3) {
                $values_3[] = $value_3;
            }

            $object->setHeuresPayeesMajorees($values_3);
        } elseif (\array_key_exists('heuresPayeesMajorees', $data) && null === $data['heuresPayeesMajorees']) {
            $object->setHeuresPayeesMajorees(null);
        }

        if (\array_key_exists('codeHeuresLibres1', $data) && null !== $data['codeHeuresLibres1']) {
            $object->setCodeHeuresLibres1($data['codeHeuresLibres1']);
        } elseif (\array_key_exists('codeHeuresLibres1', $data) && null === $data['codeHeuresLibres1']) {
            $object->setCodeHeuresLibres1(null);
        }

        if (\array_key_exists('heuresLibres1', $data) && null !== $data['heuresLibres1']) {
            $values_4 = [];
            foreach ($data['heuresLibres1'] as $value_4) {
                $values_4[] = $value_4;
            }

            $object->setHeuresLibres1($values_4);
        } elseif (\array_key_exists('heuresLibres1', $data) && null === $data['heuresLibres1']) {
            $object->setHeuresLibres1(null);
        }

        if (\array_key_exists('codeHeuresLibres2', $data) && null !== $data['codeHeuresLibres2']) {
            $object->setCodeHeuresLibres2($data['codeHeuresLibres2']);
        } elseif (\array_key_exists('codeHeuresLibres2', $data) && null === $data['codeHeuresLibres2']) {
            $object->setCodeHeuresLibres2(null);
        }

        if (\array_key_exists('heuresLibres2', $data) && null !== $data['heuresLibres2']) {
            $values_5 = [];
            foreach ($data['heuresLibres2'] as $value_5) {
                $values_5[] = $value_5;
            }

            $object->setHeuresLibres2($values_5);
        } elseif (\array_key_exists('heuresLibres2', $data) && null === $data['heuresLibres2']) {
            $object->setHeuresLibres2(null);
        }

        if (\array_key_exists('codeHeuresLibres3', $data) && null !== $data['codeHeuresLibres3']) {
            $object->setCodeHeuresLibres3($data['codeHeuresLibres3']);
        } elseif (\array_key_exists('codeHeuresLibres3', $data) && null === $data['codeHeuresLibres3']) {
            $object->setCodeHeuresLibres3(null);
        }

        if (\array_key_exists('heuresLibres3', $data) && null !== $data['heuresLibres3']) {
            $values_6 = [];
            foreach ($data['heuresLibres3'] as $value_6) {
                $values_6[] = $value_6;
            }

            $object->setHeuresLibres3($values_6);
        } elseif (\array_key_exists('heuresLibres3', $data) && null === $data['heuresLibres3']) {
            $object->setHeuresLibres3(null);
        }

        if (\array_key_exists('totalMensuelHeuresNormales', $data) && null !== $data['totalMensuelHeuresNormales']) {
            $object->setTotalMensuelHeuresNormales($data['totalMensuelHeuresNormales']);
        } elseif (\array_key_exists('totalMensuelHeuresNormales', $data) && null === $data['totalMensuelHeuresNormales']) {
            $object->setTotalMensuelHeuresNormales(null);
        }

        if (\array_key_exists('totalMensuelHeuresMajorees', $data) && null !== $data['totalMensuelHeuresMajorees']) {
            $object->setTotalMensuelHeuresMajorees($data['totalMensuelHeuresMajorees']);
        } elseif (\array_key_exists('totalMensuelHeuresMajorees', $data) && null === $data['totalMensuelHeuresMajorees']) {
            $object->setTotalMensuelHeuresMajorees(null);
        }

        if (\array_key_exists('pourcentageHeuresMajorees', $data) && null !== $data['pourcentageHeuresMajorees']) {
            $object->setPourcentageHeuresMajorees($data['pourcentageHeuresMajorees']);
        } elseif (\array_key_exists('pourcentageHeuresMajorees', $data) && null === $data['pourcentageHeuresMajorees']) {
            $object->setPourcentageHeuresMajorees(null);
        }

        if (\array_key_exists('totalMensuelHeuresLibres1', $data) && null !== $data['totalMensuelHeuresLibres1']) {
            $object->setTotalMensuelHeuresLibres1($data['totalMensuelHeuresLibres1']);
        } elseif (\array_key_exists('totalMensuelHeuresLibres1', $data) && null === $data['totalMensuelHeuresLibres1']) {
            $object->setTotalMensuelHeuresLibres1(null);
        }

        if (\array_key_exists('totalMensuelHeuresLibres2', $data) && null !== $data['totalMensuelHeuresLibres2']) {
            $object->setTotalMensuelHeuresLibres2($data['totalMensuelHeuresLibres2']);
        } elseif (\array_key_exists('totalMensuelHeuresLibres2', $data) && null === $data['totalMensuelHeuresLibres2']) {
            $object->setTotalMensuelHeuresLibres2(null);
        }

        if (\array_key_exists('totalMensuelHeuresLibres3', $data) && null !== $data['totalMensuelHeuresLibres3']) {
            $object->setTotalMensuelHeuresLibres3($data['totalMensuelHeuresLibres3']);
        } elseif (\array_key_exists('totalMensuelHeuresLibres3', $data) && null === $data['totalMensuelHeuresLibres3']) {
            $object->setTotalMensuelHeuresLibres3(null);
        }

        if (\array_key_exists('tauxHeuresLibres1', $data) && null !== $data['tauxHeuresLibres1']) {
            $object->setTauxHeuresLibres1($data['tauxHeuresLibres1']);
        } elseif (\array_key_exists('tauxHeuresLibres1', $data) && null === $data['tauxHeuresLibres1']) {
            $object->setTauxHeuresLibres1(null);
        }

        if (\array_key_exists('tauxHeuresLibres2', $data) && null !== $data['tauxHeuresLibres2']) {
            $object->setTauxHeuresLibres2($data['tauxHeuresLibres2']);
        } elseif (\array_key_exists('tauxHeuresLibres2', $data) && null === $data['tauxHeuresLibres2']) {
            $object->setTauxHeuresLibres2(null);
        }

        if (\array_key_exists('tauxHeuresLibres3', $data) && null !== $data['tauxHeuresLibres3']) {
            $object->setTauxHeuresLibres3($data['tauxHeuresLibres3']);
        } elseif (\array_key_exists('tauxHeuresLibres3', $data) && null === $data['tauxHeuresLibres3']) {
            $object->setTauxHeuresLibres3(null);
        }

        if (\array_key_exists('totHT', $data) && null !== $data['totHT']) {
            $object->setTotHT($data['totHT']);
        } elseif (\array_key_exists('totHT', $data) && null === $data['totHT']) {
            $object->setTotHT(null);
        }

        if (\array_key_exists('totHTN', $data) && null !== $data['totHTN']) {
            $object->setTotHTN($data['totHTN']);
        } elseif (\array_key_exists('totHTN', $data) && null === $data['totHTN']) {
            $object->setTotHTN(null);
        }

        if (\array_key_exists('totHN', $data) && null !== $data['totHN']) {
            $object->setTotHN($data['totHN']);
        } elseif (\array_key_exists('totHN', $data) && null === $data['totHN']) {
            $object->setTotHN(null);
        }

        if (\array_key_exists('totHM', $data) && null !== $data['totHM']) {
            $object->setTotHM($data['totHM']);
        } elseif (\array_key_exists('totHM', $data) && null === $data['totHM']) {
            $object->setTotHM(null);
        }

        if (\array_key_exists('totHL1', $data) && null !== $data['totHL1']) {
            $object->setTotHL1($data['totHL1']);
        } elseif (\array_key_exists('totHL1', $data) && null === $data['totHL1']) {
            $object->setTotHL1(null);
        }

        if (\array_key_exists('totHL2', $data) && null !== $data['totHL2']) {
            $object->setTotHL2($data['totHL2']);
        } elseif (\array_key_exists('totHL2', $data) && null === $data['totHL2']) {
            $object->setTotHL2(null);
        }

        if (\array_key_exists('totHL3', $data) && null !== $data['totHL3']) {
            $object->setTotHL3($data['totHL3']);
        } elseif (\array_key_exists('totHL3', $data) && null === $data['totHL3']) {
            $object->setTotHL3(null);
        }

        if (\array_key_exists('totHLun', $data) && null !== $data['totHLun']) {
            $object->setTotHLun($data['totHLun']);
        } elseif (\array_key_exists('totHLun', $data) && null === $data['totHLun']) {
            $object->setTotHLun(null);
        }

        if (\array_key_exists('totHMar', $data) && null !== $data['totHMar']) {
            $object->setTotHMar($data['totHMar']);
        } elseif (\array_key_exists('totHMar', $data) && null === $data['totHMar']) {
            $object->setTotHMar(null);
        }

        if (\array_key_exists('totHMer', $data) && null !== $data['totHMer']) {
            $object->setTotHMer($data['totHMer']);
        } elseif (\array_key_exists('totHMer', $data) && null === $data['totHMer']) {
            $object->setTotHMer(null);
        }

        if (\array_key_exists('totHJeu', $data) && null !== $data['totHJeu']) {
            $object->setTotHJeu($data['totHJeu']);
        } elseif (\array_key_exists('totHJeu', $data) && null === $data['totHJeu']) {
            $object->setTotHJeu(null);
        }

        if (\array_key_exists('totHVen', $data) && null !== $data['totHVen']) {
            $object->setTotHVen($data['totHVen']);
        } elseif (\array_key_exists('totHVen', $data) && null === $data['totHVen']) {
            $object->setTotHVen(null);
        }

        if (\array_key_exists('totHSam', $data) && null !== $data['totHSam']) {
            $object->setTotHSam($data['totHSam']);
        } elseif (\array_key_exists('totHSam', $data) && null === $data['totHSam']) {
            $object->setTotHSam(null);
        }

        if (\array_key_exists('totHDim', $data) && null !== $data['totHDim']) {
            $object->setTotHDim($data['totHDim']);
        } elseif (\array_key_exists('totHDim', $data) && null === $data['totHDim']) {
            $object->setTotHDim(null);
        }

        if (\array_key_exists('nonSoumisHEta', $data) && null !== $data['nonSoumisHEta']) {
            $object->setNonSoumisHEta($data['nonSoumisHEta']);
        } elseif (\array_key_exists('nonSoumisHEta', $data) && null === $data['nonSoumisHEta']) {
            $object->setNonSoumisHEta(null);
        }

        if (\array_key_exists('gestionModulationHeures', $data) && null !== $data['gestionModulationHeures']) {
            $object->setGestionModulationHeures($data['gestionModulationHeures']);
        } elseif (\array_key_exists('gestionModulationHeures', $data) && null === $data['gestionModulationHeures']) {
            $object->setGestionModulationHeures(null);
        }

        if (\array_key_exists('cotisRetraiteTpsPlein', $data) && null !== $data['cotisRetraiteTpsPlein']) {
            $object->setCotisRetraiteTpsPlein($data['cotisRetraiteTpsPlein']);
        } elseif (\array_key_exists('cotisRetraiteTpsPlein', $data) && null === $data['cotisRetraiteTpsPlein']) {
            $object->setCotisRetraiteTpsPlein(null);
        }

        if (\array_key_exists('saisieManuelleHeuresAbsences', $data) && null !== $data['saisieManuelleHeuresAbsences']) {
            $object->setSaisieManuelleHeuresAbsences($data['saisieManuelleHeuresAbsences']);
        } elseif (\array_key_exists('saisieManuelleHeuresAbsences', $data) && null === $data['saisieManuelleHeuresAbsences']) {
            $object->setSaisieManuelleHeuresAbsences(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nomGrilleHoraire') && null !== $data->getNomGrilleHoraire()) {
            $dataArray['nomGrilleHoraire'] = $data->getNomGrilleHoraire();
        }

        if ($data->isInitialized('heuresTravaillees') && null !== $data->getHeuresTravaillees()) {
            $values = [];
            foreach ($data->getHeuresTravaillees() as $value) {
                $values[] = $value;
            }

            $dataArray['heuresTravaillees'] = $values;
        }

        if ($data->isInitialized('heuresDeNuit') && null !== $data->getHeuresDeNuit()) {
            $values_1 = [];
            foreach ($data->getHeuresDeNuit() as $value_1) {
                $values_1[] = $value_1;
            }

            $dataArray['heuresDeNuit'] = $values_1;
        }

        if ($data->isInitialized('heuresPayeesNormales') && null !== $data->getHeuresPayeesNormales()) {
            $values_2 = [];
            foreach ($data->getHeuresPayeesNormales() as $value_2) {
                $values_2[] = $value_2;
            }

            $dataArray['heuresPayeesNormales'] = $values_2;
        }

        if ($data->isInitialized('heuresPayeesMajorees') && null !== $data->getHeuresPayeesMajorees()) {
            $values_3 = [];
            foreach ($data->getHeuresPayeesMajorees() as $value_3) {
                $values_3[] = $value_3;
            }

            $dataArray['heuresPayeesMajorees'] = $values_3;
        }

        if ($data->isInitialized('codeHeuresLibres1') && null !== $data->getCodeHeuresLibres1()) {
            $dataArray['codeHeuresLibres1'] = $data->getCodeHeuresLibres1();
        }

        if ($data->isInitialized('heuresLibres1') && null !== $data->getHeuresLibres1()) {
            $values_4 = [];
            foreach ($data->getHeuresLibres1() as $value_4) {
                $values_4[] = $value_4;
            }

            $dataArray['heuresLibres1'] = $values_4;
        }

        if ($data->isInitialized('codeHeuresLibres2') && null !== $data->getCodeHeuresLibres2()) {
            $dataArray['codeHeuresLibres2'] = $data->getCodeHeuresLibres2();
        }

        if ($data->isInitialized('heuresLibres2') && null !== $data->getHeuresLibres2()) {
            $values_5 = [];
            foreach ($data->getHeuresLibres2() as $value_5) {
                $values_5[] = $value_5;
            }

            $dataArray['heuresLibres2'] = $values_5;
        }

        if ($data->isInitialized('codeHeuresLibres3') && null !== $data->getCodeHeuresLibres3()) {
            $dataArray['codeHeuresLibres3'] = $data->getCodeHeuresLibres3();
        }

        if ($data->isInitialized('heuresLibres3') && null !== $data->getHeuresLibres3()) {
            $values_6 = [];
            foreach ($data->getHeuresLibres3() as $value_6) {
                $values_6[] = $value_6;
            }

            $dataArray['heuresLibres3'] = $values_6;
        }

        if ($data->isInitialized('totalMensuelHeuresNormales') && null !== $data->getTotalMensuelHeuresNormales()) {
            $dataArray['totalMensuelHeuresNormales'] = $data->getTotalMensuelHeuresNormales();
        }

        if ($data->isInitialized('totalMensuelHeuresMajorees') && null !== $data->getTotalMensuelHeuresMajorees()) {
            $dataArray['totalMensuelHeuresMajorees'] = $data->getTotalMensuelHeuresMajorees();
        }

        if ($data->isInitialized('pourcentageHeuresMajorees') && null !== $data->getPourcentageHeuresMajorees()) {
            $dataArray['pourcentageHeuresMajorees'] = $data->getPourcentageHeuresMajorees();
        }

        if ($data->isInitialized('totalMensuelHeuresLibres1') && null !== $data->getTotalMensuelHeuresLibres1()) {
            $dataArray['totalMensuelHeuresLibres1'] = $data->getTotalMensuelHeuresLibres1();
        }

        if ($data->isInitialized('totalMensuelHeuresLibres2') && null !== $data->getTotalMensuelHeuresLibres2()) {
            $dataArray['totalMensuelHeuresLibres2'] = $data->getTotalMensuelHeuresLibres2();
        }

        if ($data->isInitialized('totalMensuelHeuresLibres3') && null !== $data->getTotalMensuelHeuresLibres3()) {
            $dataArray['totalMensuelHeuresLibres3'] = $data->getTotalMensuelHeuresLibres3();
        }

        if ($data->isInitialized('tauxHeuresLibres1') && null !== $data->getTauxHeuresLibres1()) {
            $dataArray['tauxHeuresLibres1'] = $data->getTauxHeuresLibres1();
        }

        if ($data->isInitialized('tauxHeuresLibres2') && null !== $data->getTauxHeuresLibres2()) {
            $dataArray['tauxHeuresLibres2'] = $data->getTauxHeuresLibres2();
        }

        if ($data->isInitialized('tauxHeuresLibres3') && null !== $data->getTauxHeuresLibres3()) {
            $dataArray['tauxHeuresLibres3'] = $data->getTauxHeuresLibres3();
        }

        if ($data->isInitialized('totHT') && null !== $data->getTotHT()) {
            $dataArray['totHT'] = $data->getTotHT();
        }

        if ($data->isInitialized('totHTN') && null !== $data->getTotHTN()) {
            $dataArray['totHTN'] = $data->getTotHTN();
        }

        if ($data->isInitialized('totHN') && null !== $data->getTotHN()) {
            $dataArray['totHN'] = $data->getTotHN();
        }

        if ($data->isInitialized('totHM') && null !== $data->getTotHM()) {
            $dataArray['totHM'] = $data->getTotHM();
        }

        if ($data->isInitialized('totHL1') && null !== $data->getTotHL1()) {
            $dataArray['totHL1'] = $data->getTotHL1();
        }

        if ($data->isInitialized('totHL2') && null !== $data->getTotHL2()) {
            $dataArray['totHL2'] = $data->getTotHL2();
        }

        if ($data->isInitialized('totHL3') && null !== $data->getTotHL3()) {
            $dataArray['totHL3'] = $data->getTotHL3();
        }

        if ($data->isInitialized('totHLun') && null !== $data->getTotHLun()) {
            $dataArray['totHLun'] = $data->getTotHLun();
        }

        if ($data->isInitialized('totHMar') && null !== $data->getTotHMar()) {
            $dataArray['totHMar'] = $data->getTotHMar();
        }

        if ($data->isInitialized('totHMer') && null !== $data->getTotHMer()) {
            $dataArray['totHMer'] = $data->getTotHMer();
        }

        if ($data->isInitialized('totHJeu') && null !== $data->getTotHJeu()) {
            $dataArray['totHJeu'] = $data->getTotHJeu();
        }

        if ($data->isInitialized('totHVen') && null !== $data->getTotHVen()) {
            $dataArray['totHVen'] = $data->getTotHVen();
        }

        if ($data->isInitialized('totHSam') && null !== $data->getTotHSam()) {
            $dataArray['totHSam'] = $data->getTotHSam();
        }

        if ($data->isInitialized('totHDim') && null !== $data->getTotHDim()) {
            $dataArray['totHDim'] = $data->getTotHDim();
        }

        if ($data->isInitialized('nonSoumisHEta') && null !== $data->getNonSoumisHEta()) {
            $dataArray['nonSoumisHEta'] = $data->getNonSoumisHEta();
        }

        if ($data->isInitialized('gestionModulationHeures') && null !== $data->getGestionModulationHeures()) {
            $dataArray['gestionModulationHeures'] = $data->getGestionModulationHeures();
        }

        if ($data->isInitialized('cotisRetraiteTpsPlein') && null !== $data->getCotisRetraiteTpsPlein()) {
            $dataArray['cotisRetraiteTpsPlein'] = $data->getCotisRetraiteTpsPlein();
        }

        if ($data->isInitialized('saisieManuelleHeuresAbsences') && null !== $data->getSaisieManuelleHeuresAbsences()) {
            $dataArray['saisieManuelleHeuresAbsences'] = $data->getSaisieManuelleHeuresAbsences();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [LectureHoraireSalarie::class => false];
    }
}
