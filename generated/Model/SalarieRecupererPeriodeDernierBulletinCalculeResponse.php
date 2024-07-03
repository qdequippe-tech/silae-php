<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieRecupererPeriodeDernierBulletinCalculeResponse
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
    protected $periodeDernierBulletinCalcule;

    public function getPeriodeDernierBulletinCalcule(): ?\DateTime
    {
        return $this->periodeDernierBulletinCalcule;
    }

    public function setPeriodeDernierBulletinCalcule(?\DateTime $periodeDernierBulletinCalcule): self
    {
        $this->initialized['periodeDernierBulletinCalcule'] = true;
        $this->periodeDernierBulletinCalcule = $periodeDernierBulletinCalcule;

        return $this;
    }
}
