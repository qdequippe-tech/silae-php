<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieHeures
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
    protected $periodeHeures;

    /**
     * @var string|null
     */
    protected $codeHeures;

    /**
     * @var float|null
     */
    protected $nombreHeures;

    /**
     * @var bool|null
     */
    protected $ajouter;

    public function getPeriodeHeures(): ?\DateTime
    {
        return $this->periodeHeures;
    }

    public function setPeriodeHeures(?\DateTime $periodeHeures): self
    {
        $this->initialized['periodeHeures'] = true;
        $this->periodeHeures = $periodeHeures;

        return $this;
    }

    public function getCodeHeures(): ?string
    {
        return $this->codeHeures;
    }

    public function setCodeHeures(?string $codeHeures): self
    {
        $this->initialized['codeHeures'] = true;
        $this->codeHeures = $codeHeures;

        return $this;
    }

    public function getNombreHeures(): ?float
    {
        return $this->nombreHeures;
    }

    public function setNombreHeures(?float $nombreHeures): self
    {
        $this->initialized['nombreHeures'] = true;
        $this->nombreHeures = $nombreHeures;

        return $this;
    }

    public function getAjouter(): ?bool
    {
        return $this->ajouter;
    }

    public function setAjouter(?bool $ajouter): self
    {
        $this->initialized['ajouter'] = true;
        $this->ajouter = $ajouter;

        return $this;
    }
}
