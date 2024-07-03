<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieDUERequest
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
     * @var SalarieDUE|null
     */
    protected $salarieDUE;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getSalarieDUE(): ?SalarieDUE
    {
        return $this->salarieDUE;
    }

    public function setSalarieDUE(?SalarieDUE $salarieDUE): self
    {
        $this->initialized['salarieDUE'] = true;
        $this->salarieDUE = $salarieDUE;

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
