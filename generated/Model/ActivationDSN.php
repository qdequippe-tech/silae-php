<?php

namespace QdequippeTech\Silae\Api\Model;

class ActivationDSN
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
    protected $numeroDossier;
    /**
     * @var \DateTime|null
     */
    protected $periodeDemarrageDsnMensuelle;
    /**
     * @var \DateTime|null
     */
    protected $periodeDemarrageDsnArretDeTravail;
    /**
     * @var \DateTime|null
     */
    protected $periodeDemarrageDsnFinDeContrat;

    public function getNumeroDossier(): ?string
    {
        return $this->numeroDossier;
    }

    public function setNumeroDossier(?string $numeroDossier): self
    {
        $this->initialized['numeroDossier'] = true;
        $this->numeroDossier = $numeroDossier;

        return $this;
    }

    public function getPeriodeDemarrageDsnMensuelle(): ?\DateTime
    {
        return $this->periodeDemarrageDsnMensuelle;
    }

    public function setPeriodeDemarrageDsnMensuelle(?\DateTime $periodeDemarrageDsnMensuelle): self
    {
        $this->initialized['periodeDemarrageDsnMensuelle'] = true;
        $this->periodeDemarrageDsnMensuelle = $periodeDemarrageDsnMensuelle;

        return $this;
    }

    public function getPeriodeDemarrageDsnArretDeTravail(): ?\DateTime
    {
        return $this->periodeDemarrageDsnArretDeTravail;
    }

    public function setPeriodeDemarrageDsnArretDeTravail(?\DateTime $periodeDemarrageDsnArretDeTravail): self
    {
        $this->initialized['periodeDemarrageDsnArretDeTravail'] = true;
        $this->periodeDemarrageDsnArretDeTravail = $periodeDemarrageDsnArretDeTravail;

        return $this;
    }

    public function getPeriodeDemarrageDsnFinDeContrat(): ?\DateTime
    {
        return $this->periodeDemarrageDsnFinDeContrat;
    }

    public function setPeriodeDemarrageDsnFinDeContrat(?\DateTime $periodeDemarrageDsnFinDeContrat): self
    {
        $this->initialized['periodeDemarrageDsnFinDeContrat'] = true;
        $this->periodeDemarrageDsnFinDeContrat = $periodeDemarrageDsnFinDeContrat;

        return $this;
    }
}
