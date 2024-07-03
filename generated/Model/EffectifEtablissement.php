<?php

namespace QdequippeTech\Silae\Api\Model;

class EffectifEtablissement
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
     * @var \DateTime|null
     */
    protected $annee;

    /**
     * @var float|null
     */
    protected $effectifCT;

    public function getAnnee(): ?\DateTime
    {
        return $this->annee;
    }

    public function setAnnee(?\DateTime $annee): self
    {
        $this->initialized['annee'] = true;
        $this->annee = $annee;

        return $this;
    }

    public function getEffectifCT(): ?float
    {
        return $this->effectifCT;
    }

    public function setEffectifCT(?float $effectifCT): self
    {
        $this->initialized['effectifCT'] = true;
        $this->effectifCT = $effectifCT;

        return $this;
    }
}
