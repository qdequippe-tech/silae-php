<?php

namespace QdequippeTech\Silae\Api\Model;

class SalariesBulletinsResponse
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
     * @var SalarieBulletinsResult[]|null
     */
    protected $salariesBulletins;

    /**
     * @return SalarieBulletinsResult[]|null
     */
    public function getSalariesBulletins(): ?array
    {
        return $this->salariesBulletins;
    }

    /**
     * @param SalarieBulletinsResult[]|null $salariesBulletins
     */
    public function setSalariesBulletins(?array $salariesBulletins): self
    {
        $this->initialized['salariesBulletins'] = true;
        $this->salariesBulletins = $salariesBulletins;

        return $this;
    }
}
