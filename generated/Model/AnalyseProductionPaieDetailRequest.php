<?php

namespace QdequippeTech\Silae\Api\Model;

class AnalyseProductionPaieDetailRequest
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
     * @var RequeteAnalyseProductionDetail|null
     */
    protected $requeteAnalyseProductionDetail;

    public function getRequeteAnalyseProductionDetail(): ?RequeteAnalyseProductionDetail
    {
        return $this->requeteAnalyseProductionDetail;
    }

    public function setRequeteAnalyseProductionDetail(?RequeteAnalyseProductionDetail $requeteAnalyseProductionDetail): self
    {
        $this->initialized['requeteAnalyseProductionDetail'] = true;
        $this->requeteAnalyseProductionDetail = $requeteAnalyseProductionDetail;

        return $this;
    }
}
