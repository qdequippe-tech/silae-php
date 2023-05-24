<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeSalarieEmploisExternesResponse
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
     * @var SalarieEmploiExterneInformations[]|null
     */
    protected $listeSalarieEmploisExternes;

    /**
     * @return SalarieEmploiExterneInformations[]|null
     */
    public function getListeSalarieEmploisExternes(): ?array
    {
        return $this->listeSalarieEmploisExternes;
    }

    /**
     * @param SalarieEmploiExterneInformations[]|null $listeSalarieEmploisExternes
     */
    public function setListeSalarieEmploisExternes(?array $listeSalarieEmploisExternes): self
    {
        $this->initialized['listeSalarieEmploisExternes'] = true;
        $this->listeSalarieEmploisExternes = $listeSalarieEmploisExternes;

        return $this;
    }
}
