<?php

namespace QdequippeTech\Silae\Api\Model;

class SpectacleListeRequest
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
     * @var \DateTime|null
     */
    protected $dateDebutMin;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getDateDebutMin(): ?\DateTime
    {
        return $this->dateDebutMin;
    }

    public function setDateDebutMin(?\DateTime $dateDebutMin): self
    {
        $this->initialized['dateDebutMin'] = true;
        $this->dateDebutMin = $dateDebutMin;

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
