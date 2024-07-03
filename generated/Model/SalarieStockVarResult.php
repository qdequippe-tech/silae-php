<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieStockVarResult
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
     * @var string|null
     */
    protected $matriculeSalarie;

    /**
     * @var list<string>|null
     */
    protected $codesStockVar;

    /**
     * @var list<float>|null
     */
    protected $valeursStockVar;

    public function getMatriculeSalarie(): ?string
    {
        return $this->matriculeSalarie;
    }

    public function setMatriculeSalarie(?string $matriculeSalarie): self
    {
        $this->initialized['matriculeSalarie'] = true;
        $this->matriculeSalarie = $matriculeSalarie;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getCodesStockVar(): ?array
    {
        return $this->codesStockVar;
    }

    /**
     * @param list<string>|null $codesStockVar
     */
    public function setCodesStockVar(?array $codesStockVar): self
    {
        $this->initialized['codesStockVar'] = true;
        $this->codesStockVar = $codesStockVar;

        return $this;
    }

    /**
     * @return list<float>|null
     */
    public function getValeursStockVar(): ?array
    {
        return $this->valeursStockVar;
    }

    /**
     * @param list<float>|null $valeursStockVar
     */
    public function setValeursStockVar(?array $valeursStockVar): self
    {
        $this->initialized['valeursStockVar'] = true;
        $this->valeursStockVar = $valeursStockVar;

        return $this;
    }
}
