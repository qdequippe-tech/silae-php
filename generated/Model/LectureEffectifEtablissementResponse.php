<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureEffectifEtablissementResponse
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
     * @var list<EffectifEtablissement>|null
     */
    protected $effectifEtablissement;

    /**
     * @return list<EffectifEtablissement>|null
     */
    public function getEffectifEtablissement(): ?array
    {
        return $this->effectifEtablissement;
    }

    /**
     * @param list<EffectifEtablissement>|null $effectifEtablissement
     */
    public function setEffectifEtablissement(?array $effectifEtablissement): self
    {
        $this->initialized['effectifEtablissement'] = true;
        $this->effectifEtablissement = $effectifEtablissement;

        return $this;
    }
}
