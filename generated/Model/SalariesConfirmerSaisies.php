<?php

namespace QdequippeTech\Silae\Api\Model;

class SalariesConfirmerSaisies
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
    protected $periodeConfirmation;
    /**
     * @var bool|null
     */
    protected $confirmerHeures;
    /**
     * @var bool|null
     */
    protected $confirmerPrimes;

    public function getPeriodeConfirmation(): ?\DateTime
    {
        return $this->periodeConfirmation;
    }

    public function setPeriodeConfirmation(?\DateTime $periodeConfirmation): self
    {
        $this->initialized['periodeConfirmation'] = true;
        $this->periodeConfirmation = $periodeConfirmation;

        return $this;
    }

    public function getConfirmerHeures(): ?bool
    {
        return $this->confirmerHeures;
    }

    public function setConfirmerHeures(?bool $confirmerHeures): self
    {
        $this->initialized['confirmerHeures'] = true;
        $this->confirmerHeures = $confirmerHeures;

        return $this;
    }

    public function getConfirmerPrimes(): ?bool
    {
        return $this->confirmerPrimes;
    }

    public function setConfirmerPrimes(?bool $confirmerPrimes): self
    {
        $this->initialized['confirmerPrimes'] = true;
        $this->confirmerPrimes = $confirmerPrimes;

        return $this;
    }
}
