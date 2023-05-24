<?php

namespace QdequippeTech\Silae\Api\Model;

class CreationDossierPaieResponse
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
     * @var string[]|null
     */
    protected $nomsInternesEtablissements;

    /**
     * @return string[]|null
     */
    public function getNomsInternesEtablissements(): ?array
    {
        return $this->nomsInternesEtablissements;
    }

    /**
     * @param string[]|null $nomsInternesEtablissements
     */
    public function setNomsInternesEtablissements(?array $nomsInternesEtablissements): self
    {
        $this->initialized['nomsInternesEtablissements'] = true;
        $this->nomsInternesEtablissements = $nomsInternesEtablissements;

        return $this;
    }
}
