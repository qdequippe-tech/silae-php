<?php

namespace QdequippeTech\Silae\Api\Model;

class AnalyseProductionPaieV2Request
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
     * @var RequeteAnalyseProductionV2|null
     */
    protected $requeteAnalyseProduction;

    public function getRequeteAnalyseProduction(): ?RequeteAnalyseProductionV2
    {
        return $this->requeteAnalyseProduction;
    }

    public function setRequeteAnalyseProduction(?RequeteAnalyseProductionV2 $requeteAnalyseProduction): self
    {
        $this->initialized['requeteAnalyseProduction'] = true;
        $this->requeteAnalyseProduction = $requeteAnalyseProduction;

        return $this;
    }
}
