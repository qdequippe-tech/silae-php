<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieActiviteJournalierePeriode
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
    protected $periodeActivite;
    /**
     * @var SalarieActiviteJournaliere[]|null
     */
    protected $calendrier;

    public function getPeriodeActivite(): ?\DateTime
    {
        return $this->periodeActivite;
    }

    public function setPeriodeActivite(?\DateTime $periodeActivite): self
    {
        $this->initialized['periodeActivite'] = true;
        $this->periodeActivite = $periodeActivite;

        return $this;
    }

    /**
     * @return SalarieActiviteJournaliere[]|null
     */
    public function getCalendrier(): ?array
    {
        return $this->calendrier;
    }

    /**
     * @param SalarieActiviteJournaliere[]|null $calendrier
     */
    public function setCalendrier(?array $calendrier): self
    {
        $this->initialized['calendrier'] = true;
        $this->calendrier = $calendrier;

        return $this;
    }
}
