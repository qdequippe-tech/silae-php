<?php

namespace QdequippeTech\Silae\Api\Model;

class Spectacle
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
    protected $axeAnalytique3;
    /**
     * @var string|null
     */
    protected $valeurAxeAnalytique3;
    /**
     * @var string|null
     */
    protected $referenceExterneSpectacle;
    /**
     * @var string|null
     */
    protected $numeroObjet;
    /**
     * @var string|null
     */
    protected $intituleSpectacle;
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

    public function getAxeAnalytique3(): ?string
    {
        return $this->axeAnalytique3;
    }

    public function setAxeAnalytique3(?string $axeAnalytique3): self
    {
        $this->initialized['axeAnalytique3'] = true;
        $this->axeAnalytique3 = $axeAnalytique3;

        return $this;
    }

    public function getValeurAxeAnalytique3(): ?string
    {
        return $this->valeurAxeAnalytique3;
    }

    public function setValeurAxeAnalytique3(?string $valeurAxeAnalytique3): self
    {
        $this->initialized['valeurAxeAnalytique3'] = true;
        $this->valeurAxeAnalytique3 = $valeurAxeAnalytique3;

        return $this;
    }

    public function getReferenceExterneSpectacle(): ?string
    {
        return $this->referenceExterneSpectacle;
    }

    public function setReferenceExterneSpectacle(?string $referenceExterneSpectacle): self
    {
        $this->initialized['referenceExterneSpectacle'] = true;
        $this->referenceExterneSpectacle = $referenceExterneSpectacle;

        return $this;
    }

    public function getNumeroObjet(): ?string
    {
        return $this->numeroObjet;
    }

    public function setNumeroObjet(?string $numeroObjet): self
    {
        $this->initialized['numeroObjet'] = true;
        $this->numeroObjet = $numeroObjet;

        return $this;
    }

    public function getIntituleSpectacle(): ?string
    {
        return $this->intituleSpectacle;
    }

    public function setIntituleSpectacle(?string $intituleSpectacle): self
    {
        $this->initialized['intituleSpectacle'] = true;
        $this->intituleSpectacle = $intituleSpectacle;

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
