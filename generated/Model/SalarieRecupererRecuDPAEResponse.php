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
     * @var list<RecupererRecuDPAEResult>|null
     */
    protected $recusDPAEParEmploi;

    /**
     * @return list<RecupererRecuDPAEResult>|null
     */
    public function getRecusDPAEParEmploi(): ?array
    {
        return $this->recusDPAEParEmploi;
    }

    /**
     * @param list<RecupererRecuDPAEResult>|null $recusDPAEParEmploi
     */
    public function setRecusDPAEParEmploi(?array $recusDPAEParEmploi): self
    {
        $this->initialized['recusDPAEParEmploi'] = true;
        $this->recusDPAEParEmploi = $recusDPAEParEmploi;

        return $this;
    }
}
