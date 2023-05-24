<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationEffortConstructionRequest
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
     * @var EffortConstruction|null
     */
    protected $effortConstruction;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getEffortConstruction(): ?EffortConstruction
    {
        return $this->effortConstruction;
    }

    public function setEffortConstruction(?EffortConstruction $effortConstruction): self
    {
        $this->initialized['effortConstruction'] = true;
        $this->effortConstruction = $effortConstruction;

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
