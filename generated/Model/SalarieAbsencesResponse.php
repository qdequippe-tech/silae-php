<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieAbsencesResponse
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
     * @var list<SalarieAbsence>|null
     */
    protected $salarieAbsences;

    /**
     * @return list<SalarieAbsence>|null
     */
    public function getSalarieAbsences(): ?array
    {
        return $this->salarieAbsences;
    }

    /**
     * @param list<SalarieAbsence>|null $salarieAbsences
     */
    public function setSalarieAbsences(?array $salarieAbsences): self
    {
        $this->initialized['salarieAbsences'] = true;
        $this->salarieAbsences = $salarieAbsences;

        return $this;
    }
}
