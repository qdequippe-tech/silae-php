<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeNumerosDossiersResponse
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
     * @var string[]|null
     */
    protected $listeNumerosDossiers;

    /**
     * @return string[]|null
     */
    public function getListeNumerosDossiers(): ?array
    {
        return $this->listeNumerosDossiers;
    }

    /**
     * @param string[]|null $listeNumerosDossiers
     */
    public function setListeNumerosDossiers(?array $listeNumerosDossiers): self
    {
        $this->initialized['listeNumerosDossiers'] = true;
        $this->listeNumerosDossiers = $listeNumerosDossiers;

        return $this;
    }
}
