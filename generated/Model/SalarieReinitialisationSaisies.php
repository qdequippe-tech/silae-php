<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieReinitialisationSaisies
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
    protected $periodeReinitialisation;

    /**
     * @var bool|null
     */
    protected $reinitialiserHeures;

    /**
     * @var bool|null
     */
    protected $reinitialiserPrimes;

    /**
     * @var bool|null
     */
    protected $reinitialiserAbsences;

    public function getPeriodeReinitialisation(): ?\DateTime
    {
        return $this->periodeReinitialisation;
    }

    public function setPeriodeReinitialisation(?\DateTime $periodeReinitialisation): self
    {
        $this->initialized['periodeReinitialisation'] = true;
        $this->periodeReinitialisation = $periodeReinitialisation;

        return $this;
    }

    public function getReinitialiserHeures(): ?bool
    {
        return $this->reinitialiserHeures;
    }

    public function setReinitialiserHeures(?bool $reinitialiserHeures): self
    {
        $this->initialized['reinitialiserHeures'] = true;
        $this->reinitialiserHeures = $reinitialiserHeures;

        return $this;
    }

    public function getReinitialiserPrimes(): ?bool
    {
        return $this->reinitialiserPrimes;
    }

    public function setReinitialiserPrimes(?bool $reinitialiserPrimes): self
    {
        $this->initialized['reinitialiserPrimes'] = true;
        $this->reinitialiserPrimes = $reinitialiserPrimes;

        return $this;
    }

    public function getReinitialiserAbsences(): ?bool
    {
        return $this->reinitialiserAbsences;
    }

    public function setReinitialiserAbsences(?bool $reinitialiserAbsences): self
    {
        $this->initialized['reinitialiserAbsences'] = true;
        $this->reinitialiserAbsences = $reinitialiserAbsences;

        return $this;
    }
}
