<?php

namespace QdequippeTech\Silae\Api\Model;

class SpectacleSalarieAffectation
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
    protected $numeroObjet;
    /**
     * @var string|null
     */
    protected $referenceExterneSpectacle;
    /**
     * @var bool|null
     */
    protected $aemInitiale;
    /**
     * @var bool|null
     */
    protected $aemComplementaire;
    /**
     * @var \DateTime|null
     */
    protected $dateDebutAEMInitiale;
    /**
     * @var \DateTime|null
     */
    protected $dateFinAEMInitiale;
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
     * @var float|null
     */
    protected $nbCachets;
    /**
     * @var float|null
     */
    protected $puCachet;
    /**
     * @var int|null
     */
    protected $typeCachet;
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
     * @var float|null
     */
    protected $nbHRepet;
    /**
     * @var float|null
     */
    protected $mtHRepet;
    /**
     * @var string|null
     */
    protected $hLibreCode1;
    /**
     * @var float|null
     */
    protected $hLibreValeur1;
    /**
     * @var string|null
     */
    protected $hLibreCode2;
    /**
     * @var float|null
     */
    protected $hLibreValeur2;
    /**
     * @var string|null
     */
    protected $hLibreCode3;
    /**
     * @var float|null
     */
    protected $hLibreValeur3;
    /**
     * @var string|null
     */
    protected $hLibreCode4;
    /**
     * @var float|null
     */
    protected $hLibreValeur4;
    /**
     * @var string|null
     */
    protected $hLibreCode5;
    /**
     * @var float|null
     */
    protected $hLibreValeur5;
    /**
     * @var string|null
     */
    protected $hLibreCode6;
    /**
     * @var float|null
     */
    protected $hLibreValeur6;
    /**
     * @var string|null
     */
    protected $variableCode1;
    /**
     * @var float|null
     */
    protected $variableValeur1;
    /**
     * @var string|null
     */
    protected $variableCode2;
    /**
     * @var float|null
     */
    protected $variableValeur2;
    /**
     * @var string|null
     */
    protected $variableCode3;
    /**
     * @var float|null
     */
    protected $variableValeur3;
    /**
     * @var string|null
     */
    protected $variableCode4;
    /**
     * @var float|null
     */
    protected $variableValeur4;
    /**
     * @var string|null
     */
    protected $variableCode5;
    /**
     * @var float|null
     */
    protected $variableValeur5;
    /**
     * @var string|null
     */
    protected $variableCode6;
    /**
     * @var float|null
     */
    protected $variableValeur6;
    /**
     * @var string|null
     */
    protected $variableCode7;
    /**
     * @var float|null
     */
    protected $variableValeur7;
    /**
     * @var string|null
     */
    protected $variableCode8;
    /**
     * @var float|null
     */
    protected $variableValeur8;
    /**
     * @var string|null
     */
    protected $variableCode9;
    /**
     * @var float|null
     */
    protected $variableValeur9;
    /**
     * @var string|null
     */
    protected $affectationAnalytique;
    /**
     * @var string|null
     */
    protected $affectationAnalytique2;
    /**
     * @var string|null
     */
    protected $affectationAnalytique3;

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

    public function getAemInitiale(): ?bool
    {
        return $this->aemInitiale;
    }

    public function setAemInitiale(?bool $aemInitiale): self
    {
        $this->initialized['aemInitiale'] = true;
        $this->aemInitiale = $aemInitiale;

        return $this;
    }

    public function getAemComplementaire(): ?bool
    {
        return $this->aemComplementaire;
    }

    public function setAemComplementaire(?bool $aemComplementaire): self
    {
        $this->initialized['aemComplementaire'] = true;
        $this->aemComplementaire = $aemComplementaire;

        return $this;
    }

    public function getDateDebutAEMInitiale(): ?\DateTime
    {
        return $this->dateDebutAEMInitiale;
    }

    public function setDateDebutAEMInitiale(?\DateTime $dateDebutAEMInitiale): self
    {
        $this->initialized['dateDebutAEMInitiale'] = true;
        $this->dateDebutAEMInitiale = $dateDebutAEMInitiale;

        return $this;
    }

    public function getDateFinAEMInitiale(): ?\DateTime
    {
        return $this->dateFinAEMInitiale;
    }

    public function setDateFinAEMInitiale(?\DateTime $dateFinAEMInitiale): self
    {
        $this->initialized['dateFinAEMInitiale'] = true;
        $this->dateFinAEMInitiale = $dateFinAEMInitiale;

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

    public function getNbCachets(): ?float
    {
        return $this->nbCachets;
    }

    public function setNbCachets(?float $nbCachets): self
    {
        $this->initialized['nbCachets'] = true;
        $this->nbCachets = $nbCachets;

        return $this;
    }

    public function getPuCachet(): ?float
    {
        return $this->puCachet;
    }

    public function setPuCachet(?float $puCachet): self
    {
        $this->initialized['puCachet'] = true;
        $this->puCachet = $puCachet;

        return $this;
    }

    public function getTypeCachet(): ?int
    {
        return $this->typeCachet;
    }

    public function setTypeCachet(?int $typeCachet): self
    {
        $this->initialized['typeCachet'] = true;
        $this->typeCachet = $typeCachet;

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

    public function getNbHRepet(): ?float
    {
        return $this->nbHRepet;
    }

    public function setNbHRepet(?float $nbHRepet): self
    {
        $this->initialized['nbHRepet'] = true;
        $this->nbHRepet = $nbHRepet;

        return $this;
    }

    public function getMtHRepet(): ?float
    {
        return $this->mtHRepet;
    }

    public function setMtHRepet(?float $mtHRepet): self
    {
        $this->initialized['mtHRepet'] = true;
        $this->mtHRepet = $mtHRepet;

        return $this;
    }

    public function getHLibreCode1(): ?string
    {
        return $this->hLibreCode1;
    }

    public function setHLibreCode1(?string $hLibreCode1): self
    {
        $this->initialized['hLibreCode1'] = true;
        $this->hLibreCode1 = $hLibreCode1;

        return $this;
    }

    public function getHLibreValeur1(): ?float
    {
        return $this->hLibreValeur1;
    }

    public function setHLibreValeur1(?float $hLibreValeur1): self
    {
        $this->initialized['hLibreValeur1'] = true;
        $this->hLibreValeur1 = $hLibreValeur1;

        return $this;
    }

    public function getHLibreCode2(): ?string
    {
        return $this->hLibreCode2;
    }

    public function setHLibreCode2(?string $hLibreCode2): self
    {
        $this->initialized['hLibreCode2'] = true;
        $this->hLibreCode2 = $hLibreCode2;

        return $this;
    }

    public function getHLibreValeur2(): ?float
    {
        return $this->hLibreValeur2;
    }

    public function setHLibreValeur2(?float $hLibreValeur2): self
    {
        $this->initialized['hLibreValeur2'] = true;
        $this->hLibreValeur2 = $hLibreValeur2;

        return $this;
    }

    public function getHLibreCode3(): ?string
    {
        return $this->hLibreCode3;
    }

    public function setHLibreCode3(?string $hLibreCode3): self
    {
        $this->initialized['hLibreCode3'] = true;
        $this->hLibreCode3 = $hLibreCode3;

        return $this;
    }

    public function getHLibreValeur3(): ?float
    {
        return $this->hLibreValeur3;
    }

    public function setHLibreValeur3(?float $hLibreValeur3): self
    {
        $this->initialized['hLibreValeur3'] = true;
        $this->hLibreValeur3 = $hLibreValeur3;

        return $this;
    }

    public function getHLibreCode4(): ?string
    {
        return $this->hLibreCode4;
    }

    public function setHLibreCode4(?string $hLibreCode4): self
    {
        $this->initialized['hLibreCode4'] = true;
        $this->hLibreCode4 = $hLibreCode4;

        return $this;
    }

    public function getHLibreValeur4(): ?float
    {
        return $this->hLibreValeur4;
    }

    public function setHLibreValeur4(?float $hLibreValeur4): self
    {
        $this->initialized['hLibreValeur4'] = true;
        $this->hLibreValeur4 = $hLibreValeur4;

        return $this;
    }

    public function getHLibreCode5(): ?string
    {
        return $this->hLibreCode5;
    }

    public function setHLibreCode5(?string $hLibreCode5): self
    {
        $this->initialized['hLibreCode5'] = true;
        $this->hLibreCode5 = $hLibreCode5;

        return $this;
    }

    public function getHLibreValeur5(): ?float
    {
        return $this->hLibreValeur5;
    }

    public function setHLibreValeur5(?float $hLibreValeur5): self
    {
        $this->initialized['hLibreValeur5'] = true;
        $this->hLibreValeur5 = $hLibreValeur5;

        return $this;
    }

    public function getHLibreCode6(): ?string
    {
        return $this->hLibreCode6;
    }

    public function setHLibreCode6(?string $hLibreCode6): self
    {
        $this->initialized['hLibreCode6'] = true;
        $this->hLibreCode6 = $hLibreCode6;

        return $this;
    }

    public function getHLibreValeur6(): ?float
    {
        return $this->hLibreValeur6;
    }

    public function setHLibreValeur6(?float $hLibreValeur6): self
    {
        $this->initialized['hLibreValeur6'] = true;
        $this->hLibreValeur6 = $hLibreValeur6;

        return $this;
    }

    public function getVariableCode1(): ?string
    {
        return $this->variableCode1;
    }

    public function setVariableCode1(?string $variableCode1): self
    {
        $this->initialized['variableCode1'] = true;
        $this->variableCode1 = $variableCode1;

        return $this;
    }

    public function getVariableValeur1(): ?float
    {
        return $this->variableValeur1;
    }

    public function setVariableValeur1(?float $variableValeur1): self
    {
        $this->initialized['variableValeur1'] = true;
        $this->variableValeur1 = $variableValeur1;

        return $this;
    }

    public function getVariableCode2(): ?string
    {
        return $this->variableCode2;
    }

    public function setVariableCode2(?string $variableCode2): self
    {
        $this->initialized['variableCode2'] = true;
        $this->variableCode2 = $variableCode2;

        return $this;
    }

    public function getVariableValeur2(): ?float
    {
        return $this->variableValeur2;
    }

    public function setVariableValeur2(?float $variableValeur2): self
    {
        $this->initialized['variableValeur2'] = true;
        $this->variableValeur2 = $variableValeur2;

        return $this;
    }

    public function getVariableCode3(): ?string
    {
        return $this->variableCode3;
    }

    public function setVariableCode3(?string $variableCode3): self
    {
        $this->initialized['variableCode3'] = true;
        $this->variableCode3 = $variableCode3;

        return $this;
    }

    public function getVariableValeur3(): ?float
    {
        return $this->variableValeur3;
    }

    public function setVariableValeur3(?float $variableValeur3): self
    {
        $this->initialized['variableValeur3'] = true;
        $this->variableValeur3 = $variableValeur3;

        return $this;
    }

    public function getVariableCode4(): ?string
    {
        return $this->variableCode4;
    }

    public function setVariableCode4(?string $variableCode4): self
    {
        $this->initialized['variableCode4'] = true;
        $this->variableCode4 = $variableCode4;

        return $this;
    }

    public function getVariableValeur4(): ?float
    {
        return $this->variableValeur4;
    }

    public function setVariableValeur4(?float $variableValeur4): self
    {
        $this->initialized['variableValeur4'] = true;
        $this->variableValeur4 = $variableValeur4;

        return $this;
    }

    public function getVariableCode5(): ?string
    {
        return $this->variableCode5;
    }

    public function setVariableCode5(?string $variableCode5): self
    {
        $this->initialized['variableCode5'] = true;
        $this->variableCode5 = $variableCode5;

        return $this;
    }

    public function getVariableValeur5(): ?float
    {
        return $this->variableValeur5;
    }

    public function setVariableValeur5(?float $variableValeur5): self
    {
        $this->initialized['variableValeur5'] = true;
        $this->variableValeur5 = $variableValeur5;

        return $this;
    }

    public function getVariableCode6(): ?string
    {
        return $this->variableCode6;
    }

    public function setVariableCode6(?string $variableCode6): self
    {
        $this->initialized['variableCode6'] = true;
        $this->variableCode6 = $variableCode6;

        return $this;
    }

    public function getVariableValeur6(): ?float
    {
        return $this->variableValeur6;
    }

    public function setVariableValeur6(?float $variableValeur6): self
    {
        $this->initialized['variableValeur6'] = true;
        $this->variableValeur6 = $variableValeur6;

        return $this;
    }

    public function getVariableCode7(): ?string
    {
        return $this->variableCode7;
    }

    public function setVariableCode7(?string $variableCode7): self
    {
        $this->initialized['variableCode7'] = true;
        $this->variableCode7 = $variableCode7;

        return $this;
    }

    public function getVariableValeur7(): ?float
    {
        return $this->variableValeur7;
    }

    public function setVariableValeur7(?float $variableValeur7): self
    {
        $this->initialized['variableValeur7'] = true;
        $this->variableValeur7 = $variableValeur7;

        return $this;
    }

    public function getVariableCode8(): ?string
    {
        return $this->variableCode8;
    }

    public function setVariableCode8(?string $variableCode8): self
    {
        $this->initialized['variableCode8'] = true;
        $this->variableCode8 = $variableCode8;

        return $this;
    }

    public function getVariableValeur8(): ?float
    {
        return $this->variableValeur8;
    }

    public function setVariableValeur8(?float $variableValeur8): self
    {
        $this->initialized['variableValeur8'] = true;
        $this->variableValeur8 = $variableValeur8;

        return $this;
    }

    public function getVariableCode9(): ?string
    {
        return $this->variableCode9;
    }

    public function setVariableCode9(?string $variableCode9): self
    {
        $this->initialized['variableCode9'] = true;
        $this->variableCode9 = $variableCode9;

        return $this;
    }

    public function getVariableValeur9(): ?float
    {
        return $this->variableValeur9;
    }

    public function setVariableValeur9(?float $variableValeur9): self
    {
        $this->initialized['variableValeur9'] = true;
        $this->variableValeur9 = $variableValeur9;

        return $this;
    }

    public function getAffectationAnalytique(): ?string
    {
        return $this->affectationAnalytique;
    }

    public function setAffectationAnalytique(?string $affectationAnalytique): self
    {
        $this->initialized['affectationAnalytique'] = true;
        $this->affectationAnalytique = $affectationAnalytique;

        return $this;
    }

    public function getAffectationAnalytique2(): ?string
    {
        return $this->affectationAnalytique2;
    }

    public function setAffectationAnalytique2(?string $affectationAnalytique2): self
    {
        $this->initialized['affectationAnalytique2'] = true;
        $this->affectationAnalytique2 = $affectationAnalytique2;

        return $this;
    }

    public function getAffectationAnalytique3(): ?string
    {
        return $this->affectationAnalytique3;
    }

    public function setAffectationAnalytique3(?string $affectationAnalytique3): self
    {
        $this->initialized['affectationAnalytique3'] = true;
        $this->affectationAnalytique3 = $affectationAnalytique3;

        return $this;
    }
}
