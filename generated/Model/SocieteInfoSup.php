<?php

namespace QdequippeTech\Silae\Api\Model;

class SocieteInfoSup
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
    protected $bCLIAffilieCCP;

    /**
     * @var bool|null
     */
    protected $clIAffilieCCP;

    /**
     * @var bool|null
     */
    protected $bCLIBaseCalculAnciennete;

    /**
     * @var int|null
     */
    protected $clIBaseCalculAnciennete;

    /**
     * @var bool|null
     */
    protected $bCLICalcAutoESInactif;

    /**
     * @var bool|null
     */
    protected $clICalcAutoESInactif;

    /**
     * @var bool|null
     */
    protected $bCLICalcAutoIJSSInactif;

    /**
     * @var bool|null
     */
    protected $clICalcAutoIJSSInactif;

    /**
     * @var bool|null
     */
    protected $bCLICalcAutoMaintienInactif;

    /**
     * @var bool|null
     */
    protected $clICalcAutoMaintienInactif;

    /**
     * @var bool|null
     */
    protected $bCLICalcAutoRegulInactif;

    /**
     * @var bool|null
     */
    protected $clICalcAutoRegulInactif;

    /**
     * @var bool|null
     */
    protected $bCLIChaineFabricationDateLimiteAbsences;

    /**
     * @var string|null
     */
    protected $clIChaineFabricationDateLimiteAbsences;

    /**
     * @var bool|null
     */
    protected $bCLIConfSalActive;

    /**
     * @var bool|null
     */
    protected $clIConfSalActive;

    /**
     * @var bool|null
     */
    protected $bCLIDFPTepa;

    /**
     * @var bool|null
     */
    protected $clIDFPTepa;

    /**
     * @var bool|null
     */
    protected $bCLIDFPTepaDebut;

    /**
     * @var \DateTime|null
     */
    protected $clIDFPTepaDebut;

    /**
     * @var bool|null
     */
    protected $bCLIDtDebChangePaieDecalee;

    /**
     * @var \DateTime|null
     */
    protected $clIDtDebChangePaieDecalee;

    /**
     * @var bool|null
     */
    protected $bCLIDtDebExerciceComptable;

    /**
     * @var \DateTime|null
     */
    protected $clIDtDebExerciceComptable;

    /**
     * @var bool|null
     */
    protected $bCLIDtFinExerciceComptable;

    /**
     * @var \DateTime|null
     */
    protected $clIDtFinExerciceComptable;

    /**
     * @var bool|null
     */
    protected $bCLIEmployeurCivilite;

    /**
     * @var int|null
     */
    protected $clIEmployeurCivilite;

    /**
     * @var bool|null
     */
    protected $bCLIEmployeurNom;

    /**
     * @var string|null
     */
    protected $clIEmployeurNom;

    /**
     * @var bool|null
     */
    protected $bCLIEmployeurPrenom;

    /**
     * @var string|null
     */
    protected $clIEmployeurPrenom;

    /**
     * @var bool|null
     */
    protected $bCLIEmployeurQualite;

    /**
     * @var int|null
     */
    protected $clIEmployeurQualite;

    /**
     * @var bool|null
     */
    protected $bCLIEmployeurQualiteAutre;

    /**
     * @var string|null
     */
    protected $clIEmployeurQualiteAutre;

    /**
     * @var bool|null
     */
    protected $bCLIEtatDossierPaie;

    /**
     * @var int|null
     */
    protected $clIEtatDossierPaie;

    /**
     * @var bool|null
     */
    protected $bCLIFormaProfTranche;

    /**
     * @var int|null
     */
    protected $clIFormaProfTranche;

    /**
     * @var bool|null
     */
    protected $bCLIFormaProfTrancheAnnee;

    /**
     * @var \DateTime|null
     */
    protected $clIFormaProfTrancheAnnee;

    /**
     * @var bool|null
     */
    protected $bCLIFormaProfTrancheAnnee2;

    /**
     * @var \DateTime|null
     */
    protected $clIFormaProfTrancheAnnee2;

    /**
     * @var bool|null
     */
    protected $bCLIFormaProfTrancheAnnee3;

    /**
     * @var \DateTime|null
     */
    protected $clIFormaProfTrancheAnnee3;

    /**
     * @var bool|null
     */
    protected $bCLIFormaProfTrancheAnnee4;

    /**
     * @var \DateTime|null
     */
    protected $clIFormaProfTrancheAnnee4;

    /**
     * @var bool|null
     */
    protected $bCLIGestionCPExclEnJours;

    /**
     * @var bool|null
     */
    protected $clIGestionCPExclEnJours;

    /**
     * @var bool|null
     */
    protected $bCLIJourVersementSalaires;

    /**
     * @var int|null
     */
    protected $clIJourVersementSalaires;

    /**
     * @var bool|null
     */
    protected $bCLIListesTriSalaries;

    /**
     * @var int|null
     */
    protected $clIListesTriSalaries;

    /**
     * @var bool|null
     */
    protected $bCLIMatriculeAuto;

    /**
     * @var bool|null
     */
    protected $clIMatriculeAuto;

    /**
     * @var bool|null
     */
    protected $bCLIMatriculeLongueur;

    /**
     * @var int|null
     */
    protected $clIMatriculeLongueur;

    /**
     * @var bool|null
     */
    protected $bCLIMethodeArbitrage;

    /**
     * @var int|null
     */
    protected $clIMethodeArbitrage;

    /**
     * @var bool|null
     */
    protected $bCLIMethodeCalculMaintien;

    /**
     * @var int|null
     */
    protected $clIMethodeCalculMaintien;

    /**
     * @var bool|null
     */
    protected $bCLIMethodeCalculMaintienNbM;

    /**
     * @var int|null
     */
    protected $clIMethodeCalculMaintienNbM;

    /**
     * @var bool|null
     */
    protected $bCLIMethodeRetenueCP;

    /**
     * @var int|null
     */
    protected $clIMethodeRetenueCP;

    /**
     * @var bool|null
     */
    protected $bCLIMethodesSuiviAbsencesDansEta;

    /**
     * @var bool|null
     */
    protected $clIMethodesSuiviAbsencesDansEta;

    /**
     * @var bool|null
     */
    protected $bCLIMethodeSuiviAbsences;

    /**
     * @var int|null
     */
    protected $clIMethodeSuiviAbsences;

    /**
     * @var bool|null
     */
    protected $bCLIMethodeSuiviAbsencesDeductionHM;

    /**
     * @var int|null
     */
    protected $clIMethodeSuiviAbsencesDeductionHM;

    /**
     * @var bool|null
     */
    protected $bCLIMethodeSuiviAbsencesJC;

    /**
     * @var int|null
     */
    protected $clIMethodeSuiviAbsencesJC;

    /**
     * @var bool|null
     */
    protected $bCLIMethodeSuiviCP;

    /**
     * @var int|null
     */
    protected $clIMethodeSuiviCP;

    /**
     * @var bool|null
     */
    protected $bCLIMethodeSuiviCPAcqMois;

    /**
     * @var float|null
     */
    protected $clIMethodeSuiviCPAcqMois;

    /**
     * @var bool|null
     */
    protected $bCLIModuleCTCDActif;

    /**
     * @var bool|null
     */
    protected $clIModuleCTCDActif;

    /**
     * @var bool|null
     */
    protected $bCLIMontagePaiePeriodeDebut;

    /**
     * @var \DateTime|null
     */
    protected $clIMontagePaiePeriodeDebut;

    /**
     * @var bool|null
     */
    protected $bCLIPaieDecalee;

    /**
     * @var bool|null
     */
    protected $clIPaieDecalee;

    /**
     * @var bool|null
     */
    protected $bCLIPersonneAContacterMel;

    /**
     * @var string|null
     */
    protected $clIPersonneAContacterMel;

    /**
     * @var bool|null
     */
    protected $bCLIPersonneAContacterNom;

    /**
     * @var string|null
     */
    protected $clIPersonneAContacterNom;

    /**
     * @var bool|null
     */
    protected $bCLIPersonneAContacterPrenom;

    /**
     * @var string|null
     */
    protected $clIPersonneAContacterPrenom;

    /**
     * @var bool|null
     */
    protected $bCLIPersonneAContacterTel;

    /**
     * @var string|null
     */
    protected $clIPersonneAContacterTel;

    /**
     * @var bool|null
     */
    protected $bCLIReductionFillon19;

    /**
     * @var bool|null
     */
    protected $clIReductionFillon19;

    /**
     * @var bool|null
     */
    protected $bCLIReductionFillon19Debut;

    /**
     * @var \DateTime|null
     */
    protected $clIReductionFillon19Debut;

    /**
     * @var bool|null
     */
    protected $bCLISepaModeComptabilisation;

    /**
     * @var int|null
     */
    protected $clISepaModeComptabilisation;

    /**
     * @var bool|null
     */
    protected $bCLISortieAppliJourVersementSalaires;

    /**
     * @var bool|null
     */
    protected $clISortieAppliJourVersementSalaires;

    /**
     * @var bool|null
     */
    protected $bCLISortieAppliModeReglementNormal;

    /**
     * @var bool|null
     */
    protected $clISortieAppliModeReglementNormal;

    /**
     * @var bool|null
     */
    protected $bCLISousMethodeSuiviAbsences;

    /**
     * @var int|null
     */
    protected $clISousMethodeSuiviAbsences;

    /**
     * @var bool|null
     */
    protected $bCLISousMethodeSuiviAbsencesFJ;

    /**
     * @var int|null
     */
    protected $clISousMethodeSuiviAbsencesFJ;

    /**
     * @var bool|null
     */
    protected $bCLISubrogation;

    /**
     * @var bool|null
     */
    protected $clISubrogation;

    /**
     * @var bool|null
     */
    protected $bCLISubrogationVersEtaPrincipal;

    /**
     * @var bool|null
     */
    protected $clISubrogationVersEtaPrincipal;

    /**
     * @var bool|null
     */
    protected $bCLITassageAbsencesJours;

    /**
     * @var int|null
     */
    protected $clITassageAbsencesJours;

    /**
     * @var bool|null
     */
    protected $bCLITaxeApprentissagePayeeCCP;

    /**
     * @var bool|null
     */
    protected $clITaxeApprentissagePayeeCCP;

    /**
     * @var bool|null
     */
    protected $bCLITaxeCotPPrev;

    /**
     * @var bool|null
     */
    protected $clITaxeCotPPrev;

    public function getBCLIAffilieCCP(): ?bool
    {
        return $this->bCLIAffilieCCP;
    }

    public function setBCLIAffilieCCP(?bool $bCLIAffilieCCP): self
    {
        $this->initialized['bCLIAffilieCCP'] = true;
        $this->bCLIAffilieCCP = $bCLIAffilieCCP;

        return $this;
    }

    public function getClIAffilieCCP(): ?bool
    {
        return $this->clIAffilieCCP;
    }

    public function setClIAffilieCCP(?bool $clIAffilieCCP): self
    {
        $this->initialized['clIAffilieCCP'] = true;
        $this->clIAffilieCCP = $clIAffilieCCP;

        return $this;
    }

    public function getBCLIBaseCalculAnciennete(): ?bool
    {
        return $this->bCLIBaseCalculAnciennete;
    }

    public function setBCLIBaseCalculAnciennete(?bool $bCLIBaseCalculAnciennete): self
    {
        $this->initialized['bCLIBaseCalculAnciennete'] = true;
        $this->bCLIBaseCalculAnciennete = $bCLIBaseCalculAnciennete;

        return $this;
    }

    public function getClIBaseCalculAnciennete(): ?int
    {
        return $this->clIBaseCalculAnciennete;
    }

    public function setClIBaseCalculAnciennete(?int $clIBaseCalculAnciennete): self
    {
        $this->initialized['clIBaseCalculAnciennete'] = true;
        $this->clIBaseCalculAnciennete = $clIBaseCalculAnciennete;

        return $this;
    }

    public function getBCLICalcAutoESInactif(): ?bool
    {
        return $this->bCLICalcAutoESInactif;
    }

    public function setBCLICalcAutoESInactif(?bool $bCLICalcAutoESInactif): self
    {
        $this->initialized['bCLICalcAutoESInactif'] = true;
        $this->bCLICalcAutoESInactif = $bCLICalcAutoESInactif;

        return $this;
    }

    public function getClICalcAutoESInactif(): ?bool
    {
        return $this->clICalcAutoESInactif;
    }

    public function setClICalcAutoESInactif(?bool $clICalcAutoESInactif): self
    {
        $this->initialized['clICalcAutoESInactif'] = true;
        $this->clICalcAutoESInactif = $clICalcAutoESInactif;

        return $this;
    }

    public function getBCLICalcAutoIJSSInactif(): ?bool
    {
        return $this->bCLICalcAutoIJSSInactif;
    }

    public function setBCLICalcAutoIJSSInactif(?bool $bCLICalcAutoIJSSInactif): self
    {
        $this->initialized['bCLICalcAutoIJSSInactif'] = true;
        $this->bCLICalcAutoIJSSInactif = $bCLICalcAutoIJSSInactif;

        return $this;
    }

    public function getClICalcAutoIJSSInactif(): ?bool
    {
        return $this->clICalcAutoIJSSInactif;
    }

    public function setClICalcAutoIJSSInactif(?bool $clICalcAutoIJSSInactif): self
    {
        $this->initialized['clICalcAutoIJSSInactif'] = true;
        $this->clICalcAutoIJSSInactif = $clICalcAutoIJSSInactif;

        return $this;
    }

    public function getBCLICalcAutoMaintienInactif(): ?bool
    {
        return $this->bCLICalcAutoMaintienInactif;
    }

    public function setBCLICalcAutoMaintienInactif(?bool $bCLICalcAutoMaintienInactif): self
    {
        $this->initialized['bCLICalcAutoMaintienInactif'] = true;
        $this->bCLICalcAutoMaintienInactif = $bCLICalcAutoMaintienInactif;

        return $this;
    }

    public function getClICalcAutoMaintienInactif(): ?bool
    {
        return $this->clICalcAutoMaintienInactif;
    }

    public function setClICalcAutoMaintienInactif(?bool $clICalcAutoMaintienInactif): self
    {
        $this->initialized['clICalcAutoMaintienInactif'] = true;
        $this->clICalcAutoMaintienInactif = $clICalcAutoMaintienInactif;

        return $this;
    }

    public function getBCLICalcAutoRegulInactif(): ?bool
    {
        return $this->bCLICalcAutoRegulInactif;
    }

    public function setBCLICalcAutoRegulInactif(?bool $bCLICalcAutoRegulInactif): self
    {
        $this->initialized['bCLICalcAutoRegulInactif'] = true;
        $this->bCLICalcAutoRegulInactif = $bCLICalcAutoRegulInactif;

        return $this;
    }

    public function getClICalcAutoRegulInactif(): ?bool
    {
        return $this->clICalcAutoRegulInactif;
    }

    public function setClICalcAutoRegulInactif(?bool $clICalcAutoRegulInactif): self
    {
        $this->initialized['clICalcAutoRegulInactif'] = true;
        $this->clICalcAutoRegulInactif = $clICalcAutoRegulInactif;

        return $this;
    }

    public function getBCLIChaineFabricationDateLimiteAbsences(): ?bool
    {
        return $this->bCLIChaineFabricationDateLimiteAbsences;
    }

    public function setBCLIChaineFabricationDateLimiteAbsences(?bool $bCLIChaineFabricationDateLimiteAbsences): self
    {
        $this->initialized['bCLIChaineFabricationDateLimiteAbsences'] = true;
        $this->bCLIChaineFabricationDateLimiteAbsences = $bCLIChaineFabricationDateLimiteAbsences;

        return $this;
    }

    public function getClIChaineFabricationDateLimiteAbsences(): ?string
    {
        return $this->clIChaineFabricationDateLimiteAbsences;
    }

    public function setClIChaineFabricationDateLimiteAbsences(?string $clIChaineFabricationDateLimiteAbsences): self
    {
        $this->initialized['clIChaineFabricationDateLimiteAbsences'] = true;
        $this->clIChaineFabricationDateLimiteAbsences = $clIChaineFabricationDateLimiteAbsences;

        return $this;
    }

    public function getBCLIConfSalActive(): ?bool
    {
        return $this->bCLIConfSalActive;
    }

    public function setBCLIConfSalActive(?bool $bCLIConfSalActive): self
    {
        $this->initialized['bCLIConfSalActive'] = true;
        $this->bCLIConfSalActive = $bCLIConfSalActive;

        return $this;
    }

    public function getClIConfSalActive(): ?bool
    {
        return $this->clIConfSalActive;
    }

    public function setClIConfSalActive(?bool $clIConfSalActive): self
    {
        $this->initialized['clIConfSalActive'] = true;
        $this->clIConfSalActive = $clIConfSalActive;

        return $this;
    }

    public function getBCLIDFPTepa(): ?bool
    {
        return $this->bCLIDFPTepa;
    }

    public function setBCLIDFPTepa(?bool $bCLIDFPTepa): self
    {
        $this->initialized['bCLIDFPTepa'] = true;
        $this->bCLIDFPTepa = $bCLIDFPTepa;

        return $this;
    }

    public function getClIDFPTepa(): ?bool
    {
        return $this->clIDFPTepa;
    }

    public function setClIDFPTepa(?bool $clIDFPTepa): self
    {
        $this->initialized['clIDFPTepa'] = true;
        $this->clIDFPTepa = $clIDFPTepa;

        return $this;
    }

    public function getBCLIDFPTepaDebut(): ?bool
    {
        return $this->bCLIDFPTepaDebut;
    }

    public function setBCLIDFPTepaDebut(?bool $bCLIDFPTepaDebut): self
    {
        $this->initialized['bCLIDFPTepaDebut'] = true;
        $this->bCLIDFPTepaDebut = $bCLIDFPTepaDebut;

        return $this;
    }

    public function getClIDFPTepaDebut(): ?\DateTime
    {
        return $this->clIDFPTepaDebut;
    }

    public function setClIDFPTepaDebut(?\DateTime $clIDFPTepaDebut): self
    {
        $this->initialized['clIDFPTepaDebut'] = true;
        $this->clIDFPTepaDebut = $clIDFPTepaDebut;

        return $this;
    }

    public function getBCLIDtDebChangePaieDecalee(): ?bool
    {
        return $this->bCLIDtDebChangePaieDecalee;
    }

    public function setBCLIDtDebChangePaieDecalee(?bool $bCLIDtDebChangePaieDecalee): self
    {
        $this->initialized['bCLIDtDebChangePaieDecalee'] = true;
        $this->bCLIDtDebChangePaieDecalee = $bCLIDtDebChangePaieDecalee;

        return $this;
    }

    public function getClIDtDebChangePaieDecalee(): ?\DateTime
    {
        return $this->clIDtDebChangePaieDecalee;
    }

    public function setClIDtDebChangePaieDecalee(?\DateTime $clIDtDebChangePaieDecalee): self
    {
        $this->initialized['clIDtDebChangePaieDecalee'] = true;
        $this->clIDtDebChangePaieDecalee = $clIDtDebChangePaieDecalee;

        return $this;
    }

    public function getBCLIDtDebExerciceComptable(): ?bool
    {
        return $this->bCLIDtDebExerciceComptable;
    }

    public function setBCLIDtDebExerciceComptable(?bool $bCLIDtDebExerciceComptable): self
    {
        $this->initialized['bCLIDtDebExerciceComptable'] = true;
        $this->bCLIDtDebExerciceComptable = $bCLIDtDebExerciceComptable;

        return $this;
    }

    public function getClIDtDebExerciceComptable(): ?\DateTime
    {
        return $this->clIDtDebExerciceComptable;
    }

    public function setClIDtDebExerciceComptable(?\DateTime $clIDtDebExerciceComptable): self
    {
        $this->initialized['clIDtDebExerciceComptable'] = true;
        $this->clIDtDebExerciceComptable = $clIDtDebExerciceComptable;

        return $this;
    }

    public function getBCLIDtFinExerciceComptable(): ?bool
    {
        return $this->bCLIDtFinExerciceComptable;
    }

    public function setBCLIDtFinExerciceComptable(?bool $bCLIDtFinExerciceComptable): self
    {
        $this->initialized['bCLIDtFinExerciceComptable'] = true;
        $this->bCLIDtFinExerciceComptable = $bCLIDtFinExerciceComptable;

        return $this;
    }

    public function getClIDtFinExerciceComptable(): ?\DateTime
    {
        return $this->clIDtFinExerciceComptable;
    }

    public function setClIDtFinExerciceComptable(?\DateTime $clIDtFinExerciceComptable): self
    {
        $this->initialized['clIDtFinExerciceComptable'] = true;
        $this->clIDtFinExerciceComptable = $clIDtFinExerciceComptable;

        return $this;
    }

    public function getBCLIEmployeurCivilite(): ?bool
    {
        return $this->bCLIEmployeurCivilite;
    }

    public function setBCLIEmployeurCivilite(?bool $bCLIEmployeurCivilite): self
    {
        $this->initialized['bCLIEmployeurCivilite'] = true;
        $this->bCLIEmployeurCivilite = $bCLIEmployeurCivilite;

        return $this;
    }

    public function getClIEmployeurCivilite(): ?int
    {
        return $this->clIEmployeurCivilite;
    }

    public function setClIEmployeurCivilite(?int $clIEmployeurCivilite): self
    {
        $this->initialized['clIEmployeurCivilite'] = true;
        $this->clIEmployeurCivilite = $clIEmployeurCivilite;

        return $this;
    }

    public function getBCLIEmployeurNom(): ?bool
    {
        return $this->bCLIEmployeurNom;
    }

    public function setBCLIEmployeurNom(?bool $bCLIEmployeurNom): self
    {
        $this->initialized['bCLIEmployeurNom'] = true;
        $this->bCLIEmployeurNom = $bCLIEmployeurNom;

        return $this;
    }

    public function getClIEmployeurNom(): ?string
    {
        return $this->clIEmployeurNom;
    }

    public function setClIEmployeurNom(?string $clIEmployeurNom): self
    {
        $this->initialized['clIEmployeurNom'] = true;
        $this->clIEmployeurNom = $clIEmployeurNom;

        return $this;
    }

    public function getBCLIEmployeurPrenom(): ?bool
    {
        return $this->bCLIEmployeurPrenom;
    }

    public function setBCLIEmployeurPrenom(?bool $bCLIEmployeurPrenom): self
    {
        $this->initialized['bCLIEmployeurPrenom'] = true;
        $this->bCLIEmployeurPrenom = $bCLIEmployeurPrenom;

        return $this;
    }

    public function getClIEmployeurPrenom(): ?string
    {
        return $this->clIEmployeurPrenom;
    }

    public function setClIEmployeurPrenom(?string $clIEmployeurPrenom): self
    {
        $this->initialized['clIEmployeurPrenom'] = true;
        $this->clIEmployeurPrenom = $clIEmployeurPrenom;

        return $this;
    }

    public function getBCLIEmployeurQualite(): ?bool
    {
        return $this->bCLIEmployeurQualite;
    }

    public function setBCLIEmployeurQualite(?bool $bCLIEmployeurQualite): self
    {
        $this->initialized['bCLIEmployeurQualite'] = true;
        $this->bCLIEmployeurQualite = $bCLIEmployeurQualite;

        return $this;
    }

    public function getClIEmployeurQualite(): ?int
    {
        return $this->clIEmployeurQualite;
    }

    public function setClIEmployeurQualite(?int $clIEmployeurQualite): self
    {
        $this->initialized['clIEmployeurQualite'] = true;
        $this->clIEmployeurQualite = $clIEmployeurQualite;

        return $this;
    }

    public function getBCLIEmployeurQualiteAutre(): ?bool
    {
        return $this->bCLIEmployeurQualiteAutre;
    }

    public function setBCLIEmployeurQualiteAutre(?bool $bCLIEmployeurQualiteAutre): self
    {
        $this->initialized['bCLIEmployeurQualiteAutre'] = true;
        $this->bCLIEmployeurQualiteAutre = $bCLIEmployeurQualiteAutre;

        return $this;
    }

    public function getClIEmployeurQualiteAutre(): ?string
    {
        return $this->clIEmployeurQualiteAutre;
    }

    public function setClIEmployeurQualiteAutre(?string $clIEmployeurQualiteAutre): self
    {
        $this->initialized['clIEmployeurQualiteAutre'] = true;
        $this->clIEmployeurQualiteAutre = $clIEmployeurQualiteAutre;

        return $this;
    }

    public function getBCLIEtatDossierPaie(): ?bool
    {
        return $this->bCLIEtatDossierPaie;
    }

    public function setBCLIEtatDossierPaie(?bool $bCLIEtatDossierPaie): self
    {
        $this->initialized['bCLIEtatDossierPaie'] = true;
        $this->bCLIEtatDossierPaie = $bCLIEtatDossierPaie;

        return $this;
    }

    public function getClIEtatDossierPaie(): ?int
    {
        return $this->clIEtatDossierPaie;
    }

    public function setClIEtatDossierPaie(?int $clIEtatDossierPaie): self
    {
        $this->initialized['clIEtatDossierPaie'] = true;
        $this->clIEtatDossierPaie = $clIEtatDossierPaie;

        return $this;
    }

    public function getBCLIFormaProfTranche(): ?bool
    {
        return $this->bCLIFormaProfTranche;
    }

    public function setBCLIFormaProfTranche(?bool $bCLIFormaProfTranche): self
    {
        $this->initialized['bCLIFormaProfTranche'] = true;
        $this->bCLIFormaProfTranche = $bCLIFormaProfTranche;

        return $this;
    }

    public function getClIFormaProfTranche(): ?int
    {
        return $this->clIFormaProfTranche;
    }

    public function setClIFormaProfTranche(?int $clIFormaProfTranche): self
    {
        $this->initialized['clIFormaProfTranche'] = true;
        $this->clIFormaProfTranche = $clIFormaProfTranche;

        return $this;
    }

    public function getBCLIFormaProfTrancheAnnee(): ?bool
    {
        return $this->bCLIFormaProfTrancheAnnee;
    }

    public function setBCLIFormaProfTrancheAnnee(?bool $bCLIFormaProfTrancheAnnee): self
    {
        $this->initialized['bCLIFormaProfTrancheAnnee'] = true;
        $this->bCLIFormaProfTrancheAnnee = $bCLIFormaProfTrancheAnnee;

        return $this;
    }

    public function getClIFormaProfTrancheAnnee(): ?\DateTime
    {
        return $this->clIFormaProfTrancheAnnee;
    }

    public function setClIFormaProfTrancheAnnee(?\DateTime $clIFormaProfTrancheAnnee): self
    {
        $this->initialized['clIFormaProfTrancheAnnee'] = true;
        $this->clIFormaProfTrancheAnnee = $clIFormaProfTrancheAnnee;

        return $this;
    }

    public function getBCLIFormaProfTrancheAnnee2(): ?bool
    {
        return $this->bCLIFormaProfTrancheAnnee2;
    }

    public function setBCLIFormaProfTrancheAnnee2(?bool $bCLIFormaProfTrancheAnnee2): self
    {
        $this->initialized['bCLIFormaProfTrancheAnnee2'] = true;
        $this->bCLIFormaProfTrancheAnnee2 = $bCLIFormaProfTrancheAnnee2;

        return $this;
    }

    public function getClIFormaProfTrancheAnnee2(): ?\DateTime
    {
        return $this->clIFormaProfTrancheAnnee2;
    }

    public function setClIFormaProfTrancheAnnee2(?\DateTime $clIFormaProfTrancheAnnee2): self
    {
        $this->initialized['clIFormaProfTrancheAnnee2'] = true;
        $this->clIFormaProfTrancheAnnee2 = $clIFormaProfTrancheAnnee2;

        return $this;
    }

    public function getBCLIFormaProfTrancheAnnee3(): ?bool
    {
        return $this->bCLIFormaProfTrancheAnnee3;
    }

    public function setBCLIFormaProfTrancheAnnee3(?bool $bCLIFormaProfTrancheAnnee3): self
    {
        $this->initialized['bCLIFormaProfTrancheAnnee3'] = true;
        $this->bCLIFormaProfTrancheAnnee3 = $bCLIFormaProfTrancheAnnee3;

        return $this;
    }

    public function getClIFormaProfTrancheAnnee3(): ?\DateTime
    {
        return $this->clIFormaProfTrancheAnnee3;
    }

    public function setClIFormaProfTrancheAnnee3(?\DateTime $clIFormaProfTrancheAnnee3): self
    {
        $this->initialized['clIFormaProfTrancheAnnee3'] = true;
        $this->clIFormaProfTrancheAnnee3 = $clIFormaProfTrancheAnnee3;

        return $this;
    }

    public function getBCLIFormaProfTrancheAnnee4(): ?bool
    {
        return $this->bCLIFormaProfTrancheAnnee4;
    }

    public function setBCLIFormaProfTrancheAnnee4(?bool $bCLIFormaProfTrancheAnnee4): self
    {
        $this->initialized['bCLIFormaProfTrancheAnnee4'] = true;
        $this->bCLIFormaProfTrancheAnnee4 = $bCLIFormaProfTrancheAnnee4;

        return $this;
    }

    public function getClIFormaProfTrancheAnnee4(): ?\DateTime
    {
        return $this->clIFormaProfTrancheAnnee4;
    }

    public function setClIFormaProfTrancheAnnee4(?\DateTime $clIFormaProfTrancheAnnee4): self
    {
        $this->initialized['clIFormaProfTrancheAnnee4'] = true;
        $this->clIFormaProfTrancheAnnee4 = $clIFormaProfTrancheAnnee4;

        return $this;
    }

    public function getBCLIGestionCPExclEnJours(): ?bool
    {
        return $this->bCLIGestionCPExclEnJours;
    }

    public function setBCLIGestionCPExclEnJours(?bool $bCLIGestionCPExclEnJours): self
    {
        $this->initialized['bCLIGestionCPExclEnJours'] = true;
        $this->bCLIGestionCPExclEnJours = $bCLIGestionCPExclEnJours;

        return $this;
    }

    public function getClIGestionCPExclEnJours(): ?bool
    {
        return $this->clIGestionCPExclEnJours;
    }

    public function setClIGestionCPExclEnJours(?bool $clIGestionCPExclEnJours): self
    {
        $this->initialized['clIGestionCPExclEnJours'] = true;
        $this->clIGestionCPExclEnJours = $clIGestionCPExclEnJours;

        return $this;
    }

    public function getBCLIJourVersementSalaires(): ?bool
    {
        return $this->bCLIJourVersementSalaires;
    }

    public function setBCLIJourVersementSalaires(?bool $bCLIJourVersementSalaires): self
    {
        $this->initialized['bCLIJourVersementSalaires'] = true;
        $this->bCLIJourVersementSalaires = $bCLIJourVersementSalaires;

        return $this;
    }

    public function getClIJourVersementSalaires(): ?int
    {
        return $this->clIJourVersementSalaires;
    }

    public function setClIJourVersementSalaires(?int $clIJourVersementSalaires): self
    {
        $this->initialized['clIJourVersementSalaires'] = true;
        $this->clIJourVersementSalaires = $clIJourVersementSalaires;

        return $this;
    }

    public function getBCLIListesTriSalaries(): ?bool
    {
        return $this->bCLIListesTriSalaries;
    }

    public function setBCLIListesTriSalaries(?bool $bCLIListesTriSalaries): self
    {
        $this->initialized['bCLIListesTriSalaries'] = true;
        $this->bCLIListesTriSalaries = $bCLIListesTriSalaries;

        return $this;
    }

    public function getClIListesTriSalaries(): ?int
    {
        return $this->clIListesTriSalaries;
    }

    public function setClIListesTriSalaries(?int $clIListesTriSalaries): self
    {
        $this->initialized['clIListesTriSalaries'] = true;
        $this->clIListesTriSalaries = $clIListesTriSalaries;

        return $this;
    }

    public function getBCLIMatriculeAuto(): ?bool
    {
        return $this->bCLIMatriculeAuto;
    }

    public function setBCLIMatriculeAuto(?bool $bCLIMatriculeAuto): self
    {
        $this->initialized['bCLIMatriculeAuto'] = true;
        $this->bCLIMatriculeAuto = $bCLIMatriculeAuto;

        return $this;
    }

    public function getClIMatriculeAuto(): ?bool
    {
        return $this->clIMatriculeAuto;
    }

    public function setClIMatriculeAuto(?bool $clIMatriculeAuto): self
    {
        $this->initialized['clIMatriculeAuto'] = true;
        $this->clIMatriculeAuto = $clIMatriculeAuto;

        return $this;
    }

    public function getBCLIMatriculeLongueur(): ?bool
    {
        return $this->bCLIMatriculeLongueur;
    }

    public function setBCLIMatriculeLongueur(?bool $bCLIMatriculeLongueur): self
    {
        $this->initialized['bCLIMatriculeLongueur'] = true;
        $this->bCLIMatriculeLongueur = $bCLIMatriculeLongueur;

        return $this;
    }

    public function getClIMatriculeLongueur(): ?int
    {
        return $this->clIMatriculeLongueur;
    }

    public function setClIMatriculeLongueur(?int $clIMatriculeLongueur): self
    {
        $this->initialized['clIMatriculeLongueur'] = true;
        $this->clIMatriculeLongueur = $clIMatriculeLongueur;

        return $this;
    }

    public function getBCLIMethodeArbitrage(): ?bool
    {
        return $this->bCLIMethodeArbitrage;
    }

    public function setBCLIMethodeArbitrage(?bool $bCLIMethodeArbitrage): self
    {
        $this->initialized['bCLIMethodeArbitrage'] = true;
        $this->bCLIMethodeArbitrage = $bCLIMethodeArbitrage;

        return $this;
    }

    public function getClIMethodeArbitrage(): ?int
    {
        return $this->clIMethodeArbitrage;
    }

    public function setClIMethodeArbitrage(?int $clIMethodeArbitrage): self
    {
        $this->initialized['clIMethodeArbitrage'] = true;
        $this->clIMethodeArbitrage = $clIMethodeArbitrage;

        return $this;
    }

    public function getBCLIMethodeCalculMaintien(): ?bool
    {
        return $this->bCLIMethodeCalculMaintien;
    }

    public function setBCLIMethodeCalculMaintien(?bool $bCLIMethodeCalculMaintien): self
    {
        $this->initialized['bCLIMethodeCalculMaintien'] = true;
        $this->bCLIMethodeCalculMaintien = $bCLIMethodeCalculMaintien;

        return $this;
    }

    public function getClIMethodeCalculMaintien(): ?int
    {
        return $this->clIMethodeCalculMaintien;
    }

    public function setClIMethodeCalculMaintien(?int $clIMethodeCalculMaintien): self
    {
        $this->initialized['clIMethodeCalculMaintien'] = true;
        $this->clIMethodeCalculMaintien = $clIMethodeCalculMaintien;

        return $this;
    }

    public function getBCLIMethodeCalculMaintienNbM(): ?bool
    {
        return $this->bCLIMethodeCalculMaintienNbM;
    }

    public function setBCLIMethodeCalculMaintienNbM(?bool $bCLIMethodeCalculMaintienNbM): self
    {
        $this->initialized['bCLIMethodeCalculMaintienNbM'] = true;
        $this->bCLIMethodeCalculMaintienNbM = $bCLIMethodeCalculMaintienNbM;

        return $this;
    }

    public function getClIMethodeCalculMaintienNbM(): ?int
    {
        return $this->clIMethodeCalculMaintienNbM;
    }

    public function setClIMethodeCalculMaintienNbM(?int $clIMethodeCalculMaintienNbM): self
    {
        $this->initialized['clIMethodeCalculMaintienNbM'] = true;
        $this->clIMethodeCalculMaintienNbM = $clIMethodeCalculMaintienNbM;

        return $this;
    }

    public function getBCLIMethodeRetenueCP(): ?bool
    {
        return $this->bCLIMethodeRetenueCP;
    }

    public function setBCLIMethodeRetenueCP(?bool $bCLIMethodeRetenueCP): self
    {
        $this->initialized['bCLIMethodeRetenueCP'] = true;
        $this->bCLIMethodeRetenueCP = $bCLIMethodeRetenueCP;

        return $this;
    }

    public function getClIMethodeRetenueCP(): ?int
    {
        return $this->clIMethodeRetenueCP;
    }

    public function setClIMethodeRetenueCP(?int $clIMethodeRetenueCP): self
    {
        $this->initialized['clIMethodeRetenueCP'] = true;
        $this->clIMethodeRetenueCP = $clIMethodeRetenueCP;

        return $this;
    }

    public function getBCLIMethodesSuiviAbsencesDansEta(): ?bool
    {
        return $this->bCLIMethodesSuiviAbsencesDansEta;
    }

    public function setBCLIMethodesSuiviAbsencesDansEta(?bool $bCLIMethodesSuiviAbsencesDansEta): self
    {
        $this->initialized['bCLIMethodesSuiviAbsencesDansEta'] = true;
        $this->bCLIMethodesSuiviAbsencesDansEta = $bCLIMethodesSuiviAbsencesDansEta;

        return $this;
    }

    public function getClIMethodesSuiviAbsencesDansEta(): ?bool
    {
        return $this->clIMethodesSuiviAbsencesDansEta;
    }

    public function setClIMethodesSuiviAbsencesDansEta(?bool $clIMethodesSuiviAbsencesDansEta): self
    {
        $this->initialized['clIMethodesSuiviAbsencesDansEta'] = true;
        $this->clIMethodesSuiviAbsencesDansEta = $clIMethodesSuiviAbsencesDansEta;

        return $this;
    }

    public function getBCLIMethodeSuiviAbsences(): ?bool
    {
        return $this->bCLIMethodeSuiviAbsences;
    }

    public function setBCLIMethodeSuiviAbsences(?bool $bCLIMethodeSuiviAbsences): self
    {
        $this->initialized['bCLIMethodeSuiviAbsences'] = true;
        $this->bCLIMethodeSuiviAbsences = $bCLIMethodeSuiviAbsences;

        return $this;
    }

    public function getClIMethodeSuiviAbsences(): ?int
    {
        return $this->clIMethodeSuiviAbsences;
    }

    public function setClIMethodeSuiviAbsences(?int $clIMethodeSuiviAbsences): self
    {
        $this->initialized['clIMethodeSuiviAbsences'] = true;
        $this->clIMethodeSuiviAbsences = $clIMethodeSuiviAbsences;

        return $this;
    }

    public function getBCLIMethodeSuiviAbsencesDeductionHM(): ?bool
    {
        return $this->bCLIMethodeSuiviAbsencesDeductionHM;
    }

    public function setBCLIMethodeSuiviAbsencesDeductionHM(?bool $bCLIMethodeSuiviAbsencesDeductionHM): self
    {
        $this->initialized['bCLIMethodeSuiviAbsencesDeductionHM'] = true;
        $this->bCLIMethodeSuiviAbsencesDeductionHM = $bCLIMethodeSuiviAbsencesDeductionHM;

        return $this;
    }

    public function getClIMethodeSuiviAbsencesDeductionHM(): ?int
    {
        return $this->clIMethodeSuiviAbsencesDeductionHM;
    }

    public function setClIMethodeSuiviAbsencesDeductionHM(?int $clIMethodeSuiviAbsencesDeductionHM): self
    {
        $this->initialized['clIMethodeSuiviAbsencesDeductionHM'] = true;
        $this->clIMethodeSuiviAbsencesDeductionHM = $clIMethodeSuiviAbsencesDeductionHM;

        return $this;
    }

    public function getBCLIMethodeSuiviAbsencesJC(): ?bool
    {
        return $this->bCLIMethodeSuiviAbsencesJC;
    }

    public function setBCLIMethodeSuiviAbsencesJC(?bool $bCLIMethodeSuiviAbsencesJC): self
    {
        $this->initialized['bCLIMethodeSuiviAbsencesJC'] = true;
        $this->bCLIMethodeSuiviAbsencesJC = $bCLIMethodeSuiviAbsencesJC;

        return $this;
    }

    public function getClIMethodeSuiviAbsencesJC(): ?int
    {
        return $this->clIMethodeSuiviAbsencesJC;
    }

    public function setClIMethodeSuiviAbsencesJC(?int $clIMethodeSuiviAbsencesJC): self
    {
        $this->initialized['clIMethodeSuiviAbsencesJC'] = true;
        $this->clIMethodeSuiviAbsencesJC = $clIMethodeSuiviAbsencesJC;

        return $this;
    }

    public function getBCLIMethodeSuiviCP(): ?bool
    {
        return $this->bCLIMethodeSuiviCP;
    }

    public function setBCLIMethodeSuiviCP(?bool $bCLIMethodeSuiviCP): self
    {
        $this->initialized['bCLIMethodeSuiviCP'] = true;
        $this->bCLIMethodeSuiviCP = $bCLIMethodeSuiviCP;

        return $this;
    }

    public function getClIMethodeSuiviCP(): ?int
    {
        return $this->clIMethodeSuiviCP;
    }

    public function setClIMethodeSuiviCP(?int $clIMethodeSuiviCP): self
    {
        $this->initialized['clIMethodeSuiviCP'] = true;
        $this->clIMethodeSuiviCP = $clIMethodeSuiviCP;

        return $this;
    }

    public function getBCLIMethodeSuiviCPAcqMois(): ?bool
    {
        return $this->bCLIMethodeSuiviCPAcqMois;
    }

    public function setBCLIMethodeSuiviCPAcqMois(?bool $bCLIMethodeSuiviCPAcqMois): self
    {
        $this->initialized['bCLIMethodeSuiviCPAcqMois'] = true;
        $this->bCLIMethodeSuiviCPAcqMois = $bCLIMethodeSuiviCPAcqMois;

        return $this;
    }

    public function getClIMethodeSuiviCPAcqMois(): ?float
    {
        return $this->clIMethodeSuiviCPAcqMois;
    }

    public function setClIMethodeSuiviCPAcqMois(?float $clIMethodeSuiviCPAcqMois): self
    {
        $this->initialized['clIMethodeSuiviCPAcqMois'] = true;
        $this->clIMethodeSuiviCPAcqMois = $clIMethodeSuiviCPAcqMois;

        return $this;
    }

    public function getBCLIModuleCTCDActif(): ?bool
    {
        return $this->bCLIModuleCTCDActif;
    }

    public function setBCLIModuleCTCDActif(?bool $bCLIModuleCTCDActif): self
    {
        $this->initialized['bCLIModuleCTCDActif'] = true;
        $this->bCLIModuleCTCDActif = $bCLIModuleCTCDActif;

        return $this;
    }

    public function getClIModuleCTCDActif(): ?bool
    {
        return $this->clIModuleCTCDActif;
    }

    public function setClIModuleCTCDActif(?bool $clIModuleCTCDActif): self
    {
        $this->initialized['clIModuleCTCDActif'] = true;
        $this->clIModuleCTCDActif = $clIModuleCTCDActif;

        return $this;
    }

    public function getBCLIMontagePaiePeriodeDebut(): ?bool
    {
        return $this->bCLIMontagePaiePeriodeDebut;
    }

    public function setBCLIMontagePaiePeriodeDebut(?bool $bCLIMontagePaiePeriodeDebut): self
    {
        $this->initialized['bCLIMontagePaiePeriodeDebut'] = true;
        $this->bCLIMontagePaiePeriodeDebut = $bCLIMontagePaiePeriodeDebut;

        return $this;
    }

    public function getClIMontagePaiePeriodeDebut(): ?\DateTime
    {
        return $this->clIMontagePaiePeriodeDebut;
    }

    public function setClIMontagePaiePeriodeDebut(?\DateTime $clIMontagePaiePeriodeDebut): self
    {
        $this->initialized['clIMontagePaiePeriodeDebut'] = true;
        $this->clIMontagePaiePeriodeDebut = $clIMontagePaiePeriodeDebut;

        return $this;
    }

    public function getBCLIPaieDecalee(): ?bool
    {
        return $this->bCLIPaieDecalee;
    }

    public function setBCLIPaieDecalee(?bool $bCLIPaieDecalee): self
    {
        $this->initialized['bCLIPaieDecalee'] = true;
        $this->bCLIPaieDecalee = $bCLIPaieDecalee;

        return $this;
    }

    public function getClIPaieDecalee(): ?bool
    {
        return $this->clIPaieDecalee;
    }

    public function setClIPaieDecalee(?bool $clIPaieDecalee): self
    {
        $this->initialized['clIPaieDecalee'] = true;
        $this->clIPaieDecalee = $clIPaieDecalee;

        return $this;
    }

    public function getBCLIPersonneAContacterMel(): ?bool
    {
        return $this->bCLIPersonneAContacterMel;
    }

    public function setBCLIPersonneAContacterMel(?bool $bCLIPersonneAContacterMel): self
    {
        $this->initialized['bCLIPersonneAContacterMel'] = true;
        $this->bCLIPersonneAContacterMel = $bCLIPersonneAContacterMel;

        return $this;
    }

    public function getClIPersonneAContacterMel(): ?string
    {
        return $this->clIPersonneAContacterMel;
    }

    public function setClIPersonneAContacterMel(?string $clIPersonneAContacterMel): self
    {
        $this->initialized['clIPersonneAContacterMel'] = true;
        $this->clIPersonneAContacterMel = $clIPersonneAContacterMel;

        return $this;
    }

    public function getBCLIPersonneAContacterNom(): ?bool
    {
        return $this->bCLIPersonneAContacterNom;
    }

    public function setBCLIPersonneAContacterNom(?bool $bCLIPersonneAContacterNom): self
    {
        $this->initialized['bCLIPersonneAContacterNom'] = true;
        $this->bCLIPersonneAContacterNom = $bCLIPersonneAContacterNom;

        return $this;
    }

    public function getClIPersonneAContacterNom(): ?string
    {
        return $this->clIPersonneAContacterNom;
    }

    public function setClIPersonneAContacterNom(?string $clIPersonneAContacterNom): self
    {
        $this->initialized['clIPersonneAContacterNom'] = true;
        $this->clIPersonneAContacterNom = $clIPersonneAContacterNom;

        return $this;
    }

    public function getBCLIPersonneAContacterPrenom(): ?bool
    {
        return $this->bCLIPersonneAContacterPrenom;
    }

    public function setBCLIPersonneAContacterPrenom(?bool $bCLIPersonneAContacterPrenom): self
    {
        $this->initialized['bCLIPersonneAContacterPrenom'] = true;
        $this->bCLIPersonneAContacterPrenom = $bCLIPersonneAContacterPrenom;

        return $this;
    }

    public function getClIPersonneAContacterPrenom(): ?string
    {
        return $this->clIPersonneAContacterPrenom;
    }

    public function setClIPersonneAContacterPrenom(?string $clIPersonneAContacterPrenom): self
    {
        $this->initialized['clIPersonneAContacterPrenom'] = true;
        $this->clIPersonneAContacterPrenom = $clIPersonneAContacterPrenom;

        return $this;
    }

    public function getBCLIPersonneAContacterTel(): ?bool
    {
        return $this->bCLIPersonneAContacterTel;
    }

    public function setBCLIPersonneAContacterTel(?bool $bCLIPersonneAContacterTel): self
    {
        $this->initialized['bCLIPersonneAContacterTel'] = true;
        $this->bCLIPersonneAContacterTel = $bCLIPersonneAContacterTel;

        return $this;
    }

    public function getClIPersonneAContacterTel(): ?string
    {
        return $this->clIPersonneAContacterTel;
    }

    public function setClIPersonneAContacterTel(?string $clIPersonneAContacterTel): self
    {
        $this->initialized['clIPersonneAContacterTel'] = true;
        $this->clIPersonneAContacterTel = $clIPersonneAContacterTel;

        return $this;
    }

    public function getBCLIReductionFillon19(): ?bool
    {
        return $this->bCLIReductionFillon19;
    }

    public function setBCLIReductionFillon19(?bool $bCLIReductionFillon19): self
    {
        $this->initialized['bCLIReductionFillon19'] = true;
        $this->bCLIReductionFillon19 = $bCLIReductionFillon19;

        return $this;
    }

    public function getClIReductionFillon19(): ?bool
    {
        return $this->clIReductionFillon19;
    }

    public function setClIReductionFillon19(?bool $clIReductionFillon19): self
    {
        $this->initialized['clIReductionFillon19'] = true;
        $this->clIReductionFillon19 = $clIReductionFillon19;

        return $this;
    }

    public function getBCLIReductionFillon19Debut(): ?bool
    {
        return $this->bCLIReductionFillon19Debut;
    }

    public function setBCLIReductionFillon19Debut(?bool $bCLIReductionFillon19Debut): self
    {
        $this->initialized['bCLIReductionFillon19Debut'] = true;
        $this->bCLIReductionFillon19Debut = $bCLIReductionFillon19Debut;

        return $this;
    }

    public function getClIReductionFillon19Debut(): ?\DateTime
    {
        return $this->clIReductionFillon19Debut;
    }

    public function setClIReductionFillon19Debut(?\DateTime $clIReductionFillon19Debut): self
    {
        $this->initialized['clIReductionFillon19Debut'] = true;
        $this->clIReductionFillon19Debut = $clIReductionFillon19Debut;

        return $this;
    }

    public function getBCLISepaModeComptabilisation(): ?bool
    {
        return $this->bCLISepaModeComptabilisation;
    }

    public function setBCLISepaModeComptabilisation(?bool $bCLISepaModeComptabilisation): self
    {
        $this->initialized['bCLISepaModeComptabilisation'] = true;
        $this->bCLISepaModeComptabilisation = $bCLISepaModeComptabilisation;

        return $this;
    }

    public function getClISepaModeComptabilisation(): ?int
    {
        return $this->clISepaModeComptabilisation;
    }

    public function setClISepaModeComptabilisation(?int $clISepaModeComptabilisation): self
    {
        $this->initialized['clISepaModeComptabilisation'] = true;
        $this->clISepaModeComptabilisation = $clISepaModeComptabilisation;

        return $this;
    }

    public function getBCLISortieAppliJourVersementSalaires(): ?bool
    {
        return $this->bCLISortieAppliJourVersementSalaires;
    }

    public function setBCLISortieAppliJourVersementSalaires(?bool $bCLISortieAppliJourVersementSalaires): self
    {
        $this->initialized['bCLISortieAppliJourVersementSalaires'] = true;
        $this->bCLISortieAppliJourVersementSalaires = $bCLISortieAppliJourVersementSalaires;

        return $this;
    }

    public function getClISortieAppliJourVersementSalaires(): ?bool
    {
        return $this->clISortieAppliJourVersementSalaires;
    }

    public function setClISortieAppliJourVersementSalaires(?bool $clISortieAppliJourVersementSalaires): self
    {
        $this->initialized['clISortieAppliJourVersementSalaires'] = true;
        $this->clISortieAppliJourVersementSalaires = $clISortieAppliJourVersementSalaires;

        return $this;
    }

    public function getBCLISortieAppliModeReglementNormal(): ?bool
    {
        return $this->bCLISortieAppliModeReglementNormal;
    }

    public function setBCLISortieAppliModeReglementNormal(?bool $bCLISortieAppliModeReglementNormal): self
    {
        $this->initialized['bCLISortieAppliModeReglementNormal'] = true;
        $this->bCLISortieAppliModeReglementNormal = $bCLISortieAppliModeReglementNormal;

        return $this;
    }

    public function getClISortieAppliModeReglementNormal(): ?bool
    {
        return $this->clISortieAppliModeReglementNormal;
    }

    public function setClISortieAppliModeReglementNormal(?bool $clISortieAppliModeReglementNormal): self
    {
        $this->initialized['clISortieAppliModeReglementNormal'] = true;
        $this->clISortieAppliModeReglementNormal = $clISortieAppliModeReglementNormal;

        return $this;
    }

    public function getBCLISousMethodeSuiviAbsences(): ?bool
    {
        return $this->bCLISousMethodeSuiviAbsences;
    }

    public function setBCLISousMethodeSuiviAbsences(?bool $bCLISousMethodeSuiviAbsences): self
    {
        $this->initialized['bCLISousMethodeSuiviAbsences'] = true;
        $this->bCLISousMethodeSuiviAbsences = $bCLISousMethodeSuiviAbsences;

        return $this;
    }

    public function getClISousMethodeSuiviAbsences(): ?int
    {
        return $this->clISousMethodeSuiviAbsences;
    }

    public function setClISousMethodeSuiviAbsences(?int $clISousMethodeSuiviAbsences): self
    {
        $this->initialized['clISousMethodeSuiviAbsences'] = true;
        $this->clISousMethodeSuiviAbsences = $clISousMethodeSuiviAbsences;

        return $this;
    }

    public function getBCLISousMethodeSuiviAbsencesFJ(): ?bool
    {
        return $this->bCLISousMethodeSuiviAbsencesFJ;
    }

    public function setBCLISousMethodeSuiviAbsencesFJ(?bool $bCLISousMethodeSuiviAbsencesFJ): self
    {
        $this->initialized['bCLISousMethodeSuiviAbsencesFJ'] = true;
        $this->bCLISousMethodeSuiviAbsencesFJ = $bCLISousMethodeSuiviAbsencesFJ;

        return $this;
    }

    public function getClISousMethodeSuiviAbsencesFJ(): ?int
    {
        return $this->clISousMethodeSuiviAbsencesFJ;
    }

    public function setClISousMethodeSuiviAbsencesFJ(?int $clISousMethodeSuiviAbsencesFJ): self
    {
        $this->initialized['clISousMethodeSuiviAbsencesFJ'] = true;
        $this->clISousMethodeSuiviAbsencesFJ = $clISousMethodeSuiviAbsencesFJ;

        return $this;
    }

    public function getBCLISubrogation(): ?bool
    {
        return $this->bCLISubrogation;
    }

    public function setBCLISubrogation(?bool $bCLISubrogation): self
    {
        $this->initialized['bCLISubrogation'] = true;
        $this->bCLISubrogation = $bCLISubrogation;

        return $this;
    }

    public function getClISubrogation(): ?bool
    {
        return $this->clISubrogation;
    }

    public function setClISubrogation(?bool $clISubrogation): self
    {
        $this->initialized['clISubrogation'] = true;
        $this->clISubrogation = $clISubrogation;

        return $this;
    }

    public function getBCLISubrogationVersEtaPrincipal(): ?bool
    {
        return $this->bCLISubrogationVersEtaPrincipal;
    }

    public function setBCLISubrogationVersEtaPrincipal(?bool $bCLISubrogationVersEtaPrincipal): self
    {
        $this->initialized['bCLISubrogationVersEtaPrincipal'] = true;
        $this->bCLISubrogationVersEtaPrincipal = $bCLISubrogationVersEtaPrincipal;

        return $this;
    }

    public function getClISubrogationVersEtaPrincipal(): ?bool
    {
        return $this->clISubrogationVersEtaPrincipal;
    }

    public function setClISubrogationVersEtaPrincipal(?bool $clISubrogationVersEtaPrincipal): self
    {
        $this->initialized['clISubrogationVersEtaPrincipal'] = true;
        $this->clISubrogationVersEtaPrincipal = $clISubrogationVersEtaPrincipal;

        return $this;
    }

    public function getBCLITassageAbsencesJours(): ?bool
    {
        return $this->bCLITassageAbsencesJours;
    }

    public function setBCLITassageAbsencesJours(?bool $bCLITassageAbsencesJours): self
    {
        $this->initialized['bCLITassageAbsencesJours'] = true;
        $this->bCLITassageAbsencesJours = $bCLITassageAbsencesJours;

        return $this;
    }

    public function getClITassageAbsencesJours(): ?int
    {
        return $this->clITassageAbsencesJours;
    }

    public function setClITassageAbsencesJours(?int $clITassageAbsencesJours): self
    {
        $this->initialized['clITassageAbsencesJours'] = true;
        $this->clITassageAbsencesJours = $clITassageAbsencesJours;

        return $this;
    }

    public function getBCLITaxeApprentissagePayeeCCP(): ?bool
    {
        return $this->bCLITaxeApprentissagePayeeCCP;
    }

    public function setBCLITaxeApprentissagePayeeCCP(?bool $bCLITaxeApprentissagePayeeCCP): self
    {
        $this->initialized['bCLITaxeApprentissagePayeeCCP'] = true;
        $this->bCLITaxeApprentissagePayeeCCP = $bCLITaxeApprentissagePayeeCCP;

        return $this;
    }

    public function getClITaxeApprentissagePayeeCCP(): ?bool
    {
        return $this->clITaxeApprentissagePayeeCCP;
    }

    public function setClITaxeApprentissagePayeeCCP(?bool $clITaxeApprentissagePayeeCCP): self
    {
        $this->initialized['clITaxeApprentissagePayeeCCP'] = true;
        $this->clITaxeApprentissagePayeeCCP = $clITaxeApprentissagePayeeCCP;

        return $this;
    }

    public function getBCLITaxeCotPPrev(): ?bool
    {
        return $this->bCLITaxeCotPPrev;
    }

    public function setBCLITaxeCotPPrev(?bool $bCLITaxeCotPPrev): self
    {
        $this->initialized['bCLITaxeCotPPrev'] = true;
        $this->bCLITaxeCotPPrev = $bCLITaxeCotPPrev;

        return $this;
    }

    public function getClITaxeCotPPrev(): ?bool
    {
        return $this->clITaxeCotPPrev;
    }

    public function setClITaxeCotPPrev(?bool $clITaxeCotPPrev): self
    {
        $this->initialized['clITaxeCotPPrev'] = true;
        $this->clITaxeCotPPrev = $clITaxeCotPPrev;

        return $this;
    }
}
