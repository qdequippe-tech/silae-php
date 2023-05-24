<?php

namespace QdequippeTech\Silae\Api\Model;

class MatriculeSalarieRequest
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
    protected $matriculeInterneSalarie;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getMatriculeInterneSalarie(): ?string
    {
        return $this->matriculeInterneSalarie;
    }

    public function setMatriculeInterneSalarie(?string $matriculeInterneSalarie): self
    {
        $this->initialized['matriculeInterneSalarie'] = true;
        $this->matriculeInterneSalarie = $matriculeInterneSalarie;

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
