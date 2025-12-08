<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationTaxeApprentissageSocieteRequest
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
     * Annee d'application.
     *
     * @var \DateTime|null
     */
    protected $anneeMillesime;

    /**
     * Etablissement/Societe assujettis à la taxe d'apprentissage.
     *
     * @var bool|null
     */
    protected $soumisTaxeApprentissage;

    /**
     * Si non soumis : code de non assujettissement.
     *
     * @var string|null
     */
    protected $motifNonAssujettissement;

    /**
     * Si soumis : code d'operateur de compétences.
     *
     * @var string|null
     */
    protected $operateurCompetences;

    /**
     * Contribution suppl. à l'apprentissage (Majoration).
     *
     * @var bool|null
     */
    protected $soumisTaxeApprentissageAvecMajoration;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    /**
     * Annee d'application.
     */
    public function getAnneeMillesime(): ?\DateTime
    {
        return $this->anneeMillesime;
    }

    /**
     * Annee d'application.
     */
    public function setAnneeMillesime(?\DateTime $anneeMillesime): self
    {
        $this->initialized['anneeMillesime'] = true;
        $this->anneeMillesime = $anneeMillesime;

        return $this;
    }

    /**
     * Etablissement/Societe assujettis à la taxe d'apprentissage.
     */
    public function getSoumisTaxeApprentissage(): ?bool
    {
        return $this->soumisTaxeApprentissage;
    }

    /**
     * Etablissement/Societe assujettis à la taxe d'apprentissage.
     */
    public function setSoumisTaxeApprentissage(?bool $soumisTaxeApprentissage): self
    {
        $this->initialized['soumisTaxeApprentissage'] = true;
        $this->soumisTaxeApprentissage = $soumisTaxeApprentissage;

        return $this;
    }

    /**
     * Si non soumis : code de non assujettissement.
     */
    public function getMotifNonAssujettissement(): ?string
    {
        return $this->motifNonAssujettissement;
    }

    /**
     * Si non soumis : code de non assujettissement.
     */
    public function setMotifNonAssujettissement(?string $motifNonAssujettissement): self
    {
        $this->initialized['motifNonAssujettissement'] = true;
        $this->motifNonAssujettissement = $motifNonAssujettissement;

        return $this;
    }

    /**
     * Si soumis : code d'operateur de compétences.
     */
    public function getOperateurCompetences(): ?string
    {
        return $this->operateurCompetences;
    }

    /**
     * Si soumis : code d'operateur de compétences.
     */
    public function setOperateurCompetences(?string $operateurCompetences): self
    {
        $this->initialized['operateurCompetences'] = true;
        $this->operateurCompetences = $operateurCompetences;

        return $this;
    }

    /**
     * Contribution suppl. à l'apprentissage (Majoration).
     */
    public function getSoumisTaxeApprentissageAvecMajoration(): ?bool
    {
        return $this->soumisTaxeApprentissageAvecMajoration;
    }

    /**
     * Contribution suppl. à l'apprentissage (Majoration).
     */
    public function setSoumisTaxeApprentissageAvecMajoration(?bool $soumisTaxeApprentissageAvecMajoration): self
    {
        $this->initialized['soumisTaxeApprentissageAvecMajoration'] = true;
        $this->soumisTaxeApprentissageAvecMajoration = $soumisTaxeApprentissageAvecMajoration;

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
