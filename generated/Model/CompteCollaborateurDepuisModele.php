<?php

namespace QdequippeTech\Silae\Api\Model;

class CompteCollaborateurDepuisModele
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
    protected $nomModele;

    /**
     * @var string|null
     */
    protected $identifiant;

    /**
     * @var string|null
     */
    protected $codeCollaborateur;

    /**
     * @var int|null
     */
    protected $civilite;

    /**
     * @var string|null
     */
    protected $nomNaissance;

    /**
     * @var string|null
     */
    protected $nomMarital;

    /**
     * @var string|null
     */
    protected $nomUsuel;

    /**
     * @var string|null
     */
    protected $prenom;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $telephonePortable;

    /**
     * @var string|null
     */
    protected $telephoneBureau;

    /**
     * @var string|null
     */
    protected $telephoneDomicile;

    /**
     * @var \DateTime|null
     */
    protected $dateDebutValidite;

    /**
     * @var \DateTime|null
     */
    protected $dateFinValidite;

    public function getNomModele(): ?string
    {
        return $this->nomModele;
    }

    public function setNomModele(?string $nomModele): self
    {
        $this->initialized['nomModele'] = true;
        $this->nomModele = $nomModele;

        return $this;
    }

    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }

    public function setIdentifiant(?string $identifiant): self
    {
        $this->initialized['identifiant'] = true;
        $this->identifiant = $identifiant;

        return $this;
    }

    public function getCodeCollaborateur(): ?string
    {
        return $this->codeCollaborateur;
    }

    public function setCodeCollaborateur(?string $codeCollaborateur): self
    {
        $this->initialized['codeCollaborateur'] = true;
        $this->codeCollaborateur = $codeCollaborateur;

        return $this;
    }

    public function getCivilite(): ?int
    {
        return $this->civilite;
    }

    public function setCivilite(?int $civilite): self
    {
        $this->initialized['civilite'] = true;
        $this->civilite = $civilite;

        return $this;
    }

    public function getNomNaissance(): ?string
    {
        return $this->nomNaissance;
    }

    public function setNomNaissance(?string $nomNaissance): self
    {
        $this->initialized['nomNaissance'] = true;
        $this->nomNaissance = $nomNaissance;

        return $this;
    }

    public function getNomMarital(): ?string
    {
        return $this->nomMarital;
    }

    public function setNomMarital(?string $nomMarital): self
    {
        $this->initialized['nomMarital'] = true;
        $this->nomMarital = $nomMarital;

        return $this;
    }

    public function getNomUsuel(): ?string
    {
        return $this->nomUsuel;
    }

    public function setNomUsuel(?string $nomUsuel): self
    {
        $this->initialized['nomUsuel'] = true;
        $this->nomUsuel = $nomUsuel;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    public function getTelephonePortable(): ?string
    {
        return $this->telephonePortable;
    }

    public function setTelephonePortable(?string $telephonePortable): self
    {
        $this->initialized['telephonePortable'] = true;
        $this->telephonePortable = $telephonePortable;

        return $this;
    }

    public function getTelephoneBureau(): ?string
    {
        return $this->telephoneBureau;
    }

    public function setTelephoneBureau(?string $telephoneBureau): self
    {
        $this->initialized['telephoneBureau'] = true;
        $this->telephoneBureau = $telephoneBureau;

        return $this;
    }

    public function getTelephoneDomicile(): ?string
    {
        return $this->telephoneDomicile;
    }

    public function setTelephoneDomicile(?string $telephoneDomicile): self
    {
        $this->initialized['telephoneDomicile'] = true;
        $this->telephoneDomicile = $telephoneDomicile;

        return $this;
    }

    public function getDateDebutValidite(): ?\DateTime
    {
        return $this->dateDebutValidite;
    }

    public function setDateDebutValidite(?\DateTime $dateDebutValidite): self
    {
        $this->initialized['dateDebutValidite'] = true;
        $this->dateDebutValidite = $dateDebutValidite;

        return $this;
    }

    public function getDateFinValidite(): ?\DateTime
    {
        return $this->dateFinValidite;
    }

    public function setDateFinValidite(?\DateTime $dateFinValidite): self
    {
        $this->initialized['dateFinValidite'] = true;
        $this->dateFinValidite = $dateFinValidite;

        return $this;
    }
}
