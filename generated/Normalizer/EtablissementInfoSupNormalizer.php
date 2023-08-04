<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EtablissementInfoSup;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EtablissementInfoSupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\EtablissementInfoSup' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof EtablissementInfoSup;
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
        $object = new EtablissementInfoSup();
        if (\array_key_exists('etA_AcquisitionHeuresDIF', $data) && \is_int($data['etA_AcquisitionHeuresDIF'])) {
            $data['etA_AcquisitionHeuresDIF'] = (float) $data['etA_AcquisitionHeuresDIF'];
        }
        if (\array_key_exists('etA_DureeHebdo', $data) && \is_int($data['etA_DureeHebdo'])) {
            $data['etA_DureeHebdo'] = (float) $data['etA_DureeHebdo'];
        }
        if (\array_key_exists('etA_MethodeSuiviCPAcqMois', $data) && \is_int($data['etA_MethodeSuiviCPAcqMois'])) {
            $data['etA_MethodeSuiviCPAcqMois'] = (float) $data['etA_MethodeSuiviCPAcqMois'];
        }
        if (\array_key_exists('etA_RTTEnHeures', $data) && \is_int($data['etA_RTTEnHeures'])) {
            $data['etA_RTTEnHeures'] = (float) $data['etA_RTTEnHeures'];
        }
        if (\array_key_exists('etA_S41_G01_00_028_1', $data) && \is_int($data['etA_S41_G01_00_028_1'])) {
            $data['etA_S41_G01_00_028_1'] = (float) $data['etA_S41_G01_00_028_1'];
        }
        if (\array_key_exists('etA_S41_G01_00_028_2', $data) && \is_int($data['etA_S41_G01_00_028_2'])) {
            $data['etA_S41_G01_00_028_2'] = (float) $data['etA_S41_G01_00_028_2'];
        }
        if (\array_key_exists('etA_S41_G01_00_028_3', $data) && \is_int($data['etA_S41_G01_00_028_3'])) {
            $data['etA_S41_G01_00_028_3'] = (float) $data['etA_S41_G01_00_028_3'];
        }
        if (\array_key_exists('etA_S41_G01_00_028_4', $data) && \is_int($data['etA_S41_G01_00_028_4'])) {
            $data['etA_S41_G01_00_028_4'] = (float) $data['etA_S41_G01_00_028_4'];
        }
        if (\array_key_exists('etA_S41_G01_00_028_5', $data) && \is_int($data['etA_S41_G01_00_028_5'])) {
            $data['etA_S41_G01_00_028_5'] = (float) $data['etA_S41_G01_00_028_5'];
        }
        if (\array_key_exists('etA_S41_G01_00_028_6', $data) && \is_int($data['etA_S41_G01_00_028_6'])) {
            $data['etA_S41_G01_00_028_6'] = (float) $data['etA_S41_G01_00_028_6'];
        }
        if (\array_key_exists('etA_S41_G01_00_028_7', $data) && \is_int($data['etA_S41_G01_00_028_7'])) {
            $data['etA_S41_G01_00_028_7'] = (float) $data['etA_S41_G01_00_028_7'];
        }
        if (\array_key_exists('etA_SoumisTaxeSalairesPctImp', $data) && \is_int($data['etA_SoumisTaxeSalairesPctImp'])) {
            $data['etA_SoumisTaxeSalairesPctImp'] = (float) $data['etA_SoumisTaxeSalairesPctImp'];
        }
        if (\array_key_exists('etA_TauxVersementTrs', $data) && \is_int($data['etA_TauxVersementTrs'])) {
            $data['etA_TauxVersementTrs'] = (float) $data['etA_TauxVersementTrs'];
        }
        if (\array_key_exists('etA_TRestoPartSalariale', $data) && \is_int($data['etA_TRestoPartSalariale'])) {
            $data['etA_TRestoPartSalariale'] = (float) $data['etA_TRestoPartSalariale'];
        }
        if (\array_key_exists('etA_VTATaux', $data) && \is_int($data['etA_VTATaux'])) {
            $data['etA_VTATaux'] = (float) $data['etA_VTATaux'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bETA_AcquisitionHeuresDIF', $data) && null !== $data['bETA_AcquisitionHeuresDIF']) {
            $object->setBETAAcquisitionHeuresDIF($data['bETA_AcquisitionHeuresDIF']);
        } elseif (\array_key_exists('bETA_AcquisitionHeuresDIF', $data) && null === $data['bETA_AcquisitionHeuresDIF']) {
            $object->setBETAAcquisitionHeuresDIF(null);
        }
        if (\array_key_exists('etA_AcquisitionHeuresDIF', $data) && null !== $data['etA_AcquisitionHeuresDIF']) {
            $object->setEtAAcquisitionHeuresDIF($data['etA_AcquisitionHeuresDIF']);
        } elseif (\array_key_exists('etA_AcquisitionHeuresDIF', $data) && null === $data['etA_AcquisitionHeuresDIF']) {
            $object->setEtAAcquisitionHeuresDIF(null);
        }
        if (\array_key_exists('bETA_AssimiliesCadresPrevoyanceNonCadre', $data) && null !== $data['bETA_AssimiliesCadresPrevoyanceNonCadre']) {
            $object->setBETAAssimiliesCadresPrevoyanceNonCadre($data['bETA_AssimiliesCadresPrevoyanceNonCadre']);
        } elseif (\array_key_exists('bETA_AssimiliesCadresPrevoyanceNonCadre', $data) && null === $data['bETA_AssimiliesCadresPrevoyanceNonCadre']) {
            $object->setBETAAssimiliesCadresPrevoyanceNonCadre(null);
        }
        if (\array_key_exists('etA_AssimiliesCadresPrevoyanceNonCadre', $data) && null !== $data['etA_AssimiliesCadresPrevoyanceNonCadre']) {
            $object->setEtAAssimiliesCadresPrevoyanceNonCadre($data['etA_AssimiliesCadresPrevoyanceNonCadre']);
        } elseif (\array_key_exists('etA_AssimiliesCadresPrevoyanceNonCadre', $data) && null === $data['etA_AssimiliesCadresPrevoyanceNonCadre']) {
            $object->setEtAAssimiliesCadresPrevoyanceNonCadre(null);
        }
        if (\array_key_exists('bETA_BulletinEditionDIF', $data) && null !== $data['bETA_BulletinEditionDIF']) {
            $object->setBETABulletinEditionDIF($data['bETA_BulletinEditionDIF']);
        } elseif (\array_key_exists('bETA_BulletinEditionDIF', $data) && null === $data['bETA_BulletinEditionDIF']) {
            $object->setBETABulletinEditionDIF(null);
        }
        if (\array_key_exists('etA_BulletinEditionDIF', $data) && null !== $data['etA_BulletinEditionDIF']) {
            $object->setEtABulletinEditionDIF($data['etA_BulletinEditionDIF']);
        } elseif (\array_key_exists('etA_BulletinEditionDIF', $data) && null === $data['etA_BulletinEditionDIF']) {
            $object->setEtABulletinEditionDIF(null);
        }
        if (\array_key_exists('bETA_CalcAutoIJSSInactif', $data) && null !== $data['bETA_CalcAutoIJSSInactif']) {
            $object->setBETACalcAutoIJSSInactif($data['bETA_CalcAutoIJSSInactif']);
        } elseif (\array_key_exists('bETA_CalcAutoIJSSInactif', $data) && null === $data['bETA_CalcAutoIJSSInactif']) {
            $object->setBETACalcAutoIJSSInactif(null);
        }
        if (\array_key_exists('etA_CalcAutoIJSSInactif', $data) && null !== $data['etA_CalcAutoIJSSInactif']) {
            $object->setEtACalcAutoIJSSInactif($data['etA_CalcAutoIJSSInactif']);
        } elseif (\array_key_exists('etA_CalcAutoIJSSInactif', $data) && null === $data['etA_CalcAutoIJSSInactif']) {
            $object->setEtACalcAutoIJSSInactif(null);
        }
        if (\array_key_exists('bETA_CalcAutoMaintienInactif', $data) && null !== $data['bETA_CalcAutoMaintienInactif']) {
            $object->setBETACalcAutoMaintienInactif($data['bETA_CalcAutoMaintienInactif']);
        } elseif (\array_key_exists('bETA_CalcAutoMaintienInactif', $data) && null === $data['bETA_CalcAutoMaintienInactif']) {
            $object->setBETACalcAutoMaintienInactif(null);
        }
        if (\array_key_exists('etA_CalcAutoMaintienInactif', $data) && null !== $data['etA_CalcAutoMaintienInactif']) {
            $object->setEtACalcAutoMaintienInactif($data['etA_CalcAutoMaintienInactif']);
        } elseif (\array_key_exists('etA_CalcAutoMaintienInactif', $data) && null === $data['etA_CalcAutoMaintienInactif']) {
            $object->setEtACalcAutoMaintienInactif(null);
        }
        if (\array_key_exists('bETA_CDDPaiMensIndCP', $data) && null !== $data['bETA_CDDPaiMensIndCP']) {
            $object->setBETACDDPaiMensIndCP($data['bETA_CDDPaiMensIndCP']);
        } elseif (\array_key_exists('bETA_CDDPaiMensIndCP', $data) && null === $data['bETA_CDDPaiMensIndCP']) {
            $object->setBETACDDPaiMensIndCP(null);
        }
        if (\array_key_exists('etA_CDDPaiMensIndCP', $data) && null !== $data['etA_CDDPaiMensIndCP']) {
            $object->setEtACDDPaiMensIndCP($data['etA_CDDPaiMensIndCP']);
        } elseif (\array_key_exists('etA_CDDPaiMensIndCP', $data) && null === $data['etA_CDDPaiMensIndCP']) {
            $object->setEtACDDPaiMensIndCP(null);
        }
        if (\array_key_exists('bETA_CDDPaiMensIndPrecarite', $data) && null !== $data['bETA_CDDPaiMensIndPrecarite']) {
            $object->setBETACDDPaiMensIndPrecarite($data['bETA_CDDPaiMensIndPrecarite']);
        } elseif (\array_key_exists('bETA_CDDPaiMensIndPrecarite', $data) && null === $data['bETA_CDDPaiMensIndPrecarite']) {
            $object->setBETACDDPaiMensIndPrecarite(null);
        }
        if (\array_key_exists('etA_CDDPaiMensIndPrecarite', $data) && null !== $data['etA_CDDPaiMensIndPrecarite']) {
            $object->setEtACDDPaiMensIndPrecarite($data['etA_CDDPaiMensIndPrecarite']);
        } elseif (\array_key_exists('etA_CDDPaiMensIndPrecarite', $data) && null === $data['etA_CDDPaiMensIndPrecarite']) {
            $object->setEtACDDPaiMensIndPrecarite(null);
        }
        if (\array_key_exists('bETA_ChaineFabricationDateLimiteAbsences', $data) && null !== $data['bETA_ChaineFabricationDateLimiteAbsences']) {
            $object->setBETAChaineFabricationDateLimiteAbsences($data['bETA_ChaineFabricationDateLimiteAbsences']);
        } elseif (\array_key_exists('bETA_ChaineFabricationDateLimiteAbsences', $data) && null === $data['bETA_ChaineFabricationDateLimiteAbsences']) {
            $object->setBETAChaineFabricationDateLimiteAbsences(null);
        }
        if (\array_key_exists('etA_ChaineFabricationDateLimiteAbsences', $data) && null !== $data['etA_ChaineFabricationDateLimiteAbsences']) {
            $object->setEtAChaineFabricationDateLimiteAbsences($data['etA_ChaineFabricationDateLimiteAbsences']);
        } elseif (\array_key_exists('etA_ChaineFabricationDateLimiteAbsences', $data) && null === $data['etA_ChaineFabricationDateLimiteAbsences']) {
            $object->setEtAChaineFabricationDateLimiteAbsences(null);
        }
        if (\array_key_exists('bETA_ClotureCPArrondiInactif', $data) && null !== $data['bETA_ClotureCPArrondiInactif']) {
            $object->setBETAClotureCPArrondiInactif($data['bETA_ClotureCPArrondiInactif']);
        } elseif (\array_key_exists('bETA_ClotureCPArrondiInactif', $data) && null === $data['bETA_ClotureCPArrondiInactif']) {
            $object->setBETAClotureCPArrondiInactif(null);
        }
        if (\array_key_exists('etA_ClotureCPArrondiInactif', $data) && null !== $data['etA_ClotureCPArrondiInactif']) {
            $object->setEtAClotureCPArrondiInactif($data['etA_ClotureCPArrondiInactif']);
        } elseif (\array_key_exists('etA_ClotureCPArrondiInactif', $data) && null === $data['etA_ClotureCPArrondiInactif']) {
            $object->setEtAClotureCPArrondiInactif(null);
        }
        if (\array_key_exists('bETA_ClotureCPReport', $data) && null !== $data['bETA_ClotureCPReport']) {
            $object->setBETAClotureCPReport($data['bETA_ClotureCPReport']);
        } elseif (\array_key_exists('bETA_ClotureCPReport', $data) && null === $data['bETA_ClotureCPReport']) {
            $object->setBETAClotureCPReport(null);
        }
        if (\array_key_exists('etA_ClotureCPReport', $data) && null !== $data['etA_ClotureCPReport']) {
            $object->setEtAClotureCPReport($data['etA_ClotureCPReport']);
        } elseif (\array_key_exists('etA_ClotureCPReport', $data) && null === $data['etA_ClotureCPReport']) {
            $object->setEtAClotureCPReport(null);
        }
        if (\array_key_exists('bETA_ClotureRTTReport', $data) && null !== $data['bETA_ClotureRTTReport']) {
            $object->setBETAClotureRTTReport($data['bETA_ClotureRTTReport']);
        } elseif (\array_key_exists('bETA_ClotureRTTReport', $data) && null === $data['bETA_ClotureRTTReport']) {
            $object->setBETAClotureRTTReport(null);
        }
        if (\array_key_exists('etA_ClotureRTTReport', $data) && null !== $data['etA_ClotureRTTReport']) {
            $object->setEtAClotureRTTReport($data['etA_ClotureRTTReport']);
        } elseif (\array_key_exists('etA_ClotureRTTReport', $data) && null === $data['etA_ClotureRTTReport']) {
            $object->setEtAClotureRTTReport(null);
        }
        if (\array_key_exists('bETA_CodeBTAPEMSA', $data) && null !== $data['bETA_CodeBTAPEMSA']) {
            $object->setBETACodeBTAPEMSA($data['bETA_CodeBTAPEMSA']);
        } elseif (\array_key_exists('bETA_CodeBTAPEMSA', $data) && null === $data['bETA_CodeBTAPEMSA']) {
            $object->setBETACodeBTAPEMSA(null);
        }
        if (\array_key_exists('etA_CodeBTAPEMSA', $data) && null !== $data['etA_CodeBTAPEMSA']) {
            $object->setEtACodeBTAPEMSA($data['etA_CodeBTAPEMSA']);
        } elseif (\array_key_exists('etA_CodeBTAPEMSA', $data) && null === $data['etA_CodeBTAPEMSA']) {
            $object->setEtACodeBTAPEMSA(null);
        }
        if (\array_key_exists('bETA_CodeRegion', $data) && null !== $data['bETA_CodeRegion']) {
            $object->setBETACodeRegion($data['bETA_CodeRegion']);
        } elseif (\array_key_exists('bETA_CodeRegion', $data) && null === $data['bETA_CodeRegion']) {
            $object->setBETACodeRegion(null);
        }
        if (\array_key_exists('etA_CodeRegion', $data) && null !== $data['etA_CodeRegion']) {
            $object->setEtACodeRegion($data['etA_CodeRegion']);
        } elseif (\array_key_exists('etA_CodeRegion', $data) && null === $data['etA_CodeRegion']) {
            $object->setEtACodeRegion(null);
        }
        if (\array_key_exists('bETA_DadsInactive', $data) && null !== $data['bETA_DadsInactive']) {
            $object->setBETADadsInactive($data['bETA_DadsInactive']);
        } elseif (\array_key_exists('bETA_DadsInactive', $data) && null === $data['bETA_DadsInactive']) {
            $object->setBETADadsInactive(null);
        }
        if (\array_key_exists('etA_DadsInactive', $data) && null !== $data['etA_DadsInactive']) {
            $object->setEtADadsInactive($data['etA_DadsInactive']);
        } elseif (\array_key_exists('etA_DadsInactive', $data) && null === $data['etA_DadsInactive']) {
            $object->setEtADadsInactive(null);
        }
        if (\array_key_exists('bETA_DecalageActiviteJournaliere', $data) && null !== $data['bETA_DecalageActiviteJournaliere']) {
            $object->setBETADecalageActiviteJournaliere($data['bETA_DecalageActiviteJournaliere']);
        } elseif (\array_key_exists('bETA_DecalageActiviteJournaliere', $data) && null === $data['bETA_DecalageActiviteJournaliere']) {
            $object->setBETADecalageActiviteJournaliere(null);
        }
        if (\array_key_exists('etA_DecalageActiviteJournaliere', $data) && null !== $data['etA_DecalageActiviteJournaliere']) {
            $object->setEtADecalageActiviteJournaliere($data['etA_DecalageActiviteJournaliere']);
        } elseif (\array_key_exists('etA_DecalageActiviteJournaliere', $data) && null === $data['etA_DecalageActiviteJournaliere']) {
            $object->setEtADecalageActiviteJournaliere(null);
        }
        if (\array_key_exists('bETA_DecoupageActiviteJournaliere', $data) && null !== $data['bETA_DecoupageActiviteJournaliere']) {
            $object->setBETADecoupageActiviteJournaliere($data['bETA_DecoupageActiviteJournaliere']);
        } elseif (\array_key_exists('bETA_DecoupageActiviteJournaliere', $data) && null === $data['bETA_DecoupageActiviteJournaliere']) {
            $object->setBETADecoupageActiviteJournaliere(null);
        }
        if (\array_key_exists('etA_DecoupageActiviteJournaliere', $data) && null !== $data['etA_DecoupageActiviteJournaliere']) {
            $object->setEtADecoupageActiviteJournaliere($data['etA_DecoupageActiviteJournaliere']);
        } elseif (\array_key_exists('etA_DecoupageActiviteJournaliere', $data) && null === $data['etA_DecoupageActiviteJournaliere']) {
            $object->setEtADecoupageActiviteJournaliere(null);
        }
        if (\array_key_exists('bETA_DureeHebdo', $data) && null !== $data['bETA_DureeHebdo']) {
            $object->setBETADureeHebdo($data['bETA_DureeHebdo']);
        } elseif (\array_key_exists('bETA_DureeHebdo', $data) && null === $data['bETA_DureeHebdo']) {
            $object->setBETADureeHebdo(null);
        }
        if (\array_key_exists('etA_DureeHebdo', $data) && null !== $data['etA_DureeHebdo']) {
            $object->setEtADureeHebdo($data['etA_DureeHebdo']);
        } elseif (\array_key_exists('etA_DureeHebdo', $data) && null === $data['etA_DureeHebdo']) {
            $object->setEtADureeHebdo(null);
        }
        if (\array_key_exists('bETA_EmployeurCivilite', $data) && null !== $data['bETA_EmployeurCivilite']) {
            $object->setBETAEmployeurCivilite($data['bETA_EmployeurCivilite']);
        } elseif (\array_key_exists('bETA_EmployeurCivilite', $data) && null === $data['bETA_EmployeurCivilite']) {
            $object->setBETAEmployeurCivilite(null);
        }
        if (\array_key_exists('etA_EmployeurCivilite', $data) && null !== $data['etA_EmployeurCivilite']) {
            $object->setEtAEmployeurCivilite($data['etA_EmployeurCivilite']);
        } elseif (\array_key_exists('etA_EmployeurCivilite', $data) && null === $data['etA_EmployeurCivilite']) {
            $object->setEtAEmployeurCivilite(null);
        }
        if (\array_key_exists('bETA_EmployeurNom', $data) && null !== $data['bETA_EmployeurNom']) {
            $object->setBETAEmployeurNom($data['bETA_EmployeurNom']);
        } elseif (\array_key_exists('bETA_EmployeurNom', $data) && null === $data['bETA_EmployeurNom']) {
            $object->setBETAEmployeurNom(null);
        }
        if (\array_key_exists('etA_EmployeurNom', $data) && null !== $data['etA_EmployeurNom']) {
            $object->setEtAEmployeurNom($data['etA_EmployeurNom']);
        } elseif (\array_key_exists('etA_EmployeurNom', $data) && null === $data['etA_EmployeurNom']) {
            $object->setEtAEmployeurNom(null);
        }
        if (\array_key_exists('bETA_EmployeurPrenom', $data) && null !== $data['bETA_EmployeurPrenom']) {
            $object->setBETAEmployeurPrenom($data['bETA_EmployeurPrenom']);
        } elseif (\array_key_exists('bETA_EmployeurPrenom', $data) && null === $data['bETA_EmployeurPrenom']) {
            $object->setBETAEmployeurPrenom(null);
        }
        if (\array_key_exists('etA_EmployeurPrenom', $data) && null !== $data['etA_EmployeurPrenom']) {
            $object->setEtAEmployeurPrenom($data['etA_EmployeurPrenom']);
        } elseif (\array_key_exists('etA_EmployeurPrenom', $data) && null === $data['etA_EmployeurPrenom']) {
            $object->setEtAEmployeurPrenom(null);
        }
        if (\array_key_exists('bETA_EmployeurQualite', $data) && null !== $data['bETA_EmployeurQualite']) {
            $object->setBETAEmployeurQualite($data['bETA_EmployeurQualite']);
        } elseif (\array_key_exists('bETA_EmployeurQualite', $data) && null === $data['bETA_EmployeurQualite']) {
            $object->setBETAEmployeurQualite(null);
        }
        if (\array_key_exists('etA_EmployeurQualite', $data) && null !== $data['etA_EmployeurQualite']) {
            $object->setEtAEmployeurQualite($data['etA_EmployeurQualite']);
        } elseif (\array_key_exists('etA_EmployeurQualite', $data) && null === $data['etA_EmployeurQualite']) {
            $object->setEtAEmployeurQualite(null);
        }
        if (\array_key_exists('bETA_EmployeurQualiteAutre', $data) && null !== $data['bETA_EmployeurQualiteAutre']) {
            $object->setBETAEmployeurQualiteAutre($data['bETA_EmployeurQualiteAutre']);
        } elseif (\array_key_exists('bETA_EmployeurQualiteAutre', $data) && null === $data['bETA_EmployeurQualiteAutre']) {
            $object->setBETAEmployeurQualiteAutre(null);
        }
        if (\array_key_exists('etA_EmployeurQualiteAutre', $data) && null !== $data['etA_EmployeurQualiteAutre']) {
            $object->setEtAEmployeurQualiteAutre($data['etA_EmployeurQualiteAutre']);
        } elseif (\array_key_exists('etA_EmployeurQualiteAutre', $data) && null === $data['etA_EmployeurQualiteAutre']) {
            $object->setEtAEmployeurQualiteAutre(null);
        }
        if (\array_key_exists('bETA_ExoJEIDateDebut', $data) && null !== $data['bETA_ExoJEIDateDebut']) {
            $object->setBETAExoJEIDateDebut($data['bETA_ExoJEIDateDebut']);
        } elseif (\array_key_exists('bETA_ExoJEIDateDebut', $data) && null === $data['bETA_ExoJEIDateDebut']) {
            $object->setBETAExoJEIDateDebut(null);
        }
        if (\array_key_exists('etA_ExoJEIDateDebut', $data) && null !== $data['etA_ExoJEIDateDebut']) {
            $object->setEtAExoJEIDateDebut(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['etA_ExoJEIDateDebut']));
        } elseif (\array_key_exists('etA_ExoJEIDateDebut', $data) && null === $data['etA_ExoJEIDateDebut']) {
            $object->setEtAExoJEIDateDebut(null);
        }
        if (\array_key_exists('bETA_ForceDroitCICE', $data) && null !== $data['bETA_ForceDroitCICE']) {
            $object->setBETAForceDroitCICE($data['bETA_ForceDroitCICE']);
        } elseif (\array_key_exists('bETA_ForceDroitCICE', $data) && null === $data['bETA_ForceDroitCICE']) {
            $object->setBETAForceDroitCICE(null);
        }
        if (\array_key_exists('etA_ForceDroitCICE', $data) && null !== $data['etA_ForceDroitCICE']) {
            $object->setEtAForceDroitCICE($data['etA_ForceDroitCICE']);
        } elseif (\array_key_exists('etA_ForceDroitCICE', $data) && null === $data['etA_ForceDroitCICE']) {
            $object->setEtAForceDroitCICE(null);
        }
        if (\array_key_exists('bETA_FractionnementCP', $data) && null !== $data['bETA_FractionnementCP']) {
            $object->setBETAFractionnementCP($data['bETA_FractionnementCP']);
        } elseif (\array_key_exists('bETA_FractionnementCP', $data) && null === $data['bETA_FractionnementCP']) {
            $object->setBETAFractionnementCP(null);
        }
        if (\array_key_exists('etA_FractionnementCP', $data) && null !== $data['etA_FractionnementCP']) {
            $object->setEtAFractionnementCP($data['etA_FractionnementCP']);
        } elseif (\array_key_exists('etA_FractionnementCP', $data) && null === $data['etA_FractionnementCP']) {
            $object->setEtAFractionnementCP(null);
        }
        if (\array_key_exists('bETA_FractionnementCPMoisCalcSpe', $data) && null !== $data['bETA_FractionnementCPMoisCalcSpe']) {
            $object->setBETAFractionnementCPMoisCalcSpe($data['bETA_FractionnementCPMoisCalcSpe']);
        } elseif (\array_key_exists('bETA_FractionnementCPMoisCalcSpe', $data) && null === $data['bETA_FractionnementCPMoisCalcSpe']) {
            $object->setBETAFractionnementCPMoisCalcSpe(null);
        }
        if (\array_key_exists('etA_FractionnementCPMoisCalcSpe', $data) && null !== $data['etA_FractionnementCPMoisCalcSpe']) {
            $object->setEtAFractionnementCPMoisCalcSpe($data['etA_FractionnementCPMoisCalcSpe']);
        } elseif (\array_key_exists('etA_FractionnementCPMoisCalcSpe', $data) && null === $data['etA_FractionnementCPMoisCalcSpe']) {
            $object->setEtAFractionnementCPMoisCalcSpe(null);
        }
        if (\array_key_exists('bETA_FractionnementCPMoisDebut', $data) && null !== $data['bETA_FractionnementCPMoisDebut']) {
            $object->setBETAFractionnementCPMoisDebut($data['bETA_FractionnementCPMoisDebut']);
        } elseif (\array_key_exists('bETA_FractionnementCPMoisDebut', $data) && null === $data['bETA_FractionnementCPMoisDebut']) {
            $object->setBETAFractionnementCPMoisDebut(null);
        }
        if (\array_key_exists('etA_FractionnementCPMoisDebut', $data) && null !== $data['etA_FractionnementCPMoisDebut']) {
            $object->setEtAFractionnementCPMoisDebut($data['etA_FractionnementCPMoisDebut']);
        } elseif (\array_key_exists('etA_FractionnementCPMoisDebut', $data) && null === $data['etA_FractionnementCPMoisDebut']) {
            $object->setEtAFractionnementCPMoisDebut(null);
        }
        if (\array_key_exists('bETA_FractionnementCPMoisFin', $data) && null !== $data['bETA_FractionnementCPMoisFin']) {
            $object->setBETAFractionnementCPMoisFin($data['bETA_FractionnementCPMoisFin']);
        } elseif (\array_key_exists('bETA_FractionnementCPMoisFin', $data) && null === $data['bETA_FractionnementCPMoisFin']) {
            $object->setBETAFractionnementCPMoisFin(null);
        }
        if (\array_key_exists('etA_FractionnementCPMoisFin', $data) && null !== $data['etA_FractionnementCPMoisFin']) {
            $object->setEtAFractionnementCPMoisFin($data['etA_FractionnementCPMoisFin']);
        } elseif (\array_key_exists('etA_FractionnementCPMoisFin', $data) && null === $data['etA_FractionnementCPMoisFin']) {
            $object->setEtAFractionnementCPMoisFin(null);
        }
        if (\array_key_exists('bETA_FSConserverCondAnc', $data) && null !== $data['bETA_FSConserverCondAnc']) {
            $object->setBETAFSConserverCondAnc($data['bETA_FSConserverCondAnc']);
        } elseif (\array_key_exists('bETA_FSConserverCondAnc', $data) && null === $data['bETA_FSConserverCondAnc']) {
            $object->setBETAFSConserverCondAnc(null);
        }
        if (\array_key_exists('etA_FSConserverCondAnc', $data) && null !== $data['etA_FSConserverCondAnc']) {
            $object->setEtAFSConserverCondAnc($data['etA_FSConserverCondAnc']);
        } elseif (\array_key_exists('etA_FSConserverCondAnc', $data) && null === $data['etA_FSConserverCondAnc']) {
            $object->setEtAFSConserverCondAnc(null);
        }
        if (\array_key_exists('bETA_FSMethode', $data) && null !== $data['bETA_FSMethode']) {
            $object->setBETAFSMethode($data['bETA_FSMethode']);
        } elseif (\array_key_exists('bETA_FSMethode', $data) && null === $data['bETA_FSMethode']) {
            $object->setBETAFSMethode(null);
        }
        if (\array_key_exists('etA_FSMethode', $data) && null !== $data['etA_FSMethode']) {
            $object->setEtAFSMethode($data['etA_FSMethode']);
        } elseif (\array_key_exists('etA_FSMethode', $data) && null === $data['etA_FSMethode']) {
            $object->setEtAFSMethode(null);
        }
        if (\array_key_exists('bETA_GestionCPExclEnJours', $data) && null !== $data['bETA_GestionCPExclEnJours']) {
            $object->setBETAGestionCPExclEnJours($data['bETA_GestionCPExclEnJours']);
        } elseif (\array_key_exists('bETA_GestionCPExclEnJours', $data) && null === $data['bETA_GestionCPExclEnJours']) {
            $object->setBETAGestionCPExclEnJours(null);
        }
        if (\array_key_exists('etA_GestionCPExclEnJours', $data) && null !== $data['etA_GestionCPExclEnJours']) {
            $object->setEtAGestionCPExclEnJours($data['etA_GestionCPExclEnJours']);
        } elseif (\array_key_exists('etA_GestionCPExclEnJours', $data) && null === $data['etA_GestionCPExclEnJours']) {
            $object->setEtAGestionCPExclEnJours(null);
        }
        if (\array_key_exists('bETA_JourDebSemActiviteJournaliere', $data) && null !== $data['bETA_JourDebSemActiviteJournaliere']) {
            $object->setBETAJourDebSemActiviteJournaliere($data['bETA_JourDebSemActiviteJournaliere']);
        } elseif (\array_key_exists('bETA_JourDebSemActiviteJournaliere', $data) && null === $data['bETA_JourDebSemActiviteJournaliere']) {
            $object->setBETAJourDebSemActiviteJournaliere(null);
        }
        if (\array_key_exists('etA_JourDebSemActiviteJournaliere', $data) && null !== $data['etA_JourDebSemActiviteJournaliere']) {
            $object->setEtAJourDebSemActiviteJournaliere($data['etA_JourDebSemActiviteJournaliere']);
        } elseif (\array_key_exists('etA_JourDebSemActiviteJournaliere', $data) && null === $data['etA_JourDebSemActiviteJournaliere']) {
            $object->setEtAJourDebSemActiviteJournaliere(null);
        }
        if (\array_key_exists('bETA_JourneeSolidarite', $data) && null !== $data['bETA_JourneeSolidarite']) {
            $object->setBETAJourneeSolidarite($data['bETA_JourneeSolidarite']);
        } elseif (\array_key_exists('bETA_JourneeSolidarite', $data) && null === $data['bETA_JourneeSolidarite']) {
            $object->setBETAJourneeSolidarite(null);
        }
        if (\array_key_exists('etA_JourneeSolidarite', $data) && null !== $data['etA_JourneeSolidarite']) {
            $object->setEtAJourneeSolidarite($data['etA_JourneeSolidarite']);
        } elseif (\array_key_exists('etA_JourneeSolidarite', $data) && null === $data['etA_JourneeSolidarite']) {
            $object->setEtAJourneeSolidarite(null);
        }
        if (\array_key_exists('bETA_JoursFeriesTravailles', $data) && null !== $data['bETA_JoursFeriesTravailles']) {
            $object->setBETAJoursFeriesTravailles($data['bETA_JoursFeriesTravailles']);
        } elseif (\array_key_exists('bETA_JoursFeriesTravailles', $data) && null === $data['bETA_JoursFeriesTravailles']) {
            $object->setBETAJoursFeriesTravailles(null);
        }
        if (\array_key_exists('etA_JoursFeriesTravailles', $data) && null !== $data['etA_JoursFeriesTravailles']) {
            $object->setEtAJoursFeriesTravailles($data['etA_JoursFeriesTravailles']);
        } elseif (\array_key_exists('etA_JoursFeriesTravailles', $data) && null === $data['etA_JoursFeriesTravailles']) {
            $object->setEtAJoursFeriesTravailles(null);
        }
        if (\array_key_exists('bETA_MethodeArbitrage', $data) && null !== $data['bETA_MethodeArbitrage']) {
            $object->setBETAMethodeArbitrage($data['bETA_MethodeArbitrage']);
        } elseif (\array_key_exists('bETA_MethodeArbitrage', $data) && null === $data['bETA_MethodeArbitrage']) {
            $object->setBETAMethodeArbitrage(null);
        }
        if (\array_key_exists('etA_MethodeArbitrage', $data) && null !== $data['etA_MethodeArbitrage']) {
            $object->setEtAMethodeArbitrage($data['etA_MethodeArbitrage']);
        } elseif (\array_key_exists('etA_MethodeArbitrage', $data) && null === $data['etA_MethodeArbitrage']) {
            $object->setEtAMethodeArbitrage(null);
        }
        if (\array_key_exists('bETA_MethodeCalculMaintien', $data) && null !== $data['bETA_MethodeCalculMaintien']) {
            $object->setBETAMethodeCalculMaintien($data['bETA_MethodeCalculMaintien']);
        } elseif (\array_key_exists('bETA_MethodeCalculMaintien', $data) && null === $data['bETA_MethodeCalculMaintien']) {
            $object->setBETAMethodeCalculMaintien(null);
        }
        if (\array_key_exists('etA_MethodeCalculMaintien', $data) && null !== $data['etA_MethodeCalculMaintien']) {
            $object->setEtAMethodeCalculMaintien($data['etA_MethodeCalculMaintien']);
        } elseif (\array_key_exists('etA_MethodeCalculMaintien', $data) && null === $data['etA_MethodeCalculMaintien']) {
            $object->setEtAMethodeCalculMaintien(null);
        }
        if (\array_key_exists('bETA_MethodeCalculMaintienNbM', $data) && null !== $data['bETA_MethodeCalculMaintienNbM']) {
            $object->setBETAMethodeCalculMaintienNbM($data['bETA_MethodeCalculMaintienNbM']);
        } elseif (\array_key_exists('bETA_MethodeCalculMaintienNbM', $data) && null === $data['bETA_MethodeCalculMaintienNbM']) {
            $object->setBETAMethodeCalculMaintienNbM(null);
        }
        if (\array_key_exists('etA_MethodeCalculMaintienNbM', $data) && null !== $data['etA_MethodeCalculMaintienNbM']) {
            $object->setEtAMethodeCalculMaintienNbM($data['etA_MethodeCalculMaintienNbM']);
        } elseif (\array_key_exists('etA_MethodeCalculMaintienNbM', $data) && null === $data['etA_MethodeCalculMaintienNbM']) {
            $object->setEtAMethodeCalculMaintienNbM(null);
        }
        if (\array_key_exists('bETA_MethodeRetenueCP', $data) && null !== $data['bETA_MethodeRetenueCP']) {
            $object->setBETAMethodeRetenueCP($data['bETA_MethodeRetenueCP']);
        } elseif (\array_key_exists('bETA_MethodeRetenueCP', $data) && null === $data['bETA_MethodeRetenueCP']) {
            $object->setBETAMethodeRetenueCP(null);
        }
        if (\array_key_exists('etA_MethodeRetenueCP', $data) && null !== $data['etA_MethodeRetenueCP']) {
            $object->setEtAMethodeRetenueCP($data['etA_MethodeRetenueCP']);
        } elseif (\array_key_exists('etA_MethodeRetenueCP', $data) && null === $data['etA_MethodeRetenueCP']) {
            $object->setEtAMethodeRetenueCP(null);
        }
        if (\array_key_exists('bETA_MethodeSuiviAbsences', $data) && null !== $data['bETA_MethodeSuiviAbsences']) {
            $object->setBETAMethodeSuiviAbsences($data['bETA_MethodeSuiviAbsences']);
        } elseif (\array_key_exists('bETA_MethodeSuiviAbsences', $data) && null === $data['bETA_MethodeSuiviAbsences']) {
            $object->setBETAMethodeSuiviAbsences(null);
        }
        if (\array_key_exists('etA_MethodeSuiviAbsences', $data) && null !== $data['etA_MethodeSuiviAbsences']) {
            $object->setEtAMethodeSuiviAbsences($data['etA_MethodeSuiviAbsences']);
        } elseif (\array_key_exists('etA_MethodeSuiviAbsences', $data) && null === $data['etA_MethodeSuiviAbsences']) {
            $object->setEtAMethodeSuiviAbsences(null);
        }
        if (\array_key_exists('bETA_MethodeSuiviAbsencesDeductionHM', $data) && null !== $data['bETA_MethodeSuiviAbsencesDeductionHM']) {
            $object->setBETAMethodeSuiviAbsencesDeductionHM($data['bETA_MethodeSuiviAbsencesDeductionHM']);
        } elseif (\array_key_exists('bETA_MethodeSuiviAbsencesDeductionHM', $data) && null === $data['bETA_MethodeSuiviAbsencesDeductionHM']) {
            $object->setBETAMethodeSuiviAbsencesDeductionHM(null);
        }
        if (\array_key_exists('etA_MethodeSuiviAbsencesDeductionHM', $data) && null !== $data['etA_MethodeSuiviAbsencesDeductionHM']) {
            $object->setEtAMethodeSuiviAbsencesDeductionHM($data['etA_MethodeSuiviAbsencesDeductionHM']);
        } elseif (\array_key_exists('etA_MethodeSuiviAbsencesDeductionHM', $data) && null === $data['etA_MethodeSuiviAbsencesDeductionHM']) {
            $object->setEtAMethodeSuiviAbsencesDeductionHM(null);
        }
        if (\array_key_exists('bETA_MethodeSuiviAbsencesJC', $data) && null !== $data['bETA_MethodeSuiviAbsencesJC']) {
            $object->setBETAMethodeSuiviAbsencesJC($data['bETA_MethodeSuiviAbsencesJC']);
        } elseif (\array_key_exists('bETA_MethodeSuiviAbsencesJC', $data) && null === $data['bETA_MethodeSuiviAbsencesJC']) {
            $object->setBETAMethodeSuiviAbsencesJC(null);
        }
        if (\array_key_exists('etA_MethodeSuiviAbsencesJC', $data) && null !== $data['etA_MethodeSuiviAbsencesJC']) {
            $object->setEtAMethodeSuiviAbsencesJC($data['etA_MethodeSuiviAbsencesJC']);
        } elseif (\array_key_exists('etA_MethodeSuiviAbsencesJC', $data) && null === $data['etA_MethodeSuiviAbsencesJC']) {
            $object->setEtAMethodeSuiviAbsencesJC(null);
        }
        if (\array_key_exists('bETA_MethodeSuiviCP', $data) && null !== $data['bETA_MethodeSuiviCP']) {
            $object->setBETAMethodeSuiviCP($data['bETA_MethodeSuiviCP']);
        } elseif (\array_key_exists('bETA_MethodeSuiviCP', $data) && null === $data['bETA_MethodeSuiviCP']) {
            $object->setBETAMethodeSuiviCP(null);
        }
        if (\array_key_exists('etA_MethodeSuiviCP', $data) && null !== $data['etA_MethodeSuiviCP']) {
            $object->setEtAMethodeSuiviCP($data['etA_MethodeSuiviCP']);
        } elseif (\array_key_exists('etA_MethodeSuiviCP', $data) && null === $data['etA_MethodeSuiviCP']) {
            $object->setEtAMethodeSuiviCP(null);
        }
        if (\array_key_exists('bETA_MethodeSuiviCPAcqMois', $data) && null !== $data['bETA_MethodeSuiviCPAcqMois']) {
            $object->setBETAMethodeSuiviCPAcqMois($data['bETA_MethodeSuiviCPAcqMois']);
        } elseif (\array_key_exists('bETA_MethodeSuiviCPAcqMois', $data) && null === $data['bETA_MethodeSuiviCPAcqMois']) {
            $object->setBETAMethodeSuiviCPAcqMois(null);
        }
        if (\array_key_exists('etA_MethodeSuiviCPAcqMois', $data) && null !== $data['etA_MethodeSuiviCPAcqMois']) {
            $object->setEtAMethodeSuiviCPAcqMois($data['etA_MethodeSuiviCPAcqMois']);
        } elseif (\array_key_exists('etA_MethodeSuiviCPAcqMois', $data) && null === $data['etA_MethodeSuiviCPAcqMois']) {
            $object->setEtAMethodeSuiviCPAcqMois(null);
        }
        if (\array_key_exists('bETA_ModeSaisieActiviteJournaliere', $data) && null !== $data['bETA_ModeSaisieActiviteJournaliere']) {
            $object->setBETAModeSaisieActiviteJournaliere($data['bETA_ModeSaisieActiviteJournaliere']);
        } elseif (\array_key_exists('bETA_ModeSaisieActiviteJournaliere', $data) && null === $data['bETA_ModeSaisieActiviteJournaliere']) {
            $object->setBETAModeSaisieActiviteJournaliere(null);
        }
        if (\array_key_exists('etA_ModeSaisieActiviteJournaliere', $data) && null !== $data['etA_ModeSaisieActiviteJournaliere']) {
            $object->setEtAModeSaisieActiviteJournaliere($data['etA_ModeSaisieActiviteJournaliere']);
        } elseif (\array_key_exists('etA_ModeSaisieActiviteJournaliere', $data) && null === $data['etA_ModeSaisieActiviteJournaliere']) {
            $object->setEtAModeSaisieActiviteJournaliere(null);
        }
        if (\array_key_exists('bETA_MoisAcquisitionDIF', $data) && null !== $data['bETA_MoisAcquisitionDIF']) {
            $object->setBETAMoisAcquisitionDIF($data['bETA_MoisAcquisitionDIF']);
        } elseif (\array_key_exists('bETA_MoisAcquisitionDIF', $data) && null === $data['bETA_MoisAcquisitionDIF']) {
            $object->setBETAMoisAcquisitionDIF(null);
        }
        if (\array_key_exists('etA_MoisAcquisitionDIF', $data) && null !== $data['etA_MoisAcquisitionDIF']) {
            $object->setEtAMoisAcquisitionDIF($data['etA_MoisAcquisitionDIF']);
        } elseif (\array_key_exists('etA_MoisAcquisitionDIF', $data) && null === $data['etA_MoisAcquisitionDIF']) {
            $object->setEtAMoisAcquisitionDIF(null);
        }
        if (\array_key_exists('bETA_MoisClotureCP', $data) && null !== $data['bETA_MoisClotureCP']) {
            $object->setBETAMoisClotureCP($data['bETA_MoisClotureCP']);
        } elseif (\array_key_exists('bETA_MoisClotureCP', $data) && null === $data['bETA_MoisClotureCP']) {
            $object->setBETAMoisClotureCP(null);
        }
        if (\array_key_exists('etA_MoisClotureCP', $data) && null !== $data['etA_MoisClotureCP']) {
            $object->setEtAMoisClotureCP($data['etA_MoisClotureCP']);
        } elseif (\array_key_exists('etA_MoisClotureCP', $data) && null === $data['etA_MoisClotureCP']) {
            $object->setEtAMoisClotureCP(null);
        }
        if (\array_key_exists('bETA_MoisClotureFJ', $data) && null !== $data['bETA_MoisClotureFJ']) {
            $object->setBETAMoisClotureFJ($data['bETA_MoisClotureFJ']);
        } elseif (\array_key_exists('bETA_MoisClotureFJ', $data) && null === $data['bETA_MoisClotureFJ']) {
            $object->setBETAMoisClotureFJ(null);
        }
        if (\array_key_exists('etA_MoisClotureFJ', $data) && null !== $data['etA_MoisClotureFJ']) {
            $object->setEtAMoisClotureFJ($data['etA_MoisClotureFJ']);
        } elseif (\array_key_exists('etA_MoisClotureFJ', $data) && null === $data['etA_MoisClotureFJ']) {
            $object->setEtAMoisClotureFJ(null);
        }
        if (\array_key_exists('bETA_MoisClotureRepos', $data) && null !== $data['bETA_MoisClotureRepos']) {
            $object->setBETAMoisClotureRepos($data['bETA_MoisClotureRepos']);
        } elseif (\array_key_exists('bETA_MoisClotureRepos', $data) && null === $data['bETA_MoisClotureRepos']) {
            $object->setBETAMoisClotureRepos(null);
        }
        if (\array_key_exists('etA_MoisClotureRepos', $data) && null !== $data['etA_MoisClotureRepos']) {
            $object->setEtAMoisClotureRepos($data['etA_MoisClotureRepos']);
        } elseif (\array_key_exists('etA_MoisClotureRepos', $data) && null === $data['etA_MoisClotureRepos']) {
            $object->setEtAMoisClotureRepos(null);
        }
        if (\array_key_exists('bETA_MoisClotureRTT', $data) && null !== $data['bETA_MoisClotureRTT']) {
            $object->setBETAMoisClotureRTT($data['bETA_MoisClotureRTT']);
        } elseif (\array_key_exists('bETA_MoisClotureRTT', $data) && null === $data['bETA_MoisClotureRTT']) {
            $object->setBETAMoisClotureRTT(null);
        }
        if (\array_key_exists('etA_MoisClotureRTT', $data) && null !== $data['etA_MoisClotureRTT']) {
            $object->setEtAMoisClotureRTT($data['etA_MoisClotureRTT']);
        } elseif (\array_key_exists('etA_MoisClotureRTT', $data) && null === $data['etA_MoisClotureRTT']) {
            $object->setEtAMoisClotureRTT(null);
        }
        if (\array_key_exists('bETA_NomInterne', $data) && null !== $data['bETA_NomInterne']) {
            $object->setBETANomInterne($data['bETA_NomInterne']);
        } elseif (\array_key_exists('bETA_NomInterne', $data) && null === $data['bETA_NomInterne']) {
            $object->setBETANomInterne(null);
        }
        if (\array_key_exists('etA_NomInterne', $data) && null !== $data['etA_NomInterne']) {
            $object->setEtANomInterne($data['etA_NomInterne']);
        } elseif (\array_key_exists('etA_NomInterne', $data) && null === $data['etA_NomInterne']) {
            $object->setEtANomInterne(null);
        }
        if (\array_key_exists('bETA_NonSoumisCVAE', $data) && null !== $data['bETA_NonSoumisCVAE']) {
            $object->setBETANonSoumisCVAE($data['bETA_NonSoumisCVAE']);
        } elseif (\array_key_exists('bETA_NonSoumisCVAE', $data) && null === $data['bETA_NonSoumisCVAE']) {
            $object->setBETANonSoumisCVAE(null);
        }
        if (\array_key_exists('etA_NonSoumisCVAE', $data) && null !== $data['etA_NonSoumisCVAE']) {
            $object->setEtANonSoumisCVAE($data['etA_NonSoumisCVAE']);
        } elseif (\array_key_exists('etA_NonSoumisCVAE', $data) && null === $data['etA_NonSoumisCVAE']) {
            $object->setEtANonSoumisCVAE(null);
        }
        if (\array_key_exists('bETA_PeriodeRegulTauxAT_1', $data) && null !== $data['bETA_PeriodeRegulTauxAT_1']) {
            $object->setBETAPeriodeRegulTauxAT1($data['bETA_PeriodeRegulTauxAT_1']);
        } elseif (\array_key_exists('bETA_PeriodeRegulTauxAT_1', $data) && null === $data['bETA_PeriodeRegulTauxAT_1']) {
            $object->setBETAPeriodeRegulTauxAT1(null);
        }
        if (\array_key_exists('etA_PeriodeRegulTauxAT_1', $data) && null !== $data['etA_PeriodeRegulTauxAT_1']) {
            $object->setEtAPeriodeRegulTauxAT1(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['etA_PeriodeRegulTauxAT_1']));
        } elseif (\array_key_exists('etA_PeriodeRegulTauxAT_1', $data) && null === $data['etA_PeriodeRegulTauxAT_1']) {
            $object->setEtAPeriodeRegulTauxAT1(null);
        }
        if (\array_key_exists('bETA_PeriodeRegulTauxAT_2', $data) && null !== $data['bETA_PeriodeRegulTauxAT_2']) {
            $object->setBETAPeriodeRegulTauxAT2($data['bETA_PeriodeRegulTauxAT_2']);
        } elseif (\array_key_exists('bETA_PeriodeRegulTauxAT_2', $data) && null === $data['bETA_PeriodeRegulTauxAT_2']) {
            $object->setBETAPeriodeRegulTauxAT2(null);
        }
        if (\array_key_exists('etA_PeriodeRegulTauxAT_2', $data) && null !== $data['etA_PeriodeRegulTauxAT_2']) {
            $object->setEtAPeriodeRegulTauxAT2(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['etA_PeriodeRegulTauxAT_2']));
        } elseif (\array_key_exists('etA_PeriodeRegulTauxAT_2', $data) && null === $data['etA_PeriodeRegulTauxAT_2']) {
            $object->setEtAPeriodeRegulTauxAT2(null);
        }
        if (\array_key_exists('bETA_PeriodeRegulTauxAT_3', $data) && null !== $data['bETA_PeriodeRegulTauxAT_3']) {
            $object->setBETAPeriodeRegulTauxAT3($data['bETA_PeriodeRegulTauxAT_3']);
        } elseif (\array_key_exists('bETA_PeriodeRegulTauxAT_3', $data) && null === $data['bETA_PeriodeRegulTauxAT_3']) {
            $object->setBETAPeriodeRegulTauxAT3(null);
        }
        if (\array_key_exists('etA_PeriodeRegulTauxAT_3', $data) && null !== $data['etA_PeriodeRegulTauxAT_3']) {
            $object->setEtAPeriodeRegulTauxAT3(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['etA_PeriodeRegulTauxAT_3']));
        } elseif (\array_key_exists('etA_PeriodeRegulTauxAT_3', $data) && null === $data['etA_PeriodeRegulTauxAT_3']) {
            $object->setEtAPeriodeRegulTauxAT3(null);
        }
        if (\array_key_exists('bETA_PeriodeRegulTauxAT_4', $data) && null !== $data['bETA_PeriodeRegulTauxAT_4']) {
            $object->setBETAPeriodeRegulTauxAT4($data['bETA_PeriodeRegulTauxAT_4']);
        } elseif (\array_key_exists('bETA_PeriodeRegulTauxAT_4', $data) && null === $data['bETA_PeriodeRegulTauxAT_4']) {
            $object->setBETAPeriodeRegulTauxAT4(null);
        }
        if (\array_key_exists('etA_PeriodeRegulTauxAT_4', $data) && null !== $data['etA_PeriodeRegulTauxAT_4']) {
            $object->setEtAPeriodeRegulTauxAT4(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['etA_PeriodeRegulTauxAT_4']));
        } elseif (\array_key_exists('etA_PeriodeRegulTauxAT_4', $data) && null === $data['etA_PeriodeRegulTauxAT_4']) {
            $object->setEtAPeriodeRegulTauxAT4(null);
        }
        if (\array_key_exists('bETA_PeriodeRegulTauxAT_5', $data) && null !== $data['bETA_PeriodeRegulTauxAT_5']) {
            $object->setBETAPeriodeRegulTauxAT5($data['bETA_PeriodeRegulTauxAT_5']);
        } elseif (\array_key_exists('bETA_PeriodeRegulTauxAT_5', $data) && null === $data['bETA_PeriodeRegulTauxAT_5']) {
            $object->setBETAPeriodeRegulTauxAT5(null);
        }
        if (\array_key_exists('etA_PeriodeRegulTauxAT_5', $data) && null !== $data['etA_PeriodeRegulTauxAT_5']) {
            $object->setEtAPeriodeRegulTauxAT5(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['etA_PeriodeRegulTauxAT_5']));
        } elseif (\array_key_exists('etA_PeriodeRegulTauxAT_5', $data) && null === $data['etA_PeriodeRegulTauxAT_5']) {
            $object->setEtAPeriodeRegulTauxAT5(null);
        }
        if (\array_key_exists('bETA_PeriodeRegulTauxAT_6', $data) && null !== $data['bETA_PeriodeRegulTauxAT_6']) {
            $object->setBETAPeriodeRegulTauxAT6($data['bETA_PeriodeRegulTauxAT_6']);
        } elseif (\array_key_exists('bETA_PeriodeRegulTauxAT_6', $data) && null === $data['bETA_PeriodeRegulTauxAT_6']) {
            $object->setBETAPeriodeRegulTauxAT6(null);
        }
        if (\array_key_exists('etA_PeriodeRegulTauxAT_6', $data) && null !== $data['etA_PeriodeRegulTauxAT_6']) {
            $object->setEtAPeriodeRegulTauxAT6(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['etA_PeriodeRegulTauxAT_6']));
        } elseif (\array_key_exists('etA_PeriodeRegulTauxAT_6', $data) && null === $data['etA_PeriodeRegulTauxAT_6']) {
            $object->setEtAPeriodeRegulTauxAT6(null);
        }
        if (\array_key_exists('bETA_PeriodeRegulTauxAT_7', $data) && null !== $data['bETA_PeriodeRegulTauxAT_7']) {
            $object->setBETAPeriodeRegulTauxAT7($data['bETA_PeriodeRegulTauxAT_7']);
        } elseif (\array_key_exists('bETA_PeriodeRegulTauxAT_7', $data) && null === $data['bETA_PeriodeRegulTauxAT_7']) {
            $object->setBETAPeriodeRegulTauxAT7(null);
        }
        if (\array_key_exists('etA_PeriodeRegulTauxAT_7', $data) && null !== $data['etA_PeriodeRegulTauxAT_7']) {
            $object->setEtAPeriodeRegulTauxAT7(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['etA_PeriodeRegulTauxAT_7']));
        } elseif (\array_key_exists('etA_PeriodeRegulTauxAT_7', $data) && null === $data['etA_PeriodeRegulTauxAT_7']) {
            $object->setEtAPeriodeRegulTauxAT7(null);
        }
        if (\array_key_exists('bETA_PersonneAContacterMel', $data) && null !== $data['bETA_PersonneAContacterMel']) {
            $object->setBETAPersonneAContacterMel($data['bETA_PersonneAContacterMel']);
        } elseif (\array_key_exists('bETA_PersonneAContacterMel', $data) && null === $data['bETA_PersonneAContacterMel']) {
            $object->setBETAPersonneAContacterMel(null);
        }
        if (\array_key_exists('etA_PersonneAContacterMel', $data) && null !== $data['etA_PersonneAContacterMel']) {
            $object->setEtAPersonneAContacterMel($data['etA_PersonneAContacterMel']);
        } elseif (\array_key_exists('etA_PersonneAContacterMel', $data) && null === $data['etA_PersonneAContacterMel']) {
            $object->setEtAPersonneAContacterMel(null);
        }
        if (\array_key_exists('bETA_PersonneAContacterNom', $data) && null !== $data['bETA_PersonneAContacterNom']) {
            $object->setBETAPersonneAContacterNom($data['bETA_PersonneAContacterNom']);
        } elseif (\array_key_exists('bETA_PersonneAContacterNom', $data) && null === $data['bETA_PersonneAContacterNom']) {
            $object->setBETAPersonneAContacterNom(null);
        }
        if (\array_key_exists('etA_PersonneAContacterNom', $data) && null !== $data['etA_PersonneAContacterNom']) {
            $object->setEtAPersonneAContacterNom($data['etA_PersonneAContacterNom']);
        } elseif (\array_key_exists('etA_PersonneAContacterNom', $data) && null === $data['etA_PersonneAContacterNom']) {
            $object->setEtAPersonneAContacterNom(null);
        }
        if (\array_key_exists('bETA_PersonneAContacterPrenom', $data) && null !== $data['bETA_PersonneAContacterPrenom']) {
            $object->setBETAPersonneAContacterPrenom($data['bETA_PersonneAContacterPrenom']);
        } elseif (\array_key_exists('bETA_PersonneAContacterPrenom', $data) && null === $data['bETA_PersonneAContacterPrenom']) {
            $object->setBETAPersonneAContacterPrenom(null);
        }
        if (\array_key_exists('etA_PersonneAContacterPrenom', $data) && null !== $data['etA_PersonneAContacterPrenom']) {
            $object->setEtAPersonneAContacterPrenom($data['etA_PersonneAContacterPrenom']);
        } elseif (\array_key_exists('etA_PersonneAContacterPrenom', $data) && null === $data['etA_PersonneAContacterPrenom']) {
            $object->setEtAPersonneAContacterPrenom(null);
        }
        if (\array_key_exists('bETA_PersonneAContacterTel', $data) && null !== $data['bETA_PersonneAContacterTel']) {
            $object->setBETAPersonneAContacterTel($data['bETA_PersonneAContacterTel']);
        } elseif (\array_key_exists('bETA_PersonneAContacterTel', $data) && null === $data['bETA_PersonneAContacterTel']) {
            $object->setBETAPersonneAContacterTel(null);
        }
        if (\array_key_exists('etA_PersonneAContacterTel', $data) && null !== $data['etA_PersonneAContacterTel']) {
            $object->setEtAPersonneAContacterTel($data['etA_PersonneAContacterTel']);
        } elseif (\array_key_exists('etA_PersonneAContacterTel', $data) && null === $data['etA_PersonneAContacterTel']) {
            $object->setEtAPersonneAContacterTel(null);
        }
        if (\array_key_exists('bETA_PrefixeMatriculesSalaries', $data) && null !== $data['bETA_PrefixeMatriculesSalaries']) {
            $object->setBETAPrefixeMatriculesSalaries($data['bETA_PrefixeMatriculesSalaries']);
        } elseif (\array_key_exists('bETA_PrefixeMatriculesSalaries', $data) && null === $data['bETA_PrefixeMatriculesSalaries']) {
            $object->setBETAPrefixeMatriculesSalaries(null);
        }
        if (\array_key_exists('etA_PrefixeMatriculesSalaries', $data) && null !== $data['etA_PrefixeMatriculesSalaries']) {
            $object->setEtAPrefixeMatriculesSalaries($data['etA_PrefixeMatriculesSalaries']);
        } elseif (\array_key_exists('etA_PrefixeMatriculesSalaries', $data) && null === $data['etA_PrefixeMatriculesSalaries']) {
            $object->setEtAPrefixeMatriculesSalaries(null);
        }
        if (\array_key_exists('bETA_RTTEnHeures', $data) && null !== $data['bETA_RTTEnHeures']) {
            $object->setBETARTTEnHeures($data['bETA_RTTEnHeures']);
        } elseif (\array_key_exists('bETA_RTTEnHeures', $data) && null === $data['bETA_RTTEnHeures']) {
            $object->setBETARTTEnHeures(null);
        }
        if (\array_key_exists('etA_RTTEnHeures', $data) && null !== $data['etA_RTTEnHeures']) {
            $object->setEtARTTEnHeures($data['etA_RTTEnHeures']);
        } elseif (\array_key_exists('etA_RTTEnHeures', $data) && null === $data['etA_RTTEnHeures']) {
            $object->setEtARTTEnHeures(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_018_001', $data) && null !== $data['bETA_S41_G01_00_018_001']) {
            $object->setBETAS41G0100018001($data['bETA_S41_G01_00_018_001']);
        } elseif (\array_key_exists('bETA_S41_G01_00_018_001', $data) && null === $data['bETA_S41_G01_00_018_001']) {
            $object->setBETAS41G0100018001(null);
        }
        if (\array_key_exists('etA_S41_G01_00_018_001', $data) && null !== $data['etA_S41_G01_00_018_001']) {
            $object->setEtAS41G0100018001($data['etA_S41_G01_00_018_001']);
        } elseif (\array_key_exists('etA_S41_G01_00_018_001', $data) && null === $data['etA_S41_G01_00_018_001']) {
            $object->setEtAS41G0100018001(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_018_006', $data) && null !== $data['bETA_S41_G01_00_018_006']) {
            $object->setBETAS41G0100018006($data['bETA_S41_G01_00_018_006']);
        } elseif (\array_key_exists('bETA_S41_G01_00_018_006', $data) && null === $data['bETA_S41_G01_00_018_006']) {
            $object->setBETAS41G0100018006(null);
        }
        if (\array_key_exists('etA_S41_G01_00_018_006', $data) && null !== $data['etA_S41_G01_00_018_006']) {
            $object->setEtAS41G0100018006($data['etA_S41_G01_00_018_006']);
        } elseif (\array_key_exists('etA_S41_G01_00_018_006', $data) && null === $data['etA_S41_G01_00_018_006']) {
            $object->setEtAS41G0100018006(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_025_1', $data) && null !== $data['bETA_S41_G01_00_025_1']) {
            $object->setBETAS41G01000251($data['bETA_S41_G01_00_025_1']);
        } elseif (\array_key_exists('bETA_S41_G01_00_025_1', $data) && null === $data['bETA_S41_G01_00_025_1']) {
            $object->setBETAS41G01000251(null);
        }
        if (\array_key_exists('etA_S41_G01_00_025_1', $data) && null !== $data['etA_S41_G01_00_025_1']) {
            $object->setEtAS41G01000251($data['etA_S41_G01_00_025_1']);
        } elseif (\array_key_exists('etA_S41_G01_00_025_1', $data) && null === $data['etA_S41_G01_00_025_1']) {
            $object->setEtAS41G01000251(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_025_2', $data) && null !== $data['bETA_S41_G01_00_025_2']) {
            $object->setBETAS41G01000252($data['bETA_S41_G01_00_025_2']);
        } elseif (\array_key_exists('bETA_S41_G01_00_025_2', $data) && null === $data['bETA_S41_G01_00_025_2']) {
            $object->setBETAS41G01000252(null);
        }
        if (\array_key_exists('etA_S41_G01_00_025_2', $data) && null !== $data['etA_S41_G01_00_025_2']) {
            $object->setEtAS41G01000252($data['etA_S41_G01_00_025_2']);
        } elseif (\array_key_exists('etA_S41_G01_00_025_2', $data) && null === $data['etA_S41_G01_00_025_2']) {
            $object->setEtAS41G01000252(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_025_3', $data) && null !== $data['bETA_S41_G01_00_025_3']) {
            $object->setBETAS41G01000253($data['bETA_S41_G01_00_025_3']);
        } elseif (\array_key_exists('bETA_S41_G01_00_025_3', $data) && null === $data['bETA_S41_G01_00_025_3']) {
            $object->setBETAS41G01000253(null);
        }
        if (\array_key_exists('etA_S41_G01_00_025_3', $data) && null !== $data['etA_S41_G01_00_025_3']) {
            $object->setEtAS41G01000253($data['etA_S41_G01_00_025_3']);
        } elseif (\array_key_exists('etA_S41_G01_00_025_3', $data) && null === $data['etA_S41_G01_00_025_3']) {
            $object->setEtAS41G01000253(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_025_4', $data) && null !== $data['bETA_S41_G01_00_025_4']) {
            $object->setBETAS41G01000254($data['bETA_S41_G01_00_025_4']);
        } elseif (\array_key_exists('bETA_S41_G01_00_025_4', $data) && null === $data['bETA_S41_G01_00_025_4']) {
            $object->setBETAS41G01000254(null);
        }
        if (\array_key_exists('etA_S41_G01_00_025_4', $data) && null !== $data['etA_S41_G01_00_025_4']) {
            $object->setEtAS41G01000254($data['etA_S41_G01_00_025_4']);
        } elseif (\array_key_exists('etA_S41_G01_00_025_4', $data) && null === $data['etA_S41_G01_00_025_4']) {
            $object->setEtAS41G01000254(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_025_5', $data) && null !== $data['bETA_S41_G01_00_025_5']) {
            $object->setBETAS41G01000255($data['bETA_S41_G01_00_025_5']);
        } elseif (\array_key_exists('bETA_S41_G01_00_025_5', $data) && null === $data['bETA_S41_G01_00_025_5']) {
            $object->setBETAS41G01000255(null);
        }
        if (\array_key_exists('etA_S41_G01_00_025_5', $data) && null !== $data['etA_S41_G01_00_025_5']) {
            $object->setEtAS41G01000255($data['etA_S41_G01_00_025_5']);
        } elseif (\array_key_exists('etA_S41_G01_00_025_5', $data) && null === $data['etA_S41_G01_00_025_5']) {
            $object->setEtAS41G01000255(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_025_6', $data) && null !== $data['bETA_S41_G01_00_025_6']) {
            $object->setBETAS41G01000256($data['bETA_S41_G01_00_025_6']);
        } elseif (\array_key_exists('bETA_S41_G01_00_025_6', $data) && null === $data['bETA_S41_G01_00_025_6']) {
            $object->setBETAS41G01000256(null);
        }
        if (\array_key_exists('etA_S41_G01_00_025_6', $data) && null !== $data['etA_S41_G01_00_025_6']) {
            $object->setEtAS41G01000256($data['etA_S41_G01_00_025_6']);
        } elseif (\array_key_exists('etA_S41_G01_00_025_6', $data) && null === $data['etA_S41_G01_00_025_6']) {
            $object->setEtAS41G01000256(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_025_7', $data) && null !== $data['bETA_S41_G01_00_025_7']) {
            $object->setBETAS41G01000257($data['bETA_S41_G01_00_025_7']);
        } elseif (\array_key_exists('bETA_S41_G01_00_025_7', $data) && null === $data['bETA_S41_G01_00_025_7']) {
            $object->setBETAS41G01000257(null);
        }
        if (\array_key_exists('etA_S41_G01_00_025_7', $data) && null !== $data['etA_S41_G01_00_025_7']) {
            $object->setEtAS41G01000257($data['etA_S41_G01_00_025_7']);
        } elseif (\array_key_exists('etA_S41_G01_00_025_7', $data) && null === $data['etA_S41_G01_00_025_7']) {
            $object->setEtAS41G01000257(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_026_1', $data) && null !== $data['bETA_S41_G01_00_026_1']) {
            $object->setBETAS41G01000261($data['bETA_S41_G01_00_026_1']);
        } elseif (\array_key_exists('bETA_S41_G01_00_026_1', $data) && null === $data['bETA_S41_G01_00_026_1']) {
            $object->setBETAS41G01000261(null);
        }
        if (\array_key_exists('etA_S41_G01_00_026_1', $data) && null !== $data['etA_S41_G01_00_026_1']) {
            $object->setEtAS41G01000261($data['etA_S41_G01_00_026_1']);
        } elseif (\array_key_exists('etA_S41_G01_00_026_1', $data) && null === $data['etA_S41_G01_00_026_1']) {
            $object->setEtAS41G01000261(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_026_2', $data) && null !== $data['bETA_S41_G01_00_026_2']) {
            $object->setBETAS41G01000262($data['bETA_S41_G01_00_026_2']);
        } elseif (\array_key_exists('bETA_S41_G01_00_026_2', $data) && null === $data['bETA_S41_G01_00_026_2']) {
            $object->setBETAS41G01000262(null);
        }
        if (\array_key_exists('etA_S41_G01_00_026_2', $data) && null !== $data['etA_S41_G01_00_026_2']) {
            $object->setEtAS41G01000262($data['etA_S41_G01_00_026_2']);
        } elseif (\array_key_exists('etA_S41_G01_00_026_2', $data) && null === $data['etA_S41_G01_00_026_2']) {
            $object->setEtAS41G01000262(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_026_3', $data) && null !== $data['bETA_S41_G01_00_026_3']) {
            $object->setBETAS41G01000263($data['bETA_S41_G01_00_026_3']);
        } elseif (\array_key_exists('bETA_S41_G01_00_026_3', $data) && null === $data['bETA_S41_G01_00_026_3']) {
            $object->setBETAS41G01000263(null);
        }
        if (\array_key_exists('etA_S41_G01_00_026_3', $data) && null !== $data['etA_S41_G01_00_026_3']) {
            $object->setEtAS41G01000263($data['etA_S41_G01_00_026_3']);
        } elseif (\array_key_exists('etA_S41_G01_00_026_3', $data) && null === $data['etA_S41_G01_00_026_3']) {
            $object->setEtAS41G01000263(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_026_4', $data) && null !== $data['bETA_S41_G01_00_026_4']) {
            $object->setBETAS41G01000264($data['bETA_S41_G01_00_026_4']);
        } elseif (\array_key_exists('bETA_S41_G01_00_026_4', $data) && null === $data['bETA_S41_G01_00_026_4']) {
            $object->setBETAS41G01000264(null);
        }
        if (\array_key_exists('etA_S41_G01_00_026_4', $data) && null !== $data['etA_S41_G01_00_026_4']) {
            $object->setEtAS41G01000264($data['etA_S41_G01_00_026_4']);
        } elseif (\array_key_exists('etA_S41_G01_00_026_4', $data) && null === $data['etA_S41_G01_00_026_4']) {
            $object->setEtAS41G01000264(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_026_5', $data) && null !== $data['bETA_S41_G01_00_026_5']) {
            $object->setBETAS41G01000265($data['bETA_S41_G01_00_026_5']);
        } elseif (\array_key_exists('bETA_S41_G01_00_026_5', $data) && null === $data['bETA_S41_G01_00_026_5']) {
            $object->setBETAS41G01000265(null);
        }
        if (\array_key_exists('etA_S41_G01_00_026_5', $data) && null !== $data['etA_S41_G01_00_026_5']) {
            $object->setEtAS41G01000265($data['etA_S41_G01_00_026_5']);
        } elseif (\array_key_exists('etA_S41_G01_00_026_5', $data) && null === $data['etA_S41_G01_00_026_5']) {
            $object->setEtAS41G01000265(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_026_6', $data) && null !== $data['bETA_S41_G01_00_026_6']) {
            $object->setBETAS41G01000266($data['bETA_S41_G01_00_026_6']);
        } elseif (\array_key_exists('bETA_S41_G01_00_026_6', $data) && null === $data['bETA_S41_G01_00_026_6']) {
            $object->setBETAS41G01000266(null);
        }
        if (\array_key_exists('etA_S41_G01_00_026_6', $data) && null !== $data['etA_S41_G01_00_026_6']) {
            $object->setEtAS41G01000266($data['etA_S41_G01_00_026_6']);
        } elseif (\array_key_exists('etA_S41_G01_00_026_6', $data) && null === $data['etA_S41_G01_00_026_6']) {
            $object->setEtAS41G01000266(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_026_7', $data) && null !== $data['bETA_S41_G01_00_026_7']) {
            $object->setBETAS41G01000267($data['bETA_S41_G01_00_026_7']);
        } elseif (\array_key_exists('bETA_S41_G01_00_026_7', $data) && null === $data['bETA_S41_G01_00_026_7']) {
            $object->setBETAS41G01000267(null);
        }
        if (\array_key_exists('etA_S41_G01_00_026_7', $data) && null !== $data['etA_S41_G01_00_026_7']) {
            $object->setEtAS41G01000267($data['etA_S41_G01_00_026_7']);
        } elseif (\array_key_exists('etA_S41_G01_00_026_7', $data) && null === $data['etA_S41_G01_00_026_7']) {
            $object->setEtAS41G01000267(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_027_1', $data) && null !== $data['bETA_S41_G01_00_027_1']) {
            $object->setBETAS41G01000271($data['bETA_S41_G01_00_027_1']);
        } elseif (\array_key_exists('bETA_S41_G01_00_027_1', $data) && null === $data['bETA_S41_G01_00_027_1']) {
            $object->setBETAS41G01000271(null);
        }
        if (\array_key_exists('etA_S41_G01_00_027_1', $data) && null !== $data['etA_S41_G01_00_027_1']) {
            $object->setEtAS41G01000271($data['etA_S41_G01_00_027_1']);
        } elseif (\array_key_exists('etA_S41_G01_00_027_1', $data) && null === $data['etA_S41_G01_00_027_1']) {
            $object->setEtAS41G01000271(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_027_2', $data) && null !== $data['bETA_S41_G01_00_027_2']) {
            $object->setBETAS41G01000272($data['bETA_S41_G01_00_027_2']);
        } elseif (\array_key_exists('bETA_S41_G01_00_027_2', $data) && null === $data['bETA_S41_G01_00_027_2']) {
            $object->setBETAS41G01000272(null);
        }
        if (\array_key_exists('etA_S41_G01_00_027_2', $data) && null !== $data['etA_S41_G01_00_027_2']) {
            $object->setEtAS41G01000272($data['etA_S41_G01_00_027_2']);
        } elseif (\array_key_exists('etA_S41_G01_00_027_2', $data) && null === $data['etA_S41_G01_00_027_2']) {
            $object->setEtAS41G01000272(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_027_3', $data) && null !== $data['bETA_S41_G01_00_027_3']) {
            $object->setBETAS41G01000273($data['bETA_S41_G01_00_027_3']);
        } elseif (\array_key_exists('bETA_S41_G01_00_027_3', $data) && null === $data['bETA_S41_G01_00_027_3']) {
            $object->setBETAS41G01000273(null);
        }
        if (\array_key_exists('etA_S41_G01_00_027_3', $data) && null !== $data['etA_S41_G01_00_027_3']) {
            $object->setEtAS41G01000273($data['etA_S41_G01_00_027_3']);
        } elseif (\array_key_exists('etA_S41_G01_00_027_3', $data) && null === $data['etA_S41_G01_00_027_3']) {
            $object->setEtAS41G01000273(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_027_4', $data) && null !== $data['bETA_S41_G01_00_027_4']) {
            $object->setBETAS41G01000274($data['bETA_S41_G01_00_027_4']);
        } elseif (\array_key_exists('bETA_S41_G01_00_027_4', $data) && null === $data['bETA_S41_G01_00_027_4']) {
            $object->setBETAS41G01000274(null);
        }
        if (\array_key_exists('etA_S41_G01_00_027_4', $data) && null !== $data['etA_S41_G01_00_027_4']) {
            $object->setEtAS41G01000274($data['etA_S41_G01_00_027_4']);
        } elseif (\array_key_exists('etA_S41_G01_00_027_4', $data) && null === $data['etA_S41_G01_00_027_4']) {
            $object->setEtAS41G01000274(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_027_5', $data) && null !== $data['bETA_S41_G01_00_027_5']) {
            $object->setBETAS41G01000275($data['bETA_S41_G01_00_027_5']);
        } elseif (\array_key_exists('bETA_S41_G01_00_027_5', $data) && null === $data['bETA_S41_G01_00_027_5']) {
            $object->setBETAS41G01000275(null);
        }
        if (\array_key_exists('etA_S41_G01_00_027_5', $data) && null !== $data['etA_S41_G01_00_027_5']) {
            $object->setEtAS41G01000275($data['etA_S41_G01_00_027_5']);
        } elseif (\array_key_exists('etA_S41_G01_00_027_5', $data) && null === $data['etA_S41_G01_00_027_5']) {
            $object->setEtAS41G01000275(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_027_6', $data) && null !== $data['bETA_S41_G01_00_027_6']) {
            $object->setBETAS41G01000276($data['bETA_S41_G01_00_027_6']);
        } elseif (\array_key_exists('bETA_S41_G01_00_027_6', $data) && null === $data['bETA_S41_G01_00_027_6']) {
            $object->setBETAS41G01000276(null);
        }
        if (\array_key_exists('etA_S41_G01_00_027_6', $data) && null !== $data['etA_S41_G01_00_027_6']) {
            $object->setEtAS41G01000276($data['etA_S41_G01_00_027_6']);
        } elseif (\array_key_exists('etA_S41_G01_00_027_6', $data) && null === $data['etA_S41_G01_00_027_6']) {
            $object->setEtAS41G01000276(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_027_7', $data) && null !== $data['bETA_S41_G01_00_027_7']) {
            $object->setBETAS41G01000277($data['bETA_S41_G01_00_027_7']);
        } elseif (\array_key_exists('bETA_S41_G01_00_027_7', $data) && null === $data['bETA_S41_G01_00_027_7']) {
            $object->setBETAS41G01000277(null);
        }
        if (\array_key_exists('etA_S41_G01_00_027_7', $data) && null !== $data['etA_S41_G01_00_027_7']) {
            $object->setEtAS41G01000277($data['etA_S41_G01_00_027_7']);
        } elseif (\array_key_exists('etA_S41_G01_00_027_7', $data) && null === $data['etA_S41_G01_00_027_7']) {
            $object->setEtAS41G01000277(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_028_1', $data) && null !== $data['bETA_S41_G01_00_028_1']) {
            $object->setBETAS41G01000281($data['bETA_S41_G01_00_028_1']);
        } elseif (\array_key_exists('bETA_S41_G01_00_028_1', $data) && null === $data['bETA_S41_G01_00_028_1']) {
            $object->setBETAS41G01000281(null);
        }
        if (\array_key_exists('etA_S41_G01_00_028_1', $data) && null !== $data['etA_S41_G01_00_028_1']) {
            $object->setEtAS41G01000281($data['etA_S41_G01_00_028_1']);
        } elseif (\array_key_exists('etA_S41_G01_00_028_1', $data) && null === $data['etA_S41_G01_00_028_1']) {
            $object->setEtAS41G01000281(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_028_2', $data) && null !== $data['bETA_S41_G01_00_028_2']) {
            $object->setBETAS41G01000282($data['bETA_S41_G01_00_028_2']);
        } elseif (\array_key_exists('bETA_S41_G01_00_028_2', $data) && null === $data['bETA_S41_G01_00_028_2']) {
            $object->setBETAS41G01000282(null);
        }
        if (\array_key_exists('etA_S41_G01_00_028_2', $data) && null !== $data['etA_S41_G01_00_028_2']) {
            $object->setEtAS41G01000282($data['etA_S41_G01_00_028_2']);
        } elseif (\array_key_exists('etA_S41_G01_00_028_2', $data) && null === $data['etA_S41_G01_00_028_2']) {
            $object->setEtAS41G01000282(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_028_3', $data) && null !== $data['bETA_S41_G01_00_028_3']) {
            $object->setBETAS41G01000283($data['bETA_S41_G01_00_028_3']);
        } elseif (\array_key_exists('bETA_S41_G01_00_028_3', $data) && null === $data['bETA_S41_G01_00_028_3']) {
            $object->setBETAS41G01000283(null);
        }
        if (\array_key_exists('etA_S41_G01_00_028_3', $data) && null !== $data['etA_S41_G01_00_028_3']) {
            $object->setEtAS41G01000283($data['etA_S41_G01_00_028_3']);
        } elseif (\array_key_exists('etA_S41_G01_00_028_3', $data) && null === $data['etA_S41_G01_00_028_3']) {
            $object->setEtAS41G01000283(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_028_4', $data) && null !== $data['bETA_S41_G01_00_028_4']) {
            $object->setBETAS41G01000284($data['bETA_S41_G01_00_028_4']);
        } elseif (\array_key_exists('bETA_S41_G01_00_028_4', $data) && null === $data['bETA_S41_G01_00_028_4']) {
            $object->setBETAS41G01000284(null);
        }
        if (\array_key_exists('etA_S41_G01_00_028_4', $data) && null !== $data['etA_S41_G01_00_028_4']) {
            $object->setEtAS41G01000284($data['etA_S41_G01_00_028_4']);
        } elseif (\array_key_exists('etA_S41_G01_00_028_4', $data) && null === $data['etA_S41_G01_00_028_4']) {
            $object->setEtAS41G01000284(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_028_5', $data) && null !== $data['bETA_S41_G01_00_028_5']) {
            $object->setBETAS41G01000285($data['bETA_S41_G01_00_028_5']);
        } elseif (\array_key_exists('bETA_S41_G01_00_028_5', $data) && null === $data['bETA_S41_G01_00_028_5']) {
            $object->setBETAS41G01000285(null);
        }
        if (\array_key_exists('etA_S41_G01_00_028_5', $data) && null !== $data['etA_S41_G01_00_028_5']) {
            $object->setEtAS41G01000285($data['etA_S41_G01_00_028_5']);
        } elseif (\array_key_exists('etA_S41_G01_00_028_5', $data) && null === $data['etA_S41_G01_00_028_5']) {
            $object->setEtAS41G01000285(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_028_6', $data) && null !== $data['bETA_S41_G01_00_028_6']) {
            $object->setBETAS41G01000286($data['bETA_S41_G01_00_028_6']);
        } elseif (\array_key_exists('bETA_S41_G01_00_028_6', $data) && null === $data['bETA_S41_G01_00_028_6']) {
            $object->setBETAS41G01000286(null);
        }
        if (\array_key_exists('etA_S41_G01_00_028_6', $data) && null !== $data['etA_S41_G01_00_028_6']) {
            $object->setEtAS41G01000286($data['etA_S41_G01_00_028_6']);
        } elseif (\array_key_exists('etA_S41_G01_00_028_6', $data) && null === $data['etA_S41_G01_00_028_6']) {
            $object->setEtAS41G01000286(null);
        }
        if (\array_key_exists('bETA_S41_G01_00_028_7', $data) && null !== $data['bETA_S41_G01_00_028_7']) {
            $object->setBETAS41G01000287($data['bETA_S41_G01_00_028_7']);
        } elseif (\array_key_exists('bETA_S41_G01_00_028_7', $data) && null === $data['bETA_S41_G01_00_028_7']) {
            $object->setBETAS41G01000287(null);
        }
        if (\array_key_exists('etA_S41_G01_00_028_7', $data) && null !== $data['etA_S41_G01_00_028_7']) {
            $object->setEtAS41G01000287($data['etA_S41_G01_00_028_7']);
        } elseif (\array_key_exists('etA_S41_G01_00_028_7', $data) && null === $data['etA_S41_G01_00_028_7']) {
            $object->setEtAS41G01000287(null);
        }
        if (\array_key_exists('bETA_SaisieManuelleHeuresAbsences', $data) && null !== $data['bETA_SaisieManuelleHeuresAbsences']) {
            $object->setBETASaisieManuelleHeuresAbsences($data['bETA_SaisieManuelleHeuresAbsences']);
        } elseif (\array_key_exists('bETA_SaisieManuelleHeuresAbsences', $data) && null === $data['bETA_SaisieManuelleHeuresAbsences']) {
            $object->setBETASaisieManuelleHeuresAbsences(null);
        }
        if (\array_key_exists('etA_SaisieManuelleHeuresAbsences', $data) && null !== $data['etA_SaisieManuelleHeuresAbsences']) {
            $object->setEtASaisieManuelleHeuresAbsences($data['etA_SaisieManuelleHeuresAbsences']);
        } elseif (\array_key_exists('etA_SaisieManuelleHeuresAbsences', $data) && null === $data['etA_SaisieManuelleHeuresAbsences']) {
            $object->setEtASaisieManuelleHeuresAbsences(null);
        }
        if (\array_key_exists('bETA_SoumisTaxeAppr', $data) && null !== $data['bETA_SoumisTaxeAppr']) {
            $object->setBETASoumisTaxeAppr($data['bETA_SoumisTaxeAppr']);
        } elseif (\array_key_exists('bETA_SoumisTaxeAppr', $data) && null === $data['bETA_SoumisTaxeAppr']) {
            $object->setBETASoumisTaxeAppr(null);
        }
        if (\array_key_exists('etA_SoumisTaxeAppr', $data) && null !== $data['etA_SoumisTaxeAppr']) {
            $object->setEtASoumisTaxeAppr($data['etA_SoumisTaxeAppr']);
        } elseif (\array_key_exists('etA_SoumisTaxeAppr', $data) && null === $data['etA_SoumisTaxeAppr']) {
            $object->setEtASoumisTaxeAppr(null);
        }
        if (\array_key_exists('bETA_SoumisTaxeApprAvecMajoration', $data) && null !== $data['bETA_SoumisTaxeApprAvecMajoration']) {
            $object->setBETASoumisTaxeApprAvecMajoration($data['bETA_SoumisTaxeApprAvecMajoration']);
        } elseif (\array_key_exists('bETA_SoumisTaxeApprAvecMajoration', $data) && null === $data['bETA_SoumisTaxeApprAvecMajoration']) {
            $object->setBETASoumisTaxeApprAvecMajoration(null);
        }
        if (\array_key_exists('etA_SoumisTaxeApprAvecMajoration', $data) && null !== $data['etA_SoumisTaxeApprAvecMajoration']) {
            $object->setEtASoumisTaxeApprAvecMajoration($data['etA_SoumisTaxeApprAvecMajoration']);
        } elseif (\array_key_exists('etA_SoumisTaxeApprAvecMajoration', $data) && null === $data['etA_SoumisTaxeApprAvecMajoration']) {
            $object->setEtASoumisTaxeApprAvecMajoration(null);
        }
        if (\array_key_exists('bETA_SoumisTaxeSalaires', $data) && null !== $data['bETA_SoumisTaxeSalaires']) {
            $object->setBETASoumisTaxeSalaires($data['bETA_SoumisTaxeSalaires']);
        } elseif (\array_key_exists('bETA_SoumisTaxeSalaires', $data) && null === $data['bETA_SoumisTaxeSalaires']) {
            $object->setBETASoumisTaxeSalaires(null);
        }
        if (\array_key_exists('etA_SoumisTaxeSalaires', $data) && null !== $data['etA_SoumisTaxeSalaires']) {
            $object->setEtASoumisTaxeSalaires($data['etA_SoumisTaxeSalaires']);
        } elseif (\array_key_exists('etA_SoumisTaxeSalaires', $data) && null === $data['etA_SoumisTaxeSalaires']) {
            $object->setEtASoumisTaxeSalaires(null);
        }
        if (\array_key_exists('bETA_SoumisTaxeSalairesPctImp', $data) && null !== $data['bETA_SoumisTaxeSalairesPctImp']) {
            $object->setBETASoumisTaxeSalairesPctImp($data['bETA_SoumisTaxeSalairesPctImp']);
        } elseif (\array_key_exists('bETA_SoumisTaxeSalairesPctImp', $data) && null === $data['bETA_SoumisTaxeSalairesPctImp']) {
            $object->setBETASoumisTaxeSalairesPctImp(null);
        }
        if (\array_key_exists('etA_SoumisTaxeSalairesPctImp', $data) && null !== $data['etA_SoumisTaxeSalairesPctImp']) {
            $object->setEtASoumisTaxeSalairesPctImp($data['etA_SoumisTaxeSalairesPctImp']);
        } elseif (\array_key_exists('etA_SoumisTaxeSalairesPctImp', $data) && null === $data['etA_SoumisTaxeSalairesPctImp']) {
            $object->setEtASoumisTaxeSalairesPctImp(null);
        }
        if (\array_key_exists('bETA_SousMethodeSuiviAbsences', $data) && null !== $data['bETA_SousMethodeSuiviAbsences']) {
            $object->setBETASousMethodeSuiviAbsences($data['bETA_SousMethodeSuiviAbsences']);
        } elseif (\array_key_exists('bETA_SousMethodeSuiviAbsences', $data) && null === $data['bETA_SousMethodeSuiviAbsences']) {
            $object->setBETASousMethodeSuiviAbsences(null);
        }
        if (\array_key_exists('etA_SousMethodeSuiviAbsences', $data) && null !== $data['etA_SousMethodeSuiviAbsences']) {
            $object->setEtASousMethodeSuiviAbsences($data['etA_SousMethodeSuiviAbsences']);
        } elseif (\array_key_exists('etA_SousMethodeSuiviAbsences', $data) && null === $data['etA_SousMethodeSuiviAbsences']) {
            $object->setEtASousMethodeSuiviAbsences(null);
        }
        if (\array_key_exists('bETA_SousMethodeSuiviAbsencesFJ', $data) && null !== $data['bETA_SousMethodeSuiviAbsencesFJ']) {
            $object->setBETASousMethodeSuiviAbsencesFJ($data['bETA_SousMethodeSuiviAbsencesFJ']);
        } elseif (\array_key_exists('bETA_SousMethodeSuiviAbsencesFJ', $data) && null === $data['bETA_SousMethodeSuiviAbsencesFJ']) {
            $object->setBETASousMethodeSuiviAbsencesFJ(null);
        }
        if (\array_key_exists('etA_SousMethodeSuiviAbsencesFJ', $data) && null !== $data['etA_SousMethodeSuiviAbsencesFJ']) {
            $object->setEtASousMethodeSuiviAbsencesFJ($data['etA_SousMethodeSuiviAbsencesFJ']);
        } elseif (\array_key_exists('etA_SousMethodeSuiviAbsencesFJ', $data) && null === $data['etA_SousMethodeSuiviAbsencesFJ']) {
            $object->setEtASousMethodeSuiviAbsencesFJ(null);
        }
        if (\array_key_exists('bETA_Subrogation', $data) && null !== $data['bETA_Subrogation']) {
            $object->setBETASubrogation($data['bETA_Subrogation']);
        } elseif (\array_key_exists('bETA_Subrogation', $data) && null === $data['bETA_Subrogation']) {
            $object->setBETASubrogation(null);
        }
        if (\array_key_exists('etA_Subrogation', $data) && null !== $data['etA_Subrogation']) {
            $object->setEtASubrogation($data['etA_Subrogation']);
        } elseif (\array_key_exists('etA_Subrogation', $data) && null === $data['etA_Subrogation']) {
            $object->setEtASubrogation(null);
        }
        if (\array_key_exists('bETA_SubrogationVersEtaPrincipal', $data) && null !== $data['bETA_SubrogationVersEtaPrincipal']) {
            $object->setBETASubrogationVersEtaPrincipal($data['bETA_SubrogationVersEtaPrincipal']);
        } elseif (\array_key_exists('bETA_SubrogationVersEtaPrincipal', $data) && null === $data['bETA_SubrogationVersEtaPrincipal']) {
            $object->setBETASubrogationVersEtaPrincipal(null);
        }
        if (\array_key_exists('etA_SubrogationVersEtaPrincipal', $data) && null !== $data['etA_SubrogationVersEtaPrincipal']) {
            $object->setEtASubrogationVersEtaPrincipal($data['etA_SubrogationVersEtaPrincipal']);
        } elseif (\array_key_exists('etA_SubrogationVersEtaPrincipal', $data) && null === $data['etA_SubrogationVersEtaPrincipal']) {
            $object->setEtASubrogationVersEtaPrincipal(null);
        }
        if (\array_key_exists('bETA_TassageAbsencesJours', $data) && null !== $data['bETA_TassageAbsencesJours']) {
            $object->setBETATassageAbsencesJours($data['bETA_TassageAbsencesJours']);
        } elseif (\array_key_exists('bETA_TassageAbsencesJours', $data) && null === $data['bETA_TassageAbsencesJours']) {
            $object->setBETATassageAbsencesJours(null);
        }
        if (\array_key_exists('etA_TassageAbsencesJours', $data) && null !== $data['etA_TassageAbsencesJours']) {
            $object->setEtATassageAbsencesJours($data['etA_TassageAbsencesJours']);
        } elseif (\array_key_exists('etA_TassageAbsencesJours', $data) && null === $data['etA_TassageAbsencesJours']) {
            $object->setEtATassageAbsencesJours(null);
        }
        if (\array_key_exists('bETA_TauxVersementTrs', $data) && null !== $data['bETA_TauxVersementTrs']) {
            $object->setBETATauxVersementTrs($data['bETA_TauxVersementTrs']);
        } elseif (\array_key_exists('bETA_TauxVersementTrs', $data) && null === $data['bETA_TauxVersementTrs']) {
            $object->setBETATauxVersementTrs(null);
        }
        if (\array_key_exists('etA_TauxVersementTrs', $data) && null !== $data['etA_TauxVersementTrs']) {
            $object->setEtATauxVersementTrs($data['etA_TauxVersementTrs']);
        } elseif (\array_key_exists('etA_TauxVersementTrs', $data) && null === $data['etA_TauxVersementTrs']) {
            $object->setEtATauxVersementTrs(null);
        }
        if (\array_key_exists('bETA_TaxeSalairesAbattement', $data) && null !== $data['bETA_TaxeSalairesAbattement']) {
            $object->setBETATaxeSalairesAbattement($data['bETA_TaxeSalairesAbattement']);
        } elseif (\array_key_exists('bETA_TaxeSalairesAbattement', $data) && null === $data['bETA_TaxeSalairesAbattement']) {
            $object->setBETATaxeSalairesAbattement(null);
        }
        if (\array_key_exists('etA_TaxeSalairesAbattement', $data) && null !== $data['etA_TaxeSalairesAbattement']) {
            $object->setEtATaxeSalairesAbattement($data['etA_TaxeSalairesAbattement']);
        } elseif (\array_key_exists('etA_TaxeSalairesAbattement', $data) && null === $data['etA_TaxeSalairesAbattement']) {
            $object->setEtATaxeSalairesAbattement(null);
        }
        if (\array_key_exists('bETA_TaxeSalairesSurSeuilsAnnuel', $data) && null !== $data['bETA_TaxeSalairesSurSeuilsAnnuel']) {
            $object->setBETATaxeSalairesSurSeuilsAnnuel($data['bETA_TaxeSalairesSurSeuilsAnnuel']);
        } elseif (\array_key_exists('bETA_TaxeSalairesSurSeuilsAnnuel', $data) && null === $data['bETA_TaxeSalairesSurSeuilsAnnuel']) {
            $object->setBETATaxeSalairesSurSeuilsAnnuel(null);
        }
        if (\array_key_exists('etA_TaxeSalairesSurSeuilsAnnuel', $data) && null !== $data['etA_TaxeSalairesSurSeuilsAnnuel']) {
            $object->setEtATaxeSalairesSurSeuilsAnnuel($data['etA_TaxeSalairesSurSeuilsAnnuel']);
        } elseif (\array_key_exists('etA_TaxeSalairesSurSeuilsAnnuel', $data) && null === $data['etA_TaxeSalairesSurSeuilsAnnuel']) {
            $object->setEtATaxeSalairesSurSeuilsAnnuel(null);
        }
        if (\array_key_exists('bETA_TitresTrs', $data) && null !== $data['bETA_TitresTrs']) {
            $object->setBETATitresTrs($data['bETA_TitresTrs']);
        } elseif (\array_key_exists('bETA_TitresTrs', $data) && null === $data['bETA_TitresTrs']) {
            $object->setBETATitresTrs(null);
        }
        if (\array_key_exists('etA_TitresTrs', $data) && null !== $data['etA_TitresTrs']) {
            $object->setEtATitresTrs($data['etA_TitresTrs']);
        } elseif (\array_key_exists('etA_TitresTrs', $data) && null === $data['etA_TitresTrs']) {
            $object->setEtATitresTrs(null);
        }
        if (\array_key_exists('bETA_TResto', $data) && null !== $data['bETA_TResto']) {
            $object->setBETATResto($data['bETA_TResto']);
        } elseif (\array_key_exists('bETA_TResto', $data) && null === $data['bETA_TResto']) {
            $object->setBETATResto(null);
        }
        if (\array_key_exists('etA_TResto', $data) && null !== $data['etA_TResto']) {
            $object->setEtATResto($data['etA_TResto']);
        } elseif (\array_key_exists('etA_TResto', $data) && null === $data['etA_TResto']) {
            $object->setEtATResto(null);
        }
        if (\array_key_exists('bETA_TRestoNomVariable', $data) && null !== $data['bETA_TRestoNomVariable']) {
            $object->setBETATRestoNomVariable($data['bETA_TRestoNomVariable']);
        } elseif (\array_key_exists('bETA_TRestoNomVariable', $data) && null === $data['bETA_TRestoNomVariable']) {
            $object->setBETATRestoNomVariable(null);
        }
        if (\array_key_exists('etA_TRestoNomVariable', $data) && null !== $data['etA_TRestoNomVariable']) {
            $object->setEtATRestoNomVariable($data['etA_TRestoNomVariable']);
        } elseif (\array_key_exists('etA_TRestoNomVariable', $data) && null === $data['etA_TRestoNomVariable']) {
            $object->setEtATRestoNomVariable(null);
        }
        if (\array_key_exists('bETA_TRestoPartSalariale', $data) && null !== $data['bETA_TRestoPartSalariale']) {
            $object->setBETATRestoPartSalariale($data['bETA_TRestoPartSalariale']);
        } elseif (\array_key_exists('bETA_TRestoPartSalariale', $data) && null === $data['bETA_TRestoPartSalariale']) {
            $object->setBETATRestoPartSalariale(null);
        }
        if (\array_key_exists('etA_TRestoPartSalariale', $data) && null !== $data['etA_TRestoPartSalariale']) {
            $object->setEtATRestoPartSalariale($data['etA_TRestoPartSalariale']);
        } elseif (\array_key_exists('etA_TRestoPartSalariale', $data) && null === $data['etA_TRestoPartSalariale']) {
            $object->setEtATRestoPartSalariale(null);
        }
        if (\array_key_exists('bETA_TypeAcquisitionDIF', $data) && null !== $data['bETA_TypeAcquisitionDIF']) {
            $object->setBETATypeAcquisitionDIF($data['bETA_TypeAcquisitionDIF']);
        } elseif (\array_key_exists('bETA_TypeAcquisitionDIF', $data) && null === $data['bETA_TypeAcquisitionDIF']) {
            $object->setBETATypeAcquisitionDIF(null);
        }
        if (\array_key_exists('etA_TypeAcquisitionDIF', $data) && null !== $data['etA_TypeAcquisitionDIF']) {
            $object->setEtATypeAcquisitionDIF($data['etA_TypeAcquisitionDIF']);
        } elseif (\array_key_exists('etA_TypeAcquisitionDIF', $data) && null === $data['etA_TypeAcquisitionDIF']) {
            $object->setEtATypeAcquisitionDIF(null);
        }
        if (\array_key_exists('bETA_VTACodeRegion', $data) && null !== $data['bETA_VTACodeRegion']) {
            $object->setBETAVTACodeRegion($data['bETA_VTACodeRegion']);
        } elseif (\array_key_exists('bETA_VTACodeRegion', $data) && null === $data['bETA_VTACodeRegion']) {
            $object->setBETAVTACodeRegion(null);
        }
        if (\array_key_exists('etA_VTACodeRegion', $data) && null !== $data['etA_VTACodeRegion']) {
            $object->setEtAVTACodeRegion($data['etA_VTACodeRegion']);
        } elseif (\array_key_exists('etA_VTACodeRegion', $data) && null === $data['etA_VTACodeRegion']) {
            $object->setEtAVTACodeRegion(null);
        }
        if (\array_key_exists('bETA_VTATaux', $data) && null !== $data['bETA_VTATaux']) {
            $object->setBETAVTATaux($data['bETA_VTATaux']);
        } elseif (\array_key_exists('bETA_VTATaux', $data) && null === $data['bETA_VTATaux']) {
            $object->setBETAVTATaux(null);
        }
        if (\array_key_exists('etA_VTATaux', $data) && null !== $data['etA_VTATaux']) {
            $object->setEtAVTATaux($data['etA_VTATaux']);
        } elseif (\array_key_exists('etA_VTATaux', $data) && null === $data['etA_VTATaux']) {
            $object->setEtAVTATaux(null);
        }
        if (\array_key_exists('bETA_VTrsAuto', $data) && null !== $data['bETA_VTrsAuto']) {
            $object->setBETAVTrsAuto($data['bETA_VTrsAuto']);
        } elseif (\array_key_exists('bETA_VTrsAuto', $data) && null === $data['bETA_VTrsAuto']) {
            $object->setBETAVTrsAuto(null);
        }
        if (\array_key_exists('etA_VTrsAuto', $data) && null !== $data['etA_VTrsAuto']) {
            $object->setEtAVTrsAuto($data['etA_VTrsAuto']);
        } elseif (\array_key_exists('etA_VTrsAuto', $data) && null === $data['etA_VTrsAuto']) {
            $object->setEtAVTrsAuto(null);
        }
        if (\array_key_exists('bINT_BTQC', $data) && null !== $data['bINT_BTQC']) {
            $object->setBINTBTQC($data['bINT_BTQC']);
        } elseif (\array_key_exists('bINT_BTQC', $data) && null === $data['bINT_BTQC']) {
            $object->setBINTBTQC(null);
        }
        if (\array_key_exists('inT_BTQC', $data) && null !== $data['inT_BTQC']) {
            $object->setInTBTQC($data['inT_BTQC']);
        } elseif (\array_key_exists('inT_BTQC', $data) && null === $data['inT_BTQC']) {
            $object->setInTBTQC(null);
        }
        if (\array_key_exists('bINT_Civilite', $data) && null !== $data['bINT_Civilite']) {
            $object->setBINTCivilite($data['bINT_Civilite']);
        } elseif (\array_key_exists('bINT_Civilite', $data) && null === $data['bINT_Civilite']) {
            $object->setBINTCivilite(null);
        }
        if (\array_key_exists('inT_Civilite', $data) && null !== $data['inT_Civilite']) {
            $object->setInTCivilite($data['inT_Civilite']);
        } elseif (\array_key_exists('inT_Civilite', $data) && null === $data['inT_Civilite']) {
            $object->setInTCivilite(null);
        }
        if (\array_key_exists('bINT_CodePostal', $data) && null !== $data['bINT_CodePostal']) {
            $object->setBINTCodePostal($data['bINT_CodePostal']);
        } elseif (\array_key_exists('bINT_CodePostal', $data) && null === $data['bINT_CodePostal']) {
            $object->setBINTCodePostal(null);
        }
        if (\array_key_exists('inT_CodePostal', $data) && null !== $data['inT_CodePostal']) {
            $object->setInTCodePostal($data['inT_CodePostal']);
        } elseif (\array_key_exists('inT_CodePostal', $data) && null === $data['inT_CodePostal']) {
            $object->setInTCodePostal(null);
        }
        if (\array_key_exists('bINT_CodePostalJF', $data) && null !== $data['bINT_CodePostalJF']) {
            $object->setBINTCodePostalJF($data['bINT_CodePostalJF']);
        } elseif (\array_key_exists('bINT_CodePostalJF', $data) && null === $data['bINT_CodePostalJF']) {
            $object->setBINTCodePostalJF(null);
        }
        if (\array_key_exists('inT_CodePostalJF', $data) && null !== $data['inT_CodePostalJF']) {
            $object->setInTCodePostalJF($data['inT_CodePostalJF']);
        } elseif (\array_key_exists('inT_CodePostalJF', $data) && null === $data['inT_CodePostalJF']) {
            $object->setInTCodePostalJF(null);
        }
        if (\array_key_exists('bINT_Commune', $data) && null !== $data['bINT_Commune']) {
            $object->setBINTCommune($data['bINT_Commune']);
        } elseif (\array_key_exists('bINT_Commune', $data) && null === $data['bINT_Commune']) {
            $object->setBINTCommune(null);
        }
        if (\array_key_exists('inT_Commune', $data) && null !== $data['inT_Commune']) {
            $object->setInTCommune($data['inT_Commune']);
        } elseif (\array_key_exists('inT_Commune', $data) && null === $data['inT_Commune']) {
            $object->setInTCommune(null);
        }
        if (\array_key_exists('bINT_CommuneINSEE', $data) && null !== $data['bINT_CommuneINSEE']) {
            $object->setBINTCommuneINSEE($data['bINT_CommuneINSEE']);
        } elseif (\array_key_exists('bINT_CommuneINSEE', $data) && null === $data['bINT_CommuneINSEE']) {
            $object->setBINTCommuneINSEE(null);
        }
        if (\array_key_exists('inT_CommuneINSEE', $data) && null !== $data['inT_CommuneINSEE']) {
            $object->setInTCommuneINSEE($data['inT_CommuneINSEE']);
        } elseif (\array_key_exists('inT_CommuneINSEE', $data) && null === $data['inT_CommuneINSEE']) {
            $object->setInTCommuneINSEE(null);
        }
        if (\array_key_exists('bINT_ComplementAdresse', $data) && null !== $data['bINT_ComplementAdresse']) {
            $object->setBINTComplementAdresse($data['bINT_ComplementAdresse']);
        } elseif (\array_key_exists('bINT_ComplementAdresse', $data) && null === $data['bINT_ComplementAdresse']) {
            $object->setBINTComplementAdresse(null);
        }
        if (\array_key_exists('inT_ComplementAdresse', $data) && null !== $data['inT_ComplementAdresse']) {
            $object->setInTComplementAdresse($data['inT_ComplementAdresse']);
        } elseif (\array_key_exists('inT_ComplementAdresse', $data) && null === $data['inT_ComplementAdresse']) {
            $object->setInTComplementAdresse(null);
        }
        if (\array_key_exists('bINT_DateDeces', $data) && null !== $data['bINT_DateDeces']) {
            $object->setBINTDateDeces($data['bINT_DateDeces']);
        } elseif (\array_key_exists('bINT_DateDeces', $data) && null === $data['bINT_DateDeces']) {
            $object->setBINTDateDeces(null);
        }
        if (\array_key_exists('inT_DateDeces', $data) && null !== $data['inT_DateDeces']) {
            $object->setInTDateDeces(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['inT_DateDeces']));
        } elseif (\array_key_exists('inT_DateDeces', $data) && null === $data['inT_DateDeces']) {
            $object->setInTDateDeces(null);
        }
        if (\array_key_exists('bINT_DateNaissance', $data) && null !== $data['bINT_DateNaissance']) {
            $object->setBINTDateNaissance($data['bINT_DateNaissance']);
        } elseif (\array_key_exists('bINT_DateNaissance', $data) && null === $data['bINT_DateNaissance']) {
            $object->setBINTDateNaissance(null);
        }
        if (\array_key_exists('inT_DateNaissance', $data) && null !== $data['inT_DateNaissance']) {
            $object->setInTDateNaissance(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['inT_DateNaissance']));
        } elseif (\array_key_exists('inT_DateNaissance', $data) && null === $data['inT_DateNaissance']) {
            $object->setInTDateNaissance(null);
        }
        if (\array_key_exists('bINT_Enseigne', $data) && null !== $data['bINT_Enseigne']) {
            $object->setBINTEnseigne($data['bINT_Enseigne']);
        } elseif (\array_key_exists('bINT_Enseigne', $data) && null === $data['bINT_Enseigne']) {
            $object->setBINTEnseigne(null);
        }
        if (\array_key_exists('inT_Enseigne', $data) && null !== $data['inT_Enseigne']) {
            $object->setInTEnseigne($data['inT_Enseigne']);
        } elseif (\array_key_exists('inT_Enseigne', $data) && null === $data['inT_Enseigne']) {
            $object->setInTEnseigne(null);
        }
        if (\array_key_exists('bINT_Fax', $data) && null !== $data['bINT_Fax']) {
            $object->setBINTFax($data['bINT_Fax']);
        } elseif (\array_key_exists('bINT_Fax', $data) && null === $data['bINT_Fax']) {
            $object->setBINTFax(null);
        }
        if (\array_key_exists('inT_Fax', $data) && null !== $data['inT_Fax']) {
            $object->setInTFax($data['inT_Fax']);
        } elseif (\array_key_exists('inT_Fax', $data) && null === $data['inT_Fax']) {
            $object->setInTFax(null);
        }
        if (\array_key_exists('bINT_FormeJuridique', $data) && null !== $data['bINT_FormeJuridique']) {
            $object->setBINTFormeJuridique($data['bINT_FormeJuridique']);
        } elseif (\array_key_exists('bINT_FormeJuridique', $data) && null === $data['bINT_FormeJuridique']) {
            $object->setBINTFormeJuridique(null);
        }
        if (\array_key_exists('inT_FormeJuridique', $data) && null !== $data['inT_FormeJuridique']) {
            $object->setInTFormeJuridique($data['inT_FormeJuridique']);
        } elseif (\array_key_exists('inT_FormeJuridique', $data) && null === $data['inT_FormeJuridique']) {
            $object->setInTFormeJuridique(null);
        }
        if (\array_key_exists('bINT_Mel', $data) && null !== $data['bINT_Mel']) {
            $object->setBINTMel($data['bINT_Mel']);
        } elseif (\array_key_exists('bINT_Mel', $data) && null === $data['bINT_Mel']) {
            $object->setBINTMel(null);
        }
        if (\array_key_exists('inT_Mel', $data) && null !== $data['inT_Mel']) {
            $object->setInTMel($data['inT_Mel']);
        } elseif (\array_key_exists('inT_Mel', $data) && null === $data['inT_Mel']) {
            $object->setInTMel(null);
        }
        if (\array_key_exists('bINT_NAF', $data) && null !== $data['bINT_NAF']) {
            $object->setBINTNAF($data['bINT_NAF']);
        } elseif (\array_key_exists('bINT_NAF', $data) && null === $data['bINT_NAF']) {
            $object->setBINTNAF(null);
        }
        if (\array_key_exists('inT_NAF', $data) && null !== $data['inT_NAF']) {
            $object->setInTNAF($data['inT_NAF']);
        } elseif (\array_key_exists('inT_NAF', $data) && null === $data['inT_NAF']) {
            $object->setInTNAF(null);
        }
        if (\array_key_exists('bINT_NomPays', $data) && null !== $data['bINT_NomPays']) {
            $object->setBINTNomPays($data['bINT_NomPays']);
        } elseif (\array_key_exists('bINT_NomPays', $data) && null === $data['bINT_NomPays']) {
            $object->setBINTNomPays(null);
        }
        if (\array_key_exists('inT_NomPays', $data) && null !== $data['inT_NomPays']) {
            $object->setInTNomPays($data['inT_NomPays']);
        } elseif (\array_key_exists('inT_NomPays', $data) && null === $data['inT_NomPays']) {
            $object->setInTNomPays(null);
        }
        if (\array_key_exists('bINT_NomUsuel', $data) && null !== $data['bINT_NomUsuel']) {
            $object->setBINTNomUsuel($data['bINT_NomUsuel']);
        } elseif (\array_key_exists('bINT_NomUsuel', $data) && null === $data['bINT_NomUsuel']) {
            $object->setBINTNomUsuel(null);
        }
        if (\array_key_exists('inT_NomUsuel', $data) && null !== $data['inT_NomUsuel']) {
            $object->setInTNomUsuel($data['inT_NomUsuel']);
        } elseif (\array_key_exists('inT_NomUsuel', $data) && null === $data['inT_NomUsuel']) {
            $object->setInTNomUsuel(null);
        }
        if (\array_key_exists('bINT_NomVille', $data) && null !== $data['bINT_NomVille']) {
            $object->setBINTNomVille($data['bINT_NomVille']);
        } elseif (\array_key_exists('bINT_NomVille', $data) && null === $data['bINT_NomVille']) {
            $object->setBINTNomVille(null);
        }
        if (\array_key_exists('inT_NomVille', $data) && null !== $data['inT_NomVille']) {
            $object->setInTNomVille($data['inT_NomVille']);
        } elseif (\array_key_exists('inT_NomVille', $data) && null === $data['inT_NomVille']) {
            $object->setInTNomVille(null);
        }
        if (\array_key_exists('bINT_NomVoie', $data) && null !== $data['bINT_NomVoie']) {
            $object->setBINTNomVoie($data['bINT_NomVoie']);
        } elseif (\array_key_exists('bINT_NomVoie', $data) && null === $data['bINT_NomVoie']) {
            $object->setBINTNomVoie(null);
        }
        if (\array_key_exists('inT_NomVoie', $data) && null !== $data['inT_NomVoie']) {
            $object->setInTNomVoie($data['inT_NomVoie']);
        } elseif (\array_key_exists('inT_NomVoie', $data) && null === $data['inT_NomVoie']) {
            $object->setInTNomVoie(null);
        }
        if (\array_key_exists('bINT_NumVoie', $data) && null !== $data['bINT_NumVoie']) {
            $object->setBINTNumVoie($data['bINT_NumVoie']);
        } elseif (\array_key_exists('bINT_NumVoie', $data) && null === $data['bINT_NumVoie']) {
            $object->setBINTNumVoie(null);
        }
        if (\array_key_exists('inT_NumVoie', $data) && null !== $data['inT_NumVoie']) {
            $object->setInTNumVoie($data['inT_NumVoie']);
        } elseif (\array_key_exists('inT_NumVoie', $data) && null === $data['inT_NumVoie']) {
            $object->setInTNumVoie(null);
        }
        if (\array_key_exists('bINT_PaysISO', $data) && null !== $data['bINT_PaysISO']) {
            $object->setBINTPaysISO($data['bINT_PaysISO']);
        } elseif (\array_key_exists('bINT_PaysISO', $data) && null === $data['bINT_PaysISO']) {
            $object->setBINTPaysISO(null);
        }
        if (\array_key_exists('inT_PaysISO', $data) && null !== $data['inT_PaysISO']) {
            $object->setInTPaysISO($data['inT_PaysISO']);
        } elseif (\array_key_exists('inT_PaysISO', $data) && null === $data['inT_PaysISO']) {
            $object->setInTPaysISO(null);
        }
        if (\array_key_exists('bINT_PaysISOJF', $data) && null !== $data['bINT_PaysISOJF']) {
            $object->setBINTPaysISOJF($data['bINT_PaysISOJF']);
        } elseif (\array_key_exists('bINT_PaysISOJF', $data) && null === $data['bINT_PaysISOJF']) {
            $object->setBINTPaysISOJF(null);
        }
        if (\array_key_exists('inT_PaysISOJF', $data) && null !== $data['inT_PaysISOJF']) {
            $object->setInTPaysISOJF($data['inT_PaysISOJF']);
        } elseif (\array_key_exists('inT_PaysISOJF', $data) && null === $data['inT_PaysISOJF']) {
            $object->setInTPaysISOJF(null);
        }
        if (\array_key_exists('bINT_Prenom', $data) && null !== $data['bINT_Prenom']) {
            $object->setBINTPrenom($data['bINT_Prenom']);
        } elseif (\array_key_exists('bINT_Prenom', $data) && null === $data['bINT_Prenom']) {
            $object->setBINTPrenom(null);
        }
        if (\array_key_exists('inT_Prenom', $data) && null !== $data['inT_Prenom']) {
            $object->setInTPrenom($data['inT_Prenom']);
        } elseif (\array_key_exists('inT_Prenom', $data) && null === $data['inT_Prenom']) {
            $object->setInTPrenom(null);
        }
        if (\array_key_exists('bINT_RaisonSociale', $data) && null !== $data['bINT_RaisonSociale']) {
            $object->setBINTRaisonSociale($data['bINT_RaisonSociale']);
        } elseif (\array_key_exists('bINT_RaisonSociale', $data) && null === $data['bINT_RaisonSociale']) {
            $object->setBINTRaisonSociale(null);
        }
        if (\array_key_exists('inT_RaisonSociale', $data) && null !== $data['inT_RaisonSociale']) {
            $object->setInTRaisonSociale($data['inT_RaisonSociale']);
        } elseif (\array_key_exists('inT_RaisonSociale', $data) && null === $data['inT_RaisonSociale']) {
            $object->setInTRaisonSociale(null);
        }
        if (\array_key_exists('bINT_Siret', $data) && null !== $data['bINT_Siret']) {
            $object->setBINTSiret($data['bINT_Siret']);
        } elseif (\array_key_exists('bINT_Siret', $data) && null === $data['bINT_Siret']) {
            $object->setBINTSiret(null);
        }
        if (\array_key_exists('inT_Siret', $data) && null !== $data['inT_Siret']) {
            $object->setInTSiret($data['inT_Siret']);
        } elseif (\array_key_exists('inT_Siret', $data) && null === $data['inT_Siret']) {
            $object->setInTSiret(null);
        }
        if (\array_key_exists('bINT_SiteWeb', $data) && null !== $data['bINT_SiteWeb']) {
            $object->setBINTSiteWeb($data['bINT_SiteWeb']);
        } elseif (\array_key_exists('bINT_SiteWeb', $data) && null === $data['bINT_SiteWeb']) {
            $object->setBINTSiteWeb(null);
        }
        if (\array_key_exists('inT_SiteWeb', $data) && null !== $data['inT_SiteWeb']) {
            $object->setInTSiteWeb($data['inT_SiteWeb']);
        } elseif (\array_key_exists('inT_SiteWeb', $data) && null === $data['inT_SiteWeb']) {
            $object->setInTSiteWeb(null);
        }
        if (\array_key_exists('bINT_TelBureau', $data) && null !== $data['bINT_TelBureau']) {
            $object->setBINTTelBureau($data['bINT_TelBureau']);
        } elseif (\array_key_exists('bINT_TelBureau', $data) && null === $data['bINT_TelBureau']) {
            $object->setBINTTelBureau(null);
        }
        if (\array_key_exists('inT_TelBureau', $data) && null !== $data['inT_TelBureau']) {
            $object->setInTTelBureau($data['inT_TelBureau']);
        } elseif (\array_key_exists('inT_TelBureau', $data) && null === $data['inT_TelBureau']) {
            $object->setInTTelBureau(null);
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
        if ($object->isInitialized('bETAAcquisitionHeuresDIF') && null !== $object->getBETAAcquisitionHeuresDIF()) {
            $data['bETA_AcquisitionHeuresDIF'] = $object->getBETAAcquisitionHeuresDIF();
        }
        if ($object->isInitialized('etAAcquisitionHeuresDIF') && null !== $object->getEtAAcquisitionHeuresDIF()) {
            $data['etA_AcquisitionHeuresDIF'] = $object->getEtAAcquisitionHeuresDIF();
        }
        if ($object->isInitialized('bETAAssimiliesCadresPrevoyanceNonCadre') && null !== $object->getBETAAssimiliesCadresPrevoyanceNonCadre()) {
            $data['bETA_AssimiliesCadresPrevoyanceNonCadre'] = $object->getBETAAssimiliesCadresPrevoyanceNonCadre();
        }
        if ($object->isInitialized('etAAssimiliesCadresPrevoyanceNonCadre') && null !== $object->getEtAAssimiliesCadresPrevoyanceNonCadre()) {
            $data['etA_AssimiliesCadresPrevoyanceNonCadre'] = $object->getEtAAssimiliesCadresPrevoyanceNonCadre();
        }
        if ($object->isInitialized('bETABulletinEditionDIF') && null !== $object->getBETABulletinEditionDIF()) {
            $data['bETA_BulletinEditionDIF'] = $object->getBETABulletinEditionDIF();
        }
        if ($object->isInitialized('etABulletinEditionDIF') && null !== $object->getEtABulletinEditionDIF()) {
            $data['etA_BulletinEditionDIF'] = $object->getEtABulletinEditionDIF();
        }
        if ($object->isInitialized('bETACalcAutoIJSSInactif') && null !== $object->getBETACalcAutoIJSSInactif()) {
            $data['bETA_CalcAutoIJSSInactif'] = $object->getBETACalcAutoIJSSInactif();
        }
        if ($object->isInitialized('etACalcAutoIJSSInactif') && null !== $object->getEtACalcAutoIJSSInactif()) {
            $data['etA_CalcAutoIJSSInactif'] = $object->getEtACalcAutoIJSSInactif();
        }
        if ($object->isInitialized('bETACalcAutoMaintienInactif') && null !== $object->getBETACalcAutoMaintienInactif()) {
            $data['bETA_CalcAutoMaintienInactif'] = $object->getBETACalcAutoMaintienInactif();
        }
        if ($object->isInitialized('etACalcAutoMaintienInactif') && null !== $object->getEtACalcAutoMaintienInactif()) {
            $data['etA_CalcAutoMaintienInactif'] = $object->getEtACalcAutoMaintienInactif();
        }
        if ($object->isInitialized('bETACDDPaiMensIndCP') && null !== $object->getBETACDDPaiMensIndCP()) {
            $data['bETA_CDDPaiMensIndCP'] = $object->getBETACDDPaiMensIndCP();
        }
        if ($object->isInitialized('etACDDPaiMensIndCP') && null !== $object->getEtACDDPaiMensIndCP()) {
            $data['etA_CDDPaiMensIndCP'] = $object->getEtACDDPaiMensIndCP();
        }
        if ($object->isInitialized('bETACDDPaiMensIndPrecarite') && null !== $object->getBETACDDPaiMensIndPrecarite()) {
            $data['bETA_CDDPaiMensIndPrecarite'] = $object->getBETACDDPaiMensIndPrecarite();
        }
        if ($object->isInitialized('etACDDPaiMensIndPrecarite') && null !== $object->getEtACDDPaiMensIndPrecarite()) {
            $data['etA_CDDPaiMensIndPrecarite'] = $object->getEtACDDPaiMensIndPrecarite();
        }
        if ($object->isInitialized('bETAChaineFabricationDateLimiteAbsences') && null !== $object->getBETAChaineFabricationDateLimiteAbsences()) {
            $data['bETA_ChaineFabricationDateLimiteAbsences'] = $object->getBETAChaineFabricationDateLimiteAbsences();
        }
        if ($object->isInitialized('etAChaineFabricationDateLimiteAbsences') && null !== $object->getEtAChaineFabricationDateLimiteAbsences()) {
            $data['etA_ChaineFabricationDateLimiteAbsences'] = $object->getEtAChaineFabricationDateLimiteAbsences();
        }
        if ($object->isInitialized('bETAClotureCPArrondiInactif') && null !== $object->getBETAClotureCPArrondiInactif()) {
            $data['bETA_ClotureCPArrondiInactif'] = $object->getBETAClotureCPArrondiInactif();
        }
        if ($object->isInitialized('etAClotureCPArrondiInactif') && null !== $object->getEtAClotureCPArrondiInactif()) {
            $data['etA_ClotureCPArrondiInactif'] = $object->getEtAClotureCPArrondiInactif();
        }
        if ($object->isInitialized('bETAClotureCPReport') && null !== $object->getBETAClotureCPReport()) {
            $data['bETA_ClotureCPReport'] = $object->getBETAClotureCPReport();
        }
        if ($object->isInitialized('etAClotureCPReport') && null !== $object->getEtAClotureCPReport()) {
            $data['etA_ClotureCPReport'] = $object->getEtAClotureCPReport();
        }
        if ($object->isInitialized('bETAClotureRTTReport') && null !== $object->getBETAClotureRTTReport()) {
            $data['bETA_ClotureRTTReport'] = $object->getBETAClotureRTTReport();
        }
        if ($object->isInitialized('etAClotureRTTReport') && null !== $object->getEtAClotureRTTReport()) {
            $data['etA_ClotureRTTReport'] = $object->getEtAClotureRTTReport();
        }
        if ($object->isInitialized('bETACodeBTAPEMSA') && null !== $object->getBETACodeBTAPEMSA()) {
            $data['bETA_CodeBTAPEMSA'] = $object->getBETACodeBTAPEMSA();
        }
        if ($object->isInitialized('etACodeBTAPEMSA') && null !== $object->getEtACodeBTAPEMSA()) {
            $data['etA_CodeBTAPEMSA'] = $object->getEtACodeBTAPEMSA();
        }
        if ($object->isInitialized('bETACodeRegion') && null !== $object->getBETACodeRegion()) {
            $data['bETA_CodeRegion'] = $object->getBETACodeRegion();
        }
        if ($object->isInitialized('etACodeRegion') && null !== $object->getEtACodeRegion()) {
            $data['etA_CodeRegion'] = $object->getEtACodeRegion();
        }
        if ($object->isInitialized('bETADadsInactive') && null !== $object->getBETADadsInactive()) {
            $data['bETA_DadsInactive'] = $object->getBETADadsInactive();
        }
        if ($object->isInitialized('etADadsInactive') && null !== $object->getEtADadsInactive()) {
            $data['etA_DadsInactive'] = $object->getEtADadsInactive();
        }
        if ($object->isInitialized('bETADecalageActiviteJournaliere') && null !== $object->getBETADecalageActiviteJournaliere()) {
            $data['bETA_DecalageActiviteJournaliere'] = $object->getBETADecalageActiviteJournaliere();
        }
        if ($object->isInitialized('etADecalageActiviteJournaliere') && null !== $object->getEtADecalageActiviteJournaliere()) {
            $data['etA_DecalageActiviteJournaliere'] = $object->getEtADecalageActiviteJournaliere();
        }
        if ($object->isInitialized('bETADecoupageActiviteJournaliere') && null !== $object->getBETADecoupageActiviteJournaliere()) {
            $data['bETA_DecoupageActiviteJournaliere'] = $object->getBETADecoupageActiviteJournaliere();
        }
        if ($object->isInitialized('etADecoupageActiviteJournaliere') && null !== $object->getEtADecoupageActiviteJournaliere()) {
            $data['etA_DecoupageActiviteJournaliere'] = $object->getEtADecoupageActiviteJournaliere();
        }
        if ($object->isInitialized('bETADureeHebdo') && null !== $object->getBETADureeHebdo()) {
            $data['bETA_DureeHebdo'] = $object->getBETADureeHebdo();
        }
        if ($object->isInitialized('etADureeHebdo') && null !== $object->getEtADureeHebdo()) {
            $data['etA_DureeHebdo'] = $object->getEtADureeHebdo();
        }
        if ($object->isInitialized('bETAEmployeurCivilite') && null !== $object->getBETAEmployeurCivilite()) {
            $data['bETA_EmployeurCivilite'] = $object->getBETAEmployeurCivilite();
        }
        if ($object->isInitialized('etAEmployeurCivilite') && null !== $object->getEtAEmployeurCivilite()) {
            $data['etA_EmployeurCivilite'] = $object->getEtAEmployeurCivilite();
        }
        if ($object->isInitialized('bETAEmployeurNom') && null !== $object->getBETAEmployeurNom()) {
            $data['bETA_EmployeurNom'] = $object->getBETAEmployeurNom();
        }
        if ($object->isInitialized('etAEmployeurNom') && null !== $object->getEtAEmployeurNom()) {
            $data['etA_EmployeurNom'] = $object->getEtAEmployeurNom();
        }
        if ($object->isInitialized('bETAEmployeurPrenom') && null !== $object->getBETAEmployeurPrenom()) {
            $data['bETA_EmployeurPrenom'] = $object->getBETAEmployeurPrenom();
        }
        if ($object->isInitialized('etAEmployeurPrenom') && null !== $object->getEtAEmployeurPrenom()) {
            $data['etA_EmployeurPrenom'] = $object->getEtAEmployeurPrenom();
        }
        if ($object->isInitialized('bETAEmployeurQualite') && null !== $object->getBETAEmployeurQualite()) {
            $data['bETA_EmployeurQualite'] = $object->getBETAEmployeurQualite();
        }
        if ($object->isInitialized('etAEmployeurQualite') && null !== $object->getEtAEmployeurQualite()) {
            $data['etA_EmployeurQualite'] = $object->getEtAEmployeurQualite();
        }
        if ($object->isInitialized('bETAEmployeurQualiteAutre') && null !== $object->getBETAEmployeurQualiteAutre()) {
            $data['bETA_EmployeurQualiteAutre'] = $object->getBETAEmployeurQualiteAutre();
        }
        if ($object->isInitialized('etAEmployeurQualiteAutre') && null !== $object->getEtAEmployeurQualiteAutre()) {
            $data['etA_EmployeurQualiteAutre'] = $object->getEtAEmployeurQualiteAutre();
        }
        if ($object->isInitialized('bETAExoJEIDateDebut') && null !== $object->getBETAExoJEIDateDebut()) {
            $data['bETA_ExoJEIDateDebut'] = $object->getBETAExoJEIDateDebut();
        }
        if ($object->isInitialized('etAExoJEIDateDebut') && null !== $object->getEtAExoJEIDateDebut()) {
            $data['etA_ExoJEIDateDebut'] = $object->getEtAExoJEIDateDebut()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bETAForceDroitCICE') && null !== $object->getBETAForceDroitCICE()) {
            $data['bETA_ForceDroitCICE'] = $object->getBETAForceDroitCICE();
        }
        if ($object->isInitialized('etAForceDroitCICE') && null !== $object->getEtAForceDroitCICE()) {
            $data['etA_ForceDroitCICE'] = $object->getEtAForceDroitCICE();
        }
        if ($object->isInitialized('bETAFractionnementCP') && null !== $object->getBETAFractionnementCP()) {
            $data['bETA_FractionnementCP'] = $object->getBETAFractionnementCP();
        }
        if ($object->isInitialized('etAFractionnementCP') && null !== $object->getEtAFractionnementCP()) {
            $data['etA_FractionnementCP'] = $object->getEtAFractionnementCP();
        }
        if ($object->isInitialized('bETAFractionnementCPMoisCalcSpe') && null !== $object->getBETAFractionnementCPMoisCalcSpe()) {
            $data['bETA_FractionnementCPMoisCalcSpe'] = $object->getBETAFractionnementCPMoisCalcSpe();
        }
        if ($object->isInitialized('etAFractionnementCPMoisCalcSpe') && null !== $object->getEtAFractionnementCPMoisCalcSpe()) {
            $data['etA_FractionnementCPMoisCalcSpe'] = $object->getEtAFractionnementCPMoisCalcSpe();
        }
        if ($object->isInitialized('bETAFractionnementCPMoisDebut') && null !== $object->getBETAFractionnementCPMoisDebut()) {
            $data['bETA_FractionnementCPMoisDebut'] = $object->getBETAFractionnementCPMoisDebut();
        }
        if ($object->isInitialized('etAFractionnementCPMoisDebut') && null !== $object->getEtAFractionnementCPMoisDebut()) {
            $data['etA_FractionnementCPMoisDebut'] = $object->getEtAFractionnementCPMoisDebut();
        }
        if ($object->isInitialized('bETAFractionnementCPMoisFin') && null !== $object->getBETAFractionnementCPMoisFin()) {
            $data['bETA_FractionnementCPMoisFin'] = $object->getBETAFractionnementCPMoisFin();
        }
        if ($object->isInitialized('etAFractionnementCPMoisFin') && null !== $object->getEtAFractionnementCPMoisFin()) {
            $data['etA_FractionnementCPMoisFin'] = $object->getEtAFractionnementCPMoisFin();
        }
        if ($object->isInitialized('bETAFSConserverCondAnc') && null !== $object->getBETAFSConserverCondAnc()) {
            $data['bETA_FSConserverCondAnc'] = $object->getBETAFSConserverCondAnc();
        }
        if ($object->isInitialized('etAFSConserverCondAnc') && null !== $object->getEtAFSConserverCondAnc()) {
            $data['etA_FSConserverCondAnc'] = $object->getEtAFSConserverCondAnc();
        }
        if ($object->isInitialized('bETAFSMethode') && null !== $object->getBETAFSMethode()) {
            $data['bETA_FSMethode'] = $object->getBETAFSMethode();
        }
        if ($object->isInitialized('etAFSMethode') && null !== $object->getEtAFSMethode()) {
            $data['etA_FSMethode'] = $object->getEtAFSMethode();
        }
        if ($object->isInitialized('bETAGestionCPExclEnJours') && null !== $object->getBETAGestionCPExclEnJours()) {
            $data['bETA_GestionCPExclEnJours'] = $object->getBETAGestionCPExclEnJours();
        }
        if ($object->isInitialized('etAGestionCPExclEnJours') && null !== $object->getEtAGestionCPExclEnJours()) {
            $data['etA_GestionCPExclEnJours'] = $object->getEtAGestionCPExclEnJours();
        }
        if ($object->isInitialized('bETAJourDebSemActiviteJournaliere') && null !== $object->getBETAJourDebSemActiviteJournaliere()) {
            $data['bETA_JourDebSemActiviteJournaliere'] = $object->getBETAJourDebSemActiviteJournaliere();
        }
        if ($object->isInitialized('etAJourDebSemActiviteJournaliere') && null !== $object->getEtAJourDebSemActiviteJournaliere()) {
            $data['etA_JourDebSemActiviteJournaliere'] = $object->getEtAJourDebSemActiviteJournaliere();
        }
        if ($object->isInitialized('bETAJourneeSolidarite') && null !== $object->getBETAJourneeSolidarite()) {
            $data['bETA_JourneeSolidarite'] = $object->getBETAJourneeSolidarite();
        }
        if ($object->isInitialized('etAJourneeSolidarite') && null !== $object->getEtAJourneeSolidarite()) {
            $data['etA_JourneeSolidarite'] = $object->getEtAJourneeSolidarite();
        }
        if ($object->isInitialized('bETAJoursFeriesTravailles') && null !== $object->getBETAJoursFeriesTravailles()) {
            $data['bETA_JoursFeriesTravailles'] = $object->getBETAJoursFeriesTravailles();
        }
        if ($object->isInitialized('etAJoursFeriesTravailles') && null !== $object->getEtAJoursFeriesTravailles()) {
            $data['etA_JoursFeriesTravailles'] = $object->getEtAJoursFeriesTravailles();
        }
        if ($object->isInitialized('bETAMethodeArbitrage') && null !== $object->getBETAMethodeArbitrage()) {
            $data['bETA_MethodeArbitrage'] = $object->getBETAMethodeArbitrage();
        }
        if ($object->isInitialized('etAMethodeArbitrage') && null !== $object->getEtAMethodeArbitrage()) {
            $data['etA_MethodeArbitrage'] = $object->getEtAMethodeArbitrage();
        }
        if ($object->isInitialized('bETAMethodeCalculMaintien') && null !== $object->getBETAMethodeCalculMaintien()) {
            $data['bETA_MethodeCalculMaintien'] = $object->getBETAMethodeCalculMaintien();
        }
        if ($object->isInitialized('etAMethodeCalculMaintien') && null !== $object->getEtAMethodeCalculMaintien()) {
            $data['etA_MethodeCalculMaintien'] = $object->getEtAMethodeCalculMaintien();
        }
        if ($object->isInitialized('bETAMethodeCalculMaintienNbM') && null !== $object->getBETAMethodeCalculMaintienNbM()) {
            $data['bETA_MethodeCalculMaintienNbM'] = $object->getBETAMethodeCalculMaintienNbM();
        }
        if ($object->isInitialized('etAMethodeCalculMaintienNbM') && null !== $object->getEtAMethodeCalculMaintienNbM()) {
            $data['etA_MethodeCalculMaintienNbM'] = $object->getEtAMethodeCalculMaintienNbM();
        }
        if ($object->isInitialized('bETAMethodeRetenueCP') && null !== $object->getBETAMethodeRetenueCP()) {
            $data['bETA_MethodeRetenueCP'] = $object->getBETAMethodeRetenueCP();
        }
        if ($object->isInitialized('etAMethodeRetenueCP') && null !== $object->getEtAMethodeRetenueCP()) {
            $data['etA_MethodeRetenueCP'] = $object->getEtAMethodeRetenueCP();
        }
        if ($object->isInitialized('bETAMethodeSuiviAbsences') && null !== $object->getBETAMethodeSuiviAbsences()) {
            $data['bETA_MethodeSuiviAbsences'] = $object->getBETAMethodeSuiviAbsences();
        }
        if ($object->isInitialized('etAMethodeSuiviAbsences') && null !== $object->getEtAMethodeSuiviAbsences()) {
            $data['etA_MethodeSuiviAbsences'] = $object->getEtAMethodeSuiviAbsences();
        }
        if ($object->isInitialized('bETAMethodeSuiviAbsencesDeductionHM') && null !== $object->getBETAMethodeSuiviAbsencesDeductionHM()) {
            $data['bETA_MethodeSuiviAbsencesDeductionHM'] = $object->getBETAMethodeSuiviAbsencesDeductionHM();
        }
        if ($object->isInitialized('etAMethodeSuiviAbsencesDeductionHM') && null !== $object->getEtAMethodeSuiviAbsencesDeductionHM()) {
            $data['etA_MethodeSuiviAbsencesDeductionHM'] = $object->getEtAMethodeSuiviAbsencesDeductionHM();
        }
        if ($object->isInitialized('bETAMethodeSuiviAbsencesJC') && null !== $object->getBETAMethodeSuiviAbsencesJC()) {
            $data['bETA_MethodeSuiviAbsencesJC'] = $object->getBETAMethodeSuiviAbsencesJC();
        }
        if ($object->isInitialized('etAMethodeSuiviAbsencesJC') && null !== $object->getEtAMethodeSuiviAbsencesJC()) {
            $data['etA_MethodeSuiviAbsencesJC'] = $object->getEtAMethodeSuiviAbsencesJC();
        }
        if ($object->isInitialized('bETAMethodeSuiviCP') && null !== $object->getBETAMethodeSuiviCP()) {
            $data['bETA_MethodeSuiviCP'] = $object->getBETAMethodeSuiviCP();
        }
        if ($object->isInitialized('etAMethodeSuiviCP') && null !== $object->getEtAMethodeSuiviCP()) {
            $data['etA_MethodeSuiviCP'] = $object->getEtAMethodeSuiviCP();
        }
        if ($object->isInitialized('bETAMethodeSuiviCPAcqMois') && null !== $object->getBETAMethodeSuiviCPAcqMois()) {
            $data['bETA_MethodeSuiviCPAcqMois'] = $object->getBETAMethodeSuiviCPAcqMois();
        }
        if ($object->isInitialized('etAMethodeSuiviCPAcqMois') && null !== $object->getEtAMethodeSuiviCPAcqMois()) {
            $data['etA_MethodeSuiviCPAcqMois'] = $object->getEtAMethodeSuiviCPAcqMois();
        }
        if ($object->isInitialized('bETAModeSaisieActiviteJournaliere') && null !== $object->getBETAModeSaisieActiviteJournaliere()) {
            $data['bETA_ModeSaisieActiviteJournaliere'] = $object->getBETAModeSaisieActiviteJournaliere();
        }
        if ($object->isInitialized('etAModeSaisieActiviteJournaliere') && null !== $object->getEtAModeSaisieActiviteJournaliere()) {
            $data['etA_ModeSaisieActiviteJournaliere'] = $object->getEtAModeSaisieActiviteJournaliere();
        }
        if ($object->isInitialized('bETAMoisAcquisitionDIF') && null !== $object->getBETAMoisAcquisitionDIF()) {
            $data['bETA_MoisAcquisitionDIF'] = $object->getBETAMoisAcquisitionDIF();
        }
        if ($object->isInitialized('etAMoisAcquisitionDIF') && null !== $object->getEtAMoisAcquisitionDIF()) {
            $data['etA_MoisAcquisitionDIF'] = $object->getEtAMoisAcquisitionDIF();
        }
        if ($object->isInitialized('bETAMoisClotureCP') && null !== $object->getBETAMoisClotureCP()) {
            $data['bETA_MoisClotureCP'] = $object->getBETAMoisClotureCP();
        }
        if ($object->isInitialized('etAMoisClotureCP') && null !== $object->getEtAMoisClotureCP()) {
            $data['etA_MoisClotureCP'] = $object->getEtAMoisClotureCP();
        }
        if ($object->isInitialized('bETAMoisClotureFJ') && null !== $object->getBETAMoisClotureFJ()) {
            $data['bETA_MoisClotureFJ'] = $object->getBETAMoisClotureFJ();
        }
        if ($object->isInitialized('etAMoisClotureFJ') && null !== $object->getEtAMoisClotureFJ()) {
            $data['etA_MoisClotureFJ'] = $object->getEtAMoisClotureFJ();
        }
        if ($object->isInitialized('bETAMoisClotureRepos') && null !== $object->getBETAMoisClotureRepos()) {
            $data['bETA_MoisClotureRepos'] = $object->getBETAMoisClotureRepos();
        }
        if ($object->isInitialized('etAMoisClotureRepos') && null !== $object->getEtAMoisClotureRepos()) {
            $data['etA_MoisClotureRepos'] = $object->getEtAMoisClotureRepos();
        }
        if ($object->isInitialized('bETAMoisClotureRTT') && null !== $object->getBETAMoisClotureRTT()) {
            $data['bETA_MoisClotureRTT'] = $object->getBETAMoisClotureRTT();
        }
        if ($object->isInitialized('etAMoisClotureRTT') && null !== $object->getEtAMoisClotureRTT()) {
            $data['etA_MoisClotureRTT'] = $object->getEtAMoisClotureRTT();
        }
        if ($object->isInitialized('bETANomInterne') && null !== $object->getBETANomInterne()) {
            $data['bETA_NomInterne'] = $object->getBETANomInterne();
        }
        if ($object->isInitialized('etANomInterne') && null !== $object->getEtANomInterne()) {
            $data['etA_NomInterne'] = $object->getEtANomInterne();
        }
        if ($object->isInitialized('bETANonSoumisCVAE') && null !== $object->getBETANonSoumisCVAE()) {
            $data['bETA_NonSoumisCVAE'] = $object->getBETANonSoumisCVAE();
        }
        if ($object->isInitialized('etANonSoumisCVAE') && null !== $object->getEtANonSoumisCVAE()) {
            $data['etA_NonSoumisCVAE'] = $object->getEtANonSoumisCVAE();
        }
        if ($object->isInitialized('bETAPeriodeRegulTauxAT1') && null !== $object->getBETAPeriodeRegulTauxAT1()) {
            $data['bETA_PeriodeRegulTauxAT_1'] = $object->getBETAPeriodeRegulTauxAT1();
        }
        if ($object->isInitialized('etAPeriodeRegulTauxAT1') && null !== $object->getEtAPeriodeRegulTauxAT1()) {
            $data['etA_PeriodeRegulTauxAT_1'] = $object->getEtAPeriodeRegulTauxAT1()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bETAPeriodeRegulTauxAT2') && null !== $object->getBETAPeriodeRegulTauxAT2()) {
            $data['bETA_PeriodeRegulTauxAT_2'] = $object->getBETAPeriodeRegulTauxAT2();
        }
        if ($object->isInitialized('etAPeriodeRegulTauxAT2') && null !== $object->getEtAPeriodeRegulTauxAT2()) {
            $data['etA_PeriodeRegulTauxAT_2'] = $object->getEtAPeriodeRegulTauxAT2()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bETAPeriodeRegulTauxAT3') && null !== $object->getBETAPeriodeRegulTauxAT3()) {
            $data['bETA_PeriodeRegulTauxAT_3'] = $object->getBETAPeriodeRegulTauxAT3();
        }
        if ($object->isInitialized('etAPeriodeRegulTauxAT3') && null !== $object->getEtAPeriodeRegulTauxAT3()) {
            $data['etA_PeriodeRegulTauxAT_3'] = $object->getEtAPeriodeRegulTauxAT3()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bETAPeriodeRegulTauxAT4') && null !== $object->getBETAPeriodeRegulTauxAT4()) {
            $data['bETA_PeriodeRegulTauxAT_4'] = $object->getBETAPeriodeRegulTauxAT4();
        }
        if ($object->isInitialized('etAPeriodeRegulTauxAT4') && null !== $object->getEtAPeriodeRegulTauxAT4()) {
            $data['etA_PeriodeRegulTauxAT_4'] = $object->getEtAPeriodeRegulTauxAT4()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bETAPeriodeRegulTauxAT5') && null !== $object->getBETAPeriodeRegulTauxAT5()) {
            $data['bETA_PeriodeRegulTauxAT_5'] = $object->getBETAPeriodeRegulTauxAT5();
        }
        if ($object->isInitialized('etAPeriodeRegulTauxAT5') && null !== $object->getEtAPeriodeRegulTauxAT5()) {
            $data['etA_PeriodeRegulTauxAT_5'] = $object->getEtAPeriodeRegulTauxAT5()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bETAPeriodeRegulTauxAT6') && null !== $object->getBETAPeriodeRegulTauxAT6()) {
            $data['bETA_PeriodeRegulTauxAT_6'] = $object->getBETAPeriodeRegulTauxAT6();
        }
        if ($object->isInitialized('etAPeriodeRegulTauxAT6') && null !== $object->getEtAPeriodeRegulTauxAT6()) {
            $data['etA_PeriodeRegulTauxAT_6'] = $object->getEtAPeriodeRegulTauxAT6()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bETAPeriodeRegulTauxAT7') && null !== $object->getBETAPeriodeRegulTauxAT7()) {
            $data['bETA_PeriodeRegulTauxAT_7'] = $object->getBETAPeriodeRegulTauxAT7();
        }
        if ($object->isInitialized('etAPeriodeRegulTauxAT7') && null !== $object->getEtAPeriodeRegulTauxAT7()) {
            $data['etA_PeriodeRegulTauxAT_7'] = $object->getEtAPeriodeRegulTauxAT7()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bETAPersonneAContacterMel') && null !== $object->getBETAPersonneAContacterMel()) {
            $data['bETA_PersonneAContacterMel'] = $object->getBETAPersonneAContacterMel();
        }
        if ($object->isInitialized('etAPersonneAContacterMel') && null !== $object->getEtAPersonneAContacterMel()) {
            $data['etA_PersonneAContacterMel'] = $object->getEtAPersonneAContacterMel();
        }
        if ($object->isInitialized('bETAPersonneAContacterNom') && null !== $object->getBETAPersonneAContacterNom()) {
            $data['bETA_PersonneAContacterNom'] = $object->getBETAPersonneAContacterNom();
        }
        if ($object->isInitialized('etAPersonneAContacterNom') && null !== $object->getEtAPersonneAContacterNom()) {
            $data['etA_PersonneAContacterNom'] = $object->getEtAPersonneAContacterNom();
        }
        if ($object->isInitialized('bETAPersonneAContacterPrenom') && null !== $object->getBETAPersonneAContacterPrenom()) {
            $data['bETA_PersonneAContacterPrenom'] = $object->getBETAPersonneAContacterPrenom();
        }
        if ($object->isInitialized('etAPersonneAContacterPrenom') && null !== $object->getEtAPersonneAContacterPrenom()) {
            $data['etA_PersonneAContacterPrenom'] = $object->getEtAPersonneAContacterPrenom();
        }
        if ($object->isInitialized('bETAPersonneAContacterTel') && null !== $object->getBETAPersonneAContacterTel()) {
            $data['bETA_PersonneAContacterTel'] = $object->getBETAPersonneAContacterTel();
        }
        if ($object->isInitialized('etAPersonneAContacterTel') && null !== $object->getEtAPersonneAContacterTel()) {
            $data['etA_PersonneAContacterTel'] = $object->getEtAPersonneAContacterTel();
        }
        if ($object->isInitialized('bETAPrefixeMatriculesSalaries') && null !== $object->getBETAPrefixeMatriculesSalaries()) {
            $data['bETA_PrefixeMatriculesSalaries'] = $object->getBETAPrefixeMatriculesSalaries();
        }
        if ($object->isInitialized('etAPrefixeMatriculesSalaries') && null !== $object->getEtAPrefixeMatriculesSalaries()) {
            $data['etA_PrefixeMatriculesSalaries'] = $object->getEtAPrefixeMatriculesSalaries();
        }
        if ($object->isInitialized('bETARTTEnHeures') && null !== $object->getBETARTTEnHeures()) {
            $data['bETA_RTTEnHeures'] = $object->getBETARTTEnHeures();
        }
        if ($object->isInitialized('etARTTEnHeures') && null !== $object->getEtARTTEnHeures()) {
            $data['etA_RTTEnHeures'] = $object->getEtARTTEnHeures();
        }
        if ($object->isInitialized('bETAS41G0100018001') && null !== $object->getBETAS41G0100018001()) {
            $data['bETA_S41_G01_00_018_001'] = $object->getBETAS41G0100018001();
        }
        if ($object->isInitialized('etAS41G0100018001') && null !== $object->getEtAS41G0100018001()) {
            $data['etA_S41_G01_00_018_001'] = $object->getEtAS41G0100018001();
        }
        if ($object->isInitialized('bETAS41G0100018006') && null !== $object->getBETAS41G0100018006()) {
            $data['bETA_S41_G01_00_018_006'] = $object->getBETAS41G0100018006();
        }
        if ($object->isInitialized('etAS41G0100018006') && null !== $object->getEtAS41G0100018006()) {
            $data['etA_S41_G01_00_018_006'] = $object->getEtAS41G0100018006();
        }
        if ($object->isInitialized('bETAS41G01000251') && null !== $object->getBETAS41G01000251()) {
            $data['bETA_S41_G01_00_025_1'] = $object->getBETAS41G01000251();
        }
        if ($object->isInitialized('etAS41G01000251') && null !== $object->getEtAS41G01000251()) {
            $data['etA_S41_G01_00_025_1'] = $object->getEtAS41G01000251();
        }
        if ($object->isInitialized('bETAS41G01000252') && null !== $object->getBETAS41G01000252()) {
            $data['bETA_S41_G01_00_025_2'] = $object->getBETAS41G01000252();
        }
        if ($object->isInitialized('etAS41G01000252') && null !== $object->getEtAS41G01000252()) {
            $data['etA_S41_G01_00_025_2'] = $object->getEtAS41G01000252();
        }
        if ($object->isInitialized('bETAS41G01000253') && null !== $object->getBETAS41G01000253()) {
            $data['bETA_S41_G01_00_025_3'] = $object->getBETAS41G01000253();
        }
        if ($object->isInitialized('etAS41G01000253') && null !== $object->getEtAS41G01000253()) {
            $data['etA_S41_G01_00_025_3'] = $object->getEtAS41G01000253();
        }
        if ($object->isInitialized('bETAS41G01000254') && null !== $object->getBETAS41G01000254()) {
            $data['bETA_S41_G01_00_025_4'] = $object->getBETAS41G01000254();
        }
        if ($object->isInitialized('etAS41G01000254') && null !== $object->getEtAS41G01000254()) {
            $data['etA_S41_G01_00_025_4'] = $object->getEtAS41G01000254();
        }
        if ($object->isInitialized('bETAS41G01000255') && null !== $object->getBETAS41G01000255()) {
            $data['bETA_S41_G01_00_025_5'] = $object->getBETAS41G01000255();
        }
        if ($object->isInitialized('etAS41G01000255') && null !== $object->getEtAS41G01000255()) {
            $data['etA_S41_G01_00_025_5'] = $object->getEtAS41G01000255();
        }
        if ($object->isInitialized('bETAS41G01000256') && null !== $object->getBETAS41G01000256()) {
            $data['bETA_S41_G01_00_025_6'] = $object->getBETAS41G01000256();
        }
        if ($object->isInitialized('etAS41G01000256') && null !== $object->getEtAS41G01000256()) {
            $data['etA_S41_G01_00_025_6'] = $object->getEtAS41G01000256();
        }
        if ($object->isInitialized('bETAS41G01000257') && null !== $object->getBETAS41G01000257()) {
            $data['bETA_S41_G01_00_025_7'] = $object->getBETAS41G01000257();
        }
        if ($object->isInitialized('etAS41G01000257') && null !== $object->getEtAS41G01000257()) {
            $data['etA_S41_G01_00_025_7'] = $object->getEtAS41G01000257();
        }
        if ($object->isInitialized('bETAS41G01000261') && null !== $object->getBETAS41G01000261()) {
            $data['bETA_S41_G01_00_026_1'] = $object->getBETAS41G01000261();
        }
        if ($object->isInitialized('etAS41G01000261') && null !== $object->getEtAS41G01000261()) {
            $data['etA_S41_G01_00_026_1'] = $object->getEtAS41G01000261();
        }
        if ($object->isInitialized('bETAS41G01000262') && null !== $object->getBETAS41G01000262()) {
            $data['bETA_S41_G01_00_026_2'] = $object->getBETAS41G01000262();
        }
        if ($object->isInitialized('etAS41G01000262') && null !== $object->getEtAS41G01000262()) {
            $data['etA_S41_G01_00_026_2'] = $object->getEtAS41G01000262();
        }
        if ($object->isInitialized('bETAS41G01000263') && null !== $object->getBETAS41G01000263()) {
            $data['bETA_S41_G01_00_026_3'] = $object->getBETAS41G01000263();
        }
        if ($object->isInitialized('etAS41G01000263') && null !== $object->getEtAS41G01000263()) {
            $data['etA_S41_G01_00_026_3'] = $object->getEtAS41G01000263();
        }
        if ($object->isInitialized('bETAS41G01000264') && null !== $object->getBETAS41G01000264()) {
            $data['bETA_S41_G01_00_026_4'] = $object->getBETAS41G01000264();
        }
        if ($object->isInitialized('etAS41G01000264') && null !== $object->getEtAS41G01000264()) {
            $data['etA_S41_G01_00_026_4'] = $object->getEtAS41G01000264();
        }
        if ($object->isInitialized('bETAS41G01000265') && null !== $object->getBETAS41G01000265()) {
            $data['bETA_S41_G01_00_026_5'] = $object->getBETAS41G01000265();
        }
        if ($object->isInitialized('etAS41G01000265') && null !== $object->getEtAS41G01000265()) {
            $data['etA_S41_G01_00_026_5'] = $object->getEtAS41G01000265();
        }
        if ($object->isInitialized('bETAS41G01000266') && null !== $object->getBETAS41G01000266()) {
            $data['bETA_S41_G01_00_026_6'] = $object->getBETAS41G01000266();
        }
        if ($object->isInitialized('etAS41G01000266') && null !== $object->getEtAS41G01000266()) {
            $data['etA_S41_G01_00_026_6'] = $object->getEtAS41G01000266();
        }
        if ($object->isInitialized('bETAS41G01000267') && null !== $object->getBETAS41G01000267()) {
            $data['bETA_S41_G01_00_026_7'] = $object->getBETAS41G01000267();
        }
        if ($object->isInitialized('etAS41G01000267') && null !== $object->getEtAS41G01000267()) {
            $data['etA_S41_G01_00_026_7'] = $object->getEtAS41G01000267();
        }
        if ($object->isInitialized('bETAS41G01000271') && null !== $object->getBETAS41G01000271()) {
            $data['bETA_S41_G01_00_027_1'] = $object->getBETAS41G01000271();
        }
        if ($object->isInitialized('etAS41G01000271') && null !== $object->getEtAS41G01000271()) {
            $data['etA_S41_G01_00_027_1'] = $object->getEtAS41G01000271();
        }
        if ($object->isInitialized('bETAS41G01000272') && null !== $object->getBETAS41G01000272()) {
            $data['bETA_S41_G01_00_027_2'] = $object->getBETAS41G01000272();
        }
        if ($object->isInitialized('etAS41G01000272') && null !== $object->getEtAS41G01000272()) {
            $data['etA_S41_G01_00_027_2'] = $object->getEtAS41G01000272();
        }
        if ($object->isInitialized('bETAS41G01000273') && null !== $object->getBETAS41G01000273()) {
            $data['bETA_S41_G01_00_027_3'] = $object->getBETAS41G01000273();
        }
        if ($object->isInitialized('etAS41G01000273') && null !== $object->getEtAS41G01000273()) {
            $data['etA_S41_G01_00_027_3'] = $object->getEtAS41G01000273();
        }
        if ($object->isInitialized('bETAS41G01000274') && null !== $object->getBETAS41G01000274()) {
            $data['bETA_S41_G01_00_027_4'] = $object->getBETAS41G01000274();
        }
        if ($object->isInitialized('etAS41G01000274') && null !== $object->getEtAS41G01000274()) {
            $data['etA_S41_G01_00_027_4'] = $object->getEtAS41G01000274();
        }
        if ($object->isInitialized('bETAS41G01000275') && null !== $object->getBETAS41G01000275()) {
            $data['bETA_S41_G01_00_027_5'] = $object->getBETAS41G01000275();
        }
        if ($object->isInitialized('etAS41G01000275') && null !== $object->getEtAS41G01000275()) {
            $data['etA_S41_G01_00_027_5'] = $object->getEtAS41G01000275();
        }
        if ($object->isInitialized('bETAS41G01000276') && null !== $object->getBETAS41G01000276()) {
            $data['bETA_S41_G01_00_027_6'] = $object->getBETAS41G01000276();
        }
        if ($object->isInitialized('etAS41G01000276') && null !== $object->getEtAS41G01000276()) {
            $data['etA_S41_G01_00_027_6'] = $object->getEtAS41G01000276();
        }
        if ($object->isInitialized('bETAS41G01000277') && null !== $object->getBETAS41G01000277()) {
            $data['bETA_S41_G01_00_027_7'] = $object->getBETAS41G01000277();
        }
        if ($object->isInitialized('etAS41G01000277') && null !== $object->getEtAS41G01000277()) {
            $data['etA_S41_G01_00_027_7'] = $object->getEtAS41G01000277();
        }
        if ($object->isInitialized('bETAS41G01000281') && null !== $object->getBETAS41G01000281()) {
            $data['bETA_S41_G01_00_028_1'] = $object->getBETAS41G01000281();
        }
        if ($object->isInitialized('etAS41G01000281') && null !== $object->getEtAS41G01000281()) {
            $data['etA_S41_G01_00_028_1'] = $object->getEtAS41G01000281();
        }
        if ($object->isInitialized('bETAS41G01000282') && null !== $object->getBETAS41G01000282()) {
            $data['bETA_S41_G01_00_028_2'] = $object->getBETAS41G01000282();
        }
        if ($object->isInitialized('etAS41G01000282') && null !== $object->getEtAS41G01000282()) {
            $data['etA_S41_G01_00_028_2'] = $object->getEtAS41G01000282();
        }
        if ($object->isInitialized('bETAS41G01000283') && null !== $object->getBETAS41G01000283()) {
            $data['bETA_S41_G01_00_028_3'] = $object->getBETAS41G01000283();
        }
        if ($object->isInitialized('etAS41G01000283') && null !== $object->getEtAS41G01000283()) {
            $data['etA_S41_G01_00_028_3'] = $object->getEtAS41G01000283();
        }
        if ($object->isInitialized('bETAS41G01000284') && null !== $object->getBETAS41G01000284()) {
            $data['bETA_S41_G01_00_028_4'] = $object->getBETAS41G01000284();
        }
        if ($object->isInitialized('etAS41G01000284') && null !== $object->getEtAS41G01000284()) {
            $data['etA_S41_G01_00_028_4'] = $object->getEtAS41G01000284();
        }
        if ($object->isInitialized('bETAS41G01000285') && null !== $object->getBETAS41G01000285()) {
            $data['bETA_S41_G01_00_028_5'] = $object->getBETAS41G01000285();
        }
        if ($object->isInitialized('etAS41G01000285') && null !== $object->getEtAS41G01000285()) {
            $data['etA_S41_G01_00_028_5'] = $object->getEtAS41G01000285();
        }
        if ($object->isInitialized('bETAS41G01000286') && null !== $object->getBETAS41G01000286()) {
            $data['bETA_S41_G01_00_028_6'] = $object->getBETAS41G01000286();
        }
        if ($object->isInitialized('etAS41G01000286') && null !== $object->getEtAS41G01000286()) {
            $data['etA_S41_G01_00_028_6'] = $object->getEtAS41G01000286();
        }
        if ($object->isInitialized('bETAS41G01000287') && null !== $object->getBETAS41G01000287()) {
            $data['bETA_S41_G01_00_028_7'] = $object->getBETAS41G01000287();
        }
        if ($object->isInitialized('etAS41G01000287') && null !== $object->getEtAS41G01000287()) {
            $data['etA_S41_G01_00_028_7'] = $object->getEtAS41G01000287();
        }
        if ($object->isInitialized('bETASaisieManuelleHeuresAbsences') && null !== $object->getBETASaisieManuelleHeuresAbsences()) {
            $data['bETA_SaisieManuelleHeuresAbsences'] = $object->getBETASaisieManuelleHeuresAbsences();
        }
        if ($object->isInitialized('etASaisieManuelleHeuresAbsences') && null !== $object->getEtASaisieManuelleHeuresAbsences()) {
            $data['etA_SaisieManuelleHeuresAbsences'] = $object->getEtASaisieManuelleHeuresAbsences();
        }
        if ($object->isInitialized('bETASoumisTaxeAppr') && null !== $object->getBETASoumisTaxeAppr()) {
            $data['bETA_SoumisTaxeAppr'] = $object->getBETASoumisTaxeAppr();
        }
        if ($object->isInitialized('etASoumisTaxeAppr') && null !== $object->getEtASoumisTaxeAppr()) {
            $data['etA_SoumisTaxeAppr'] = $object->getEtASoumisTaxeAppr();
        }
        if ($object->isInitialized('bETASoumisTaxeApprAvecMajoration') && null !== $object->getBETASoumisTaxeApprAvecMajoration()) {
            $data['bETA_SoumisTaxeApprAvecMajoration'] = $object->getBETASoumisTaxeApprAvecMajoration();
        }
        if ($object->isInitialized('etASoumisTaxeApprAvecMajoration') && null !== $object->getEtASoumisTaxeApprAvecMajoration()) {
            $data['etA_SoumisTaxeApprAvecMajoration'] = $object->getEtASoumisTaxeApprAvecMajoration();
        }
        if ($object->isInitialized('bETASoumisTaxeSalaires') && null !== $object->getBETASoumisTaxeSalaires()) {
            $data['bETA_SoumisTaxeSalaires'] = $object->getBETASoumisTaxeSalaires();
        }
        if ($object->isInitialized('etASoumisTaxeSalaires') && null !== $object->getEtASoumisTaxeSalaires()) {
            $data['etA_SoumisTaxeSalaires'] = $object->getEtASoumisTaxeSalaires();
        }
        if ($object->isInitialized('bETASoumisTaxeSalairesPctImp') && null !== $object->getBETASoumisTaxeSalairesPctImp()) {
            $data['bETA_SoumisTaxeSalairesPctImp'] = $object->getBETASoumisTaxeSalairesPctImp();
        }
        if ($object->isInitialized('etASoumisTaxeSalairesPctImp') && null !== $object->getEtASoumisTaxeSalairesPctImp()) {
            $data['etA_SoumisTaxeSalairesPctImp'] = $object->getEtASoumisTaxeSalairesPctImp();
        }
        if ($object->isInitialized('bETASousMethodeSuiviAbsences') && null !== $object->getBETASousMethodeSuiviAbsences()) {
            $data['bETA_SousMethodeSuiviAbsences'] = $object->getBETASousMethodeSuiviAbsences();
        }
        if ($object->isInitialized('etASousMethodeSuiviAbsences') && null !== $object->getEtASousMethodeSuiviAbsences()) {
            $data['etA_SousMethodeSuiviAbsences'] = $object->getEtASousMethodeSuiviAbsences();
        }
        if ($object->isInitialized('bETASousMethodeSuiviAbsencesFJ') && null !== $object->getBETASousMethodeSuiviAbsencesFJ()) {
            $data['bETA_SousMethodeSuiviAbsencesFJ'] = $object->getBETASousMethodeSuiviAbsencesFJ();
        }
        if ($object->isInitialized('etASousMethodeSuiviAbsencesFJ') && null !== $object->getEtASousMethodeSuiviAbsencesFJ()) {
            $data['etA_SousMethodeSuiviAbsencesFJ'] = $object->getEtASousMethodeSuiviAbsencesFJ();
        }
        if ($object->isInitialized('bETASubrogation') && null !== $object->getBETASubrogation()) {
            $data['bETA_Subrogation'] = $object->getBETASubrogation();
        }
        if ($object->isInitialized('etASubrogation') && null !== $object->getEtASubrogation()) {
            $data['etA_Subrogation'] = $object->getEtASubrogation();
        }
        if ($object->isInitialized('bETASubrogationVersEtaPrincipal') && null !== $object->getBETASubrogationVersEtaPrincipal()) {
            $data['bETA_SubrogationVersEtaPrincipal'] = $object->getBETASubrogationVersEtaPrincipal();
        }
        if ($object->isInitialized('etASubrogationVersEtaPrincipal') && null !== $object->getEtASubrogationVersEtaPrincipal()) {
            $data['etA_SubrogationVersEtaPrincipal'] = $object->getEtASubrogationVersEtaPrincipal();
        }
        if ($object->isInitialized('bETATassageAbsencesJours') && null !== $object->getBETATassageAbsencesJours()) {
            $data['bETA_TassageAbsencesJours'] = $object->getBETATassageAbsencesJours();
        }
        if ($object->isInitialized('etATassageAbsencesJours') && null !== $object->getEtATassageAbsencesJours()) {
            $data['etA_TassageAbsencesJours'] = $object->getEtATassageAbsencesJours();
        }
        if ($object->isInitialized('bETATauxVersementTrs') && null !== $object->getBETATauxVersementTrs()) {
            $data['bETA_TauxVersementTrs'] = $object->getBETATauxVersementTrs();
        }
        if ($object->isInitialized('etATauxVersementTrs') && null !== $object->getEtATauxVersementTrs()) {
            $data['etA_TauxVersementTrs'] = $object->getEtATauxVersementTrs();
        }
        if ($object->isInitialized('bETATaxeSalairesAbattement') && null !== $object->getBETATaxeSalairesAbattement()) {
            $data['bETA_TaxeSalairesAbattement'] = $object->getBETATaxeSalairesAbattement();
        }
        if ($object->isInitialized('etATaxeSalairesAbattement') && null !== $object->getEtATaxeSalairesAbattement()) {
            $data['etA_TaxeSalairesAbattement'] = $object->getEtATaxeSalairesAbattement();
        }
        if ($object->isInitialized('bETATaxeSalairesSurSeuilsAnnuel') && null !== $object->getBETATaxeSalairesSurSeuilsAnnuel()) {
            $data['bETA_TaxeSalairesSurSeuilsAnnuel'] = $object->getBETATaxeSalairesSurSeuilsAnnuel();
        }
        if ($object->isInitialized('etATaxeSalairesSurSeuilsAnnuel') && null !== $object->getEtATaxeSalairesSurSeuilsAnnuel()) {
            $data['etA_TaxeSalairesSurSeuilsAnnuel'] = $object->getEtATaxeSalairesSurSeuilsAnnuel();
        }
        if ($object->isInitialized('bETATitresTrs') && null !== $object->getBETATitresTrs()) {
            $data['bETA_TitresTrs'] = $object->getBETATitresTrs();
        }
        if ($object->isInitialized('etATitresTrs') && null !== $object->getEtATitresTrs()) {
            $data['etA_TitresTrs'] = $object->getEtATitresTrs();
        }
        if ($object->isInitialized('bETATResto') && null !== $object->getBETATResto()) {
            $data['bETA_TResto'] = $object->getBETATResto();
        }
        if ($object->isInitialized('etATResto') && null !== $object->getEtATResto()) {
            $data['etA_TResto'] = $object->getEtATResto();
        }
        if ($object->isInitialized('bETATRestoNomVariable') && null !== $object->getBETATRestoNomVariable()) {
            $data['bETA_TRestoNomVariable'] = $object->getBETATRestoNomVariable();
        }
        if ($object->isInitialized('etATRestoNomVariable') && null !== $object->getEtATRestoNomVariable()) {
            $data['etA_TRestoNomVariable'] = $object->getEtATRestoNomVariable();
        }
        if ($object->isInitialized('bETATRestoPartSalariale') && null !== $object->getBETATRestoPartSalariale()) {
            $data['bETA_TRestoPartSalariale'] = $object->getBETATRestoPartSalariale();
        }
        if ($object->isInitialized('etATRestoPartSalariale') && null !== $object->getEtATRestoPartSalariale()) {
            $data['etA_TRestoPartSalariale'] = $object->getEtATRestoPartSalariale();
        }
        if ($object->isInitialized('bETATypeAcquisitionDIF') && null !== $object->getBETATypeAcquisitionDIF()) {
            $data['bETA_TypeAcquisitionDIF'] = $object->getBETATypeAcquisitionDIF();
        }
        if ($object->isInitialized('etATypeAcquisitionDIF') && null !== $object->getEtATypeAcquisitionDIF()) {
            $data['etA_TypeAcquisitionDIF'] = $object->getEtATypeAcquisitionDIF();
        }
        if ($object->isInitialized('bETAVTACodeRegion') && null !== $object->getBETAVTACodeRegion()) {
            $data['bETA_VTACodeRegion'] = $object->getBETAVTACodeRegion();
        }
        if ($object->isInitialized('etAVTACodeRegion') && null !== $object->getEtAVTACodeRegion()) {
            $data['etA_VTACodeRegion'] = $object->getEtAVTACodeRegion();
        }
        if ($object->isInitialized('bETAVTATaux') && null !== $object->getBETAVTATaux()) {
            $data['bETA_VTATaux'] = $object->getBETAVTATaux();
        }
        if ($object->isInitialized('etAVTATaux') && null !== $object->getEtAVTATaux()) {
            $data['etA_VTATaux'] = $object->getEtAVTATaux();
        }
        if ($object->isInitialized('bETAVTrsAuto') && null !== $object->getBETAVTrsAuto()) {
            $data['bETA_VTrsAuto'] = $object->getBETAVTrsAuto();
        }
        if ($object->isInitialized('etAVTrsAuto') && null !== $object->getEtAVTrsAuto()) {
            $data['etA_VTrsAuto'] = $object->getEtAVTrsAuto();
        }
        if ($object->isInitialized('bINTBTQC') && null !== $object->getBINTBTQC()) {
            $data['bINT_BTQC'] = $object->getBINTBTQC();
        }
        if ($object->isInitialized('inTBTQC') && null !== $object->getInTBTQC()) {
            $data['inT_BTQC'] = $object->getInTBTQC();
        }
        if ($object->isInitialized('bINTCivilite') && null !== $object->getBINTCivilite()) {
            $data['bINT_Civilite'] = $object->getBINTCivilite();
        }
        if ($object->isInitialized('inTCivilite') && null !== $object->getInTCivilite()) {
            $data['inT_Civilite'] = $object->getInTCivilite();
        }
        if ($object->isInitialized('bINTCodePostal') && null !== $object->getBINTCodePostal()) {
            $data['bINT_CodePostal'] = $object->getBINTCodePostal();
        }
        if ($object->isInitialized('inTCodePostal') && null !== $object->getInTCodePostal()) {
            $data['inT_CodePostal'] = $object->getInTCodePostal();
        }
        if ($object->isInitialized('bINTCodePostalJF') && null !== $object->getBINTCodePostalJF()) {
            $data['bINT_CodePostalJF'] = $object->getBINTCodePostalJF();
        }
        if ($object->isInitialized('inTCodePostalJF') && null !== $object->getInTCodePostalJF()) {
            $data['inT_CodePostalJF'] = $object->getInTCodePostalJF();
        }
        if ($object->isInitialized('bINTCommune') && null !== $object->getBINTCommune()) {
            $data['bINT_Commune'] = $object->getBINTCommune();
        }
        if ($object->isInitialized('inTCommune') && null !== $object->getInTCommune()) {
            $data['inT_Commune'] = $object->getInTCommune();
        }
        if ($object->isInitialized('bINTCommuneINSEE') && null !== $object->getBINTCommuneINSEE()) {
            $data['bINT_CommuneINSEE'] = $object->getBINTCommuneINSEE();
        }
        if ($object->isInitialized('inTCommuneINSEE') && null !== $object->getInTCommuneINSEE()) {
            $data['inT_CommuneINSEE'] = $object->getInTCommuneINSEE();
        }
        if ($object->isInitialized('bINTComplementAdresse') && null !== $object->getBINTComplementAdresse()) {
            $data['bINT_ComplementAdresse'] = $object->getBINTComplementAdresse();
        }
        if ($object->isInitialized('inTComplementAdresse') && null !== $object->getInTComplementAdresse()) {
            $data['inT_ComplementAdresse'] = $object->getInTComplementAdresse();
        }
        if ($object->isInitialized('bINTDateDeces') && null !== $object->getBINTDateDeces()) {
            $data['bINT_DateDeces'] = $object->getBINTDateDeces();
        }
        if ($object->isInitialized('inTDateDeces') && null !== $object->getInTDateDeces()) {
            $data['inT_DateDeces'] = $object->getInTDateDeces()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bINTDateNaissance') && null !== $object->getBINTDateNaissance()) {
            $data['bINT_DateNaissance'] = $object->getBINTDateNaissance();
        }
        if ($object->isInitialized('inTDateNaissance') && null !== $object->getInTDateNaissance()) {
            $data['inT_DateNaissance'] = $object->getInTDateNaissance()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bINTEnseigne') && null !== $object->getBINTEnseigne()) {
            $data['bINT_Enseigne'] = $object->getBINTEnseigne();
        }
        if ($object->isInitialized('inTEnseigne') && null !== $object->getInTEnseigne()) {
            $data['inT_Enseigne'] = $object->getInTEnseigne();
        }
        if ($object->isInitialized('bINTFax') && null !== $object->getBINTFax()) {
            $data['bINT_Fax'] = $object->getBINTFax();
        }
        if ($object->isInitialized('inTFax') && null !== $object->getInTFax()) {
            $data['inT_Fax'] = $object->getInTFax();
        }
        if ($object->isInitialized('bINTFormeJuridique') && null !== $object->getBINTFormeJuridique()) {
            $data['bINT_FormeJuridique'] = $object->getBINTFormeJuridique();
        }
        if ($object->isInitialized('inTFormeJuridique') && null !== $object->getInTFormeJuridique()) {
            $data['inT_FormeJuridique'] = $object->getInTFormeJuridique();
        }
        if ($object->isInitialized('bINTMel') && null !== $object->getBINTMel()) {
            $data['bINT_Mel'] = $object->getBINTMel();
        }
        if ($object->isInitialized('inTMel') && null !== $object->getInTMel()) {
            $data['inT_Mel'] = $object->getInTMel();
        }
        if ($object->isInitialized('bINTNAF') && null !== $object->getBINTNAF()) {
            $data['bINT_NAF'] = $object->getBINTNAF();
        }
        if ($object->isInitialized('inTNAF') && null !== $object->getInTNAF()) {
            $data['inT_NAF'] = $object->getInTNAF();
        }
        if ($object->isInitialized('bINTNomPays') && null !== $object->getBINTNomPays()) {
            $data['bINT_NomPays'] = $object->getBINTNomPays();
        }
        if ($object->isInitialized('inTNomPays') && null !== $object->getInTNomPays()) {
            $data['inT_NomPays'] = $object->getInTNomPays();
        }
        if ($object->isInitialized('bINTNomUsuel') && null !== $object->getBINTNomUsuel()) {
            $data['bINT_NomUsuel'] = $object->getBINTNomUsuel();
        }
        if ($object->isInitialized('inTNomUsuel') && null !== $object->getInTNomUsuel()) {
            $data['inT_NomUsuel'] = $object->getInTNomUsuel();
        }
        if ($object->isInitialized('bINTNomVille') && null !== $object->getBINTNomVille()) {
            $data['bINT_NomVille'] = $object->getBINTNomVille();
        }
        if ($object->isInitialized('inTNomVille') && null !== $object->getInTNomVille()) {
            $data['inT_NomVille'] = $object->getInTNomVille();
        }
        if ($object->isInitialized('bINTNomVoie') && null !== $object->getBINTNomVoie()) {
            $data['bINT_NomVoie'] = $object->getBINTNomVoie();
        }
        if ($object->isInitialized('inTNomVoie') && null !== $object->getInTNomVoie()) {
            $data['inT_NomVoie'] = $object->getInTNomVoie();
        }
        if ($object->isInitialized('bINTNumVoie') && null !== $object->getBINTNumVoie()) {
            $data['bINT_NumVoie'] = $object->getBINTNumVoie();
        }
        if ($object->isInitialized('inTNumVoie') && null !== $object->getInTNumVoie()) {
            $data['inT_NumVoie'] = $object->getInTNumVoie();
        }
        if ($object->isInitialized('bINTPaysISO') && null !== $object->getBINTPaysISO()) {
            $data['bINT_PaysISO'] = $object->getBINTPaysISO();
        }
        if ($object->isInitialized('inTPaysISO') && null !== $object->getInTPaysISO()) {
            $data['inT_PaysISO'] = $object->getInTPaysISO();
        }
        if ($object->isInitialized('bINTPaysISOJF') && null !== $object->getBINTPaysISOJF()) {
            $data['bINT_PaysISOJF'] = $object->getBINTPaysISOJF();
        }
        if ($object->isInitialized('inTPaysISOJF') && null !== $object->getInTPaysISOJF()) {
            $data['inT_PaysISOJF'] = $object->getInTPaysISOJF();
        }
        if ($object->isInitialized('bINTPrenom') && null !== $object->getBINTPrenom()) {
            $data['bINT_Prenom'] = $object->getBINTPrenom();
        }
        if ($object->isInitialized('inTPrenom') && null !== $object->getInTPrenom()) {
            $data['inT_Prenom'] = $object->getInTPrenom();
        }
        if ($object->isInitialized('bINTRaisonSociale') && null !== $object->getBINTRaisonSociale()) {
            $data['bINT_RaisonSociale'] = $object->getBINTRaisonSociale();
        }
        if ($object->isInitialized('inTRaisonSociale') && null !== $object->getInTRaisonSociale()) {
            $data['inT_RaisonSociale'] = $object->getInTRaisonSociale();
        }
        if ($object->isInitialized('bINTSiret') && null !== $object->getBINTSiret()) {
            $data['bINT_Siret'] = $object->getBINTSiret();
        }
        if ($object->isInitialized('inTSiret') && null !== $object->getInTSiret()) {
            $data['inT_Siret'] = $object->getInTSiret();
        }
        if ($object->isInitialized('bINTSiteWeb') && null !== $object->getBINTSiteWeb()) {
            $data['bINT_SiteWeb'] = $object->getBINTSiteWeb();
        }
        if ($object->isInitialized('inTSiteWeb') && null !== $object->getInTSiteWeb()) {
            $data['inT_SiteWeb'] = $object->getInTSiteWeb();
        }
        if ($object->isInitialized('bINTTelBureau') && null !== $object->getBINTTelBureau()) {
            $data['bINT_TelBureau'] = $object->getBINTTelBureau();
        }
        if ($object->isInitialized('inTTelBureau') && null !== $object->getInTTelBureau()) {
            $data['inT_TelBureau'] = $object->getInTTelBureau();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\EtablissementInfoSup' => false];
    }
}
