<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeSalarieEmploisResponse
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
     * @var list<SalarieEmploiInformations>|null
     */
    protected $listeSalarieEmplois;

    /**
     * @return list<SalarieEmploiInformations>|null
     */
    public function getListeSalarieEmplois(): ?array
    {
        return $this->listeSalarieEmplois;
    }

    /**
     * @param list<SalarieEmploiInformations>|null $listeSalarieEmplois
     */
    public function setListeSalarieEmplois(?array $listeSalarieEmplois): self
    {
        $this->initialized['listeSalarieEmplois'] = true;
        $this->listeSalarieEmplois = $listeSalarieEmplois;

        return $this;
    }
}
