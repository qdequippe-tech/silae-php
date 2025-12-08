<?php

namespace QdequippeTech\Silae\Api\Model;

class EcrituresComptablesPaiementSalairesLotsVirementResponse
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
     * @var list<LotsVirement>|null
     */
    protected $listeLotsVirement;

    /**
     * @return list<LotsVirement>|null
     */
    public function getListeLotsVirement(): ?array
    {
        return $this->listeLotsVirement;
    }

    /**
     * @param list<LotsVirement>|null $listeLotsVirement
     */
    public function setListeLotsVirement(?array $listeLotsVirement): self
    {
        $this->initialized['listeLotsVirement'] = true;
        $this->listeLotsVirement = $listeLotsVirement;

        return $this;
    }
}
