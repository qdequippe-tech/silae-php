<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieAbsenceV2
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
     * @var \DateTime|null
     */
    protected $dateDebutAbsence;
    /**
     * @var \DateTime|null
     */
    protected $dateFinAbsence;
    /**
     * @var string|null
     */
    protected $codeAbsence;
    /**
     * @var float|null
     */
    protected $dureeEnHeuresSiJourUnique;
    /**
     * @var float|null
     */
    protected $dureeEnJoursSiJourUnique;
    /**
     * @var float|null
     */
    protected $valeurPourcentage;
    /**
     * @var bool|null
     */
    protected $sansInfluencePSS;
    /**
     * @var string|null
     */
    protected $commentaire;
    /**
     * @var bool|null
     */
    protected $absenceRectificative;
    /**
     * @var float|null
     */
    protected $valeur1;
    /**
     * @var bool|null
     */
    protected $bValeur1;
    /**
     * @var float|null
     */
    protected $valeur2;
    /**
     * @var bool|null
     */
    protected $bValeur2;
    /**
     * @var float|null
     */
    protected $valeur3;
    /**
     * @var bool|null
     */
    protected $bValeur3;
    /**
     * @var float|null
     */
    protected $valeur4;
    /**
     * @var bool|null
     */
    protected $bValeur4;
    /**
     * @var float|null
     */
    protected $valeur5;
    /**
     * @var bool|null
     */
    protected $bValeur5;

    public function getDateDebutAbsence(): ?\DateTime
    {
        return $this->dateDebutAbsence;
    }

    public function setDateDebutAbsence(?\DateTime $dateDebutAbsence): self
    {
        $this->initialized['dateDebutAbsence'] = true;
        $this->dateDebutAbsence = $dateDebutAbsence;

        return $this;
    }

    public function getDateFinAbsence(): ?\DateTime
    {
        return $this->dateFinAbsence;
    }

    public function setDateFinAbsence(?\DateTime $dateFinAbsence): self
    {
        $this->initialized['dateFinAbsence'] = true;
        $this->dateFinAbsence = $dateFinAbsence;

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

    public function getDureeEnHeuresSiJourUnique(): ?float
    {
        return $this->dureeEnHeuresSiJourUnique;
    }

    public function setDureeEnHeuresSiJourUnique(?float $dureeEnHeuresSiJourUnique): self
    {
        $this->initialized['dureeEnHeuresSiJourUnique'] = true;
        $this->dureeEnHeuresSiJourUnique = $dureeEnHeuresSiJourUnique;

        return $this;
    }

    public function getDureeEnJoursSiJourUnique(): ?float
    {
        return $this->dureeEnJoursSiJourUnique;
    }

    public function setDureeEnJoursSiJourUnique(?float $dureeEnJoursSiJourUnique): self
    {
        $this->initialized['dureeEnJoursSiJourUnique'] = true;
        $this->dureeEnJoursSiJourUnique = $dureeEnJoursSiJourUnique;

        return $this;
    }

    public function getValeurPourcentage(): ?float
    {
        return $this->valeurPourcentage;
    }

    public function setValeurPourcentage(?float $valeurPourcentage): self
    {
        $this->initialized['valeurPourcentage'] = true;
        $this->valeurPourcentage = $valeurPourcentage;

        return $this;
    }

    public function getSansInfluencePSS(): ?bool
    {
        return $this->sansInfluencePSS;
    }

    public function setSansInfluencePSS(?bool $sansInfluencePSS): self
    {
        $this->initialized['sansInfluencePSS'] = true;
        $this->sansInfluencePSS = $sansInfluencePSS;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->initialized['commentaire'] = true;
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getAbsenceRectificative(): ?bool
    {
        return $this->absenceRectificative;
    }

    public function setAbsenceRectificative(?bool $absenceRectificative): self
    {
        $this->initialized['absenceRectificative'] = true;
        $this->absenceRectificative = $absenceRectificative;

        return $this;
    }

    public function getValeur1(): ?float
    {
        return $this->valeur1;
    }

    public function setValeur1(?float $valeur1): self
    {
        $this->initialized['valeur1'] = true;
        $this->valeur1 = $valeur1;

        return $this;
    }

    public function getBValeur1(): ?bool
    {
        return $this->bValeur1;
    }

    public function setBValeur1(?bool $bValeur1): self
    {
        $this->initialized['bValeur1'] = true;
        $this->bValeur1 = $bValeur1;

        return $this;
    }

    public function getValeur2(): ?float
    {
        return $this->valeur2;
    }

    public function setValeur2(?float $valeur2): self
    {
        $this->initialized['valeur2'] = true;
        $this->valeur2 = $valeur2;

        return $this;
    }

    public function getBValeur2(): ?bool
    {
        return $this->bValeur2;
    }

    public function setBValeur2(?bool $bValeur2): self
    {
        $this->initialized['bValeur2'] = true;
        $this->bValeur2 = $bValeur2;

        return $this;
    }

    public function getValeur3(): ?float
    {
        return $this->valeur3;
    }

    public function setValeur3(?float $valeur3): self
    {
        $this->initialized['valeur3'] = true;
        $this->valeur3 = $valeur3;

        return $this;
    }

    public function getBValeur3(): ?bool
    {
        return $this->bValeur3;
    }

    public function setBValeur3(?bool $bValeur3): self
    {
        $this->initialized['bValeur3'] = true;
        $this->bValeur3 = $bValeur3;

        return $this;
    }

    public function getValeur4(): ?float
    {
        return $this->valeur4;
    }

    public function setValeur4(?float $valeur4): self
    {
        $this->initialized['valeur4'] = true;
        $this->valeur4 = $valeur4;

        return $this;
    }

    public function getBValeur4(): ?bool
    {
        return $this->bValeur4;
    }

    public function setBValeur4(?bool $bValeur4): self
    {
        $this->initialized['bValeur4'] = true;
        $this->bValeur4 = $bValeur4;

        return $this;
    }

    public function getValeur5(): ?float
    {
        return $this->valeur5;
    }

    public function setValeur5(?float $valeur5): self
    {
        $this->initialized['valeur5'] = true;
        $this->valeur5 = $valeur5;

        return $this;
    }

    public function getBValeur5(): ?bool
    {
        return $this->bValeur5;
    }

    public function setBValeur5(?bool $bValeur5): self
    {
        $this->initialized['bValeur5'] = true;
        $this->bValeur5 = $bValeur5;

        return $this;
    }
}
