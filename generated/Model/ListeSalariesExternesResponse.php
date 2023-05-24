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
     * @var SalarieBase[]|null
     */
    protected $listeSalariesExternes;

    /**
     * @return SalarieBase[]|null
     */
    public function getListeSalariesExternes(): ?array
    {
        return $this->listeSalariesExternes;
    }

    /**
     * @param SalarieBase[]|null $listeSalariesExternes
     */
    public function setListeSalariesExternes(?array $listeSalariesExternes): self
    {
        $this->initialized['listeSalariesExternes'] = true;
        $this->listeSalariesExternes = $listeSalariesExternes;

        return $this;
    }
}
