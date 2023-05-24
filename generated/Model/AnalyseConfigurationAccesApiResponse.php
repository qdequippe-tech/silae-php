<?php

namespace QdequippeTech\Silae\Api\Model;

class AnalyseConfigurationAccesApiResponse
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
     * @var ConfigurationAccesApi[]|null
     */
    protected $statistiques;

    /**
     * @return ConfigurationAccesApi[]|null
     */
    public function getStatistiques(): ?array
    {
        return $this->statistiques;
    }

    /**
     * @param ConfigurationAccesApi[]|null $statistiques
     */
    public function setStatistiques(?array $statistiques): self
    {
        $this->initialized['statistiques'] = true;
        $this->statistiques = $statistiques;

        return $this;
    }
}
