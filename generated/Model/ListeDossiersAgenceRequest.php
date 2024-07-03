<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeDossiersAgenceRequest
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
    protected $codeAgence;

    /**
     * @var int|null
     */
    protected $typeDossiers;

    public function getCodeAgence(): ?string
    {
        return $this->codeAgence;
    }

    public function setCodeAgence(?string $codeAgence): self
    {
        $this->initialized['codeAgence'] = true;
        $this->codeAgence = $codeAgence;

        return $this;
    }

    public function getTypeDossiers(): ?int
    {
        return $this->typeDossiers;
    }

    public function setTypeDossiers(?int $typeDossiers): self
    {
        $this->initialized['typeDossiers'] = true;
        $this->typeDossiers = $typeDossiers;

        return $this;
    }
}
