<?php

namespace QdequippeTech\Silae\Api\Model;

class AnalyseProductionPaieDetailResponse
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
     * @var list<SalarieBase>|null
     */
    protected $salaires;

    /**
     * @return list<SalarieBase>|null
     */
    public function getSalaires(): ?array
    {
        return $this->salaires;
    }

    /**
     * @param list<SalarieBase>|null $salaires
     */
    public function setSalaires(?array $salaires): self
    {
        $this->initialized['salaires'] = true;
        $this->salaires = $salaires;

        return $this;
    }
}
