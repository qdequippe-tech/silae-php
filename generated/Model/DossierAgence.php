<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class DossierAgence
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
    protected $raisonSociale;

    /**
     * @var string|null
     */
    protected $siret;

    /**
     * @var string|null
     */
    protected $groupe;

    /**
     * @var \DateTime|null
     */
    protected $dateCreation;

    /**
     * @var bool|null
     */
    protected $dossierInterne;

    /**
     * @var bool|null
     */
    protected $miseADisposition;

    /**
     * @var string|null
     */
    protected $referenceFacturation;

    /**
     * @var string|null
     */
    protected $numeroInterne;

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

    public function getRaisonSociale(): ?string
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale(?string $raisonSociale): self
    {
        $this->initialized['raisonSociale'] = true;
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(?string $siret): self
    {
        $this->initialized['siret'] = true;
        $this->siret = $siret;

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

    public function getDateCreation(): ?\DateTime
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTime $dateCreation): self
    {
        $this->initialized['dateCreation'] = true;
        $this->dateCreation = $dateCreation;

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
}
