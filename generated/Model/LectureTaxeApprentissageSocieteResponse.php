<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureTaxeApprentissageSocieteResponse
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
     * @var list<TaxeApprentissage>|null
     */
    protected $taxeApprentissage;

    /**
     * @return list<TaxeApprentissage>|null
     */
    public function getTaxeApprentissage(): ?array
    {
        return $this->taxeApprentissage;
    }

    /**
     * @param list<TaxeApprentissage>|null $taxeApprentissage
     */
    public function setTaxeApprentissage(?array $taxeApprentissage): self
    {
        $this->initialized['taxeApprentissage'] = true;
        $this->taxeApprentissage = $taxeApprentissage;

        return $this;
    }
}
