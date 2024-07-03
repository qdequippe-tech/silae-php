<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureAxesAnalytiquesSalariesResponse
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
     * @var list<AxesAnalytiqueSalarie>|null
     */
    protected $axesAnalytiqueSalarie;

    /**
     * @var \DateTime|null
     */
    protected $periode;

    /**
     * @return list<AxesAnalytiqueSalarie>|null
     */
    public function getAxesAnalytiqueSalarie(): ?array
    {
        return $this->axesAnalytiqueSalarie;
    }

    /**
     * @param list<AxesAnalytiqueSalarie>|null $axesAnalytiqueSalarie
     */
    public function setAxesAnalytiqueSalarie(?array $axesAnalytiqueSalarie): self
    {
        $this->initialized['axesAnalytiqueSalarie'] = true;
        $this->axesAnalytiqueSalarie = $axesAnalytiqueSalarie;

        return $this;
    }

    public function getPeriode(): ?\DateTime
    {
        return $this->periode;
    }

    public function setPeriode(?\DateTime $periode): self
    {
        $this->initialized['periode'] = true;
        $this->periode = $periode;

        return $this;
    }
}
