<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureTaxeTransportResponse
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
     * @var list<TaxeTransport>|null
     */
    protected $taxeTransport;

    /**
     * @return list<TaxeTransport>|null
     */
    public function getTaxeTransport(): ?array
    {
        return $this->taxeTransport;
    }

    /**
     * @param list<TaxeTransport>|null $taxeTransport
     */
    public function setTaxeTransport(?array $taxeTransport): self
    {
        $this->initialized['taxeTransport'] = true;
        $this->taxeTransport = $taxeTransport;

        return $this;
    }
}
