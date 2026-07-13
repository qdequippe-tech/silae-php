<?php

namespace QdequippeTech\Silae\Api\Model;

class StatistiquesProductionUtilisateurV3
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
    protected $identifiantUtilisateur;

    /**
     * @var \DateTime|null
     */
    protected $periodePaie;

    /**
     * @var \DateTime|null
     */
    protected $dateEdition;

    /**
     * @var int|null
     */
    protected $nbBulletins;

    /**
     * @var int|null
     */
    protected $nbEntrees;

    /**
     * @var int|null
     */
    protected $nbEntreesCDI;

    /**
     * @var int|null
     */
    protected $nbEntreesCDD;

    /**
     * @var int|null
     */
    protected $nbEntreesAutres;

    /**
     * @var int|null
     */
    protected $nbSorties;

    /**
     * @var int|null
     */
    protected $nbSortiesCDI;

    /**
     * @var int|null
     */
    protected $nbSortiesCDD;

    /**
     * @var int|null
     */
    protected $nbSortiesDemission;

    /**
     * @var int|null
     */
    protected $nbSortiesRuptureConventionnelle;

    /**
     * @var int|null
     */
    protected $nbSortiesLicenciement;

    /**
     * @var int|null
     */
    protected $nbSortiesAutres;

    public function getIdentifiantUtilisateur(): ?string
    {
        return $this->identifiantUtilisateur;
    }

    public function setIdentifiantUtilisateur(?string $identifiantUtilisateur): self
    {
        $this->initialized['identifiantUtilisateur'] = true;
        $this->identifiantUtilisateur = $identifiantUtilisateur;

        return $this;
    }

    public function getPeriodePaie(): ?\DateTime
    {
        return $this->periodePaie;
    }

    public function setPeriodePaie(?\DateTime $periodePaie): self
    {
        $this->initialized['periodePaie'] = true;
        $this->periodePaie = $periodePaie;

        return $this;
    }

    public function getDateEdition(): ?\DateTime
    {
        return $this->dateEdition;
    }

    public function setDateEdition(?\DateTime $dateEdition): self
    {
        $this->initialized['dateEdition'] = true;
        $this->dateEdition = $dateEdition;

        return $this;
    }

    public function getNbBulletins(): ?int
    {
        return $this->nbBulletins;
    }

    public function setNbBulletins(?int $nbBulletins): self
    {
        $this->initialized['nbBulletins'] = true;
        $this->nbBulletins = $nbBulletins;

        return $this;
    }

    public function getNbEntrees(): ?int
    {
        return $this->nbEntrees;
    }

    public function setNbEntrees(?int $nbEntrees): self
    {
        $this->initialized['nbEntrees'] = true;
        $this->nbEntrees = $nbEntrees;

        return $this;
    }

    public function getNbEntreesCDI(): ?int
    {
        return $this->nbEntreesCDI;
    }

    public function setNbEntreesCDI(?int $nbEntreesCDI): self
    {
        $this->initialized['nbEntreesCDI'] = true;
        $this->nbEntreesCDI = $nbEntreesCDI;

        return $this;
    }

    public function getNbEntreesCDD(): ?int
    {
        return $this->nbEntreesCDD;
    }

    public function setNbEntreesCDD(?int $nbEntreesCDD): self
    {
        $this->initialized['nbEntreesCDD'] = true;
        $this->nbEntreesCDD = $nbEntreesCDD;

        return $this;
    }

    public function getNbEntreesAutres(): ?int
    {
        return $this->nbEntreesAutres;
    }

    public function setNbEntreesAutres(?int $nbEntreesAutres): self
    {
        $this->initialized['nbEntreesAutres'] = true;
        $this->nbEntreesAutres = $nbEntreesAutres;

        return $this;
    }

    public function getNbSorties(): ?int
    {
        return $this->nbSorties;
    }

    public function setNbSorties(?int $nbSorties): self
    {
        $this->initialized['nbSorties'] = true;
        $this->nbSorties = $nbSorties;

        return $this;
    }

    public function getNbSortiesCDI(): ?int
    {
        return $this->nbSortiesCDI;
    }

    public function setNbSortiesCDI(?int $nbSortiesCDI): self
    {
        $this->initialized['nbSortiesCDI'] = true;
        $this->nbSortiesCDI = $nbSortiesCDI;

        return $this;
    }

    public function getNbSortiesCDD(): ?int
    {
        return $this->nbSortiesCDD;
    }

    public function setNbSortiesCDD(?int $nbSortiesCDD): self
    {
        $this->initialized['nbSortiesCDD'] = true;
        $this->nbSortiesCDD = $nbSortiesCDD;

        return $this;
    }

    public function getNbSortiesDemission(): ?int
    {
        return $this->nbSortiesDemission;
    }

    public function setNbSortiesDemission(?int $nbSortiesDemission): self
    {
        $this->initialized['nbSortiesDemission'] = true;
        $this->nbSortiesDemission = $nbSortiesDemission;

        return $this;
    }

    public function getNbSortiesRuptureConventionnelle(): ?int
    {
        return $this->nbSortiesRuptureConventionnelle;
    }

    public function setNbSortiesRuptureConventionnelle(?int $nbSortiesRuptureConventionnelle): self
    {
        $this->initialized['nbSortiesRuptureConventionnelle'] = true;
        $this->nbSortiesRuptureConventionnelle = $nbSortiesRuptureConventionnelle;

        return $this;
    }

    public function getNbSortiesLicenciement(): ?int
    {
        return $this->nbSortiesLicenciement;
    }

    public function setNbSortiesLicenciement(?int $nbSortiesLicenciement): self
    {
        $this->initialized['nbSortiesLicenciement'] = true;
        $this->nbSortiesLicenciement = $nbSortiesLicenciement;

        return $this;
    }

    public function getNbSortiesAutres(): ?int
    {
        return $this->nbSortiesAutres;
    }

    public function setNbSortiesAutres(?int $nbSortiesAutres): self
    {
        $this->initialized['nbSortiesAutres'] = true;
        $this->nbSortiesAutres = $nbSortiesAutres;

        return $this;
    }
}
