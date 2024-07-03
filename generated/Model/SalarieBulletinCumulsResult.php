<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBulletinCumulsResult
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
     * @var float|null
     */
    protected $salaireDeBase;

    /**
     * @var float|null
     */
    protected $brut;

    /**
     * @var float|null
     */
    protected $cumulRetenuesSD;

    /**
     * @var float|null
     */
    protected $cumulRetenuesSND;

    /**
     * @var float|null
     */
    protected $netImposable;

    /**
     * @var float|null
     */
    protected $netAPayerAvantImpot;

    /**
     * @var float|null
     */
    protected $netAPayer;

    /**
     * @var float|null
     */
    protected $impotSurLeRevenuPreleveALaSource;

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

    public function getBrut(): ?float
    {
        return $this->brut;
    }

    public function setBrut(?float $brut): self
    {
        $this->initialized['brut'] = true;
        $this->brut = $brut;

        return $this;
    }

    public function getCumulRetenuesSD(): ?float
    {
        return $this->cumulRetenuesSD;
    }

    public function setCumulRetenuesSD(?float $cumulRetenuesSD): self
    {
        $this->initialized['cumulRetenuesSD'] = true;
        $this->cumulRetenuesSD = $cumulRetenuesSD;

        return $this;
    }

    public function getCumulRetenuesSND(): ?float
    {
        return $this->cumulRetenuesSND;
    }

    public function setCumulRetenuesSND(?float $cumulRetenuesSND): self
    {
        $this->initialized['cumulRetenuesSND'] = true;
        $this->cumulRetenuesSND = $cumulRetenuesSND;

        return $this;
    }

    public function getNetImposable(): ?float
    {
        return $this->netImposable;
    }

    public function setNetImposable(?float $netImposable): self
    {
        $this->initialized['netImposable'] = true;
        $this->netImposable = $netImposable;

        return $this;
    }

    public function getNetAPayerAvantImpot(): ?float
    {
        return $this->netAPayerAvantImpot;
    }

    public function setNetAPayerAvantImpot(?float $netAPayerAvantImpot): self
    {
        $this->initialized['netAPayerAvantImpot'] = true;
        $this->netAPayerAvantImpot = $netAPayerAvantImpot;

        return $this;
    }

    public function getNetAPayer(): ?float
    {
        return $this->netAPayer;
    }

    public function setNetAPayer(?float $netAPayer): self
    {
        $this->initialized['netAPayer'] = true;
        $this->netAPayer = $netAPayer;

        return $this;
    }

    public function getImpotSurLeRevenuPreleveALaSource(): ?float
    {
        return $this->impotSurLeRevenuPreleveALaSource;
    }

    public function setImpotSurLeRevenuPreleveALaSource(?float $impotSurLeRevenuPreleveALaSource): self
    {
        $this->initialized['impotSurLeRevenuPreleveALaSource'] = true;
        $this->impotSurLeRevenuPreleveALaSource = $impotSurLeRevenuPreleveALaSource;

        return $this;
    }
}
