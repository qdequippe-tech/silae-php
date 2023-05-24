<?php

namespace QdequippeTech\Silae\Api\Model;

class EffectifSociete
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
    protected $effectif1GlobalURSSAF;
    /**
     * @var float|null
     */
    protected $effectif2MoyenURSAFF;
    /**
     * @var float|null
     */
    protected $effectifDADSU;

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

    public function getEffectif1GlobalURSSAF(): ?float
    {
        return $this->effectif1GlobalURSSAF;
    }

    public function setEffectif1GlobalURSSAF(?float $effectif1GlobalURSSAF): self
    {
        $this->initialized['effectif1GlobalURSSAF'] = true;
        $this->effectif1GlobalURSSAF = $effectif1GlobalURSSAF;

        return $this;
    }

    public function getEffectif2MoyenURSAFF(): ?float
    {
        return $this->effectif2MoyenURSAFF;
    }

    public function setEffectif2MoyenURSAFF(?float $effectif2MoyenURSAFF): self
    {
        $this->initialized['effectif2MoyenURSAFF'] = true;
        $this->effectif2MoyenURSAFF = $effectif2MoyenURSAFF;

        return $this;
    }

    public function getEffectifDADSU(): ?float
    {
        return $this->effectifDADSU;
    }

    public function setEffectifDADSU(?float $effectifDADSU): self
    {
        $this->initialized['effectifDADSU'] = true;
        $this->effectifDADSU = $effectifDADSU;

        return $this;
    }
}
