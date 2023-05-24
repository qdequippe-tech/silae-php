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
     * @var TaxeTransport[]|null
     */
    protected $taxeTransport;

    /**
     * @return TaxeTransport[]|null
     */
    public function getTaxeTransport(): ?array
    {
        return $this->taxeTransport;
    }

    /**
     * @param TaxeTransport[]|null $taxeTransport
     */
    public function setTaxeTransport(?array $taxeTransport): self
    {
        $this->initialized['taxeTransport'] = true;
        $this->taxeTransport = $taxeTransport;

        return $this;
    }
}
