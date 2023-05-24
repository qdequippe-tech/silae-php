<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationTaxeTransportRequest
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
    protected $nomInterneEtablissement;
    /**
     * @var TaxeTransport[]|null
     */
    protected $taxeTransport;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getNomInterneEtablissement(): ?string
    {
        return $this->nomInterneEtablissement;
    }

    public function setNomInterneEtablissement(?string $nomInterneEtablissement): self
    {
        $this->initialized['nomInterneEtablissement'] = true;
        $this->nomInterneEtablissement = $nomInterneEtablissement;

        return $this;
    }

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

    public function getNumeroDossier(): ?string
    {
        return $this->numeroDossier;
    }

    public function setNumeroDossier(?string $numeroDossier): self
    {
        $this->initialized['numeroDossier'] = true;
        $this->numeroDossier = $numeroDossier;

        return $this;
    }
}
