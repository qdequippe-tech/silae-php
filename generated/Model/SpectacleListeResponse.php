<?php

namespace QdequippeTech\Silae\Api\Model;

class SpectacleListeResponse
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
     * @var list<Spectacle>|null
     */
    protected $spectacles;

    /**
     * @return list<Spectacle>|null
     */
    public function getSpectacles(): ?array
    {
        return $this->spectacles;
    }

    /**
     * @param list<Spectacle>|null $spectacles
     */
    public function setSpectacles(?array $spectacles): self
    {
        $this->initialized['spectacles'] = true;
        $this->spectacles = $spectacles;

        return $this;
    }
}
