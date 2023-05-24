<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBulletinEnteteSimpleResult
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
    protected $bulletinOriginal;
    /**
     * @var float|null
     */
    protected $brut;
    /**
     * @var float|null
     */
    protected $netAPayer;
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
    protected $cumulRetenuesP;
    /**
     * @var float|null
     */
    protected $supplementCoutGlobal;
    /**
     * @var float|null
     */
    protected $netImposable;
    /**
     * @var float|null
     */
    protected $heuresNormales;
    /**
     * @var float|null
     */
    protected $heuresMajorees;

    public function getBulletinOriginal(): ?bool
    {
        return $this->bulletinOriginal;
    }

    public function setBulletinOriginal(?bool $bulletinOriginal): self
    {
        $this->initialized['bulletinOriginal'] = true;
        $this->bulletinOriginal = $bulletinOriginal;

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

    public function getCumulRetenuesP(): ?float
    {
        return $this->cumulRetenuesP;
    }

    public function setCumulRetenuesP(?float $cumulRetenuesP): self
    {
        $this->initialized['cumulRetenuesP'] = true;
        $this->cumulRetenuesP = $cumulRetenuesP;

        return $this;
    }

    public function getSupplementCoutGlobal(): ?float
    {
        return $this->supplementCoutGlobal;
    }

    public function setSupplementCoutGlobal(?float $supplementCoutGlobal): self
    {
        $this->initialized['supplementCoutGlobal'] = true;
        $this->supplementCoutGlobal = $supplementCoutGlobal;

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

    public function getHeuresNormales(): ?float
    {
        return $this->heuresNormales;
    }

    public function setHeuresNormales(?float $heuresNormales): self
    {
        $this->initialized['heuresNormales'] = true;
        $this->heuresNormales = $heuresNormales;

        return $this;
    }

    public function getHeuresMajorees(): ?float
    {
        return $this->heuresMajorees;
    }

    public function setHeuresMajorees(?float $heuresMajorees): self
    {
        $this->initialized['heuresMajorees'] = true;
        $this->heuresMajorees = $heuresMajorees;

        return $this;
    }
}
