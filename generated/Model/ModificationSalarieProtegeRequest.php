<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationSalarieProtegeRequest
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
     * @var SalarieProtege[]|null
     */
    protected $salarieProtege;
    /**
     * @var string|null
     */
    protected $matricule;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    /**
     * @return SalarieProtege[]|null
     */
    public function getSalarieProtege(): ?array
    {
        return $this->salarieProtege;
    }

    /**
     * @param SalarieProtege[]|null $salarieProtege
     */
    public function setSalarieProtege(?array $salarieProtege): self
    {
        $this->initialized['salarieProtege'] = true;
        $this->salarieProtege = $salarieProtege;

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
