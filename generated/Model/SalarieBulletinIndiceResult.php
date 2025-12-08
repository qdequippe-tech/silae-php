<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBulletinIndiceResult
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
    protected $indicePeriode;

    /**
     * @var string|null
     */
    protected $bulCom1;

    public function getIndicePeriode(): ?int
    {
        return $this->indicePeriode;
    }

    public function setIndicePeriode(?int $indicePeriode): self
    {
        $this->initialized['indicePeriode'] = true;
        $this->indicePeriode = $indicePeriode;

        return $this;
    }

    public function getBulCom1(): ?string
    {
        return $this->bulCom1;
    }

    public function setBulCom1(?string $bulCom1): self
    {
        $this->initialized['bulCom1'] = true;
        $this->bulCom1 = $bulCom1;

        return $this;
    }
}
