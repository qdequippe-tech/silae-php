<?php

namespace QdequippeTech\Silae\Api\Model;

class AcquisitionQuestionnaireCCNResponse
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
     * @var QCCN[]|null
     */
    protected $qccn;

    /**
     * @return QCCN[]|null
     */
    public function getQccn(): ?array
    {
        return $this->qccn;
    }

    /**
     * @param QCCN[]|null $qccn
     */
    public function setQccn(?array $qccn): self
    {
        $this->initialized['qccn'] = true;
        $this->qccn = $qccn;

        return $this;
    }
}
