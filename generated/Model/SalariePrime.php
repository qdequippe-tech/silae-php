<?php

namespace QdequippeTech\Silae\Api\Model;

class SalariePrime
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
    protected $periodePrime;
    /**
     * @var string|null
     */
    protected $codePrime;
    /**
     * @var float|null
     */
    protected $montantPrime;
    /**
     * @var string|null
     */
    protected $valeurChainePrime;
    /**
     * @var bool|null
     */
    protected $primeNette;
    /**
     * @var string|null
     */
    protected $intituleBulletin;
    /**
     * @var string|null
     */
    protected $intituleCourt;

    public function getPeriodePrime(): ?\DateTime
    {
        return $this->periodePrime;
    }

    public function setPeriodePrime(?\DateTime $periodePrime): self
    {
        $this->initialized['periodePrime'] = true;
        $this->periodePrime = $periodePrime;

        return $this;
    }

    public function getCodePrime(): ?string
    {
        return $this->codePrime;
    }

    public function setCodePrime(?string $codePrime): self
    {
        $this->initialized['codePrime'] = true;
        $this->codePrime = $codePrime;

        return $this;
    }

    public function getMontantPrime(): ?float
    {
        return $this->montantPrime;
    }

    public function setMontantPrime(?float $montantPrime): self
    {
        $this->initialized['montantPrime'] = true;
        $this->montantPrime = $montantPrime;

        return $this;
    }

    public function getValeurChainePrime(): ?string
    {
        return $this->valeurChainePrime;
    }

    public function setValeurChainePrime(?string $valeurChainePrime): self
    {
        $this->initialized['valeurChainePrime'] = true;
        $this->valeurChainePrime = $valeurChainePrime;

        return $this;
    }

    public function getPrimeNette(): ?bool
    {
        return $this->primeNette;
    }

    public function setPrimeNette(?bool $primeNette): self
    {
        $this->initialized['primeNette'] = true;
        $this->primeNette = $primeNette;

        return $this;
    }

    public function getIntituleBulletin(): ?string
    {
        return $this->intituleBulletin;
    }

    public function setIntituleBulletin(?string $intituleBulletin): self
    {
        $this->initialized['intituleBulletin'] = true;
        $this->intituleBulletin = $intituleBulletin;

        return $this;
    }

    public function getIntituleCourt(): ?string
    {
        return $this->intituleCourt;
    }

    public function setIntituleCourt(?string $intituleCourt): self
    {
        $this->initialized['intituleCourt'] = true;
        $this->intituleCourt = $intituleCourt;

        return $this;
    }
}
