<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieRecupererRecuDPAEResponse
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
     * @var RecupererRecuDPAEResult[]|null
     */
    protected $recusDPAEParEmploi;

    /**
     * @return RecupererRecuDPAEResult[]|null
     */
    public function getRecusDPAEParEmploi(): ?array
    {
        return $this->recusDPAEParEmploi;
    }

    /**
     * @param RecupererRecuDPAEResult[]|null $recusDPAEParEmploi
     */
    public function setRecusDPAEParEmploi(?array $recusDPAEParEmploi): self
    {
        $this->initialized['recusDPAEParEmploi'] = true;
        $this->recusDPAEParEmploi = $recusDPAEParEmploi;

        return $this;
    }
}
