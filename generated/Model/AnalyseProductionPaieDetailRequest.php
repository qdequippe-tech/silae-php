<?php

declare(strict_types=1);

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
     * @var RequeteAnalyseProductionDetailV2|null
     */
    protected $requeteAnalyseProductionDetail;

    public function getRequeteAnalyseProductionDetail(): ?RequeteAnalyseProductionDetailV2
    {
        return $this->requeteAnalyseProductionDetail;
    }

    public function setRequeteAnalyseProductionDetail(?RequeteAnalyseProductionDetailV2 $requeteAnalyseProductionDetail): self
    {
        $this->initialized['requeteAnalyseProductionDetail'] = true;
        $this->requeteAnalyseProductionDetail = $requeteAnalyseProductionDetail;

        return $this;
    }
}
