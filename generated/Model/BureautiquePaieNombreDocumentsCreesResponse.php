<?php

namespace QdequippeTech\Silae\Api\Model;

class BureautiquePaieNombreDocumentsCreesResponse
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
     * @var list<StatistiquesBureautique>|null
     */
    protected $statistiquesBureautique;

    /**
     * @return list<StatistiquesBureautique>|null
     */
    public function getStatistiquesBureautique(): ?array
    {
        return $this->statistiquesBureautique;
    }

    /**
     * @param list<StatistiquesBureautique>|null $statistiquesBureautique
     */
    public function setStatistiquesBureautique(?array $statistiquesBureautique): self
    {
        $this->initialized['statistiquesBureautique'] = true;
        $this->statistiquesBureautique = $statistiquesBureautique;

        return $this;
    }
}
