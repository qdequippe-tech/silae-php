<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeMatriculesDupliquesDansDomaineResponse
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
     * @var list<CoupleDossierMatricule>|null
     */
    protected $listeCoupleDossierMatricule;

    /**
     * @return list<CoupleDossierMatricule>|null
     */
    public function getListeCoupleDossierMatricule(): ?array
    {
        return $this->listeCoupleDossierMatricule;
    }

    /**
     * @param list<CoupleDossierMatricule>|null $listeCoupleDossierMatricule
     */
    public function setListeCoupleDossierMatricule(?array $listeCoupleDossierMatricule): self
    {
        $this->initialized['listeCoupleDossierMatricule'] = true;
        $this->listeCoupleDossierMatricule = $listeCoupleDossierMatricule;

        return $this;
    }
}
