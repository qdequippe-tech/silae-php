<?php

namespace QdequippeTech\Silae\Api\Model;

class BilanMatricules
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
     * @var list<string>|null
     */
    protected $matriculesInclus;

    /**
     * @var list<string>|null
     */
    protected $matriculesExclus;

    /**
     * @return list<string>|null
     */
    public function getMatriculesInclus(): ?array
    {
        return $this->matriculesInclus;
    }

    /**
     * @param list<string>|null $matriculesInclus
     */
    public function setMatriculesInclus(?array $matriculesInclus): self
    {
        $this->initialized['matriculesInclus'] = true;
        $this->matriculesInclus = $matriculesInclus;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getMatriculesExclus(): ?array
    {
        return $this->matriculesExclus;
    }

    /**
     * @param list<string>|null $matriculesExclus
     */
    public function setMatriculesExclus(?array $matriculesExclus): self
    {
        $this->initialized['matriculesExclus'] = true;
        $this->matriculesExclus = $matriculesExclus;

        return $this;
    }
}
