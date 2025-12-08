<?php

namespace QdequippeTech\Silae\Api\Model;

class EditionHistoriqueChiffreRequest
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
     * @var string|null
     */
    protected $codeEditionHistorique;

    /**
     * @var string|null
     */
    protected $motDePasse;

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

    public function getCodeEditionHistorique(): ?string
    {
        return $this->codeEditionHistorique;
    }

    public function setCodeEditionHistorique(?string $codeEditionHistorique): self
    {
        $this->initialized['codeEditionHistorique'] = true;
        $this->codeEditionHistorique = $codeEditionHistorique;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(?string $motDePasse): self
    {
        $this->initialized['motDePasse'] = true;
        $this->motDePasse = $motDePasse;

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
