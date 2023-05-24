<?php

namespace QdequippeTech\Silae\Api\Model;

class SalariesStockVarRequest
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
     * @var RequeteSalariesStockVar|null
     */
    protected $requeteSalariesStockVar;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getRequeteSalariesStockVar(): ?RequeteSalariesStockVar
    {
        return $this->requeteSalariesStockVar;
    }

    public function setRequeteSalariesStockVar(?RequeteSalariesStockVar $requeteSalariesStockVar): self
    {
        $this->initialized['requeteSalariesStockVar'] = true;
        $this->requeteSalariesStockVar = $requeteSalariesStockVar;

        return $this;
    }

    public function getNumeroDossier(): ?string
    {
        return $this->numeroDossier;
    }

    public function setNumeroDossier(?string $numeroDossier): self
    {
        $this->initialized['numeroDossier'] = true;
        $this->numeroDossier = $numeroDossier;

        return $this;
    }
}
