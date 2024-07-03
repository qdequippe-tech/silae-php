<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeDossiersAgenceResponse
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
     * @var list<DossierAgence>|null
     */
    protected $dossiers;

    /**
     * @return list<DossierAgence>|null
     */
    public function getDossiers(): ?array
    {
        return $this->dossiers;
    }

    /**
     * @param list<DossierAgence>|null $dossiers
     */
    public function setDossiers(?array $dossiers): self
    {
        $this->initialized['dossiers'] = true;
        $this->dossiers = $dossiers;

        return $this;
    }
}
