<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationTaxeApprentissageEtablissementResponse
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
    /**
     * @var bool|null
     */
    protected $etablissementDiffereSociete;

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

    public function getEtablissementDiffereSociete(): ?bool
    {
        return $this->etablissementDiffereSociete;
    }

    public function setEtablissementDiffereSociete(?bool $etablissementDiffereSociete): self
    {
        $this->initialized['etablissementDiffereSociete'] = true;
        $this->etablissementDiffereSociete = $etablissementDiffereSociete;

        return $this;
    }
}
