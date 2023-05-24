<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureAxesAnalytiquesResponse
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
     * @var AxeAnalytique[]|null
     */
    protected $axesAnalytiques;

    /**
     * @return AxeAnalytique[]|null
     */
    public function getAxesAnalytiques(): ?array
    {
        return $this->axesAnalytiques;
    }

    /**
     * @param AxeAnalytique[]|null $axesAnalytiques
     */
    public function setAxesAnalytiques(?array $axesAnalytiques): self
    {
        $this->initialized['axesAnalytiques'] = true;
        $this->axesAnalytiques = $axesAnalytiques;

        return $this;
    }
}
