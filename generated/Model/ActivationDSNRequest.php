<?php

namespace QdequippeTech\Silae\Api\Model;

class ActivationDSNRequest
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
     * @var ActivationDSN|null
     */
    protected $activationDSN;

    public function getActivationDSN(): ?ActivationDSN
    {
        return $this->activationDSN;
    }

    public function setActivationDSN(?ActivationDSN $activationDSN): self
    {
        $this->initialized['activationDSN'] = true;
        $this->activationDSN = $activationDSN;

        return $this;
    }
}
