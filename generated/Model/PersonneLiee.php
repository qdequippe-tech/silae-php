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

    /**
     * @var \DateTime|null
     */
    protected $dateDeces;

    /**
     * @var bool|null
     */
    protected $handicape;

    /**
     * @var bool|null
     */
    protected $bDateDeces;

    /**
     * @var \DateTime|null
     */
    protected $dateDebutRattachement;

    /**
     * @var bool|null
     */
    protected $bDateDebutRattachement;

    /**
     * @var \DateTime|null
     */
    protected $dateFinRattachement;

    /**
     * @var bool|null
     */
    protected $bDateFinRattachement;

    /**
     * @var string|null
     */
    protected $codeOrganismeAM;

    /**
     * @var bool|null
     */
    protected $alsaceMoselle;

    /**
     * @var bool|null
     */
    protected $bCivilite;

    /**
     * @var int|null
     */
    protected $civilite;

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

    public function getDateDeces(): ?\DateTime
    {
        return $this->dateDeces;
    }

    public function setDateDeces(?\DateTime $dateDeces): self
    {
        $this->initialized['dateDeces'] = true;
        $this->dateDeces = $dateDeces;

        return $this;
    }

    public function getHandicape(): ?bool
    {
        return $this->handicape;
    }

    public function setHandicape(?bool $handicape): self
    {
        $this->initialized['handicape'] = true;
        $this->handicape = $handicape;

        return $this;
    }

    public function getBDateDeces(): ?bool
    {
        return $this->bDateDeces;
    }

    public function setBDateDeces(?bool $bDateDeces): self
    {
        $this->initialized['bDateDeces'] = true;
        $this->bDateDeces = $bDateDeces;

        return $this;
    }

    public function getDateDebutRattachement(): ?\DateTime
    {
        return $this->dateDebutRattachement;
    }

    public function setDateDebutRattachement(?\DateTime $dateDebutRattachement): self
    {
        $this->initialized['dateDebutRattachement'] = true;
        $this->dateDebutRattachement = $dateDebutRattachement;

        return $this;
    }

    public function getBDateDebutRattachement(): ?bool
    {
        return $this->bDateDebutRattachement;
    }

    public function setBDateDebutRattachement(?bool $bDateDebutRattachement): self
    {
        $this->initialized['bDateDebutRattachement'] = true;
        $this->bDateDebutRattachement = $bDateDebutRattachement;

        return $this;
    }

    public function getDateFinRattachement(): ?\DateTime
    {
        return $this->dateFinRattachement;
    }

    public function setDateFinRattachement(?\DateTime $dateFinRattachement): self
    {
        $this->initialized['dateFinRattachement'] = true;
        $this->dateFinRattachement = $dateFinRattachement;

        return $this;
    }

    public function getBDateFinRattachement(): ?bool
    {
        return $this->bDateFinRattachement;
    }

    public function setBDateFinRattachement(?bool $bDateFinRattachement): self
    {
        $this->initialized['bDateFinRattachement'] = true;
        $this->bDateFinRattachement = $bDateFinRattachement;

        return $this;
    }

    public function getCodeOrganismeAM(): ?string
    {
        return $this->codeOrganismeAM;
    }

    public function setCodeOrganismeAM(?string $codeOrganismeAM): self
    {
        $this->initialized['codeOrganismeAM'] = true;
        $this->codeOrganismeAM = $codeOrganismeAM;

        return $this;
    }

    public function getAlsaceMoselle(): ?bool
    {
        return $this->alsaceMoselle;
    }

    public function setAlsaceMoselle(?bool $alsaceMoselle): self
    {
        $this->initialized['alsaceMoselle'] = true;
        $this->alsaceMoselle = $alsaceMoselle;

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
}
