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
     * @var StatistiquesEntreesSorties[]|null
     */
    protected $statistiquesEntreesSorties;

    /**
     * @return StatistiquesEntreesSorties[]|null
     */
    public function getStatistiquesEntreesSorties(): ?array
    {
        return $this->statistiquesEntreesSorties;
    }

    /**
     * @param StatistiquesEntreesSorties[]|null $statistiquesEntreesSorties
     */
    public function setStatistiquesEntreesSorties(?array $statistiquesEntreesSorties): self
    {
        $this->initialized['statistiquesEntreesSorties'] = true;
        $this->statistiquesEntreesSorties = $statistiquesEntreesSorties;

        return $this;
    }
}
