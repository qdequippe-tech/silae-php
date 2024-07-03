<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBase
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
     * @var string|null
     */
    protected $nomAffiche;

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

    public function getNomAffiche(): ?string
    {
        return $this->nomAffiche;
    }

    public function setNomAffiche(?string $nomAffiche): self
    {
        $this->initialized['nomAffiche'] = true;
        $this->nomAffiche = $nomAffiche;

        return $this;
    }
}
