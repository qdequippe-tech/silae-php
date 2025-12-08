<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureHoraireSalarie
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
     * @var string|null
     */
    protected $nomGrilleHoraire;

    /**
     * @var list<float>|null
     */
    protected $heuresTravaillees;

    /**
     * @var list<float>|null
     */
    protected $heuresDeNuit;

    /**
     * @var list<float>|null
     */
    protected $heuresPayeesNormales;

    /**
     * @var list<float>|null
     */
    protected $heuresPayeesMajorees;

    /**
     * @var string|null
     */
    protected $codeHeuresLibres1;

    /**
     * @var list<float>|null
     */
    protected $heuresLibres1;

    /**
     * @var string|null
     */
    protected $codeHeuresLibres2;

    /**
     * @var list<float>|null
     */
    protected $heuresLibres2;

    /**
     * @var string|null
     */
    protected $codeHeuresLibres3;

    /**
     * @var list<float>|null
     */
    protected $heuresLibres3;

    /**
     * @var float|null
     */
    protected $totalMensuelHeuresNormales;

    /**
     * @var float|null
     */
    protected $totalMensuelHeuresMajorees;

    /**
     * @var float|null
     */
    protected $pourcentageHeuresMajorees;

    /**
     * @var float|null
     */
    protected $totalMensuelHeuresLibres1;

    /**
     * @var float|null
     */
    protected $totalMensuelHeuresLibres2;

    /**
     * @var float|null
     */
    protected $totalMensuelHeuresLibres3;

    /**
     * @var float|null
     */
    protected $tauxHeuresLibres1;

    /**
     * @var float|null
     */
    protected $tauxHeuresLibres2;

    /**
     * @var float|null
     */
    protected $tauxHeuresLibres3;

    /**
     * @var float|null
     */
    protected $totHT;

    /**
     * @var float|null
     */
    protected $totHTN;

    /**
     * @var float|null
     */
    protected $totHN;

    /**
     * @var float|null
     */
    protected $totHM;

    /**
     * @var float|null
     */
    protected $totHL1;

    /**
     * @var float|null
     */
    protected $totHL2;

    /**
     * @var float|null
     */
    protected $totHL3;

    /**
     * @var float|null
     */
    protected $totHLun;

    /**
     * @var float|null
     */
    protected $totHMar;

    /**
     * @var float|null
     */
    protected $totHMer;

    /**
     * @var float|null
     */
    protected $totHJeu;

    /**
     * @var float|null
     */
    protected $totHVen;

    /**
     * @var float|null
     */
    protected $totHSam;

    /**
     * @var float|null
     */
    protected $totHDim;

    /**
     * @var bool|null
     */
    protected $nonSoumisHEta;

    /**
     * @var bool|null
     */
    protected $gestionModulationHeures;

    /**
     * @var bool|null
     */
    protected $cotisRetraiteTpsPlein;

    /**
     * @var bool|null
     */
    protected $saisieManuelleHeuresAbsences;

    public function getNomGrilleHoraire(): ?string
    {
        return $this->nomGrilleHoraire;
    }

    public function setNomGrilleHoraire(?string $nomGrilleHoraire): self
    {
        $this->initialized['nomGrilleHoraire'] = true;
        $this->nomGrilleHoraire = $nomGrilleHoraire;

        return $this;
    }

    /**
     * @return list<float>|null
     */
    public function getHeuresTravaillees(): ?array
    {
        return $this->heuresTravaillees;
    }

    /**
     * @param list<float>|null $heuresTravaillees
     */
    public function setHeuresTravaillees(?array $heuresTravaillees): self
    {
        $this->initialized['heuresTravaillees'] = true;
        $this->heuresTravaillees = $heuresTravaillees;

        return $this;
    }

    /**
     * @return list<float>|null
     */
    public function getHeuresDeNuit(): ?array
    {
        return $this->heuresDeNuit;
    }

    /**
     * @param list<float>|null $heuresDeNuit
     */
    public function setHeuresDeNuit(?array $heuresDeNuit): self
    {
        $this->initialized['heuresDeNuit'] = true;
        $this->heuresDeNuit = $heuresDeNuit;

        return $this;
    }

    /**
     * @return list<float>|null
     */
    public function getHeuresPayeesNormales(): ?array
    {
        return $this->heuresPayeesNormales;
    }

    /**
     * @param list<float>|null $heuresPayeesNormales
     */
    public function setHeuresPayeesNormales(?array $heuresPayeesNormales): self
    {
        $this->initialized['heuresPayeesNormales'] = true;
        $this->heuresPayeesNormales = $heuresPayeesNormales;

        return $this;
    }

    /**
     * @return list<float>|null
     */
    public function getHeuresPayeesMajorees(): ?array
    {
        return $this->heuresPayeesMajorees;
    }

    /**
     * @param list<float>|null $heuresPayeesMajorees
     */
    public function setHeuresPayeesMajorees(?array $heuresPayeesMajorees): self
    {
        $this->initialized['heuresPayeesMajorees'] = true;
        $this->heuresPayeesMajorees = $heuresPayeesMajorees;

        return $this;
    }

    public function getCodeHeuresLibres1(): ?string
    {
        return $this->codeHeuresLibres1;
    }

    public function setCodeHeuresLibres1(?string $codeHeuresLibres1): self
    {
        $this->initialized['codeHeuresLibres1'] = true;
        $this->codeHeuresLibres1 = $codeHeuresLibres1;

        return $this;
    }

    /**
     * @return list<float>|null
     */
    public function getHeuresLibres1(): ?array
    {
        return $this->heuresLibres1;
    }

    /**
     * @param list<float>|null $heuresLibres1
     */
    public function setHeuresLibres1(?array $heuresLibres1): self
    {
        $this->initialized['heuresLibres1'] = true;
        $this->heuresLibres1 = $heuresLibres1;

        return $this;
    }

    public function getCodeHeuresLibres2(): ?string
    {
        return $this->codeHeuresLibres2;
    }

    public function setCodeHeuresLibres2(?string $codeHeuresLibres2): self
    {
        $this->initialized['codeHeuresLibres2'] = true;
        $this->codeHeuresLibres2 = $codeHeuresLibres2;

        return $this;
    }

    /**
     * @return list<float>|null
     */
    public function getHeuresLibres2(): ?array
    {
        return $this->heuresLibres2;
    }

    /**
     * @param list<float>|null $heuresLibres2
     */
    public function setHeuresLibres2(?array $heuresLibres2): self
    {
        $this->initialized['heuresLibres2'] = true;
        $this->heuresLibres2 = $heuresLibres2;

        return $this;
    }

    public function getCodeHeuresLibres3(): ?string
    {
        return $this->codeHeuresLibres3;
    }

    public function setCodeHeuresLibres3(?string $codeHeuresLibres3): self
    {
        $this->initialized['codeHeuresLibres3'] = true;
        $this->codeHeuresLibres3 = $codeHeuresLibres3;

        return $this;
    }

    /**
     * @return list<float>|null
     */
    public function getHeuresLibres3(): ?array
    {
        return $this->heuresLibres3;
    }

    /**
     * @param list<float>|null $heuresLibres3
     */
    public function setHeuresLibres3(?array $heuresLibres3): self
    {
        $this->initialized['heuresLibres3'] = true;
        $this->heuresLibres3 = $heuresLibres3;

        return $this;
    }

    public function getTotalMensuelHeuresNormales(): ?float
    {
        return $this->totalMensuelHeuresNormales;
    }

    public function setTotalMensuelHeuresNormales(?float $totalMensuelHeuresNormales): self
    {
        $this->initialized['totalMensuelHeuresNormales'] = true;
        $this->totalMensuelHeuresNormales = $totalMensuelHeuresNormales;

        return $this;
    }

    public function getTotalMensuelHeuresMajorees(): ?float
    {
        return $this->totalMensuelHeuresMajorees;
    }

    public function setTotalMensuelHeuresMajorees(?float $totalMensuelHeuresMajorees): self
    {
        $this->initialized['totalMensuelHeuresMajorees'] = true;
        $this->totalMensuelHeuresMajorees = $totalMensuelHeuresMajorees;

        return $this;
    }

    public function getPourcentageHeuresMajorees(): ?float
    {
        return $this->pourcentageHeuresMajorees;
    }

    public function setPourcentageHeuresMajorees(?float $pourcentageHeuresMajorees): self
    {
        $this->initialized['pourcentageHeuresMajorees'] = true;
        $this->pourcentageHeuresMajorees = $pourcentageHeuresMajorees;

        return $this;
    }

    public function getTotalMensuelHeuresLibres1(): ?float
    {
        return $this->totalMensuelHeuresLibres1;
    }

    public function setTotalMensuelHeuresLibres1(?float $totalMensuelHeuresLibres1): self
    {
        $this->initialized['totalMensuelHeuresLibres1'] = true;
        $this->totalMensuelHeuresLibres1 = $totalMensuelHeuresLibres1;

        return $this;
    }

    public function getTotalMensuelHeuresLibres2(): ?float
    {
        return $this->totalMensuelHeuresLibres2;
    }

    public function setTotalMensuelHeuresLibres2(?float $totalMensuelHeuresLibres2): self
    {
        $this->initialized['totalMensuelHeuresLibres2'] = true;
        $this->totalMensuelHeuresLibres2 = $totalMensuelHeuresLibres2;

        return $this;
    }

    public function getTotalMensuelHeuresLibres3(): ?float
    {
        return $this->totalMensuelHeuresLibres3;
    }

    public function setTotalMensuelHeuresLibres3(?float $totalMensuelHeuresLibres3): self
    {
        $this->initialized['totalMensuelHeuresLibres3'] = true;
        $this->totalMensuelHeuresLibres3 = $totalMensuelHeuresLibres3;

        return $this;
    }

    public function getTauxHeuresLibres1(): ?float
    {
        return $this->tauxHeuresLibres1;
    }

    public function setTauxHeuresLibres1(?float $tauxHeuresLibres1): self
    {
        $this->initialized['tauxHeuresLibres1'] = true;
        $this->tauxHeuresLibres1 = $tauxHeuresLibres1;

        return $this;
    }

    public function getTauxHeuresLibres2(): ?float
    {
        return $this->tauxHeuresLibres2;
    }

    public function setTauxHeuresLibres2(?float $tauxHeuresLibres2): self
    {
        $this->initialized['tauxHeuresLibres2'] = true;
        $this->tauxHeuresLibres2 = $tauxHeuresLibres2;

        return $this;
    }

    public function getTauxHeuresLibres3(): ?float
    {
        return $this->tauxHeuresLibres3;
    }

    public function setTauxHeuresLibres3(?float $tauxHeuresLibres3): self
    {
        $this->initialized['tauxHeuresLibres3'] = true;
        $this->tauxHeuresLibres3 = $tauxHeuresLibres3;

        return $this;
    }

    public function getTotHT(): ?float
    {
        return $this->totHT;
    }

    public function setTotHT(?float $totHT): self
    {
        $this->initialized['totHT'] = true;
        $this->totHT = $totHT;

        return $this;
    }

    public function getTotHTN(): ?float
    {
        return $this->totHTN;
    }

    public function setTotHTN(?float $totHTN): self
    {
        $this->initialized['totHTN'] = true;
        $this->totHTN = $totHTN;

        return $this;
    }

    public function getTotHN(): ?float
    {
        return $this->totHN;
    }

    public function setTotHN(?float $totHN): self
    {
        $this->initialized['totHN'] = true;
        $this->totHN = $totHN;

        return $this;
    }

    public function getTotHM(): ?float
    {
        return $this->totHM;
    }

    public function setTotHM(?float $totHM): self
    {
        $this->initialized['totHM'] = true;
        $this->totHM = $totHM;

        return $this;
    }

    public function getTotHL1(): ?float
    {
        return $this->totHL1;
    }

    public function setTotHL1(?float $totHL1): self
    {
        $this->initialized['totHL1'] = true;
        $this->totHL1 = $totHL1;

        return $this;
    }

    public function getTotHL2(): ?float
    {
        return $this->totHL2;
    }

    public function setTotHL2(?float $totHL2): self
    {
        $this->initialized['totHL2'] = true;
        $this->totHL2 = $totHL2;

        return $this;
    }

    public function getTotHL3(): ?float
    {
        return $this->totHL3;
    }

    public function setTotHL3(?float $totHL3): self
    {
        $this->initialized['totHL3'] = true;
        $this->totHL3 = $totHL3;

        return $this;
    }

    public function getTotHLun(): ?float
    {
        return $this->totHLun;
    }

    public function setTotHLun(?float $totHLun): self
    {
        $this->initialized['totHLun'] = true;
        $this->totHLun = $totHLun;

        return $this;
    }

    public function getTotHMar(): ?float
    {
        return $this->totHMar;
    }

    public function setTotHMar(?float $totHMar): self
    {
        $this->initialized['totHMar'] = true;
        $this->totHMar = $totHMar;

        return $this;
    }

    public function getTotHMer(): ?float
    {
        return $this->totHMer;
    }

    public function setTotHMer(?float $totHMer): self
    {
        $this->initialized['totHMer'] = true;
        $this->totHMer = $totHMer;

        return $this;
    }

    public function getTotHJeu(): ?float
    {
        return $this->totHJeu;
    }

    public function setTotHJeu(?float $totHJeu): self
    {
        $this->initialized['totHJeu'] = true;
        $this->totHJeu = $totHJeu;

        return $this;
    }

    public function getTotHVen(): ?float
    {
        return $this->totHVen;
    }

    public function setTotHVen(?float $totHVen): self
    {
        $this->initialized['totHVen'] = true;
        $this->totHVen = $totHVen;

        return $this;
    }

    public function getTotHSam(): ?float
    {
        return $this->totHSam;
    }

    public function setTotHSam(?float $totHSam): self
    {
        $this->initialized['totHSam'] = true;
        $this->totHSam = $totHSam;

        return $this;
    }

    public function getTotHDim(): ?float
    {
        return $this->totHDim;
    }

    public function setTotHDim(?float $totHDim): self
    {
        $this->initialized['totHDim'] = true;
        $this->totHDim = $totHDim;

        return $this;
    }

    public function getNonSoumisHEta(): ?bool
    {
        return $this->nonSoumisHEta;
    }

    public function setNonSoumisHEta(?bool $nonSoumisHEta): self
    {
        $this->initialized['nonSoumisHEta'] = true;
        $this->nonSoumisHEta = $nonSoumisHEta;

        return $this;
    }

    public function getGestionModulationHeures(): ?bool
    {
        return $this->gestionModulationHeures;
    }

    public function setGestionModulationHeures(?bool $gestionModulationHeures): self
    {
        $this->initialized['gestionModulationHeures'] = true;
        $this->gestionModulationHeures = $gestionModulationHeures;

        return $this;
    }

    public function getCotisRetraiteTpsPlein(): ?bool
    {
        return $this->cotisRetraiteTpsPlein;
    }

    public function setCotisRetraiteTpsPlein(?bool $cotisRetraiteTpsPlein): self
    {
        $this->initialized['cotisRetraiteTpsPlein'] = true;
        $this->cotisRetraiteTpsPlein = $cotisRetraiteTpsPlein;

        return $this;
    }

    public function getSaisieManuelleHeuresAbsences(): ?bool
    {
        return $this->saisieManuelleHeuresAbsences;
    }

    public function setSaisieManuelleHeuresAbsences(?bool $saisieManuelleHeuresAbsences): self
    {
        $this->initialized['saisieManuelleHeuresAbsences'] = true;
        $this->saisieManuelleHeuresAbsences = $saisieManuelleHeuresAbsences;

        return $this;
    }
}
