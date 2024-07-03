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
     * @var list<QCCN>|null
     */
    protected $qccn;

    /**
     * @return list<QCCN>|null
     */
    public function getQccn(): ?array
    {
        return $this->qccn;
    }

    /**
     * @param list<QCCN>|null $qccn
     */
    public function setQccn(?array $qccn): self
    {
        $this->initialized['qccn'] = true;
        $this->qccn = $qccn;

        return $this;
    }
}
