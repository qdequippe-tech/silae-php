<?php

namespace QdequippeTech\Silae\Api\Model;

class EtablissementsAExclureCVAERequest
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
     * @var string[]|null
     */
    protected $nomsInterneEtablissements;
    /**
     * @var bool|null
     */
    protected $exclure;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    /**
     * @return string[]|null
     */
    public function getNomsInterneEtablissements(): ?array
    {
        return $this->nomsInterneEtablissements;
    }

    /**
     * @param string[]|null $nomsInterneEtablissements
     */
    public function setNomsInterneEtablissements(?array $nomsInterneEtablissements): self
    {
        $this->initialized['nomsInterneEtablissements'] = true;
        $this->nomsInterneEtablissements = $nomsInterneEtablissements;

        return $this;
    }

    public function getExclure(): ?bool
    {
        return $this->exclure;
    }

    public function setExclure(?bool $exclure): self
    {
        $this->initialized['exclure'] = true;
        $this->exclure = $exclure;

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
