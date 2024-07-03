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
}
