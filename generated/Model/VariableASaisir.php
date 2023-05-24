<?php

namespace QdequippeTech\Silae\Api\Model;

class VariableASaisir
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
    protected $nom;
    /**
     * @var string|null
     */
    protected $famille;
    /**
     * @var string|null
     */
    protected $libelleLong;
    /**
     * @var string|null
     */
    protected $libelleCourt;
    /**
     * @var int|null
     */
    protected $typeVariable;
    /**
     * @var string|null
     */
    protected $format;
    /**
     * @var string|null
     */
    protected $ordre;
    /**
     * @var int|null
     */
    protected $indiceCouleur;
    /**
     * @var bool|null
     */
    protected $masquee;
    /**
     * @var string|null
     */
    protected $options;

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    public function getFamille(): ?string
    {
        return $this->famille;
    }

    public function setFamille(?string $famille): self
    {
        $this->initialized['famille'] = true;
        $this->famille = $famille;

        return $this;
    }

    public function getLibelleLong(): ?string
    {
        return $this->libelleLong;
    }

    public function setLibelleLong(?string $libelleLong): self
    {
        $this->initialized['libelleLong'] = true;
        $this->libelleLong = $libelleLong;

        return $this;
    }

    public function getLibelleCourt(): ?string
    {
        return $this->libelleCourt;
    }

    public function setLibelleCourt(?string $libelleCourt): self
    {
        $this->initialized['libelleCourt'] = true;
        $this->libelleCourt = $libelleCourt;

        return $this;
    }

    public function getTypeVariable(): ?int
    {
        return $this->typeVariable;
    }

    public function setTypeVariable(?int $typeVariable): self
    {
        $this->initialized['typeVariable'] = true;
        $this->typeVariable = $typeVariable;

        return $this;
    }

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

    public function getOrdre(): ?string
    {
        return $this->ordre;
    }

    public function setOrdre(?string $ordre): self
    {
        $this->initialized['ordre'] = true;
        $this->ordre = $ordre;

        return $this;
    }

    public function getIndiceCouleur(): ?int
    {
        return $this->indiceCouleur;
    }

    public function setIndiceCouleur(?int $indiceCouleur): self
    {
        $this->initialized['indiceCouleur'] = true;
        $this->indiceCouleur = $indiceCouleur;

        return $this;
    }

    public function getMasquee(): ?bool
    {
        return $this->masquee;
    }

    public function setMasquee(?bool $masquee): self
    {
        $this->initialized['masquee'] = true;
        $this->masquee = $masquee;

        return $this;
    }

    public function getOptions(): ?string
    {
        return $this->options;
    }

    public function setOptions(?string $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;

        return $this;
    }
}
