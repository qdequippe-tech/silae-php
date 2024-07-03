<?php

namespace QdequippeTech\Silae\Api\Model;

class SousCategoriesEnPC
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
    protected $sousCategorie;

    /**
     * @var float|null
     */
    protected $pc;

    public function getSousCategorie(): ?string
    {
        return $this->sousCategorie;
    }

    public function setSousCategorie(?string $sousCategorie): self
    {
        $this->initialized['sousCategorie'] = true;
        $this->sousCategorie = $sousCategorie;

        return $this;
    }

    public function getPc(): ?float
    {
        return $this->pc;
    }

    public function setPc(?float $pc): self
    {
        $this->initialized['pc'] = true;
        $this->pc = $pc;

        return $this;
    }
}
