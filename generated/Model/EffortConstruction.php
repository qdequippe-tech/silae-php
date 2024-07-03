<?php

namespace QdequippeTech\Silae\Api\Model;

class EffortConstruction
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
    protected $assujettissement;

    /**
     * @var \DateTime|null
     */
    protected $anneeN;

    /**
     * @var float|null
     */
    protected $pourcentageAnneeN;

    /**
     * @var float|null
     */
    protected $pourcentageAnneeNPlus1;

    /**
     * @var float|null
     */
    protected $pourcentageAnneeNPlus2;

    /**
     * @var float|null
     */
    protected $pourcentageAnneeNPlus3;

    /**
     * @var float|null
     */
    protected $pourcentageAnneeNPlus4;

    /**
     * @var float|null
     */
    protected $pourcentageAnneeNPlus5;

    public function getAssujettissement(): ?bool
    {
        return $this->assujettissement;
    }

    public function setAssujettissement(?bool $assujettissement): self
    {
        $this->initialized['assujettissement'] = true;
        $this->assujettissement = $assujettissement;

        return $this;
    }

    public function getAnneeN(): ?\DateTime
    {
        return $this->anneeN;
    }

    public function setAnneeN(?\DateTime $anneeN): self
    {
        $this->initialized['anneeN'] = true;
        $this->anneeN = $anneeN;

        return $this;
    }

    public function getPourcentageAnneeN(): ?float
    {
        return $this->pourcentageAnneeN;
    }

    public function setPourcentageAnneeN(?float $pourcentageAnneeN): self
    {
        $this->initialized['pourcentageAnneeN'] = true;
        $this->pourcentageAnneeN = $pourcentageAnneeN;

        return $this;
    }

    public function getPourcentageAnneeNPlus1(): ?float
    {
        return $this->pourcentageAnneeNPlus1;
    }

    public function setPourcentageAnneeNPlus1(?float $pourcentageAnneeNPlus1): self
    {
        $this->initialized['pourcentageAnneeNPlus1'] = true;
        $this->pourcentageAnneeNPlus1 = $pourcentageAnneeNPlus1;

        return $this;
    }

    public function getPourcentageAnneeNPlus2(): ?float
    {
        return $this->pourcentageAnneeNPlus2;
    }

    public function setPourcentageAnneeNPlus2(?float $pourcentageAnneeNPlus2): self
    {
        $this->initialized['pourcentageAnneeNPlus2'] = true;
        $this->pourcentageAnneeNPlus2 = $pourcentageAnneeNPlus2;

        return $this;
    }

    public function getPourcentageAnneeNPlus3(): ?float
    {
        return $this->pourcentageAnneeNPlus3;
    }

    public function setPourcentageAnneeNPlus3(?float $pourcentageAnneeNPlus3): self
    {
        $this->initialized['pourcentageAnneeNPlus3'] = true;
        $this->pourcentageAnneeNPlus3 = $pourcentageAnneeNPlus3;

        return $this;
    }

    public function getPourcentageAnneeNPlus4(): ?float
    {
        return $this->pourcentageAnneeNPlus4;
    }

    public function setPourcentageAnneeNPlus4(?float $pourcentageAnneeNPlus4): self
    {
        $this->initialized['pourcentageAnneeNPlus4'] = true;
        $this->pourcentageAnneeNPlus4 = $pourcentageAnneeNPlus4;

        return $this;
    }

    public function getPourcentageAnneeNPlus5(): ?float
    {
        return $this->pourcentageAnneeNPlus5;
    }

    public function setPourcentageAnneeNPlus5(?float $pourcentageAnneeNPlus5): self
    {
        $this->initialized['pourcentageAnneeNPlus5'] = true;
        $this->pourcentageAnneeNPlus5 = $pourcentageAnneeNPlus5;

        return $this;
    }
}
