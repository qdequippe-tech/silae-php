<?php

namespace QdequippeTech\Silae\Api\Model;

class StatistiquesProductionBulletin
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
    protected $periodePaie;

    /**
     * @var int|null
     */
    protected $nbBulletinsOriginaux;

    public function getPeriodePaie(): ?\DateTime
    {
        return $this->periodePaie;
    }

    public function setPeriodePaie(?\DateTime $periodePaie): self
    {
        $this->initialized['periodePaie'] = true;
        $this->periodePaie = $periodePaie;

        return $this;
    }

    public function getNbBulletinsOriginaux(): ?int
    {
        return $this->nbBulletinsOriginaux;
    }

    public function setNbBulletinsOriginaux(?int $nbBulletinsOriginaux): self
    {
        $this->initialized['nbBulletinsOriginaux'] = true;
        $this->nbBulletinsOriginaux = $nbBulletinsOriginaux;

        return $this;
    }
}
