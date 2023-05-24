<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeDSNMensuellesResponse
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
     * @var DSNMensuelle[]|null
     */
    protected $listeDSNMensuelles;

    /**
     * @return DSNMensuelle[]|null
     */
    public function getListeDSNMensuelles(): ?array
    {
        return $this->listeDSNMensuelles;
    }

    /**
     * @param DSNMensuelle[]|null $listeDSNMensuelles
     */
    public function setListeDSNMensuelles(?array $listeDSNMensuelles): self
    {
        $this->initialized['listeDSNMensuelles'] = true;
        $this->listeDSNMensuelles = $listeDSNMensuelles;

        return $this;
    }
}
