<?php

namespace QdequippeTech\Silae\Api\Model;

class SpectacleSalarieAjouterAffectationsRequest
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
     * @var SpectacleSalarieAffectations|null
     */
    protected $structSpectacleSalarieAffectations;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getStructSpectacleSalarieAffectations(): ?SpectacleSalarieAffectations
    {
        return $this->structSpectacleSalarieAffectations;
    }

    public function setStructSpectacleSalarieAffectations(?SpectacleSalarieAffectations $structSpectacleSalarieAffectations): self
    {
        $this->initialized['structSpectacleSalarieAffectations'] = true;
        $this->structSpectacleSalarieAffectations = $structSpectacleSalarieAffectations;

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
