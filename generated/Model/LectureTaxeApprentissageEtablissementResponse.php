<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureTaxeApprentissageEtablissementResponse
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
     * @var TaxeApprentissage[]|null
     */
    protected $taxeApprentissage;
    /**
     * @var bool|null
     */
    protected $etablissementDiffereSociete;

    /**
     * @return TaxeApprentissage[]|null
     */
    public function getTaxeApprentissage(): ?array
    {
        return $this->taxeApprentissage;
    }

    /**
     * @param TaxeApprentissage[]|null $taxeApprentissage
     */
    public function setTaxeApprentissage(?array $taxeApprentissage): self
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
