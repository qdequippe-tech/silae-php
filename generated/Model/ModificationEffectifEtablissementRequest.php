<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationEffectifEtablissementRequest
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
     * @var EffectifEtablissement[]|null
     */
    protected $effectifEtablissement;
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
     * @return EffectifEtablissement[]|null
     */
    public function getEffectifEtablissement(): ?array
    {
        return $this->effectifEtablissement;
    }

    /**
     * @param EffectifEtablissement[]|null $effectifEtablissement
     */
    public function setEffectifEtablissement(?array $effectifEtablissement): self
    {
        $this->initialized['effectifEtablissement'] = true;
        $this->effectifEtablissement = $effectifEtablissement;

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
