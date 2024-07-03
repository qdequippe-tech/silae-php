<?php

namespace QdequippeTech\Silae\Api\Model;

class ExtraSalarieVacation
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
    protected $dateDebut;

    /**
     * @var \DateTime|null
     */
    protected $dateFin;

    /**
     * @var string|null
     */
    protected $referenceExterneManifestation;

    /**
     * @var int|null
     */
    protected $hEmbauche;

    /**
     * @var int|null
     */
    protected $mEmbauche;

    /**
     * @var bool|null
     */
    protected $docsFinContrat;

    /**
     * @var float|null
     */
    protected $tauxHoraire;

    /**
     * @var float|null
     */
    protected $nbH;

    /**
     * @var bool|null
     */
    protected $montantNet;

    /**
     * @var bool|null
     */
    protected $montantCoutGlobal;

    /**
     * @var float|null
     */
    protected $nbJours;

    /**
     * @var list<string>|null
     */
    protected $hLibresCodes;

    /**
     * @var list<float>|null
     */
    protected $hLibresValeurs;

    /**
     * @var list<string>|null
     */
    protected $variablesCodes;

    /**
     * @var list<float>|null
     */
    protected $variablesValeurs;

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

    public function getHEmbauche(): ?int
    {
        return $this->hEmbauche;
    }

    public function setHEmbauche(?int $hEmbauche): self
    {
        $this->initialized['hEmbauche'] = true;
        $this->hEmbauche = $hEmbauche;

        return $this;
    }

    public function getMEmbauche(): ?int
    {
        return $this->mEmbauche;
    }

    public function setMEmbauche(?int $mEmbauche): self
    {
        $this->initialized['mEmbauche'] = true;
        $this->mEmbauche = $mEmbauche;

        return $this;
    }

    public function getDocsFinContrat(): ?bool
    {
        return $this->docsFinContrat;
    }

    public function setDocsFinContrat(?bool $docsFinContrat): self
    {
        $this->initialized['docsFinContrat'] = true;
        $this->docsFinContrat = $docsFinContrat;

        return $this;
    }

    public function getTauxHoraire(): ?float
    {
        return $this->tauxHoraire;
    }

    public function setTauxHoraire(?float $tauxHoraire): self
    {
        $this->initialized['tauxHoraire'] = true;
        $this->tauxHoraire = $tauxHoraire;

        return $this;
    }

    public function getNbH(): ?float
    {
        return $this->nbH;
    }

    public function setNbH(?float $nbH): self
    {
        $this->initialized['nbH'] = true;
        $this->nbH = $nbH;

        return $this;
    }

    public function getMontantNet(): ?bool
    {
        return $this->montantNet;
    }

    public function setMontantNet(?bool $montantNet): self
    {
        $this->initialized['montantNet'] = true;
        $this->montantNet = $montantNet;

        return $this;
    }

    public function getMontantCoutGlobal(): ?bool
    {
        return $this->montantCoutGlobal;
    }

    public function setMontantCoutGlobal(?bool $montantCoutGlobal): self
    {
        $this->initialized['montantCoutGlobal'] = true;
        $this->montantCoutGlobal = $montantCoutGlobal;

        return $this;
    }

    public function getNbJours(): ?float
    {
        return $this->nbJours;
    }

    public function setNbJours(?float $nbJours): self
    {
        $this->initialized['nbJours'] = true;
        $this->nbJours = $nbJours;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getHLibresCodes(): ?array
    {
        return $this->hLibresCodes;
    }

    /**
     * @param list<string>|null $hLibresCodes
     */
    public function setHLibresCodes(?array $hLibresCodes): self
    {
        $this->initialized['hLibresCodes'] = true;
        $this->hLibresCodes = $hLibresCodes;

        return $this;
    }

    /**
     * @return list<float>|null
     */
    public function getHLibresValeurs(): ?array
    {
        return $this->hLibresValeurs;
    }

    /**
     * @param list<float>|null $hLibresValeurs
     */
    public function setHLibresValeurs(?array $hLibresValeurs): self
    {
        $this->initialized['hLibresValeurs'] = true;
        $this->hLibresValeurs = $hLibresValeurs;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getVariablesCodes(): ?array
    {
        return $this->variablesCodes;
    }

    /**
     * @param list<string>|null $variablesCodes
     */
    public function setVariablesCodes(?array $variablesCodes): self
    {
        $this->initialized['variablesCodes'] = true;
        $this->variablesCodes = $variablesCodes;

        return $this;
    }

    /**
     * @return list<float>|null
     */
    public function getVariablesValeurs(): ?array
    {
        return $this->variablesValeurs;
    }

    /**
     * @param list<float>|null $variablesValeurs
     */
    public function setVariablesValeurs(?array $variablesValeurs): self
    {
        $this->initialized['variablesValeurs'] = true;
        $this->variablesValeurs = $variablesValeurs;

        return $this;
    }
}
