<?php

namespace QdequippeTech\Silae\Api\Model;

class CreationConfigurationAccesApiRequest
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
     * @var CreationConfigurationAccesApi|null
     */
    protected $configuration;

    public function getConfiguration(): ?CreationConfigurationAccesApi
    {
        return $this->configuration;
    }

    public function setConfiguration(?CreationConfigurationAccesApi $configuration): self
    {
        $this->initialized['configuration'] = true;
        $this->configuration = $configuration;

        return $this;
    }
}
