<?php

namespace QdequippeTech\Silae\Api\Model;

class ImportXmlParametrageOrganismeDSNResponse
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
     * @var string|null
     */
    protected $compteRendu;
    /**
     * @var string|null
     */
    protected $traitementGlobal;

    public function getCompteRendu(): ?string
    {
        return $this->compteRendu;
    }

    public function setCompteRendu(?string $compteRendu): self
    {
        $this->initialized['compteRendu'] = true;
        $this->compteRendu = $compteRendu;

        return $this;
    }

    public function getTraitementGlobal(): ?string
    {
        return $this->traitementGlobal;
    }

    public function setTraitementGlobal(?string $traitementGlobal): self
    {
        $this->initialized['traitementGlobal'] = true;
        $this->traitementGlobal = $traitementGlobal;

        return $this;
    }
}
