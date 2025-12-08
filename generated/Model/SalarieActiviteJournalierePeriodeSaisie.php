<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieActiviteJournalierePeriodeSaisie
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
     * @var bool|null
     */
    protected $classique;

    /**
     * @var list<SalarieActiviteJournaliereSaisie>|null
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

    public function getClassique(): ?bool
    {
        return $this->classique;
    }

    public function setClassique(?bool $classique): self
    {
        $this->initialized['classique'] = true;
        $this->classique = $classique;

        return $this;
    }

    /**
     * @return list<SalarieActiviteJournaliereSaisie>|null
     */
    public function getCalendrier(): ?array
    {
        return $this->calendrier;
    }

    /**
     * @param list<SalarieActiviteJournaliereSaisie>|null $calendrier
     */
    public function setCalendrier(?array $calendrier): self
    {
        $this->initialized['calendrier'] = true;
        $this->calendrier = $calendrier;

        return $this;
    }
}
