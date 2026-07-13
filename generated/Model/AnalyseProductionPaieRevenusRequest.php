<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class AnalyseProductionPaieRevenusRequest
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
     * @var RequeteAnalyseProductionRevenus|null
     */
    protected $requeteAnalyseProductionRevenus;

    public function getRequeteAnalyseProductionRevenus(): ?RequeteAnalyseProductionRevenus
    {
        return $this->requeteAnalyseProductionRevenus;
    }

    public function setRequeteAnalyseProductionRevenus(?RequeteAnalyseProductionRevenus $requeteAnalyseProductionRevenus): self
    {
        $this->initialized['requeteAnalyseProductionRevenus'] = true;
        $this->requeteAnalyseProductionRevenus = $requeteAnalyseProductionRevenus;

        return $this;
    }
}
