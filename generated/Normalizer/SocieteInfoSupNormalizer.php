<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SocieteInfoSup;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SocieteInfoSupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SocieteInfoSup::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SocieteInfoSup::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SocieteInfoSup();
        if (\array_key_exists('clI_MethodeSuiviCPAcqMois', $data) && \is_int($data['clI_MethodeSuiviCPAcqMois'])) {
            $data['clI_MethodeSuiviCPAcqMois'] = (float) $data['clI_MethodeSuiviCPAcqMois'];
        }

        if (\array_key_exists('bCLI_AffilieCCP', $data) && \is_int($data['bCLI_AffilieCCP'])) {
            $data['bCLI_AffilieCCP'] = (bool) $data['bCLI_AffilieCCP'];
        }

        if (\array_key_exists('clI_AffilieCCP', $data) && \is_int($data['clI_AffilieCCP'])) {
            $data['clI_AffilieCCP'] = (bool) $data['clI_AffilieCCP'];
        }

        if (\array_key_exists('bCLI_BaseCalculAnciennete', $data) && \is_int($data['bCLI_BaseCalculAnciennete'])) {
            $data['bCLI_BaseCalculAnciennete'] = (bool) $data['bCLI_BaseCalculAnciennete'];
        }

        if (\array_key_exists('bCLI_CalcAutoESInactif', $data) && \is_int($data['bCLI_CalcAutoESInactif'])) {
            $data['bCLI_CalcAutoESInactif'] = (bool) $data['bCLI_CalcAutoESInactif'];
        }

        if (\array_key_exists('clI_CalcAutoESInactif', $data) && \is_int($data['clI_CalcAutoESInactif'])) {
            $data['clI_CalcAutoESInactif'] = (bool) $data['clI_CalcAutoESInactif'];
        }

        if (\array_key_exists('bCLI_CalcAutoIJSSInactif', $data) && \is_int($data['bCLI_CalcAutoIJSSInactif'])) {
            $data['bCLI_CalcAutoIJSSInactif'] = (bool) $data['bCLI_CalcAutoIJSSInactif'];
        }

        if (\array_key_exists('clI_CalcAutoIJSSInactif', $data) && \is_int($data['clI_CalcAutoIJSSInactif'])) {
            $data['clI_CalcAutoIJSSInactif'] = (bool) $data['clI_CalcAutoIJSSInactif'];
        }

        if (\array_key_exists('bCLI_CalcAutoMaintienInactif', $data) && \is_int($data['bCLI_CalcAutoMaintienInactif'])) {
            $data['bCLI_CalcAutoMaintienInactif'] = (bool) $data['bCLI_CalcAutoMaintienInactif'];
        }

        if (\array_key_exists('clI_CalcAutoMaintienInactif', $data) && \is_int($data['clI_CalcAutoMaintienInactif'])) {
            $data['clI_CalcAutoMaintienInactif'] = (bool) $data['clI_CalcAutoMaintienInactif'];
        }

        if (\array_key_exists('bCLI_CalcAutoRegulInactif', $data) && \is_int($data['bCLI_CalcAutoRegulInactif'])) {
            $data['bCLI_CalcAutoRegulInactif'] = (bool) $data['bCLI_CalcAutoRegulInactif'];
        }

        if (\array_key_exists('clI_CalcAutoRegulInactif', $data) && \is_int($data['clI_CalcAutoRegulInactif'])) {
            $data['clI_CalcAutoRegulInactif'] = (bool) $data['clI_CalcAutoRegulInactif'];
        }

        if (\array_key_exists('bCLI_ChaineFabricationDateLimiteAbsences', $data) && \is_int($data['bCLI_ChaineFabricationDateLimiteAbsences'])) {
            $data['bCLI_ChaineFabricationDateLimiteAbsences'] = (bool) $data['bCLI_ChaineFabricationDateLimiteAbsences'];
        }

        if (\array_key_exists('bCLI_ConfSalActive', $data) && \is_int($data['bCLI_ConfSalActive'])) {
            $data['bCLI_ConfSalActive'] = (bool) $data['bCLI_ConfSalActive'];
        }

        if (\array_key_exists('clI_ConfSalActive', $data) && \is_int($data['clI_ConfSalActive'])) {
            $data['clI_ConfSalActive'] = (bool) $data['clI_ConfSalActive'];
        }

        if (\array_key_exists('bCLI_DFPTepa', $data) && \is_int($data['bCLI_DFPTepa'])) {
            $data['bCLI_DFPTepa'] = (bool) $data['bCLI_DFPTepa'];
        }

        if (\array_key_exists('clI_DFPTepa', $data) && \is_int($data['clI_DFPTepa'])) {
            $data['clI_DFPTepa'] = (bool) $data['clI_DFPTepa'];
        }

        if (\array_key_exists('bCLI_DFPTepaDebut', $data) && \is_int($data['bCLI_DFPTepaDebut'])) {
            $data['bCLI_DFPTepaDebut'] = (bool) $data['bCLI_DFPTepaDebut'];
        }

        if (\array_key_exists('bCLI_DtDebChangePaieDecalee', $data) && \is_int($data['bCLI_DtDebChangePaieDecalee'])) {
            $data['bCLI_DtDebChangePaieDecalee'] = (bool) $data['bCLI_DtDebChangePaieDecalee'];
        }

        if (\array_key_exists('bCLI_DtDebExerciceComptable', $data) && \is_int($data['bCLI_DtDebExerciceComptable'])) {
            $data['bCLI_DtDebExerciceComptable'] = (bool) $data['bCLI_DtDebExerciceComptable'];
        }

        if (\array_key_exists('bCLI_DtFinExerciceComptable', $data) && \is_int($data['bCLI_DtFinExerciceComptable'])) {
            $data['bCLI_DtFinExerciceComptable'] = (bool) $data['bCLI_DtFinExerciceComptable'];
        }

        if (\array_key_exists('bCLI_EmployeurCivilite', $data) && \is_int($data['bCLI_EmployeurCivilite'])) {
            $data['bCLI_EmployeurCivilite'] = (bool) $data['bCLI_EmployeurCivilite'];
        }

        if (\array_key_exists('bCLI_EmployeurNom', $data) && \is_int($data['bCLI_EmployeurNom'])) {
            $data['bCLI_EmployeurNom'] = (bool) $data['bCLI_EmployeurNom'];
        }

        if (\array_key_exists('bCLI_EmployeurPrenom', $data) && \is_int($data['bCLI_EmployeurPrenom'])) {
            $data['bCLI_EmployeurPrenom'] = (bool) $data['bCLI_EmployeurPrenom'];
        }

        if (\array_key_exists('bCLI_EmployeurQualite', $data) && \is_int($data['bCLI_EmployeurQualite'])) {
            $data['bCLI_EmployeurQualite'] = (bool) $data['bCLI_EmployeurQualite'];
        }

        if (\array_key_exists('bCLI_EmployeurQualiteAutre', $data) && \is_int($data['bCLI_EmployeurQualiteAutre'])) {
            $data['bCLI_EmployeurQualiteAutre'] = (bool) $data['bCLI_EmployeurQualiteAutre'];
        }

        if (\array_key_exists('bCLI_EtatDossierPaie', $data) && \is_int($data['bCLI_EtatDossierPaie'])) {
            $data['bCLI_EtatDossierPaie'] = (bool) $data['bCLI_EtatDossierPaie'];
        }

        if (\array_key_exists('bCLI_FormaProfTranche', $data) && \is_int($data['bCLI_FormaProfTranche'])) {
            $data['bCLI_FormaProfTranche'] = (bool) $data['bCLI_FormaProfTranche'];
        }

        if (\array_key_exists('bCLI_FormaProfTrancheAnnee', $data) && \is_int($data['bCLI_FormaProfTrancheAnnee'])) {
            $data['bCLI_FormaProfTrancheAnnee'] = (bool) $data['bCLI_FormaProfTrancheAnnee'];
        }

        if (\array_key_exists('bCLI_FormaProfTrancheAnnee2', $data) && \is_int($data['bCLI_FormaProfTrancheAnnee2'])) {
            $data['bCLI_FormaProfTrancheAnnee2'] = (bool) $data['bCLI_FormaProfTrancheAnnee2'];
        }

        if (\array_key_exists('bCLI_FormaProfTrancheAnnee3', $data) && \is_int($data['bCLI_FormaProfTrancheAnnee3'])) {
            $data['bCLI_FormaProfTrancheAnnee3'] = (bool) $data['bCLI_FormaProfTrancheAnnee3'];
        }

        if (\array_key_exists('bCLI_FormaProfTrancheAnnee4', $data) && \is_int($data['bCLI_FormaProfTrancheAnnee4'])) {
            $data['bCLI_FormaProfTrancheAnnee4'] = (bool) $data['bCLI_FormaProfTrancheAnnee4'];
        }

        if (\array_key_exists('bCLI_GestionCPExclEnJours', $data) && \is_int($data['bCLI_GestionCPExclEnJours'])) {
            $data['bCLI_GestionCPExclEnJours'] = (bool) $data['bCLI_GestionCPExclEnJours'];
        }

        if (\array_key_exists('clI_GestionCPExclEnJours', $data) && \is_int($data['clI_GestionCPExclEnJours'])) {
            $data['clI_GestionCPExclEnJours'] = (bool) $data['clI_GestionCPExclEnJours'];
        }

        if (\array_key_exists('bCLI_JourVersementSalaires', $data) && \is_int($data['bCLI_JourVersementSalaires'])) {
            $data['bCLI_JourVersementSalaires'] = (bool) $data['bCLI_JourVersementSalaires'];
        }

        if (\array_key_exists('bCLI_ListesTriSalaries', $data) && \is_int($data['bCLI_ListesTriSalaries'])) {
            $data['bCLI_ListesTriSalaries'] = (bool) $data['bCLI_ListesTriSalaries'];
        }

        if (\array_key_exists('bCLI_MatriculeAuto', $data) && \is_int($data['bCLI_MatriculeAuto'])) {
            $data['bCLI_MatriculeAuto'] = (bool) $data['bCLI_MatriculeAuto'];
        }

        if (\array_key_exists('clI_MatriculeAuto', $data) && \is_int($data['clI_MatriculeAuto'])) {
            $data['clI_MatriculeAuto'] = (bool) $data['clI_MatriculeAuto'];
        }

        if (\array_key_exists('bCLI_MatriculeLongueur', $data) && \is_int($data['bCLI_MatriculeLongueur'])) {
            $data['bCLI_MatriculeLongueur'] = (bool) $data['bCLI_MatriculeLongueur'];
        }

        if (\array_key_exists('bCLI_MethodeArbitrage', $data) && \is_int($data['bCLI_MethodeArbitrage'])) {
            $data['bCLI_MethodeArbitrage'] = (bool) $data['bCLI_MethodeArbitrage'];
        }

        if (\array_key_exists('bCLI_MethodeCalculMaintien', $data) && \is_int($data['bCLI_MethodeCalculMaintien'])) {
            $data['bCLI_MethodeCalculMaintien'] = (bool) $data['bCLI_MethodeCalculMaintien'];
        }

        if (\array_key_exists('bCLI_MethodeCalculMaintienNbM', $data) && \is_int($data['bCLI_MethodeCalculMaintienNbM'])) {
            $data['bCLI_MethodeCalculMaintienNbM'] = (bool) $data['bCLI_MethodeCalculMaintienNbM'];
        }

        if (\array_key_exists('bCLI_MethodeRetenueCP', $data) && \is_int($data['bCLI_MethodeRetenueCP'])) {
            $data['bCLI_MethodeRetenueCP'] = (bool) $data['bCLI_MethodeRetenueCP'];
        }

        if (\array_key_exists('bCLI_MethodesSuiviAbsencesDansEta', $data) && \is_int($data['bCLI_MethodesSuiviAbsencesDansEta'])) {
            $data['bCLI_MethodesSuiviAbsencesDansEta'] = (bool) $data['bCLI_MethodesSuiviAbsencesDansEta'];
        }

        if (\array_key_exists('clI_MethodesSuiviAbsencesDansEta', $data) && \is_int($data['clI_MethodesSuiviAbsencesDansEta'])) {
            $data['clI_MethodesSuiviAbsencesDansEta'] = (bool) $data['clI_MethodesSuiviAbsencesDansEta'];
        }

        if (\array_key_exists('bCLI_MethodeSuiviAbsences', $data) && \is_int($data['bCLI_MethodeSuiviAbsences'])) {
            $data['bCLI_MethodeSuiviAbsences'] = (bool) $data['bCLI_MethodeSuiviAbsences'];
        }

        if (\array_key_exists('bCLI_MethodeSuiviAbsencesDeductionHM', $data) && \is_int($data['bCLI_MethodeSuiviAbsencesDeductionHM'])) {
            $data['bCLI_MethodeSuiviAbsencesDeductionHM'] = (bool) $data['bCLI_MethodeSuiviAbsencesDeductionHM'];
        }

        if (\array_key_exists('bCLI_MethodeSuiviAbsencesJC', $data) && \is_int($data['bCLI_MethodeSuiviAbsencesJC'])) {
            $data['bCLI_MethodeSuiviAbsencesJC'] = (bool) $data['bCLI_MethodeSuiviAbsencesJC'];
        }

        if (\array_key_exists('bCLI_MethodeSuiviCP', $data) && \is_int($data['bCLI_MethodeSuiviCP'])) {
            $data['bCLI_MethodeSuiviCP'] = (bool) $data['bCLI_MethodeSuiviCP'];
        }

        if (\array_key_exists('bCLI_MethodeSuiviCPAcqMois', $data) && \is_int($data['bCLI_MethodeSuiviCPAcqMois'])) {
            $data['bCLI_MethodeSuiviCPAcqMois'] = (bool) $data['bCLI_MethodeSuiviCPAcqMois'];
        }

        if (\array_key_exists('bCLI_ModuleCTCDActif', $data) && \is_int($data['bCLI_ModuleCTCDActif'])) {
            $data['bCLI_ModuleCTCDActif'] = (bool) $data['bCLI_ModuleCTCDActif'];
        }

        if (\array_key_exists('clI_ModuleCTCDActif', $data) && \is_int($data['clI_ModuleCTCDActif'])) {
            $data['clI_ModuleCTCDActif'] = (bool) $data['clI_ModuleCTCDActif'];
        }

        if (\array_key_exists('bCLI_MontagePaiePeriodeDebut', $data) && \is_int($data['bCLI_MontagePaiePeriodeDebut'])) {
            $data['bCLI_MontagePaiePeriodeDebut'] = (bool) $data['bCLI_MontagePaiePeriodeDebut'];
        }

        if (\array_key_exists('bCLI_PaieDecalee', $data) && \is_int($data['bCLI_PaieDecalee'])) {
            $data['bCLI_PaieDecalee'] = (bool) $data['bCLI_PaieDecalee'];
        }

        if (\array_key_exists('clI_PaieDecalee', $data) && \is_int($data['clI_PaieDecalee'])) {
            $data['clI_PaieDecalee'] = (bool) $data['clI_PaieDecalee'];
        }

        if (\array_key_exists('bCLI_PersonneAContacterMel', $data) && \is_int($data['bCLI_PersonneAContacterMel'])) {
            $data['bCLI_PersonneAContacterMel'] = (bool) $data['bCLI_PersonneAContacterMel'];
        }

        if (\array_key_exists('bCLI_PersonneAContacterNom', $data) && \is_int($data['bCLI_PersonneAContacterNom'])) {
            $data['bCLI_PersonneAContacterNom'] = (bool) $data['bCLI_PersonneAContacterNom'];
        }

        if (\array_key_exists('bCLI_PersonneAContacterPrenom', $data) && \is_int($data['bCLI_PersonneAContacterPrenom'])) {
            $data['bCLI_PersonneAContacterPrenom'] = (bool) $data['bCLI_PersonneAContacterPrenom'];
        }

        if (\array_key_exists('bCLI_PersonneAContacterTel', $data) && \is_int($data['bCLI_PersonneAContacterTel'])) {
            $data['bCLI_PersonneAContacterTel'] = (bool) $data['bCLI_PersonneAContacterTel'];
        }

        if (\array_key_exists('bCLI_ReductionFillon19', $data) && \is_int($data['bCLI_ReductionFillon19'])) {
            $data['bCLI_ReductionFillon19'] = (bool) $data['bCLI_ReductionFillon19'];
        }

        if (\array_key_exists('clI_ReductionFillon19', $data) && \is_int($data['clI_ReductionFillon19'])) {
            $data['clI_ReductionFillon19'] = (bool) $data['clI_ReductionFillon19'];
        }

        if (\array_key_exists('bCLI_ReductionFillon19Debut', $data) && \is_int($data['bCLI_ReductionFillon19Debut'])) {
            $data['bCLI_ReductionFillon19Debut'] = (bool) $data['bCLI_ReductionFillon19Debut'];
        }

        if (\array_key_exists('bCLI_SepaModeComptabilisation', $data) && \is_int($data['bCLI_SepaModeComptabilisation'])) {
            $data['bCLI_SepaModeComptabilisation'] = (bool) $data['bCLI_SepaModeComptabilisation'];
        }

        if (\array_key_exists('bCLI_SortieAppliJourVersementSalaires', $data) && \is_int($data['bCLI_SortieAppliJourVersementSalaires'])) {
            $data['bCLI_SortieAppliJourVersementSalaires'] = (bool) $data['bCLI_SortieAppliJourVersementSalaires'];
        }

        if (\array_key_exists('clI_SortieAppliJourVersementSalaires', $data) && \is_int($data['clI_SortieAppliJourVersementSalaires'])) {
            $data['clI_SortieAppliJourVersementSalaires'] = (bool) $data['clI_SortieAppliJourVersementSalaires'];
        }

        if (\array_key_exists('bCLI_SortieAppliModeReglementNormal', $data) && \is_int($data['bCLI_SortieAppliModeReglementNormal'])) {
            $data['bCLI_SortieAppliModeReglementNormal'] = (bool) $data['bCLI_SortieAppliModeReglementNormal'];
        }

        if (\array_key_exists('clI_SortieAppliModeReglementNormal', $data) && \is_int($data['clI_SortieAppliModeReglementNormal'])) {
            $data['clI_SortieAppliModeReglementNormal'] = (bool) $data['clI_SortieAppliModeReglementNormal'];
        }

        if (\array_key_exists('bCLI_SousMethodeSuiviAbsences', $data) && \is_int($data['bCLI_SousMethodeSuiviAbsences'])) {
            $data['bCLI_SousMethodeSuiviAbsences'] = (bool) $data['bCLI_SousMethodeSuiviAbsences'];
        }

        if (\array_key_exists('bCLI_SousMethodeSuiviAbsencesFJ', $data) && \is_int($data['bCLI_SousMethodeSuiviAbsencesFJ'])) {
            $data['bCLI_SousMethodeSuiviAbsencesFJ'] = (bool) $data['bCLI_SousMethodeSuiviAbsencesFJ'];
        }

        if (\array_key_exists('bCLI_Subrogation', $data) && \is_int($data['bCLI_Subrogation'])) {
            $data['bCLI_Subrogation'] = (bool) $data['bCLI_Subrogation'];
        }

        if (\array_key_exists('clI_Subrogation', $data) && \is_int($data['clI_Subrogation'])) {
            $data['clI_Subrogation'] = (bool) $data['clI_Subrogation'];
        }

        if (\array_key_exists('bCLI_SubrogationVersEtaPrincipal', $data) && \is_int($data['bCLI_SubrogationVersEtaPrincipal'])) {
            $data['bCLI_SubrogationVersEtaPrincipal'] = (bool) $data['bCLI_SubrogationVersEtaPrincipal'];
        }

        if (\array_key_exists('clI_SubrogationVersEtaPrincipal', $data) && \is_int($data['clI_SubrogationVersEtaPrincipal'])) {
            $data['clI_SubrogationVersEtaPrincipal'] = (bool) $data['clI_SubrogationVersEtaPrincipal'];
        }

        if (\array_key_exists('bCLI_TassageAbsencesJours', $data) && \is_int($data['bCLI_TassageAbsencesJours'])) {
            $data['bCLI_TassageAbsencesJours'] = (bool) $data['bCLI_TassageAbsencesJours'];
        }

        if (\array_key_exists('bCLI_TaxeApprentissagePayeeCCP', $data) && \is_int($data['bCLI_TaxeApprentissagePayeeCCP'])) {
            $data['bCLI_TaxeApprentissagePayeeCCP'] = (bool) $data['bCLI_TaxeApprentissagePayeeCCP'];
        }

        if (\array_key_exists('clI_TaxeApprentissagePayeeCCP', $data) && \is_int($data['clI_TaxeApprentissagePayeeCCP'])) {
            $data['clI_TaxeApprentissagePayeeCCP'] = (bool) $data['clI_TaxeApprentissagePayeeCCP'];
        }

        if (\array_key_exists('bCLI_TaxeCotPPrev', $data) && \is_int($data['bCLI_TaxeCotPPrev'])) {
            $data['bCLI_TaxeCotPPrev'] = (bool) $data['bCLI_TaxeCotPPrev'];
        }

        if (\array_key_exists('clI_TaxeCotPPrev', $data) && \is_int($data['clI_TaxeCotPPrev'])) {
            $data['clI_TaxeCotPPrev'] = (bool) $data['clI_TaxeCotPPrev'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('bCLI_AffilieCCP', $data) && null !== $data['bCLI_AffilieCCP']) {
            $object->setBCLIAffilieCCP($data['bCLI_AffilieCCP']);
        } elseif (\array_key_exists('bCLI_AffilieCCP', $data) && null === $data['bCLI_AffilieCCP']) {
            $object->setBCLIAffilieCCP(null);
        }

        if (\array_key_exists('clI_AffilieCCP', $data) && null !== $data['clI_AffilieCCP']) {
            $object->setClIAffilieCCP($data['clI_AffilieCCP']);
        } elseif (\array_key_exists('clI_AffilieCCP', $data) && null === $data['clI_AffilieCCP']) {
            $object->setClIAffilieCCP(null);
        }

        if (\array_key_exists('bCLI_BaseCalculAnciennete', $data) && null !== $data['bCLI_BaseCalculAnciennete']) {
            $object->setBCLIBaseCalculAnciennete($data['bCLI_BaseCalculAnciennete']);
        } elseif (\array_key_exists('bCLI_BaseCalculAnciennete', $data) && null === $data['bCLI_BaseCalculAnciennete']) {
            $object->setBCLIBaseCalculAnciennete(null);
        }

        if (\array_key_exists('clI_BaseCalculAnciennete', $data) && null !== $data['clI_BaseCalculAnciennete']) {
            $object->setClIBaseCalculAnciennete($data['clI_BaseCalculAnciennete']);
        } elseif (\array_key_exists('clI_BaseCalculAnciennete', $data) && null === $data['clI_BaseCalculAnciennete']) {
            $object->setClIBaseCalculAnciennete(null);
        }

        if (\array_key_exists('bCLI_CalcAutoESInactif', $data) && null !== $data['bCLI_CalcAutoESInactif']) {
            $object->setBCLICalcAutoESInactif($data['bCLI_CalcAutoESInactif']);
        } elseif (\array_key_exists('bCLI_CalcAutoESInactif', $data) && null === $data['bCLI_CalcAutoESInactif']) {
            $object->setBCLICalcAutoESInactif(null);
        }

        if (\array_key_exists('clI_CalcAutoESInactif', $data) && null !== $data['clI_CalcAutoESInactif']) {
            $object->setClICalcAutoESInactif($data['clI_CalcAutoESInactif']);
        } elseif (\array_key_exists('clI_CalcAutoESInactif', $data) && null === $data['clI_CalcAutoESInactif']) {
            $object->setClICalcAutoESInactif(null);
        }

        if (\array_key_exists('bCLI_CalcAutoIJSSInactif', $data) && null !== $data['bCLI_CalcAutoIJSSInactif']) {
            $object->setBCLICalcAutoIJSSInactif($data['bCLI_CalcAutoIJSSInactif']);
        } elseif (\array_key_exists('bCLI_CalcAutoIJSSInactif', $data) && null === $data['bCLI_CalcAutoIJSSInactif']) {
            $object->setBCLICalcAutoIJSSInactif(null);
        }

        if (\array_key_exists('clI_CalcAutoIJSSInactif', $data) && null !== $data['clI_CalcAutoIJSSInactif']) {
            $object->setClICalcAutoIJSSInactif($data['clI_CalcAutoIJSSInactif']);
        } elseif (\array_key_exists('clI_CalcAutoIJSSInactif', $data) && null === $data['clI_CalcAutoIJSSInactif']) {
            $object->setClICalcAutoIJSSInactif(null);
        }

        if (\array_key_exists('bCLI_CalcAutoMaintienInactif', $data) && null !== $data['bCLI_CalcAutoMaintienInactif']) {
            $object->setBCLICalcAutoMaintienInactif($data['bCLI_CalcAutoMaintienInactif']);
        } elseif (\array_key_exists('bCLI_CalcAutoMaintienInactif', $data) && null === $data['bCLI_CalcAutoMaintienInactif']) {
            $object->setBCLICalcAutoMaintienInactif(null);
        }

        if (\array_key_exists('clI_CalcAutoMaintienInactif', $data) && null !== $data['clI_CalcAutoMaintienInactif']) {
            $object->setClICalcAutoMaintienInactif($data['clI_CalcAutoMaintienInactif']);
        } elseif (\array_key_exists('clI_CalcAutoMaintienInactif', $data) && null === $data['clI_CalcAutoMaintienInactif']) {
            $object->setClICalcAutoMaintienInactif(null);
        }

        if (\array_key_exists('bCLI_CalcAutoRegulInactif', $data) && null !== $data['bCLI_CalcAutoRegulInactif']) {
            $object->setBCLICalcAutoRegulInactif($data['bCLI_CalcAutoRegulInactif']);
        } elseif (\array_key_exists('bCLI_CalcAutoRegulInactif', $data) && null === $data['bCLI_CalcAutoRegulInactif']) {
            $object->setBCLICalcAutoRegulInactif(null);
        }

        if (\array_key_exists('clI_CalcAutoRegulInactif', $data) && null !== $data['clI_CalcAutoRegulInactif']) {
            $object->setClICalcAutoRegulInactif($data['clI_CalcAutoRegulInactif']);
        } elseif (\array_key_exists('clI_CalcAutoRegulInactif', $data) && null === $data['clI_CalcAutoRegulInactif']) {
            $object->setClICalcAutoRegulInactif(null);
        }

        if (\array_key_exists('bCLI_ChaineFabricationDateLimiteAbsences', $data) && null !== $data['bCLI_ChaineFabricationDateLimiteAbsences']) {
            $object->setBCLIChaineFabricationDateLimiteAbsences($data['bCLI_ChaineFabricationDateLimiteAbsences']);
        } elseif (\array_key_exists('bCLI_ChaineFabricationDateLimiteAbsences', $data) && null === $data['bCLI_ChaineFabricationDateLimiteAbsences']) {
            $object->setBCLIChaineFabricationDateLimiteAbsences(null);
        }

        if (\array_key_exists('clI_ChaineFabricationDateLimiteAbsences', $data) && null !== $data['clI_ChaineFabricationDateLimiteAbsences']) {
            $object->setClIChaineFabricationDateLimiteAbsences($data['clI_ChaineFabricationDateLimiteAbsences']);
        } elseif (\array_key_exists('clI_ChaineFabricationDateLimiteAbsences', $data) && null === $data['clI_ChaineFabricationDateLimiteAbsences']) {
            $object->setClIChaineFabricationDateLimiteAbsences(null);
        }

        if (\array_key_exists('bCLI_ConfSalActive', $data) && null !== $data['bCLI_ConfSalActive']) {
            $object->setBCLIConfSalActive($data['bCLI_ConfSalActive']);
        } elseif (\array_key_exists('bCLI_ConfSalActive', $data) && null === $data['bCLI_ConfSalActive']) {
            $object->setBCLIConfSalActive(null);
        }

        if (\array_key_exists('clI_ConfSalActive', $data) && null !== $data['clI_ConfSalActive']) {
            $object->setClIConfSalActive($data['clI_ConfSalActive']);
        } elseif (\array_key_exists('clI_ConfSalActive', $data) && null === $data['clI_ConfSalActive']) {
            $object->setClIConfSalActive(null);
        }

        if (\array_key_exists('bCLI_DFPTepa', $data) && null !== $data['bCLI_DFPTepa']) {
            $object->setBCLIDFPTepa($data['bCLI_DFPTepa']);
        } elseif (\array_key_exists('bCLI_DFPTepa', $data) && null === $data['bCLI_DFPTepa']) {
            $object->setBCLIDFPTepa(null);
        }

        if (\array_key_exists('clI_DFPTepa', $data) && null !== $data['clI_DFPTepa']) {
            $object->setClIDFPTepa($data['clI_DFPTepa']);
        } elseif (\array_key_exists('clI_DFPTepa', $data) && null === $data['clI_DFPTepa']) {
            $object->setClIDFPTepa(null);
        }

        if (\array_key_exists('bCLI_DFPTepaDebut', $data) && null !== $data['bCLI_DFPTepaDebut']) {
            $object->setBCLIDFPTepaDebut($data['bCLI_DFPTepaDebut']);
        } elseif (\array_key_exists('bCLI_DFPTepaDebut', $data) && null === $data['bCLI_DFPTepaDebut']) {
            $object->setBCLIDFPTepaDebut(null);
        }

        if (\array_key_exists('clI_DFPTepaDebut', $data) && null !== $data['clI_DFPTepaDebut']) {
            $object->setClIDFPTepaDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['clI_DFPTepaDebut']));
        } elseif (\array_key_exists('clI_DFPTepaDebut', $data) && null === $data['clI_DFPTepaDebut']) {
            $object->setClIDFPTepaDebut(null);
        }

        if (\array_key_exists('bCLI_DtDebChangePaieDecalee', $data) && null !== $data['bCLI_DtDebChangePaieDecalee']) {
            $object->setBCLIDtDebChangePaieDecalee($data['bCLI_DtDebChangePaieDecalee']);
        } elseif (\array_key_exists('bCLI_DtDebChangePaieDecalee', $data) && null === $data['bCLI_DtDebChangePaieDecalee']) {
            $object->setBCLIDtDebChangePaieDecalee(null);
        }

        if (\array_key_exists('clI_DtDebChangePaieDecalee', $data) && null !== $data['clI_DtDebChangePaieDecalee']) {
            $object->setClIDtDebChangePaieDecalee(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['clI_DtDebChangePaieDecalee']));
        } elseif (\array_key_exists('clI_DtDebChangePaieDecalee', $data) && null === $data['clI_DtDebChangePaieDecalee']) {
            $object->setClIDtDebChangePaieDecalee(null);
        }

        if (\array_key_exists('bCLI_DtDebExerciceComptable', $data) && null !== $data['bCLI_DtDebExerciceComptable']) {
            $object->setBCLIDtDebExerciceComptable($data['bCLI_DtDebExerciceComptable']);
        } elseif (\array_key_exists('bCLI_DtDebExerciceComptable', $data) && null === $data['bCLI_DtDebExerciceComptable']) {
            $object->setBCLIDtDebExerciceComptable(null);
        }

        if (\array_key_exists('clI_DtDebExerciceComptable', $data) && null !== $data['clI_DtDebExerciceComptable']) {
            $object->setClIDtDebExerciceComptable(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['clI_DtDebExerciceComptable']));
        } elseif (\array_key_exists('clI_DtDebExerciceComptable', $data) && null === $data['clI_DtDebExerciceComptable']) {
            $object->setClIDtDebExerciceComptable(null);
        }

        if (\array_key_exists('bCLI_DtFinExerciceComptable', $data) && null !== $data['bCLI_DtFinExerciceComptable']) {
            $object->setBCLIDtFinExerciceComptable($data['bCLI_DtFinExerciceComptable']);
        } elseif (\array_key_exists('bCLI_DtFinExerciceComptable', $data) && null === $data['bCLI_DtFinExerciceComptable']) {
            $object->setBCLIDtFinExerciceComptable(null);
        }

        if (\array_key_exists('clI_DtFinExerciceComptable', $data) && null !== $data['clI_DtFinExerciceComptable']) {
            $object->setClIDtFinExerciceComptable(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['clI_DtFinExerciceComptable']));
        } elseif (\array_key_exists('clI_DtFinExerciceComptable', $data) && null === $data['clI_DtFinExerciceComptable']) {
            $object->setClIDtFinExerciceComptable(null);
        }

        if (\array_key_exists('bCLI_EmployeurCivilite', $data) && null !== $data['bCLI_EmployeurCivilite']) {
            $object->setBCLIEmployeurCivilite($data['bCLI_EmployeurCivilite']);
        } elseif (\array_key_exists('bCLI_EmployeurCivilite', $data) && null === $data['bCLI_EmployeurCivilite']) {
            $object->setBCLIEmployeurCivilite(null);
        }

        if (\array_key_exists('clI_EmployeurCivilite', $data) && null !== $data['clI_EmployeurCivilite']) {
            $object->setClIEmployeurCivilite($data['clI_EmployeurCivilite']);
        } elseif (\array_key_exists('clI_EmployeurCivilite', $data) && null === $data['clI_EmployeurCivilite']) {
            $object->setClIEmployeurCivilite(null);
        }

        if (\array_key_exists('bCLI_EmployeurNom', $data) && null !== $data['bCLI_EmployeurNom']) {
            $object->setBCLIEmployeurNom($data['bCLI_EmployeurNom']);
        } elseif (\array_key_exists('bCLI_EmployeurNom', $data) && null === $data['bCLI_EmployeurNom']) {
            $object->setBCLIEmployeurNom(null);
        }

        if (\array_key_exists('clI_EmployeurNom', $data) && null !== $data['clI_EmployeurNom']) {
            $object->setClIEmployeurNom($data['clI_EmployeurNom']);
        } elseif (\array_key_exists('clI_EmployeurNom', $data) && null === $data['clI_EmployeurNom']) {
            $object->setClIEmployeurNom(null);
        }

        if (\array_key_exists('bCLI_EmployeurPrenom', $data) && null !== $data['bCLI_EmployeurPrenom']) {
            $object->setBCLIEmployeurPrenom($data['bCLI_EmployeurPrenom']);
        } elseif (\array_key_exists('bCLI_EmployeurPrenom', $data) && null === $data['bCLI_EmployeurPrenom']) {
            $object->setBCLIEmployeurPrenom(null);
        }

        if (\array_key_exists('clI_EmployeurPrenom', $data) && null !== $data['clI_EmployeurPrenom']) {
            $object->setClIEmployeurPrenom($data['clI_EmployeurPrenom']);
        } elseif (\array_key_exists('clI_EmployeurPrenom', $data) && null === $data['clI_EmployeurPrenom']) {
            $object->setClIEmployeurPrenom(null);
        }

        if (\array_key_exists('bCLI_EmployeurQualite', $data) && null !== $data['bCLI_EmployeurQualite']) {
            $object->setBCLIEmployeurQualite($data['bCLI_EmployeurQualite']);
        } elseif (\array_key_exists('bCLI_EmployeurQualite', $data) && null === $data['bCLI_EmployeurQualite']) {
            $object->setBCLIEmployeurQualite(null);
        }

        if (\array_key_exists('clI_EmployeurQualite', $data) && null !== $data['clI_EmployeurQualite']) {
            $object->setClIEmployeurQualite($data['clI_EmployeurQualite']);
        } elseif (\array_key_exists('clI_EmployeurQualite', $data) && null === $data['clI_EmployeurQualite']) {
            $object->setClIEmployeurQualite(null);
        }

        if (\array_key_exists('bCLI_EmployeurQualiteAutre', $data) && null !== $data['bCLI_EmployeurQualiteAutre']) {
            $object->setBCLIEmployeurQualiteAutre($data['bCLI_EmployeurQualiteAutre']);
        } elseif (\array_key_exists('bCLI_EmployeurQualiteAutre', $data) && null === $data['bCLI_EmployeurQualiteAutre']) {
            $object->setBCLIEmployeurQualiteAutre(null);
        }

        if (\array_key_exists('clI_EmployeurQualiteAutre', $data) && null !== $data['clI_EmployeurQualiteAutre']) {
            $object->setClIEmployeurQualiteAutre($data['clI_EmployeurQualiteAutre']);
        } elseif (\array_key_exists('clI_EmployeurQualiteAutre', $data) && null === $data['clI_EmployeurQualiteAutre']) {
            $object->setClIEmployeurQualiteAutre(null);
        }

        if (\array_key_exists('bCLI_EtatDossierPaie', $data) && null !== $data['bCLI_EtatDossierPaie']) {
            $object->setBCLIEtatDossierPaie($data['bCLI_EtatDossierPaie']);
        } elseif (\array_key_exists('bCLI_EtatDossierPaie', $data) && null === $data['bCLI_EtatDossierPaie']) {
            $object->setBCLIEtatDossierPaie(null);
        }

        if (\array_key_exists('clI_EtatDossierPaie', $data) && null !== $data['clI_EtatDossierPaie']) {
            $object->setClIEtatDossierPaie($data['clI_EtatDossierPaie']);
        } elseif (\array_key_exists('clI_EtatDossierPaie', $data) && null === $data['clI_EtatDossierPaie']) {
            $object->setClIEtatDossierPaie(null);
        }

        if (\array_key_exists('bCLI_FormaProfTranche', $data) && null !== $data['bCLI_FormaProfTranche']) {
            $object->setBCLIFormaProfTranche($data['bCLI_FormaProfTranche']);
        } elseif (\array_key_exists('bCLI_FormaProfTranche', $data) && null === $data['bCLI_FormaProfTranche']) {
            $object->setBCLIFormaProfTranche(null);
        }

        if (\array_key_exists('clI_FormaProfTranche', $data) && null !== $data['clI_FormaProfTranche']) {
            $object->setClIFormaProfTranche($data['clI_FormaProfTranche']);
        } elseif (\array_key_exists('clI_FormaProfTranche', $data) && null === $data['clI_FormaProfTranche']) {
            $object->setClIFormaProfTranche(null);
        }

        if (\array_key_exists('bCLI_FormaProfTrancheAnnee', $data) && null !== $data['bCLI_FormaProfTrancheAnnee']) {
            $object->setBCLIFormaProfTrancheAnnee($data['bCLI_FormaProfTrancheAnnee']);
        } elseif (\array_key_exists('bCLI_FormaProfTrancheAnnee', $data) && null === $data['bCLI_FormaProfTrancheAnnee']) {
            $object->setBCLIFormaProfTrancheAnnee(null);
        }

        if (\array_key_exists('clI_FormaProfTrancheAnnee', $data) && null !== $data['clI_FormaProfTrancheAnnee']) {
            $object->setClIFormaProfTrancheAnnee(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['clI_FormaProfTrancheAnnee']));
        } elseif (\array_key_exists('clI_FormaProfTrancheAnnee', $data) && null === $data['clI_FormaProfTrancheAnnee']) {
            $object->setClIFormaProfTrancheAnnee(null);
        }

        if (\array_key_exists('bCLI_FormaProfTrancheAnnee2', $data) && null !== $data['bCLI_FormaProfTrancheAnnee2']) {
            $object->setBCLIFormaProfTrancheAnnee2($data['bCLI_FormaProfTrancheAnnee2']);
        } elseif (\array_key_exists('bCLI_FormaProfTrancheAnnee2', $data) && null === $data['bCLI_FormaProfTrancheAnnee2']) {
            $object->setBCLIFormaProfTrancheAnnee2(null);
        }

        if (\array_key_exists('clI_FormaProfTrancheAnnee2', $data) && null !== $data['clI_FormaProfTrancheAnnee2']) {
            $object->setClIFormaProfTrancheAnnee2(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['clI_FormaProfTrancheAnnee2']));
        } elseif (\array_key_exists('clI_FormaProfTrancheAnnee2', $data) && null === $data['clI_FormaProfTrancheAnnee2']) {
            $object->setClIFormaProfTrancheAnnee2(null);
        }

        if (\array_key_exists('bCLI_FormaProfTrancheAnnee3', $data) && null !== $data['bCLI_FormaProfTrancheAnnee3']) {
            $object->setBCLIFormaProfTrancheAnnee3($data['bCLI_FormaProfTrancheAnnee3']);
        } elseif (\array_key_exists('bCLI_FormaProfTrancheAnnee3', $data) && null === $data['bCLI_FormaProfTrancheAnnee3']) {
            $object->setBCLIFormaProfTrancheAnnee3(null);
        }

        if (\array_key_exists('clI_FormaProfTrancheAnnee3', $data) && null !== $data['clI_FormaProfTrancheAnnee3']) {
            $object->setClIFormaProfTrancheAnnee3(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['clI_FormaProfTrancheAnnee3']));
        } elseif (\array_key_exists('clI_FormaProfTrancheAnnee3', $data) && null === $data['clI_FormaProfTrancheAnnee3']) {
            $object->setClIFormaProfTrancheAnnee3(null);
        }

        if (\array_key_exists('bCLI_FormaProfTrancheAnnee4', $data) && null !== $data['bCLI_FormaProfTrancheAnnee4']) {
            $object->setBCLIFormaProfTrancheAnnee4($data['bCLI_FormaProfTrancheAnnee4']);
        } elseif (\array_key_exists('bCLI_FormaProfTrancheAnnee4', $data) && null === $data['bCLI_FormaProfTrancheAnnee4']) {
            $object->setBCLIFormaProfTrancheAnnee4(null);
        }

        if (\array_key_exists('clI_FormaProfTrancheAnnee4', $data) && null !== $data['clI_FormaProfTrancheAnnee4']) {
            $object->setClIFormaProfTrancheAnnee4(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['clI_FormaProfTrancheAnnee4']));
        } elseif (\array_key_exists('clI_FormaProfTrancheAnnee4', $data) && null === $data['clI_FormaProfTrancheAnnee4']) {
            $object->setClIFormaProfTrancheAnnee4(null);
        }

        if (\array_key_exists('bCLI_GestionCPExclEnJours', $data) && null !== $data['bCLI_GestionCPExclEnJours']) {
            $object->setBCLIGestionCPExclEnJours($data['bCLI_GestionCPExclEnJours']);
        } elseif (\array_key_exists('bCLI_GestionCPExclEnJours', $data) && null === $data['bCLI_GestionCPExclEnJours']) {
            $object->setBCLIGestionCPExclEnJours(null);
        }

        if (\array_key_exists('clI_GestionCPExclEnJours', $data) && null !== $data['clI_GestionCPExclEnJours']) {
            $object->setClIGestionCPExclEnJours($data['clI_GestionCPExclEnJours']);
        } elseif (\array_key_exists('clI_GestionCPExclEnJours', $data) && null === $data['clI_GestionCPExclEnJours']) {
            $object->setClIGestionCPExclEnJours(null);
        }

        if (\array_key_exists('bCLI_JourVersementSalaires', $data) && null !== $data['bCLI_JourVersementSalaires']) {
            $object->setBCLIJourVersementSalaires($data['bCLI_JourVersementSalaires']);
        } elseif (\array_key_exists('bCLI_JourVersementSalaires', $data) && null === $data['bCLI_JourVersementSalaires']) {
            $object->setBCLIJourVersementSalaires(null);
        }

        if (\array_key_exists('clI_JourVersementSalaires', $data) && null !== $data['clI_JourVersementSalaires']) {
            $object->setClIJourVersementSalaires($data['clI_JourVersementSalaires']);
        } elseif (\array_key_exists('clI_JourVersementSalaires', $data) && null === $data['clI_JourVersementSalaires']) {
            $object->setClIJourVersementSalaires(null);
        }

        if (\array_key_exists('bCLI_ListesTriSalaries', $data) && null !== $data['bCLI_ListesTriSalaries']) {
            $object->setBCLIListesTriSalaries($data['bCLI_ListesTriSalaries']);
        } elseif (\array_key_exists('bCLI_ListesTriSalaries', $data) && null === $data['bCLI_ListesTriSalaries']) {
            $object->setBCLIListesTriSalaries(null);
        }

        if (\array_key_exists('clI_ListesTriSalaries', $data) && null !== $data['clI_ListesTriSalaries']) {
            $object->setClIListesTriSalaries($data['clI_ListesTriSalaries']);
        } elseif (\array_key_exists('clI_ListesTriSalaries', $data) && null === $data['clI_ListesTriSalaries']) {
            $object->setClIListesTriSalaries(null);
        }

        if (\array_key_exists('bCLI_MatriculeAuto', $data) && null !== $data['bCLI_MatriculeAuto']) {
            $object->setBCLIMatriculeAuto($data['bCLI_MatriculeAuto']);
        } elseif (\array_key_exists('bCLI_MatriculeAuto', $data) && null === $data['bCLI_MatriculeAuto']) {
            $object->setBCLIMatriculeAuto(null);
        }

        if (\array_key_exists('clI_MatriculeAuto', $data) && null !== $data['clI_MatriculeAuto']) {
            $object->setClIMatriculeAuto($data['clI_MatriculeAuto']);
        } elseif (\array_key_exists('clI_MatriculeAuto', $data) && null === $data['clI_MatriculeAuto']) {
            $object->setClIMatriculeAuto(null);
        }

        if (\array_key_exists('bCLI_MatriculeLongueur', $data) && null !== $data['bCLI_MatriculeLongueur']) {
            $object->setBCLIMatriculeLongueur($data['bCLI_MatriculeLongueur']);
        } elseif (\array_key_exists('bCLI_MatriculeLongueur', $data) && null === $data['bCLI_MatriculeLongueur']) {
            $object->setBCLIMatriculeLongueur(null);
        }

        if (\array_key_exists('clI_MatriculeLongueur', $data) && null !== $data['clI_MatriculeLongueur']) {
            $object->setClIMatriculeLongueur($data['clI_MatriculeLongueur']);
        } elseif (\array_key_exists('clI_MatriculeLongueur', $data) && null === $data['clI_MatriculeLongueur']) {
            $object->setClIMatriculeLongueur(null);
        }

        if (\array_key_exists('bCLI_MethodeArbitrage', $data) && null !== $data['bCLI_MethodeArbitrage']) {
            $object->setBCLIMethodeArbitrage($data['bCLI_MethodeArbitrage']);
        } elseif (\array_key_exists('bCLI_MethodeArbitrage', $data) && null === $data['bCLI_MethodeArbitrage']) {
            $object->setBCLIMethodeArbitrage(null);
        }

        if (\array_key_exists('clI_MethodeArbitrage', $data) && null !== $data['clI_MethodeArbitrage']) {
            $object->setClIMethodeArbitrage($data['clI_MethodeArbitrage']);
        } elseif (\array_key_exists('clI_MethodeArbitrage', $data) && null === $data['clI_MethodeArbitrage']) {
            $object->setClIMethodeArbitrage(null);
        }

        if (\array_key_exists('bCLI_MethodeCalculMaintien', $data) && null !== $data['bCLI_MethodeCalculMaintien']) {
            $object->setBCLIMethodeCalculMaintien($data['bCLI_MethodeCalculMaintien']);
        } elseif (\array_key_exists('bCLI_MethodeCalculMaintien', $data) && null === $data['bCLI_MethodeCalculMaintien']) {
            $object->setBCLIMethodeCalculMaintien(null);
        }

        if (\array_key_exists('clI_MethodeCalculMaintien', $data) && null !== $data['clI_MethodeCalculMaintien']) {
            $object->setClIMethodeCalculMaintien($data['clI_MethodeCalculMaintien']);
        } elseif (\array_key_exists('clI_MethodeCalculMaintien', $data) && null === $data['clI_MethodeCalculMaintien']) {
            $object->setClIMethodeCalculMaintien(null);
        }

        if (\array_key_exists('bCLI_MethodeCalculMaintienNbM', $data) && null !== $data['bCLI_MethodeCalculMaintienNbM']) {
            $object->setBCLIMethodeCalculMaintienNbM($data['bCLI_MethodeCalculMaintienNbM']);
        } elseif (\array_key_exists('bCLI_MethodeCalculMaintienNbM', $data) && null === $data['bCLI_MethodeCalculMaintienNbM']) {
            $object->setBCLIMethodeCalculMaintienNbM(null);
        }

        if (\array_key_exists('clI_MethodeCalculMaintienNbM', $data) && null !== $data['clI_MethodeCalculMaintienNbM']) {
            $object->setClIMethodeCalculMaintienNbM($data['clI_MethodeCalculMaintienNbM']);
        } elseif (\array_key_exists('clI_MethodeCalculMaintienNbM', $data) && null === $data['clI_MethodeCalculMaintienNbM']) {
            $object->setClIMethodeCalculMaintienNbM(null);
        }

        if (\array_key_exists('bCLI_MethodeRetenueCP', $data) && null !== $data['bCLI_MethodeRetenueCP']) {
            $object->setBCLIMethodeRetenueCP($data['bCLI_MethodeRetenueCP']);
        } elseif (\array_key_exists('bCLI_MethodeRetenueCP', $data) && null === $data['bCLI_MethodeRetenueCP']) {
            $object->setBCLIMethodeRetenueCP(null);
        }

        if (\array_key_exists('clI_MethodeRetenueCP', $data) && null !== $data['clI_MethodeRetenueCP']) {
            $object->setClIMethodeRetenueCP($data['clI_MethodeRetenueCP']);
        } elseif (\array_key_exists('clI_MethodeRetenueCP', $data) && null === $data['clI_MethodeRetenueCP']) {
            $object->setClIMethodeRetenueCP(null);
        }

        if (\array_key_exists('bCLI_MethodesSuiviAbsencesDansEta', $data) && null !== $data['bCLI_MethodesSuiviAbsencesDansEta']) {
            $object->setBCLIMethodesSuiviAbsencesDansEta($data['bCLI_MethodesSuiviAbsencesDansEta']);
        } elseif (\array_key_exists('bCLI_MethodesSuiviAbsencesDansEta', $data) && null === $data['bCLI_MethodesSuiviAbsencesDansEta']) {
            $object->setBCLIMethodesSuiviAbsencesDansEta(null);
        }

        if (\array_key_exists('clI_MethodesSuiviAbsencesDansEta', $data) && null !== $data['clI_MethodesSuiviAbsencesDansEta']) {
            $object->setClIMethodesSuiviAbsencesDansEta($data['clI_MethodesSuiviAbsencesDansEta']);
        } elseif (\array_key_exists('clI_MethodesSuiviAbsencesDansEta', $data) && null === $data['clI_MethodesSuiviAbsencesDansEta']) {
            $object->setClIMethodesSuiviAbsencesDansEta(null);
        }

        if (\array_key_exists('bCLI_MethodeSuiviAbsences', $data) && null !== $data['bCLI_MethodeSuiviAbsences']) {
            $object->setBCLIMethodeSuiviAbsences($data['bCLI_MethodeSuiviAbsences']);
        } elseif (\array_key_exists('bCLI_MethodeSuiviAbsences', $data) && null === $data['bCLI_MethodeSuiviAbsences']) {
            $object->setBCLIMethodeSuiviAbsences(null);
        }

        if (\array_key_exists('clI_MethodeSuiviAbsences', $data) && null !== $data['clI_MethodeSuiviAbsences']) {
            $object->setClIMethodeSuiviAbsences($data['clI_MethodeSuiviAbsences']);
        } elseif (\array_key_exists('clI_MethodeSuiviAbsences', $data) && null === $data['clI_MethodeSuiviAbsences']) {
            $object->setClIMethodeSuiviAbsences(null);
        }

        if (\array_key_exists('bCLI_MethodeSuiviAbsencesDeductionHM', $data) && null !== $data['bCLI_MethodeSuiviAbsencesDeductionHM']) {
            $object->setBCLIMethodeSuiviAbsencesDeductionHM($data['bCLI_MethodeSuiviAbsencesDeductionHM']);
        } elseif (\array_key_exists('bCLI_MethodeSuiviAbsencesDeductionHM', $data) && null === $data['bCLI_MethodeSuiviAbsencesDeductionHM']) {
            $object->setBCLIMethodeSuiviAbsencesDeductionHM(null);
        }

        if (\array_key_exists('clI_MethodeSuiviAbsencesDeductionHM', $data) && null !== $data['clI_MethodeSuiviAbsencesDeductionHM']) {
            $object->setClIMethodeSuiviAbsencesDeductionHM($data['clI_MethodeSuiviAbsencesDeductionHM']);
        } elseif (\array_key_exists('clI_MethodeSuiviAbsencesDeductionHM', $data) && null === $data['clI_MethodeSuiviAbsencesDeductionHM']) {
            $object->setClIMethodeSuiviAbsencesDeductionHM(null);
        }

        if (\array_key_exists('bCLI_MethodeSuiviAbsencesJC', $data) && null !== $data['bCLI_MethodeSuiviAbsencesJC']) {
            $object->setBCLIMethodeSuiviAbsencesJC($data['bCLI_MethodeSuiviAbsencesJC']);
        } elseif (\array_key_exists('bCLI_MethodeSuiviAbsencesJC', $data) && null === $data['bCLI_MethodeSuiviAbsencesJC']) {
            $object->setBCLIMethodeSuiviAbsencesJC(null);
        }

        if (\array_key_exists('clI_MethodeSuiviAbsencesJC', $data) && null !== $data['clI_MethodeSuiviAbsencesJC']) {
            $object->setClIMethodeSuiviAbsencesJC($data['clI_MethodeSuiviAbsencesJC']);
        } elseif (\array_key_exists('clI_MethodeSuiviAbsencesJC', $data) && null === $data['clI_MethodeSuiviAbsencesJC']) {
            $object->setClIMethodeSuiviAbsencesJC(null);
        }

        if (\array_key_exists('bCLI_MethodeSuiviCP', $data) && null !== $data['bCLI_MethodeSuiviCP']) {
            $object->setBCLIMethodeSuiviCP($data['bCLI_MethodeSuiviCP']);
        } elseif (\array_key_exists('bCLI_MethodeSuiviCP', $data) && null === $data['bCLI_MethodeSuiviCP']) {
            $object->setBCLIMethodeSuiviCP(null);
        }

        if (\array_key_exists('clI_MethodeSuiviCP', $data) && null !== $data['clI_MethodeSuiviCP']) {
            $object->setClIMethodeSuiviCP($data['clI_MethodeSuiviCP']);
        } elseif (\array_key_exists('clI_MethodeSuiviCP', $data) && null === $data['clI_MethodeSuiviCP']) {
            $object->setClIMethodeSuiviCP(null);
        }

        if (\array_key_exists('bCLI_MethodeSuiviCPAcqMois', $data) && null !== $data['bCLI_MethodeSuiviCPAcqMois']) {
            $object->setBCLIMethodeSuiviCPAcqMois($data['bCLI_MethodeSuiviCPAcqMois']);
        } elseif (\array_key_exists('bCLI_MethodeSuiviCPAcqMois', $data) && null === $data['bCLI_MethodeSuiviCPAcqMois']) {
            $object->setBCLIMethodeSuiviCPAcqMois(null);
        }

        if (\array_key_exists('clI_MethodeSuiviCPAcqMois', $data) && null !== $data['clI_MethodeSuiviCPAcqMois']) {
            $object->setClIMethodeSuiviCPAcqMois($data['clI_MethodeSuiviCPAcqMois']);
        } elseif (\array_key_exists('clI_MethodeSuiviCPAcqMois', $data) && null === $data['clI_MethodeSuiviCPAcqMois']) {
            $object->setClIMethodeSuiviCPAcqMois(null);
        }

        if (\array_key_exists('bCLI_ModuleCTCDActif', $data) && null !== $data['bCLI_ModuleCTCDActif']) {
            $object->setBCLIModuleCTCDActif($data['bCLI_ModuleCTCDActif']);
        } elseif (\array_key_exists('bCLI_ModuleCTCDActif', $data) && null === $data['bCLI_ModuleCTCDActif']) {
            $object->setBCLIModuleCTCDActif(null);
        }

        if (\array_key_exists('clI_ModuleCTCDActif', $data) && null !== $data['clI_ModuleCTCDActif']) {
            $object->setClIModuleCTCDActif($data['clI_ModuleCTCDActif']);
        } elseif (\array_key_exists('clI_ModuleCTCDActif', $data) && null === $data['clI_ModuleCTCDActif']) {
            $object->setClIModuleCTCDActif(null);
        }

        if (\array_key_exists('bCLI_MontagePaiePeriodeDebut', $data) && null !== $data['bCLI_MontagePaiePeriodeDebut']) {
            $object->setBCLIMontagePaiePeriodeDebut($data['bCLI_MontagePaiePeriodeDebut']);
        } elseif (\array_key_exists('bCLI_MontagePaiePeriodeDebut', $data) && null === $data['bCLI_MontagePaiePeriodeDebut']) {
            $object->setBCLIMontagePaiePeriodeDebut(null);
        }

        if (\array_key_exists('clI_MontagePaiePeriodeDebut', $data) && null !== $data['clI_MontagePaiePeriodeDebut']) {
            $object->setClIMontagePaiePeriodeDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['clI_MontagePaiePeriodeDebut']));
        } elseif (\array_key_exists('clI_MontagePaiePeriodeDebut', $data) && null === $data['clI_MontagePaiePeriodeDebut']) {
            $object->setClIMontagePaiePeriodeDebut(null);
        }

        if (\array_key_exists('bCLI_PaieDecalee', $data) && null !== $data['bCLI_PaieDecalee']) {
            $object->setBCLIPaieDecalee($data['bCLI_PaieDecalee']);
        } elseif (\array_key_exists('bCLI_PaieDecalee', $data) && null === $data['bCLI_PaieDecalee']) {
            $object->setBCLIPaieDecalee(null);
        }

        if (\array_key_exists('clI_PaieDecalee', $data) && null !== $data['clI_PaieDecalee']) {
            $object->setClIPaieDecalee($data['clI_PaieDecalee']);
        } elseif (\array_key_exists('clI_PaieDecalee', $data) && null === $data['clI_PaieDecalee']) {
            $object->setClIPaieDecalee(null);
        }

        if (\array_key_exists('bCLI_PersonneAContacterMel', $data) && null !== $data['bCLI_PersonneAContacterMel']) {
            $object->setBCLIPersonneAContacterMel($data['bCLI_PersonneAContacterMel']);
        } elseif (\array_key_exists('bCLI_PersonneAContacterMel', $data) && null === $data['bCLI_PersonneAContacterMel']) {
            $object->setBCLIPersonneAContacterMel(null);
        }

        if (\array_key_exists('clI_PersonneAContacterMel', $data) && null !== $data['clI_PersonneAContacterMel']) {
            $object->setClIPersonneAContacterMel($data['clI_PersonneAContacterMel']);
        } elseif (\array_key_exists('clI_PersonneAContacterMel', $data) && null === $data['clI_PersonneAContacterMel']) {
            $object->setClIPersonneAContacterMel(null);
        }

        if (\array_key_exists('bCLI_PersonneAContacterNom', $data) && null !== $data['bCLI_PersonneAContacterNom']) {
            $object->setBCLIPersonneAContacterNom($data['bCLI_PersonneAContacterNom']);
        } elseif (\array_key_exists('bCLI_PersonneAContacterNom', $data) && null === $data['bCLI_PersonneAContacterNom']) {
            $object->setBCLIPersonneAContacterNom(null);
        }

        if (\array_key_exists('clI_PersonneAContacterNom', $data) && null !== $data['clI_PersonneAContacterNom']) {
            $object->setClIPersonneAContacterNom($data['clI_PersonneAContacterNom']);
        } elseif (\array_key_exists('clI_PersonneAContacterNom', $data) && null === $data['clI_PersonneAContacterNom']) {
            $object->setClIPersonneAContacterNom(null);
        }

        if (\array_key_exists('bCLI_PersonneAContacterPrenom', $data) && null !== $data['bCLI_PersonneAContacterPrenom']) {
            $object->setBCLIPersonneAContacterPrenom($data['bCLI_PersonneAContacterPrenom']);
        } elseif (\array_key_exists('bCLI_PersonneAContacterPrenom', $data) && null === $data['bCLI_PersonneAContacterPrenom']) {
            $object->setBCLIPersonneAContacterPrenom(null);
        }

        if (\array_key_exists('clI_PersonneAContacterPrenom', $data) && null !== $data['clI_PersonneAContacterPrenom']) {
            $object->setClIPersonneAContacterPrenom($data['clI_PersonneAContacterPrenom']);
        } elseif (\array_key_exists('clI_PersonneAContacterPrenom', $data) && null === $data['clI_PersonneAContacterPrenom']) {
            $object->setClIPersonneAContacterPrenom(null);
        }

        if (\array_key_exists('bCLI_PersonneAContacterTel', $data) && null !== $data['bCLI_PersonneAContacterTel']) {
            $object->setBCLIPersonneAContacterTel($data['bCLI_PersonneAContacterTel']);
        } elseif (\array_key_exists('bCLI_PersonneAContacterTel', $data) && null === $data['bCLI_PersonneAContacterTel']) {
            $object->setBCLIPersonneAContacterTel(null);
        }

        if (\array_key_exists('clI_PersonneAContacterTel', $data) && null !== $data['clI_PersonneAContacterTel']) {
            $object->setClIPersonneAContacterTel($data['clI_PersonneAContacterTel']);
        } elseif (\array_key_exists('clI_PersonneAContacterTel', $data) && null === $data['clI_PersonneAContacterTel']) {
            $object->setClIPersonneAContacterTel(null);
        }

        if (\array_key_exists('bCLI_ReductionFillon19', $data) && null !== $data['bCLI_ReductionFillon19']) {
            $object->setBCLIReductionFillon19($data['bCLI_ReductionFillon19']);
        } elseif (\array_key_exists('bCLI_ReductionFillon19', $data) && null === $data['bCLI_ReductionFillon19']) {
            $object->setBCLIReductionFillon19(null);
        }

        if (\array_key_exists('clI_ReductionFillon19', $data) && null !== $data['clI_ReductionFillon19']) {
            $object->setClIReductionFillon19($data['clI_ReductionFillon19']);
        } elseif (\array_key_exists('clI_ReductionFillon19', $data) && null === $data['clI_ReductionFillon19']) {
            $object->setClIReductionFillon19(null);
        }

        if (\array_key_exists('bCLI_ReductionFillon19Debut', $data) && null !== $data['bCLI_ReductionFillon19Debut']) {
            $object->setBCLIReductionFillon19Debut($data['bCLI_ReductionFillon19Debut']);
        } elseif (\array_key_exists('bCLI_ReductionFillon19Debut', $data) && null === $data['bCLI_ReductionFillon19Debut']) {
            $object->setBCLIReductionFillon19Debut(null);
        }

        if (\array_key_exists('clI_ReductionFillon19Debut', $data) && null !== $data['clI_ReductionFillon19Debut']) {
            $object->setClIReductionFillon19Debut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['clI_ReductionFillon19Debut']));
        } elseif (\array_key_exists('clI_ReductionFillon19Debut', $data) && null === $data['clI_ReductionFillon19Debut']) {
            $object->setClIReductionFillon19Debut(null);
        }

        if (\array_key_exists('bCLI_SepaModeComptabilisation', $data) && null !== $data['bCLI_SepaModeComptabilisation']) {
            $object->setBCLISepaModeComptabilisation($data['bCLI_SepaModeComptabilisation']);
        } elseif (\array_key_exists('bCLI_SepaModeComptabilisation', $data) && null === $data['bCLI_SepaModeComptabilisation']) {
            $object->setBCLISepaModeComptabilisation(null);
        }

        if (\array_key_exists('clI_SepaModeComptabilisation', $data) && null !== $data['clI_SepaModeComptabilisation']) {
            $object->setClISepaModeComptabilisation($data['clI_SepaModeComptabilisation']);
        } elseif (\array_key_exists('clI_SepaModeComptabilisation', $data) && null === $data['clI_SepaModeComptabilisation']) {
            $object->setClISepaModeComptabilisation(null);
        }

        if (\array_key_exists('bCLI_SortieAppliJourVersementSalaires', $data) && null !== $data['bCLI_SortieAppliJourVersementSalaires']) {
            $object->setBCLISortieAppliJourVersementSalaires($data['bCLI_SortieAppliJourVersementSalaires']);
        } elseif (\array_key_exists('bCLI_SortieAppliJourVersementSalaires', $data) && null === $data['bCLI_SortieAppliJourVersementSalaires']) {
            $object->setBCLISortieAppliJourVersementSalaires(null);
        }

        if (\array_key_exists('clI_SortieAppliJourVersementSalaires', $data) && null !== $data['clI_SortieAppliJourVersementSalaires']) {
            $object->setClISortieAppliJourVersementSalaires($data['clI_SortieAppliJourVersementSalaires']);
        } elseif (\array_key_exists('clI_SortieAppliJourVersementSalaires', $data) && null === $data['clI_SortieAppliJourVersementSalaires']) {
            $object->setClISortieAppliJourVersementSalaires(null);
        }

        if (\array_key_exists('bCLI_SortieAppliModeReglementNormal', $data) && null !== $data['bCLI_SortieAppliModeReglementNormal']) {
            $object->setBCLISortieAppliModeReglementNormal($data['bCLI_SortieAppliModeReglementNormal']);
        } elseif (\array_key_exists('bCLI_SortieAppliModeReglementNormal', $data) && null === $data['bCLI_SortieAppliModeReglementNormal']) {
            $object->setBCLISortieAppliModeReglementNormal(null);
        }

        if (\array_key_exists('clI_SortieAppliModeReglementNormal', $data) && null !== $data['clI_SortieAppliModeReglementNormal']) {
            $object->setClISortieAppliModeReglementNormal($data['clI_SortieAppliModeReglementNormal']);
        } elseif (\array_key_exists('clI_SortieAppliModeReglementNormal', $data) && null === $data['clI_SortieAppliModeReglementNormal']) {
            $object->setClISortieAppliModeReglementNormal(null);
        }

        if (\array_key_exists('bCLI_SousMethodeSuiviAbsences', $data) && null !== $data['bCLI_SousMethodeSuiviAbsences']) {
            $object->setBCLISousMethodeSuiviAbsences($data['bCLI_SousMethodeSuiviAbsences']);
        } elseif (\array_key_exists('bCLI_SousMethodeSuiviAbsences', $data) && null === $data['bCLI_SousMethodeSuiviAbsences']) {
            $object->setBCLISousMethodeSuiviAbsences(null);
        }

        if (\array_key_exists('clI_SousMethodeSuiviAbsences', $data) && null !== $data['clI_SousMethodeSuiviAbsences']) {
            $object->setClISousMethodeSuiviAbsences($data['clI_SousMethodeSuiviAbsences']);
        } elseif (\array_key_exists('clI_SousMethodeSuiviAbsences', $data) && null === $data['clI_SousMethodeSuiviAbsences']) {
            $object->setClISousMethodeSuiviAbsences(null);
        }

        if (\array_key_exists('bCLI_SousMethodeSuiviAbsencesFJ', $data) && null !== $data['bCLI_SousMethodeSuiviAbsencesFJ']) {
            $object->setBCLISousMethodeSuiviAbsencesFJ($data['bCLI_SousMethodeSuiviAbsencesFJ']);
        } elseif (\array_key_exists('bCLI_SousMethodeSuiviAbsencesFJ', $data) && null === $data['bCLI_SousMethodeSuiviAbsencesFJ']) {
            $object->setBCLISousMethodeSuiviAbsencesFJ(null);
        }

        if (\array_key_exists('clI_SousMethodeSuiviAbsencesFJ', $data) && null !== $data['clI_SousMethodeSuiviAbsencesFJ']) {
            $object->setClISousMethodeSuiviAbsencesFJ($data['clI_SousMethodeSuiviAbsencesFJ']);
        } elseif (\array_key_exists('clI_SousMethodeSuiviAbsencesFJ', $data) && null === $data['clI_SousMethodeSuiviAbsencesFJ']) {
            $object->setClISousMethodeSuiviAbsencesFJ(null);
        }

        if (\array_key_exists('bCLI_Subrogation', $data) && null !== $data['bCLI_Subrogation']) {
            $object->setBCLISubrogation($data['bCLI_Subrogation']);
        } elseif (\array_key_exists('bCLI_Subrogation', $data) && null === $data['bCLI_Subrogation']) {
            $object->setBCLISubrogation(null);
        }

        if (\array_key_exists('clI_Subrogation', $data) && null !== $data['clI_Subrogation']) {
            $object->setClISubrogation($data['clI_Subrogation']);
        } elseif (\array_key_exists('clI_Subrogation', $data) && null === $data['clI_Subrogation']) {
            $object->setClISubrogation(null);
        }

        if (\array_key_exists('bCLI_SubrogationVersEtaPrincipal', $data) && null !== $data['bCLI_SubrogationVersEtaPrincipal']) {
            $object->setBCLISubrogationVersEtaPrincipal($data['bCLI_SubrogationVersEtaPrincipal']);
        } elseif (\array_key_exists('bCLI_SubrogationVersEtaPrincipal', $data) && null === $data['bCLI_SubrogationVersEtaPrincipal']) {
            $object->setBCLISubrogationVersEtaPrincipal(null);
        }

        if (\array_key_exists('clI_SubrogationVersEtaPrincipal', $data) && null !== $data['clI_SubrogationVersEtaPrincipal']) {
            $object->setClISubrogationVersEtaPrincipal($data['clI_SubrogationVersEtaPrincipal']);
        } elseif (\array_key_exists('clI_SubrogationVersEtaPrincipal', $data) && null === $data['clI_SubrogationVersEtaPrincipal']) {
            $object->setClISubrogationVersEtaPrincipal(null);
        }

        if (\array_key_exists('bCLI_TassageAbsencesJours', $data) && null !== $data['bCLI_TassageAbsencesJours']) {
            $object->setBCLITassageAbsencesJours($data['bCLI_TassageAbsencesJours']);
        } elseif (\array_key_exists('bCLI_TassageAbsencesJours', $data) && null === $data['bCLI_TassageAbsencesJours']) {
            $object->setBCLITassageAbsencesJours(null);
        }

        if (\array_key_exists('clI_TassageAbsencesJours', $data) && null !== $data['clI_TassageAbsencesJours']) {
            $object->setClITassageAbsencesJours($data['clI_TassageAbsencesJours']);
        } elseif (\array_key_exists('clI_TassageAbsencesJours', $data) && null === $data['clI_TassageAbsencesJours']) {
            $object->setClITassageAbsencesJours(null);
        }

        if (\array_key_exists('bCLI_TaxeApprentissagePayeeCCP', $data) && null !== $data['bCLI_TaxeApprentissagePayeeCCP']) {
            $object->setBCLITaxeApprentissagePayeeCCP($data['bCLI_TaxeApprentissagePayeeCCP']);
        } elseif (\array_key_exists('bCLI_TaxeApprentissagePayeeCCP', $data) && null === $data['bCLI_TaxeApprentissagePayeeCCP']) {
            $object->setBCLITaxeApprentissagePayeeCCP(null);
        }

        if (\array_key_exists('clI_TaxeApprentissagePayeeCCP', $data) && null !== $data['clI_TaxeApprentissagePayeeCCP']) {
            $object->setClITaxeApprentissagePayeeCCP($data['clI_TaxeApprentissagePayeeCCP']);
        } elseif (\array_key_exists('clI_TaxeApprentissagePayeeCCP', $data) && null === $data['clI_TaxeApprentissagePayeeCCP']) {
            $object->setClITaxeApprentissagePayeeCCP(null);
        }

        if (\array_key_exists('bCLI_TaxeCotPPrev', $data) && null !== $data['bCLI_TaxeCotPPrev']) {
            $object->setBCLITaxeCotPPrev($data['bCLI_TaxeCotPPrev']);
        } elseif (\array_key_exists('bCLI_TaxeCotPPrev', $data) && null === $data['bCLI_TaxeCotPPrev']) {
            $object->setBCLITaxeCotPPrev(null);
        }

        if (\array_key_exists('clI_TaxeCotPPrev', $data) && null !== $data['clI_TaxeCotPPrev']) {
            $object->setClITaxeCotPPrev($data['clI_TaxeCotPPrev']);
        } elseif (\array_key_exists('clI_TaxeCotPPrev', $data) && null === $data['clI_TaxeCotPPrev']) {
            $object->setClITaxeCotPPrev(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('bCLIAffilieCCP') && null !== $data->getBCLIAffilieCCP()) {
            $dataArray['bCLI_AffilieCCP'] = $data->getBCLIAffilieCCP();
        }

        if ($data->isInitialized('clIAffilieCCP') && null !== $data->getClIAffilieCCP()) {
            $dataArray['clI_AffilieCCP'] = $data->getClIAffilieCCP();
        }

        if ($data->isInitialized('bCLIBaseCalculAnciennete') && null !== $data->getBCLIBaseCalculAnciennete()) {
            $dataArray['bCLI_BaseCalculAnciennete'] = $data->getBCLIBaseCalculAnciennete();
        }

        if ($data->isInitialized('clIBaseCalculAnciennete') && null !== $data->getClIBaseCalculAnciennete()) {
            $dataArray['clI_BaseCalculAnciennete'] = $data->getClIBaseCalculAnciennete();
        }

        if ($data->isInitialized('bCLICalcAutoESInactif') && null !== $data->getBCLICalcAutoESInactif()) {
            $dataArray['bCLI_CalcAutoESInactif'] = $data->getBCLICalcAutoESInactif();
        }

        if ($data->isInitialized('clICalcAutoESInactif') && null !== $data->getClICalcAutoESInactif()) {
            $dataArray['clI_CalcAutoESInactif'] = $data->getClICalcAutoESInactif();
        }

        if ($data->isInitialized('bCLICalcAutoIJSSInactif') && null !== $data->getBCLICalcAutoIJSSInactif()) {
            $dataArray['bCLI_CalcAutoIJSSInactif'] = $data->getBCLICalcAutoIJSSInactif();
        }

        if ($data->isInitialized('clICalcAutoIJSSInactif') && null !== $data->getClICalcAutoIJSSInactif()) {
            $dataArray['clI_CalcAutoIJSSInactif'] = $data->getClICalcAutoIJSSInactif();
        }

        if ($data->isInitialized('bCLICalcAutoMaintienInactif') && null !== $data->getBCLICalcAutoMaintienInactif()) {
            $dataArray['bCLI_CalcAutoMaintienInactif'] = $data->getBCLICalcAutoMaintienInactif();
        }

        if ($data->isInitialized('clICalcAutoMaintienInactif') && null !== $data->getClICalcAutoMaintienInactif()) {
            $dataArray['clI_CalcAutoMaintienInactif'] = $data->getClICalcAutoMaintienInactif();
        }

        if ($data->isInitialized('bCLICalcAutoRegulInactif') && null !== $data->getBCLICalcAutoRegulInactif()) {
            $dataArray['bCLI_CalcAutoRegulInactif'] = $data->getBCLICalcAutoRegulInactif();
        }

        if ($data->isInitialized('clICalcAutoRegulInactif') && null !== $data->getClICalcAutoRegulInactif()) {
            $dataArray['clI_CalcAutoRegulInactif'] = $data->getClICalcAutoRegulInactif();
        }

        if ($data->isInitialized('bCLIChaineFabricationDateLimiteAbsences') && null !== $data->getBCLIChaineFabricationDateLimiteAbsences()) {
            $dataArray['bCLI_ChaineFabricationDateLimiteAbsences'] = $data->getBCLIChaineFabricationDateLimiteAbsences();
        }

        if ($data->isInitialized('clIChaineFabricationDateLimiteAbsences') && null !== $data->getClIChaineFabricationDateLimiteAbsences()) {
            $dataArray['clI_ChaineFabricationDateLimiteAbsences'] = $data->getClIChaineFabricationDateLimiteAbsences();
        }

        if ($data->isInitialized('bCLIConfSalActive') && null !== $data->getBCLIConfSalActive()) {
            $dataArray['bCLI_ConfSalActive'] = $data->getBCLIConfSalActive();
        }

        if ($data->isInitialized('clIConfSalActive') && null !== $data->getClIConfSalActive()) {
            $dataArray['clI_ConfSalActive'] = $data->getClIConfSalActive();
        }

        if ($data->isInitialized('bCLIDFPTepa') && null !== $data->getBCLIDFPTepa()) {
            $dataArray['bCLI_DFPTepa'] = $data->getBCLIDFPTepa();
        }

        if ($data->isInitialized('clIDFPTepa') && null !== $data->getClIDFPTepa()) {
            $dataArray['clI_DFPTepa'] = $data->getClIDFPTepa();
        }

        if ($data->isInitialized('bCLIDFPTepaDebut') && null !== $data->getBCLIDFPTepaDebut()) {
            $dataArray['bCLI_DFPTepaDebut'] = $data->getBCLIDFPTepaDebut();
        }

        if ($data->isInitialized('clIDFPTepaDebut') && null !== $data->getClIDFPTepaDebut()) {
            $dataArray['clI_DFPTepaDebut'] = $data->getClIDFPTepaDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bCLIDtDebChangePaieDecalee') && null !== $data->getBCLIDtDebChangePaieDecalee()) {
            $dataArray['bCLI_DtDebChangePaieDecalee'] = $data->getBCLIDtDebChangePaieDecalee();
        }

        if ($data->isInitialized('clIDtDebChangePaieDecalee') && null !== $data->getClIDtDebChangePaieDecalee()) {
            $dataArray['clI_DtDebChangePaieDecalee'] = $data->getClIDtDebChangePaieDecalee()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bCLIDtDebExerciceComptable') && null !== $data->getBCLIDtDebExerciceComptable()) {
            $dataArray['bCLI_DtDebExerciceComptable'] = $data->getBCLIDtDebExerciceComptable();
        }

        if ($data->isInitialized('clIDtDebExerciceComptable') && null !== $data->getClIDtDebExerciceComptable()) {
            $dataArray['clI_DtDebExerciceComptable'] = $data->getClIDtDebExerciceComptable()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bCLIDtFinExerciceComptable') && null !== $data->getBCLIDtFinExerciceComptable()) {
            $dataArray['bCLI_DtFinExerciceComptable'] = $data->getBCLIDtFinExerciceComptable();
        }

        if ($data->isInitialized('clIDtFinExerciceComptable') && null !== $data->getClIDtFinExerciceComptable()) {
            $dataArray['clI_DtFinExerciceComptable'] = $data->getClIDtFinExerciceComptable()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bCLIEmployeurCivilite') && null !== $data->getBCLIEmployeurCivilite()) {
            $dataArray['bCLI_EmployeurCivilite'] = $data->getBCLIEmployeurCivilite();
        }

        if ($data->isInitialized('clIEmployeurCivilite') && null !== $data->getClIEmployeurCivilite()) {
            $dataArray['clI_EmployeurCivilite'] = $data->getClIEmployeurCivilite();
        }

        if ($data->isInitialized('bCLIEmployeurNom') && null !== $data->getBCLIEmployeurNom()) {
            $dataArray['bCLI_EmployeurNom'] = $data->getBCLIEmployeurNom();
        }

        if ($data->isInitialized('clIEmployeurNom') && null !== $data->getClIEmployeurNom()) {
            $dataArray['clI_EmployeurNom'] = $data->getClIEmployeurNom();
        }

        if ($data->isInitialized('bCLIEmployeurPrenom') && null !== $data->getBCLIEmployeurPrenom()) {
            $dataArray['bCLI_EmployeurPrenom'] = $data->getBCLIEmployeurPrenom();
        }

        if ($data->isInitialized('clIEmployeurPrenom') && null !== $data->getClIEmployeurPrenom()) {
            $dataArray['clI_EmployeurPrenom'] = $data->getClIEmployeurPrenom();
        }

        if ($data->isInitialized('bCLIEmployeurQualite') && null !== $data->getBCLIEmployeurQualite()) {
            $dataArray['bCLI_EmployeurQualite'] = $data->getBCLIEmployeurQualite();
        }

        if ($data->isInitialized('clIEmployeurQualite') && null !== $data->getClIEmployeurQualite()) {
            $dataArray['clI_EmployeurQualite'] = $data->getClIEmployeurQualite();
        }

        if ($data->isInitialized('bCLIEmployeurQualiteAutre') && null !== $data->getBCLIEmployeurQualiteAutre()) {
            $dataArray['bCLI_EmployeurQualiteAutre'] = $data->getBCLIEmployeurQualiteAutre();
        }

        if ($data->isInitialized('clIEmployeurQualiteAutre') && null !== $data->getClIEmployeurQualiteAutre()) {
            $dataArray['clI_EmployeurQualiteAutre'] = $data->getClIEmployeurQualiteAutre();
        }

        if ($data->isInitialized('bCLIEtatDossierPaie') && null !== $data->getBCLIEtatDossierPaie()) {
            $dataArray['bCLI_EtatDossierPaie'] = $data->getBCLIEtatDossierPaie();
        }

        if ($data->isInitialized('clIEtatDossierPaie') && null !== $data->getClIEtatDossierPaie()) {
            $dataArray['clI_EtatDossierPaie'] = $data->getClIEtatDossierPaie();
        }

        if ($data->isInitialized('bCLIFormaProfTranche') && null !== $data->getBCLIFormaProfTranche()) {
            $dataArray['bCLI_FormaProfTranche'] = $data->getBCLIFormaProfTranche();
        }

        if ($data->isInitialized('clIFormaProfTranche') && null !== $data->getClIFormaProfTranche()) {
            $dataArray['clI_FormaProfTranche'] = $data->getClIFormaProfTranche();
        }

        if ($data->isInitialized('bCLIFormaProfTrancheAnnee') && null !== $data->getBCLIFormaProfTrancheAnnee()) {
            $dataArray['bCLI_FormaProfTrancheAnnee'] = $data->getBCLIFormaProfTrancheAnnee();
        }

        if ($data->isInitialized('clIFormaProfTrancheAnnee') && null !== $data->getClIFormaProfTrancheAnnee()) {
            $dataArray['clI_FormaProfTrancheAnnee'] = $data->getClIFormaProfTrancheAnnee()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bCLIFormaProfTrancheAnnee2') && null !== $data->getBCLIFormaProfTrancheAnnee2()) {
            $dataArray['bCLI_FormaProfTrancheAnnee2'] = $data->getBCLIFormaProfTrancheAnnee2();
        }

        if ($data->isInitialized('clIFormaProfTrancheAnnee2') && null !== $data->getClIFormaProfTrancheAnnee2()) {
            $dataArray['clI_FormaProfTrancheAnnee2'] = $data->getClIFormaProfTrancheAnnee2()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bCLIFormaProfTrancheAnnee3') && null !== $data->getBCLIFormaProfTrancheAnnee3()) {
            $dataArray['bCLI_FormaProfTrancheAnnee3'] = $data->getBCLIFormaProfTrancheAnnee3();
        }

        if ($data->isInitialized('clIFormaProfTrancheAnnee3') && null !== $data->getClIFormaProfTrancheAnnee3()) {
            $dataArray['clI_FormaProfTrancheAnnee3'] = $data->getClIFormaProfTrancheAnnee3()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bCLIFormaProfTrancheAnnee4') && null !== $data->getBCLIFormaProfTrancheAnnee4()) {
            $dataArray['bCLI_FormaProfTrancheAnnee4'] = $data->getBCLIFormaProfTrancheAnnee4();
        }

        if ($data->isInitialized('clIFormaProfTrancheAnnee4') && null !== $data->getClIFormaProfTrancheAnnee4()) {
            $dataArray['clI_FormaProfTrancheAnnee4'] = $data->getClIFormaProfTrancheAnnee4()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bCLIGestionCPExclEnJours') && null !== $data->getBCLIGestionCPExclEnJours()) {
            $dataArray['bCLI_GestionCPExclEnJours'] = $data->getBCLIGestionCPExclEnJours();
        }

        if ($data->isInitialized('clIGestionCPExclEnJours') && null !== $data->getClIGestionCPExclEnJours()) {
            $dataArray['clI_GestionCPExclEnJours'] = $data->getClIGestionCPExclEnJours();
        }

        if ($data->isInitialized('bCLIJourVersementSalaires') && null !== $data->getBCLIJourVersementSalaires()) {
            $dataArray['bCLI_JourVersementSalaires'] = $data->getBCLIJourVersementSalaires();
        }

        if ($data->isInitialized('clIJourVersementSalaires') && null !== $data->getClIJourVersementSalaires()) {
            $dataArray['clI_JourVersementSalaires'] = $data->getClIJourVersementSalaires();
        }

        if ($data->isInitialized('bCLIListesTriSalaries') && null !== $data->getBCLIListesTriSalaries()) {
            $dataArray['bCLI_ListesTriSalaries'] = $data->getBCLIListesTriSalaries();
        }

        if ($data->isInitialized('clIListesTriSalaries') && null !== $data->getClIListesTriSalaries()) {
            $dataArray['clI_ListesTriSalaries'] = $data->getClIListesTriSalaries();
        }

        if ($data->isInitialized('bCLIMatriculeAuto') && null !== $data->getBCLIMatriculeAuto()) {
            $dataArray['bCLI_MatriculeAuto'] = $data->getBCLIMatriculeAuto();
        }

        if ($data->isInitialized('clIMatriculeAuto') && null !== $data->getClIMatriculeAuto()) {
            $dataArray['clI_MatriculeAuto'] = $data->getClIMatriculeAuto();
        }

        if ($data->isInitialized('bCLIMatriculeLongueur') && null !== $data->getBCLIMatriculeLongueur()) {
            $dataArray['bCLI_MatriculeLongueur'] = $data->getBCLIMatriculeLongueur();
        }

        if ($data->isInitialized('clIMatriculeLongueur') && null !== $data->getClIMatriculeLongueur()) {
            $dataArray['clI_MatriculeLongueur'] = $data->getClIMatriculeLongueur();
        }

        if ($data->isInitialized('bCLIMethodeArbitrage') && null !== $data->getBCLIMethodeArbitrage()) {
            $dataArray['bCLI_MethodeArbitrage'] = $data->getBCLIMethodeArbitrage();
        }

        if ($data->isInitialized('clIMethodeArbitrage') && null !== $data->getClIMethodeArbitrage()) {
            $dataArray['clI_MethodeArbitrage'] = $data->getClIMethodeArbitrage();
        }

        if ($data->isInitialized('bCLIMethodeCalculMaintien') && null !== $data->getBCLIMethodeCalculMaintien()) {
            $dataArray['bCLI_MethodeCalculMaintien'] = $data->getBCLIMethodeCalculMaintien();
        }

        if ($data->isInitialized('clIMethodeCalculMaintien') && null !== $data->getClIMethodeCalculMaintien()) {
            $dataArray['clI_MethodeCalculMaintien'] = $data->getClIMethodeCalculMaintien();
        }

        if ($data->isInitialized('bCLIMethodeCalculMaintienNbM') && null !== $data->getBCLIMethodeCalculMaintienNbM()) {
            $dataArray['bCLI_MethodeCalculMaintienNbM'] = $data->getBCLIMethodeCalculMaintienNbM();
        }

        if ($data->isInitialized('clIMethodeCalculMaintienNbM') && null !== $data->getClIMethodeCalculMaintienNbM()) {
            $dataArray['clI_MethodeCalculMaintienNbM'] = $data->getClIMethodeCalculMaintienNbM();
        }

        if ($data->isInitialized('bCLIMethodeRetenueCP') && null !== $data->getBCLIMethodeRetenueCP()) {
            $dataArray['bCLI_MethodeRetenueCP'] = $data->getBCLIMethodeRetenueCP();
        }

        if ($data->isInitialized('clIMethodeRetenueCP') && null !== $data->getClIMethodeRetenueCP()) {
            $dataArray['clI_MethodeRetenueCP'] = $data->getClIMethodeRetenueCP();
        }

        if ($data->isInitialized('bCLIMethodesSuiviAbsencesDansEta') && null !== $data->getBCLIMethodesSuiviAbsencesDansEta()) {
            $dataArray['bCLI_MethodesSuiviAbsencesDansEta'] = $data->getBCLIMethodesSuiviAbsencesDansEta();
        }

        if ($data->isInitialized('clIMethodesSuiviAbsencesDansEta') && null !== $data->getClIMethodesSuiviAbsencesDansEta()) {
            $dataArray['clI_MethodesSuiviAbsencesDansEta'] = $data->getClIMethodesSuiviAbsencesDansEta();
        }

        if ($data->isInitialized('bCLIMethodeSuiviAbsences') && null !== $data->getBCLIMethodeSuiviAbsences()) {
            $dataArray['bCLI_MethodeSuiviAbsences'] = $data->getBCLIMethodeSuiviAbsences();
        }

        if ($data->isInitialized('clIMethodeSuiviAbsences') && null !== $data->getClIMethodeSuiviAbsences()) {
            $dataArray['clI_MethodeSuiviAbsences'] = $data->getClIMethodeSuiviAbsences();
        }

        if ($data->isInitialized('bCLIMethodeSuiviAbsencesDeductionHM') && null !== $data->getBCLIMethodeSuiviAbsencesDeductionHM()) {
            $dataArray['bCLI_MethodeSuiviAbsencesDeductionHM'] = $data->getBCLIMethodeSuiviAbsencesDeductionHM();
        }

        if ($data->isInitialized('clIMethodeSuiviAbsencesDeductionHM') && null !== $data->getClIMethodeSuiviAbsencesDeductionHM()) {
            $dataArray['clI_MethodeSuiviAbsencesDeductionHM'] = $data->getClIMethodeSuiviAbsencesDeductionHM();
        }

        if ($data->isInitialized('bCLIMethodeSuiviAbsencesJC') && null !== $data->getBCLIMethodeSuiviAbsencesJC()) {
            $dataArray['bCLI_MethodeSuiviAbsencesJC'] = $data->getBCLIMethodeSuiviAbsencesJC();
        }

        if ($data->isInitialized('clIMethodeSuiviAbsencesJC') && null !== $data->getClIMethodeSuiviAbsencesJC()) {
            $dataArray['clI_MethodeSuiviAbsencesJC'] = $data->getClIMethodeSuiviAbsencesJC();
        }

        if ($data->isInitialized('bCLIMethodeSuiviCP') && null !== $data->getBCLIMethodeSuiviCP()) {
            $dataArray['bCLI_MethodeSuiviCP'] = $data->getBCLIMethodeSuiviCP();
        }

        if ($data->isInitialized('clIMethodeSuiviCP') && null !== $data->getClIMethodeSuiviCP()) {
            $dataArray['clI_MethodeSuiviCP'] = $data->getClIMethodeSuiviCP();
        }

        if ($data->isInitialized('bCLIMethodeSuiviCPAcqMois') && null !== $data->getBCLIMethodeSuiviCPAcqMois()) {
            $dataArray['bCLI_MethodeSuiviCPAcqMois'] = $data->getBCLIMethodeSuiviCPAcqMois();
        }

        if ($data->isInitialized('clIMethodeSuiviCPAcqMois') && null !== $data->getClIMethodeSuiviCPAcqMois()) {
            $dataArray['clI_MethodeSuiviCPAcqMois'] = $data->getClIMethodeSuiviCPAcqMois();
        }

        if ($data->isInitialized('bCLIModuleCTCDActif') && null !== $data->getBCLIModuleCTCDActif()) {
            $dataArray['bCLI_ModuleCTCDActif'] = $data->getBCLIModuleCTCDActif();
        }

        if ($data->isInitialized('clIModuleCTCDActif') && null !== $data->getClIModuleCTCDActif()) {
            $dataArray['clI_ModuleCTCDActif'] = $data->getClIModuleCTCDActif();
        }

        if ($data->isInitialized('bCLIMontagePaiePeriodeDebut') && null !== $data->getBCLIMontagePaiePeriodeDebut()) {
            $dataArray['bCLI_MontagePaiePeriodeDebut'] = $data->getBCLIMontagePaiePeriodeDebut();
        }

        if ($data->isInitialized('clIMontagePaiePeriodeDebut') && null !== $data->getClIMontagePaiePeriodeDebut()) {
            $dataArray['clI_MontagePaiePeriodeDebut'] = $data->getClIMontagePaiePeriodeDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bCLIPaieDecalee') && null !== $data->getBCLIPaieDecalee()) {
            $dataArray['bCLI_PaieDecalee'] = $data->getBCLIPaieDecalee();
        }

        if ($data->isInitialized('clIPaieDecalee') && null !== $data->getClIPaieDecalee()) {
            $dataArray['clI_PaieDecalee'] = $data->getClIPaieDecalee();
        }

        if ($data->isInitialized('bCLIPersonneAContacterMel') && null !== $data->getBCLIPersonneAContacterMel()) {
            $dataArray['bCLI_PersonneAContacterMel'] = $data->getBCLIPersonneAContacterMel();
        }

        if ($data->isInitialized('clIPersonneAContacterMel') && null !== $data->getClIPersonneAContacterMel()) {
            $dataArray['clI_PersonneAContacterMel'] = $data->getClIPersonneAContacterMel();
        }

        if ($data->isInitialized('bCLIPersonneAContacterNom') && null !== $data->getBCLIPersonneAContacterNom()) {
            $dataArray['bCLI_PersonneAContacterNom'] = $data->getBCLIPersonneAContacterNom();
        }

        if ($data->isInitialized('clIPersonneAContacterNom') && null !== $data->getClIPersonneAContacterNom()) {
            $dataArray['clI_PersonneAContacterNom'] = $data->getClIPersonneAContacterNom();
        }

        if ($data->isInitialized('bCLIPersonneAContacterPrenom') && null !== $data->getBCLIPersonneAContacterPrenom()) {
            $dataArray['bCLI_PersonneAContacterPrenom'] = $data->getBCLIPersonneAContacterPrenom();
        }

        if ($data->isInitialized('clIPersonneAContacterPrenom') && null !== $data->getClIPersonneAContacterPrenom()) {
            $dataArray['clI_PersonneAContacterPrenom'] = $data->getClIPersonneAContacterPrenom();
        }

        if ($data->isInitialized('bCLIPersonneAContacterTel') && null !== $data->getBCLIPersonneAContacterTel()) {
            $dataArray['bCLI_PersonneAContacterTel'] = $data->getBCLIPersonneAContacterTel();
        }

        if ($data->isInitialized('clIPersonneAContacterTel') && null !== $data->getClIPersonneAContacterTel()) {
            $dataArray['clI_PersonneAContacterTel'] = $data->getClIPersonneAContacterTel();
        }

        if ($data->isInitialized('bCLIReductionFillon19') && null !== $data->getBCLIReductionFillon19()) {
            $dataArray['bCLI_ReductionFillon19'] = $data->getBCLIReductionFillon19();
        }

        if ($data->isInitialized('clIReductionFillon19') && null !== $data->getClIReductionFillon19()) {
            $dataArray['clI_ReductionFillon19'] = $data->getClIReductionFillon19();
        }

        if ($data->isInitialized('bCLIReductionFillon19Debut') && null !== $data->getBCLIReductionFillon19Debut()) {
            $dataArray['bCLI_ReductionFillon19Debut'] = $data->getBCLIReductionFillon19Debut();
        }

        if ($data->isInitialized('clIReductionFillon19Debut') && null !== $data->getClIReductionFillon19Debut()) {
            $dataArray['clI_ReductionFillon19Debut'] = $data->getClIReductionFillon19Debut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bCLISepaModeComptabilisation') && null !== $data->getBCLISepaModeComptabilisation()) {
            $dataArray['bCLI_SepaModeComptabilisation'] = $data->getBCLISepaModeComptabilisation();
        }

        if ($data->isInitialized('clISepaModeComptabilisation') && null !== $data->getClISepaModeComptabilisation()) {
            $dataArray['clI_SepaModeComptabilisation'] = $data->getClISepaModeComptabilisation();
        }

        if ($data->isInitialized('bCLISortieAppliJourVersementSalaires') && null !== $data->getBCLISortieAppliJourVersementSalaires()) {
            $dataArray['bCLI_SortieAppliJourVersementSalaires'] = $data->getBCLISortieAppliJourVersementSalaires();
        }

        if ($data->isInitialized('clISortieAppliJourVersementSalaires') && null !== $data->getClISortieAppliJourVersementSalaires()) {
            $dataArray['clI_SortieAppliJourVersementSalaires'] = $data->getClISortieAppliJourVersementSalaires();
        }

        if ($data->isInitialized('bCLISortieAppliModeReglementNormal') && null !== $data->getBCLISortieAppliModeReglementNormal()) {
            $dataArray['bCLI_SortieAppliModeReglementNormal'] = $data->getBCLISortieAppliModeReglementNormal();
        }

        if ($data->isInitialized('clISortieAppliModeReglementNormal') && null !== $data->getClISortieAppliModeReglementNormal()) {
            $dataArray['clI_SortieAppliModeReglementNormal'] = $data->getClISortieAppliModeReglementNormal();
        }

        if ($data->isInitialized('bCLISousMethodeSuiviAbsences') && null !== $data->getBCLISousMethodeSuiviAbsences()) {
            $dataArray['bCLI_SousMethodeSuiviAbsences'] = $data->getBCLISousMethodeSuiviAbsences();
        }

        if ($data->isInitialized('clISousMethodeSuiviAbsences') && null !== $data->getClISousMethodeSuiviAbsences()) {
            $dataArray['clI_SousMethodeSuiviAbsences'] = $data->getClISousMethodeSuiviAbsences();
        }

        if ($data->isInitialized('bCLISousMethodeSuiviAbsencesFJ') && null !== $data->getBCLISousMethodeSuiviAbsencesFJ()) {
            $dataArray['bCLI_SousMethodeSuiviAbsencesFJ'] = $data->getBCLISousMethodeSuiviAbsencesFJ();
        }

        if ($data->isInitialized('clISousMethodeSuiviAbsencesFJ') && null !== $data->getClISousMethodeSuiviAbsencesFJ()) {
            $dataArray['clI_SousMethodeSuiviAbsencesFJ'] = $data->getClISousMethodeSuiviAbsencesFJ();
        }

        if ($data->isInitialized('bCLISubrogation') && null !== $data->getBCLISubrogation()) {
            $dataArray['bCLI_Subrogation'] = $data->getBCLISubrogation();
        }

        if ($data->isInitialized('clISubrogation') && null !== $data->getClISubrogation()) {
            $dataArray['clI_Subrogation'] = $data->getClISubrogation();
        }

        if ($data->isInitialized('bCLISubrogationVersEtaPrincipal') && null !== $data->getBCLISubrogationVersEtaPrincipal()) {
            $dataArray['bCLI_SubrogationVersEtaPrincipal'] = $data->getBCLISubrogationVersEtaPrincipal();
        }

        if ($data->isInitialized('clISubrogationVersEtaPrincipal') && null !== $data->getClISubrogationVersEtaPrincipal()) {
            $dataArray['clI_SubrogationVersEtaPrincipal'] = $data->getClISubrogationVersEtaPrincipal();
        }

        if ($data->isInitialized('bCLITassageAbsencesJours') && null !== $data->getBCLITassageAbsencesJours()) {
            $dataArray['bCLI_TassageAbsencesJours'] = $data->getBCLITassageAbsencesJours();
        }

        if ($data->isInitialized('clITassageAbsencesJours') && null !== $data->getClITassageAbsencesJours()) {
            $dataArray['clI_TassageAbsencesJours'] = $data->getClITassageAbsencesJours();
        }

        if ($data->isInitialized('bCLITaxeApprentissagePayeeCCP') && null !== $data->getBCLITaxeApprentissagePayeeCCP()) {
            $dataArray['bCLI_TaxeApprentissagePayeeCCP'] = $data->getBCLITaxeApprentissagePayeeCCP();
        }

        if ($data->isInitialized('clITaxeApprentissagePayeeCCP') && null !== $data->getClITaxeApprentissagePayeeCCP()) {
            $dataArray['clI_TaxeApprentissagePayeeCCP'] = $data->getClITaxeApprentissagePayeeCCP();
        }

        if ($data->isInitialized('bCLITaxeCotPPrev') && null !== $data->getBCLITaxeCotPPrev()) {
            $dataArray['bCLI_TaxeCotPPrev'] = $data->getBCLITaxeCotPPrev();
        }

        if ($data->isInitialized('clITaxeCotPPrev') && null !== $data->getClITaxeCotPPrev()) {
            $dataArray['clI_TaxeCotPPrev'] = $data->getClITaxeCotPPrev();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SocieteInfoSup::class => false];
    }
}
