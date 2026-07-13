<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class AnalyseActiviteStatutAccesOptionsResponse
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
     * @var list<AnalyseActiviteStatutAccesOptions>|null
     */
    protected $statutAccesOptions;

    /**
     * @return list<AnalyseActiviteStatutAccesOptions>|null
     */
    public function getStatutAccesOptions(): ?array
    {
        return $this->statutAccesOptions;
    }

    /**
     * @param list<AnalyseActiviteStatutAccesOptions>|null $statutAccesOptions
     */
    public function setStatutAccesOptions(?array $statutAccesOptions): self
    {
        $this->initialized['statutAccesOptions'] = true;
        $this->statutAccesOptions = $statutAccesOptions;

        return $this;
    }
}
