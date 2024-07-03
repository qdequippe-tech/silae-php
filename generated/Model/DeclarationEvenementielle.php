<?php

namespace QdequippeTech\Silae\Api\Model;

class DeclarationEvenementielle
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
    protected $typeDeclaration;

    /**
     * @var int|null
     */
    protected $etatDeclaration;

    /**
     * @var int|null
     */
    protected $etatEnvoi;

    /**
     * @var string|null
     */
    protected $libelleEtat;

    /**
     * @var string|null
     */
    protected $matricule;

    /**
     * @var string|null
     */
    protected $nomSalarie;

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
    protected $codeAbsence;

    /**
     * @var string|null
     */
    protected $libelleAbsence;

    public function getTypeDeclaration(): ?string
    {
        return $this->typeDeclaration;
    }

    public function setTypeDeclaration(?string $typeDeclaration): self
    {
        $this->initialized['typeDeclaration'] = true;
        $this->typeDeclaration = $typeDeclaration;

        return $this;
    }

    public function getEtatDeclaration(): ?int
    {
        return $this->etatDeclaration;
    }

    public function setEtatDeclaration(?int $etatDeclaration): self
    {
        $this->initialized['etatDeclaration'] = true;
        $this->etatDeclaration = $etatDeclaration;

        return $this;
    }

    public function getEtatEnvoi(): ?int
    {
        return $this->etatEnvoi;
    }

    public function setEtatEnvoi(?int $etatEnvoi): self
    {
        $this->initialized['etatEnvoi'] = true;
        $this->etatEnvoi = $etatEnvoi;

        return $this;
    }

    public function getLibelleEtat(): ?string
    {
        return $this->libelleEtat;
    }

    public function setLibelleEtat(?string $libelleEtat): self
    {
        $this->initialized['libelleEtat'] = true;
        $this->libelleEtat = $libelleEtat;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->initialized['matricule'] = true;
        $this->matricule = $matricule;

        return $this;
    }

    public function getNomSalarie(): ?string
    {
        return $this->nomSalarie;
    }

    public function setNomSalarie(?string $nomSalarie): self
    {
        $this->initialized['nomSalarie'] = true;
        $this->nomSalarie = $nomSalarie;

        return $this;
    }

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

    public function getCodeAbsence(): ?string
    {
        return $this->codeAbsence;
    }

    public function setCodeAbsence(?string $codeAbsence): self
    {
        $this->initialized['codeAbsence'] = true;
        $this->codeAbsence = $codeAbsence;

        return $this;
    }

    public function getLibelleAbsence(): ?string
    {
        return $this->libelleAbsence;
    }

    public function setLibelleAbsence(?string $libelleAbsence): self
    {
        $this->initialized['libelleAbsence'] = true;
        $this->libelleAbsence = $libelleAbsence;

        return $this;
    }
}
