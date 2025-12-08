<?php

namespace QdequippeTech\Silae\Api\Model;

class LigneBulletin
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
    protected $codeLibelle;

    /**
     * @var string|null
     */
    protected $libelle;

    /**
     * @var float|null
     */
    protected $baseSalariale;

    /**
     * @var float|null
     */
    protected $tauxOuMontantSalarial;

    /**
     * @var float|null
     */
    protected $resultatSalarial;

    /**
     * @var float|null
     */
    protected $basePatronale;

    /**
     * @var float|null
     */
    protected $tauxOuMontantPatronal;

    /**
     * @var float|null
     */
    protected $resultatPatronal;

    /**
     * @var string|null
     */
    protected $codeDucs;

    /**
     * @var float|null
     */
    protected $csg;

    /**
     * @var float|null
     */
    protected $taxe8pc;

    /**
     * @var float|null
     */
    protected $rs;

    /**
     * @var float|null
     */
    protected $rf;

    /**
     * @var float|null
     */
    protected $fs;

    /**
     * @var string|null
     */
    protected $tauxReference;

    /**
     * @var string|null
     */
    protected $marqueCodeCCN;

    /**
     * @var string|null
     */
    protected $marque1;

    /**
     * @var string|null
     */
    protected $marque2;

    /**
     * @var \DateTime|null
     */
    protected $periodeDebut;

    /**
     * @var \DateTime|null
     */
    protected $periodeFin;

    public function getCodeLibelle(): ?string
    {
        return $this->codeLibelle;
    }

    public function setCodeLibelle(?string $codeLibelle): self
    {
        $this->initialized['codeLibelle'] = true;
        $this->codeLibelle = $codeLibelle;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->initialized['libelle'] = true;
        $this->libelle = $libelle;

        return $this;
    }

    public function getBaseSalariale(): ?float
    {
        return $this->baseSalariale;
    }

    public function setBaseSalariale(?float $baseSalariale): self
    {
        $this->initialized['baseSalariale'] = true;
        $this->baseSalariale = $baseSalariale;

        return $this;
    }

    public function getTauxOuMontantSalarial(): ?float
    {
        return $this->tauxOuMontantSalarial;
    }

    public function setTauxOuMontantSalarial(?float $tauxOuMontantSalarial): self
    {
        $this->initialized['tauxOuMontantSalarial'] = true;
        $this->tauxOuMontantSalarial = $tauxOuMontantSalarial;

        return $this;
    }

    public function getResultatSalarial(): ?float
    {
        return $this->resultatSalarial;
    }

    public function setResultatSalarial(?float $resultatSalarial): self
    {
        $this->initialized['resultatSalarial'] = true;
        $this->resultatSalarial = $resultatSalarial;

        return $this;
    }

    public function getBasePatronale(): ?float
    {
        return $this->basePatronale;
    }

    public function setBasePatronale(?float $basePatronale): self
    {
        $this->initialized['basePatronale'] = true;
        $this->basePatronale = $basePatronale;

        return $this;
    }

    public function getTauxOuMontantPatronal(): ?float
    {
        return $this->tauxOuMontantPatronal;
    }

    public function setTauxOuMontantPatronal(?float $tauxOuMontantPatronal): self
    {
        $this->initialized['tauxOuMontantPatronal'] = true;
        $this->tauxOuMontantPatronal = $tauxOuMontantPatronal;

        return $this;
    }

    public function getResultatPatronal(): ?float
    {
        return $this->resultatPatronal;
    }

    public function setResultatPatronal(?float $resultatPatronal): self
    {
        $this->initialized['resultatPatronal'] = true;
        $this->resultatPatronal = $resultatPatronal;

        return $this;
    }

    public function getCodeDucs(): ?string
    {
        return $this->codeDucs;
    }

    public function setCodeDucs(?string $codeDucs): self
    {
        $this->initialized['codeDucs'] = true;
        $this->codeDucs = $codeDucs;

        return $this;
    }

    public function getCsg(): ?float
    {
        return $this->csg;
    }

    public function setCsg(?float $csg): self
    {
        $this->initialized['csg'] = true;
        $this->csg = $csg;

        return $this;
    }

    public function getTaxe8pc(): ?float
    {
        return $this->taxe8pc;
    }

    public function setTaxe8pc(?float $taxe8pc): self
    {
        $this->initialized['taxe8pc'] = true;
        $this->taxe8pc = $taxe8pc;

        return $this;
    }

    public function getRs(): ?float
    {
        return $this->rs;
    }

    public function setRs(?float $rs): self
    {
        $this->initialized['rs'] = true;
        $this->rs = $rs;

        return $this;
    }

    public function getRf(): ?float
    {
        return $this->rf;
    }

    public function setRf(?float $rf): self
    {
        $this->initialized['rf'] = true;
        $this->rf = $rf;

        return $this;
    }

    public function getFs(): ?float
    {
        return $this->fs;
    }

    public function setFs(?float $fs): self
    {
        $this->initialized['fs'] = true;
        $this->fs = $fs;

        return $this;
    }

    public function getTauxReference(): ?string
    {
        return $this->tauxReference;
    }

    public function setTauxReference(?string $tauxReference): self
    {
        $this->initialized['tauxReference'] = true;
        $this->tauxReference = $tauxReference;

        return $this;
    }

    public function getMarqueCodeCCN(): ?string
    {
        return $this->marqueCodeCCN;
    }

    public function setMarqueCodeCCN(?string $marqueCodeCCN): self
    {
        $this->initialized['marqueCodeCCN'] = true;
        $this->marqueCodeCCN = $marqueCodeCCN;

        return $this;
    }

    public function getMarque1(): ?string
    {
        return $this->marque1;
    }

    public function setMarque1(?string $marque1): self
    {
        $this->initialized['marque1'] = true;
        $this->marque1 = $marque1;

        return $this;
    }

    public function getMarque2(): ?string
    {
        return $this->marque2;
    }

    public function setMarque2(?string $marque2): self
    {
        $this->initialized['marque2'] = true;
        $this->marque2 = $marque2;

        return $this;
    }

    public function getPeriodeDebut(): ?\DateTime
    {
        return $this->periodeDebut;
    }

    public function setPeriodeDebut(?\DateTime $periodeDebut): self
    {
        $this->initialized['periodeDebut'] = true;
        $this->periodeDebut = $periodeDebut;

        return $this;
    }

    public function getPeriodeFin(): ?\DateTime
    {
        return $this->periodeFin;
    }

    public function setPeriodeFin(?\DateTime $periodeFin): self
    {
        $this->initialized['periodeFin'] = true;
        $this->periodeFin = $periodeFin;

        return $this;
    }
}
