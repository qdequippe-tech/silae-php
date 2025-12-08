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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EtablissementInfoSup::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EtablissementInfoSup::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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

        if (\array_key_exists('bETA_AcquisitionHeuresDIF', $data) && \is_int($data['bETA_AcquisitionHeuresDIF'])) {
            $data['bETA_AcquisitionHeuresDIF'] = (bool) $data['bETA_AcquisitionHeuresDIF'];
        }

        if (\array_key_exists('bETA_AssimiliesCadresPrevoyanceNonCadre', $data) && \is_int($data['bETA_AssimiliesCadresPrevoyanceNonCadre'])) {
            $data['bETA_AssimiliesCadresPrevoyanceNonCadre'] = (bool) $data['bETA_AssimiliesCadresPrevoyanceNonCadre'];
        }

        if (\array_key_exists('etA_AssimiliesCadresPrevoyanceNonCadre', $data) && \is_int($data['etA_AssimiliesCadresPrevoyanceNonCadre'])) {
            $data['etA_AssimiliesCadresPrevoyanceNonCadre'] = (bool) $data['etA_AssimiliesCadresPrevoyanceNonCadre'];
        }

        if (\array_key_exists('bETA_BulletinEditionDIF', $data) && \is_int($data['bETA_BulletinEditionDIF'])) {
            $data['bETA_BulletinEditionDIF'] = (bool) $data['bETA_BulletinEditionDIF'];
        }

        if (\array_key_exists('bETA_CalcAutoIJSSInactif', $data) && \is_int($data['bETA_CalcAutoIJSSInactif'])) {
            $data['bETA_CalcAutoIJSSInactif'] = (bool) $data['bETA_CalcAutoIJSSInactif'];
        }

        if (\array_key_exists('etA_CalcAutoIJSSInactif', $data) && \is_int($data['etA_CalcAutoIJSSInactif'])) {
            $data['etA_CalcAutoIJSSInactif'] = (bool) $data['etA_CalcAutoIJSSInactif'];
        }

        if (\array_key_exists('bETA_CalcAutoMaintienInactif', $data) && \is_int($data['bETA_CalcAutoMaintienInactif'])) {
            $data['bETA_CalcAutoMaintienInactif'] = (bool) $data['bETA_CalcAutoMaintienInactif'];
        }

        if (\array_key_exists('etA_CalcAutoMaintienInactif', $data) && \is_int($data['etA_CalcAutoMaintienInactif'])) {
            $data['etA_CalcAutoMaintienInactif'] = (bool) $data['etA_CalcAutoMaintienInactif'];
        }

        if (\array_key_exists('bETA_CDDPaiMensIndCP', $data) && \is_int($data['bETA_CDDPaiMensIndCP'])) {
            $data['bETA_CDDPaiMensIndCP'] = (bool) $data['bETA_CDDPaiMensIndCP'];
        }

        if (\array_key_exists('etA_CDDPaiMensIndCP', $data) && \is_int($data['etA_CDDPaiMensIndCP'])) {
            $data['etA_CDDPaiMensIndCP'] = (bool) $data['etA_CDDPaiMensIndCP'];
        }

        if (\array_key_exists('bETA_CDDPaiMensIndPrecarite', $data) && \is_int($data['bETA_CDDPaiMensIndPrecarite'])) {
            $data['bETA_CDDPaiMensIndPrecarite'] = (bool) $data['bETA_CDDPaiMensIndPrecarite'];
        }

        if (\array_key_exists('etA_CDDPaiMensIndPrecarite', $data) && \is_int($data['etA_CDDPaiMensIndPrecarite'])) {
            $data['etA_CDDPaiMensIndPrecarite'] = (bool) $data['etA_CDDPaiMensIndPrecarite'];
        }

        if (\array_key_exists('bETA_ChaineFabricationDateLimiteAbsences', $data) && \is_int($data['bETA_ChaineFabricationDateLimiteAbsences'])) {
            $data['bETA_ChaineFabricationDateLimiteAbsences'] = (bool) $data['bETA_ChaineFabricationDateLimiteAbsences'];
        }

        if (\array_key_exists('bETA_ClotureCPArrondiInactif', $data) && \is_int($data['bETA_ClotureCPArrondiInactif'])) {
            $data['bETA_ClotureCPArrondiInactif'] = (bool) $data['bETA_ClotureCPArrondiInactif'];
        }

        if (\array_key_exists('etA_ClotureCPArrondiInactif', $data) && \is_int($data['etA_ClotureCPArrondiInactif'])) {
            $data['etA_ClotureCPArrondiInactif'] = (bool) $data['etA_ClotureCPArrondiInactif'];
        }

        if (\array_key_exists('bETA_ClotureCPReport', $data) && \is_int($data['bETA_ClotureCPReport'])) {
            $data['bETA_ClotureCPReport'] = (bool) $data['bETA_ClotureCPReport'];
        }

        if (\array_key_exists('etA_ClotureCPReport', $data) && \is_int($data['etA_ClotureCPReport'])) {
            $data['etA_ClotureCPReport'] = (bool) $data['etA_ClotureCPReport'];
        }

        if (\array_key_exists('bETA_ClotureRTTReport', $data) && \is_int($data['bETA_ClotureRTTReport'])) {
            $data['bETA_ClotureRTTReport'] = (bool) $data['bETA_ClotureRTTReport'];
        }

        if (\array_key_exists('etA_ClotureRTTReport', $data) && \is_int($data['etA_ClotureRTTReport'])) {
            $data['etA_ClotureRTTReport'] = (bool) $data['etA_ClotureRTTReport'];
        }

        if (\array_key_exists('bETA_CodeBTAPEMSA', $data) && \is_int($data['bETA_CodeBTAPEMSA'])) {
            $data['bETA_CodeBTAPEMSA'] = (bool) $data['bETA_CodeBTAPEMSA'];
        }

        if (\array_key_exists('bETA_CodeRegion', $data) && \is_int($data['bETA_CodeRegion'])) {
            $data['bETA_CodeRegion'] = (bool) $data['bETA_CodeRegion'];
        }

        if (\array_key_exists('bETA_DadsInactive', $data) && \is_int($data['bETA_DadsInactive'])) {
            $data['bETA_DadsInactive'] = (bool) $data['bETA_DadsInactive'];
        }

        if (\array_key_exists('etA_DadsInactive', $data) && \is_int($data['etA_DadsInactive'])) {
            $data['etA_DadsInactive'] = (bool) $data['etA_DadsInactive'];
        }

        if (\array_key_exists('bETA_DecalageActiviteJournaliere', $data) && \is_int($data['bETA_DecalageActiviteJournaliere'])) {
            $data['bETA_DecalageActiviteJournaliere'] = (bool) $data['bETA_DecalageActiviteJournaliere'];
        }

        if (\array_key_exists('bETA_DecoupageActiviteJournaliere', $data) && \is_int($data['bETA_DecoupageActiviteJournaliere'])) {
            $data['bETA_DecoupageActiviteJournaliere'] = (bool) $data['bETA_DecoupageActiviteJournaliere'];
        }

        if (\array_key_exists('bETA_DureeHebdo', $data) && \is_int($data['bETA_DureeHebdo'])) {
            $data['bETA_DureeHebdo'] = (bool) $data['bETA_DureeHebdo'];
        }

        if (\array_key_exists('bETA_EmployeurCivilite', $data) && \is_int($data['bETA_EmployeurCivilite'])) {
            $data['bETA_EmployeurCivilite'] = (bool) $data['bETA_EmployeurCivilite'];
        }

        if (\array_key_exists('bETA_EmployeurNom', $data) && \is_int($data['bETA_EmployeurNom'])) {
            $data['bETA_EmployeurNom'] = (bool) $data['bETA_EmployeurNom'];
        }

        if (\array_key_exists('bETA_EmployeurPrenom', $data) && \is_int($data['bETA_EmployeurPrenom'])) {
            $data['bETA_EmployeurPrenom'] = (bool) $data['bETA_EmployeurPrenom'];
        }

        if (\array_key_exists('bETA_EmployeurQualite', $data) && \is_int($data['bETA_EmployeurQualite'])) {
            $data['bETA_EmployeurQualite'] = (bool) $data['bETA_EmployeurQualite'];
        }

        if (\array_key_exists('bETA_EmployeurQualiteAutre', $data) && \is_int($data['bETA_EmployeurQualiteAutre'])) {
            $data['bETA_EmployeurQualiteAutre'] = (bool) $data['bETA_EmployeurQualiteAutre'];
        }

        if (\array_key_exists('bETA_ExoJEIDateDebut', $data) && \is_int($data['bETA_ExoJEIDateDebut'])) {
            $data['bETA_ExoJEIDateDebut'] = (bool) $data['bETA_ExoJEIDateDebut'];
        }

        if (\array_key_exists('bETA_ForceDroitCICE', $data) && \is_int($data['bETA_ForceDroitCICE'])) {
            $data['bETA_ForceDroitCICE'] = (bool) $data['bETA_ForceDroitCICE'];
        }

        if (\array_key_exists('etA_ForceDroitCICE', $data) && \is_int($data['etA_ForceDroitCICE'])) {
            $data['etA_ForceDroitCICE'] = (bool) $data['etA_ForceDroitCICE'];
        }

        if (\array_key_exists('bETA_FractionnementCP', $data) && \is_int($data['bETA_FractionnementCP'])) {
            $data['bETA_FractionnementCP'] = (bool) $data['bETA_FractionnementCP'];
        }

        if (\array_key_exists('etA_FractionnementCP', $data) && \is_int($data['etA_FractionnementCP'])) {
            $data['etA_FractionnementCP'] = (bool) $data['etA_FractionnementCP'];
        }

        if (\array_key_exists('bETA_FractionnementCPMoisCalcSpe', $data) && \is_int($data['bETA_FractionnementCPMoisCalcSpe'])) {
            $data['bETA_FractionnementCPMoisCalcSpe'] = (bool) $data['bETA_FractionnementCPMoisCalcSpe'];
        }

        if (\array_key_exists('bETA_FractionnementCPMoisDebut', $data) && \is_int($data['bETA_FractionnementCPMoisDebut'])) {
            $data['bETA_FractionnementCPMoisDebut'] = (bool) $data['bETA_FractionnementCPMoisDebut'];
        }

        if (\array_key_exists('bETA_FractionnementCPMoisFin', $data) && \is_int($data['bETA_FractionnementCPMoisFin'])) {
            $data['bETA_FractionnementCPMoisFin'] = (bool) $data['bETA_FractionnementCPMoisFin'];
        }

        if (\array_key_exists('bETA_FSConserverCondAnc', $data) && \is_int($data['bETA_FSConserverCondAnc'])) {
            $data['bETA_FSConserverCondAnc'] = (bool) $data['bETA_FSConserverCondAnc'];
        }

        if (\array_key_exists('etA_FSConserverCondAnc', $data) && \is_int($data['etA_FSConserverCondAnc'])) {
            $data['etA_FSConserverCondAnc'] = (bool) $data['etA_FSConserverCondAnc'];
        }

        if (\array_key_exists('bETA_FSMethode', $data) && \is_int($data['bETA_FSMethode'])) {
            $data['bETA_FSMethode'] = (bool) $data['bETA_FSMethode'];
        }

        if (\array_key_exists('bETA_GestionCPExclEnJours', $data) && \is_int($data['bETA_GestionCPExclEnJours'])) {
            $data['bETA_GestionCPExclEnJours'] = (bool) $data['bETA_GestionCPExclEnJours'];
        }

        if (\array_key_exists('etA_GestionCPExclEnJours', $data) && \is_int($data['etA_GestionCPExclEnJours'])) {
            $data['etA_GestionCPExclEnJours'] = (bool) $data['etA_GestionCPExclEnJours'];
        }

        if (\array_key_exists('bETA_JourDebSemActiviteJournaliere', $data) && \is_int($data['bETA_JourDebSemActiviteJournaliere'])) {
            $data['bETA_JourDebSemActiviteJournaliere'] = (bool) $data['bETA_JourDebSemActiviteJournaliere'];
        }

        if (\array_key_exists('bETA_JourneeSolidarite', $data) && \is_int($data['bETA_JourneeSolidarite'])) {
            $data['bETA_JourneeSolidarite'] = (bool) $data['bETA_JourneeSolidarite'];
        }

        if (\array_key_exists('bETA_JoursFeriesTravailles', $data) && \is_int($data['bETA_JoursFeriesTravailles'])) {
            $data['bETA_JoursFeriesTravailles'] = (bool) $data['bETA_JoursFeriesTravailles'];
        }

        if (\array_key_exists('bETA_MethodeArbitrage', $data) && \is_int($data['bETA_MethodeArbitrage'])) {
            $data['bETA_MethodeArbitrage'] = (bool) $data['bETA_MethodeArbitrage'];
        }

        if (\array_key_exists('bETA_MethodeCalculMaintien', $data) && \is_int($data['bETA_MethodeCalculMaintien'])) {
            $data['bETA_MethodeCalculMaintien'] = (bool) $data['bETA_MethodeCalculMaintien'];
        }

        if (\array_key_exists('bETA_MethodeCalculMaintienNbM', $data) && \is_int($data['bETA_MethodeCalculMaintienNbM'])) {
            $data['bETA_MethodeCalculMaintienNbM'] = (bool) $data['bETA_MethodeCalculMaintienNbM'];
        }

        if (\array_key_exists('bETA_MethodeRetenueCP', $data) && \is_int($data['bETA_MethodeRetenueCP'])) {
            $data['bETA_MethodeRetenueCP'] = (bool) $data['bETA_MethodeRetenueCP'];
        }

        if (\array_key_exists('bETA_MethodeSuiviAbsences', $data) && \is_int($data['bETA_MethodeSuiviAbsences'])) {
            $data['bETA_MethodeSuiviAbsences'] = (bool) $data['bETA_MethodeSuiviAbsences'];
        }

        if (\array_key_exists('bETA_MethodeSuiviAbsencesDeductionHM', $data) && \is_int($data['bETA_MethodeSuiviAbsencesDeductionHM'])) {
            $data['bETA_MethodeSuiviAbsencesDeductionHM'] = (bool) $data['bETA_MethodeSuiviAbsencesDeductionHM'];
        }

        if (\array_key_exists('bETA_MethodeSuiviAbsencesJC', $data) && \is_int($data['bETA_MethodeSuiviAbsencesJC'])) {
            $data['bETA_MethodeSuiviAbsencesJC'] = (bool) $data['bETA_MethodeSuiviAbsencesJC'];
        }

        if (\array_key_exists('bETA_MethodeSuiviCP', $data) && \is_int($data['bETA_MethodeSuiviCP'])) {
            $data['bETA_MethodeSuiviCP'] = (bool) $data['bETA_MethodeSuiviCP'];
        }

        if (\array_key_exists('bETA_MethodeSuiviCPAcqMois', $data) && \is_int($data['bETA_MethodeSuiviCPAcqMois'])) {
            $data['bETA_MethodeSuiviCPAcqMois'] = (bool) $data['bETA_MethodeSuiviCPAcqMois'];
        }

        if (\array_key_exists('bETA_ModeSaisieActiviteJournaliere', $data) && \is_int($data['bETA_ModeSaisieActiviteJournaliere'])) {
            $data['bETA_ModeSaisieActiviteJournaliere'] = (bool) $data['bETA_ModeSaisieActiviteJournaliere'];
        }

        if (\array_key_exists('bETA_MoisAcquisitionDIF', $data) && \is_int($data['bETA_MoisAcquisitionDIF'])) {
            $data['bETA_MoisAcquisitionDIF'] = (bool) $data['bETA_MoisAcquisitionDIF'];
        }

        if (\array_key_exists('bETA_MoisClotureCP', $data) && \is_int($data['bETA_MoisClotureCP'])) {
            $data['bETA_MoisClotureCP'] = (bool) $data['bETA_MoisClotureCP'];
        }

        if (\array_key_exists('bETA_MoisClotureFJ', $data) && \is_int($data['bETA_MoisClotureFJ'])) {
            $data['bETA_MoisClotureFJ'] = (bool) $data['bETA_MoisClotureFJ'];
        }

        if (\array_key_exists('bETA_MoisClotureRepos', $data) && \is_int($data['bETA_MoisClotureRepos'])) {
            $data['bETA_MoisClotureRepos'] = (bool) $data['bETA_MoisClotureRepos'];
        }

        if (\array_key_exists('bETA_MoisClotureRTT', $data) && \is_int($data['bETA_MoisClotureRTT'])) {
            $data['bETA_MoisClotureRTT'] = (bool) $data['bETA_MoisClotureRTT'];
        }

        if (\array_key_exists('bETA_NomInterne', $data) && \is_int($data['bETA_NomInterne'])) {
            $data['bETA_NomInterne'] = (bool) $data['bETA_NomInterne'];
        }

        if (\array_key_exists('bETA_NonSoumisCVAE', $data) && \is_int($data['bETA_NonSoumisCVAE'])) {
            $data['bETA_NonSoumisCVAE'] = (bool) $data['bETA_NonSoumisCVAE'];
        }

        if (\array_key_exists('etA_NonSoumisCVAE', $data) && \is_int($data['etA_NonSoumisCVAE'])) {
            $data['etA_NonSoumisCVAE'] = (bool) $data['etA_NonSoumisCVAE'];
        }

        if (\array_key_exists('bETA_PeriodeRegulTauxAT_1', $data) && \is_int($data['bETA_PeriodeRegulTauxAT_1'])) {
            $data['bETA_PeriodeRegulTauxAT_1'] = (bool) $data['bETA_PeriodeRegulTauxAT_1'];
        }

        if (\array_key_exists('bETA_PeriodeRegulTauxAT_2', $data) && \is_int($data['bETA_PeriodeRegulTauxAT_2'])) {
            $data['bETA_PeriodeRegulTauxAT_2'] = (bool) $data['bETA_PeriodeRegulTauxAT_2'];
        }

        if (\array_key_exists('bETA_PeriodeRegulTauxAT_3', $data) && \is_int($data['bETA_PeriodeRegulTauxAT_3'])) {
            $data['bETA_PeriodeRegulTauxAT_3'] = (bool) $data['bETA_PeriodeRegulTauxAT_3'];
        }

        if (\array_key_exists('bETA_PeriodeRegulTauxAT_4', $data) && \is_int($data['bETA_PeriodeRegulTauxAT_4'])) {
            $data['bETA_PeriodeRegulTauxAT_4'] = (bool) $data['bETA_PeriodeRegulTauxAT_4'];
        }

        if (\array_key_exists('bETA_PeriodeRegulTauxAT_5', $data) && \is_int($data['bETA_PeriodeRegulTauxAT_5'])) {
            $data['bETA_PeriodeRegulTauxAT_5'] = (bool) $data['bETA_PeriodeRegulTauxAT_5'];
        }

        if (\array_key_exists('bETA_PeriodeRegulTauxAT_6', $data) && \is_int($data['bETA_PeriodeRegulTauxAT_6'])) {
            $data['bETA_PeriodeRegulTauxAT_6'] = (bool) $data['bETA_PeriodeRegulTauxAT_6'];
        }

        if (\array_key_exists('bETA_PeriodeRegulTauxAT_7', $data) && \is_int($data['bETA_PeriodeRegulTauxAT_7'])) {
            $data['bETA_PeriodeRegulTauxAT_7'] = (bool) $data['bETA_PeriodeRegulTauxAT_7'];
        }

        if (\array_key_exists('bETA_PersonneAContacterMel', $data) && \is_int($data['bETA_PersonneAContacterMel'])) {
            $data['bETA_PersonneAContacterMel'] = (bool) $data['bETA_PersonneAContacterMel'];
        }

        if (\array_key_exists('bETA_PersonneAContacterNom', $data) && \is_int($data['bETA_PersonneAContacterNom'])) {
            $data['bETA_PersonneAContacterNom'] = (bool) $data['bETA_PersonneAContacterNom'];
        }

        if (\array_key_exists('bETA_PersonneAContacterPrenom', $data) && \is_int($data['bETA_PersonneAContacterPrenom'])) {
            $data['bETA_PersonneAContacterPrenom'] = (bool) $data['bETA_PersonneAContacterPrenom'];
        }

        if (\array_key_exists('bETA_PersonneAContacterTel', $data) && \is_int($data['bETA_PersonneAContacterTel'])) {
            $data['bETA_PersonneAContacterTel'] = (bool) $data['bETA_PersonneAContacterTel'];
        }

        if (\array_key_exists('bETA_PrefixeMatriculesSalaries', $data) && \is_int($data['bETA_PrefixeMatriculesSalaries'])) {
            $data['bETA_PrefixeMatriculesSalaries'] = (bool) $data['bETA_PrefixeMatriculesSalaries'];
        }

        if (\array_key_exists('bETA_RTTEnHeures', $data) && \is_int($data['bETA_RTTEnHeures'])) {
            $data['bETA_RTTEnHeures'] = (bool) $data['bETA_RTTEnHeures'];
        }

        if (\array_key_exists('bETA_S41_G01_00_018_001', $data) && \is_int($data['bETA_S41_G01_00_018_001'])) {
            $data['bETA_S41_G01_00_018_001'] = (bool) $data['bETA_S41_G01_00_018_001'];
        }

        if (\array_key_exists('bETA_S41_G01_00_018_006', $data) && \is_int($data['bETA_S41_G01_00_018_006'])) {
            $data['bETA_S41_G01_00_018_006'] = (bool) $data['bETA_S41_G01_00_018_006'];
        }

        if (\array_key_exists('bETA_S41_G01_00_025_1', $data) && \is_int($data['bETA_S41_G01_00_025_1'])) {
            $data['bETA_S41_G01_00_025_1'] = (bool) $data['bETA_S41_G01_00_025_1'];
        }

        if (\array_key_exists('bETA_S41_G01_00_025_2', $data) && \is_int($data['bETA_S41_G01_00_025_2'])) {
            $data['bETA_S41_G01_00_025_2'] = (bool) $data['bETA_S41_G01_00_025_2'];
        }

        if (\array_key_exists('bETA_S41_G01_00_025_3', $data) && \is_int($data['bETA_S41_G01_00_025_3'])) {
            $data['bETA_S41_G01_00_025_3'] = (bool) $data['bETA_S41_G01_00_025_3'];
        }

        if (\array_key_exists('bETA_S41_G01_00_025_4', $data) && \is_int($data['bETA_S41_G01_00_025_4'])) {
            $data['bETA_S41_G01_00_025_4'] = (bool) $data['bETA_S41_G01_00_025_4'];
        }

        if (\array_key_exists('bETA_S41_G01_00_025_5', $data) && \is_int($data['bETA_S41_G01_00_025_5'])) {
            $data['bETA_S41_G01_00_025_5'] = (bool) $data['bETA_S41_G01_00_025_5'];
        }

        if (\array_key_exists('bETA_S41_G01_00_025_6', $data) && \is_int($data['bETA_S41_G01_00_025_6'])) {
            $data['bETA_S41_G01_00_025_6'] = (bool) $data['bETA_S41_G01_00_025_6'];
        }

        if (\array_key_exists('bETA_S41_G01_00_025_7', $data) && \is_int($data['bETA_S41_G01_00_025_7'])) {
            $data['bETA_S41_G01_00_025_7'] = (bool) $data['bETA_S41_G01_00_025_7'];
        }

        if (\array_key_exists('bETA_S41_G01_00_026_1', $data) && \is_int($data['bETA_S41_G01_00_026_1'])) {
            $data['bETA_S41_G01_00_026_1'] = (bool) $data['bETA_S41_G01_00_026_1'];
        }

        if (\array_key_exists('bETA_S41_G01_00_026_2', $data) && \is_int($data['bETA_S41_G01_00_026_2'])) {
            $data['bETA_S41_G01_00_026_2'] = (bool) $data['bETA_S41_G01_00_026_2'];
        }

        if (\array_key_exists('bETA_S41_G01_00_026_3', $data) && \is_int($data['bETA_S41_G01_00_026_3'])) {
            $data['bETA_S41_G01_00_026_3'] = (bool) $data['bETA_S41_G01_00_026_3'];
        }

        if (\array_key_exists('bETA_S41_G01_00_026_4', $data) && \is_int($data['bETA_S41_G01_00_026_4'])) {
            $data['bETA_S41_G01_00_026_4'] = (bool) $data['bETA_S41_G01_00_026_4'];
        }

        if (\array_key_exists('bETA_S41_G01_00_026_5', $data) && \is_int($data['bETA_S41_G01_00_026_5'])) {
            $data['bETA_S41_G01_00_026_5'] = (bool) $data['bETA_S41_G01_00_026_5'];
        }

        if (\array_key_exists('bETA_S41_G01_00_026_6', $data) && \is_int($data['bETA_S41_G01_00_026_6'])) {
            $data['bETA_S41_G01_00_026_6'] = (bool) $data['bETA_S41_G01_00_026_6'];
        }

        if (\array_key_exists('bETA_S41_G01_00_026_7', $data) && \is_int($data['bETA_S41_G01_00_026_7'])) {
            $data['bETA_S41_G01_00_026_7'] = (bool) $data['bETA_S41_G01_00_026_7'];
        }

        if (\array_key_exists('bETA_S41_G01_00_027_1', $data) && \is_int($data['bETA_S41_G01_00_027_1'])) {
            $data['bETA_S41_G01_00_027_1'] = (bool) $data['bETA_S41_G01_00_027_1'];
        }

        if (\array_key_exists('bETA_S41_G01_00_027_2', $data) && \is_int($data['bETA_S41_G01_00_027_2'])) {
            $data['bETA_S41_G01_00_027_2'] = (bool) $data['bETA_S41_G01_00_027_2'];
        }

        if (\array_key_exists('bETA_S41_G01_00_027_3', $data) && \is_int($data['bETA_S41_G01_00_027_3'])) {
            $data['bETA_S41_G01_00_027_3'] = (bool) $data['bETA_S41_G01_00_027_3'];
        }

        if (\array_key_exists('bETA_S41_G01_00_027_4', $data) && \is_int($data['bETA_S41_G01_00_027_4'])) {
            $data['bETA_S41_G01_00_027_4'] = (bool) $data['bETA_S41_G01_00_027_4'];
        }

        if (\array_key_exists('bETA_S41_G01_00_027_5', $data) && \is_int($data['bETA_S41_G01_00_027_5'])) {
            $data['bETA_S41_G01_00_027_5'] = (bool) $data['bETA_S41_G01_00_027_5'];
        }

        if (\array_key_exists('bETA_S41_G01_00_027_6', $data) && \is_int($data['bETA_S41_G01_00_027_6'])) {
            $data['bETA_S41_G01_00_027_6'] = (bool) $data['bETA_S41_G01_00_027_6'];
        }

        if (\array_key_exists('bETA_S41_G01_00_027_7', $data) && \is_int($data['bETA_S41_G01_00_027_7'])) {
            $data['bETA_S41_G01_00_027_7'] = (bool) $data['bETA_S41_G01_00_027_7'];
        }

        if (\array_key_exists('bETA_S41_G01_00_028_1', $data) && \is_int($data['bETA_S41_G01_00_028_1'])) {
            $data['bETA_S41_G01_00_028_1'] = (bool) $data['bETA_S41_G01_00_028_1'];
        }

        if (\array_key_exists('bETA_S41_G01_00_028_2', $data) && \is_int($data['bETA_S41_G01_00_028_2'])) {
            $data['bETA_S41_G01_00_028_2'] = (bool) $data['bETA_S41_G01_00_028_2'];
        }

        if (\array_key_exists('bETA_S41_G01_00_028_3', $data) && \is_int($data['bETA_S41_G01_00_028_3'])) {
            $data['bETA_S41_G01_00_028_3'] = (bool) $data['bETA_S41_G01_00_028_3'];
        }

        if (\array_key_exists('bETA_S41_G01_00_028_4', $data) && \is_int($data['bETA_S41_G01_00_028_4'])) {
            $data['bETA_S41_G01_00_028_4'] = (bool) $data['bETA_S41_G01_00_028_4'];
        }

        if (\array_key_exists('bETA_S41_G01_00_028_5', $data) && \is_int($data['bETA_S41_G01_00_028_5'])) {
            $data['bETA_S41_G01_00_028_5'] = (bool) $data['bETA_S41_G01_00_028_5'];
        }

        if (\array_key_exists('bETA_S41_G01_00_028_6', $data) && \is_int($data['bETA_S41_G01_00_028_6'])) {
            $data['bETA_S41_G01_00_028_6'] = (bool) $data['bETA_S41_G01_00_028_6'];
        }

        if (\array_key_exists('bETA_S41_G01_00_028_7', $data) && \is_int($data['bETA_S41_G01_00_028_7'])) {
            $data['bETA_S41_G01_00_028_7'] = (bool) $data['bETA_S41_G01_00_028_7'];
        }

        if (\array_key_exists('bETA_SaisieManuelleHeuresAbsences', $data) && \is_int($data['bETA_SaisieManuelleHeuresAbsences'])) {
            $data['bETA_SaisieManuelleHeuresAbsences'] = (bool) $data['bETA_SaisieManuelleHeuresAbsences'];
        }

        if (\array_key_exists('etA_SaisieManuelleHeuresAbsences', $data) && \is_int($data['etA_SaisieManuelleHeuresAbsences'])) {
            $data['etA_SaisieManuelleHeuresAbsences'] = (bool) $data['etA_SaisieManuelleHeuresAbsences'];
        }

        if (\array_key_exists('bETA_SoumisTaxeAppr', $data) && \is_int($data['bETA_SoumisTaxeAppr'])) {
            $data['bETA_SoumisTaxeAppr'] = (bool) $data['bETA_SoumisTaxeAppr'];
        }

        if (\array_key_exists('etA_SoumisTaxeAppr', $data) && \is_int($data['etA_SoumisTaxeAppr'])) {
            $data['etA_SoumisTaxeAppr'] = (bool) $data['etA_SoumisTaxeAppr'];
        }

        if (\array_key_exists('bETA_SoumisTaxeApprAvecMajoration', $data) && \is_int($data['bETA_SoumisTaxeApprAvecMajoration'])) {
            $data['bETA_SoumisTaxeApprAvecMajoration'] = (bool) $data['bETA_SoumisTaxeApprAvecMajoration'];
        }

        if (\array_key_exists('etA_SoumisTaxeApprAvecMajoration', $data) && \is_int($data['etA_SoumisTaxeApprAvecMajoration'])) {
            $data['etA_SoumisTaxeApprAvecMajoration'] = (bool) $data['etA_SoumisTaxeApprAvecMajoration'];
        }

        if (\array_key_exists('bETA_SoumisTaxeSalaires', $data) && \is_int($data['bETA_SoumisTaxeSalaires'])) {
            $data['bETA_SoumisTaxeSalaires'] = (bool) $data['bETA_SoumisTaxeSalaires'];
        }

        if (\array_key_exists('etA_SoumisTaxeSalaires', $data) && \is_int($data['etA_SoumisTaxeSalaires'])) {
            $data['etA_SoumisTaxeSalaires'] = (bool) $data['etA_SoumisTaxeSalaires'];
        }

        if (\array_key_exists('bETA_SoumisTaxeSalairesPctImp', $data) && \is_int($data['bETA_SoumisTaxeSalairesPctImp'])) {
            $data['bETA_SoumisTaxeSalairesPctImp'] = (bool) $data['bETA_SoumisTaxeSalairesPctImp'];
        }

        if (\array_key_exists('bETA_SousMethodeSuiviAbsences', $data) && \is_int($data['bETA_SousMethodeSuiviAbsences'])) {
            $data['bETA_SousMethodeSuiviAbsences'] = (bool) $data['bETA_SousMethodeSuiviAbsences'];
        }

        if (\array_key_exists('bETA_SousMethodeSuiviAbsencesFJ', $data) && \is_int($data['bETA_SousMethodeSuiviAbsencesFJ'])) {
            $data['bETA_SousMethodeSuiviAbsencesFJ'] = (bool) $data['bETA_SousMethodeSuiviAbsencesFJ'];
        }

        if (\array_key_exists('bETA_Subrogation', $data) && \is_int($data['bETA_Subrogation'])) {
            $data['bETA_Subrogation'] = (bool) $data['bETA_Subrogation'];
        }

        if (\array_key_exists('etA_Subrogation', $data) && \is_int($data['etA_Subrogation'])) {
            $data['etA_Subrogation'] = (bool) $data['etA_Subrogation'];
        }

        if (\array_key_exists('bETA_SubrogationVersEtaPrincipal', $data) && \is_int($data['bETA_SubrogationVersEtaPrincipal'])) {
            $data['bETA_SubrogationVersEtaPrincipal'] = (bool) $data['bETA_SubrogationVersEtaPrincipal'];
        }

        if (\array_key_exists('etA_SubrogationVersEtaPrincipal', $data) && \is_int($data['etA_SubrogationVersEtaPrincipal'])) {
            $data['etA_SubrogationVersEtaPrincipal'] = (bool) $data['etA_SubrogationVersEtaPrincipal'];
        }

        if (\array_key_exists('bETA_TassageAbsencesJours', $data) && \is_int($data['bETA_TassageAbsencesJours'])) {
            $data['bETA_TassageAbsencesJours'] = (bool) $data['bETA_TassageAbsencesJours'];
        }

        if (\array_key_exists('bETA_TauxVersementTrs', $data) && \is_int($data['bETA_TauxVersementTrs'])) {
            $data['bETA_TauxVersementTrs'] = (bool) $data['bETA_TauxVersementTrs'];
        }

        if (\array_key_exists('bETA_TaxeSalairesAbattement', $data) && \is_int($data['bETA_TaxeSalairesAbattement'])) {
            $data['bETA_TaxeSalairesAbattement'] = (bool) $data['bETA_TaxeSalairesAbattement'];
        }

        if (\array_key_exists('etA_TaxeSalairesAbattement', $data) && \is_int($data['etA_TaxeSalairesAbattement'])) {
            $data['etA_TaxeSalairesAbattement'] = (bool) $data['etA_TaxeSalairesAbattement'];
        }

        if (\array_key_exists('bETA_TaxeSalairesSurSeuilsAnnuel', $data) && \is_int($data['bETA_TaxeSalairesSurSeuilsAnnuel'])) {
            $data['bETA_TaxeSalairesSurSeuilsAnnuel'] = (bool) $data['bETA_TaxeSalairesSurSeuilsAnnuel'];
        }

        if (\array_key_exists('etA_TaxeSalairesSurSeuilsAnnuel', $data) && \is_int($data['etA_TaxeSalairesSurSeuilsAnnuel'])) {
            $data['etA_TaxeSalairesSurSeuilsAnnuel'] = (bool) $data['etA_TaxeSalairesSurSeuilsAnnuel'];
        }

        if (\array_key_exists('bETA_TitresTrs', $data) && \is_int($data['bETA_TitresTrs'])) {
            $data['bETA_TitresTrs'] = (bool) $data['bETA_TitresTrs'];
        }

        if (\array_key_exists('etA_TitresTrs', $data) && \is_int($data['etA_TitresTrs'])) {
            $data['etA_TitresTrs'] = (bool) $data['etA_TitresTrs'];
        }

        if (\array_key_exists('bETA_TResto', $data) && \is_int($data['bETA_TResto'])) {
            $data['bETA_TResto'] = (bool) $data['bETA_TResto'];
        }

        if (\array_key_exists('etA_TResto', $data) && \is_int($data['etA_TResto'])) {
            $data['etA_TResto'] = (bool) $data['etA_TResto'];
        }

        if (\array_key_exists('bETA_TRestoNomVariable', $data) && \is_int($data['bETA_TRestoNomVariable'])) {
            $data['bETA_TRestoNomVariable'] = (bool) $data['bETA_TRestoNomVariable'];
        }

        if (\array_key_exists('bETA_TRestoPartSalariale', $data) && \is_int($data['bETA_TRestoPartSalariale'])) {
            $data['bETA_TRestoPartSalariale'] = (bool) $data['bETA_TRestoPartSalariale'];
        }

        if (\array_key_exists('bETA_TypeAcquisitionDIF', $data) && \is_int($data['bETA_TypeAcquisitionDIF'])) {
            $data['bETA_TypeAcquisitionDIF'] = (bool) $data['bETA_TypeAcquisitionDIF'];
        }

        if (\array_key_exists('bETA_VTACodeRegion', $data) && \is_int($data['bETA_VTACodeRegion'])) {
            $data['bETA_VTACodeRegion'] = (bool) $data['bETA_VTACodeRegion'];
        }

        if (\array_key_exists('bETA_VTATaux', $data) && \is_int($data['bETA_VTATaux'])) {
            $data['bETA_VTATaux'] = (bool) $data['bETA_VTATaux'];
        }

        if (\array_key_exists('bETA_VTrsAuto', $data) && \is_int($data['bETA_VTrsAuto'])) {
            $data['bETA_VTrsAuto'] = (bool) $data['bETA_VTrsAuto'];
        }

        if (\array_key_exists('etA_VTrsAuto', $data) && \is_int($data['etA_VTrsAuto'])) {
            $data['etA_VTrsAuto'] = (bool) $data['etA_VTrsAuto'];
        }

        if (\array_key_exists('bINT_BTQC', $data) && \is_int($data['bINT_BTQC'])) {
            $data['bINT_BTQC'] = (bool) $data['bINT_BTQC'];
        }

        if (\array_key_exists('bINT_Civilite', $data) && \is_int($data['bINT_Civilite'])) {
            $data['bINT_Civilite'] = (bool) $data['bINT_Civilite'];
        }

        if (\array_key_exists('bINT_CodePostal', $data) && \is_int($data['bINT_CodePostal'])) {
            $data['bINT_CodePostal'] = (bool) $data['bINT_CodePostal'];
        }

        if (\array_key_exists('bINT_CodePostalJF', $data) && \is_int($data['bINT_CodePostalJF'])) {
            $data['bINT_CodePostalJF'] = (bool) $data['bINT_CodePostalJF'];
        }

        if (\array_key_exists('bINT_Commune', $data) && \is_int($data['bINT_Commune'])) {
            $data['bINT_Commune'] = (bool) $data['bINT_Commune'];
        }

        if (\array_key_exists('bINT_CommuneINSEE', $data) && \is_int($data['bINT_CommuneINSEE'])) {
            $data['bINT_CommuneINSEE'] = (bool) $data['bINT_CommuneINSEE'];
        }

        if (\array_key_exists('bINT_ComplementAdresse', $data) && \is_int($data['bINT_ComplementAdresse'])) {
            $data['bINT_ComplementAdresse'] = (bool) $data['bINT_ComplementAdresse'];
        }

        if (\array_key_exists('bINT_DateDeces', $data) && \is_int($data['bINT_DateDeces'])) {
            $data['bINT_DateDeces'] = (bool) $data['bINT_DateDeces'];
        }

        if (\array_key_exists('bINT_DateNaissance', $data) && \is_int($data['bINT_DateNaissance'])) {
            $data['bINT_DateNaissance'] = (bool) $data['bINT_DateNaissance'];
        }

        if (\array_key_exists('bINT_Enseigne', $data) && \is_int($data['bINT_Enseigne'])) {
            $data['bINT_Enseigne'] = (bool) $data['bINT_Enseigne'];
        }

        if (\array_key_exists('bINT_Fax', $data) && \is_int($data['bINT_Fax'])) {
            $data['bINT_Fax'] = (bool) $data['bINT_Fax'];
        }

        if (\array_key_exists('bINT_FormeJuridique', $data) && \is_int($data['bINT_FormeJuridique'])) {
            $data['bINT_FormeJuridique'] = (bool) $data['bINT_FormeJuridique'];
        }

        if (\array_key_exists('bINT_Mel', $data) && \is_int($data['bINT_Mel'])) {
            $data['bINT_Mel'] = (bool) $data['bINT_Mel'];
        }

        if (\array_key_exists('bINT_NAF', $data) && \is_int($data['bINT_NAF'])) {
            $data['bINT_NAF'] = (bool) $data['bINT_NAF'];
        }

        if (\array_key_exists('bINT_NomPays', $data) && \is_int($data['bINT_NomPays'])) {
            $data['bINT_NomPays'] = (bool) $data['bINT_NomPays'];
        }

        if (\array_key_exists('bINT_NomUsuel', $data) && \is_int($data['bINT_NomUsuel'])) {
            $data['bINT_NomUsuel'] = (bool) $data['bINT_NomUsuel'];
        }

        if (\array_key_exists('bINT_NomVille', $data) && \is_int($data['bINT_NomVille'])) {
            $data['bINT_NomVille'] = (bool) $data['bINT_NomVille'];
        }

        if (\array_key_exists('bINT_NomVoie', $data) && \is_int($data['bINT_NomVoie'])) {
            $data['bINT_NomVoie'] = (bool) $data['bINT_NomVoie'];
        }

        if (\array_key_exists('bINT_NumVoie', $data) && \is_int($data['bINT_NumVoie'])) {
            $data['bINT_NumVoie'] = (bool) $data['bINT_NumVoie'];
        }

        if (\array_key_exists('bINT_PaysISO', $data) && \is_int($data['bINT_PaysISO'])) {
            $data['bINT_PaysISO'] = (bool) $data['bINT_PaysISO'];
        }

        if (\array_key_exists('bINT_PaysISOJF', $data) && \is_int($data['bINT_PaysISOJF'])) {
            $data['bINT_PaysISOJF'] = (bool) $data['bINT_PaysISOJF'];
        }

        if (\array_key_exists('bINT_Prenom', $data) && \is_int($data['bINT_Prenom'])) {
            $data['bINT_Prenom'] = (bool) $data['bINT_Prenom'];
        }

        if (\array_key_exists('bINT_RaisonSociale', $data) && \is_int($data['bINT_RaisonSociale'])) {
            $data['bINT_RaisonSociale'] = (bool) $data['bINT_RaisonSociale'];
        }

        if (\array_key_exists('bINT_Siret', $data) && \is_int($data['bINT_Siret'])) {
            $data['bINT_Siret'] = (bool) $data['bINT_Siret'];
        }

        if (\array_key_exists('bINT_SiteWeb', $data) && \is_int($data['bINT_SiteWeb'])) {
            $data['bINT_SiteWeb'] = (bool) $data['bINT_SiteWeb'];
        }

        if (\array_key_exists('bINT_TelBureau', $data) && \is_int($data['bINT_TelBureau'])) {
            $data['bINT_TelBureau'] = (bool) $data['bINT_TelBureau'];
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
            $object->setEtAExoJEIDateDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['etA_ExoJEIDateDebut']));
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
            $object->setEtAPeriodeRegulTauxAT1(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['etA_PeriodeRegulTauxAT_1']));
        } elseif (\array_key_exists('etA_PeriodeRegulTauxAT_1', $data) && null === $data['etA_PeriodeRegulTauxAT_1']) {
            $object->setEtAPeriodeRegulTauxAT1(null);
        }

        if (\array_key_exists('bETA_PeriodeRegulTauxAT_2', $data) && null !== $data['bETA_PeriodeRegulTauxAT_2']) {
            $object->setBETAPeriodeRegulTauxAT2($data['bETA_PeriodeRegulTauxAT_2']);
        } elseif (\array_key_exists('bETA_PeriodeRegulTauxAT_2', $data) && null === $data['bETA_PeriodeRegulTauxAT_2']) {
            $object->setBETAPeriodeRegulTauxAT2(null);
        }

        if (\array_key_exists('etA_PeriodeRegulTauxAT_2', $data) && null !== $data['etA_PeriodeRegulTauxAT_2']) {
            $object->setEtAPeriodeRegulTauxAT2(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['etA_PeriodeRegulTauxAT_2']));
        } elseif (\array_key_exists('etA_PeriodeRegulTauxAT_2', $data) && null === $data['etA_PeriodeRegulTauxAT_2']) {
            $object->setEtAPeriodeRegulTauxAT2(null);
        }

        if (\array_key_exists('bETA_PeriodeRegulTauxAT_3', $data) && null !== $data['bETA_PeriodeRegulTauxAT_3']) {
            $object->setBETAPeriodeRegulTauxAT3($data['bETA_PeriodeRegulTauxAT_3']);
        } elseif (\array_key_exists('bETA_PeriodeRegulTauxAT_3', $data) && null === $data['bETA_PeriodeRegulTauxAT_3']) {
            $object->setBETAPeriodeRegulTauxAT3(null);
        }

        if (\array_key_exists('etA_PeriodeRegulTauxAT_3', $data) && null !== $data['etA_PeriodeRegulTauxAT_3']) {
            $object->setEtAPeriodeRegulTauxAT3(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['etA_PeriodeRegulTauxAT_3']));
        } elseif (\array_key_exists('etA_PeriodeRegulTauxAT_3', $data) && null === $data['etA_PeriodeRegulTauxAT_3']) {
            $object->setEtAPeriodeRegulTauxAT3(null);
        }

        if (\array_key_exists('bETA_PeriodeRegulTauxAT_4', $data) && null !== $data['bETA_PeriodeRegulTauxAT_4']) {
            $object->setBETAPeriodeRegulTauxAT4($data['bETA_PeriodeRegulTauxAT_4']);
        } elseif (\array_key_exists('bETA_PeriodeRegulTauxAT_4', $data) && null === $data['bETA_PeriodeRegulTauxAT_4']) {
            $object->setBETAPeriodeRegulTauxAT4(null);
        }

        if (\array_key_exists('etA_PeriodeRegulTauxAT_4', $data) && null !== $data['etA_PeriodeRegulTauxAT_4']) {
            $object->setEtAPeriodeRegulTauxAT4(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['etA_PeriodeRegulTauxAT_4']));
        } elseif (\array_key_exists('etA_PeriodeRegulTauxAT_4', $data) && null === $data['etA_PeriodeRegulTauxAT_4']) {
            $object->setEtAPeriodeRegulTauxAT4(null);
        }

        if (\array_key_exists('bETA_PeriodeRegulTauxAT_5', $data) && null !== $data['bETA_PeriodeRegulTauxAT_5']) {
            $object->setBETAPeriodeRegulTauxAT5($data['bETA_PeriodeRegulTauxAT_5']);
        } elseif (\array_key_exists('bETA_PeriodeRegulTauxAT_5', $data) && null === $data['bETA_PeriodeRegulTauxAT_5']) {
            $object->setBETAPeriodeRegulTauxAT5(null);
        }

        if (\array_key_exists('etA_PeriodeRegulTauxAT_5', $data) && null !== $data['etA_PeriodeRegulTauxAT_5']) {
            $object->setEtAPeriodeRegulTauxAT5(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['etA_PeriodeRegulTauxAT_5']));
        } elseif (\array_key_exists('etA_PeriodeRegulTauxAT_5', $data) && null === $data['etA_PeriodeRegulTauxAT_5']) {
            $object->setEtAPeriodeRegulTauxAT5(null);
        }

        if (\array_key_exists('bETA_PeriodeRegulTauxAT_6', $data) && null !== $data['bETA_PeriodeRegulTauxAT_6']) {
            $object->setBETAPeriodeRegulTauxAT6($data['bETA_PeriodeRegulTauxAT_6']);
        } elseif (\array_key_exists('bETA_PeriodeRegulTauxAT_6', $data) && null === $data['bETA_PeriodeRegulTauxAT_6']) {
            $object->setBETAPeriodeRegulTauxAT6(null);
        }

        if (\array_key_exists('etA_PeriodeRegulTauxAT_6', $data) && null !== $data['etA_PeriodeRegulTauxAT_6']) {
            $object->setEtAPeriodeRegulTauxAT6(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['etA_PeriodeRegulTauxAT_6']));
        } elseif (\array_key_exists('etA_PeriodeRegulTauxAT_6', $data) && null === $data['etA_PeriodeRegulTauxAT_6']) {
            $object->setEtAPeriodeRegulTauxAT6(null);
        }

        if (\array_key_exists('bETA_PeriodeRegulTauxAT_7', $data) && null !== $data['bETA_PeriodeRegulTauxAT_7']) {
            $object->setBETAPeriodeRegulTauxAT7($data['bETA_PeriodeRegulTauxAT_7']);
        } elseif (\array_key_exists('bETA_PeriodeRegulTauxAT_7', $data) && null === $data['bETA_PeriodeRegulTauxAT_7']) {
            $object->setBETAPeriodeRegulTauxAT7(null);
        }

        if (\array_key_exists('etA_PeriodeRegulTauxAT_7', $data) && null !== $data['etA_PeriodeRegulTauxAT_7']) {
            $object->setEtAPeriodeRegulTauxAT7(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['etA_PeriodeRegulTauxAT_7']));
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
            $object->setInTDateDeces(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['inT_DateDeces']));
        } elseif (\array_key_exists('inT_DateDeces', $data) && null === $data['inT_DateDeces']) {
            $object->setInTDateDeces(null);
        }

        if (\array_key_exists('bINT_DateNaissance', $data) && null !== $data['bINT_DateNaissance']) {
            $object->setBINTDateNaissance($data['bINT_DateNaissance']);
        } elseif (\array_key_exists('bINT_DateNaissance', $data) && null === $data['bINT_DateNaissance']) {
            $object->setBINTDateNaissance(null);
        }

        if (\array_key_exists('inT_DateNaissance', $data) && null !== $data['inT_DateNaissance']) {
            $object->setInTDateNaissance(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['inT_DateNaissance']));
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('bETAAcquisitionHeuresDIF') && null !== $data->getBETAAcquisitionHeuresDIF()) {
            $dataArray['bETA_AcquisitionHeuresDIF'] = $data->getBETAAcquisitionHeuresDIF();
        }

        if ($data->isInitialized('etAAcquisitionHeuresDIF') && null !== $data->getEtAAcquisitionHeuresDIF()) {
            $dataArray['etA_AcquisitionHeuresDIF'] = $data->getEtAAcquisitionHeuresDIF();
        }

        if ($data->isInitialized('bETAAssimiliesCadresPrevoyanceNonCadre') && null !== $data->getBETAAssimiliesCadresPrevoyanceNonCadre()) {
            $dataArray['bETA_AssimiliesCadresPrevoyanceNonCadre'] = $data->getBETAAssimiliesCadresPrevoyanceNonCadre();
        }

        if ($data->isInitialized('etAAssimiliesCadresPrevoyanceNonCadre') && null !== $data->getEtAAssimiliesCadresPrevoyanceNonCadre()) {
            $dataArray['etA_AssimiliesCadresPrevoyanceNonCadre'] = $data->getEtAAssimiliesCadresPrevoyanceNonCadre();
        }

        if ($data->isInitialized('bETABulletinEditionDIF') && null !== $data->getBETABulletinEditionDIF()) {
            $dataArray['bETA_BulletinEditionDIF'] = $data->getBETABulletinEditionDIF();
        }

        if ($data->isInitialized('etABulletinEditionDIF') && null !== $data->getEtABulletinEditionDIF()) {
            $dataArray['etA_BulletinEditionDIF'] = $data->getEtABulletinEditionDIF();
        }

        if ($data->isInitialized('bETACalcAutoIJSSInactif') && null !== $data->getBETACalcAutoIJSSInactif()) {
            $dataArray['bETA_CalcAutoIJSSInactif'] = $data->getBETACalcAutoIJSSInactif();
        }

        if ($data->isInitialized('etACalcAutoIJSSInactif') && null !== $data->getEtACalcAutoIJSSInactif()) {
            $dataArray['etA_CalcAutoIJSSInactif'] = $data->getEtACalcAutoIJSSInactif();
        }

        if ($data->isInitialized('bETACalcAutoMaintienInactif') && null !== $data->getBETACalcAutoMaintienInactif()) {
            $dataArray['bETA_CalcAutoMaintienInactif'] = $data->getBETACalcAutoMaintienInactif();
        }

        if ($data->isInitialized('etACalcAutoMaintienInactif') && null !== $data->getEtACalcAutoMaintienInactif()) {
            $dataArray['etA_CalcAutoMaintienInactif'] = $data->getEtACalcAutoMaintienInactif();
        }

        if ($data->isInitialized('bETACDDPaiMensIndCP') && null !== $data->getBETACDDPaiMensIndCP()) {
            $dataArray['bETA_CDDPaiMensIndCP'] = $data->getBETACDDPaiMensIndCP();
        }

        if ($data->isInitialized('etACDDPaiMensIndCP') && null !== $data->getEtACDDPaiMensIndCP()) {
            $dataArray['etA_CDDPaiMensIndCP'] = $data->getEtACDDPaiMensIndCP();
        }

        if ($data->isInitialized('bETACDDPaiMensIndPrecarite') && null !== $data->getBETACDDPaiMensIndPrecarite()) {
            $dataArray['bETA_CDDPaiMensIndPrecarite'] = $data->getBETACDDPaiMensIndPrecarite();
        }

        if ($data->isInitialized('etACDDPaiMensIndPrecarite') && null !== $data->getEtACDDPaiMensIndPrecarite()) {
            $dataArray['etA_CDDPaiMensIndPrecarite'] = $data->getEtACDDPaiMensIndPrecarite();
        }

        if ($data->isInitialized('bETAChaineFabricationDateLimiteAbsences') && null !== $data->getBETAChaineFabricationDateLimiteAbsences()) {
            $dataArray['bETA_ChaineFabricationDateLimiteAbsences'] = $data->getBETAChaineFabricationDateLimiteAbsences();
        }

        if ($data->isInitialized('etAChaineFabricationDateLimiteAbsences') && null !== $data->getEtAChaineFabricationDateLimiteAbsences()) {
            $dataArray['etA_ChaineFabricationDateLimiteAbsences'] = $data->getEtAChaineFabricationDateLimiteAbsences();
        }

        if ($data->isInitialized('bETAClotureCPArrondiInactif') && null !== $data->getBETAClotureCPArrondiInactif()) {
            $dataArray['bETA_ClotureCPArrondiInactif'] = $data->getBETAClotureCPArrondiInactif();
        }

        if ($data->isInitialized('etAClotureCPArrondiInactif') && null !== $data->getEtAClotureCPArrondiInactif()) {
            $dataArray['etA_ClotureCPArrondiInactif'] = $data->getEtAClotureCPArrondiInactif();
        }

        if ($data->isInitialized('bETAClotureCPReport') && null !== $data->getBETAClotureCPReport()) {
            $dataArray['bETA_ClotureCPReport'] = $data->getBETAClotureCPReport();
        }

        if ($data->isInitialized('etAClotureCPReport') && null !== $data->getEtAClotureCPReport()) {
            $dataArray['etA_ClotureCPReport'] = $data->getEtAClotureCPReport();
        }

        if ($data->isInitialized('bETAClotureRTTReport') && null !== $data->getBETAClotureRTTReport()) {
            $dataArray['bETA_ClotureRTTReport'] = $data->getBETAClotureRTTReport();
        }

        if ($data->isInitialized('etAClotureRTTReport') && null !== $data->getEtAClotureRTTReport()) {
            $dataArray['etA_ClotureRTTReport'] = $data->getEtAClotureRTTReport();
        }

        if ($data->isInitialized('bETACodeBTAPEMSA') && null !== $data->getBETACodeBTAPEMSA()) {
            $dataArray['bETA_CodeBTAPEMSA'] = $data->getBETACodeBTAPEMSA();
        }

        if ($data->isInitialized('etACodeBTAPEMSA') && null !== $data->getEtACodeBTAPEMSA()) {
            $dataArray['etA_CodeBTAPEMSA'] = $data->getEtACodeBTAPEMSA();
        }

        if ($data->isInitialized('bETACodeRegion') && null !== $data->getBETACodeRegion()) {
            $dataArray['bETA_CodeRegion'] = $data->getBETACodeRegion();
        }

        if ($data->isInitialized('etACodeRegion') && null !== $data->getEtACodeRegion()) {
            $dataArray['etA_CodeRegion'] = $data->getEtACodeRegion();
        }

        if ($data->isInitialized('bETADadsInactive') && null !== $data->getBETADadsInactive()) {
            $dataArray['bETA_DadsInactive'] = $data->getBETADadsInactive();
        }

        if ($data->isInitialized('etADadsInactive') && null !== $data->getEtADadsInactive()) {
            $dataArray['etA_DadsInactive'] = $data->getEtADadsInactive();
        }

        if ($data->isInitialized('bETADecalageActiviteJournaliere') && null !== $data->getBETADecalageActiviteJournaliere()) {
            $dataArray['bETA_DecalageActiviteJournaliere'] = $data->getBETADecalageActiviteJournaliere();
        }

        if ($data->isInitialized('etADecalageActiviteJournaliere') && null !== $data->getEtADecalageActiviteJournaliere()) {
            $dataArray['etA_DecalageActiviteJournaliere'] = $data->getEtADecalageActiviteJournaliere();
        }

        if ($data->isInitialized('bETADecoupageActiviteJournaliere') && null !== $data->getBETADecoupageActiviteJournaliere()) {
            $dataArray['bETA_DecoupageActiviteJournaliere'] = $data->getBETADecoupageActiviteJournaliere();
        }

        if ($data->isInitialized('etADecoupageActiviteJournaliere') && null !== $data->getEtADecoupageActiviteJournaliere()) {
            $dataArray['etA_DecoupageActiviteJournaliere'] = $data->getEtADecoupageActiviteJournaliere();
        }

        if ($data->isInitialized('bETADureeHebdo') && null !== $data->getBETADureeHebdo()) {
            $dataArray['bETA_DureeHebdo'] = $data->getBETADureeHebdo();
        }

        if ($data->isInitialized('etADureeHebdo') && null !== $data->getEtADureeHebdo()) {
            $dataArray['etA_DureeHebdo'] = $data->getEtADureeHebdo();
        }

        if ($data->isInitialized('bETAEmployeurCivilite') && null !== $data->getBETAEmployeurCivilite()) {
            $dataArray['bETA_EmployeurCivilite'] = $data->getBETAEmployeurCivilite();
        }

        if ($data->isInitialized('etAEmployeurCivilite') && null !== $data->getEtAEmployeurCivilite()) {
            $dataArray['etA_EmployeurCivilite'] = $data->getEtAEmployeurCivilite();
        }

        if ($data->isInitialized('bETAEmployeurNom') && null !== $data->getBETAEmployeurNom()) {
            $dataArray['bETA_EmployeurNom'] = $data->getBETAEmployeurNom();
        }

        if ($data->isInitialized('etAEmployeurNom') && null !== $data->getEtAEmployeurNom()) {
            $dataArray['etA_EmployeurNom'] = $data->getEtAEmployeurNom();
        }

        if ($data->isInitialized('bETAEmployeurPrenom') && null !== $data->getBETAEmployeurPrenom()) {
            $dataArray['bETA_EmployeurPrenom'] = $data->getBETAEmployeurPrenom();
        }

        if ($data->isInitialized('etAEmployeurPrenom') && null !== $data->getEtAEmployeurPrenom()) {
            $dataArray['etA_EmployeurPrenom'] = $data->getEtAEmployeurPrenom();
        }

        if ($data->isInitialized('bETAEmployeurQualite') && null !== $data->getBETAEmployeurQualite()) {
            $dataArray['bETA_EmployeurQualite'] = $data->getBETAEmployeurQualite();
        }

        if ($data->isInitialized('etAEmployeurQualite') && null !== $data->getEtAEmployeurQualite()) {
            $dataArray['etA_EmployeurQualite'] = $data->getEtAEmployeurQualite();
        }

        if ($data->isInitialized('bETAEmployeurQualiteAutre') && null !== $data->getBETAEmployeurQualiteAutre()) {
            $dataArray['bETA_EmployeurQualiteAutre'] = $data->getBETAEmployeurQualiteAutre();
        }

        if ($data->isInitialized('etAEmployeurQualiteAutre') && null !== $data->getEtAEmployeurQualiteAutre()) {
            $dataArray['etA_EmployeurQualiteAutre'] = $data->getEtAEmployeurQualiteAutre();
        }

        if ($data->isInitialized('bETAExoJEIDateDebut') && null !== $data->getBETAExoJEIDateDebut()) {
            $dataArray['bETA_ExoJEIDateDebut'] = $data->getBETAExoJEIDateDebut();
        }

        if ($data->isInitialized('etAExoJEIDateDebut') && null !== $data->getEtAExoJEIDateDebut()) {
            $dataArray['etA_ExoJEIDateDebut'] = $data->getEtAExoJEIDateDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bETAForceDroitCICE') && null !== $data->getBETAForceDroitCICE()) {
            $dataArray['bETA_ForceDroitCICE'] = $data->getBETAForceDroitCICE();
        }

        if ($data->isInitialized('etAForceDroitCICE') && null !== $data->getEtAForceDroitCICE()) {
            $dataArray['etA_ForceDroitCICE'] = $data->getEtAForceDroitCICE();
        }

        if ($data->isInitialized('bETAFractionnementCP') && null !== $data->getBETAFractionnementCP()) {
            $dataArray['bETA_FractionnementCP'] = $data->getBETAFractionnementCP();
        }

        if ($data->isInitialized('etAFractionnementCP') && null !== $data->getEtAFractionnementCP()) {
            $dataArray['etA_FractionnementCP'] = $data->getEtAFractionnementCP();
        }

        if ($data->isInitialized('bETAFractionnementCPMoisCalcSpe') && null !== $data->getBETAFractionnementCPMoisCalcSpe()) {
            $dataArray['bETA_FractionnementCPMoisCalcSpe'] = $data->getBETAFractionnementCPMoisCalcSpe();
        }

        if ($data->isInitialized('etAFractionnementCPMoisCalcSpe') && null !== $data->getEtAFractionnementCPMoisCalcSpe()) {
            $dataArray['etA_FractionnementCPMoisCalcSpe'] = $data->getEtAFractionnementCPMoisCalcSpe();
        }

        if ($data->isInitialized('bETAFractionnementCPMoisDebut') && null !== $data->getBETAFractionnementCPMoisDebut()) {
            $dataArray['bETA_FractionnementCPMoisDebut'] = $data->getBETAFractionnementCPMoisDebut();
        }

        if ($data->isInitialized('etAFractionnementCPMoisDebut') && null !== $data->getEtAFractionnementCPMoisDebut()) {
            $dataArray['etA_FractionnementCPMoisDebut'] = $data->getEtAFractionnementCPMoisDebut();
        }

        if ($data->isInitialized('bETAFractionnementCPMoisFin') && null !== $data->getBETAFractionnementCPMoisFin()) {
            $dataArray['bETA_FractionnementCPMoisFin'] = $data->getBETAFractionnementCPMoisFin();
        }

        if ($data->isInitialized('etAFractionnementCPMoisFin') && null !== $data->getEtAFractionnementCPMoisFin()) {
            $dataArray['etA_FractionnementCPMoisFin'] = $data->getEtAFractionnementCPMoisFin();
        }

        if ($data->isInitialized('bETAFSConserverCondAnc') && null !== $data->getBETAFSConserverCondAnc()) {
            $dataArray['bETA_FSConserverCondAnc'] = $data->getBETAFSConserverCondAnc();
        }

        if ($data->isInitialized('etAFSConserverCondAnc') && null !== $data->getEtAFSConserverCondAnc()) {
            $dataArray['etA_FSConserverCondAnc'] = $data->getEtAFSConserverCondAnc();
        }

        if ($data->isInitialized('bETAFSMethode') && null !== $data->getBETAFSMethode()) {
            $dataArray['bETA_FSMethode'] = $data->getBETAFSMethode();
        }

        if ($data->isInitialized('etAFSMethode') && null !== $data->getEtAFSMethode()) {
            $dataArray['etA_FSMethode'] = $data->getEtAFSMethode();
        }

        if ($data->isInitialized('bETAGestionCPExclEnJours') && null !== $data->getBETAGestionCPExclEnJours()) {
            $dataArray['bETA_GestionCPExclEnJours'] = $data->getBETAGestionCPExclEnJours();
        }

        if ($data->isInitialized('etAGestionCPExclEnJours') && null !== $data->getEtAGestionCPExclEnJours()) {
            $dataArray['etA_GestionCPExclEnJours'] = $data->getEtAGestionCPExclEnJours();
        }

        if ($data->isInitialized('bETAJourDebSemActiviteJournaliere') && null !== $data->getBETAJourDebSemActiviteJournaliere()) {
            $dataArray['bETA_JourDebSemActiviteJournaliere'] = $data->getBETAJourDebSemActiviteJournaliere();
        }

        if ($data->isInitialized('etAJourDebSemActiviteJournaliere') && null !== $data->getEtAJourDebSemActiviteJournaliere()) {
            $dataArray['etA_JourDebSemActiviteJournaliere'] = $data->getEtAJourDebSemActiviteJournaliere();
        }

        if ($data->isInitialized('bETAJourneeSolidarite') && null !== $data->getBETAJourneeSolidarite()) {
            $dataArray['bETA_JourneeSolidarite'] = $data->getBETAJourneeSolidarite();
        }

        if ($data->isInitialized('etAJourneeSolidarite') && null !== $data->getEtAJourneeSolidarite()) {
            $dataArray['etA_JourneeSolidarite'] = $data->getEtAJourneeSolidarite();
        }

        if ($data->isInitialized('bETAJoursFeriesTravailles') && null !== $data->getBETAJoursFeriesTravailles()) {
            $dataArray['bETA_JoursFeriesTravailles'] = $data->getBETAJoursFeriesTravailles();
        }

        if ($data->isInitialized('etAJoursFeriesTravailles') && null !== $data->getEtAJoursFeriesTravailles()) {
            $dataArray['etA_JoursFeriesTravailles'] = $data->getEtAJoursFeriesTravailles();
        }

        if ($data->isInitialized('bETAMethodeArbitrage') && null !== $data->getBETAMethodeArbitrage()) {
            $dataArray['bETA_MethodeArbitrage'] = $data->getBETAMethodeArbitrage();
        }

        if ($data->isInitialized('etAMethodeArbitrage') && null !== $data->getEtAMethodeArbitrage()) {
            $dataArray['etA_MethodeArbitrage'] = $data->getEtAMethodeArbitrage();
        }

        if ($data->isInitialized('bETAMethodeCalculMaintien') && null !== $data->getBETAMethodeCalculMaintien()) {
            $dataArray['bETA_MethodeCalculMaintien'] = $data->getBETAMethodeCalculMaintien();
        }

        if ($data->isInitialized('etAMethodeCalculMaintien') && null !== $data->getEtAMethodeCalculMaintien()) {
            $dataArray['etA_MethodeCalculMaintien'] = $data->getEtAMethodeCalculMaintien();
        }

        if ($data->isInitialized('bETAMethodeCalculMaintienNbM') && null !== $data->getBETAMethodeCalculMaintienNbM()) {
            $dataArray['bETA_MethodeCalculMaintienNbM'] = $data->getBETAMethodeCalculMaintienNbM();
        }

        if ($data->isInitialized('etAMethodeCalculMaintienNbM') && null !== $data->getEtAMethodeCalculMaintienNbM()) {
            $dataArray['etA_MethodeCalculMaintienNbM'] = $data->getEtAMethodeCalculMaintienNbM();
        }

        if ($data->isInitialized('bETAMethodeRetenueCP') && null !== $data->getBETAMethodeRetenueCP()) {
            $dataArray['bETA_MethodeRetenueCP'] = $data->getBETAMethodeRetenueCP();
        }

        if ($data->isInitialized('etAMethodeRetenueCP') && null !== $data->getEtAMethodeRetenueCP()) {
            $dataArray['etA_MethodeRetenueCP'] = $data->getEtAMethodeRetenueCP();
        }

        if ($data->isInitialized('bETAMethodeSuiviAbsences') && null !== $data->getBETAMethodeSuiviAbsences()) {
            $dataArray['bETA_MethodeSuiviAbsences'] = $data->getBETAMethodeSuiviAbsences();
        }

        if ($data->isInitialized('etAMethodeSuiviAbsences') && null !== $data->getEtAMethodeSuiviAbsences()) {
            $dataArray['etA_MethodeSuiviAbsences'] = $data->getEtAMethodeSuiviAbsences();
        }

        if ($data->isInitialized('bETAMethodeSuiviAbsencesDeductionHM') && null !== $data->getBETAMethodeSuiviAbsencesDeductionHM()) {
            $dataArray['bETA_MethodeSuiviAbsencesDeductionHM'] = $data->getBETAMethodeSuiviAbsencesDeductionHM();
        }

        if ($data->isInitialized('etAMethodeSuiviAbsencesDeductionHM') && null !== $data->getEtAMethodeSuiviAbsencesDeductionHM()) {
            $dataArray['etA_MethodeSuiviAbsencesDeductionHM'] = $data->getEtAMethodeSuiviAbsencesDeductionHM();
        }

        if ($data->isInitialized('bETAMethodeSuiviAbsencesJC') && null !== $data->getBETAMethodeSuiviAbsencesJC()) {
            $dataArray['bETA_MethodeSuiviAbsencesJC'] = $data->getBETAMethodeSuiviAbsencesJC();
        }

        if ($data->isInitialized('etAMethodeSuiviAbsencesJC') && null !== $data->getEtAMethodeSuiviAbsencesJC()) {
            $dataArray['etA_MethodeSuiviAbsencesJC'] = $data->getEtAMethodeSuiviAbsencesJC();
        }

        if ($data->isInitialized('bETAMethodeSuiviCP') && null !== $data->getBETAMethodeSuiviCP()) {
            $dataArray['bETA_MethodeSuiviCP'] = $data->getBETAMethodeSuiviCP();
        }

        if ($data->isInitialized('etAMethodeSuiviCP') && null !== $data->getEtAMethodeSuiviCP()) {
            $dataArray['etA_MethodeSuiviCP'] = $data->getEtAMethodeSuiviCP();
        }

        if ($data->isInitialized('bETAMethodeSuiviCPAcqMois') && null !== $data->getBETAMethodeSuiviCPAcqMois()) {
            $dataArray['bETA_MethodeSuiviCPAcqMois'] = $data->getBETAMethodeSuiviCPAcqMois();
        }

        if ($data->isInitialized('etAMethodeSuiviCPAcqMois') && null !== $data->getEtAMethodeSuiviCPAcqMois()) {
            $dataArray['etA_MethodeSuiviCPAcqMois'] = $data->getEtAMethodeSuiviCPAcqMois();
        }

        if ($data->isInitialized('bETAModeSaisieActiviteJournaliere') && null !== $data->getBETAModeSaisieActiviteJournaliere()) {
            $dataArray['bETA_ModeSaisieActiviteJournaliere'] = $data->getBETAModeSaisieActiviteJournaliere();
        }

        if ($data->isInitialized('etAModeSaisieActiviteJournaliere') && null !== $data->getEtAModeSaisieActiviteJournaliere()) {
            $dataArray['etA_ModeSaisieActiviteJournaliere'] = $data->getEtAModeSaisieActiviteJournaliere();
        }

        if ($data->isInitialized('bETAMoisAcquisitionDIF') && null !== $data->getBETAMoisAcquisitionDIF()) {
            $dataArray['bETA_MoisAcquisitionDIF'] = $data->getBETAMoisAcquisitionDIF();
        }

        if ($data->isInitialized('etAMoisAcquisitionDIF') && null !== $data->getEtAMoisAcquisitionDIF()) {
            $dataArray['etA_MoisAcquisitionDIF'] = $data->getEtAMoisAcquisitionDIF();
        }

        if ($data->isInitialized('bETAMoisClotureCP') && null !== $data->getBETAMoisClotureCP()) {
            $dataArray['bETA_MoisClotureCP'] = $data->getBETAMoisClotureCP();
        }

        if ($data->isInitialized('etAMoisClotureCP') && null !== $data->getEtAMoisClotureCP()) {
            $dataArray['etA_MoisClotureCP'] = $data->getEtAMoisClotureCP();
        }

        if ($data->isInitialized('bETAMoisClotureFJ') && null !== $data->getBETAMoisClotureFJ()) {
            $dataArray['bETA_MoisClotureFJ'] = $data->getBETAMoisClotureFJ();
        }

        if ($data->isInitialized('etAMoisClotureFJ') && null !== $data->getEtAMoisClotureFJ()) {
            $dataArray['etA_MoisClotureFJ'] = $data->getEtAMoisClotureFJ();
        }

        if ($data->isInitialized('bETAMoisClotureRepos') && null !== $data->getBETAMoisClotureRepos()) {
            $dataArray['bETA_MoisClotureRepos'] = $data->getBETAMoisClotureRepos();
        }

        if ($data->isInitialized('etAMoisClotureRepos') && null !== $data->getEtAMoisClotureRepos()) {
            $dataArray['etA_MoisClotureRepos'] = $data->getEtAMoisClotureRepos();
        }

        if ($data->isInitialized('bETAMoisClotureRTT') && null !== $data->getBETAMoisClotureRTT()) {
            $dataArray['bETA_MoisClotureRTT'] = $data->getBETAMoisClotureRTT();
        }

        if ($data->isInitialized('etAMoisClotureRTT') && null !== $data->getEtAMoisClotureRTT()) {
            $dataArray['etA_MoisClotureRTT'] = $data->getEtAMoisClotureRTT();
        }

        if ($data->isInitialized('bETANomInterne') && null !== $data->getBETANomInterne()) {
            $dataArray['bETA_NomInterne'] = $data->getBETANomInterne();
        }

        if ($data->isInitialized('etANomInterne') && null !== $data->getEtANomInterne()) {
            $dataArray['etA_NomInterne'] = $data->getEtANomInterne();
        }

        if ($data->isInitialized('bETANonSoumisCVAE') && null !== $data->getBETANonSoumisCVAE()) {
            $dataArray['bETA_NonSoumisCVAE'] = $data->getBETANonSoumisCVAE();
        }

        if ($data->isInitialized('etANonSoumisCVAE') && null !== $data->getEtANonSoumisCVAE()) {
            $dataArray['etA_NonSoumisCVAE'] = $data->getEtANonSoumisCVAE();
        }

        if ($data->isInitialized('bETAPeriodeRegulTauxAT1') && null !== $data->getBETAPeriodeRegulTauxAT1()) {
            $dataArray['bETA_PeriodeRegulTauxAT_1'] = $data->getBETAPeriodeRegulTauxAT1();
        }

        if ($data->isInitialized('etAPeriodeRegulTauxAT1') && null !== $data->getEtAPeriodeRegulTauxAT1()) {
            $dataArray['etA_PeriodeRegulTauxAT_1'] = $data->getEtAPeriodeRegulTauxAT1()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bETAPeriodeRegulTauxAT2') && null !== $data->getBETAPeriodeRegulTauxAT2()) {
            $dataArray['bETA_PeriodeRegulTauxAT_2'] = $data->getBETAPeriodeRegulTauxAT2();
        }

        if ($data->isInitialized('etAPeriodeRegulTauxAT2') && null !== $data->getEtAPeriodeRegulTauxAT2()) {
            $dataArray['etA_PeriodeRegulTauxAT_2'] = $data->getEtAPeriodeRegulTauxAT2()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bETAPeriodeRegulTauxAT3') && null !== $data->getBETAPeriodeRegulTauxAT3()) {
            $dataArray['bETA_PeriodeRegulTauxAT_3'] = $data->getBETAPeriodeRegulTauxAT3();
        }

        if ($data->isInitialized('etAPeriodeRegulTauxAT3') && null !== $data->getEtAPeriodeRegulTauxAT3()) {
            $dataArray['etA_PeriodeRegulTauxAT_3'] = $data->getEtAPeriodeRegulTauxAT3()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bETAPeriodeRegulTauxAT4') && null !== $data->getBETAPeriodeRegulTauxAT4()) {
            $dataArray['bETA_PeriodeRegulTauxAT_4'] = $data->getBETAPeriodeRegulTauxAT4();
        }

        if ($data->isInitialized('etAPeriodeRegulTauxAT4') && null !== $data->getEtAPeriodeRegulTauxAT4()) {
            $dataArray['etA_PeriodeRegulTauxAT_4'] = $data->getEtAPeriodeRegulTauxAT4()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bETAPeriodeRegulTauxAT5') && null !== $data->getBETAPeriodeRegulTauxAT5()) {
            $dataArray['bETA_PeriodeRegulTauxAT_5'] = $data->getBETAPeriodeRegulTauxAT5();
        }

        if ($data->isInitialized('etAPeriodeRegulTauxAT5') && null !== $data->getEtAPeriodeRegulTauxAT5()) {
            $dataArray['etA_PeriodeRegulTauxAT_5'] = $data->getEtAPeriodeRegulTauxAT5()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bETAPeriodeRegulTauxAT6') && null !== $data->getBETAPeriodeRegulTauxAT6()) {
            $dataArray['bETA_PeriodeRegulTauxAT_6'] = $data->getBETAPeriodeRegulTauxAT6();
        }

        if ($data->isInitialized('etAPeriodeRegulTauxAT6') && null !== $data->getEtAPeriodeRegulTauxAT6()) {
            $dataArray['etA_PeriodeRegulTauxAT_6'] = $data->getEtAPeriodeRegulTauxAT6()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bETAPeriodeRegulTauxAT7') && null !== $data->getBETAPeriodeRegulTauxAT7()) {
            $dataArray['bETA_PeriodeRegulTauxAT_7'] = $data->getBETAPeriodeRegulTauxAT7();
        }

        if ($data->isInitialized('etAPeriodeRegulTauxAT7') && null !== $data->getEtAPeriodeRegulTauxAT7()) {
            $dataArray['etA_PeriodeRegulTauxAT_7'] = $data->getEtAPeriodeRegulTauxAT7()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bETAPersonneAContacterMel') && null !== $data->getBETAPersonneAContacterMel()) {
            $dataArray['bETA_PersonneAContacterMel'] = $data->getBETAPersonneAContacterMel();
        }

        if ($data->isInitialized('etAPersonneAContacterMel') && null !== $data->getEtAPersonneAContacterMel()) {
            $dataArray['etA_PersonneAContacterMel'] = $data->getEtAPersonneAContacterMel();
        }

        if ($data->isInitialized('bETAPersonneAContacterNom') && null !== $data->getBETAPersonneAContacterNom()) {
            $dataArray['bETA_PersonneAContacterNom'] = $data->getBETAPersonneAContacterNom();
        }

        if ($data->isInitialized('etAPersonneAContacterNom') && null !== $data->getEtAPersonneAContacterNom()) {
            $dataArray['etA_PersonneAContacterNom'] = $data->getEtAPersonneAContacterNom();
        }

        if ($data->isInitialized('bETAPersonneAContacterPrenom') && null !== $data->getBETAPersonneAContacterPrenom()) {
            $dataArray['bETA_PersonneAContacterPrenom'] = $data->getBETAPersonneAContacterPrenom();
        }

        if ($data->isInitialized('etAPersonneAContacterPrenom') && null !== $data->getEtAPersonneAContacterPrenom()) {
            $dataArray['etA_PersonneAContacterPrenom'] = $data->getEtAPersonneAContacterPrenom();
        }

        if ($data->isInitialized('bETAPersonneAContacterTel') && null !== $data->getBETAPersonneAContacterTel()) {
            $dataArray['bETA_PersonneAContacterTel'] = $data->getBETAPersonneAContacterTel();
        }

        if ($data->isInitialized('etAPersonneAContacterTel') && null !== $data->getEtAPersonneAContacterTel()) {
            $dataArray['etA_PersonneAContacterTel'] = $data->getEtAPersonneAContacterTel();
        }

        if ($data->isInitialized('bETAPrefixeMatriculesSalaries') && null !== $data->getBETAPrefixeMatriculesSalaries()) {
            $dataArray['bETA_PrefixeMatriculesSalaries'] = $data->getBETAPrefixeMatriculesSalaries();
        }

        if ($data->isInitialized('etAPrefixeMatriculesSalaries') && null !== $data->getEtAPrefixeMatriculesSalaries()) {
            $dataArray['etA_PrefixeMatriculesSalaries'] = $data->getEtAPrefixeMatriculesSalaries();
        }

        if ($data->isInitialized('bETARTTEnHeures') && null !== $data->getBETARTTEnHeures()) {
            $dataArray['bETA_RTTEnHeures'] = $data->getBETARTTEnHeures();
        }

        if ($data->isInitialized('etARTTEnHeures') && null !== $data->getEtARTTEnHeures()) {
            $dataArray['etA_RTTEnHeures'] = $data->getEtARTTEnHeures();
        }

        if ($data->isInitialized('bETAS41G0100018001') && null !== $data->getBETAS41G0100018001()) {
            $dataArray['bETA_S41_G01_00_018_001'] = $data->getBETAS41G0100018001();
        }

        if ($data->isInitialized('etAS41G0100018001') && null !== $data->getEtAS41G0100018001()) {
            $dataArray['etA_S41_G01_00_018_001'] = $data->getEtAS41G0100018001();
        }

        if ($data->isInitialized('bETAS41G0100018006') && null !== $data->getBETAS41G0100018006()) {
            $dataArray['bETA_S41_G01_00_018_006'] = $data->getBETAS41G0100018006();
        }

        if ($data->isInitialized('etAS41G0100018006') && null !== $data->getEtAS41G0100018006()) {
            $dataArray['etA_S41_G01_00_018_006'] = $data->getEtAS41G0100018006();
        }

        if ($data->isInitialized('bETAS41G01000251') && null !== $data->getBETAS41G01000251()) {
            $dataArray['bETA_S41_G01_00_025_1'] = $data->getBETAS41G01000251();
        }

        if ($data->isInitialized('etAS41G01000251') && null !== $data->getEtAS41G01000251()) {
            $dataArray['etA_S41_G01_00_025_1'] = $data->getEtAS41G01000251();
        }

        if ($data->isInitialized('bETAS41G01000252') && null !== $data->getBETAS41G01000252()) {
            $dataArray['bETA_S41_G01_00_025_2'] = $data->getBETAS41G01000252();
        }

        if ($data->isInitialized('etAS41G01000252') && null !== $data->getEtAS41G01000252()) {
            $dataArray['etA_S41_G01_00_025_2'] = $data->getEtAS41G01000252();
        }

        if ($data->isInitialized('bETAS41G01000253') && null !== $data->getBETAS41G01000253()) {
            $dataArray['bETA_S41_G01_00_025_3'] = $data->getBETAS41G01000253();
        }

        if ($data->isInitialized('etAS41G01000253') && null !== $data->getEtAS41G01000253()) {
            $dataArray['etA_S41_G01_00_025_3'] = $data->getEtAS41G01000253();
        }

        if ($data->isInitialized('bETAS41G01000254') && null !== $data->getBETAS41G01000254()) {
            $dataArray['bETA_S41_G01_00_025_4'] = $data->getBETAS41G01000254();
        }

        if ($data->isInitialized('etAS41G01000254') && null !== $data->getEtAS41G01000254()) {
            $dataArray['etA_S41_G01_00_025_4'] = $data->getEtAS41G01000254();
        }

        if ($data->isInitialized('bETAS41G01000255') && null !== $data->getBETAS41G01000255()) {
            $dataArray['bETA_S41_G01_00_025_5'] = $data->getBETAS41G01000255();
        }

        if ($data->isInitialized('etAS41G01000255') && null !== $data->getEtAS41G01000255()) {
            $dataArray['etA_S41_G01_00_025_5'] = $data->getEtAS41G01000255();
        }

        if ($data->isInitialized('bETAS41G01000256') && null !== $data->getBETAS41G01000256()) {
            $dataArray['bETA_S41_G01_00_025_6'] = $data->getBETAS41G01000256();
        }

        if ($data->isInitialized('etAS41G01000256') && null !== $data->getEtAS41G01000256()) {
            $dataArray['etA_S41_G01_00_025_6'] = $data->getEtAS41G01000256();
        }

        if ($data->isInitialized('bETAS41G01000257') && null !== $data->getBETAS41G01000257()) {
            $dataArray['bETA_S41_G01_00_025_7'] = $data->getBETAS41G01000257();
        }

        if ($data->isInitialized('etAS41G01000257') && null !== $data->getEtAS41G01000257()) {
            $dataArray['etA_S41_G01_00_025_7'] = $data->getEtAS41G01000257();
        }

        if ($data->isInitialized('bETAS41G01000261') && null !== $data->getBETAS41G01000261()) {
            $dataArray['bETA_S41_G01_00_026_1'] = $data->getBETAS41G01000261();
        }

        if ($data->isInitialized('etAS41G01000261') && null !== $data->getEtAS41G01000261()) {
            $dataArray['etA_S41_G01_00_026_1'] = $data->getEtAS41G01000261();
        }

        if ($data->isInitialized('bETAS41G01000262') && null !== $data->getBETAS41G01000262()) {
            $dataArray['bETA_S41_G01_00_026_2'] = $data->getBETAS41G01000262();
        }

        if ($data->isInitialized('etAS41G01000262') && null !== $data->getEtAS41G01000262()) {
            $dataArray['etA_S41_G01_00_026_2'] = $data->getEtAS41G01000262();
        }

        if ($data->isInitialized('bETAS41G01000263') && null !== $data->getBETAS41G01000263()) {
            $dataArray['bETA_S41_G01_00_026_3'] = $data->getBETAS41G01000263();
        }

        if ($data->isInitialized('etAS41G01000263') && null !== $data->getEtAS41G01000263()) {
            $dataArray['etA_S41_G01_00_026_3'] = $data->getEtAS41G01000263();
        }

        if ($data->isInitialized('bETAS41G01000264') && null !== $data->getBETAS41G01000264()) {
            $dataArray['bETA_S41_G01_00_026_4'] = $data->getBETAS41G01000264();
        }

        if ($data->isInitialized('etAS41G01000264') && null !== $data->getEtAS41G01000264()) {
            $dataArray['etA_S41_G01_00_026_4'] = $data->getEtAS41G01000264();
        }

        if ($data->isInitialized('bETAS41G01000265') && null !== $data->getBETAS41G01000265()) {
            $dataArray['bETA_S41_G01_00_026_5'] = $data->getBETAS41G01000265();
        }

        if ($data->isInitialized('etAS41G01000265') && null !== $data->getEtAS41G01000265()) {
            $dataArray['etA_S41_G01_00_026_5'] = $data->getEtAS41G01000265();
        }

        if ($data->isInitialized('bETAS41G01000266') && null !== $data->getBETAS41G01000266()) {
            $dataArray['bETA_S41_G01_00_026_6'] = $data->getBETAS41G01000266();
        }

        if ($data->isInitialized('etAS41G01000266') && null !== $data->getEtAS41G01000266()) {
            $dataArray['etA_S41_G01_00_026_6'] = $data->getEtAS41G01000266();
        }

        if ($data->isInitialized('bETAS41G01000267') && null !== $data->getBETAS41G01000267()) {
            $dataArray['bETA_S41_G01_00_026_7'] = $data->getBETAS41G01000267();
        }

        if ($data->isInitialized('etAS41G01000267') && null !== $data->getEtAS41G01000267()) {
            $dataArray['etA_S41_G01_00_026_7'] = $data->getEtAS41G01000267();
        }

        if ($data->isInitialized('bETAS41G01000271') && null !== $data->getBETAS41G01000271()) {
            $dataArray['bETA_S41_G01_00_027_1'] = $data->getBETAS41G01000271();
        }

        if ($data->isInitialized('etAS41G01000271') && null !== $data->getEtAS41G01000271()) {
            $dataArray['etA_S41_G01_00_027_1'] = $data->getEtAS41G01000271();
        }

        if ($data->isInitialized('bETAS41G01000272') && null !== $data->getBETAS41G01000272()) {
            $dataArray['bETA_S41_G01_00_027_2'] = $data->getBETAS41G01000272();
        }

        if ($data->isInitialized('etAS41G01000272') && null !== $data->getEtAS41G01000272()) {
            $dataArray['etA_S41_G01_00_027_2'] = $data->getEtAS41G01000272();
        }

        if ($data->isInitialized('bETAS41G01000273') && null !== $data->getBETAS41G01000273()) {
            $dataArray['bETA_S41_G01_00_027_3'] = $data->getBETAS41G01000273();
        }

        if ($data->isInitialized('etAS41G01000273') && null !== $data->getEtAS41G01000273()) {
            $dataArray['etA_S41_G01_00_027_3'] = $data->getEtAS41G01000273();
        }

        if ($data->isInitialized('bETAS41G01000274') && null !== $data->getBETAS41G01000274()) {
            $dataArray['bETA_S41_G01_00_027_4'] = $data->getBETAS41G01000274();
        }

        if ($data->isInitialized('etAS41G01000274') && null !== $data->getEtAS41G01000274()) {
            $dataArray['etA_S41_G01_00_027_4'] = $data->getEtAS41G01000274();
        }

        if ($data->isInitialized('bETAS41G01000275') && null !== $data->getBETAS41G01000275()) {
            $dataArray['bETA_S41_G01_00_027_5'] = $data->getBETAS41G01000275();
        }

        if ($data->isInitialized('etAS41G01000275') && null !== $data->getEtAS41G01000275()) {
            $dataArray['etA_S41_G01_00_027_5'] = $data->getEtAS41G01000275();
        }

        if ($data->isInitialized('bETAS41G01000276') && null !== $data->getBETAS41G01000276()) {
            $dataArray['bETA_S41_G01_00_027_6'] = $data->getBETAS41G01000276();
        }

        if ($data->isInitialized('etAS41G01000276') && null !== $data->getEtAS41G01000276()) {
            $dataArray['etA_S41_G01_00_027_6'] = $data->getEtAS41G01000276();
        }

        if ($data->isInitialized('bETAS41G01000277') && null !== $data->getBETAS41G01000277()) {
            $dataArray['bETA_S41_G01_00_027_7'] = $data->getBETAS41G01000277();
        }

        if ($data->isInitialized('etAS41G01000277') && null !== $data->getEtAS41G01000277()) {
            $dataArray['etA_S41_G01_00_027_7'] = $data->getEtAS41G01000277();
        }

        if ($data->isInitialized('bETAS41G01000281') && null !== $data->getBETAS41G01000281()) {
            $dataArray['bETA_S41_G01_00_028_1'] = $data->getBETAS41G01000281();
        }

        if ($data->isInitialized('etAS41G01000281') && null !== $data->getEtAS41G01000281()) {
            $dataArray['etA_S41_G01_00_028_1'] = $data->getEtAS41G01000281();
        }

        if ($data->isInitialized('bETAS41G01000282') && null !== $data->getBETAS41G01000282()) {
            $dataArray['bETA_S41_G01_00_028_2'] = $data->getBETAS41G01000282();
        }

        if ($data->isInitialized('etAS41G01000282') && null !== $data->getEtAS41G01000282()) {
            $dataArray['etA_S41_G01_00_028_2'] = $data->getEtAS41G01000282();
        }

        if ($data->isInitialized('bETAS41G01000283') && null !== $data->getBETAS41G01000283()) {
            $dataArray['bETA_S41_G01_00_028_3'] = $data->getBETAS41G01000283();
        }

        if ($data->isInitialized('etAS41G01000283') && null !== $data->getEtAS41G01000283()) {
            $dataArray['etA_S41_G01_00_028_3'] = $data->getEtAS41G01000283();
        }

        if ($data->isInitialized('bETAS41G01000284') && null !== $data->getBETAS41G01000284()) {
            $dataArray['bETA_S41_G01_00_028_4'] = $data->getBETAS41G01000284();
        }

        if ($data->isInitialized('etAS41G01000284') && null !== $data->getEtAS41G01000284()) {
            $dataArray['etA_S41_G01_00_028_4'] = $data->getEtAS41G01000284();
        }

        if ($data->isInitialized('bETAS41G01000285') && null !== $data->getBETAS41G01000285()) {
            $dataArray['bETA_S41_G01_00_028_5'] = $data->getBETAS41G01000285();
        }

        if ($data->isInitialized('etAS41G01000285') && null !== $data->getEtAS41G01000285()) {
            $dataArray['etA_S41_G01_00_028_5'] = $data->getEtAS41G01000285();
        }

        if ($data->isInitialized('bETAS41G01000286') && null !== $data->getBETAS41G01000286()) {
            $dataArray['bETA_S41_G01_00_028_6'] = $data->getBETAS41G01000286();
        }

        if ($data->isInitialized('etAS41G01000286') && null !== $data->getEtAS41G01000286()) {
            $dataArray['etA_S41_G01_00_028_6'] = $data->getEtAS41G01000286();
        }

        if ($data->isInitialized('bETAS41G01000287') && null !== $data->getBETAS41G01000287()) {
            $dataArray['bETA_S41_G01_00_028_7'] = $data->getBETAS41G01000287();
        }

        if ($data->isInitialized('etAS41G01000287') && null !== $data->getEtAS41G01000287()) {
            $dataArray['etA_S41_G01_00_028_7'] = $data->getEtAS41G01000287();
        }

        if ($data->isInitialized('bETASaisieManuelleHeuresAbsences') && null !== $data->getBETASaisieManuelleHeuresAbsences()) {
            $dataArray['bETA_SaisieManuelleHeuresAbsences'] = $data->getBETASaisieManuelleHeuresAbsences();
        }

        if ($data->isInitialized('etASaisieManuelleHeuresAbsences') && null !== $data->getEtASaisieManuelleHeuresAbsences()) {
            $dataArray['etA_SaisieManuelleHeuresAbsences'] = $data->getEtASaisieManuelleHeuresAbsences();
        }

        if ($data->isInitialized('bETASoumisTaxeAppr') && null !== $data->getBETASoumisTaxeAppr()) {
            $dataArray['bETA_SoumisTaxeAppr'] = $data->getBETASoumisTaxeAppr();
        }

        if ($data->isInitialized('etASoumisTaxeAppr') && null !== $data->getEtASoumisTaxeAppr()) {
            $dataArray['etA_SoumisTaxeAppr'] = $data->getEtASoumisTaxeAppr();
        }

        if ($data->isInitialized('bETASoumisTaxeApprAvecMajoration') && null !== $data->getBETASoumisTaxeApprAvecMajoration()) {
            $dataArray['bETA_SoumisTaxeApprAvecMajoration'] = $data->getBETASoumisTaxeApprAvecMajoration();
        }

        if ($data->isInitialized('etASoumisTaxeApprAvecMajoration') && null !== $data->getEtASoumisTaxeApprAvecMajoration()) {
            $dataArray['etA_SoumisTaxeApprAvecMajoration'] = $data->getEtASoumisTaxeApprAvecMajoration();
        }

        if ($data->isInitialized('bETASoumisTaxeSalaires') && null !== $data->getBETASoumisTaxeSalaires()) {
            $dataArray['bETA_SoumisTaxeSalaires'] = $data->getBETASoumisTaxeSalaires();
        }

        if ($data->isInitialized('etASoumisTaxeSalaires') && null !== $data->getEtASoumisTaxeSalaires()) {
            $dataArray['etA_SoumisTaxeSalaires'] = $data->getEtASoumisTaxeSalaires();
        }

        if ($data->isInitialized('bETASoumisTaxeSalairesPctImp') && null !== $data->getBETASoumisTaxeSalairesPctImp()) {
            $dataArray['bETA_SoumisTaxeSalairesPctImp'] = $data->getBETASoumisTaxeSalairesPctImp();
        }

        if ($data->isInitialized('etASoumisTaxeSalairesPctImp') && null !== $data->getEtASoumisTaxeSalairesPctImp()) {
            $dataArray['etA_SoumisTaxeSalairesPctImp'] = $data->getEtASoumisTaxeSalairesPctImp();
        }

        if ($data->isInitialized('bETASousMethodeSuiviAbsences') && null !== $data->getBETASousMethodeSuiviAbsences()) {
            $dataArray['bETA_SousMethodeSuiviAbsences'] = $data->getBETASousMethodeSuiviAbsences();
        }

        if ($data->isInitialized('etASousMethodeSuiviAbsences') && null !== $data->getEtASousMethodeSuiviAbsences()) {
            $dataArray['etA_SousMethodeSuiviAbsences'] = $data->getEtASousMethodeSuiviAbsences();
        }

        if ($data->isInitialized('bETASousMethodeSuiviAbsencesFJ') && null !== $data->getBETASousMethodeSuiviAbsencesFJ()) {
            $dataArray['bETA_SousMethodeSuiviAbsencesFJ'] = $data->getBETASousMethodeSuiviAbsencesFJ();
        }

        if ($data->isInitialized('etASousMethodeSuiviAbsencesFJ') && null !== $data->getEtASousMethodeSuiviAbsencesFJ()) {
            $dataArray['etA_SousMethodeSuiviAbsencesFJ'] = $data->getEtASousMethodeSuiviAbsencesFJ();
        }

        if ($data->isInitialized('bETASubrogation') && null !== $data->getBETASubrogation()) {
            $dataArray['bETA_Subrogation'] = $data->getBETASubrogation();
        }

        if ($data->isInitialized('etASubrogation') && null !== $data->getEtASubrogation()) {
            $dataArray['etA_Subrogation'] = $data->getEtASubrogation();
        }

        if ($data->isInitialized('bETASubrogationVersEtaPrincipal') && null !== $data->getBETASubrogationVersEtaPrincipal()) {
            $dataArray['bETA_SubrogationVersEtaPrincipal'] = $data->getBETASubrogationVersEtaPrincipal();
        }

        if ($data->isInitialized('etASubrogationVersEtaPrincipal') && null !== $data->getEtASubrogationVersEtaPrincipal()) {
            $dataArray['etA_SubrogationVersEtaPrincipal'] = $data->getEtASubrogationVersEtaPrincipal();
        }

        if ($data->isInitialized('bETATassageAbsencesJours') && null !== $data->getBETATassageAbsencesJours()) {
            $dataArray['bETA_TassageAbsencesJours'] = $data->getBETATassageAbsencesJours();
        }

        if ($data->isInitialized('etATassageAbsencesJours') && null !== $data->getEtATassageAbsencesJours()) {
            $dataArray['etA_TassageAbsencesJours'] = $data->getEtATassageAbsencesJours();
        }

        if ($data->isInitialized('bETATauxVersementTrs') && null !== $data->getBETATauxVersementTrs()) {
            $dataArray['bETA_TauxVersementTrs'] = $data->getBETATauxVersementTrs();
        }

        if ($data->isInitialized('etATauxVersementTrs') && null !== $data->getEtATauxVersementTrs()) {
            $dataArray['etA_TauxVersementTrs'] = $data->getEtATauxVersementTrs();
        }

        if ($data->isInitialized('bETATaxeSalairesAbattement') && null !== $data->getBETATaxeSalairesAbattement()) {
            $dataArray['bETA_TaxeSalairesAbattement'] = $data->getBETATaxeSalairesAbattement();
        }

        if ($data->isInitialized('etATaxeSalairesAbattement') && null !== $data->getEtATaxeSalairesAbattement()) {
            $dataArray['etA_TaxeSalairesAbattement'] = $data->getEtATaxeSalairesAbattement();
        }

        if ($data->isInitialized('bETATaxeSalairesSurSeuilsAnnuel') && null !== $data->getBETATaxeSalairesSurSeuilsAnnuel()) {
            $dataArray['bETA_TaxeSalairesSurSeuilsAnnuel'] = $data->getBETATaxeSalairesSurSeuilsAnnuel();
        }

        if ($data->isInitialized('etATaxeSalairesSurSeuilsAnnuel') && null !== $data->getEtATaxeSalairesSurSeuilsAnnuel()) {
            $dataArray['etA_TaxeSalairesSurSeuilsAnnuel'] = $data->getEtATaxeSalairesSurSeuilsAnnuel();
        }

        if ($data->isInitialized('bETATitresTrs') && null !== $data->getBETATitresTrs()) {
            $dataArray['bETA_TitresTrs'] = $data->getBETATitresTrs();
        }

        if ($data->isInitialized('etATitresTrs') && null !== $data->getEtATitresTrs()) {
            $dataArray['etA_TitresTrs'] = $data->getEtATitresTrs();
        }

        if ($data->isInitialized('bETATResto') && null !== $data->getBETATResto()) {
            $dataArray['bETA_TResto'] = $data->getBETATResto();
        }

        if ($data->isInitialized('etATResto') && null !== $data->getEtATResto()) {
            $dataArray['etA_TResto'] = $data->getEtATResto();
        }

        if ($data->isInitialized('bETATRestoNomVariable') && null !== $data->getBETATRestoNomVariable()) {
            $dataArray['bETA_TRestoNomVariable'] = $data->getBETATRestoNomVariable();
        }

        if ($data->isInitialized('etATRestoNomVariable') && null !== $data->getEtATRestoNomVariable()) {
            $dataArray['etA_TRestoNomVariable'] = $data->getEtATRestoNomVariable();
        }

        if ($data->isInitialized('bETATRestoPartSalariale') && null !== $data->getBETATRestoPartSalariale()) {
            $dataArray['bETA_TRestoPartSalariale'] = $data->getBETATRestoPartSalariale();
        }

        if ($data->isInitialized('etATRestoPartSalariale') && null !== $data->getEtATRestoPartSalariale()) {
            $dataArray['etA_TRestoPartSalariale'] = $data->getEtATRestoPartSalariale();
        }

        if ($data->isInitialized('bETATypeAcquisitionDIF') && null !== $data->getBETATypeAcquisitionDIF()) {
            $dataArray['bETA_TypeAcquisitionDIF'] = $data->getBETATypeAcquisitionDIF();
        }

        if ($data->isInitialized('etATypeAcquisitionDIF') && null !== $data->getEtATypeAcquisitionDIF()) {
            $dataArray['etA_TypeAcquisitionDIF'] = $data->getEtATypeAcquisitionDIF();
        }

        if ($data->isInitialized('bETAVTACodeRegion') && null !== $data->getBETAVTACodeRegion()) {
            $dataArray['bETA_VTACodeRegion'] = $data->getBETAVTACodeRegion();
        }

        if ($data->isInitialized('etAVTACodeRegion') && null !== $data->getEtAVTACodeRegion()) {
            $dataArray['etA_VTACodeRegion'] = $data->getEtAVTACodeRegion();
        }

        if ($data->isInitialized('bETAVTATaux') && null !== $data->getBETAVTATaux()) {
            $dataArray['bETA_VTATaux'] = $data->getBETAVTATaux();
        }

        if ($data->isInitialized('etAVTATaux') && null !== $data->getEtAVTATaux()) {
            $dataArray['etA_VTATaux'] = $data->getEtAVTATaux();
        }

        if ($data->isInitialized('bETAVTrsAuto') && null !== $data->getBETAVTrsAuto()) {
            $dataArray['bETA_VTrsAuto'] = $data->getBETAVTrsAuto();
        }

        if ($data->isInitialized('etAVTrsAuto') && null !== $data->getEtAVTrsAuto()) {
            $dataArray['etA_VTrsAuto'] = $data->getEtAVTrsAuto();
        }

        if ($data->isInitialized('bINTBTQC') && null !== $data->getBINTBTQC()) {
            $dataArray['bINT_BTQC'] = $data->getBINTBTQC();
        }

        if ($data->isInitialized('inTBTQC') && null !== $data->getInTBTQC()) {
            $dataArray['inT_BTQC'] = $data->getInTBTQC();
        }

        if ($data->isInitialized('bINTCivilite') && null !== $data->getBINTCivilite()) {
            $dataArray['bINT_Civilite'] = $data->getBINTCivilite();
        }

        if ($data->isInitialized('inTCivilite') && null !== $data->getInTCivilite()) {
            $dataArray['inT_Civilite'] = $data->getInTCivilite();
        }

        if ($data->isInitialized('bINTCodePostal') && null !== $data->getBINTCodePostal()) {
            $dataArray['bINT_CodePostal'] = $data->getBINTCodePostal();
        }

        if ($data->isInitialized('inTCodePostal') && null !== $data->getInTCodePostal()) {
            $dataArray['inT_CodePostal'] = $data->getInTCodePostal();
        }

        if ($data->isInitialized('bINTCodePostalJF') && null !== $data->getBINTCodePostalJF()) {
            $dataArray['bINT_CodePostalJF'] = $data->getBINTCodePostalJF();
        }

        if ($data->isInitialized('inTCodePostalJF') && null !== $data->getInTCodePostalJF()) {
            $dataArray['inT_CodePostalJF'] = $data->getInTCodePostalJF();
        }

        if ($data->isInitialized('bINTCommune') && null !== $data->getBINTCommune()) {
            $dataArray['bINT_Commune'] = $data->getBINTCommune();
        }

        if ($data->isInitialized('inTCommune') && null !== $data->getInTCommune()) {
            $dataArray['inT_Commune'] = $data->getInTCommune();
        }

        if ($data->isInitialized('bINTCommuneINSEE') && null !== $data->getBINTCommuneINSEE()) {
            $dataArray['bINT_CommuneINSEE'] = $data->getBINTCommuneINSEE();
        }

        if ($data->isInitialized('inTCommuneINSEE') && null !== $data->getInTCommuneINSEE()) {
            $dataArray['inT_CommuneINSEE'] = $data->getInTCommuneINSEE();
        }

        if ($data->isInitialized('bINTComplementAdresse') && null !== $data->getBINTComplementAdresse()) {
            $dataArray['bINT_ComplementAdresse'] = $data->getBINTComplementAdresse();
        }

        if ($data->isInitialized('inTComplementAdresse') && null !== $data->getInTComplementAdresse()) {
            $dataArray['inT_ComplementAdresse'] = $data->getInTComplementAdresse();
        }

        if ($data->isInitialized('bINTDateDeces') && null !== $data->getBINTDateDeces()) {
            $dataArray['bINT_DateDeces'] = $data->getBINTDateDeces();
        }

        if ($data->isInitialized('inTDateDeces') && null !== $data->getInTDateDeces()) {
            $dataArray['inT_DateDeces'] = $data->getInTDateDeces()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bINTDateNaissance') && null !== $data->getBINTDateNaissance()) {
            $dataArray['bINT_DateNaissance'] = $data->getBINTDateNaissance();
        }

        if ($data->isInitialized('inTDateNaissance') && null !== $data->getInTDateNaissance()) {
            $dataArray['inT_DateNaissance'] = $data->getInTDateNaissance()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bINTEnseigne') && null !== $data->getBINTEnseigne()) {
            $dataArray['bINT_Enseigne'] = $data->getBINTEnseigne();
        }

        if ($data->isInitialized('inTEnseigne') && null !== $data->getInTEnseigne()) {
            $dataArray['inT_Enseigne'] = $data->getInTEnseigne();
        }

        if ($data->isInitialized('bINTFax') && null !== $data->getBINTFax()) {
            $dataArray['bINT_Fax'] = $data->getBINTFax();
        }

        if ($data->isInitialized('inTFax') && null !== $data->getInTFax()) {
            $dataArray['inT_Fax'] = $data->getInTFax();
        }

        if ($data->isInitialized('bINTFormeJuridique') && null !== $data->getBINTFormeJuridique()) {
            $dataArray['bINT_FormeJuridique'] = $data->getBINTFormeJuridique();
        }

        if ($data->isInitialized('inTFormeJuridique') && null !== $data->getInTFormeJuridique()) {
            $dataArray['inT_FormeJuridique'] = $data->getInTFormeJuridique();
        }

        if ($data->isInitialized('bINTMel') && null !== $data->getBINTMel()) {
            $dataArray['bINT_Mel'] = $data->getBINTMel();
        }

        if ($data->isInitialized('inTMel') && null !== $data->getInTMel()) {
            $dataArray['inT_Mel'] = $data->getInTMel();
        }

        if ($data->isInitialized('bINTNAF') && null !== $data->getBINTNAF()) {
            $dataArray['bINT_NAF'] = $data->getBINTNAF();
        }

        if ($data->isInitialized('inTNAF') && null !== $data->getInTNAF()) {
            $dataArray['inT_NAF'] = $data->getInTNAF();
        }

        if ($data->isInitialized('bINTNomPays') && null !== $data->getBINTNomPays()) {
            $dataArray['bINT_NomPays'] = $data->getBINTNomPays();
        }

        if ($data->isInitialized('inTNomPays') && null !== $data->getInTNomPays()) {
            $dataArray['inT_NomPays'] = $data->getInTNomPays();
        }

        if ($data->isInitialized('bINTNomUsuel') && null !== $data->getBINTNomUsuel()) {
            $dataArray['bINT_NomUsuel'] = $data->getBINTNomUsuel();
        }

        if ($data->isInitialized('inTNomUsuel') && null !== $data->getInTNomUsuel()) {
            $dataArray['inT_NomUsuel'] = $data->getInTNomUsuel();
        }

        if ($data->isInitialized('bINTNomVille') && null !== $data->getBINTNomVille()) {
            $dataArray['bINT_NomVille'] = $data->getBINTNomVille();
        }

        if ($data->isInitialized('inTNomVille') && null !== $data->getInTNomVille()) {
            $dataArray['inT_NomVille'] = $data->getInTNomVille();
        }

        if ($data->isInitialized('bINTNomVoie') && null !== $data->getBINTNomVoie()) {
            $dataArray['bINT_NomVoie'] = $data->getBINTNomVoie();
        }

        if ($data->isInitialized('inTNomVoie') && null !== $data->getInTNomVoie()) {
            $dataArray['inT_NomVoie'] = $data->getInTNomVoie();
        }

        if ($data->isInitialized('bINTNumVoie') && null !== $data->getBINTNumVoie()) {
            $dataArray['bINT_NumVoie'] = $data->getBINTNumVoie();
        }

        if ($data->isInitialized('inTNumVoie') && null !== $data->getInTNumVoie()) {
            $dataArray['inT_NumVoie'] = $data->getInTNumVoie();
        }

        if ($data->isInitialized('bINTPaysISO') && null !== $data->getBINTPaysISO()) {
            $dataArray['bINT_PaysISO'] = $data->getBINTPaysISO();
        }

        if ($data->isInitialized('inTPaysISO') && null !== $data->getInTPaysISO()) {
            $dataArray['inT_PaysISO'] = $data->getInTPaysISO();
        }

        if ($data->isInitialized('bINTPaysISOJF') && null !== $data->getBINTPaysISOJF()) {
            $dataArray['bINT_PaysISOJF'] = $data->getBINTPaysISOJF();
        }

        if ($data->isInitialized('inTPaysISOJF') && null !== $data->getInTPaysISOJF()) {
            $dataArray['inT_PaysISOJF'] = $data->getInTPaysISOJF();
        }

        if ($data->isInitialized('bINTPrenom') && null !== $data->getBINTPrenom()) {
            $dataArray['bINT_Prenom'] = $data->getBINTPrenom();
        }

        if ($data->isInitialized('inTPrenom') && null !== $data->getInTPrenom()) {
            $dataArray['inT_Prenom'] = $data->getInTPrenom();
        }

        if ($data->isInitialized('bINTRaisonSociale') && null !== $data->getBINTRaisonSociale()) {
            $dataArray['bINT_RaisonSociale'] = $data->getBINTRaisonSociale();
        }

        if ($data->isInitialized('inTRaisonSociale') && null !== $data->getInTRaisonSociale()) {
            $dataArray['inT_RaisonSociale'] = $data->getInTRaisonSociale();
        }

        if ($data->isInitialized('bINTSiret') && null !== $data->getBINTSiret()) {
            $dataArray['bINT_Siret'] = $data->getBINTSiret();
        }

        if ($data->isInitialized('inTSiret') && null !== $data->getInTSiret()) {
            $dataArray['inT_Siret'] = $data->getInTSiret();
        }

        if ($data->isInitialized('bINTSiteWeb') && null !== $data->getBINTSiteWeb()) {
            $dataArray['bINT_SiteWeb'] = $data->getBINTSiteWeb();
        }

        if ($data->isInitialized('inTSiteWeb') && null !== $data->getInTSiteWeb()) {
            $dataArray['inT_SiteWeb'] = $data->getInTSiteWeb();
        }

        if ($data->isInitialized('bINTTelBureau') && null !== $data->getBINTTelBureau()) {
            $dataArray['bINT_TelBureau'] = $data->getBINTTelBureau();
        }

        if ($data->isInitialized('inTTelBureau') && null !== $data->getInTTelBureau()) {
            $dataArray['inT_TelBureau'] = $data->getInTTelBureau();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EtablissementInfoSup::class => false];
    }
}
