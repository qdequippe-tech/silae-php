<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationTaxeApprentissageSocieteResponse
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
     * @var TaxeApprentissage|null
     */
    protected $taxeApprentissage;

    public function getTaxeApprentissage(): ?TaxeApprentissage
    {
        return $this->taxeApprentissage;
    }

    public function setTaxeApprentissage(?TaxeApprentissage $taxeApprentissage): self
    {
        $this->initialized['taxeApprentissage'] = true;
        $this->taxeApprentissage = $taxeApprentissage;

        return $this;
    }
}
