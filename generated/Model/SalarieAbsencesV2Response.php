<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieAbsencesV2Response
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
     * @var list<SalarieAbsenceV3>|null
     */
    protected $salarieAbsences;

    /**
     * @return list<SalarieAbsenceV3>|null
     */
    public function getSalarieAbsences(): ?array
    {
        return $this->salarieAbsences;
    }

    /**
     * @param list<SalarieAbsenceV3>|null $salarieAbsences
     */
    public function setSalarieAbsences(?array $salarieAbsences): self
    {
        $this->initialized['salarieAbsences'] = true;
        $this->salarieAbsences = $salarieAbsences;

        return $this;
    }
}
