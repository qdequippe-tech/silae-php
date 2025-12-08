<?php

namespace QdequippeTech\Silae\Api\Model;

class EditionSoldeDeReposRequest
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
    protected $format;

    /**
     * @var string|null
     */
    protected $optionEdition;

    /**
     * @var string|null
     */
    protected $titreCategorie;

    /**
     * @var \DateTime|null
     */
    protected $periodeDebut;

    /**
     * @var \DateTime|null
     */
    protected $periodeFin;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->initialized['format'] = true;
        $this->format = $format;

        return $this;
    }

    public function getOptionEdition(): ?string
    {
        return $this->optionEdition;
    }

    public function setOptionEdition(?string $optionEdition): self
    {
        $this->initialized['optionEdition'] = true;
        $this->optionEdition = $optionEdition;

        return $this;
    }

    public function getTitreCategorie(): ?string
    {
        return $this->titreCategorie;
    }

    public function setTitreCategorie(?string $titreCategorie): self
    {
        $this->initialized['titreCategorie'] = true;
        $this->titreCategorie = $titreCategorie;

        return $this;
    }

    public function getPeriodeDebut(): ?\DateTime
    {
        return $this->periodeDebut;
    }

    public function setPeriodeDebut(?\DateTime $periodeDebut): self
    {
        $this->initialized['periodeDebut'] = true;
        $this->periodeDebut = $periodeDebut;

        return $this;
    }

    public function getPeriodeFin(): ?\DateTime
    {
        return $this->periodeFin;
    }

    public function setPeriodeFin(?\DateTime $periodeFin): self
    {
        $this->initialized['periodeFin'] = true;
        $this->periodeFin = $periodeFin;

        return $this;
    }

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
}
