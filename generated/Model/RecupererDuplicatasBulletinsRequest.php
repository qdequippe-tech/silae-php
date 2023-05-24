<?php

namespace QdequippeTech\Silae\Api\Model;

class RecupererDuplicatasBulletinsRequest
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
     * @var string[]|null
     */
    protected $filtreMatricules;
    /**
     * @var \DateTime|null
     */
    protected $periodeDebut;
    /**
     * @var \DateTime|null
     */
    protected $periodeFin;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    /**
     * @return string[]|null
     */
    public function getFiltreMatricules(): ?array
    {
        return $this->filtreMatricules;
    }

    /**
     * @param string[]|null $filtreMatricules
     */
    public function setFiltreMatricules(?array $filtreMatricules): self
    {
        $this->initialized['filtreMatricules'] = true;
        $this->filtreMatricules = $filtreMatricules;

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
}
