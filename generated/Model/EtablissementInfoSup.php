<?php

namespace QdequippeTech\Silae\Api\Model;

class EtablissementInfoSup
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @var bool|null
     */
    protected $bETAAcquisitionHeuresDIF;

    /**
     * @var float|null
     */
    protected $etAAcquisitionHeuresDIF;

    /**
     * @var bool|null
     */
    protected $bETAAssimiliesCadresPrevoyanceNonCadre;

    /**
     * @var bool|null
     */
    protected $etAAssimiliesCadresPrevoyanceNonCadre;

    /**
     * @var bool|null
     */
    protected $bETABulletinEditionDIF;

    /**
     * @var int|null
     */
    protected $etABulletinEditionDIF;

    /**
     * @var bool|null
     */
    protected $bETACalcAutoIJSSInactif;

    /**
     * @var bool|null
     */
    protected $etACalcAutoIJSSInactif;

    /**
     * @var bool|null
     */
    protected $bETACalcAutoMaintienInactif;

    /**
     * @var bool|null
     */
    protected $etACalcAutoMaintienInactif;

    /**
     * @var bool|null
     */
    protected $bETACDDPaiMensIndCP;

    /**
     * @var bool|null
     */
    protected $etACDDPaiMensIndCP;

    /**
     * @var bool|null
     */
    protected $bETACDDPaiMensIndPrecarite;

    /**
     * @var bool|null
     */
    protected $etACDDPaiMensIndPrecarite;

    /**
     * @var bool|null
     */
    protected $bETAChaineFabricationDateLimiteAbsences;

    /**
     * @var string|null
     */
    protected $etAChaineFabricationDateLimiteAbsences;

    /**
     * @var bool|null
     */
    protected $bETAClotureCPArrondiInactif;

    /**
     * @var bool|null
     */
    protected $etAClotureCPArrondiInactif;

    /**
     * @var bool|null
     */
    protected $bETAClotureCPReport;

    /**
     * @var bool|null
     */
    protected $etAClotureCPReport;

    /**
     * @var bool|null
     */
    protected $bETAClotureRTTReport;

    /**
     * @var bool|null
     */
    protected $etAClotureRTTReport;

    /**
     * @var bool|null
     */
    protected $bETACodeBTAPEMSA;

    /**
     * @var string|null
     */
    protected $etACodeBTAPEMSA;

    /**
     * @var bool|null
     */
    protected $bETACodeRegion;

    /**
     * @var string|null
     */
    protected $etACodeRegion;

    /**
     * @var bool|null
     */
    protected $bETADadsInactive;

    /**
     * @var bool|null
     */
    protected $etADadsInactive;

    /**
     * @var bool|null
     */
    protected $bETADecalageActiviteJournaliere;

    /**
     * @var int|null
     */
    protected $etADecalageActiviteJournaliere;

    /**
     * @var bool|null
     */
    protected $bETADecoupageActiviteJournaliere;

    /**
     * @var int|null
     */
    protected $etADecoupageActiviteJournaliere;

    /**
     * @var bool|null
     */
    protected $bETADureeHebdo;

    /**
     * @var float|null
     */
    protected $etADureeHebdo;

    /**
     * @var bool|null
     */
    protected $bETAEmployeurCivilite;

    /**
     * @var int|null
     */
    protected $etAEmployeurCivilite;

    /**
     * @var bool|null
     */
    protected $bETAEmployeurNom;

    /**
     * @var string|null
     */
    protected $etAEmployeurNom;

    /**
     * @var bool|null
     */
    protected $bETAEmployeurPrenom;

    /**
     * @var string|null
     */
    protected $etAEmployeurPrenom;

    /**
     * @var bool|null
     */
    protected $bETAEmployeurQualite;

    /**
     * @var int|null
     */
    protected $etAEmployeurQualite;

    /**
     * @var bool|null
     */
    protected $bETAEmployeurQualiteAutre;

    /**
     * @var string|null
     */
    protected $etAEmployeurQualiteAutre;

    /**
     * @var bool|null
     */
    protected $bETAExoJEIDateDebut;

    /**
     * @var \DateTime|null
     */
    protected $etAExoJEIDateDebut;

    /**
     * @var bool|null
     */
    protected $bETAForceDroitCICE;

    /**
     * @var bool|null
     */
    protected $etAForceDroitCICE;

    /**
     * @var bool|null
     */
    protected $bETAFractionnementCP;

    /**
     * @var bool|null
     */
    protected $etAFractionnementCP;

    /**
     * @var bool|null
     */
    protected $bETAFractionnementCPMoisCalcSpe;

    /**
     * @var int|null
     */
    protected $etAFractionnementCPMoisCalcSpe;

    /**
     * @var bool|null
     */
    protected $bETAFractionnementCPMoisDebut;

    /**
     * @var int|null
     */
    protected $etAFractionnementCPMoisDebut;

    /**
     * @var bool|null
     */
    protected $bETAFractionnementCPMoisFin;

    /**
     * @var int|null
     */
    protected $etAFractionnementCPMoisFin;

    /**
     * @var bool|null
     */
    protected $bETAFSConserverCondAnc;

    /**
     * @var bool|null
     */
    protected $etAFSConserverCondAnc;

    /**
     * @var bool|null
     */
    protected $bETAFSMethode;

    /**
     * @var int|null
     */
    protected $etAFSMethode;

    /**
     * @var bool|null
     */
    protected $bETAGestionCPExclEnJours;

    /**
     * @var bool|null
     */
    protected $etAGestionCPExclEnJours;

    /**
     * @var bool|null
     */
    protected $bETAJourDebSemActiviteJournaliere;

    /**
     * @var int|null
     */
    protected $etAJourDebSemActiviteJournaliere;

    /**
     * @var bool|null
     */
    protected $bETAJourneeSolidarite;

    /**
     * @var string|null
     */
    protected $etAJourneeSolidarite;

    /**
     * @var bool|null
     */
    protected $bETAJoursFeriesTravailles;

    /**
     * @var string|null
     */
    protected $etAJoursFeriesTravailles;

    /**
     * @var bool|null
     */
    protected $bETAMethodeArbitrage;

    /**
     * @var int|null
     */
    protected $etAMethodeArbitrage;

    /**
     * @var bool|null
     */
    protected $bETAMethodeCalculMaintien;

    /**
     * @var int|null
     */
    protected $etAMethodeCalculMaintien;

    /**
     * @var bool|null
     */
    protected $bETAMethodeCalculMaintienNbM;

    /**
     * @var int|null
     */
    protected $etAMethodeCalculMaintienNbM;

    /**
     * @var bool|null
     */
    protected $bETAMethodeRetenueCP;

    /**
     * @var int|null
     */
    protected $etAMethodeRetenueCP;

    /**
     * @var bool|null
     */
    protected $bETAMethodeSuiviAbsences;

    /**
     * @var int|null
     */
    protected $etAMethodeSuiviAbsences;

    /**
     * @var bool|null
     */
    protected $bETAMethodeSuiviAbsencesDeductionHM;

    /**
     * @var int|null
     */
    protected $etAMethodeSuiviAbsencesDeductionHM;

    /**
     * @var bool|null
     */
    protected $bETAMethodeSuiviAbsencesJC;

    /**
     * @var int|null
     */
    protected $etAMethodeSuiviAbsencesJC;

    /**
     * @var bool|null
     */
    protected $bETAMethodeSuiviCP;

    /**
     * @var int|null
     */
    protected $etAMethodeSuiviCP;

    /**
     * @var bool|null
     */
    protected $bETAMethodeSuiviCPAcqMois;

    /**
     * @var float|null
     */
    protected $etAMethodeSuiviCPAcqMois;

    /**
     * @var bool|null
     */
    protected $bETAModeSaisieActiviteJournaliere;

    /**
     * @var int|null
     */
    protected $etAModeSaisieActiviteJournaliere;

    /**
     * @var bool|null
     */
    protected $bETAMoisAcquisitionDIF;

    /**
     * @var int|null
     */
    protected $etAMoisAcquisitionDIF;

    /**
     * @var bool|null
     */
    protected $bETAMoisClotureCP;

    /**
     * @var int|null
     */
    protected $etAMoisClotureCP;

    /**
     * @var bool|null
     */
    protected $bETAMoisClotureFJ;

    /**
     * @var int|null
     */
    protected $etAMoisClotureFJ;

    /**
     * @var bool|null
     */
    protected $bETAMoisClotureRepos;

    /**
     * @var int|null
     */
    protected $etAMoisClotureRepos;

    /**
     * @var bool|null
     */
    protected $bETAMoisClotureRTT;

    /**
     * @var int|null
     */
    protected $etAMoisClotureRTT;

    /**
     * @var bool|null
     */
    protected $bETANomInterne;

    /**
     * @var string|null
     */
    protected $etANomInterne;

    /**
     * @var bool|null
     */
    protected $bETANonSoumisCVAE;

    /**
     * @var bool|null
     */
    protected $etANonSoumisCVAE;

    /**
     * @var bool|null
     */
    protected $bETAPeriodeRegulTauxAT1;

    /**
     * @var \DateTime|null
     */
    protected $etAPeriodeRegulTauxAT1;

    /**
     * @var bool|null
     */
    protected $bETAPeriodeRegulTauxAT2;

    /**
     * @var \DateTime|null
     */
    protected $etAPeriodeRegulTauxAT2;

    /**
     * @var bool|null
     */
    protected $bETAPeriodeRegulTauxAT3;

    /**
     * @var \DateTime|null
     */
    protected $etAPeriodeRegulTauxAT3;

    /**
     * @var bool|null
     */
    protected $bETAPeriodeRegulTauxAT4;

    /**
     * @var \DateTime|null
     */
    protected $etAPeriodeRegulTauxAT4;

    /**
     * @var bool|null
     */
    protected $bETAPeriodeRegulTauxAT5;

    /**
     * @var \DateTime|null
     */
    protected $etAPeriodeRegulTauxAT5;

    /**
     * @var bool|null
     */
    protected $bETAPeriodeRegulTauxAT6;

    /**
     * @var \DateTime|null
     */
    protected $etAPeriodeRegulTauxAT6;

    /**
     * @var bool|null
     */
    protected $bETAPeriodeRegulTauxAT7;

    /**
     * @var \DateTime|null
     */
    protected $etAPeriodeRegulTauxAT7;

    /**
     * @var bool|null
     */
    protected $bETAPersonneAContacterMel;

    /**
     * @var string|null
     */
    protected $etAPersonneAContacterMel;

    /**
     * @var bool|null
     */
    protected $bETAPersonneAContacterNom;

    /**
     * @var string|null
     */
    protected $etAPersonneAContacterNom;

    /**
     * @var bool|null
     */
    protected $bETAPersonneAContacterPrenom;

    /**
     * @var string|null
     */
    protected $etAPersonneAContacterPrenom;

    /**
     * @var bool|null
     */
    protected $bETAPersonneAContacterTel;

    /**
     * @var string|null
     */
    protected $etAPersonneAContacterTel;

    /**
     * @var bool|null
     */
    protected $bETAPrefixeMatriculesSalaries;

    /**
     * @var string|null
     */
    protected $etAPrefixeMatriculesSalaries;

    /**
     * @var bool|null
     */
    protected $bETARTTEnHeures;

    /**
     * @var float|null
     */
    protected $etARTTEnHeures;

    /**
     * @var bool|null
     */
    protected $bETAS41G0100018001;

    /**
     * @var string|null
     */
    protected $etAS41G0100018001;

    /**
     * @var bool|null
     */
    protected $bETAS41G0100018006;

    /**
     * @var string|null
     */
    protected $etAS41G0100018006;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000251;

    /**
     * @var string|null
     */
    protected $etAS41G01000251;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000252;

    /**
     * @var string|null
     */
    protected $etAS41G01000252;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000253;

    /**
     * @var string|null
     */
    protected $etAS41G01000253;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000254;

    /**
     * @var string|null
     */
    protected $etAS41G01000254;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000255;

    /**
     * @var string|null
     */
    protected $etAS41G01000255;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000256;

    /**
     * @var string|null
     */
    protected $etAS41G01000256;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000257;

    /**
     * @var string|null
     */
    protected $etAS41G01000257;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000261;

    /**
     * @var string|null
     */
    protected $etAS41G01000261;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000262;

    /**
     * @var string|null
     */
    protected $etAS41G01000262;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000263;

    /**
     * @var string|null
     */
    protected $etAS41G01000263;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000264;

    /**
     * @var string|null
     */
    protected $etAS41G01000264;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000265;

    /**
     * @var string|null
     */
    protected $etAS41G01000265;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000266;

    /**
     * @var string|null
     */
    protected $etAS41G01000266;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000267;

    /**
     * @var string|null
     */
    protected $etAS41G01000267;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000271;

    /**
     * @var string|null
     */
    protected $etAS41G01000271;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000272;

    /**
     * @var string|null
     */
    protected $etAS41G01000272;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000273;

    /**
     * @var string|null
     */
    protected $etAS41G01000273;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000274;

    /**
     * @var string|null
     */
    protected $etAS41G01000274;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000275;

    /**
     * @var string|null
     */
    protected $etAS41G01000275;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000276;

    /**
     * @var string|null
     */
    protected $etAS41G01000276;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000277;

    /**
     * @var string|null
     */
    protected $etAS41G01000277;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000281;

    /**
     * @var float|null
     */
    protected $etAS41G01000281;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000282;

    /**
     * @var float|null
     */
    protected $etAS41G01000282;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000283;

    /**
     * @var float|null
     */
    protected $etAS41G01000283;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000284;

    /**
     * @var float|null
     */
    protected $etAS41G01000284;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000285;

    /**
     * @var float|null
     */
    protected $etAS41G01000285;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000286;

    /**
     * @var float|null
     */
    protected $etAS41G01000286;

    /**
     * @var bool|null
     */
    protected $bETAS41G01000287;

    /**
     * @var float|null
     */
    protected $etAS41G01000287;

    /**
     * @var bool|null
     */
    protected $bETASaisieManuelleHeuresAbsences;

    /**
     * @var bool|null
     */
    protected $etASaisieManuelleHeuresAbsences;

    /**
     * @var bool|null
     */
    protected $bETASoumisTaxeAppr;

    /**
     * @var bool|null
     */
    protected $etASoumisTaxeAppr;

    /**
     * @var bool|null
     */
    protected $bETASoumisTaxeApprAvecMajoration;

    /**
     * @var bool|null
     */
    protected $etASoumisTaxeApprAvecMajoration;

    /**
     * @var bool|null
     */
    protected $bETASoumisTaxeSalaires;

    /**
     * @var bool|null
     */
    protected $etASoumisTaxeSalaires;

    /**
     * @var bool|null
     */
    protected $bETASoumisTaxeSalairesPctImp;

    /**
     * @var float|null
     */
    protected $etASoumisTaxeSalairesPctImp;

    /**
     * @var bool|null
     */
    protected $bETASousMethodeSuiviAbsences;

    /**
     * @var int|null
     */
    protected $etASousMethodeSuiviAbsences;

    /**
     * @var bool|null
     */
    protected $bETASousMethodeSuiviAbsencesFJ;

    /**
     * @var int|null
     */
    protected $etASousMethodeSuiviAbsencesFJ;

    /**
     * @var bool|null
     */
    protected $bETASubrogation;

    /**
     * @var bool|null
     */
    protected $etASubrogation;

    /**
     * @var bool|null
     */
    protected $bETASubrogationVersEtaPrincipal;

    /**
     * @var bool|null
     */
    protected $etASubrogationVersEtaPrincipal;

    /**
     * @var bool|null
     */
    protected $bETATassageAbsencesJours;

    /**
     * @var int|null
     */
    protected $etATassageAbsencesJours;

    /**
     * @var bool|null
     */
    protected $bETATauxVersementTrs;

    /**
     * @var float|null
     */
    protected $etATauxVersementTrs;

    /**
     * @var bool|null
     */
    protected $bETATaxeSalairesAbattement;

    /**
     * @var bool|null
     */
    protected $etATaxeSalairesAbattement;

    /**
     * @var bool|null
     */
    protected $bETATaxeSalairesSurSeuilsAnnuel;

    /**
     * @var bool|null
     */
    protected $etATaxeSalairesSurSeuilsAnnuel;

    /**
     * @var bool|null
     */
    protected $bETATitresTrs;

    /**
     * @var bool|null
     */
    protected $etATitresTrs;

    /**
     * @var bool|null
     */
    protected $bETATResto;

    /**
     * @var bool|null
     */
    protected $etATResto;

    /**
     * @var bool|null
     */
    protected $bETATRestoNomVariable;

    /**
     * @var string|null
     */
    protected $etATRestoNomVariable;

    /**
     * @var bool|null
     */
    protected $bETATRestoPartSalariale;

    /**
     * @var float|null
     */
    protected $etATRestoPartSalariale;

    /**
     * @var bool|null
     */
    protected $bETATypeAcquisitionDIF;

    /**
     * @var int|null
     */
    protected $etATypeAcquisitionDIF;

    /**
     * @var bool|null
     */
    protected $bETAVTACodeRegion;

    /**
     * @var string|null
     */
    protected $etAVTACodeRegion;

    /**
     * @var bool|null
     */
    protected $bETAVTATaux;

    /**
     * @var float|null
     */
    protected $etAVTATaux;

    /**
     * @var bool|null
     */
    protected $bETAVTrsAuto;

    /**
     * @var bool|null
     */
    protected $etAVTrsAuto;

    /**
     * @var bool|null
     */
    protected $bINTBTQC;

    /**
     * @var string|null
     */
    protected $inTBTQC;

    /**
     * @var bool|null
     */
    protected $bINTCivilite;

    /**
     * @var int|null
     */
    protected $inTCivilite;

    /**
     * @var bool|null
     */
    protected $bINTCodePostal;

    /**
     * @var string|null
     */
    protected $inTCodePostal;

    /**
     * @var bool|null
     */
    protected $bINTCodePostalJF;

    /**
     * @var string|null
     */
    protected $inTCodePostalJF;

    /**
     * @var bool|null
     */
    protected $bINTCommune;

    /**
     * @var string|null
     */
    protected $inTCommune;

    /**
     * @var bool|null
     */
    protected $bINTCommuneINSEE;

    /**
     * @var string|null
     */
    protected $inTCommuneINSEE;

    /**
     * @var bool|null
     */
    protected $bINTComplementAdresse;

    /**
     * @var string|null
     */
    protected $inTComplementAdresse;

    /**
     * @var bool|null
     */
    protected $bINTDateDeces;

    /**
     * @var \DateTime|null
     */
    protected $inTDateDeces;

    /**
     * @var bool|null
     */
    protected $bINTDateNaissance;

    /**
     * @var \DateTime|null
     */
    protected $inTDateNaissance;

    /**
     * @var bool|null
     */
    protected $bINTEnseigne;

    /**
     * @var string|null
     */
    protected $inTEnseigne;

    /**
     * @var bool|null
     */
    protected $bINTFax;

    /**
     * @var string|null
     */
    protected $inTFax;

    /**
     * @var bool|null
     */
    protected $bINTFormeJuridique;

    /**
     * @var string|null
     */
    protected $inTFormeJuridique;

    /**
     * @var bool|null
     */
    protected $bINTMel;

    /**
     * @var string|null
     */
    protected $inTMel;

    /**
     * @var bool|null
     */
    protected $bINTNAF;

    /**
     * @var string|null
     */
    protected $inTNAF;

    /**
     * @var bool|null
     */
    protected $bINTNomPays;

    /**
     * @var string|null
     */
    protected $inTNomPays;

    /**
     * @var bool|null
     */
    protected $bINTNomUsuel;

    /**
     * @var string|null
     */
    protected $inTNomUsuel;

    /**
     * @var bool|null
     */
    protected $bINTNomVille;

    /**
     * @var string|null
     */
    protected $inTNomVille;

    /**
     * @var bool|null
     */
    protected $bINTNomVoie;

    /**
     * @var string|null
     */
    protected $inTNomVoie;

    /**
     * @var bool|null
     */
    protected $bINTNumVoie;

    /**
     * @var string|null
     */
    protected $inTNumVoie;

    /**
     * @var bool|null
     */
    protected $bINTPaysISO;

    /**
     * @var string|null
     */
    protected $inTPaysISO;

    /**
     * @var bool|null
     */
    protected $bINTPaysISOJF;

    /**
     * @var string|null
     */
    protected $inTPaysISOJF;

    /**
     * @var bool|null
     */
    protected $bINTPrenom;

    /**
     * @var string|null
     */
    protected $inTPrenom;

    /**
     * @var bool|null
     */
    protected $bINTRaisonSociale;

    /**
     * @var string|null
     */
    protected $inTRaisonSociale;

    /**
     * @var bool|null
     */
    protected $bINTSiret;

    /**
     * @var string|null
     */
    protected $inTSiret;

    /**
     * @var bool|null
     */
    protected $bINTSiteWeb;

    /**
     * @var string|null
     */
    protected $inTSiteWeb;

    /**
     * @var bool|null
     */
    protected $bINTTelBureau;

    /**
     * @var string|null
     */
    protected $inTTelBureau;

    public function getBETAAcquisitionHeuresDIF(): ?bool
    {
        return $this->bETAAcquisitionHeuresDIF;
    }

    public function setBETAAcquisitionHeuresDIF(?bool $bETAAcquisitionHeuresDIF): self
    {
        $this->initialized['bETAAcquisitionHeuresDIF'] = true;
        $this->bETAAcquisitionHeuresDIF = $bETAAcquisitionHeuresDIF;

        return $this;
    }

    public function getEtAAcquisitionHeuresDIF(): ?float
    {
        return $this->etAAcquisitionHeuresDIF;
    }

    public function setEtAAcquisitionHeuresDIF(?float $etAAcquisitionHeuresDIF): self
    {
        $this->initialized['etAAcquisitionHeuresDIF'] = true;
        $this->etAAcquisitionHeuresDIF = $etAAcquisitionHeuresDIF;

        return $this;
    }

    public function getBETAAssimiliesCadresPrevoyanceNonCadre(): ?bool
    {
        return $this->bETAAssimiliesCadresPrevoyanceNonCadre;
    }

    public function setBETAAssimiliesCadresPrevoyanceNonCadre(?bool $bETAAssimiliesCadresPrevoyanceNonCadre): self
    {
        $this->initialized['bETAAssimiliesCadresPrevoyanceNonCadre'] = true;
        $this->bETAAssimiliesCadresPrevoyanceNonCadre = $bETAAssimiliesCadresPrevoyanceNonCadre;

        return $this;
    }

    public function getEtAAssimiliesCadresPrevoyanceNonCadre(): ?bool
    {
        return $this->etAAssimiliesCadresPrevoyanceNonCadre;
    }

    public function setEtAAssimiliesCadresPrevoyanceNonCadre(?bool $etAAssimiliesCadresPrevoyanceNonCadre): self
    {
        $this->initialized['etAAssimiliesCadresPrevoyanceNonCadre'] = true;
        $this->etAAssimiliesCadresPrevoyanceNonCadre = $etAAssimiliesCadresPrevoyanceNonCadre;

        return $this;
    }

    public function getBETABulletinEditionDIF(): ?bool
    {
        return $this->bETABulletinEditionDIF;
    }

    public function setBETABulletinEditionDIF(?bool $bETABulletinEditionDIF): self
    {
        $this->initialized['bETABulletinEditionDIF'] = true;
        $this->bETABulletinEditionDIF = $bETABulletinEditionDIF;

        return $this;
    }

    public function getEtABulletinEditionDIF(): ?int
    {
        return $this->etABulletinEditionDIF;
    }

    public function setEtABulletinEditionDIF(?int $etABulletinEditionDIF): self
    {
        $this->initialized['etABulletinEditionDIF'] = true;
        $this->etABulletinEditionDIF = $etABulletinEditionDIF;

        return $this;
    }

    public function getBETACalcAutoIJSSInactif(): ?bool
    {
        return $this->bETACalcAutoIJSSInactif;
    }

    public function setBETACalcAutoIJSSInactif(?bool $bETACalcAutoIJSSInactif): self
    {
        $this->initialized['bETACalcAutoIJSSInactif'] = true;
        $this->bETACalcAutoIJSSInactif = $bETACalcAutoIJSSInactif;

        return $this;
    }

    public function getEtACalcAutoIJSSInactif(): ?bool
    {
        return $this->etACalcAutoIJSSInactif;
    }

    public function setEtACalcAutoIJSSInactif(?bool $etACalcAutoIJSSInactif): self
    {
        $this->initialized['etACalcAutoIJSSInactif'] = true;
        $this->etACalcAutoIJSSInactif = $etACalcAutoIJSSInactif;

        return $this;
    }

    public function getBETACalcAutoMaintienInactif(): ?bool
    {
        return $this->bETACalcAutoMaintienInactif;
    }

    public function setBETACalcAutoMaintienInactif(?bool $bETACalcAutoMaintienInactif): self
    {
        $this->initialized['bETACalcAutoMaintienInactif'] = true;
        $this->bETACalcAutoMaintienInactif = $bETACalcAutoMaintienInactif;

        return $this;
    }

    public function getEtACalcAutoMaintienInactif(): ?bool
    {
        return $this->etACalcAutoMaintienInactif;
    }

    public function setEtACalcAutoMaintienInactif(?bool $etACalcAutoMaintienInactif): self
    {
        $this->initialized['etACalcAutoMaintienInactif'] = true;
        $this->etACalcAutoMaintienInactif = $etACalcAutoMaintienInactif;

        return $this;
    }

    public function getBETACDDPaiMensIndCP(): ?bool
    {
        return $this->bETACDDPaiMensIndCP;
    }

    public function setBETACDDPaiMensIndCP(?bool $bETACDDPaiMensIndCP): self
    {
        $this->initialized['bETACDDPaiMensIndCP'] = true;
        $this->bETACDDPaiMensIndCP = $bETACDDPaiMensIndCP;

        return $this;
    }

    public function getEtACDDPaiMensIndCP(): ?bool
    {
        return $this->etACDDPaiMensIndCP;
    }

    public function setEtACDDPaiMensIndCP(?bool $etACDDPaiMensIndCP): self
    {
        $this->initialized['etACDDPaiMensIndCP'] = true;
        $this->etACDDPaiMensIndCP = $etACDDPaiMensIndCP;

        return $this;
    }

    public function getBETACDDPaiMensIndPrecarite(): ?bool
    {
        return $this->bETACDDPaiMensIndPrecarite;
    }

    public function setBETACDDPaiMensIndPrecarite(?bool $bETACDDPaiMensIndPrecarite): self
    {
        $this->initialized['bETACDDPaiMensIndPrecarite'] = true;
        $this->bETACDDPaiMensIndPrecarite = $bETACDDPaiMensIndPrecarite;

        return $this;
    }

    public function getEtACDDPaiMensIndPrecarite(): ?bool
    {
        return $this->etACDDPaiMensIndPrecarite;
    }

    public function setEtACDDPaiMensIndPrecarite(?bool $etACDDPaiMensIndPrecarite): self
    {
        $this->initialized['etACDDPaiMensIndPrecarite'] = true;
        $this->etACDDPaiMensIndPrecarite = $etACDDPaiMensIndPrecarite;

        return $this;
    }

    public function getBETAChaineFabricationDateLimiteAbsences(): ?bool
    {
        return $this->bETAChaineFabricationDateLimiteAbsences;
    }

    public function setBETAChaineFabricationDateLimiteAbsences(?bool $bETAChaineFabricationDateLimiteAbsences): self
    {
        $this->initialized['bETAChaineFabricationDateLimiteAbsences'] = true;
        $this->bETAChaineFabricationDateLimiteAbsences = $bETAChaineFabricationDateLimiteAbsences;

        return $this;
    }

    public function getEtAChaineFabricationDateLimiteAbsences(): ?string
    {
        return $this->etAChaineFabricationDateLimiteAbsences;
    }

    public function setEtAChaineFabricationDateLimiteAbsences(?string $etAChaineFabricationDateLimiteAbsences): self
    {
        $this->initialized['etAChaineFabricationDateLimiteAbsences'] = true;
        $this->etAChaineFabricationDateLimiteAbsences = $etAChaineFabricationDateLimiteAbsences;

        return $this;
    }

    public function getBETAClotureCPArrondiInactif(): ?bool
    {
        return $this->bETAClotureCPArrondiInactif;
    }

    public function setBETAClotureCPArrondiInactif(?bool $bETAClotureCPArrondiInactif): self
    {
        $this->initialized['bETAClotureCPArrondiInactif'] = true;
        $this->bETAClotureCPArrondiInactif = $bETAClotureCPArrondiInactif;

        return $this;
    }

    public function getEtAClotureCPArrondiInactif(): ?bool
    {
        return $this->etAClotureCPArrondiInactif;
    }

    public function setEtAClotureCPArrondiInactif(?bool $etAClotureCPArrondiInactif): self
    {
        $this->initialized['etAClotureCPArrondiInactif'] = true;
        $this->etAClotureCPArrondiInactif = $etAClotureCPArrondiInactif;

        return $this;
    }

    public function getBETAClotureCPReport(): ?bool
    {
        return $this->bETAClotureCPReport;
    }

    public function setBETAClotureCPReport(?bool $bETAClotureCPReport): self
    {
        $this->initialized['bETAClotureCPReport'] = true;
        $this->bETAClotureCPReport = $bETAClotureCPReport;

        return $this;
    }

    public function getEtAClotureCPReport(): ?bool
    {
        return $this->etAClotureCPReport;
    }

    public function setEtAClotureCPReport(?bool $etAClotureCPReport): self
    {
        $this->initialized['etAClotureCPReport'] = true;
        $this->etAClotureCPReport = $etAClotureCPReport;

        return $this;
    }

    public function getBETAClotureRTTReport(): ?bool
    {
        return $this->bETAClotureRTTReport;
    }

    public function setBETAClotureRTTReport(?bool $bETAClotureRTTReport): self
    {
        $this->initialized['bETAClotureRTTReport'] = true;
        $this->bETAClotureRTTReport = $bETAClotureRTTReport;

        return $this;
    }

    public function getEtAClotureRTTReport(): ?bool
    {
        return $this->etAClotureRTTReport;
    }

    public function setEtAClotureRTTReport(?bool $etAClotureRTTReport): self
    {
        $this->initialized['etAClotureRTTReport'] = true;
        $this->etAClotureRTTReport = $etAClotureRTTReport;

        return $this;
    }

    public function getBETACodeBTAPEMSA(): ?bool
    {
        return $this->bETACodeBTAPEMSA;
    }

    public function setBETACodeBTAPEMSA(?bool $bETACodeBTAPEMSA): self
    {
        $this->initialized['bETACodeBTAPEMSA'] = true;
        $this->bETACodeBTAPEMSA = $bETACodeBTAPEMSA;

        return $this;
    }

    public function getEtACodeBTAPEMSA(): ?string
    {
        return $this->etACodeBTAPEMSA;
    }

    public function setEtACodeBTAPEMSA(?string $etACodeBTAPEMSA): self
    {
        $this->initialized['etACodeBTAPEMSA'] = true;
        $this->etACodeBTAPEMSA = $etACodeBTAPEMSA;

        return $this;
    }

    public function getBETACodeRegion(): ?bool
    {
        return $this->bETACodeRegion;
    }

    public function setBETACodeRegion(?bool $bETACodeRegion): self
    {
        $this->initialized['bETACodeRegion'] = true;
        $this->bETACodeRegion = $bETACodeRegion;

        return $this;
    }

    public function getEtACodeRegion(): ?string
    {
        return $this->etACodeRegion;
    }

    public function setEtACodeRegion(?string $etACodeRegion): self
    {
        $this->initialized['etACodeRegion'] = true;
        $this->etACodeRegion = $etACodeRegion;

        return $this;
    }

    public function getBETADadsInactive(): ?bool
    {
        return $this->bETADadsInactive;
    }

    public function setBETADadsInactive(?bool $bETADadsInactive): self
    {
        $this->initialized['bETADadsInactive'] = true;
        $this->bETADadsInactive = $bETADadsInactive;

        return $this;
    }

    public function getEtADadsInactive(): ?bool
    {
        return $this->etADadsInactive;
    }

    public function setEtADadsInactive(?bool $etADadsInactive): self
    {
        $this->initialized['etADadsInactive'] = true;
        $this->etADadsInactive = $etADadsInactive;

        return $this;
    }

    public function getBETADecalageActiviteJournaliere(): ?bool
    {
        return $this->bETADecalageActiviteJournaliere;
    }

    public function setBETADecalageActiviteJournaliere(?bool $bETADecalageActiviteJournaliere): self
    {
        $this->initialized['bETADecalageActiviteJournaliere'] = true;
        $this->bETADecalageActiviteJournaliere = $bETADecalageActiviteJournaliere;

        return $this;
    }

    public function getEtADecalageActiviteJournaliere(): ?int
    {
        return $this->etADecalageActiviteJournaliere;
    }

    public function setEtADecalageActiviteJournaliere(?int $etADecalageActiviteJournaliere): self
    {
        $this->initialized['etADecalageActiviteJournaliere'] = true;
        $this->etADecalageActiviteJournaliere = $etADecalageActiviteJournaliere;

        return $this;
    }

    public function getBETADecoupageActiviteJournaliere(): ?bool
    {
        return $this->bETADecoupageActiviteJournaliere;
    }

    public function setBETADecoupageActiviteJournaliere(?bool $bETADecoupageActiviteJournaliere): self
    {
        $this->initialized['bETADecoupageActiviteJournaliere'] = true;
        $this->bETADecoupageActiviteJournaliere = $bETADecoupageActiviteJournaliere;

        return $this;
    }

    public function getEtADecoupageActiviteJournaliere(): ?int
    {
        return $this->etADecoupageActiviteJournaliere;
    }

    public function setEtADecoupageActiviteJournaliere(?int $etADecoupageActiviteJournaliere): self
    {
        $this->initialized['etADecoupageActiviteJournaliere'] = true;
        $this->etADecoupageActiviteJournaliere = $etADecoupageActiviteJournaliere;

        return $this;
    }

    public function getBETADureeHebdo(): ?bool
    {
        return $this->bETADureeHebdo;
    }

    public function setBETADureeHebdo(?bool $bETADureeHebdo): self
    {
        $this->initialized['bETADureeHebdo'] = true;
        $this->bETADureeHebdo = $bETADureeHebdo;

        return $this;
    }

    public function getEtADureeHebdo(): ?float
    {
        return $this->etADureeHebdo;
    }

    public function setEtADureeHebdo(?float $etADureeHebdo): self
    {
        $this->initialized['etADureeHebdo'] = true;
        $this->etADureeHebdo = $etADureeHebdo;

        return $this;
    }

    public function getBETAEmployeurCivilite(): ?bool
    {
        return $this->bETAEmployeurCivilite;
    }

    public function setBETAEmployeurCivilite(?bool $bETAEmployeurCivilite): self
    {
        $this->initialized['bETAEmployeurCivilite'] = true;
        $this->bETAEmployeurCivilite = $bETAEmployeurCivilite;

        return $this;
    }

    public function getEtAEmployeurCivilite(): ?int
    {
        return $this->etAEmployeurCivilite;
    }

    public function setEtAEmployeurCivilite(?int $etAEmployeurCivilite): self
    {
        $this->initialized['etAEmployeurCivilite'] = true;
        $this->etAEmployeurCivilite = $etAEmployeurCivilite;

        return $this;
    }

    public function getBETAEmployeurNom(): ?bool
    {
        return $this->bETAEmployeurNom;
    }

    public function setBETAEmployeurNom(?bool $bETAEmployeurNom): self
    {
        $this->initialized['bETAEmployeurNom'] = true;
        $this->bETAEmployeurNom = $bETAEmployeurNom;

        return $this;
    }

    public function getEtAEmployeurNom(): ?string
    {
        return $this->etAEmployeurNom;
    }

    public function setEtAEmployeurNom(?string $etAEmployeurNom): self
    {
        $this->initialized['etAEmployeurNom'] = true;
        $this->etAEmployeurNom = $etAEmployeurNom;

        return $this;
    }

    public function getBETAEmployeurPrenom(): ?bool
    {
        return $this->bETAEmployeurPrenom;
    }

    public function setBETAEmployeurPrenom(?bool $bETAEmployeurPrenom): self
    {
        $this->initialized['bETAEmployeurPrenom'] = true;
        $this->bETAEmployeurPrenom = $bETAEmployeurPrenom;

        return $this;
    }

    public function getEtAEmployeurPrenom(): ?string
    {
        return $this->etAEmployeurPrenom;
    }

    public function setEtAEmployeurPrenom(?string $etAEmployeurPrenom): self
    {
        $this->initialized['etAEmployeurPrenom'] = true;
        $this->etAEmployeurPrenom = $etAEmployeurPrenom;

        return $this;
    }

    public function getBETAEmployeurQualite(): ?bool
    {
        return $this->bETAEmployeurQualite;
    }

    public function setBETAEmployeurQualite(?bool $bETAEmployeurQualite): self
    {
        $this->initialized['bETAEmployeurQualite'] = true;
        $this->bETAEmployeurQualite = $bETAEmployeurQualite;

        return $this;
    }

    public function getEtAEmployeurQualite(): ?int
    {
        return $this->etAEmployeurQualite;
    }

    public function setEtAEmployeurQualite(?int $etAEmployeurQualite): self
    {
        $this->initialized['etAEmployeurQualite'] = true;
        $this->etAEmployeurQualite = $etAEmployeurQualite;

        return $this;
    }

    public function getBETAEmployeurQualiteAutre(): ?bool
    {
        return $this->bETAEmployeurQualiteAutre;
    }

    public function setBETAEmployeurQualiteAutre(?bool $bETAEmployeurQualiteAutre): self
    {
        $this->initialized['bETAEmployeurQualiteAutre'] = true;
        $this->bETAEmployeurQualiteAutre = $bETAEmployeurQualiteAutre;

        return $this;
    }

    public function getEtAEmployeurQualiteAutre(): ?string
    {
        return $this->etAEmployeurQualiteAutre;
    }

    public function setEtAEmployeurQualiteAutre(?string $etAEmployeurQualiteAutre): self
    {
        $this->initialized['etAEmployeurQualiteAutre'] = true;
        $this->etAEmployeurQualiteAutre = $etAEmployeurQualiteAutre;

        return $this;
    }

    public function getBETAExoJEIDateDebut(): ?bool
    {
        return $this->bETAExoJEIDateDebut;
    }

    public function setBETAExoJEIDateDebut(?bool $bETAExoJEIDateDebut): self
    {
        $this->initialized['bETAExoJEIDateDebut'] = true;
        $this->bETAExoJEIDateDebut = $bETAExoJEIDateDebut;

        return $this;
    }

    public function getEtAExoJEIDateDebut(): ?\DateTime
    {
        return $this->etAExoJEIDateDebut;
    }

    public function setEtAExoJEIDateDebut(?\DateTime $etAExoJEIDateDebut): self
    {
        $this->initialized['etAExoJEIDateDebut'] = true;
        $this->etAExoJEIDateDebut = $etAExoJEIDateDebut;

        return $this;
    }

    public function getBETAForceDroitCICE(): ?bool
    {
        return $this->bETAForceDroitCICE;
    }

    public function setBETAForceDroitCICE(?bool $bETAForceDroitCICE): self
    {
        $this->initialized['bETAForceDroitCICE'] = true;
        $this->bETAForceDroitCICE = $bETAForceDroitCICE;

        return $this;
    }

    public function getEtAForceDroitCICE(): ?bool
    {
        return $this->etAForceDroitCICE;
    }

    public function setEtAForceDroitCICE(?bool $etAForceDroitCICE): self
    {
        $this->initialized['etAForceDroitCICE'] = true;
        $this->etAForceDroitCICE = $etAForceDroitCICE;

        return $this;
    }

    public function getBETAFractionnementCP(): ?bool
    {
        return $this->bETAFractionnementCP;
    }

    public function setBETAFractionnementCP(?bool $bETAFractionnementCP): self
    {
        $this->initialized['bETAFractionnementCP'] = true;
        $this->bETAFractionnementCP = $bETAFractionnementCP;

        return $this;
    }

    public function getEtAFractionnementCP(): ?bool
    {
        return $this->etAFractionnementCP;
    }

    public function setEtAFractionnementCP(?bool $etAFractionnementCP): self
    {
        $this->initialized['etAFractionnementCP'] = true;
        $this->etAFractionnementCP = $etAFractionnementCP;

        return $this;
    }

    public function getBETAFractionnementCPMoisCalcSpe(): ?bool
    {
        return $this->bETAFractionnementCPMoisCalcSpe;
    }

    public function setBETAFractionnementCPMoisCalcSpe(?bool $bETAFractionnementCPMoisCalcSpe): self
    {
        $this->initialized['bETAFractionnementCPMoisCalcSpe'] = true;
        $this->bETAFractionnementCPMoisCalcSpe = $bETAFractionnementCPMoisCalcSpe;

        return $this;
    }

    public function getEtAFractionnementCPMoisCalcSpe(): ?int
    {
        return $this->etAFractionnementCPMoisCalcSpe;
    }

    public function setEtAFractionnementCPMoisCalcSpe(?int $etAFractionnementCPMoisCalcSpe): self
    {
        $this->initialized['etAFractionnementCPMoisCalcSpe'] = true;
        $this->etAFractionnementCPMoisCalcSpe = $etAFractionnementCPMoisCalcSpe;

        return $this;
    }

    public function getBETAFractionnementCPMoisDebut(): ?bool
    {
        return $this->bETAFractionnementCPMoisDebut;
    }

    public function setBETAFractionnementCPMoisDebut(?bool $bETAFractionnementCPMoisDebut): self
    {
        $this->initialized['bETAFractionnementCPMoisDebut'] = true;
        $this->bETAFractionnementCPMoisDebut = $bETAFractionnementCPMoisDebut;

        return $this;
    }

    public function getEtAFractionnementCPMoisDebut(): ?int
    {
        return $this->etAFractionnementCPMoisDebut;
    }

    public function setEtAFractionnementCPMoisDebut(?int $etAFractionnementCPMoisDebut): self
    {
        $this->initialized['etAFractionnementCPMoisDebut'] = true;
        $this->etAFractionnementCPMoisDebut = $etAFractionnementCPMoisDebut;

        return $this;
    }

    public function getBETAFractionnementCPMoisFin(): ?bool
    {
        return $this->bETAFractionnementCPMoisFin;
    }

    public function setBETAFractionnementCPMoisFin(?bool $bETAFractionnementCPMoisFin): self
    {
        $this->initialized['bETAFractionnementCPMoisFin'] = true;
        $this->bETAFractionnementCPMoisFin = $bETAFractionnementCPMoisFin;

        return $this;
    }

    public function getEtAFractionnementCPMoisFin(): ?int
    {
        return $this->etAFractionnementCPMoisFin;
    }

    public function setEtAFractionnementCPMoisFin(?int $etAFractionnementCPMoisFin): self
    {
        $this->initialized['etAFractionnementCPMoisFin'] = true;
        $this->etAFractionnementCPMoisFin = $etAFractionnementCPMoisFin;

        return $this;
    }

    public function getBETAFSConserverCondAnc(): ?bool
    {
        return $this->bETAFSConserverCondAnc;
    }

    public function setBETAFSConserverCondAnc(?bool $bETAFSConserverCondAnc): self
    {
        $this->initialized['bETAFSConserverCondAnc'] = true;
        $this->bETAFSConserverCondAnc = $bETAFSConserverCondAnc;

        return $this;
    }

    public function getEtAFSConserverCondAnc(): ?bool
    {
        return $this->etAFSConserverCondAnc;
    }

    public function setEtAFSConserverCondAnc(?bool $etAFSConserverCondAnc): self
    {
        $this->initialized['etAFSConserverCondAnc'] = true;
        $this->etAFSConserverCondAnc = $etAFSConserverCondAnc;

        return $this;
    }

    public function getBETAFSMethode(): ?bool
    {
        return $this->bETAFSMethode;
    }

    public function setBETAFSMethode(?bool $bETAFSMethode): self
    {
        $this->initialized['bETAFSMethode'] = true;
        $this->bETAFSMethode = $bETAFSMethode;

        return $this;
    }

    public function getEtAFSMethode(): ?int
    {
        return $this->etAFSMethode;
    }

    public function setEtAFSMethode(?int $etAFSMethode): self
    {
        $this->initialized['etAFSMethode'] = true;
        $this->etAFSMethode = $etAFSMethode;

        return $this;
    }

    public function getBETAGestionCPExclEnJours(): ?bool
    {
        return $this->bETAGestionCPExclEnJours;
    }

    public function setBETAGestionCPExclEnJours(?bool $bETAGestionCPExclEnJours): self
    {
        $this->initialized['bETAGestionCPExclEnJours'] = true;
        $this->bETAGestionCPExclEnJours = $bETAGestionCPExclEnJours;

        return $this;
    }

    public function getEtAGestionCPExclEnJours(): ?bool
    {
        return $this->etAGestionCPExclEnJours;
    }

    public function setEtAGestionCPExclEnJours(?bool $etAGestionCPExclEnJours): self
    {
        $this->initialized['etAGestionCPExclEnJours'] = true;
        $this->etAGestionCPExclEnJours = $etAGestionCPExclEnJours;

        return $this;
    }

    public function getBETAJourDebSemActiviteJournaliere(): ?bool
    {
        return $this->bETAJourDebSemActiviteJournaliere;
    }

    public function setBETAJourDebSemActiviteJournaliere(?bool $bETAJourDebSemActiviteJournaliere): self
    {
        $this->initialized['bETAJourDebSemActiviteJournaliere'] = true;
        $this->bETAJourDebSemActiviteJournaliere = $bETAJourDebSemActiviteJournaliere;

        return $this;
    }

    public function getEtAJourDebSemActiviteJournaliere(): ?int
    {
        return $this->etAJourDebSemActiviteJournaliere;
    }

    public function setEtAJourDebSemActiviteJournaliere(?int $etAJourDebSemActiviteJournaliere): self
    {
        $this->initialized['etAJourDebSemActiviteJournaliere'] = true;
        $this->etAJourDebSemActiviteJournaliere = $etAJourDebSemActiviteJournaliere;

        return $this;
    }

    public function getBETAJourneeSolidarite(): ?bool
    {
        return $this->bETAJourneeSolidarite;
    }

    public function setBETAJourneeSolidarite(?bool $bETAJourneeSolidarite): self
    {
        $this->initialized['bETAJourneeSolidarite'] = true;
        $this->bETAJourneeSolidarite = $bETAJourneeSolidarite;

        return $this;
    }

    public function getEtAJourneeSolidarite(): ?string
    {
        return $this->etAJourneeSolidarite;
    }

    public function setEtAJourneeSolidarite(?string $etAJourneeSolidarite): self
    {
        $this->initialized['etAJourneeSolidarite'] = true;
        $this->etAJourneeSolidarite = $etAJourneeSolidarite;

        return $this;
    }

    public function getBETAJoursFeriesTravailles(): ?bool
    {
        return $this->bETAJoursFeriesTravailles;
    }

    public function setBETAJoursFeriesTravailles(?bool $bETAJoursFeriesTravailles): self
    {
        $this->initialized['bETAJoursFeriesTravailles'] = true;
        $this->bETAJoursFeriesTravailles = $bETAJoursFeriesTravailles;

        return $this;
    }

    public function getEtAJoursFeriesTravailles(): ?string
    {
        return $this->etAJoursFeriesTravailles;
    }

    public function setEtAJoursFeriesTravailles(?string $etAJoursFeriesTravailles): self
    {
        $this->initialized['etAJoursFeriesTravailles'] = true;
        $this->etAJoursFeriesTravailles = $etAJoursFeriesTravailles;

        return $this;
    }

    public function getBETAMethodeArbitrage(): ?bool
    {
        return $this->bETAMethodeArbitrage;
    }

    public function setBETAMethodeArbitrage(?bool $bETAMethodeArbitrage): self
    {
        $this->initialized['bETAMethodeArbitrage'] = true;
        $this->bETAMethodeArbitrage = $bETAMethodeArbitrage;

        return $this;
    }

    public function getEtAMethodeArbitrage(): ?int
    {
        return $this->etAMethodeArbitrage;
    }

    public function setEtAMethodeArbitrage(?int $etAMethodeArbitrage): self
    {
        $this->initialized['etAMethodeArbitrage'] = true;
        $this->etAMethodeArbitrage = $etAMethodeArbitrage;

        return $this;
    }

    public function getBETAMethodeCalculMaintien(): ?bool
    {
        return $this->bETAMethodeCalculMaintien;
    }

    public function setBETAMethodeCalculMaintien(?bool $bETAMethodeCalculMaintien): self
    {
        $this->initialized['bETAMethodeCalculMaintien'] = true;
        $this->bETAMethodeCalculMaintien = $bETAMethodeCalculMaintien;

        return $this;
    }

    public function getEtAMethodeCalculMaintien(): ?int
    {
        return $this->etAMethodeCalculMaintien;
    }

    public function setEtAMethodeCalculMaintien(?int $etAMethodeCalculMaintien): self
    {
        $this->initialized['etAMethodeCalculMaintien'] = true;
        $this->etAMethodeCalculMaintien = $etAMethodeCalculMaintien;

        return $this;
    }

    public function getBETAMethodeCalculMaintienNbM(): ?bool
    {
        return $this->bETAMethodeCalculMaintienNbM;
    }

    public function setBETAMethodeCalculMaintienNbM(?bool $bETAMethodeCalculMaintienNbM): self
    {
        $this->initialized['bETAMethodeCalculMaintienNbM'] = true;
        $this->bETAMethodeCalculMaintienNbM = $bETAMethodeCalculMaintienNbM;

        return $this;
    }

    public function getEtAMethodeCalculMaintienNbM(): ?int
    {
        return $this->etAMethodeCalculMaintienNbM;
    }

    public function setEtAMethodeCalculMaintienNbM(?int $etAMethodeCalculMaintienNbM): self
    {
        $this->initialized['etAMethodeCalculMaintienNbM'] = true;
        $this->etAMethodeCalculMaintienNbM = $etAMethodeCalculMaintienNbM;

        return $this;
    }

    public function getBETAMethodeRetenueCP(): ?bool
    {
        return $this->bETAMethodeRetenueCP;
    }

    public function setBETAMethodeRetenueCP(?bool $bETAMethodeRetenueCP): self
    {
        $this->initialized['bETAMethodeRetenueCP'] = true;
        $this->bETAMethodeRetenueCP = $bETAMethodeRetenueCP;

        return $this;
    }

    public function getEtAMethodeRetenueCP(): ?int
    {
        return $this->etAMethodeRetenueCP;
    }

    public function setEtAMethodeRetenueCP(?int $etAMethodeRetenueCP): self
    {
        $this->initialized['etAMethodeRetenueCP'] = true;
        $this->etAMethodeRetenueCP = $etAMethodeRetenueCP;

        return $this;
    }

    public function getBETAMethodeSuiviAbsences(): ?bool
    {
        return $this->bETAMethodeSuiviAbsences;
    }

    public function setBETAMethodeSuiviAbsences(?bool $bETAMethodeSuiviAbsences): self
    {
        $this->initialized['bETAMethodeSuiviAbsences'] = true;
        $this->bETAMethodeSuiviAbsences = $bETAMethodeSuiviAbsences;

        return $this;
    }

    public function getEtAMethodeSuiviAbsences(): ?int
    {
        return $this->etAMethodeSuiviAbsences;
    }

    public function setEtAMethodeSuiviAbsences(?int $etAMethodeSuiviAbsences): self
    {
        $this->initialized['etAMethodeSuiviAbsences'] = true;
        $this->etAMethodeSuiviAbsences = $etAMethodeSuiviAbsences;

        return $this;
    }

    public function getBETAMethodeSuiviAbsencesDeductionHM(): ?bool
    {
        return $this->bETAMethodeSuiviAbsencesDeductionHM;
    }

    public function setBETAMethodeSuiviAbsencesDeductionHM(?bool $bETAMethodeSuiviAbsencesDeductionHM): self
    {
        $this->initialized['bETAMethodeSuiviAbsencesDeductionHM'] = true;
        $this->bETAMethodeSuiviAbsencesDeductionHM = $bETAMethodeSuiviAbsencesDeductionHM;

        return $this;
    }

    public function getEtAMethodeSuiviAbsencesDeductionHM(): ?int
    {
        return $this->etAMethodeSuiviAbsencesDeductionHM;
    }

    public function setEtAMethodeSuiviAbsencesDeductionHM(?int $etAMethodeSuiviAbsencesDeductionHM): self
    {
        $this->initialized['etAMethodeSuiviAbsencesDeductionHM'] = true;
        $this->etAMethodeSuiviAbsencesDeductionHM = $etAMethodeSuiviAbsencesDeductionHM;

        return $this;
    }

    public function getBETAMethodeSuiviAbsencesJC(): ?bool
    {
        return $this->bETAMethodeSuiviAbsencesJC;
    }

    public function setBETAMethodeSuiviAbsencesJC(?bool $bETAMethodeSuiviAbsencesJC): self
    {
        $this->initialized['bETAMethodeSuiviAbsencesJC'] = true;
        $this->bETAMethodeSuiviAbsencesJC = $bETAMethodeSuiviAbsencesJC;

        return $this;
    }

    public function getEtAMethodeSuiviAbsencesJC(): ?int
    {
        return $this->etAMethodeSuiviAbsencesJC;
    }

    public function setEtAMethodeSuiviAbsencesJC(?int $etAMethodeSuiviAbsencesJC): self
    {
        $this->initialized['etAMethodeSuiviAbsencesJC'] = true;
        $this->etAMethodeSuiviAbsencesJC = $etAMethodeSuiviAbsencesJC;

        return $this;
    }

    public function getBETAMethodeSuiviCP(): ?bool
    {
        return $this->bETAMethodeSuiviCP;
    }

    public function setBETAMethodeSuiviCP(?bool $bETAMethodeSuiviCP): self
    {
        $this->initialized['bETAMethodeSuiviCP'] = true;
        $this->bETAMethodeSuiviCP = $bETAMethodeSuiviCP;

        return $this;
    }

    public function getEtAMethodeSuiviCP(): ?int
    {
        return $this->etAMethodeSuiviCP;
    }

    public function setEtAMethodeSuiviCP(?int $etAMethodeSuiviCP): self
    {
        $this->initialized['etAMethodeSuiviCP'] = true;
        $this->etAMethodeSuiviCP = $etAMethodeSuiviCP;

        return $this;
    }

    public function getBETAMethodeSuiviCPAcqMois(): ?bool
    {
        return $this->bETAMethodeSuiviCPAcqMois;
    }

    public function setBETAMethodeSuiviCPAcqMois(?bool $bETAMethodeSuiviCPAcqMois): self
    {
        $this->initialized['bETAMethodeSuiviCPAcqMois'] = true;
        $this->bETAMethodeSuiviCPAcqMois = $bETAMethodeSuiviCPAcqMois;

        return $this;
    }

    public function getEtAMethodeSuiviCPAcqMois(): ?float
    {
        return $this->etAMethodeSuiviCPAcqMois;
    }

    public function setEtAMethodeSuiviCPAcqMois(?float $etAMethodeSuiviCPAcqMois): self
    {
        $this->initialized['etAMethodeSuiviCPAcqMois'] = true;
        $this->etAMethodeSuiviCPAcqMois = $etAMethodeSuiviCPAcqMois;

        return $this;
    }

    public function getBETAModeSaisieActiviteJournaliere(): ?bool
    {
        return $this->bETAModeSaisieActiviteJournaliere;
    }

    public function setBETAModeSaisieActiviteJournaliere(?bool $bETAModeSaisieActiviteJournaliere): self
    {
        $this->initialized['bETAModeSaisieActiviteJournaliere'] = true;
        $this->bETAModeSaisieActiviteJournaliere = $bETAModeSaisieActiviteJournaliere;

        return $this;
    }

    public function getEtAModeSaisieActiviteJournaliere(): ?int
    {
        return $this->etAModeSaisieActiviteJournaliere;
    }

    public function setEtAModeSaisieActiviteJournaliere(?int $etAModeSaisieActiviteJournaliere): self
    {
        $this->initialized['etAModeSaisieActiviteJournaliere'] = true;
        $this->etAModeSaisieActiviteJournaliere = $etAModeSaisieActiviteJournaliere;

        return $this;
    }

    public function getBETAMoisAcquisitionDIF(): ?bool
    {
        return $this->bETAMoisAcquisitionDIF;
    }

    public function setBETAMoisAcquisitionDIF(?bool $bETAMoisAcquisitionDIF): self
    {
        $this->initialized['bETAMoisAcquisitionDIF'] = true;
        $this->bETAMoisAcquisitionDIF = $bETAMoisAcquisitionDIF;

        return $this;
    }

    public function getEtAMoisAcquisitionDIF(): ?int
    {
        return $this->etAMoisAcquisitionDIF;
    }

    public function setEtAMoisAcquisitionDIF(?int $etAMoisAcquisitionDIF): self
    {
        $this->initialized['etAMoisAcquisitionDIF'] = true;
        $this->etAMoisAcquisitionDIF = $etAMoisAcquisitionDIF;

        return $this;
    }

    public function getBETAMoisClotureCP(): ?bool
    {
        return $this->bETAMoisClotureCP;
    }

    public function setBETAMoisClotureCP(?bool $bETAMoisClotureCP): self
    {
        $this->initialized['bETAMoisClotureCP'] = true;
        $this->bETAMoisClotureCP = $bETAMoisClotureCP;

        return $this;
    }

    public function getEtAMoisClotureCP(): ?int
    {
        return $this->etAMoisClotureCP;
    }

    public function setEtAMoisClotureCP(?int $etAMoisClotureCP): self
    {
        $this->initialized['etAMoisClotureCP'] = true;
        $this->etAMoisClotureCP = $etAMoisClotureCP;

        return $this;
    }

    public function getBETAMoisClotureFJ(): ?bool
    {
        return $this->bETAMoisClotureFJ;
    }

    public function setBETAMoisClotureFJ(?bool $bETAMoisClotureFJ): self
    {
        $this->initialized['bETAMoisClotureFJ'] = true;
        $this->bETAMoisClotureFJ = $bETAMoisClotureFJ;

        return $this;
    }

    public function getEtAMoisClotureFJ(): ?int
    {
        return $this->etAMoisClotureFJ;
    }

    public function setEtAMoisClotureFJ(?int $etAMoisClotureFJ): self
    {
        $this->initialized['etAMoisClotureFJ'] = true;
        $this->etAMoisClotureFJ = $etAMoisClotureFJ;

        return $this;
    }

    public function getBETAMoisClotureRepos(): ?bool
    {
        return $this->bETAMoisClotureRepos;
    }

    public function setBETAMoisClotureRepos(?bool $bETAMoisClotureRepos): self
    {
        $this->initialized['bETAMoisClotureRepos'] = true;
        $this->bETAMoisClotureRepos = $bETAMoisClotureRepos;

        return $this;
    }

    public function getEtAMoisClotureRepos(): ?int
    {
        return $this->etAMoisClotureRepos;
    }

    public function setEtAMoisClotureRepos(?int $etAMoisClotureRepos): self
    {
        $this->initialized['etAMoisClotureRepos'] = true;
        $this->etAMoisClotureRepos = $etAMoisClotureRepos;

        return $this;
    }

    public function getBETAMoisClotureRTT(): ?bool
    {
        return $this->bETAMoisClotureRTT;
    }

    public function setBETAMoisClotureRTT(?bool $bETAMoisClotureRTT): self
    {
        $this->initialized['bETAMoisClotureRTT'] = true;
        $this->bETAMoisClotureRTT = $bETAMoisClotureRTT;

        return $this;
    }

    public function getEtAMoisClotureRTT(): ?int
    {
        return $this->etAMoisClotureRTT;
    }

    public function setEtAMoisClotureRTT(?int $etAMoisClotureRTT): self
    {
        $this->initialized['etAMoisClotureRTT'] = true;
        $this->etAMoisClotureRTT = $etAMoisClotureRTT;

        return $this;
    }

    public function getBETANomInterne(): ?bool
    {
        return $this->bETANomInterne;
    }

    public function setBETANomInterne(?bool $bETANomInterne): self
    {
        $this->initialized['bETANomInterne'] = true;
        $this->bETANomInterne = $bETANomInterne;

        return $this;
    }

    public function getEtANomInterne(): ?string
    {
        return $this->etANomInterne;
    }

    public function setEtANomInterne(?string $etANomInterne): self
    {
        $this->initialized['etANomInterne'] = true;
        $this->etANomInterne = $etANomInterne;

        return $this;
    }

    public function getBETANonSoumisCVAE(): ?bool
    {
        return $this->bETANonSoumisCVAE;
    }

    public function setBETANonSoumisCVAE(?bool $bETANonSoumisCVAE): self
    {
        $this->initialized['bETANonSoumisCVAE'] = true;
        $this->bETANonSoumisCVAE = $bETANonSoumisCVAE;

        return $this;
    }

    public function getEtANonSoumisCVAE(): ?bool
    {
        return $this->etANonSoumisCVAE;
    }

    public function setEtANonSoumisCVAE(?bool $etANonSoumisCVAE): self
    {
        $this->initialized['etANonSoumisCVAE'] = true;
        $this->etANonSoumisCVAE = $etANonSoumisCVAE;

        return $this;
    }

    public function getBETAPeriodeRegulTauxAT1(): ?bool
    {
        return $this->bETAPeriodeRegulTauxAT1;
    }

    public function setBETAPeriodeRegulTauxAT1(?bool $bETAPeriodeRegulTauxAT1): self
    {
        $this->initialized['bETAPeriodeRegulTauxAT1'] = true;
        $this->bETAPeriodeRegulTauxAT1 = $bETAPeriodeRegulTauxAT1;

        return $this;
    }

    public function getEtAPeriodeRegulTauxAT1(): ?\DateTime
    {
        return $this->etAPeriodeRegulTauxAT1;
    }

    public function setEtAPeriodeRegulTauxAT1(?\DateTime $etAPeriodeRegulTauxAT1): self
    {
        $this->initialized['etAPeriodeRegulTauxAT1'] = true;
        $this->etAPeriodeRegulTauxAT1 = $etAPeriodeRegulTauxAT1;

        return $this;
    }

    public function getBETAPeriodeRegulTauxAT2(): ?bool
    {
        return $this->bETAPeriodeRegulTauxAT2;
    }

    public function setBETAPeriodeRegulTauxAT2(?bool $bETAPeriodeRegulTauxAT2): self
    {
        $this->initialized['bETAPeriodeRegulTauxAT2'] = true;
        $this->bETAPeriodeRegulTauxAT2 = $bETAPeriodeRegulTauxAT2;

        return $this;
    }

    public function getEtAPeriodeRegulTauxAT2(): ?\DateTime
    {
        return $this->etAPeriodeRegulTauxAT2;
    }

    public function setEtAPeriodeRegulTauxAT2(?\DateTime $etAPeriodeRegulTauxAT2): self
    {
        $this->initialized['etAPeriodeRegulTauxAT2'] = true;
        $this->etAPeriodeRegulTauxAT2 = $etAPeriodeRegulTauxAT2;

        return $this;
    }

    public function getBETAPeriodeRegulTauxAT3(): ?bool
    {
        return $this->bETAPeriodeRegulTauxAT3;
    }

    public function setBETAPeriodeRegulTauxAT3(?bool $bETAPeriodeRegulTauxAT3): self
    {
        $this->initialized['bETAPeriodeRegulTauxAT3'] = true;
        $this->bETAPeriodeRegulTauxAT3 = $bETAPeriodeRegulTauxAT3;

        return $this;
    }

    public function getEtAPeriodeRegulTauxAT3(): ?\DateTime
    {
        return $this->etAPeriodeRegulTauxAT3;
    }

    public function setEtAPeriodeRegulTauxAT3(?\DateTime $etAPeriodeRegulTauxAT3): self
    {
        $this->initialized['etAPeriodeRegulTauxAT3'] = true;
        $this->etAPeriodeRegulTauxAT3 = $etAPeriodeRegulTauxAT3;

        return $this;
    }

    public function getBETAPeriodeRegulTauxAT4(): ?bool
    {
        return $this->bETAPeriodeRegulTauxAT4;
    }

    public function setBETAPeriodeRegulTauxAT4(?bool $bETAPeriodeRegulTauxAT4): self
    {
        $this->initialized['bETAPeriodeRegulTauxAT4'] = true;
        $this->bETAPeriodeRegulTauxAT4 = $bETAPeriodeRegulTauxAT4;

        return $this;
    }

    public function getEtAPeriodeRegulTauxAT4(): ?\DateTime
    {
        return $this->etAPeriodeRegulTauxAT4;
    }

    public function setEtAPeriodeRegulTauxAT4(?\DateTime $etAPeriodeRegulTauxAT4): self
    {
        $this->initialized['etAPeriodeRegulTauxAT4'] = true;
        $this->etAPeriodeRegulTauxAT4 = $etAPeriodeRegulTauxAT4;

        return $this;
    }

    public function getBETAPeriodeRegulTauxAT5(): ?bool
    {
        return $this->bETAPeriodeRegulTauxAT5;
    }

    public function setBETAPeriodeRegulTauxAT5(?bool $bETAPeriodeRegulTauxAT5): self
    {
        $this->initialized['bETAPeriodeRegulTauxAT5'] = true;
        $this->bETAPeriodeRegulTauxAT5 = $bETAPeriodeRegulTauxAT5;

        return $this;
    }

    public function getEtAPeriodeRegulTauxAT5(): ?\DateTime
    {
        return $this->etAPeriodeRegulTauxAT5;
    }

    public function setEtAPeriodeRegulTauxAT5(?\DateTime $etAPeriodeRegulTauxAT5): self
    {
        $this->initialized['etAPeriodeRegulTauxAT5'] = true;
        $this->etAPeriodeRegulTauxAT5 = $etAPeriodeRegulTauxAT5;

        return $this;
    }

    public function getBETAPeriodeRegulTauxAT6(): ?bool
    {
        return $this->bETAPeriodeRegulTauxAT6;
    }

    public function setBETAPeriodeRegulTauxAT6(?bool $bETAPeriodeRegulTauxAT6): self
    {
        $this->initialized['bETAPeriodeRegulTauxAT6'] = true;
        $this->bETAPeriodeRegulTauxAT6 = $bETAPeriodeRegulTauxAT6;

        return $this;
    }

    public function getEtAPeriodeRegulTauxAT6(): ?\DateTime
    {
        return $this->etAPeriodeRegulTauxAT6;
    }

    public function setEtAPeriodeRegulTauxAT6(?\DateTime $etAPeriodeRegulTauxAT6): self
    {
        $this->initialized['etAPeriodeRegulTauxAT6'] = true;
        $this->etAPeriodeRegulTauxAT6 = $etAPeriodeRegulTauxAT6;

        return $this;
    }

    public function getBETAPeriodeRegulTauxAT7(): ?bool
    {
        return $this->bETAPeriodeRegulTauxAT7;
    }

    public function setBETAPeriodeRegulTauxAT7(?bool $bETAPeriodeRegulTauxAT7): self
    {
        $this->initialized['bETAPeriodeRegulTauxAT7'] = true;
        $this->bETAPeriodeRegulTauxAT7 = $bETAPeriodeRegulTauxAT7;

        return $this;
    }

    public function getEtAPeriodeRegulTauxAT7(): ?\DateTime
    {
        return $this->etAPeriodeRegulTauxAT7;
    }

    public function setEtAPeriodeRegulTauxAT7(?\DateTime $etAPeriodeRegulTauxAT7): self
    {
        $this->initialized['etAPeriodeRegulTauxAT7'] = true;
        $this->etAPeriodeRegulTauxAT7 = $etAPeriodeRegulTauxAT7;

        return $this;
    }

    public function getBETAPersonneAContacterMel(): ?bool
    {
        return $this->bETAPersonneAContacterMel;
    }

    public function setBETAPersonneAContacterMel(?bool $bETAPersonneAContacterMel): self
    {
        $this->initialized['bETAPersonneAContacterMel'] = true;
        $this->bETAPersonneAContacterMel = $bETAPersonneAContacterMel;

        return $this;
    }

    public function getEtAPersonneAContacterMel(): ?string
    {
        return $this->etAPersonneAContacterMel;
    }

    public function setEtAPersonneAContacterMel(?string $etAPersonneAContacterMel): self
    {
        $this->initialized['etAPersonneAContacterMel'] = true;
        $this->etAPersonneAContacterMel = $etAPersonneAContacterMel;

        return $this;
    }

    public function getBETAPersonneAContacterNom(): ?bool
    {
        return $this->bETAPersonneAContacterNom;
    }

    public function setBETAPersonneAContacterNom(?bool $bETAPersonneAContacterNom): self
    {
        $this->initialized['bETAPersonneAContacterNom'] = true;
        $this->bETAPersonneAContacterNom = $bETAPersonneAContacterNom;

        return $this;
    }

    public function getEtAPersonneAContacterNom(): ?string
    {
        return $this->etAPersonneAContacterNom;
    }

    public function setEtAPersonneAContacterNom(?string $etAPersonneAContacterNom): self
    {
        $this->initialized['etAPersonneAContacterNom'] = true;
        $this->etAPersonneAContacterNom = $etAPersonneAContacterNom;

        return $this;
    }

    public function getBETAPersonneAContacterPrenom(): ?bool
    {
        return $this->bETAPersonneAContacterPrenom;
    }

    public function setBETAPersonneAContacterPrenom(?bool $bETAPersonneAContacterPrenom): self
    {
        $this->initialized['bETAPersonneAContacterPrenom'] = true;
        $this->bETAPersonneAContacterPrenom = $bETAPersonneAContacterPrenom;

        return $this;
    }

    public function getEtAPersonneAContacterPrenom(): ?string
    {
        return $this->etAPersonneAContacterPrenom;
    }

    public function setEtAPersonneAContacterPrenom(?string $etAPersonneAContacterPrenom): self
    {
        $this->initialized['etAPersonneAContacterPrenom'] = true;
        $this->etAPersonneAContacterPrenom = $etAPersonneAContacterPrenom;

        return $this;
    }

    public function getBETAPersonneAContacterTel(): ?bool
    {
        return $this->bETAPersonneAContacterTel;
    }

    public function setBETAPersonneAContacterTel(?bool $bETAPersonneAContacterTel): self
    {
        $this->initialized['bETAPersonneAContacterTel'] = true;
        $this->bETAPersonneAContacterTel = $bETAPersonneAContacterTel;

        return $this;
    }

    public function getEtAPersonneAContacterTel(): ?string
    {
        return $this->etAPersonneAContacterTel;
    }

    public function setEtAPersonneAContacterTel(?string $etAPersonneAContacterTel): self
    {
        $this->initialized['etAPersonneAContacterTel'] = true;
        $this->etAPersonneAContacterTel = $etAPersonneAContacterTel;

        return $this;
    }

    public function getBETAPrefixeMatriculesSalaries(): ?bool
    {
        return $this->bETAPrefixeMatriculesSalaries;
    }

    public function setBETAPrefixeMatriculesSalaries(?bool $bETAPrefixeMatriculesSalaries): self
    {
        $this->initialized['bETAPrefixeMatriculesSalaries'] = true;
        $this->bETAPrefixeMatriculesSalaries = $bETAPrefixeMatriculesSalaries;

        return $this;
    }

    public function getEtAPrefixeMatriculesSalaries(): ?string
    {
        return $this->etAPrefixeMatriculesSalaries;
    }

    public function setEtAPrefixeMatriculesSalaries(?string $etAPrefixeMatriculesSalaries): self
    {
        $this->initialized['etAPrefixeMatriculesSalaries'] = true;
        $this->etAPrefixeMatriculesSalaries = $etAPrefixeMatriculesSalaries;

        return $this;
    }

    public function getBETARTTEnHeures(): ?bool
    {
        return $this->bETARTTEnHeures;
    }

    public function setBETARTTEnHeures(?bool $bETARTTEnHeures): self
    {
        $this->initialized['bETARTTEnHeures'] = true;
        $this->bETARTTEnHeures = $bETARTTEnHeures;

        return $this;
    }

    public function getEtARTTEnHeures(): ?float
    {
        return $this->etARTTEnHeures;
    }

    public function setEtARTTEnHeures(?float $etARTTEnHeures): self
    {
        $this->initialized['etARTTEnHeures'] = true;
        $this->etARTTEnHeures = $etARTTEnHeures;

        return $this;
    }

    public function getBETAS41G0100018001(): ?bool
    {
        return $this->bETAS41G0100018001;
    }

    public function setBETAS41G0100018001(?bool $bETAS41G0100018001): self
    {
        $this->initialized['bETAS41G0100018001'] = true;
        $this->bETAS41G0100018001 = $bETAS41G0100018001;

        return $this;
    }

    public function getEtAS41G0100018001(): ?string
    {
        return $this->etAS41G0100018001;
    }

    public function setEtAS41G0100018001(?string $etAS41G0100018001): self
    {
        $this->initialized['etAS41G0100018001'] = true;
        $this->etAS41G0100018001 = $etAS41G0100018001;

        return $this;
    }

    public function getBETAS41G0100018006(): ?bool
    {
        return $this->bETAS41G0100018006;
    }

    public function setBETAS41G0100018006(?bool $bETAS41G0100018006): self
    {
        $this->initialized['bETAS41G0100018006'] = true;
        $this->bETAS41G0100018006 = $bETAS41G0100018006;

        return $this;
    }

    public function getEtAS41G0100018006(): ?string
    {
        return $this->etAS41G0100018006;
    }

    public function setEtAS41G0100018006(?string $etAS41G0100018006): self
    {
        $this->initialized['etAS41G0100018006'] = true;
        $this->etAS41G0100018006 = $etAS41G0100018006;

        return $this;
    }

    public function getBETAS41G01000251(): ?bool
    {
        return $this->bETAS41G01000251;
    }

    public function setBETAS41G01000251(?bool $bETAS41G01000251): self
    {
        $this->initialized['bETAS41G01000251'] = true;
        $this->bETAS41G01000251 = $bETAS41G01000251;

        return $this;
    }

    public function getEtAS41G01000251(): ?string
    {
        return $this->etAS41G01000251;
    }

    public function setEtAS41G01000251(?string $etAS41G01000251): self
    {
        $this->initialized['etAS41G01000251'] = true;
        $this->etAS41G01000251 = $etAS41G01000251;

        return $this;
    }

    public function getBETAS41G01000252(): ?bool
    {
        return $this->bETAS41G01000252;
    }

    public function setBETAS41G01000252(?bool $bETAS41G01000252): self
    {
        $this->initialized['bETAS41G01000252'] = true;
        $this->bETAS41G01000252 = $bETAS41G01000252;

        return $this;
    }

    public function getEtAS41G01000252(): ?string
    {
        return $this->etAS41G01000252;
    }

    public function setEtAS41G01000252(?string $etAS41G01000252): self
    {
        $this->initialized['etAS41G01000252'] = true;
        $this->etAS41G01000252 = $etAS41G01000252;

        return $this;
    }

    public function getBETAS41G01000253(): ?bool
    {
        return $this->bETAS41G01000253;
    }

    public function setBETAS41G01000253(?bool $bETAS41G01000253): self
    {
        $this->initialized['bETAS41G01000253'] = true;
        $this->bETAS41G01000253 = $bETAS41G01000253;

        return $this;
    }

    public function getEtAS41G01000253(): ?string
    {
        return $this->etAS41G01000253;
    }

    public function setEtAS41G01000253(?string $etAS41G01000253): self
    {
        $this->initialized['etAS41G01000253'] = true;
        $this->etAS41G01000253 = $etAS41G01000253;

        return $this;
    }

    public function getBETAS41G01000254(): ?bool
    {
        return $this->bETAS41G01000254;
    }

    public function setBETAS41G01000254(?bool $bETAS41G01000254): self
    {
        $this->initialized['bETAS41G01000254'] = true;
        $this->bETAS41G01000254 = $bETAS41G01000254;

        return $this;
    }

    public function getEtAS41G01000254(): ?string
    {
        return $this->etAS41G01000254;
    }

    public function setEtAS41G01000254(?string $etAS41G01000254): self
    {
        $this->initialized['etAS41G01000254'] = true;
        $this->etAS41G01000254 = $etAS41G01000254;

        return $this;
    }

    public function getBETAS41G01000255(): ?bool
    {
        return $this->bETAS41G01000255;
    }

    public function setBETAS41G01000255(?bool $bETAS41G01000255): self
    {
        $this->initialized['bETAS41G01000255'] = true;
        $this->bETAS41G01000255 = $bETAS41G01000255;

        return $this;
    }

    public function getEtAS41G01000255(): ?string
    {
        return $this->etAS41G01000255;
    }

    public function setEtAS41G01000255(?string $etAS41G01000255): self
    {
        $this->initialized['etAS41G01000255'] = true;
        $this->etAS41G01000255 = $etAS41G01000255;

        return $this;
    }

    public function getBETAS41G01000256(): ?bool
    {
        return $this->bETAS41G01000256;
    }

    public function setBETAS41G01000256(?bool $bETAS41G01000256): self
    {
        $this->initialized['bETAS41G01000256'] = true;
        $this->bETAS41G01000256 = $bETAS41G01000256;

        return $this;
    }

    public function getEtAS41G01000256(): ?string
    {
        return $this->etAS41G01000256;
    }

    public function setEtAS41G01000256(?string $etAS41G01000256): self
    {
        $this->initialized['etAS41G01000256'] = true;
        $this->etAS41G01000256 = $etAS41G01000256;

        return $this;
    }

    public function getBETAS41G01000257(): ?bool
    {
        return $this->bETAS41G01000257;
    }

    public function setBETAS41G01000257(?bool $bETAS41G01000257): self
    {
        $this->initialized['bETAS41G01000257'] = true;
        $this->bETAS41G01000257 = $bETAS41G01000257;

        return $this;
    }

    public function getEtAS41G01000257(): ?string
    {
        return $this->etAS41G01000257;
    }

    public function setEtAS41G01000257(?string $etAS41G01000257): self
    {
        $this->initialized['etAS41G01000257'] = true;
        $this->etAS41G01000257 = $etAS41G01000257;

        return $this;
    }

    public function getBETAS41G01000261(): ?bool
    {
        return $this->bETAS41G01000261;
    }

    public function setBETAS41G01000261(?bool $bETAS41G01000261): self
    {
        $this->initialized['bETAS41G01000261'] = true;
        $this->bETAS41G01000261 = $bETAS41G01000261;

        return $this;
    }

    public function getEtAS41G01000261(): ?string
    {
        return $this->etAS41G01000261;
    }

    public function setEtAS41G01000261(?string $etAS41G01000261): self
    {
        $this->initialized['etAS41G01000261'] = true;
        $this->etAS41G01000261 = $etAS41G01000261;

        return $this;
    }

    public function getBETAS41G01000262(): ?bool
    {
        return $this->bETAS41G01000262;
    }

    public function setBETAS41G01000262(?bool $bETAS41G01000262): self
    {
        $this->initialized['bETAS41G01000262'] = true;
        $this->bETAS41G01000262 = $bETAS41G01000262;

        return $this;
    }

    public function getEtAS41G01000262(): ?string
    {
        return $this->etAS41G01000262;
    }

    public function setEtAS41G01000262(?string $etAS41G01000262): self
    {
        $this->initialized['etAS41G01000262'] = true;
        $this->etAS41G01000262 = $etAS41G01000262;

        return $this;
    }

    public function getBETAS41G01000263(): ?bool
    {
        return $this->bETAS41G01000263;
    }

    public function setBETAS41G01000263(?bool $bETAS41G01000263): self
    {
        $this->initialized['bETAS41G01000263'] = true;
        $this->bETAS41G01000263 = $bETAS41G01000263;

        return $this;
    }

    public function getEtAS41G01000263(): ?string
    {
        return $this->etAS41G01000263;
    }

    public function setEtAS41G01000263(?string $etAS41G01000263): self
    {
        $this->initialized['etAS41G01000263'] = true;
        $this->etAS41G01000263 = $etAS41G01000263;

        return $this;
    }

    public function getBETAS41G01000264(): ?bool
    {
        return $this->bETAS41G01000264;
    }

    public function setBETAS41G01000264(?bool $bETAS41G01000264): self
    {
        $this->initialized['bETAS41G01000264'] = true;
        $this->bETAS41G01000264 = $bETAS41G01000264;

        return $this;
    }

    public function getEtAS41G01000264(): ?string
    {
        return $this->etAS41G01000264;
    }

    public function setEtAS41G01000264(?string $etAS41G01000264): self
    {
        $this->initialized['etAS41G01000264'] = true;
        $this->etAS41G01000264 = $etAS41G01000264;

        return $this;
    }

    public function getBETAS41G01000265(): ?bool
    {
        return $this->bETAS41G01000265;
    }

    public function setBETAS41G01000265(?bool $bETAS41G01000265): self
    {
        $this->initialized['bETAS41G01000265'] = true;
        $this->bETAS41G01000265 = $bETAS41G01000265;

        return $this;
    }

    public function getEtAS41G01000265(): ?string
    {
        return $this->etAS41G01000265;
    }

    public function setEtAS41G01000265(?string $etAS41G01000265): self
    {
        $this->initialized['etAS41G01000265'] = true;
        $this->etAS41G01000265 = $etAS41G01000265;

        return $this;
    }

    public function getBETAS41G01000266(): ?bool
    {
        return $this->bETAS41G01000266;
    }

    public function setBETAS41G01000266(?bool $bETAS41G01000266): self
    {
        $this->initialized['bETAS41G01000266'] = true;
        $this->bETAS41G01000266 = $bETAS41G01000266;

        return $this;
    }

    public function getEtAS41G01000266(): ?string
    {
        return $this->etAS41G01000266;
    }

    public function setEtAS41G01000266(?string $etAS41G01000266): self
    {
        $this->initialized['etAS41G01000266'] = true;
        $this->etAS41G01000266 = $etAS41G01000266;

        return $this;
    }

    public function getBETAS41G01000267(): ?bool
    {
        return $this->bETAS41G01000267;
    }

    public function setBETAS41G01000267(?bool $bETAS41G01000267): self
    {
        $this->initialized['bETAS41G01000267'] = true;
        $this->bETAS41G01000267 = $bETAS41G01000267;

        return $this;
    }

    public function getEtAS41G01000267(): ?string
    {
        return $this->etAS41G01000267;
    }

    public function setEtAS41G01000267(?string $etAS41G01000267): self
    {
        $this->initialized['etAS41G01000267'] = true;
        $this->etAS41G01000267 = $etAS41G01000267;

        return $this;
    }

    public function getBETAS41G01000271(): ?bool
    {
        return $this->bETAS41G01000271;
    }

    public function setBETAS41G01000271(?bool $bETAS41G01000271): self
    {
        $this->initialized['bETAS41G01000271'] = true;
        $this->bETAS41G01000271 = $bETAS41G01000271;

        return $this;
    }

    public function getEtAS41G01000271(): ?string
    {
        return $this->etAS41G01000271;
    }

    public function setEtAS41G01000271(?string $etAS41G01000271): self
    {
        $this->initialized['etAS41G01000271'] = true;
        $this->etAS41G01000271 = $etAS41G01000271;

        return $this;
    }

    public function getBETAS41G01000272(): ?bool
    {
        return $this->bETAS41G01000272;
    }

    public function setBETAS41G01000272(?bool $bETAS41G01000272): self
    {
        $this->initialized['bETAS41G01000272'] = true;
        $this->bETAS41G01000272 = $bETAS41G01000272;

        return $this;
    }

    public function getEtAS41G01000272(): ?string
    {
        return $this->etAS41G01000272;
    }

    public function setEtAS41G01000272(?string $etAS41G01000272): self
    {
        $this->initialized['etAS41G01000272'] = true;
        $this->etAS41G01000272 = $etAS41G01000272;

        return $this;
    }

    public function getBETAS41G01000273(): ?bool
    {
        return $this->bETAS41G01000273;
    }

    public function setBETAS41G01000273(?bool $bETAS41G01000273): self
    {
        $this->initialized['bETAS41G01000273'] = true;
        $this->bETAS41G01000273 = $bETAS41G01000273;

        return $this;
    }

    public function getEtAS41G01000273(): ?string
    {
        return $this->etAS41G01000273;
    }

    public function setEtAS41G01000273(?string $etAS41G01000273): self
    {
        $this->initialized['etAS41G01000273'] = true;
        $this->etAS41G01000273 = $etAS41G01000273;

        return $this;
    }

    public function getBETAS41G01000274(): ?bool
    {
        return $this->bETAS41G01000274;
    }

    public function setBETAS41G01000274(?bool $bETAS41G01000274): self
    {
        $this->initialized['bETAS41G01000274'] = true;
        $this->bETAS41G01000274 = $bETAS41G01000274;

        return $this;
    }

    public function getEtAS41G01000274(): ?string
    {
        return $this->etAS41G01000274;
    }

    public function setEtAS41G01000274(?string $etAS41G01000274): self
    {
        $this->initialized['etAS41G01000274'] = true;
        $this->etAS41G01000274 = $etAS41G01000274;

        return $this;
    }

    public function getBETAS41G01000275(): ?bool
    {
        return $this->bETAS41G01000275;
    }

    public function setBETAS41G01000275(?bool $bETAS41G01000275): self
    {
        $this->initialized['bETAS41G01000275'] = true;
        $this->bETAS41G01000275 = $bETAS41G01000275;

        return $this;
    }

    public function getEtAS41G01000275(): ?string
    {
        return $this->etAS41G01000275;
    }

    public function setEtAS41G01000275(?string $etAS41G01000275): self
    {
        $this->initialized['etAS41G01000275'] = true;
        $this->etAS41G01000275 = $etAS41G01000275;

        return $this;
    }

    public function getBETAS41G01000276(): ?bool
    {
        return $this->bETAS41G01000276;
    }

    public function setBETAS41G01000276(?bool $bETAS41G01000276): self
    {
        $this->initialized['bETAS41G01000276'] = true;
        $this->bETAS41G01000276 = $bETAS41G01000276;

        return $this;
    }

    public function getEtAS41G01000276(): ?string
    {
        return $this->etAS41G01000276;
    }

    public function setEtAS41G01000276(?string $etAS41G01000276): self
    {
        $this->initialized['etAS41G01000276'] = true;
        $this->etAS41G01000276 = $etAS41G01000276;

        return $this;
    }

    public function getBETAS41G01000277(): ?bool
    {
        return $this->bETAS41G01000277;
    }

    public function setBETAS41G01000277(?bool $bETAS41G01000277): self
    {
        $this->initialized['bETAS41G01000277'] = true;
        $this->bETAS41G01000277 = $bETAS41G01000277;

        return $this;
    }

    public function getEtAS41G01000277(): ?string
    {
        return $this->etAS41G01000277;
    }

    public function setEtAS41G01000277(?string $etAS41G01000277): self
    {
        $this->initialized['etAS41G01000277'] = true;
        $this->etAS41G01000277 = $etAS41G01000277;

        return $this;
    }

    public function getBETAS41G01000281(): ?bool
    {
        return $this->bETAS41G01000281;
    }

    public function setBETAS41G01000281(?bool $bETAS41G01000281): self
    {
        $this->initialized['bETAS41G01000281'] = true;
        $this->bETAS41G01000281 = $bETAS41G01000281;

        return $this;
    }

    public function getEtAS41G01000281(): ?float
    {
        return $this->etAS41G01000281;
    }

    public function setEtAS41G01000281(?float $etAS41G01000281): self
    {
        $this->initialized['etAS41G01000281'] = true;
        $this->etAS41G01000281 = $etAS41G01000281;

        return $this;
    }

    public function getBETAS41G01000282(): ?bool
    {
        return $this->bETAS41G01000282;
    }

    public function setBETAS41G01000282(?bool $bETAS41G01000282): self
    {
        $this->initialized['bETAS41G01000282'] = true;
        $this->bETAS41G01000282 = $bETAS41G01000282;

        return $this;
    }

    public function getEtAS41G01000282(): ?float
    {
        return $this->etAS41G01000282;
    }

    public function setEtAS41G01000282(?float $etAS41G01000282): self
    {
        $this->initialized['etAS41G01000282'] = true;
        $this->etAS41G01000282 = $etAS41G01000282;

        return $this;
    }

    public function getBETAS41G01000283(): ?bool
    {
        return $this->bETAS41G01000283;
    }

    public function setBETAS41G01000283(?bool $bETAS41G01000283): self
    {
        $this->initialized['bETAS41G01000283'] = true;
        $this->bETAS41G01000283 = $bETAS41G01000283;

        return $this;
    }

    public function getEtAS41G01000283(): ?float
    {
        return $this->etAS41G01000283;
    }

    public function setEtAS41G01000283(?float $etAS41G01000283): self
    {
        $this->initialized['etAS41G01000283'] = true;
        $this->etAS41G01000283 = $etAS41G01000283;

        return $this;
    }

    public function getBETAS41G01000284(): ?bool
    {
        return $this->bETAS41G01000284;
    }

    public function setBETAS41G01000284(?bool $bETAS41G01000284): self
    {
        $this->initialized['bETAS41G01000284'] = true;
        $this->bETAS41G01000284 = $bETAS41G01000284;

        return $this;
    }

    public function getEtAS41G01000284(): ?float
    {
        return $this->etAS41G01000284;
    }

    public function setEtAS41G01000284(?float $etAS41G01000284): self
    {
        $this->initialized['etAS41G01000284'] = true;
        $this->etAS41G01000284 = $etAS41G01000284;

        return $this;
    }

    public function getBETAS41G01000285(): ?bool
    {
        return $this->bETAS41G01000285;
    }

    public function setBETAS41G01000285(?bool $bETAS41G01000285): self
    {
        $this->initialized['bETAS41G01000285'] = true;
        $this->bETAS41G01000285 = $bETAS41G01000285;

        return $this;
    }

    public function getEtAS41G01000285(): ?float
    {
        return $this->etAS41G01000285;
    }

    public function setEtAS41G01000285(?float $etAS41G01000285): self
    {
        $this->initialized['etAS41G01000285'] = true;
        $this->etAS41G01000285 = $etAS41G01000285;

        return $this;
    }

    public function getBETAS41G01000286(): ?bool
    {
        return $this->bETAS41G01000286;
    }

    public function setBETAS41G01000286(?bool $bETAS41G01000286): self
    {
        $this->initialized['bETAS41G01000286'] = true;
        $this->bETAS41G01000286 = $bETAS41G01000286;

        return $this;
    }

    public function getEtAS41G01000286(): ?float
    {
        return $this->etAS41G01000286;
    }

    public function setEtAS41G01000286(?float $etAS41G01000286): self
    {
        $this->initialized['etAS41G01000286'] = true;
        $this->etAS41G01000286 = $etAS41G01000286;

        return $this;
    }

    public function getBETAS41G01000287(): ?bool
    {
        return $this->bETAS41G01000287;
    }

    public function setBETAS41G01000287(?bool $bETAS41G01000287): self
    {
        $this->initialized['bETAS41G01000287'] = true;
        $this->bETAS41G01000287 = $bETAS41G01000287;

        return $this;
    }

    public function getEtAS41G01000287(): ?float
    {
        return $this->etAS41G01000287;
    }

    public function setEtAS41G01000287(?float $etAS41G01000287): self
    {
        $this->initialized['etAS41G01000287'] = true;
        $this->etAS41G01000287 = $etAS41G01000287;

        return $this;
    }

    public function getBETASaisieManuelleHeuresAbsences(): ?bool
    {
        return $this->bETASaisieManuelleHeuresAbsences;
    }

    public function setBETASaisieManuelleHeuresAbsences(?bool $bETASaisieManuelleHeuresAbsences): self
    {
        $this->initialized['bETASaisieManuelleHeuresAbsences'] = true;
        $this->bETASaisieManuelleHeuresAbsences = $bETASaisieManuelleHeuresAbsences;

        return $this;
    }

    public function getEtASaisieManuelleHeuresAbsences(): ?bool
    {
        return $this->etASaisieManuelleHeuresAbsences;
    }

    public function setEtASaisieManuelleHeuresAbsences(?bool $etASaisieManuelleHeuresAbsences): self
    {
        $this->initialized['etASaisieManuelleHeuresAbsences'] = true;
        $this->etASaisieManuelleHeuresAbsences = $etASaisieManuelleHeuresAbsences;

        return $this;
    }

    public function getBETASoumisTaxeAppr(): ?bool
    {
        return $this->bETASoumisTaxeAppr;
    }

    public function setBETASoumisTaxeAppr(?bool $bETASoumisTaxeAppr): self
    {
        $this->initialized['bETASoumisTaxeAppr'] = true;
        $this->bETASoumisTaxeAppr = $bETASoumisTaxeAppr;

        return $this;
    }

    public function getEtASoumisTaxeAppr(): ?bool
    {
        return $this->etASoumisTaxeAppr;
    }

    public function setEtASoumisTaxeAppr(?bool $etASoumisTaxeAppr): self
    {
        $this->initialized['etASoumisTaxeAppr'] = true;
        $this->etASoumisTaxeAppr = $etASoumisTaxeAppr;

        return $this;
    }

    public function getBETASoumisTaxeApprAvecMajoration(): ?bool
    {
        return $this->bETASoumisTaxeApprAvecMajoration;
    }

    public function setBETASoumisTaxeApprAvecMajoration(?bool $bETASoumisTaxeApprAvecMajoration): self
    {
        $this->initialized['bETASoumisTaxeApprAvecMajoration'] = true;
        $this->bETASoumisTaxeApprAvecMajoration = $bETASoumisTaxeApprAvecMajoration;

        return $this;
    }

    public function getEtASoumisTaxeApprAvecMajoration(): ?bool
    {
        return $this->etASoumisTaxeApprAvecMajoration;
    }

    public function setEtASoumisTaxeApprAvecMajoration(?bool $etASoumisTaxeApprAvecMajoration): self
    {
        $this->initialized['etASoumisTaxeApprAvecMajoration'] = true;
        $this->etASoumisTaxeApprAvecMajoration = $etASoumisTaxeApprAvecMajoration;

        return $this;
    }

    public function getBETASoumisTaxeSalaires(): ?bool
    {
        return $this->bETASoumisTaxeSalaires;
    }

    public function setBETASoumisTaxeSalaires(?bool $bETASoumisTaxeSalaires): self
    {
        $this->initialized['bETASoumisTaxeSalaires'] = true;
        $this->bETASoumisTaxeSalaires = $bETASoumisTaxeSalaires;

        return $this;
    }

    public function getEtASoumisTaxeSalaires(): ?bool
    {
        return $this->etASoumisTaxeSalaires;
    }

    public function setEtASoumisTaxeSalaires(?bool $etASoumisTaxeSalaires): self
    {
        $this->initialized['etASoumisTaxeSalaires'] = true;
        $this->etASoumisTaxeSalaires = $etASoumisTaxeSalaires;

        return $this;
    }

    public function getBETASoumisTaxeSalairesPctImp(): ?bool
    {
        return $this->bETASoumisTaxeSalairesPctImp;
    }

    public function setBETASoumisTaxeSalairesPctImp(?bool $bETASoumisTaxeSalairesPctImp): self
    {
        $this->initialized['bETASoumisTaxeSalairesPctImp'] = true;
        $this->bETASoumisTaxeSalairesPctImp = $bETASoumisTaxeSalairesPctImp;

        return $this;
    }

    public function getEtASoumisTaxeSalairesPctImp(): ?float
    {
        return $this->etASoumisTaxeSalairesPctImp;
    }

    public function setEtASoumisTaxeSalairesPctImp(?float $etASoumisTaxeSalairesPctImp): self
    {
        $this->initialized['etASoumisTaxeSalairesPctImp'] = true;
        $this->etASoumisTaxeSalairesPctImp = $etASoumisTaxeSalairesPctImp;

        return $this;
    }

    public function getBETASousMethodeSuiviAbsences(): ?bool
    {
        return $this->bETASousMethodeSuiviAbsences;
    }

    public function setBETASousMethodeSuiviAbsences(?bool $bETASousMethodeSuiviAbsences): self
    {
        $this->initialized['bETASousMethodeSuiviAbsences'] = true;
        $this->bETASousMethodeSuiviAbsences = $bETASousMethodeSuiviAbsences;

        return $this;
    }

    public function getEtASousMethodeSuiviAbsences(): ?int
    {
        return $this->etASousMethodeSuiviAbsences;
    }

    public function setEtASousMethodeSuiviAbsences(?int $etASousMethodeSuiviAbsences): self
    {
        $this->initialized['etASousMethodeSuiviAbsences'] = true;
        $this->etASousMethodeSuiviAbsences = $etASousMethodeSuiviAbsences;

        return $this;
    }

    public function getBETASousMethodeSuiviAbsencesFJ(): ?bool
    {
        return $this->bETASousMethodeSuiviAbsencesFJ;
    }

    public function setBETASousMethodeSuiviAbsencesFJ(?bool $bETASousMethodeSuiviAbsencesFJ): self
    {
        $this->initialized['bETASousMethodeSuiviAbsencesFJ'] = true;
        $this->bETASousMethodeSuiviAbsencesFJ = $bETASousMethodeSuiviAbsencesFJ;

        return $this;
    }

    public function getEtASousMethodeSuiviAbsencesFJ(): ?int
    {
        return $this->etASousMethodeSuiviAbsencesFJ;
    }

    public function setEtASousMethodeSuiviAbsencesFJ(?int $etASousMethodeSuiviAbsencesFJ): self
    {
        $this->initialized['etASousMethodeSuiviAbsencesFJ'] = true;
        $this->etASousMethodeSuiviAbsencesFJ = $etASousMethodeSuiviAbsencesFJ;

        return $this;
    }

    public function getBETASubrogation(): ?bool
    {
        return $this->bETASubrogation;
    }

    public function setBETASubrogation(?bool $bETASubrogation): self
    {
        $this->initialized['bETASubrogation'] = true;
        $this->bETASubrogation = $bETASubrogation;

        return $this;
    }

    public function getEtASubrogation(): ?bool
    {
        return $this->etASubrogation;
    }

    public function setEtASubrogation(?bool $etASubrogation): self
    {
        $this->initialized['etASubrogation'] = true;
        $this->etASubrogation = $etASubrogation;

        return $this;
    }

    public function getBETASubrogationVersEtaPrincipal(): ?bool
    {
        return $this->bETASubrogationVersEtaPrincipal;
    }

    public function setBETASubrogationVersEtaPrincipal(?bool $bETASubrogationVersEtaPrincipal): self
    {
        $this->initialized['bETASubrogationVersEtaPrincipal'] = true;
        $this->bETASubrogationVersEtaPrincipal = $bETASubrogationVersEtaPrincipal;

        return $this;
    }

    public function getEtASubrogationVersEtaPrincipal(): ?bool
    {
        return $this->etASubrogationVersEtaPrincipal;
    }

    public function setEtASubrogationVersEtaPrincipal(?bool $etASubrogationVersEtaPrincipal): self
    {
        $this->initialized['etASubrogationVersEtaPrincipal'] = true;
        $this->etASubrogationVersEtaPrincipal = $etASubrogationVersEtaPrincipal;

        return $this;
    }

    public function getBETATassageAbsencesJours(): ?bool
    {
        return $this->bETATassageAbsencesJours;
    }

    public function setBETATassageAbsencesJours(?bool $bETATassageAbsencesJours): self
    {
        $this->initialized['bETATassageAbsencesJours'] = true;
        $this->bETATassageAbsencesJours = $bETATassageAbsencesJours;

        return $this;
    }

    public function getEtATassageAbsencesJours(): ?int
    {
        return $this->etATassageAbsencesJours;
    }

    public function setEtATassageAbsencesJours(?int $etATassageAbsencesJours): self
    {
        $this->initialized['etATassageAbsencesJours'] = true;
        $this->etATassageAbsencesJours = $etATassageAbsencesJours;

        return $this;
    }

    public function getBETATauxVersementTrs(): ?bool
    {
        return $this->bETATauxVersementTrs;
    }

    public function setBETATauxVersementTrs(?bool $bETATauxVersementTrs): self
    {
        $this->initialized['bETATauxVersementTrs'] = true;
        $this->bETATauxVersementTrs = $bETATauxVersementTrs;

        return $this;
    }

    public function getEtATauxVersementTrs(): ?float
    {
        return $this->etATauxVersementTrs;
    }

    public function setEtATauxVersementTrs(?float $etATauxVersementTrs): self
    {
        $this->initialized['etATauxVersementTrs'] = true;
        $this->etATauxVersementTrs = $etATauxVersementTrs;

        return $this;
    }

    public function getBETATaxeSalairesAbattement(): ?bool
    {
        return $this->bETATaxeSalairesAbattement;
    }

    public function setBETATaxeSalairesAbattement(?bool $bETATaxeSalairesAbattement): self
    {
        $this->initialized['bETATaxeSalairesAbattement'] = true;
        $this->bETATaxeSalairesAbattement = $bETATaxeSalairesAbattement;

        return $this;
    }

    public function getEtATaxeSalairesAbattement(): ?bool
    {
        return $this->etATaxeSalairesAbattement;
    }

    public function setEtATaxeSalairesAbattement(?bool $etATaxeSalairesAbattement): self
    {
        $this->initialized['etATaxeSalairesAbattement'] = true;
        $this->etATaxeSalairesAbattement = $etATaxeSalairesAbattement;

        return $this;
    }

    public function getBETATaxeSalairesSurSeuilsAnnuel(): ?bool
    {
        return $this->bETATaxeSalairesSurSeuilsAnnuel;
    }

    public function setBETATaxeSalairesSurSeuilsAnnuel(?bool $bETATaxeSalairesSurSeuilsAnnuel): self
    {
        $this->initialized['bETATaxeSalairesSurSeuilsAnnuel'] = true;
        $this->bETATaxeSalairesSurSeuilsAnnuel = $bETATaxeSalairesSurSeuilsAnnuel;

        return $this;
    }

    public function getEtATaxeSalairesSurSeuilsAnnuel(): ?bool
    {
        return $this->etATaxeSalairesSurSeuilsAnnuel;
    }

    public function setEtATaxeSalairesSurSeuilsAnnuel(?bool $etATaxeSalairesSurSeuilsAnnuel): self
    {
        $this->initialized['etATaxeSalairesSurSeuilsAnnuel'] = true;
        $this->etATaxeSalairesSurSeuilsAnnuel = $etATaxeSalairesSurSeuilsAnnuel;

        return $this;
    }

    public function getBETATitresTrs(): ?bool
    {
        return $this->bETATitresTrs;
    }

    public function setBETATitresTrs(?bool $bETATitresTrs): self
    {
        $this->initialized['bETATitresTrs'] = true;
        $this->bETATitresTrs = $bETATitresTrs;

        return $this;
    }

    public function getEtATitresTrs(): ?bool
    {
        return $this->etATitresTrs;
    }

    public function setEtATitresTrs(?bool $etATitresTrs): self
    {
        $this->initialized['etATitresTrs'] = true;
        $this->etATitresTrs = $etATitresTrs;

        return $this;
    }

    public function getBETATResto(): ?bool
    {
        return $this->bETATResto;
    }

    public function setBETATResto(?bool $bETATResto): self
    {
        $this->initialized['bETATResto'] = true;
        $this->bETATResto = $bETATResto;

        return $this;
    }

    public function getEtATResto(): ?bool
    {
        return $this->etATResto;
    }

    public function setEtATResto(?bool $etATResto): self
    {
        $this->initialized['etATResto'] = true;
        $this->etATResto = $etATResto;

        return $this;
    }

    public function getBETATRestoNomVariable(): ?bool
    {
        return $this->bETATRestoNomVariable;
    }

    public function setBETATRestoNomVariable(?bool $bETATRestoNomVariable): self
    {
        $this->initialized['bETATRestoNomVariable'] = true;
        $this->bETATRestoNomVariable = $bETATRestoNomVariable;

        return $this;
    }

    public function getEtATRestoNomVariable(): ?string
    {
        return $this->etATRestoNomVariable;
    }

    public function setEtATRestoNomVariable(?string $etATRestoNomVariable): self
    {
        $this->initialized['etATRestoNomVariable'] = true;
        $this->etATRestoNomVariable = $etATRestoNomVariable;

        return $this;
    }

    public function getBETATRestoPartSalariale(): ?bool
    {
        return $this->bETATRestoPartSalariale;
    }

    public function setBETATRestoPartSalariale(?bool $bETATRestoPartSalariale): self
    {
        $this->initialized['bETATRestoPartSalariale'] = true;
        $this->bETATRestoPartSalariale = $bETATRestoPartSalariale;

        return $this;
    }

    public function getEtATRestoPartSalariale(): ?float
    {
        return $this->etATRestoPartSalariale;
    }

    public function setEtATRestoPartSalariale(?float $etATRestoPartSalariale): self
    {
        $this->initialized['etATRestoPartSalariale'] = true;
        $this->etATRestoPartSalariale = $etATRestoPartSalariale;

        return $this;
    }

    public function getBETATypeAcquisitionDIF(): ?bool
    {
        return $this->bETATypeAcquisitionDIF;
    }

    public function setBETATypeAcquisitionDIF(?bool $bETATypeAcquisitionDIF): self
    {
        $this->initialized['bETATypeAcquisitionDIF'] = true;
        $this->bETATypeAcquisitionDIF = $bETATypeAcquisitionDIF;

        return $this;
    }

    public function getEtATypeAcquisitionDIF(): ?int
    {
        return $this->etATypeAcquisitionDIF;
    }

    public function setEtATypeAcquisitionDIF(?int $etATypeAcquisitionDIF): self
    {
        $this->initialized['etATypeAcquisitionDIF'] = true;
        $this->etATypeAcquisitionDIF = $etATypeAcquisitionDIF;

        return $this;
    }

    public function getBETAVTACodeRegion(): ?bool
    {
        return $this->bETAVTACodeRegion;
    }

    public function setBETAVTACodeRegion(?bool $bETAVTACodeRegion): self
    {
        $this->initialized['bETAVTACodeRegion'] = true;
        $this->bETAVTACodeRegion = $bETAVTACodeRegion;

        return $this;
    }

    public function getEtAVTACodeRegion(): ?string
    {
        return $this->etAVTACodeRegion;
    }

    public function setEtAVTACodeRegion(?string $etAVTACodeRegion): self
    {
        $this->initialized['etAVTACodeRegion'] = true;
        $this->etAVTACodeRegion = $etAVTACodeRegion;

        return $this;
    }

    public function getBETAVTATaux(): ?bool
    {
        return $this->bETAVTATaux;
    }

    public function setBETAVTATaux(?bool $bETAVTATaux): self
    {
        $this->initialized['bETAVTATaux'] = true;
        $this->bETAVTATaux = $bETAVTATaux;

        return $this;
    }

    public function getEtAVTATaux(): ?float
    {
        return $this->etAVTATaux;
    }

    public function setEtAVTATaux(?float $etAVTATaux): self
    {
        $this->initialized['etAVTATaux'] = true;
        $this->etAVTATaux = $etAVTATaux;

        return $this;
    }

    public function getBETAVTrsAuto(): ?bool
    {
        return $this->bETAVTrsAuto;
    }

    public function setBETAVTrsAuto(?bool $bETAVTrsAuto): self
    {
        $this->initialized['bETAVTrsAuto'] = true;
        $this->bETAVTrsAuto = $bETAVTrsAuto;

        return $this;
    }

    public function getEtAVTrsAuto(): ?bool
    {
        return $this->etAVTrsAuto;
    }

    public function setEtAVTrsAuto(?bool $etAVTrsAuto): self
    {
        $this->initialized['etAVTrsAuto'] = true;
        $this->etAVTrsAuto = $etAVTrsAuto;

        return $this;
    }

    public function getBINTBTQC(): ?bool
    {
        return $this->bINTBTQC;
    }

    public function setBINTBTQC(?bool $bINTBTQC): self
    {
        $this->initialized['bINTBTQC'] = true;
        $this->bINTBTQC = $bINTBTQC;

        return $this;
    }

    public function getInTBTQC(): ?string
    {
        return $this->inTBTQC;
    }

    public function setInTBTQC(?string $inTBTQC): self
    {
        $this->initialized['inTBTQC'] = true;
        $this->inTBTQC = $inTBTQC;

        return $this;
    }

    public function getBINTCivilite(): ?bool
    {
        return $this->bINTCivilite;
    }

    public function setBINTCivilite(?bool $bINTCivilite): self
    {
        $this->initialized['bINTCivilite'] = true;
        $this->bINTCivilite = $bINTCivilite;

        return $this;
    }

    public function getInTCivilite(): ?int
    {
        return $this->inTCivilite;
    }

    public function setInTCivilite(?int $inTCivilite): self
    {
        $this->initialized['inTCivilite'] = true;
        $this->inTCivilite = $inTCivilite;

        return $this;
    }

    public function getBINTCodePostal(): ?bool
    {
        return $this->bINTCodePostal;
    }

    public function setBINTCodePostal(?bool $bINTCodePostal): self
    {
        $this->initialized['bINTCodePostal'] = true;
        $this->bINTCodePostal = $bINTCodePostal;

        return $this;
    }

    public function getInTCodePostal(): ?string
    {
        return $this->inTCodePostal;
    }

    public function setInTCodePostal(?string $inTCodePostal): self
    {
        $this->initialized['inTCodePostal'] = true;
        $this->inTCodePostal = $inTCodePostal;

        return $this;
    }

    public function getBINTCodePostalJF(): ?bool
    {
        return $this->bINTCodePostalJF;
    }

    public function setBINTCodePostalJF(?bool $bINTCodePostalJF): self
    {
        $this->initialized['bINTCodePostalJF'] = true;
        $this->bINTCodePostalJF = $bINTCodePostalJF;

        return $this;
    }

    public function getInTCodePostalJF(): ?string
    {
        return $this->inTCodePostalJF;
    }

    public function setInTCodePostalJF(?string $inTCodePostalJF): self
    {
        $this->initialized['inTCodePostalJF'] = true;
        $this->inTCodePostalJF = $inTCodePostalJF;

        return $this;
    }

    public function getBINTCommune(): ?bool
    {
        return $this->bINTCommune;
    }

    public function setBINTCommune(?bool $bINTCommune): self
    {
        $this->initialized['bINTCommune'] = true;
        $this->bINTCommune = $bINTCommune;

        return $this;
    }

    public function getInTCommune(): ?string
    {
        return $this->inTCommune;
    }

    public function setInTCommune(?string $inTCommune): self
    {
        $this->initialized['inTCommune'] = true;
        $this->inTCommune = $inTCommune;

        return $this;
    }

    public function getBINTCommuneINSEE(): ?bool
    {
        return $this->bINTCommuneINSEE;
    }

    public function setBINTCommuneINSEE(?bool $bINTCommuneINSEE): self
    {
        $this->initialized['bINTCommuneINSEE'] = true;
        $this->bINTCommuneINSEE = $bINTCommuneINSEE;

        return $this;
    }

    public function getInTCommuneINSEE(): ?string
    {
        return $this->inTCommuneINSEE;
    }

    public function setInTCommuneINSEE(?string $inTCommuneINSEE): self
    {
        $this->initialized['inTCommuneINSEE'] = true;
        $this->inTCommuneINSEE = $inTCommuneINSEE;

        return $this;
    }

    public function getBINTComplementAdresse(): ?bool
    {
        return $this->bINTComplementAdresse;
    }

    public function setBINTComplementAdresse(?bool $bINTComplementAdresse): self
    {
        $this->initialized['bINTComplementAdresse'] = true;
        $this->bINTComplementAdresse = $bINTComplementAdresse;

        return $this;
    }

    public function getInTComplementAdresse(): ?string
    {
        return $this->inTComplementAdresse;
    }

    public function setInTComplementAdresse(?string $inTComplementAdresse): self
    {
        $this->initialized['inTComplementAdresse'] = true;
        $this->inTComplementAdresse = $inTComplementAdresse;

        return $this;
    }

    public function getBINTDateDeces(): ?bool
    {
        return $this->bINTDateDeces;
    }

    public function setBINTDateDeces(?bool $bINTDateDeces): self
    {
        $this->initialized['bINTDateDeces'] = true;
        $this->bINTDateDeces = $bINTDateDeces;

        return $this;
    }

    public function getInTDateDeces(): ?\DateTime
    {
        return $this->inTDateDeces;
    }

    public function setInTDateDeces(?\DateTime $inTDateDeces): self
    {
        $this->initialized['inTDateDeces'] = true;
        $this->inTDateDeces = $inTDateDeces;

        return $this;
    }

    public function getBINTDateNaissance(): ?bool
    {
        return $this->bINTDateNaissance;
    }

    public function setBINTDateNaissance(?bool $bINTDateNaissance): self
    {
        $this->initialized['bINTDateNaissance'] = true;
        $this->bINTDateNaissance = $bINTDateNaissance;

        return $this;
    }

    public function getInTDateNaissance(): ?\DateTime
    {
        return $this->inTDateNaissance;
    }

    public function setInTDateNaissance(?\DateTime $inTDateNaissance): self
    {
        $this->initialized['inTDateNaissance'] = true;
        $this->inTDateNaissance = $inTDateNaissance;

        return $this;
    }

    public function getBINTEnseigne(): ?bool
    {
        return $this->bINTEnseigne;
    }

    public function setBINTEnseigne(?bool $bINTEnseigne): self
    {
        $this->initialized['bINTEnseigne'] = true;
        $this->bINTEnseigne = $bINTEnseigne;

        return $this;
    }

    public function getInTEnseigne(): ?string
    {
        return $this->inTEnseigne;
    }

    public function setInTEnseigne(?string $inTEnseigne): self
    {
        $this->initialized['inTEnseigne'] = true;
        $this->inTEnseigne = $inTEnseigne;

        return $this;
    }

    public function getBINTFax(): ?bool
    {
        return $this->bINTFax;
    }

    public function setBINTFax(?bool $bINTFax): self
    {
        $this->initialized['bINTFax'] = true;
        $this->bINTFax = $bINTFax;

        return $this;
    }

    public function getInTFax(): ?string
    {
        return $this->inTFax;
    }

    public function setInTFax(?string $inTFax): self
    {
        $this->initialized['inTFax'] = true;
        $this->inTFax = $inTFax;

        return $this;
    }

    public function getBINTFormeJuridique(): ?bool
    {
        return $this->bINTFormeJuridique;
    }

    public function setBINTFormeJuridique(?bool $bINTFormeJuridique): self
    {
        $this->initialized['bINTFormeJuridique'] = true;
        $this->bINTFormeJuridique = $bINTFormeJuridique;

        return $this;
    }

    public function getInTFormeJuridique(): ?string
    {
        return $this->inTFormeJuridique;
    }

    public function setInTFormeJuridique(?string $inTFormeJuridique): self
    {
        $this->initialized['inTFormeJuridique'] = true;
        $this->inTFormeJuridique = $inTFormeJuridique;

        return $this;
    }

    public function getBINTMel(): ?bool
    {
        return $this->bINTMel;
    }

    public function setBINTMel(?bool $bINTMel): self
    {
        $this->initialized['bINTMel'] = true;
        $this->bINTMel = $bINTMel;

        return $this;
    }

    public function getInTMel(): ?string
    {
        return $this->inTMel;
    }

    public function setInTMel(?string $inTMel): self
    {
        $this->initialized['inTMel'] = true;
        $this->inTMel = $inTMel;

        return $this;
    }

    public function getBINTNAF(): ?bool
    {
        return $this->bINTNAF;
    }

    public function setBINTNAF(?bool $bINTNAF): self
    {
        $this->initialized['bINTNAF'] = true;
        $this->bINTNAF = $bINTNAF;

        return $this;
    }

    public function getInTNAF(): ?string
    {
        return $this->inTNAF;
    }

    public function setInTNAF(?string $inTNAF): self
    {
        $this->initialized['inTNAF'] = true;
        $this->inTNAF = $inTNAF;

        return $this;
    }

    public function getBINTNomPays(): ?bool
    {
        return $this->bINTNomPays;
    }

    public function setBINTNomPays(?bool $bINTNomPays): self
    {
        $this->initialized['bINTNomPays'] = true;
        $this->bINTNomPays = $bINTNomPays;

        return $this;
    }

    public function getInTNomPays(): ?string
    {
        return $this->inTNomPays;
    }

    public function setInTNomPays(?string $inTNomPays): self
    {
        $this->initialized['inTNomPays'] = true;
        $this->inTNomPays = $inTNomPays;

        return $this;
    }

    public function getBINTNomUsuel(): ?bool
    {
        return $this->bINTNomUsuel;
    }

    public function setBINTNomUsuel(?bool $bINTNomUsuel): self
    {
        $this->initialized['bINTNomUsuel'] = true;
        $this->bINTNomUsuel = $bINTNomUsuel;

        return $this;
    }

    public function getInTNomUsuel(): ?string
    {
        return $this->inTNomUsuel;
    }

    public function setInTNomUsuel(?string $inTNomUsuel): self
    {
        $this->initialized['inTNomUsuel'] = true;
        $this->inTNomUsuel = $inTNomUsuel;

        return $this;
    }

    public function getBINTNomVille(): ?bool
    {
        return $this->bINTNomVille;
    }

    public function setBINTNomVille(?bool $bINTNomVille): self
    {
        $this->initialized['bINTNomVille'] = true;
        $this->bINTNomVille = $bINTNomVille;

        return $this;
    }

    public function getInTNomVille(): ?string
    {
        return $this->inTNomVille;
    }

    public function setInTNomVille(?string $inTNomVille): self
    {
        $this->initialized['inTNomVille'] = true;
        $this->inTNomVille = $inTNomVille;

        return $this;
    }

    public function getBINTNomVoie(): ?bool
    {
        return $this->bINTNomVoie;
    }

    public function setBINTNomVoie(?bool $bINTNomVoie): self
    {
        $this->initialized['bINTNomVoie'] = true;
        $this->bINTNomVoie = $bINTNomVoie;

        return $this;
    }

    public function getInTNomVoie(): ?string
    {
        return $this->inTNomVoie;
    }

    public function setInTNomVoie(?string $inTNomVoie): self
    {
        $this->initialized['inTNomVoie'] = true;
        $this->inTNomVoie = $inTNomVoie;

        return $this;
    }

    public function getBINTNumVoie(): ?bool
    {
        return $this->bINTNumVoie;
    }

    public function setBINTNumVoie(?bool $bINTNumVoie): self
    {
        $this->initialized['bINTNumVoie'] = true;
        $this->bINTNumVoie = $bINTNumVoie;

        return $this;
    }

    public function getInTNumVoie(): ?string
    {
        return $this->inTNumVoie;
    }

    public function setInTNumVoie(?string $inTNumVoie): self
    {
        $this->initialized['inTNumVoie'] = true;
        $this->inTNumVoie = $inTNumVoie;

        return $this;
    }

    public function getBINTPaysISO(): ?bool
    {
        return $this->bINTPaysISO;
    }

    public function setBINTPaysISO(?bool $bINTPaysISO): self
    {
        $this->initialized['bINTPaysISO'] = true;
        $this->bINTPaysISO = $bINTPaysISO;

        return $this;
    }

    public function getInTPaysISO(): ?string
    {
        return $this->inTPaysISO;
    }

    public function setInTPaysISO(?string $inTPaysISO): self
    {
        $this->initialized['inTPaysISO'] = true;
        $this->inTPaysISO = $inTPaysISO;

        return $this;
    }

    public function getBINTPaysISOJF(): ?bool
    {
        return $this->bINTPaysISOJF;
    }

    public function setBINTPaysISOJF(?bool $bINTPaysISOJF): self
    {
        $this->initialized['bINTPaysISOJF'] = true;
        $this->bINTPaysISOJF = $bINTPaysISOJF;

        return $this;
    }

    public function getInTPaysISOJF(): ?string
    {
        return $this->inTPaysISOJF;
    }

    public function setInTPaysISOJF(?string $inTPaysISOJF): self
    {
        $this->initialized['inTPaysISOJF'] = true;
        $this->inTPaysISOJF = $inTPaysISOJF;

        return $this;
    }

    public function getBINTPrenom(): ?bool
    {
        return $this->bINTPrenom;
    }

    public function setBINTPrenom(?bool $bINTPrenom): self
    {
        $this->initialized['bINTPrenom'] = true;
        $this->bINTPrenom = $bINTPrenom;

        return $this;
    }

    public function getInTPrenom(): ?string
    {
        return $this->inTPrenom;
    }

    public function setInTPrenom(?string $inTPrenom): self
    {
        $this->initialized['inTPrenom'] = true;
        $this->inTPrenom = $inTPrenom;

        return $this;
    }

    public function getBINTRaisonSociale(): ?bool
    {
        return $this->bINTRaisonSociale;
    }

    public function setBINTRaisonSociale(?bool $bINTRaisonSociale): self
    {
        $this->initialized['bINTRaisonSociale'] = true;
        $this->bINTRaisonSociale = $bINTRaisonSociale;

        return $this;
    }

    public function getInTRaisonSociale(): ?string
    {
        return $this->inTRaisonSociale;
    }

    public function setInTRaisonSociale(?string $inTRaisonSociale): self
    {
        $this->initialized['inTRaisonSociale'] = true;
        $this->inTRaisonSociale = $inTRaisonSociale;

        return $this;
    }

    public function getBINTSiret(): ?bool
    {
        return $this->bINTSiret;
    }

    public function setBINTSiret(?bool $bINTSiret): self
    {
        $this->initialized['bINTSiret'] = true;
        $this->bINTSiret = $bINTSiret;

        return $this;
    }

    public function getInTSiret(): ?string
    {
        return $this->inTSiret;
    }

    public function setInTSiret(?string $inTSiret): self
    {
        $this->initialized['inTSiret'] = true;
        $this->inTSiret = $inTSiret;

        return $this;
    }

    public function getBINTSiteWeb(): ?bool
    {
        return $this->bINTSiteWeb;
    }

    public function setBINTSiteWeb(?bool $bINTSiteWeb): self
    {
        $this->initialized['bINTSiteWeb'] = true;
        $this->bINTSiteWeb = $bINTSiteWeb;

        return $this;
    }

    public function getInTSiteWeb(): ?string
    {
        return $this->inTSiteWeb;
    }

    public function setInTSiteWeb(?string $inTSiteWeb): self
    {
        $this->initialized['inTSiteWeb'] = true;
        $this->inTSiteWeb = $inTSiteWeb;

        return $this;
    }

    public function getBINTTelBureau(): ?bool
    {
        return $this->bINTTelBureau;
    }

    public function setBINTTelBureau(?bool $bINTTelBureau): self
    {
        $this->initialized['bINTTelBureau'] = true;
        $this->bINTTelBureau = $bINTTelBureau;

        return $this;
    }

    public function getInTTelBureau(): ?string
    {
        return $this->inTTelBureau;
    }

    public function setInTTelBureau(?string $inTTelBureau): self
    {
        $this->initialized['inTTelBureau'] = true;
        $this->inTTelBureau = $inTTelBureau;

        return $this;
    }
}
