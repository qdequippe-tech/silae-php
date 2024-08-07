<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeAgencesResponse
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
     * @var list<Agence>|null
     */
    protected $agences;

    /**
     * @return list<Agence>|null
     */
    public function getAgences(): ?array
    {
        return $this->agences;
    }

    /**
     * @param list<Agence>|null $agences
     */
    public function setAgences(?array $agences): self
    {
        $this->initialized['agences'] = true;
        $this->agences = $agences;

        return $this;
    }
}
