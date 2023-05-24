<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieReinitialiserSaisiesResponse
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
     * @var int|null
     */
    protected $saisiesHeuresReinitialisees;
    /**
     * @var int|null
     */
    protected $saisiesPrimesReinitialisees;
    /**
     * @var int|null
     */
    protected $saisiesAbsencesReinitialisees;

    public function getSaisiesHeuresReinitialisees(): ?int
    {
        return $this->saisiesHeuresReinitialisees;
    }

    public function setSaisiesHeuresReinitialisees(?int $saisiesHeuresReinitialisees): self
    {
        $this->initialized['saisiesHeuresReinitialisees'] = true;
        $this->saisiesHeuresReinitialisees = $saisiesHeuresReinitialisees;

        return $this;
    }

    public function getSaisiesPrimesReinitialisees(): ?int
    {
        return $this->saisiesPrimesReinitialisees;
    }

    public function setSaisiesPrimesReinitialisees(?int $saisiesPrimesReinitialisees): self
    {
        $this->initialized['saisiesPrimesReinitialisees'] = true;
        $this->saisiesPrimesReinitialisees = $saisiesPrimesReinitialisees;

        return $this;
    }

    public function getSaisiesAbsencesReinitialisees(): ?int
    {
        return $this->saisiesAbsencesReinitialisees;
    }

    public function setSaisiesAbsencesReinitialisees(?int $saisiesAbsencesReinitialisees): self
    {
        $this->initialized['saisiesAbsencesReinitialisees'] = true;
        $this->saisiesAbsencesReinitialisees = $saisiesAbsencesReinitialisees;

        return $this;
    }
}
