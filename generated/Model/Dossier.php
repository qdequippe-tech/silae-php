<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class Dossier
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
    protected $numeroDossier;

    /**
     * @var string|null
     */
    protected $numeroDossierModele;

    /**
     * @var \DateTime|null
     */
    protected $dateDebutMontage;

    /**
     * @var string|null
     */
    protected $codeAgence;

    /**
     * @var int|null
     */
    protected $longueurMatricule;

    /**
     * @var int|null
     */
    protected $employeurCivilite;

    /**
     * @var string|null
     */
    protected $employeurNom;

    /**
     * @var string|null
     */
    protected $employeurPrenom;

    /**
     * @var int|null
     */
    protected $employeurQualite;

    /**
     * @var string|null
     */
    protected $employeurQualiteAutre;

    /**
     * @var string|null
     */
    protected $groupe;

    /**
     * @var string|null
     */
    protected $numeroInterne;

    /**
     * @var bool|null
     */
    protected $miseADisposition;

    /**
     * @var bool|null
     */
    protected $bMiseADisposition;

    /**
     * @var bool|null
     */
    protected $dossierInterne;

    /**
     * @var string|null
     */
    protected $referenceFacturation;

    /**
     * @var list<Etablissement>|null
     */
    protected $etablissements;

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

    public function getNumeroDossierModele(): ?string
    {
        return $this->numeroDossierModele;
    }

    public function setNumeroDossierModele(?string $numeroDossierModele): self
    {
        $this->initialized['numeroDossierModele'] = true;
        $this->numeroDossierModele = $numeroDossierModele;

        return $this;
    }

    public function getDateDebutMontage(): ?\DateTime
    {
        return $this->dateDebutMontage;
    }

    public function setDateDebutMontage(?\DateTime $dateDebutMontage): self
    {
        $this->initialized['dateDebutMontage'] = true;
        $this->dateDebutMontage = $dateDebutMontage;

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

    public function getLongueurMatricule(): ?int
    {
        return $this->longueurMatricule;
    }

    public function setLongueurMatricule(?int $longueurMatricule): self
    {
        $this->initialized['longueurMatricule'] = true;
        $this->longueurMatricule = $longueurMatricule;

        return $this;
    }

    public function getEmployeurCivilite(): ?int
    {
        return $this->employeurCivilite;
    }

    public function setEmployeurCivilite(?int $employeurCivilite): self
    {
        $this->initialized['employeurCivilite'] = true;
        $this->employeurCivilite = $employeurCivilite;

        return $this;
    }

    public function getEmployeurNom(): ?string
    {
        return $this->employeurNom;
    }

    public function setEmployeurNom(?string $employeurNom): self
    {
        $this->initialized['employeurNom'] = true;
        $this->employeurNom = $employeurNom;

        return $this;
    }

    public function getEmployeurPrenom(): ?string
    {
        return $this->employeurPrenom;
    }

    public function setEmployeurPrenom(?string $employeurPrenom): self
    {
        $this->initialized['employeurPrenom'] = true;
        $this->employeurPrenom = $employeurPrenom;

        return $this;
    }

    public function getEmployeurQualite(): ?int
    {
        return $this->employeurQualite;
    }

    public function setEmployeurQualite(?int $employeurQualite): self
    {
        $this->initialized['employeurQualite'] = true;
        $this->employeurQualite = $employeurQualite;

        return $this;
    }

    public function getEmployeurQualiteAutre(): ?string
    {
        return $this->employeurQualiteAutre;
    }

    public function setEmployeurQualiteAutre(?string $employeurQualiteAutre): self
    {
        $this->initialized['employeurQualiteAutre'] = true;
        $this->employeurQualiteAutre = $employeurQualiteAutre;

        return $this;
    }

    public function getGroupe(): ?string
    {
        return $this->groupe;
    }

    public function setGroupe(?string $groupe): self
    {
        $this->initialized['groupe'] = true;
        $this->groupe = $groupe;

        return $this;
    }

    public function getNumeroInterne(): ?string
    {
        return $this->numeroInterne;
    }

    public function setNumeroInterne(?string $numeroInterne): self
    {
        $this->initialized['numeroInterne'] = true;
        $this->numeroInterne = $numeroInterne;

        return $this;
    }

    public function getMiseADisposition(): ?bool
    {
        return $this->miseADisposition;
    }

    public function setMiseADisposition(?bool $miseADisposition): self
    {
        $this->initialized['miseADisposition'] = true;
        $this->miseADisposition = $miseADisposition;

        return $this;
    }

    public function getBMiseADisposition(): ?bool
    {
        return $this->bMiseADisposition;
    }

    public function setBMiseADisposition(?bool $bMiseADisposition): self
    {
        $this->initialized['bMiseADisposition'] = true;
        $this->bMiseADisposition = $bMiseADisposition;

        return $this;
    }

    public function getDossierInterne(): ?bool
    {
        return $this->dossierInterne;
    }

    public function setDossierInterne(?bool $dossierInterne): self
    {
        $this->initialized['dossierInterne'] = true;
        $this->dossierInterne = $dossierInterne;

        return $this;
    }

    public function getReferenceFacturation(): ?string
    {
        return $this->referenceFacturation;
    }

    public function setReferenceFacturation(?string $referenceFacturation): self
    {
        $this->initialized['referenceFacturation'] = true;
        $this->referenceFacturation = $referenceFacturation;

        return $this;
    }

    /**
     * @return list<Etablissement>|null
     */
    public function getEtablissements(): ?array
    {
        return $this->etablissements;
    }

    /**
     * @param list<Etablissement>|null $etablissements
     */
    public function setEtablissements(?array $etablissements): self
    {
        $this->initialized['etablissements'] = true;
        $this->etablissements = $etablissements;

        return $this;
    }
}
