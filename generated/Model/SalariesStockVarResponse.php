<?php

namespace QdequippeTech\Silae\Api\Model;

class SalariesStockVarResponse
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
     * @var list<SalarieStockVarResult>|null
     */
    protected $salariesStockVar;

    /**
     * @return list<SalarieStockVarResult>|null
     */
    public function getSalariesStockVar(): ?array
    {
        return $this->salariesStockVar;
    }

    /**
     * @param list<SalarieStockVarResult>|null $salariesStockVar
     */
    public function setSalariesStockVar(?array $salariesStockVar): self
    {
        $this->initialized['salariesStockVar'] = true;
        $this->salariesStockVar = $salariesStockVar;

        return $this;
    }
}
