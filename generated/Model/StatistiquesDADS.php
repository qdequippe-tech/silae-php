<?php

namespace QdequippeTech\Silae\Api\Model;

class StatistiquesDADS
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
    protected $annee;
    /**
     * @var int|null
     */
    protected $nbSalaries;
    /**
     * @var int|null
     */
    protected $effectif3112;

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(?int $annee): self
    {
        $this->initialized['annee'] = true;
        $this->annee = $annee;

        return $this;
    }

    public function getNbSalaries(): ?int
    {
        return $this->nbSalaries;
    }

    public function setNbSalaries(?int $nbSalaries): self
    {
        $this->initialized['nbSalaries'] = true;
        $this->nbSalaries = $nbSalaries;

        return $this;
    }

    public function getEffectif3112(): ?int
    {
        return $this->effectif3112;
    }

    public function setEffectif3112(?int $effectif3112): self
    {
        $this->initialized['effectif3112'] = true;
        $this->effectif3112 = $effectif3112;

        return $this;
    }
}
