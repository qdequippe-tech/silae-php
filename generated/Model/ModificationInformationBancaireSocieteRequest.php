<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationInformationBancaireSocieteRequest
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
     * @var int|null
     */
    protected $sepaModeComptabilisation;
    /**
     * @var InformationBancaireSociete[]|null
     */
    protected $informationBancaireSociete;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getSepaModeComptabilisation(): ?int
    {
        return $this->sepaModeComptabilisation;
    }

    public function setSepaModeComptabilisation(?int $sepaModeComptabilisation): self
    {
        $this->initialized['sepaModeComptabilisation'] = true;
        $this->sepaModeComptabilisation = $sepaModeComptabilisation;

        return $this;
    }

    /**
     * @return InformationBancaireSociete[]|null
     */
    public function getInformationBancaireSociete(): ?array
    {
        return $this->informationBancaireSociete;
    }

    /**
     * @param InformationBancaireSociete[]|null $informationBancaireSociete
     */
    public function setInformationBancaireSociete(?array $informationBancaireSociete): self
    {
        $this->initialized['informationBancaireSociete'] = true;
        $this->informationBancaireSociete = $informationBancaireSociete;

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
