<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeEtablissementsDossierPaieResponse
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
     * @var InformationsEtablissement[]|null
     */
    protected $informationsEtablissements;

    /**
     * @return InformationsEtablissement[]|null
     */
    public function getInformationsEtablissements(): ?array
    {
        return $this->informationsEtablissements;
    }

    /**
     * @param InformationsEtablissement[]|null $informationsEtablissements
     */
    public function setInformationsEtablissements(?array $informationsEtablissements): self
    {
        $this->initialized['informationsEtablissements'] = true;
        $this->informationsEtablissements = $informationsEtablissements;

        return $this;
    }
}
