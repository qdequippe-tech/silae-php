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
}
