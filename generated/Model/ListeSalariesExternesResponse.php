<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeSalariesExternesResponse
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
     * @var list<SalarieBase>|null
     */
    protected $listeSalariesExternes;

    /**
     * @return list<SalarieBase>|null
     */
    public function getListeSalariesExternes(): ?array
    {
        return $this->listeSalariesExternes;
    }

    /**
     * @param list<SalarieBase>|null $listeSalariesExternes
     */
    public function setListeSalariesExternes(?array $listeSalariesExternes): self
    {
        $this->initialized['listeSalariesExternes'] = true;
        $this->listeSalariesExternes = $listeSalariesExternes;

        return $this;
    }
}
