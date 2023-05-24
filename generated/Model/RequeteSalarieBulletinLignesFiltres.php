<?php

namespace QdequippeTech\Silae\Api\Model;

class RequeteSalarieBulletinLignesFiltres
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
    protected $codeLibelle;
    /**
     * @var string|null
     */
    protected $libelle;
    /**
     * @var string|null
     */
    protected $codeDucs;
    /**
     * @var int|null
     */
    protected $zone;
    /**
     * @var string|null
     */
    protected $marqueInterne;
    /**
     * @var string|null
     */
    protected $marque1;
    /**
     * @var string|null
     */
    protected $marque2;
    /**
     * @var \DateTime|null
     */
    protected $marqueDtDeb;
    /**
     * @var \DateTime|null
     */
    protected $marqueDtFin;
    /**
     * @var string|null
     */
    protected $compte4;
    /**
     * @var string|null
     */
    protected $compte6;
    /**
     * @var bool|null
     */
    protected $exclureLignesNeutres;
    /**
     * @var bool|null
     */
    protected $exclureLignesNonNeutres;

    public function getCodeLibelle(): ?string
    {
        return $this->codeLibelle;
    }

    public function setCodeLibelle(?string $codeLibelle): self
    {
        $this->initialized['codeLibelle'] = true;
        $this->codeLibelle = $codeLibelle;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->initialized['libelle'] = true;
        $this->libelle = $libelle;

        return $this;
    }

    public function getCodeDucs(): ?string
    {
        return $this->codeDucs;
    }

    public function setCodeDucs(?string $codeDucs): self
    {
        $this->initialized['codeDucs'] = true;
        $this->codeDucs = $codeDucs;

        return $this;
    }

    public function getZone(): ?int
    {
        return $this->zone;
    }

    public function setZone(?int $zone): self
    {
        $this->initialized['zone'] = true;
        $this->zone = $zone;

        return $this;
    }

    public function getMarqueInterne(): ?string
    {
        return $this->marqueInterne;
    }

    public function setMarqueInterne(?string $marqueInterne): self
    {
        $this->initialized['marqueInterne'] = true;
        $this->marqueInterne = $marqueInterne;

        return $this;
    }

    public function getMarque1(): ?string
    {
        return $this->marque1;
    }

    public function setMarque1(?string $marque1): self
    {
        $this->initialized['marque1'] = true;
        $this->marque1 = $marque1;

        return $this;
    }

    public function getMarque2(): ?string
    {
        return $this->marque2;
    }

    public function setMarque2(?string $marque2): self
    {
        $this->initialized['marque2'] = true;
        $this->marque2 = $marque2;

        return $this;
    }

    public function getMarqueDtDeb(): ?\DateTime
    {
        return $this->marqueDtDeb;
    }

    public function setMarqueDtDeb(?\DateTime $marqueDtDeb): self
    {
        $this->initialized['marqueDtDeb'] = true;
        $this->marqueDtDeb = $marqueDtDeb;

        return $this;
    }

    public function getMarqueDtFin(): ?\DateTime
    {
        return $this->marqueDtFin;
    }

    public function setMarqueDtFin(?\DateTime $marqueDtFin): self
    {
        $this->initialized['marqueDtFin'] = true;
        $this->marqueDtFin = $marqueDtFin;

        return $this;
    }

    public function getCompte4(): ?string
    {
        return $this->compte4;
    }

    public function setCompte4(?string $compte4): self
    {
        $this->initialized['compte4'] = true;
        $this->compte4 = $compte4;

        return $this;
    }

    public function getCompte6(): ?string
    {
        return $this->compte6;
    }

    public function setCompte6(?string $compte6): self
    {
        $this->initialized['compte6'] = true;
        $this->compte6 = $compte6;

        return $this;
    }

    public function getExclureLignesNeutres(): ?bool
    {
        return $this->exclureLignesNeutres;
    }

    public function setExclureLignesNeutres(?bool $exclureLignesNeutres): self
    {
        $this->initialized['exclureLignesNeutres'] = true;
        $this->exclureLignesNeutres = $exclureLignesNeutres;

        return $this;
    }

    public function getExclureLignesNonNeutres(): ?bool
    {
        return $this->exclureLignesNonNeutres;
    }

    public function setExclureLignesNonNeutres(?bool $exclureLignesNonNeutres): self
    {
        $this->initialized['exclureLignesNonNeutres'] = true;
        $this->exclureLignesNonNeutres = $exclureLignesNonNeutres;

        return $this;
    }
}
