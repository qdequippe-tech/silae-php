<?php

namespace QdequippeTech\Silae\Api\Model;

class SalariesDUERequest
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
     * @var RequeteSalariesDUE|null
     */
    protected $requeteSalariesDUE;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getRequeteSalariesDUE(): ?RequeteSalariesDUE
    {
        return $this->requeteSalariesDUE;
    }

    public function setRequeteSalariesDUE(?RequeteSalariesDUE $requeteSalariesDUE): self
    {
        $this->initialized['requeteSalariesDUE'] = true;
        $this->requeteSalariesDUE = $requeteSalariesDUE;

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
