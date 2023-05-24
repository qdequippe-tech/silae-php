<?php

namespace QdequippeTech\Silae\Api\Model;

class EcrituresComptables
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
     * @var EcrituresComptablesLigne[]|null
     */
    protected $ecritures;

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
     * @return EcrituresComptablesLigne[]|null
     */
    public function getEcritures(): ?array
    {
        return $this->ecritures;
    }

    /**
     * @param EcrituresComptablesLigne[]|null $ecritures
     */
    public function setEcritures(?array $ecritures): self
    {
        $this->initialized['ecritures'] = true;
        $this->ecritures = $ecritures;

        return $this;
    }
}
