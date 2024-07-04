<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureReponsesQuestionnaireConventionnelSalarieResponse
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
     * @var list<QCCNReponses>|null
     */
    protected $qccn;

    /**
     * @return list<QCCNReponses>|null
     */
    public function getQccn(): ?array
    {
        return $this->qccn;
    }

    /**
     * @param list<QCCNReponses>|null $qccn
     */
    public function setQccn(?array $qccn): self
    {
        $this->initialized['qccn'] = true;
        $this->qccn = $qccn;

        return $this;
    }
}
