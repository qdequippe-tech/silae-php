<?php

namespace QdequippeTech\Silae\Api\Model;

class AnalyseProductionPaieEntreesSortiesRequest
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
     * @var RequeteAnalyseProduction|null
     */
    protected $requeteAnalyseProduction;

    public function getRequeteAnalyseProduction(): ?RequeteAnalyseProduction
    {
        return $this->requeteAnalyseProduction;
    }

    public function setRequeteAnalyseProduction(?RequeteAnalyseProduction $requeteAnalyseProduction): self
    {
        $this->initialized['requeteAnalyseProduction'] = true;
        $this->requeteAnalyseProduction = $requeteAnalyseProduction;

        return $this;
    }
}
