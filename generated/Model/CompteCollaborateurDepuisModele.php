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
     * Nom du modèle à utiliser.
     *
     * @var string|null
     */
    protected $nomModele;

    /**
     * Identifiant/Login.
     *
     * @var string|null
     */
    protected $identifiant;

    /**
     * Code Collaborateur.
     *
     * @var string|null
     */
    protected $codeCollaborateur;

    /**
     * Civilité.
     *
     * @var int|null
     */
    protected $civilite;

    /**
     * Nom de naissance.
     *
     * @var string|null
     */
    protected $nomNaissance;

    /**
     * Nom marital.
     *
     * @var string|null
     */
    protected $nomMarital;

    /**
     * Nom usuel.
     *
     * @var string|null
     */
    protected $nomUsuel;

    /**
     * Prénom.
     *
     * @var string|null
     */
    protected $prenom;

    /**
     * Email.
     *
     * @var string|null
     */
    protected $email;

    /**
     * Téléphone portable.
     *
     * @var string|null
     */
    protected $telephonePortable;

    /**
     * Téléphone bureau.
     *
     * @var string|null
     */
    protected $telephoneBureau;

    /**
     * Téléphone domicile.
     *
     * @var string|null
     */
    protected $telephoneDomicile;

    /**
     * Date début validité.
     *
     * @var \DateTime|null
     */
    protected $dateDebutValidite;

    /**
     * Date fin validité.
     *
     * @var \DateTime|null
     */
    protected $dateFinValidite;

    /**
     * Nom du modèle à utiliser.
     */
    public function getNomModele(): ?string
    {
        return $this->nomModele;
    }

    /**
     * Nom du modèle à utiliser.
     */
    public function setNomModele(?string $nomModele): self
    {
        $this->initialized['nomModele'] = true;
        $this->nomModele = $nomModele;

        return $this;
    }

    /**
     * Identifiant/Login.
     */
    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }

    /**
     * Identifiant/Login.
     */
    public function setIdentifiant(?string $identifiant): self
    {
        $this->initialized['identifiant'] = true;
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Code Collaborateur.
     */
    public function getCodeCollaborateur(): ?string
    {
        return $this->codeCollaborateur;
    }

    /**
     * Code Collaborateur.
     */
    public function setCodeCollaborateur(?string $codeCollaborateur): self
    {
        $this->initialized['codeCollaborateur'] = true;
        $this->codeCollaborateur = $codeCollaborateur;

        return $this;
    }

    /**
     * Civilité.
     */
    public function getCivilite(): ?int
    {
        return $this->civilite;
    }

    /**
     * Civilité.
     */
    public function setCivilite(?int $civilite): self
    {
        $this->initialized['civilite'] = true;
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Nom de naissance.
     */
    public function getNomNaissance(): ?string
    {
        return $this->nomNaissance;
    }

    /**
     * Nom de naissance.
     */
    public function setNomNaissance(?string $nomNaissance): self
    {
        $this->initialized['nomNaissance'] = true;
        $this->nomNaissance = $nomNaissance;

        return $this;
    }

    /**
     * Nom marital.
     */
    public function getNomMarital(): ?string
    {
        return $this->nomMarital;
    }

    /**
     * Nom marital.
     */
    public function setNomMarital(?string $nomMarital): self
    {
        $this->initialized['nomMarital'] = true;
        $this->nomMarital = $nomMarital;

        return $this;
    }

    /**
     * Nom usuel.
     */
    public function getNomUsuel(): ?string
    {
        return $this->nomUsuel;
    }

    /**
     * Nom usuel.
     */
    public function setNomUsuel(?string $nomUsuel): self
    {
        $this->initialized['nomUsuel'] = true;
        $this->nomUsuel = $nomUsuel;

        return $this;
    }

    /**
     * Prénom.
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Prénom.
     */
    public function setPrenom(?string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Email.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Email.
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * Téléphone portable.
     */
    public function getTelephonePortable(): ?string
    {
        return $this->telephonePortable;
    }

    /**
     * Téléphone portable.
     */
    public function setTelephonePortable(?string $telephonePortable): self
    {
        $this->initialized['telephonePortable'] = true;
        $this->telephonePortable = $telephonePortable;

        return $this;
    }

    /**
     * Téléphone bureau.
     */
    public function getTelephoneBureau(): ?string
    {
        return $this->telephoneBureau;
    }

    /**
     * Téléphone bureau.
     */
    public function setTelephoneBureau(?string $telephoneBureau): self
    {
        $this->initialized['telephoneBureau'] = true;
        $this->telephoneBureau = $telephoneBureau;

        return $this;
    }

    /**
     * Téléphone domicile.
     */
    public function getTelephoneDomicile(): ?string
    {
        return $this->telephoneDomicile;
    }

    /**
     * Téléphone domicile.
     */
    public function setTelephoneDomicile(?string $telephoneDomicile): self
    {
        $this->initialized['telephoneDomicile'] = true;
        $this->telephoneDomicile = $telephoneDomicile;

        return $this;
    }

    /**
     * Date début validité.
     */
    public function getDateDebutValidite(): ?\DateTime
    {
        return $this->dateDebutValidite;
    }

    /**
     * Date début validité.
     */
    public function setDateDebutValidite(?\DateTime $dateDebutValidite): self
    {
        $this->initialized['dateDebutValidite'] = true;
        $this->dateDebutValidite = $dateDebutValidite;

        return $this;
    }

    /**
     * Date fin validité.
     */
    public function getDateFinValidite(): ?\DateTime
    {
        return $this->dateFinValidite;
    }

    /**
     * Date fin validité.
     */
    public function setDateFinValidite(?\DateTime $dateFinValidite): self
    {
        $this->initialized['dateFinValidite'] = true;
        $this->dateFinValidite = $dateFinValidite;

        return $this;
    }
}
