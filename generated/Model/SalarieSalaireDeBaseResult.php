<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieSalaireDeBaseResult
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
    protected $matriculeSalarie;
    /**
     * @var int|null
     */
    protected $identifiantEmploi;
    /**
     * @var float|null
     */
    protected $salaireDeBase;
    /**
     * @var float|null
     */
    protected $salaireDeBaseHeuresNormales;
    /**
     * @var float|null
     */
    protected $salaireDeBaseHeuresMajorees;
    /**
     * @var float|null
     */
    protected $salaireDeBaseHLibre1;
    /**
     * @var float|null
     */
    protected $salaireDeBaseHLibre2;
    /**
     * @var float|null
     */
    protected $salaireDeBaseHLibre3;

    public function getMatriculeSalarie(): ?string
    {
        return $this->matriculeSalarie;
    }

    public function setMatriculeSalarie(?string $matriculeSalarie): self
    {
        $this->initialized['matriculeSalarie'] = true;
        $this->matriculeSalarie = $matriculeSalarie;

        return $this;
    }

    public function getIdentifiantEmploi(): ?int
    {
        return $this->identifiantEmploi;
    }

    public function setIdentifiantEmploi(?int $identifiantEmploi): self
    {
        $this->initialized['identifiantEmploi'] = true;
        $this->identifiantEmploi = $identifiantEmploi;

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

    public function getSalaireDeBaseHeuresNormales(): ?float
    {
        return $this->salaireDeBaseHeuresNormales;
    }

    public function setSalaireDeBaseHeuresNormales(?float $salaireDeBaseHeuresNormales): self
    {
        $this->initialized['salaireDeBaseHeuresNormales'] = true;
        $this->salaireDeBaseHeuresNormales = $salaireDeBaseHeuresNormales;

        return $this;
    }

    public function getSalaireDeBaseHeuresMajorees(): ?float
    {
        return $this->salaireDeBaseHeuresMajorees;
    }

    public function setSalaireDeBaseHeuresMajorees(?float $salaireDeBaseHeuresMajorees): self
    {
        $this->initialized['salaireDeBaseHeuresMajorees'] = true;
        $this->salaireDeBaseHeuresMajorees = $salaireDeBaseHeuresMajorees;

        return $this;
    }

    public function getSalaireDeBaseHLibre1(): ?float
    {
        return $this->salaireDeBaseHLibre1;
    }

    public function setSalaireDeBaseHLibre1(?float $salaireDeBaseHLibre1): self
    {
        $this->initialized['salaireDeBaseHLibre1'] = true;
        $this->salaireDeBaseHLibre1 = $salaireDeBaseHLibre1;

        return $this;
    }

    public function getSalaireDeBaseHLibre2(): ?float
    {
        return $this->salaireDeBaseHLibre2;
    }

    public function setSalaireDeBaseHLibre2(?float $salaireDeBaseHLibre2): self
    {
        $this->initialized['salaireDeBaseHLibre2'] = true;
        $this->salaireDeBaseHLibre2 = $salaireDeBaseHLibre2;

        return $this;
    }

    public function getSalaireDeBaseHLibre3(): ?float
    {
        return $this->salaireDeBaseHLibre3;
    }

    public function setSalaireDeBaseHLibre3(?float $salaireDeBaseHLibre3): self
    {
        $this->initialized['salaireDeBaseHLibre3'] = true;
        $this->salaireDeBaseHLibre3 = $salaireDeBaseHLibre3;

        return $this;
    }
}
