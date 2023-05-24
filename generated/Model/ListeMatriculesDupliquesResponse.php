<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeMatriculesDupliquesResponse
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
     * @var string[]|null
     */
    protected $matriculesDupliques;

    /**
     * @return string[]|null
     */
    public function getMatriculesDupliques(): ?array
    {
        return $this->matriculesDupliques;
    }

    /**
     * @param string[]|null $matriculesDupliques
     */
    public function setMatriculesDupliques(?array $matriculesDupliques): self
    {
        $this->initialized['matriculesDupliques'] = true;
        $this->matriculesDupliques = $matriculesDupliques;

        return $this;
    }
}
