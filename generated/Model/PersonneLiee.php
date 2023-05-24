<?php

namespace QdequippeTech\Silae\Api\Model;

class PersonneLiee
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
    protected $prenom;
    /**
     * @var string|null
     */
    protected $nomUsuel;
    /**
     * @var int|null
     */
    protected $typeLien;
    /**
     * @var \DateTime|null
     */
    protected $dateNaissance;
    /**
     * @var string|null
     */
    protected $numeroSS;
    /**
     * @var int|null
     */
    protected $sexe;
    /**
     * @var bool|null
     */
    protected $aCharge;

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

    public function getTypeLien(): ?int
    {
        return $this->typeLien;
    }

    public function setTypeLien(?int $typeLien): self
    {
        $this->initialized['typeLien'] = true;
        $this->typeLien = $typeLien;

        return $this;
    }

    public function getDateNaissance(): ?\DateTime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?\DateTime $dateNaissance): self
    {
        $this->initialized['dateNaissance'] = true;
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getNumeroSS(): ?string
    {
        return $this->numeroSS;
    }

    public function setNumeroSS(?string $numeroSS): self
    {
        $this->initialized['numeroSS'] = true;
        $this->numeroSS = $numeroSS;

        return $this;
    }

    public function getSexe(): ?int
    {
        return $this->sexe;
    }

    public function setSexe(?int $sexe): self
    {
        $this->initialized['sexe'] = true;
        $this->sexe = $sexe;

        return $this;
    }

    public function getACharge(): ?bool
    {
        return $this->aCharge;
    }

    public function setACharge(?bool $aCharge): self
    {
        $this->initialized['aCharge'] = true;
        $this->aCharge = $aCharge;

        return $this;
    }
}
