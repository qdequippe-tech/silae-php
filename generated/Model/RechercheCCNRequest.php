<?php

namespace QdequippeTech\Silae\Api\Model;

class RechercheCCNRequest
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
     * @var CritereRechercheCCN|null
     */
    protected $critere;

    public function getCritere(): ?CritereRechercheCCN
    {
        return $this->critere;
    }

    public function setCritere(?CritereRechercheCCN $critere): self
    {
        $this->initialized['critere'] = true;
        $this->critere = $critere;

        return $this;
    }
}
