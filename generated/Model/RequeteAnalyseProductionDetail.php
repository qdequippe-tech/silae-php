<?php

namespace QdequippeTech\Silae\Api\Model;

class RequeteAnalyseProductionDetail
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
     * @var string|null
     */
    protected $nomAnalyse;

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

    public function getNomAnalyse(): ?string
    {
        return $this->nomAnalyse;
    }

    public function setNomAnalyse(?string $nomAnalyse): self
    {
        $this->initialized['nomAnalyse'] = true;
        $this->nomAnalyse = $nomAnalyse;

        return $this;
    }
}
