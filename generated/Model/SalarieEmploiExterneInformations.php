<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieEmploiExterneInformations
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
     * @var int|null
     */
    protected $identifiantEmploi;

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
    protected $intituleEmploi;

    /**
     * @var string|null
     */
    protected $motif;

    /**
     * @var string|null
     */
    protected $codeSociete;

    /**
     * @var string|null
     */
    protected $nomInterneEtablissement;

    public function getIdentifiantEmploi(): ?int
    {
        return $this->identifiantEmploi;
    }

    public function setIdentifiantEmploi(?int $identifiantEmploi): self
    {
        $this->initialized['identifiantEmploi'] = true;
        $this->identifiantEmploi = $identifiantEmploi;

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

    public function getIntituleEmploi(): ?string
    {
        return $this->intituleEmploi;
    }

    public function setIntituleEmploi(?string $intituleEmploi): self
    {
        $this->initialized['intituleEmploi'] = true;
        $this->intituleEmploi = $intituleEmploi;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(?string $motif): self
    {
        $this->initialized['motif'] = true;
        $this->motif = $motif;

        return $this;
    }

    public function getCodeSociete(): ?string
    {
        return $this->codeSociete;
    }

    public function setCodeSociete(?string $codeSociete): self
    {
        $this->initialized['codeSociete'] = true;
        $this->codeSociete = $codeSociete;

        return $this;
    }

    public function getNomInterneEtablissement(): ?string
    {
        return $this->nomInterneEtablissement;
    }

    public function setNomInterneEtablissement(?string $nomInterneEtablissement): self
    {
        $this->initialized['nomInterneEtablissement'] = true;
        $this->nomInterneEtablissement = $nomInterneEtablissement;

        return $this;
    }
}
