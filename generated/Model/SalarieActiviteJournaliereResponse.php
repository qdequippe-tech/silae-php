<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieActiviteJournaliereResponse
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
     * @var SalarieActiviteJournalierePeriodeSaisie|null
     */
    protected $activiteJournalierePeriode;

    public function getActiviteJournalierePeriode(): ?SalarieActiviteJournalierePeriodeSaisie
    {
        return $this->activiteJournalierePeriode;
    }

    public function setActiviteJournalierePeriode(?SalarieActiviteJournalierePeriodeSaisie $activiteJournalierePeriode): self
    {
        $this->initialized['activiteJournalierePeriode'] = true;
        $this->activiteJournalierePeriode = $activiteJournalierePeriode;

        return $this;
    }
}
