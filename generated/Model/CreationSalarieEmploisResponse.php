<?php

namespace QdequippeTech\Silae\Api\Model;

class CreationSalarieEmploisResponse
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
     * @var CreationSalarieEmploiResult[]|null
     */
    protected $resultatsCreationsEmplois;

    /**
     * @return CreationSalarieEmploiResult[]|null
     */
    public function getResultatsCreationsEmplois(): ?array
    {
        return $this->resultatsCreationsEmplois;
    }

    /**
     * @param CreationSalarieEmploiResult[]|null $resultatsCreationsEmplois
     */
    public function setResultatsCreationsEmplois(?array $resultatsCreationsEmplois): self
    {
        $this->initialized['resultatsCreationsEmplois'] = true;
        $this->resultatsCreationsEmplois = $resultatsCreationsEmplois;

        return $this;
    }
}
