<?php

namespace QdequippeTech\Silae\Api\Model;

class SpectacleSalarieReinitialiserAffectationsResponse
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
     * @var int|null
     */
    protected $affectationsReinitialisees;

    public function getAffectationsReinitialisees(): ?int
    {
        return $this->affectationsReinitialisees;
    }

    public function setAffectationsReinitialisees(?int $affectationsReinitialisees): self
    {
        $this->initialized['affectationsReinitialisees'] = true;
        $this->affectationsReinitialisees = $affectationsReinitialisees;

        return $this;
    }
}
