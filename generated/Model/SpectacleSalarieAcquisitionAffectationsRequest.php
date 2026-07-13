<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class SpectacleSalarieAcquisitionAffectationsRequest
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
     * @var RequeteSpectacleSalarieAffectationsV2|null
     */
    protected $requeteSpectacleSalarieAffectations;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getRequeteSpectacleSalarieAffectations(): ?RequeteSpectacleSalarieAffectationsV2
    {
        return $this->requeteSpectacleSalarieAffectations;
    }

    public function setRequeteSpectacleSalarieAffectations(?RequeteSpectacleSalarieAffectationsV2 $requeteSpectacleSalarieAffectations): self
    {
        $this->initialized['requeteSpectacleSalarieAffectations'] = true;
        $this->requeteSpectacleSalarieAffectations = $requeteSpectacleSalarieAffectations;

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
