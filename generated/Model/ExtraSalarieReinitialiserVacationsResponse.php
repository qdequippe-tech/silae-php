<?php

namespace QdequippeTech\Silae\Api\Model;

class ExtraSalarieReinitialiserVacationsResponse
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
    protected $vacationsReinitialisees;

    public function getVacationsReinitialisees(): ?int
    {
        return $this->vacationsReinitialisees;
    }

    public function setVacationsReinitialisees(?int $vacationsReinitialisees): self
    {
        $this->initialized['vacationsReinitialisees'] = true;
        $this->vacationsReinitialisees = $vacationsReinitialisees;

        return $this;
    }
}
