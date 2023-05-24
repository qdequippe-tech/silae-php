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
     * @var Statistiques[]|null
     */
    protected $statistiques;

    /**
     * @return Statistiques[]|null
     */
    public function getStatistiques(): ?array
    {
        return $this->statistiques;
    }

    /**
     * @param Statistiques[]|null $statistiques
     */
    public function setStatistiques(?array $statistiques): self
    {
        $this->initialized['statistiques'] = true;
        $this->statistiques = $statistiques;

        return $this;
    }
}
