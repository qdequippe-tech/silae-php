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
     * @var \DateTime|null
     */
    protected $anneeMillesime;

    /**
     * @var bool|null
     */
    protected $soumisTaxeApprentissage;

    /**
     * @var string|null
     */
    protected $motifNonAssujettissement;

    /**
     * @var string|null
     */
    protected $operateurCompetences;

    /**
     * @var bool|null
     */
    protected $soumisTaxeApprentissageAvecMajoration;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getAnneeMillesime(): ?\DateTime
    {
        return $this->anneeMillesime;
    }

    public function setAnneeMillesime(?\DateTime $anneeMillesime): self
    {
        $this->initialized['anneeMillesime'] = true;
        $this->anneeMillesime = $anneeMillesime;

        return $this;
    }

    public function getSoumisTaxeApprentissage(): ?bool
    {
        return $this->soumisTaxeApprentissage;
    }

    public function setSoumisTaxeApprentissage(?bool $soumisTaxeApprentissage): self
    {
        $this->initialized['soumisTaxeApprentissage'] = true;
        $this->soumisTaxeApprentissage = $soumisTaxeApprentissage;

        return $this;
    }

    public function getMotifNonAssujettissement(): ?string
    {
        return $this->motifNonAssujettissement;
    }

    public function setMotifNonAssujettissement(?string $motifNonAssujettissement): self
    {
        $this->initialized['motifNonAssujettissement'] = true;
        $this->motifNonAssujettissement = $motifNonAssujettissement;

        return $this;
    }

    public function getOperateurCompetences(): ?string
    {
        return $this->operateurCompetences;
    }

    public function setOperateurCompetences(?string $operateurCompetences): self
    {
        $this->initialized['operateurCompetences'] = true;
        $this->operateurCompetences = $operateurCompetences;

        return $this;
    }

    public function getSoumisTaxeApprentissageAvecMajoration(): ?bool
    {
        return $this->soumisTaxeApprentissageAvecMajoration;
    }

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
