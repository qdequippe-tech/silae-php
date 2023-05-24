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
     * @var StatistiquesBureautique[]|null
     */
    protected $statistiquesBureautique;

    /**
     * @return StatistiquesBureautique[]|null
     */
    public function getStatistiquesBureautique(): ?array
    {
        return $this->statistiquesBureautique;
    }

    /**
     * @param StatistiquesBureautique[]|null $statistiquesBureautique
     */
    public function setStatistiquesBureautique(?array $statistiquesBureautique): self
    {
        $this->initialized['statistiquesBureautique'] = true;
        $this->statistiquesBureautique = $statistiquesBureautique;

        return $this;
    }
}
