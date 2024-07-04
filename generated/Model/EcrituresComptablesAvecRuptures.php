<?php

namespace QdequippeTech\Silae\Api\Model;

class EcrituresComptablesAvecRuptures
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
    protected $periodeDebut;

    /**
     * @var \DateTime|null
     */
    protected $periodeFin;

    /**
     * @var list<EcrituresComptablesRupture>|null
     */
    protected $ruptures;

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

    public function getPeriodeDebut(): ?\DateTime
    {
        return $this->periodeDebut;
    }

    public function setPeriodeDebut(?\DateTime $periodeDebut): self
    {
        $this->initialized['periodeDebut'] = true;
        $this->periodeDebut = $periodeDebut;

        return $this;
    }

    public function getPeriodeFin(): ?\DateTime
    {
        return $this->periodeFin;
    }

    public function setPeriodeFin(?\DateTime $periodeFin): self
    {
        $this->initialized['periodeFin'] = true;
        $this->periodeFin = $periodeFin;

        return $this;
    }

    /**
     * @return list<EcrituresComptablesRupture>|null
     */
    public function getRuptures(): ?array
    {
        return $this->ruptures;
    }

    /**
     * @param list<EcrituresComptablesRupture>|null $ruptures
     */
    public function setRuptures(?array $ruptures): self
    {
        $this->initialized['ruptures'] = true;
        $this->ruptures = $ruptures;

        return $this;
    }
}
