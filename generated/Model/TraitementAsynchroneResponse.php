<?php

namespace QdequippeTech\Silae\Api\Model;

class TraitementAsynchroneResponse
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
    protected $guidTache;

    public function getGuidTache(): ?string
    {
        return $this->guidTache;
    }

    public function setGuidTache(?string $guidTache): self
    {
        $this->initialized['guidTache'] = true;
        $this->guidTache = $guidTache;

        return $this;
    }
}
