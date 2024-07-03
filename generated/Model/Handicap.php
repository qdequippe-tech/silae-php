<?php

namespace QdequippeTech\Silae\Api\Model;

class Handicap
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
     * @var bool|null
     */
    protected $cdapHRQTH;

    /**
     * @var bool|null
     */
    protected $cdapHAAH;

    /**
     * @var bool|null
     */
    protected $cdapHCarteInvalidite;

    /**
     * @var \DateTime|null
     */
    protected $cdapHDateDebut;

    /**
     * @var \DateTime|null
     */
    protected $cdapHDateFin;

    /**
     * @var \DateTime|null
     */
    protected $cdapHDtDepotRenouvellement;

    /**
     * @var float|null
     */
    protected $cdapHTauxIncapacite;

    /**
     * @var int|null
     */
    protected $accidentNature;

    /**
     * @var \DateTime|null
     */
    protected $accidentDateDebut;

    /**
     * @var float|null
     */
    protected $accidentTauxIPP;

    /**
     * @var int|null
     */
    protected $accidentCategoriePension;

    /**
     * @var int|null
     */
    protected $autreCategorie;

    /**
     * @var \DateTime|null
     */
    protected $autreDateDebut;

    public function getCdapHRQTH(): ?bool
    {
        return $this->cdapHRQTH;
    }

    public function setCdapHRQTH(?bool $cdapHRQTH): self
    {
        $this->initialized['cdapHRQTH'] = true;
        $this->cdapHRQTH = $cdapHRQTH;

        return $this;
    }

    public function getCdapHAAH(): ?bool
    {
        return $this->cdapHAAH;
    }

    public function setCdapHAAH(?bool $cdapHAAH): self
    {
        $this->initialized['cdapHAAH'] = true;
        $this->cdapHAAH = $cdapHAAH;

        return $this;
    }

    public function getCdapHCarteInvalidite(): ?bool
    {
        return $this->cdapHCarteInvalidite;
    }

    public function setCdapHCarteInvalidite(?bool $cdapHCarteInvalidite): self
    {
        $this->initialized['cdapHCarteInvalidite'] = true;
        $this->cdapHCarteInvalidite = $cdapHCarteInvalidite;

        return $this;
    }

    public function getCdapHDateDebut(): ?\DateTime
    {
        return $this->cdapHDateDebut;
    }

    public function setCdapHDateDebut(?\DateTime $cdapHDateDebut): self
    {
        $this->initialized['cdapHDateDebut'] = true;
        $this->cdapHDateDebut = $cdapHDateDebut;

        return $this;
    }

    public function getCdapHDateFin(): ?\DateTime
    {
        return $this->cdapHDateFin;
    }

    public function setCdapHDateFin(?\DateTime $cdapHDateFin): self
    {
        $this->initialized['cdapHDateFin'] = true;
        $this->cdapHDateFin = $cdapHDateFin;

        return $this;
    }

    public function getCdapHDtDepotRenouvellement(): ?\DateTime
    {
        return $this->cdapHDtDepotRenouvellement;
    }

    public function setCdapHDtDepotRenouvellement(?\DateTime $cdapHDtDepotRenouvellement): self
    {
        $this->initialized['cdapHDtDepotRenouvellement'] = true;
        $this->cdapHDtDepotRenouvellement = $cdapHDtDepotRenouvellement;

        return $this;
    }

    public function getCdapHTauxIncapacite(): ?float
    {
        return $this->cdapHTauxIncapacite;
    }

    public function setCdapHTauxIncapacite(?float $cdapHTauxIncapacite): self
    {
        $this->initialized['cdapHTauxIncapacite'] = true;
        $this->cdapHTauxIncapacite = $cdapHTauxIncapacite;

        return $this;
    }

    public function getAccidentNature(): ?int
    {
        return $this->accidentNature;
    }

    public function setAccidentNature(?int $accidentNature): self
    {
        $this->initialized['accidentNature'] = true;
        $this->accidentNature = $accidentNature;

        return $this;
    }

    public function getAccidentDateDebut(): ?\DateTime
    {
        return $this->accidentDateDebut;
    }

    public function setAccidentDateDebut(?\DateTime $accidentDateDebut): self
    {
        $this->initialized['accidentDateDebut'] = true;
        $this->accidentDateDebut = $accidentDateDebut;

        return $this;
    }

    public function getAccidentTauxIPP(): ?float
    {
        return $this->accidentTauxIPP;
    }

    public function setAccidentTauxIPP(?float $accidentTauxIPP): self
    {
        $this->initialized['accidentTauxIPP'] = true;
        $this->accidentTauxIPP = $accidentTauxIPP;

        return $this;
    }

    public function getAccidentCategoriePension(): ?int
    {
        return $this->accidentCategoriePension;
    }

    public function setAccidentCategoriePension(?int $accidentCategoriePension): self
    {
        $this->initialized['accidentCategoriePension'] = true;
        $this->accidentCategoriePension = $accidentCategoriePension;

        return $this;
    }

    public function getAutreCategorie(): ?int
    {
        return $this->autreCategorie;
    }

    public function setAutreCategorie(?int $autreCategorie): self
    {
        $this->initialized['autreCategorie'] = true;
        $this->autreCategorie = $autreCategorie;

        return $this;
    }

    public function getAutreDateDebut(): ?\DateTime
    {
        return $this->autreDateDebut;
    }

    public function setAutreDateDebut(?\DateTime $autreDateDebut): self
    {
        $this->initialized['autreDateDebut'] = true;
        $this->autreDateDebut = $autreDateDebut;

        return $this;
    }
}
