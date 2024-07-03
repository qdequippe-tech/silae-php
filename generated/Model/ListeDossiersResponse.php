<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeDossiersResponse
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
     * @var list<ProprietesDossier>|null
     */
    protected $listeDossiers;

    /**
     * @return list<ProprietesDossier>|null
     */
    public function getListeDossiers(): ?array
    {
        return $this->listeDossiers;
    }

    /**
     * @param list<ProprietesDossier>|null $listeDossiers
     */
    public function setListeDossiers(?array $listeDossiers): self
    {
        $this->initialized['listeDossiers'] = true;
        $this->listeDossiers = $listeDossiers;

        return $this;
    }
}
