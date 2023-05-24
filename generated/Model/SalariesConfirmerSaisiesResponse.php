<?php

namespace QdequippeTech\Silae\Api\Model;

class SalariesConfirmerSaisiesResponse
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
    protected $saisiesHeuresConfirmees;
    /**
     * @var int|null
     */
    protected $saisiesPrimesConfirmees;

    public function getSaisiesHeuresConfirmees(): ?int
    {
        return $this->saisiesHeuresConfirmees;
    }

    public function setSaisiesHeuresConfirmees(?int $saisiesHeuresConfirmees): self
    {
        $this->initialized['saisiesHeuresConfirmees'] = true;
        $this->saisiesHeuresConfirmees = $saisiesHeuresConfirmees;

        return $this;
    }

    public function getSaisiesPrimesConfirmees(): ?int
    {
        return $this->saisiesPrimesConfirmees;
    }

    public function setSaisiesPrimesConfirmees(?int $saisiesPrimesConfirmees): self
    {
        $this->initialized['saisiesPrimesConfirmees'] = true;
        $this->saisiesPrimesConfirmees = $saisiesPrimesConfirmees;

        return $this;
    }
}
