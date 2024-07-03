<?php

namespace QdequippeTech\Silae\Api\Model;

class AnalyseProductionPaieEntreesSortiesResponse
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
     * @var list<StatistiquesEntreesSorties>|null
     */
    protected $statistiquesEntreesSorties;

    /**
     * @return list<StatistiquesEntreesSorties>|null
     */
    public function getStatistiquesEntreesSorties(): ?array
    {
        return $this->statistiquesEntreesSorties;
    }

    /**
     * @param list<StatistiquesEntreesSorties>|null $statistiquesEntreesSorties
     */
    public function setStatistiquesEntreesSorties(?array $statistiquesEntreesSorties): self
    {
        $this->initialized['statistiquesEntreesSorties'] = true;
        $this->statistiquesEntreesSorties = $statistiquesEntreesSorties;

        return $this;
    }
}
