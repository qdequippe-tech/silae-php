<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationEffectifSocieteRequest
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
     * @var EffectifSociete[]|null
     */
    protected $effectifSociete;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    /**
     * @return EffectifSociete[]|null
     */
    public function getEffectifSociete(): ?array
    {
        return $this->effectifSociete;
    }

    /**
     * @param EffectifSociete[]|null $effectifSociete
     */
    public function setEffectifSociete(?array $effectifSociete): self
    {
        $this->initialized['effectifSociete'] = true;
        $this->effectifSociete = $effectifSociete;

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
