<?php

namespace QdequippeTech\Silae\Api\Model;

class GererEtatRobotDePaieRequest
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
    protected $desactiver;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getDesactiver(): ?bool
    {
        return $this->desactiver;
    }

    public function setDesactiver(?bool $desactiver): self
    {
        $this->initialized['desactiver'] = true;
        $this->desactiver = $desactiver;

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
