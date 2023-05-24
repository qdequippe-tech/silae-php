<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieInitialiserCumulsRequest
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
     * @var SalarieCumuls|null
     */
    protected $salarieCumuls;
    /**
     * @var string|null
     */
    protected $matriculeSalarie;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getSalarieCumuls(): ?SalarieCumuls
    {
        return $this->salarieCumuls;
    }

    public function setSalarieCumuls(?SalarieCumuls $salarieCumuls): self
    {
        $this->initialized['salarieCumuls'] = true;
        $this->salarieCumuls = $salarieCumuls;

        return $this;
    }

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
