<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieAjouterPrimeRequest
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
     * @var SalariePrime|null
     */
    protected $prime;
    /**
     * @var string|null
     */
    protected $matriculeSalarie;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getPrime(): ?SalariePrime
    {
        return $this->prime;
    }

    public function setPrime(?SalariePrime $prime): self
    {
        $this->initialized['prime'] = true;
        $this->prime = $prime;

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
