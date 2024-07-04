<?php

namespace QdequippeTech\Silae\Api\Model;

class AnalyseProductionPaieResponse
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
     * @var list<StatistiquesV2>|null
     */
    protected $statistiques;

    /**
     * @return list<StatistiquesV2>|null
     */
    public function getStatistiques(): ?array
    {
        return $this->statistiques;
    }

    /**
     * @param list<StatistiquesV2>|null $statistiques
     */
    public function setStatistiques(?array $statistiques): self
    {
        $this->initialized['statistiques'] = true;
        $this->statistiques = $statistiques;

        return $this;
    }
}
