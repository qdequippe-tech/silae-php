<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureEffectifSocieteResponse
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
     * @var list<EffectifSociete>|null
     */
    protected $effectifSociete;

    /**
     * @return list<EffectifSociete>|null
     */
    public function getEffectifSociete(): ?array
    {
        return $this->effectifSociete;
    }

    /**
     * @param list<EffectifSociete>|null $effectifSociete
     */
    public function setEffectifSociete(?array $effectifSociete): self
    {
        $this->initialized['effectifSociete'] = true;
        $this->effectifSociete = $effectifSociete;

        return $this;
    }
}
