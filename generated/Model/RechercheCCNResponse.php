<?php

namespace QdequippeTech\Silae\Api\Model;

class RechercheCCNResponse
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
     * @var CCN[]|null
     */
    protected $ccn;

    /**
     * @return CCN[]|null
     */
    public function getCcn(): ?array
    {
        return $this->ccn;
    }

    /**
     * @param CCN[]|null $ccn
     */
    public function setCcn(?array $ccn): self
    {
        $this->initialized['ccn'] = true;
        $this->ccn = $ccn;

        return $this;
    }
}
