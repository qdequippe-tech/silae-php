<?php

namespace QdequippeTech\Silae\Api\Model;

class RecupererFichiersVirementChiffresRequest
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
     * @var ProprietesChiffrement|null
     */
    protected $proprietesChiffrement;
    /**
     * @var \DateTime|null
     */
    protected $dateValeur;
    /**
     * @var string|null
     */
    protected $libelleVirement;
    /**
     * @var string[]|null
     */
    protected $matriculeSalaries;
    /**
     * @var \DateTime|null
     */
    protected $periode;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getProprietesChiffrement(): ?ProprietesChiffrement
    {
        return $this->proprietesChiffrement;
    }

    public function setProprietesChiffrement(?ProprietesChiffrement $proprietesChiffrement): self
    {
        $this->initialized['proprietesChiffrement'] = true;
        $this->proprietesChiffrement = $proprietesChiffrement;

        return $this;
    }

    public function getDateValeur(): ?\DateTime
    {
        return $this->dateValeur;
    }

    public function setDateValeur(?\DateTime $dateValeur): self
    {
        $this->initialized['dateValeur'] = true;
        $this->dateValeur = $dateValeur;

        return $this;
    }

    public function getLibelleVirement(): ?string
    {
        return $this->libelleVirement;
    }

    public function setLibelleVirement(?string $libelleVirement): self
    {
        $this->initialized['libelleVirement'] = true;
        $this->libelleVirement = $libelleVirement;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getMatriculeSalaries(): ?array
    {
        return $this->matriculeSalaries;
    }

    /**
     * @param string[]|null $matriculeSalaries
     */
    public function setMatriculeSalaries(?array $matriculeSalaries): self
    {
        $this->initialized['matriculeSalaries'] = true;
        $this->matriculeSalaries = $matriculeSalaries;

        return $this;
    }

    public function getPeriode(): ?\DateTime
    {
        return $this->periode;
    }

    public function setPeriode(?\DateTime $periode): self
    {
        $this->initialized['periode'] = true;
        $this->periode = $periode;

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
