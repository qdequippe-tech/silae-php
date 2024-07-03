<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationHandicapRequest
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
    protected $salarieHandicape;

    /**
     * @var list<Handicap>|null
     */
    protected $handicap;

    /**
     * @var string|null
     */
    protected $matricule;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getSalarieHandicape(): ?bool
    {
        return $this->salarieHandicape;
    }

    public function setSalarieHandicape(?bool $salarieHandicape): self
    {
        $this->initialized['salarieHandicape'] = true;
        $this->salarieHandicape = $salarieHandicape;

        return $this;
    }

    /**
     * @return list<Handicap>|null
     */
    public function getHandicap(): ?array
    {
        return $this->handicap;
    }

    /**
     * @param list<Handicap>|null $handicap
     */
    public function setHandicap(?array $handicap): self
    {
        $this->initialized['handicap'] = true;
        $this->handicap = $handicap;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->initialized['matricule'] = true;
        $this->matricule = $matricule;

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
