<?php

namespace QdequippeTech\Silae\Api\Model;

class CompteCollaborateur
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
    protected $identifiant;

    /**
     * @var string|null
     */
    protected $codeCollaborateur;

    /**
     * @var string|null
     */
    protected $accesDroitsFonctionnels;

    /**
     * @var string|null
     */
    protected $accesDroitsFonctionnelsMode;

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
     * @var bool|null
     */
    protected $droitsLimitesEnPaie;

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

    /**
     * @var CompteCollaborateurRoles|null
     */
    protected $roles;

    /**
     * @var string|null
     */
    protected $requeteAccesDossiers;

    /**
     * @var int|null
     */
    protected $niveauConfidentialite;

    /**
     * @var CompteCollaborateurDroits|null
     */
    protected $droits;

    /**
     * @var string|null
     */
    protected $codeAgence;

    /**
     * @var CompteCollaborateurHorairesAcces|null
     */
    protected $horairesAcces;

    /**
     * @var list<int>|null
     */
    protected $affectations;

    /**
     * @var string|null
     */
    protected $domaineInterventionEmetteurDads;

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

    public function getAccesDroitsFonctionnels(): ?string
    {
        return $this->accesDroitsFonctionnels;
    }

    public function setAccesDroitsFonctionnels(?string $accesDroitsFonctionnels): self
    {
        $this->initialized['accesDroitsFonctionnels'] = true;
        $this->accesDroitsFonctionnels = $accesDroitsFonctionnels;

        return $this;
    }

    public function getAccesDroitsFonctionnelsMode(): ?string
    {
        return $this->accesDroitsFonctionnelsMode;
    }

    public function setAccesDroitsFonctionnelsMode(?string $accesDroitsFonctionnelsMode): self
    {
        $this->initialized['accesDroitsFonctionnelsMode'] = true;
        $this->accesDroitsFonctionnelsMode = $accesDroitsFonctionnelsMode;

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

    public function getDroitsLimitesEnPaie(): ?bool
    {
        return $this->droitsLimitesEnPaie;
    }

    public function setDroitsLimitesEnPaie(?bool $droitsLimitesEnPaie): self
    {
        $this->initialized['droitsLimitesEnPaie'] = true;
        $this->droitsLimitesEnPaie = $droitsLimitesEnPaie;

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

    public function getRoles(): ?CompteCollaborateurRoles
    {
        return $this->roles;
    }

    public function setRoles(?CompteCollaborateurRoles $roles): self
    {
        $this->initialized['roles'] = true;
        $this->roles = $roles;

        return $this;
    }

    public function getRequeteAccesDossiers(): ?string
    {
        return $this->requeteAccesDossiers;
    }

    public function setRequeteAccesDossiers(?string $requeteAccesDossiers): self
    {
        $this->initialized['requeteAccesDossiers'] = true;
        $this->requeteAccesDossiers = $requeteAccesDossiers;

        return $this;
    }

    public function getNiveauConfidentialite(): ?int
    {
        return $this->niveauConfidentialite;
    }

    public function setNiveauConfidentialite(?int $niveauConfidentialite): self
    {
        $this->initialized['niveauConfidentialite'] = true;
        $this->niveauConfidentialite = $niveauConfidentialite;

        return $this;
    }

    public function getDroits(): ?CompteCollaborateurDroits
    {
        return $this->droits;
    }

    public function setDroits(?CompteCollaborateurDroits $droits): self
    {
        $this->initialized['droits'] = true;
        $this->droits = $droits;

        return $this;
    }

    public function getCodeAgence(): ?string
    {
        return $this->codeAgence;
    }

    public function setCodeAgence(?string $codeAgence): self
    {
        $this->initialized['codeAgence'] = true;
        $this->codeAgence = $codeAgence;

        return $this;
    }

    public function getHorairesAcces(): ?CompteCollaborateurHorairesAcces
    {
        return $this->horairesAcces;
    }

    public function setHorairesAcces(?CompteCollaborateurHorairesAcces $horairesAcces): self
    {
        $this->initialized['horairesAcces'] = true;
        $this->horairesAcces = $horairesAcces;

        return $this;
    }

    /**
     * @return list<int>|null
     */
    public function getAffectations(): ?array
    {
        return $this->affectations;
    }

    /**
     * @param list<int>|null $affectations
     */
    public function setAffectations(?array $affectations): self
    {
        $this->initialized['affectations'] = true;
        $this->affectations = $affectations;

        return $this;
    }

    public function getDomaineInterventionEmetteurDads(): ?string
    {
        return $this->domaineInterventionEmetteurDads;
    }

    public function setDomaineInterventionEmetteurDads(?string $domaineInterventionEmetteurDads): self
    {
        $this->initialized['domaineInterventionEmetteurDads'] = true;
        $this->domaineInterventionEmetteurDads = $domaineInterventionEmetteurDads;

        return $this;
    }
}
