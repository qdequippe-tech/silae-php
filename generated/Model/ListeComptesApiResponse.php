<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeComptesApiResponse
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
     * @var list<CompteApi>|null
     */
    protected $comptes;

    /**
     * @return list<CompteApi>|null
     */
    public function getComptes(): ?array
    {
        return $this->comptes;
    }

    /**
     * @param list<CompteApi>|null $comptes
     */
    public function setComptes(?array $comptes): self
    {
        $this->initialized['comptes'] = true;
        $this->comptes = $comptes;

        return $this;
    }
}
