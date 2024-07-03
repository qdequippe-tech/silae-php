<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeModulesActifsResponse
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
     * @var list<ModulesActifsParDossier>|null
     */
    protected $listeDossiers;

    /**
     * @return list<ModulesActifsParDossier>|null
     */
    public function getListeDossiers(): ?array
    {
        return $this->listeDossiers;
    }

    /**
     * @param list<ModulesActifsParDossier>|null $listeDossiers
     */
    public function setListeDossiers(?array $listeDossiers): self
    {
        $this->initialized['listeDossiers'] = true;
        $this->listeDossiers = $listeDossiers;

        return $this;
    }
}
