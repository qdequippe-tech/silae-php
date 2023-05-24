<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieElementCarriere
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
     * @var \DateTime|null
     */
    protected $dateDebut;
    /**
     * @var \DateTime|null
     */
    protected $dateFin;
    /**
     * @var string|null
     */
    protected $libelleEmploi;
    /**
     * @var bool|null
     */
    protected $estCadre;
    /**
     * @var string|null
     */
    protected $typeContrat;
    /**
     * @var float|null
     */
    protected $heuresContractuelles;
    /**
     * @var float|null
     */
    protected $salaireDeBase;
    /**
     * @var string|null
     */
    protected $coeff1;
    /**
     * @var string|null
     */
    protected $libelleCoeff1;
    /**
     * @var string|null
     */
    protected $coeff2;
    /**
     * @var string|null
     */
    protected $libelleCoeff2;
    /**
     * @var string|null
     */
    protected $coeff3;
    /**
     * @var string|null
     */
    protected $libelleCoeff3;
    /**
     * @var string|null
     */
    protected $coeff4;
    /**
     * @var string|null
     */
    protected $libelleCoeff4;
    /**
     * @var float|null
     */
    protected $tauxHeuresNormales;
    /**
     * @var float|null
     */
    protected $salaireDeBaseETP;
    /**
     * @var \DateTime|null
     */
    protected $dateReelleDebutEmploi;
    /**
     * @var \DateTime|null
     */
    protected $dateReelleFinEmploi;

    public function getDateDebut(): ?\DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTime $dateDebut): self
    {
        $this->initialized['dateDebut'] = true;
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTime $dateFin): self
    {
        $this->initialized['dateFin'] = true;
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getLibelleEmploi(): ?string
    {
        return $this->libelleEmploi;
    }

    public function setLibelleEmploi(?string $libelleEmploi): self
    {
        $this->initialized['libelleEmploi'] = true;
        $this->libelleEmploi = $libelleEmploi;

        return $this;
    }

    public function getEstCadre(): ?bool
    {
        return $this->estCadre;
    }

    public function setEstCadre(?bool $estCadre): self
    {
        $this->initialized['estCadre'] = true;
        $this->estCadre = $estCadre;

        return $this;
    }

    public function getTypeContrat(): ?string
    {
        return $this->typeContrat;
    }

    public function setTypeContrat(?string $typeContrat): self
    {
        $this->initialized['typeContrat'] = true;
        $this->typeContrat = $typeContrat;

        return $this;
    }

    public function getHeuresContractuelles(): ?float
    {
        return $this->heuresContractuelles;
    }

    public function setHeuresContractuelles(?float $heuresContractuelles): self
    {
        $this->initialized['heuresContractuelles'] = true;
        $this->heuresContractuelles = $heuresContractuelles;

        return $this;
    }

    public function getSalaireDeBase(): ?float
    {
        return $this->salaireDeBase;
    }

    public function setSalaireDeBase(?float $salaireDeBase): self
    {
        $this->initialized['salaireDeBase'] = true;
        $this->salaireDeBase = $salaireDeBase;

        return $this;
    }

    public function getCoeff1(): ?string
    {
        return $this->coeff1;
    }

    public function setCoeff1(?string $coeff1): self
    {
        $this->initialized['coeff1'] = true;
        $this->coeff1 = $coeff1;

        return $this;
    }

    public function getLibelleCoeff1(): ?string
    {
        return $this->libelleCoeff1;
    }

    public function setLibelleCoeff1(?string $libelleCoeff1): self
    {
        $this->initialized['libelleCoeff1'] = true;
        $this->libelleCoeff1 = $libelleCoeff1;

        return $this;
    }

    public function getCoeff2(): ?string
    {
        return $this->coeff2;
    }

    public function setCoeff2(?string $coeff2): self
    {
        $this->initialized['coeff2'] = true;
        $this->coeff2 = $coeff2;

        return $this;
    }

    public function getLibelleCoeff2(): ?string
    {
        return $this->libelleCoeff2;
    }

    public function setLibelleCoeff2(?string $libelleCoeff2): self
    {
        $this->initialized['libelleCoeff2'] = true;
        $this->libelleCoeff2 = $libelleCoeff2;

        return $this;
    }

    public function getCoeff3(): ?string
    {
        return $this->coeff3;
    }

    public function setCoeff3(?string $coeff3): self
    {
        $this->initialized['coeff3'] = true;
        $this->coeff3 = $coeff3;

        return $this;
    }

    public function getLibelleCoeff3(): ?string
    {
        return $this->libelleCoeff3;
    }

    public function setLibelleCoeff3(?string $libelleCoeff3): self
    {
        $this->initialized['libelleCoeff3'] = true;
        $this->libelleCoeff3 = $libelleCoeff3;

        return $this;
    }

    public function getCoeff4(): ?string
    {
        return $this->coeff4;
    }

    public function setCoeff4(?string $coeff4): self
    {
        $this->initialized['coeff4'] = true;
        $this->coeff4 = $coeff4;

        return $this;
    }

    public function getLibelleCoeff4(): ?string
    {
        return $this->libelleCoeff4;
    }

    public function setLibelleCoeff4(?string $libelleCoeff4): self
    {
        $this->initialized['libelleCoeff4'] = true;
        $this->libelleCoeff4 = $libelleCoeff4;

        return $this;
    }

    public function getTauxHeuresNormales(): ?float
    {
        return $this->tauxHeuresNormales;
    }

    public function setTauxHeuresNormales(?float $tauxHeuresNormales): self
    {
        $this->initialized['tauxHeuresNormales'] = true;
        $this->tauxHeuresNormales = $tauxHeuresNormales;

        return $this;
    }

    public function getSalaireDeBaseETP(): ?float
    {
        return $this->salaireDeBaseETP;
    }

    public function setSalaireDeBaseETP(?float $salaireDeBaseETP): self
    {
        $this->initialized['salaireDeBaseETP'] = true;
        $this->salaireDeBaseETP = $salaireDeBaseETP;

        return $this;
    }

    public function getDateReelleDebutEmploi(): ?\DateTime
    {
        return $this->dateReelleDebutEmploi;
    }

    public function setDateReelleDebutEmploi(?\DateTime $dateReelleDebutEmploi): self
    {
        $this->initialized['dateReelleDebutEmploi'] = true;
        $this->dateReelleDebutEmploi = $dateReelleDebutEmploi;

        return $this;
    }

    public function getDateReelleFinEmploi(): ?\DateTime
    {
        return $this->dateReelleFinEmploi;
    }

    public function setDateReelleFinEmploi(?\DateTime $dateReelleFinEmploi): self
    {
        $this->initialized['dateReelleFinEmploi'] = true;
        $this->dateReelleFinEmploi = $dateReelleFinEmploi;

        return $this;
    }
}
