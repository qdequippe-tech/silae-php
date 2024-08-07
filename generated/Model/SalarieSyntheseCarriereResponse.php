<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieSyntheseCarriereResponse
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
     * @var list<SalarieElementCarriere>|null
     */
    protected $syntheseCarriere;

    /**
     * @return list<SalarieElementCarriere>|null
     */
    public function getSyntheseCarriere(): ?array
    {
        return $this->syntheseCarriere;
    }

    /**
     * @param list<SalarieElementCarriere>|null $syntheseCarriere
     */
    public function setSyntheseCarriere(?array $syntheseCarriere): self
    {
        $this->initialized['syntheseCarriere'] = true;
        $this->syntheseCarriere = $syntheseCarriere;

        return $this;
    }
}
