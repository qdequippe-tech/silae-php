<?php

namespace QdequippeTech\Silae\Api\Model;

class InitialisationAncienNumeroContratDSNRequest
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
     * @var InitialisationAncienNumeroContratDSN|null
     */
    protected $initAncienContratDSN;

    public function getInitAncienContratDSN(): ?InitialisationAncienNumeroContratDSN
    {
        return $this->initAncienContratDSN;
    }

    public function setInitAncienContratDSN(?InitialisationAncienNumeroContratDSN $initAncienContratDSN): self
    {
        $this->initialized['initAncienContratDSN'] = true;
        $this->initAncienContratDSN = $initAncienContratDSN;

        return $this;
    }
}
