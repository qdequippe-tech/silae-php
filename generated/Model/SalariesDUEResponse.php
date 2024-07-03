<?php

namespace QdequippeTech\Silae\Api\Model;

class SalariesDUEResponse
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
    protected $nbDUEEnvoyees;

    public function getNbDUEEnvoyees(): ?int
    {
        return $this->nbDUEEnvoyees;
    }

    public function setNbDUEEnvoyees(?int $nbDUEEnvoyees): self
    {
        $this->initialized['nbDUEEnvoyees'] = true;
        $this->nbDUEEnvoyees = $nbDUEEnvoyees;

        return $this;
    }
}
