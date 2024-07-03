<?php

namespace QdequippeTech\Silae\Api\Model;

class StatistiquesEntreesSortiesDetails
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
    protected $periode;

    /**
     * @var int|null
     */
    protected $entreesCDINouveauSalarie;

    /**
     * @var int|null
     */
    protected $entreesCDDNouveauSalarie;

    /**
     * @var int|null
     */
    protected $entreesAutreNouveauSalarie;

    /**
     * @var int|null
     */
    protected $entreesCDINouvelEmploi;

    /**
     * @var int|null
     */
    protected $entreesCDDNouvelEmploi;

    /**
     * @var int|null
     */
    protected $entreesAutreNouvelEmploi;

    /**
     * @var int|null
     */
    protected $sortiesFinCDD;

    /**
     * @var int|null
     */
    protected $sortiesDemission;

    /**
     * @var int|null
     */
    protected $sortiesRuptureConventionnelle;

    /**
     * @var int|null
     */
    protected $sortiesLicenciement;

    /**
     * @var int|null
     */
    protected $sortiesAutre;

    public function getPeriode(): ?\DateTime
    {
        return $this->periode;
    }

    public function setPeriode(?\DateTime $periode): self
    {
        $this->initialized['periode'] = true;
        $this->periode = $periode;

        return $this;
    }

    public function getEntreesCDINouveauSalarie(): ?int
    {
        return $this->entreesCDINouveauSalarie;
    }

    public function setEntreesCDINouveauSalarie(?int $entreesCDINouveauSalarie): self
    {
        $this->initialized['entreesCDINouveauSalarie'] = true;
        $this->entreesCDINouveauSalarie = $entreesCDINouveauSalarie;

        return $this;
    }

    public function getEntreesCDDNouveauSalarie(): ?int
    {
        return $this->entreesCDDNouveauSalarie;
    }

    public function setEntreesCDDNouveauSalarie(?int $entreesCDDNouveauSalarie): self
    {
        $this->initialized['entreesCDDNouveauSalarie'] = true;
        $this->entreesCDDNouveauSalarie = $entreesCDDNouveauSalarie;

        return $this;
    }

    public function getEntreesAutreNouveauSalarie(): ?int
    {
        return $this->entreesAutreNouveauSalarie;
    }

    public function setEntreesAutreNouveauSalarie(?int $entreesAutreNouveauSalarie): self
    {
        $this->initialized['entreesAutreNouveauSalarie'] = true;
        $this->entreesAutreNouveauSalarie = $entreesAutreNouveauSalarie;

        return $this;
    }

    public function getEntreesCDINouvelEmploi(): ?int
    {
        return $this->entreesCDINouvelEmploi;
    }

    public function setEntreesCDINouvelEmploi(?int $entreesCDINouvelEmploi): self
    {
        $this->initialized['entreesCDINouvelEmploi'] = true;
        $this->entreesCDINouvelEmploi = $entreesCDINouvelEmploi;

        return $this;
    }

    public function getEntreesCDDNouvelEmploi(): ?int
    {
        return $this->entreesCDDNouvelEmploi;
    }

    public function setEntreesCDDNouvelEmploi(?int $entreesCDDNouvelEmploi): self
    {
        $this->initialized['entreesCDDNouvelEmploi'] = true;
        $this->entreesCDDNouvelEmploi = $entreesCDDNouvelEmploi;

        return $this;
    }

    public function getEntreesAutreNouvelEmploi(): ?int
    {
        return $this->entreesAutreNouvelEmploi;
    }

    public function setEntreesAutreNouvelEmploi(?int $entreesAutreNouvelEmploi): self
    {
        $this->initialized['entreesAutreNouvelEmploi'] = true;
        $this->entreesAutreNouvelEmploi = $entreesAutreNouvelEmploi;

        return $this;
    }

    public function getSortiesFinCDD(): ?int
    {
        return $this->sortiesFinCDD;
    }

    public function setSortiesFinCDD(?int $sortiesFinCDD): self
    {
        $this->initialized['sortiesFinCDD'] = true;
        $this->sortiesFinCDD = $sortiesFinCDD;

        return $this;
    }

    public function getSortiesDemission(): ?int
    {
        return $this->sortiesDemission;
    }

    public function setSortiesDemission(?int $sortiesDemission): self
    {
        $this->initialized['sortiesDemission'] = true;
        $this->sortiesDemission = $sortiesDemission;

        return $this;
    }

    public function getSortiesRuptureConventionnelle(): ?int
    {
        return $this->sortiesRuptureConventionnelle;
    }

    public function setSortiesRuptureConventionnelle(?int $sortiesRuptureConventionnelle): self
    {
        $this->initialized['sortiesRuptureConventionnelle'] = true;
        $this->sortiesRuptureConventionnelle = $sortiesRuptureConventionnelle;

        return $this;
    }

    public function getSortiesLicenciement(): ?int
    {
        return $this->sortiesLicenciement;
    }

    public function setSortiesLicenciement(?int $sortiesLicenciement): self
    {
        $this->initialized['sortiesLicenciement'] = true;
        $this->sortiesLicenciement = $sortiesLicenciement;

        return $this;
    }

    public function getSortiesAutre(): ?int
    {
        return $this->sortiesAutre;
    }

    public function setSortiesAutre(?int $sortiesAutre): self
    {
        $this->initialized['sortiesAutre'] = true;
        $this->sortiesAutre = $sortiesAutre;

        return $this;
    }
}
