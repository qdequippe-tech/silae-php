<?php

namespace QdequippeTech\Silae\Api\Model;

class UtilisateurCollaborateur
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
    protected $codeCollaborateur;

    /**
     * @var bool|null
     */
    protected $bCivilite;

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
    protected $bTelPortable;

    /**
     * @var string|null
     */
    protected $telPortable;

    /**
     * @var bool|null
     */
    protected $bTelBureau;

    /**
     * @var string|null
     */
    protected $telBureau;

    /**
     * @var bool|null
     */
    protected $bTelDomicile;

    /**
     * @var string|null
     */
    protected $telDomicile;

    /**
     * @var bool|null
     */
    protected $bMail;

    /**
     * @var string|null
     */
    protected $mail;

    /**
     * @var bool|null
     */
    protected $bCodeAgence;

    /**
     * @var string|null
     */
    protected $codeAgence;

    /**
     * @var bool|null
     */
    protected $bAffectations;

    /**
     * @var bool|null
     */
    protected $affectation1;

    /**
     * @var bool|null
     */
    protected $affectation2;

    /**
     * @var bool|null
     */
    protected $affectation3;

    /**
     * @var bool|null
     */
    protected $affectation4;

    /**
     * @var bool|null
     */
    protected $affectation5;

    /**
     * @var bool|null
     */
    protected $affectation6;

    /**
     * @var bool|null
     */
    protected $affectation7;

    /**
     * @var bool|null
     */
    protected $affectation8;

    /**
     * @var bool|null
     */
    protected $affectation9;

    /**
     * @var string|null
     */
    protected $identifiant;

    /**
     * @var string|null
     */
    protected $ancienMotDePasse;

    /**
     * @var string|null
     */
    protected $motDePasse;

    /**
     * @var \DateTime|null
     */
    protected $debutValidite;

    /**
     * @var \DateTime|null
     */
    protected $finValidite;

    /**
     * @var bool|null
     */
    protected $bDateEntree;

    /**
     * @var \DateTime|null
     */
    protected $dateEntree;

    /**
     * @var bool|null
     */
    protected $bDateSortie;

    /**
     * @var \DateTime|null
     */
    protected $dateSortie;

    /**
     * @var bool|null
     */
    protected $ongletProduction;

    /**
     * @var bool|null
     */
    protected $ongletGestionInterne;

    /**
     * @var bool|null
     */
    protected $ongletGestionInterneSimplifiee;

    /**
     * @var bool|null
     */
    protected $ongletParametragePaie;

    /**
     * @var bool|null
     */
    protected $ongletParametrageCompta;

    /**
     * @var bool|null
     */
    protected $ongletRobotDePaie;

    /**
     * @var bool|null
     */
    protected $ongletOutils;

    /**
     * @var bool|null
     */
    protected $ongletAnalyseActivitePaie;

    /**
     * @var bool|null
     */
    protected $ongletAnalyseActiviteCompta;

    /**
     * @var bool|null
     */
    protected $restrictionPaieFicheSocieteEtatDossier;

    /**
     * @var int|null
     */
    protected $niveauConfidentialiteSalarie;

    /**
     * @var bool|null
     */
    protected $droitsLimitesPaie;

    /**
     * @var bool|null
     */
    protected $droitsLimitesCompta;

    /**
     * @var string|null
     */
    protected $listesCollaborateursDroits;

    /**
     * @var string|null
     */
    protected $requeteDroits;

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

    public function getBCivilite(): ?bool
    {
        return $this->bCivilite;
    }

    public function setBCivilite(?bool $bCivilite): self
    {
        $this->initialized['bCivilite'] = true;
        $this->bCivilite = $bCivilite;

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

    public function getBTelPortable(): ?bool
    {
        return $this->bTelPortable;
    }

    public function setBTelPortable(?bool $bTelPortable): self
    {
        $this->initialized['bTelPortable'] = true;
        $this->bTelPortable = $bTelPortable;

        return $this;
    }

    public function getTelPortable(): ?string
    {
        return $this->telPortable;
    }

    public function setTelPortable(?string $telPortable): self
    {
        $this->initialized['telPortable'] = true;
        $this->telPortable = $telPortable;

        return $this;
    }

    public function getBTelBureau(): ?bool
    {
        return $this->bTelBureau;
    }

    public function setBTelBureau(?bool $bTelBureau): self
    {
        $this->initialized['bTelBureau'] = true;
        $this->bTelBureau = $bTelBureau;

        return $this;
    }

    public function getTelBureau(): ?string
    {
        return $this->telBureau;
    }

    public function setTelBureau(?string $telBureau): self
    {
        $this->initialized['telBureau'] = true;
        $this->telBureau = $telBureau;

        return $this;
    }

    public function getBTelDomicile(): ?bool
    {
        return $this->bTelDomicile;
    }

    public function setBTelDomicile(?bool $bTelDomicile): self
    {
        $this->initialized['bTelDomicile'] = true;
        $this->bTelDomicile = $bTelDomicile;

        return $this;
    }

    public function getTelDomicile(): ?string
    {
        return $this->telDomicile;
    }

    public function setTelDomicile(?string $telDomicile): self
    {
        $this->initialized['telDomicile'] = true;
        $this->telDomicile = $telDomicile;

        return $this;
    }

    public function getBMail(): ?bool
    {
        return $this->bMail;
    }

    public function setBMail(?bool $bMail): self
    {
        $this->initialized['bMail'] = true;
        $this->bMail = $bMail;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->initialized['mail'] = true;
        $this->mail = $mail;

        return $this;
    }

    public function getBCodeAgence(): ?bool
    {
        return $this->bCodeAgence;
    }

    public function setBCodeAgence(?bool $bCodeAgence): self
    {
        $this->initialized['bCodeAgence'] = true;
        $this->bCodeAgence = $bCodeAgence;

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

    public function getBAffectations(): ?bool
    {
        return $this->bAffectations;
    }

    public function setBAffectations(?bool $bAffectations): self
    {
        $this->initialized['bAffectations'] = true;
        $this->bAffectations = $bAffectations;

        return $this;
    }

    public function getAffectation1(): ?bool
    {
        return $this->affectation1;
    }

    public function setAffectation1(?bool $affectation1): self
    {
        $this->initialized['affectation1'] = true;
        $this->affectation1 = $affectation1;

        return $this;
    }

    public function getAffectation2(): ?bool
    {
        return $this->affectation2;
    }

    public function setAffectation2(?bool $affectation2): self
    {
        $this->initialized['affectation2'] = true;
        $this->affectation2 = $affectation2;

        return $this;
    }

    public function getAffectation3(): ?bool
    {
        return $this->affectation3;
    }

    public function setAffectation3(?bool $affectation3): self
    {
        $this->initialized['affectation3'] = true;
        $this->affectation3 = $affectation3;

        return $this;
    }

    public function getAffectation4(): ?bool
    {
        return $this->affectation4;
    }

    public function setAffectation4(?bool $affectation4): self
    {
        $this->initialized['affectation4'] = true;
        $this->affectation4 = $affectation4;

        return $this;
    }

    public function getAffectation5(): ?bool
    {
        return $this->affectation5;
    }

    public function setAffectation5(?bool $affectation5): self
    {
        $this->initialized['affectation5'] = true;
        $this->affectation5 = $affectation5;

        return $this;
    }

    public function getAffectation6(): ?bool
    {
        return $this->affectation6;
    }

    public function setAffectation6(?bool $affectation6): self
    {
        $this->initialized['affectation6'] = true;
        $this->affectation6 = $affectation6;

        return $this;
    }

    public function getAffectation7(): ?bool
    {
        return $this->affectation7;
    }

    public function setAffectation7(?bool $affectation7): self
    {
        $this->initialized['affectation7'] = true;
        $this->affectation7 = $affectation7;

        return $this;
    }

    public function getAffectation8(): ?bool
    {
        return $this->affectation8;
    }

    public function setAffectation8(?bool $affectation8): self
    {
        $this->initialized['affectation8'] = true;
        $this->affectation8 = $affectation8;

        return $this;
    }

    public function getAffectation9(): ?bool
    {
        return $this->affectation9;
    }

    public function setAffectation9(?bool $affectation9): self
    {
        $this->initialized['affectation9'] = true;
        $this->affectation9 = $affectation9;

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

    public function getAncienMotDePasse(): ?string
    {
        return $this->ancienMotDePasse;
    }

    public function setAncienMotDePasse(?string $ancienMotDePasse): self
    {
        $this->initialized['ancienMotDePasse'] = true;
        $this->ancienMotDePasse = $ancienMotDePasse;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(?string $motDePasse): self
    {
        $this->initialized['motDePasse'] = true;
        $this->motDePasse = $motDePasse;

        return $this;
    }

    public function getDebutValidite(): ?\DateTime
    {
        return $this->debutValidite;
    }

    public function setDebutValidite(?\DateTime $debutValidite): self
    {
        $this->initialized['debutValidite'] = true;
        $this->debutValidite = $debutValidite;

        return $this;
    }

    public function getFinValidite(): ?\DateTime
    {
        return $this->finValidite;
    }

    public function setFinValidite(?\DateTime $finValidite): self
    {
        $this->initialized['finValidite'] = true;
        $this->finValidite = $finValidite;

        return $this;
    }

    public function getBDateEntree(): ?bool
    {
        return $this->bDateEntree;
    }

    public function setBDateEntree(?bool $bDateEntree): self
    {
        $this->initialized['bDateEntree'] = true;
        $this->bDateEntree = $bDateEntree;

        return $this;
    }

    public function getDateEntree(): ?\DateTime
    {
        return $this->dateEntree;
    }

    public function setDateEntree(?\DateTime $dateEntree): self
    {
        $this->initialized['dateEntree'] = true;
        $this->dateEntree = $dateEntree;

        return $this;
    }

    public function getBDateSortie(): ?bool
    {
        return $this->bDateSortie;
    }

    public function setBDateSortie(?bool $bDateSortie): self
    {
        $this->initialized['bDateSortie'] = true;
        $this->bDateSortie = $bDateSortie;

        return $this;
    }

    public function getDateSortie(): ?\DateTime
    {
        return $this->dateSortie;
    }

    public function setDateSortie(?\DateTime $dateSortie): self
    {
        $this->initialized['dateSortie'] = true;
        $this->dateSortie = $dateSortie;

        return $this;
    }

    public function getOngletProduction(): ?bool
    {
        return $this->ongletProduction;
    }

    public function setOngletProduction(?bool $ongletProduction): self
    {
        $this->initialized['ongletProduction'] = true;
        $this->ongletProduction = $ongletProduction;

        return $this;
    }

    public function getOngletGestionInterne(): ?bool
    {
        return $this->ongletGestionInterne;
    }

    public function setOngletGestionInterne(?bool $ongletGestionInterne): self
    {
        $this->initialized['ongletGestionInterne'] = true;
        $this->ongletGestionInterne = $ongletGestionInterne;

        return $this;
    }

    public function getOngletGestionInterneSimplifiee(): ?bool
    {
        return $this->ongletGestionInterneSimplifiee;
    }

    public function setOngletGestionInterneSimplifiee(?bool $ongletGestionInterneSimplifiee): self
    {
        $this->initialized['ongletGestionInterneSimplifiee'] = true;
        $this->ongletGestionInterneSimplifiee = $ongletGestionInterneSimplifiee;

        return $this;
    }

    public function getOngletParametragePaie(): ?bool
    {
        return $this->ongletParametragePaie;
    }

    public function setOngletParametragePaie(?bool $ongletParametragePaie): self
    {
        $this->initialized['ongletParametragePaie'] = true;
        $this->ongletParametragePaie = $ongletParametragePaie;

        return $this;
    }

    public function getOngletParametrageCompta(): ?bool
    {
        return $this->ongletParametrageCompta;
    }

    public function setOngletParametrageCompta(?bool $ongletParametrageCompta): self
    {
        $this->initialized['ongletParametrageCompta'] = true;
        $this->ongletParametrageCompta = $ongletParametrageCompta;

        return $this;
    }

    public function getOngletRobotDePaie(): ?bool
    {
        return $this->ongletRobotDePaie;
    }

    public function setOngletRobotDePaie(?bool $ongletRobotDePaie): self
    {
        $this->initialized['ongletRobotDePaie'] = true;
        $this->ongletRobotDePaie = $ongletRobotDePaie;

        return $this;
    }

    public function getOngletOutils(): ?bool
    {
        return $this->ongletOutils;
    }

    public function setOngletOutils(?bool $ongletOutils): self
    {
        $this->initialized['ongletOutils'] = true;
        $this->ongletOutils = $ongletOutils;

        return $this;
    }

    public function getOngletAnalyseActivitePaie(): ?bool
    {
        return $this->ongletAnalyseActivitePaie;
    }

    public function setOngletAnalyseActivitePaie(?bool $ongletAnalyseActivitePaie): self
    {
        $this->initialized['ongletAnalyseActivitePaie'] = true;
        $this->ongletAnalyseActivitePaie = $ongletAnalyseActivitePaie;

        return $this;
    }

    public function getOngletAnalyseActiviteCompta(): ?bool
    {
        return $this->ongletAnalyseActiviteCompta;
    }

    public function setOngletAnalyseActiviteCompta(?bool $ongletAnalyseActiviteCompta): self
    {
        $this->initialized['ongletAnalyseActiviteCompta'] = true;
        $this->ongletAnalyseActiviteCompta = $ongletAnalyseActiviteCompta;

        return $this;
    }

    public function getRestrictionPaieFicheSocieteEtatDossier(): ?bool
    {
        return $this->restrictionPaieFicheSocieteEtatDossier;
    }

    public function setRestrictionPaieFicheSocieteEtatDossier(?bool $restrictionPaieFicheSocieteEtatDossier): self
    {
        $this->initialized['restrictionPaieFicheSocieteEtatDossier'] = true;
        $this->restrictionPaieFicheSocieteEtatDossier = $restrictionPaieFicheSocieteEtatDossier;

        return $this;
    }

    public function getNiveauConfidentialiteSalarie(): ?int
    {
        return $this->niveauConfidentialiteSalarie;
    }

    public function setNiveauConfidentialiteSalarie(?int $niveauConfidentialiteSalarie): self
    {
        $this->initialized['niveauConfidentialiteSalarie'] = true;
        $this->niveauConfidentialiteSalarie = $niveauConfidentialiteSalarie;

        return $this;
    }

    public function getDroitsLimitesPaie(): ?bool
    {
        return $this->droitsLimitesPaie;
    }

    public function setDroitsLimitesPaie(?bool $droitsLimitesPaie): self
    {
        $this->initialized['droitsLimitesPaie'] = true;
        $this->droitsLimitesPaie = $droitsLimitesPaie;

        return $this;
    }

    public function getDroitsLimitesCompta(): ?bool
    {
        return $this->droitsLimitesCompta;
    }

    public function setDroitsLimitesCompta(?bool $droitsLimitesCompta): self
    {
        $this->initialized['droitsLimitesCompta'] = true;
        $this->droitsLimitesCompta = $droitsLimitesCompta;

        return $this;
    }

    public function getListesCollaborateursDroits(): ?string
    {
        return $this->listesCollaborateursDroits;
    }

    public function setListesCollaborateursDroits(?string $listesCollaborateursDroits): self
    {
        $this->initialized['listesCollaborateursDroits'] = true;
        $this->listesCollaborateursDroits = $listesCollaborateursDroits;

        return $this;
    }

    public function getRequeteDroits(): ?string
    {
        return $this->requeteDroits;
    }

    public function setRequeteDroits(?string $requeteDroits): self
    {
        $this->initialized['requeteDroits'] = true;
        $this->requeteDroits = $requeteDroits;

        return $this;
    }
}
