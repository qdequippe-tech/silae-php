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
     * @var SalarieBase[]|null
     */
    protected $salaires;

    /**
     * @return SalarieBase[]|null
     */
    public function getSalaires(): ?array
    {
        return $this->salaires;
    }

    /**
     * @param SalarieBase[]|null $salaires
     */
    public function setSalaires(?array $salaires): self
    {
        $this->initialized['salaires'] = true;
        $this->salaires = $salaires;

        return $this;
    }
}
