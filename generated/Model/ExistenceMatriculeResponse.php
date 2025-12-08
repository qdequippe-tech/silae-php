<?php

namespace QdequippeTech\Silae\Api\Model;

class ExistenceMatriculeResponse
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
     * @var bool|null
     */
    protected $existe;

    /**
     * @var list<string>|null
     */
    protected $matricules;

    public function getExiste(): ?bool
    {
        return $this->existe;
    }

    public function setExiste(?bool $existe): self
    {
        $this->initialized['existe'] = true;
        $this->existe = $existe;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getMatricules(): ?array
    {
        return $this->matricules;
    }

    /**
     * @param list<string>|null $matricules
     */
    public function setMatricules(?array $matricules): self
    {
        $this->initialized['matricules'] = true;
        $this->matricules = $matricules;

        return $this;
    }
}
