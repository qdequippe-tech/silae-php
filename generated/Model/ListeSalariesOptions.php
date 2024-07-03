<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeSalariesOptions
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
     * @var \DateTime|null
     */
    protected $optionActifSurPeriode;

    /**
     * @var \DateTime|null
     */
    protected $optionActifALaDate;

    public function getOptionActifSurPeriode(): ?\DateTime
    {
        return $this->optionActifSurPeriode;
    }

    public function setOptionActifSurPeriode(?\DateTime $optionActifSurPeriode): self
    {
        $this->initialized['optionActifSurPeriode'] = true;
        $this->optionActifSurPeriode = $optionActifSurPeriode;

        return $this;
    }

    public function getOptionActifALaDate(): ?\DateTime
    {
        return $this->optionActifALaDate;
    }

    public function setOptionActifALaDate(?\DateTime $optionActifALaDate): self
    {
        $this->initialized['optionActifALaDate'] = true;
        $this->optionActifALaDate = $optionActifALaDate;

        return $this;
    }
}
