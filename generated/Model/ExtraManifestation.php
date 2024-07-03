<?php

namespace QdequippeTech\Silae\Api\Model;

class ExtraManifestation
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
    protected $nomInterneEtablissement;

    /**
     * @var string|null
     */
    protected $axeAnalytique;

    /**
     * @var string|null
     */
    protected $valeurAxeAnalytique;

    /**
     * @var string|null
     */
    protected $axeAnalytique2;

    /**
     * @var string|null
     */
    protected $valeurAxeAnalytique2;

    /**
     * @var string|null
     */
    protected $referenceExterneManifestation;

    /**
     * @var string|null
     */
    protected $intituleManifestation;

    /**
     * @var \DateTime|null
     */
    protected $dateDebut;

    /**
     * @var \DateTime|null
     */
    protected $dateFin;

    public function getNomInterneEtablissement(): ?string
    {
        return $this->nomInterneEtablissement;
    }

    public function setNomInterneEtablissement(?string $nomInterneEtablissement): self
    {
        $this->initialized['nomInterneEtablissement'] = true;
        $this->nomInterneEtablissement = $nomInterneEtablissement;

        return $this;
    }

    public function getAxeAnalytique(): ?string
    {
        return $this->axeAnalytique;
    }

    public function setAxeAnalytique(?string $axeAnalytique): self
    {
        $this->initialized['axeAnalytique'] = true;
        $this->axeAnalytique = $axeAnalytique;

        return $this;
    }

    public function getValeurAxeAnalytique(): ?string
    {
        return $this->valeurAxeAnalytique;
    }

    public function setValeurAxeAnalytique(?string $valeurAxeAnalytique): self
    {
        $this->initialized['valeurAxeAnalytique'] = true;
        $this->valeurAxeAnalytique = $valeurAxeAnalytique;

        return $this;
    }

    public function getAxeAnalytique2(): ?string
    {
        return $this->axeAnalytique2;
    }

    public function setAxeAnalytique2(?string $axeAnalytique2): self
    {
        $this->initialized['axeAnalytique2'] = true;
        $this->axeAnalytique2 = $axeAnalytique2;

        return $this;
    }

    public function getValeurAxeAnalytique2(): ?string
    {
        return $this->valeurAxeAnalytique2;
    }

    public function setValeurAxeAnalytique2(?string $valeurAxeAnalytique2): self
    {
        $this->initialized['valeurAxeAnalytique2'] = true;
        $this->valeurAxeAnalytique2 = $valeurAxeAnalytique2;

        return $this;
    }

    public function getReferenceExterneManifestation(): ?string
    {
        return $this->referenceExterneManifestation;
    }

    public function setReferenceExterneManifestation(?string $referenceExterneManifestation): self
    {
        $this->initialized['referenceExterneManifestation'] = true;
        $this->referenceExterneManifestation = $referenceExterneManifestation;

        return $this;
    }

    public function getIntituleManifestation(): ?string
    {
        return $this->intituleManifestation;
    }

    public function setIntituleManifestation(?string $intituleManifestation): self
    {
        $this->initialized['intituleManifestation'] = true;
        $this->intituleManifestation = $intituleManifestation;

        return $this;
    }

    public function getDateDebut(): ?\DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTime $dateDebut): self
    {
        $this->initialized['dateDebut'] = true;
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTime $dateFin): self
    {
        $this->initialized['dateFin'] = true;
        $this->dateFin = $dateFin;

        return $this;
    }
}
