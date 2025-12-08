<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeOrganismesResponse
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
     * @var list<Organisme>|null
     */
    protected $listeOrganismes;

    /**
     * @return list<Organisme>|null
     */
    public function getListeOrganismes(): ?array
    {
        return $this->listeOrganismes;
    }

    /**
     * @param list<Organisme>|null $listeOrganismes
     */
    public function setListeOrganismes(?array $listeOrganismes): self
    {
        $this->initialized['listeOrganismes'] = true;
        $this->listeOrganismes = $listeOrganismes;

        return $this;
    }
}
