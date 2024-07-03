<?php

namespace QdequippeTech\Silae\Api\Model;

class CreationEmetteurDSNRequest
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
     * @var EmetteurDSN|null
     */
    protected $emetteur;

    public function getEmetteur(): ?EmetteurDSN
    {
        return $this->emetteur;
    }

    public function setEmetteur(?EmetteurDSN $emetteur): self
    {
        $this->initialized['emetteur'] = true;
        $this->emetteur = $emetteur;

        return $this;
    }
}
