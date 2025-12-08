<?php

namespace QdequippeTech\Silae\Api\Model;

class AnalyseProductionPaieEffectifsResponse
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
     * @var list<AnalyseEffectifs>|null
     */
    protected $effectifs;

    /**
     * @return list<AnalyseEffectifs>|null
     */
    public function getEffectifs(): ?array
    {
        return $this->effectifs;
    }

    /**
     * @param list<AnalyseEffectifs>|null $effectifs
     */
    public function setEffectifs(?array $effectifs): self
    {
        $this->initialized['effectifs'] = true;
        $this->effectifs = $effectifs;

        return $this;
    }
}
