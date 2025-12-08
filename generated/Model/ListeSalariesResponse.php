<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeSalariesResponse
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
     * @var list<SalarieInformationsV3>|null
     */
    protected $listeSalariesInformations;

    /**
     * @return list<SalarieInformationsV3>|null
     */
    public function getListeSalariesInformations(): ?array
    {
        return $this->listeSalariesInformations;
    }

    /**
     * @param list<SalarieInformationsV3>|null $listeSalariesInformations
     */
    public function setListeSalariesInformations(?array $listeSalariesInformations): self
    {
        $this->initialized['listeSalariesInformations'] = true;
        $this->listeSalariesInformations = $listeSalariesInformations;

        return $this;
    }
}
