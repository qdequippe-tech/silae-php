<?php

namespace QdequippeTech\Silae\Api\Model;

class SpectacleCreationRequest
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
     * @var Spectacle|null
     */
    protected $structSpectacle;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getStructSpectacle(): ?Spectacle
    {
        return $this->structSpectacle;
    }

    public function setStructSpectacle(?Spectacle $structSpectacle): self
    {
        $this->initialized['structSpectacle'] = true;
        $this->structSpectacle = $structSpectacle;

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
