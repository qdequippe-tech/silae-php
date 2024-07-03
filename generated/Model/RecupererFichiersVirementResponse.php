<?php

namespace QdequippeTech\Silae\Api\Model;

class RecupererFichiersVirementResponse
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
     * @var BilanMatricules|null
     */
    protected $bilanMatricules;

    /**
     * @var list<RecupererFichierVirementResult>|null
     */
    protected $fichiersVirements;

    public function getBilanMatricules(): ?BilanMatricules
    {
        return $this->bilanMatricules;
    }

    public function setBilanMatricules(?BilanMatricules $bilanMatricules): self
    {
        $this->initialized['bilanMatricules'] = true;
        $this->bilanMatricules = $bilanMatricules;

        return $this;
    }

    /**
     * @return list<RecupererFichierVirementResult>|null
     */
    public function getFichiersVirements(): ?array
    {
        return $this->fichiersVirements;
    }

    /**
     * @param list<RecupererFichierVirementResult>|null $fichiersVirements
     */
    public function setFichiersVirements(?array $fichiersVirements): self
    {
        $this->initialized['fichiersVirements'] = true;
        $this->fichiersVirements = $fichiersVirements;

        return $this;
    }
}
