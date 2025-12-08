<?php

namespace QdequippeTech\Silae\Api\Model;

class AnalyseProductionPaieBulletinsOriginauxResponse
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
     * @var list<StatistiquesBulletin>|null
     */
    protected $statistiques;

    /**
     * @return list<StatistiquesBulletin>|null
     */
    public function getStatistiques(): ?array
    {
        return $this->statistiques;
    }

    /**
     * @param list<StatistiquesBulletin>|null $statistiques
     */
    public function setStatistiques(?array $statistiques): self
    {
        $this->initialized['statistiques'] = true;
        $this->statistiques = $statistiques;

        return $this;
    }
}
