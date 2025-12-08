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
     * Accès aux droits fonctionnels             SILAE_SYS.DROIT.DRT_SysDroitsSurCollaborateurs.
     *
     * @var string|null
     */
    protected $accesDroitsFonctionnels;

    /**
     * Mode d'accès aux droits fonctionnels             SILAE_SYS.DROIT.DRT_SysDroitsSurCollaborateursMode.
     *
     * @var string|null
     */
    protected $accesDroitsFonctionnelsMode;

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
     * Droits limités en paie             SILAE_SYS.UTILISATEUR.UTI_DroitsLimitesSurPaie.
     *
     * @var bool|null
     */
    protected $droitsLimitesEnPaie;

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
     * @var CompteCollaborateurRoles|null
     */
    protected $roles;

    /**
     * Requête pour la limitation des accès aux dossiers             SILAE_SYS.DROIT.DRT_SysDroitsDossiers.
     *
     * @var string|null
     */
    protected $requeteAccesDossiers;

    /**
     * Niveau de confidentialité du collaborateur sur l'intervalle [0..9]             SILAE_SYS.UTILISATEUR.UTI_NivConfSal.
     *
     * @var int|null
     */
    protected $niveauConfidentialite;

    /**
     * @var CompteCollaborateurDroits|null
     */
    protected $droits;

    /**
     * Code de l'agence du collaborateur             SILAE_DOM.COLLABORATEUR.COL_CodeAgence.
     *
     * @var string|null
     */
    protected $codeAgence;

    /**
     * @var CompteCollaborateurHorairesAcces|null
     */
    protected $horairesAcces;

    /**
     * Activation des affectations du collaborateur             SILAE_DOM.COLLABORATEUR.COL_RG[1..9].
     *
     * @var list<int>|null
     */
    protected $affectations;

    /**
     * Domaine d'intervention émission DADS             SILAE_DOM.COLLABORATEUR.COL_DomaineInterventionEmetteurDADS.
     *
     * @var string|null
     */
    protected $domaineInterventionEmetteurDads;

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
     * Accès aux droits fonctionnels             SILAE_SYS.DROIT.DRT_SysDroitsSurCollaborateurs.
     */
    public function getAccesDroitsFonctionnels(): ?string
    {
        return $this->accesDroitsFonctionnels;
    }

    /**
     * Accès aux droits fonctionnels             SILAE_SYS.DROIT.DRT_SysDroitsSurCollaborateurs.
     */
    public function setAccesDroitsFonctionnels(?string $accesDroitsFonctionnels): self
    {
        $this->initialized['accesDroitsFonctionnels'] = true;
        $this->accesDroitsFonctionnels = $accesDroitsFonctionnels;

        return $this;
    }

    /**
     * Mode d'accès aux droits fonctionnels             SILAE_SYS.DROIT.DRT_SysDroitsSurCollaborateursMode.
     */
    public function getAccesDroitsFonctionnelsMode(): ?string
    {
        return $this->accesDroitsFonctionnelsMode;
    }

    /**
     * Mode d'accès aux droits fonctionnels             SILAE_SYS.DROIT.DRT_SysDroitsSurCollaborateursMode.
     */
    public function setAccesDroitsFonctionnelsMode(?string $accesDroitsFonctionnelsMode): self
    {
        $this->initialized['accesDroitsFonctionnelsMode'] = true;
        $this->accesDroitsFonctionnelsMode = $accesDroitsFonctionnelsMode;

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
     * Droits limités en paie             SILAE_SYS.UTILISATEUR.UTI_DroitsLimitesSurPaie.
     */
    public function getDroitsLimitesEnPaie(): ?bool
    {
        return $this->droitsLimitesEnPaie;
    }

    /**
     * Droits limités en paie             SILAE_SYS.UTILISATEUR.UTI_DroitsLimitesSurPaie.
     */
    public function setDroitsLimitesEnPaie(?bool $droitsLimitesEnPaie): self
    {
        $this->initialized['droitsLimitesEnPaie'] = true;
        $this->droitsLimitesEnPaie = $droitsLimitesEnPaie;

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

    /**
     * Requête pour la limitation des accès aux dossiers             SILAE_SYS.DROIT.DRT_SysDroitsDossiers.
     */
    public function getRequeteAccesDossiers(): ?string
    {
        return $this->requeteAccesDossiers;
    }

    /**
     * Requête pour la limitation des accès aux dossiers             SILAE_SYS.DROIT.DRT_SysDroitsDossiers.
     */
    public function setRequeteAccesDossiers(?string $requeteAccesDossiers): self
    {
        $this->initialized['requeteAccesDossiers'] = true;
        $this->requeteAccesDossiers = $requeteAccesDossiers;

        return $this;
    }

    /**
     * Niveau de confidentialité du collaborateur sur l'intervalle [0..9]             SILAE_SYS.UTILISATEUR.UTI_NivConfSal.
     */
    public function getNiveauConfidentialite(): ?int
    {
        return $this->niveauConfidentialite;
    }

    /**
     * Niveau de confidentialité du collaborateur sur l'intervalle [0..9]             SILAE_SYS.UTILISATEUR.UTI_NivConfSal.
     */
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

    /**
     * Code de l'agence du collaborateur             SILAE_DOM.COLLABORATEUR.COL_CodeAgence.
     */
    public function getCodeAgence(): ?string
    {
        return $this->codeAgence;
    }

    /**
     * Code de l'agence du collaborateur             SILAE_DOM.COLLABORATEUR.COL_CodeAgence.
     */
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
     * Activation des affectations du collaborateur             SILAE_DOM.COLLABORATEUR.COL_RG[1..9].
     *
     * @return list<int>|null
     */
    public function getAffectations(): ?array
    {
        return $this->affectations;
    }

    /**
     * Activation des affectations du collaborateur             SILAE_DOM.COLLABORATEUR.COL_RG[1..9].
     *
     * @param list<int>|null $affectations
     */
    public function setAffectations(?array $affectations): self
    {
        $this->initialized['affectations'] = true;
        $this->affectations = $affectations;

        return $this;
    }

    /**
     * Domaine d'intervention émission DADS             SILAE_DOM.COLLABORATEUR.COL_DomaineInterventionEmetteurDADS.
     */
    public function getDomaineInterventionEmetteurDads(): ?string
    {
        return $this->domaineInterventionEmetteurDads;
    }

    /**
     * Domaine d'intervention émission DADS             SILAE_DOM.COLLABORATEUR.COL_DomaineInterventionEmetteurDADS.
     */
    public function setDomaineInterventionEmetteurDads(?string $domaineInterventionEmetteurDads): self
    {
        $this->initialized['domaineInterventionEmetteurDads'] = true;
        $this->domaineInterventionEmetteurDads = $domaineInterventionEmetteurDads;

        return $this;
    }
}
