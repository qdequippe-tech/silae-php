<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBulletinsIndicesResponse
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
     * @var list<SalarieBulletinsIndicesResult>|null
     */
    protected $salariesBulletins;

    /**
     * @var string|null
     */
    protected $matriculeSalarie;

    /**
     * @return list<SalarieBulletinsIndicesResult>|null
     */
    public function getSalariesBulletins(): ?array
    {
        return $this->salariesBulletins;
    }

    /**
     * @param list<SalarieBulletinsIndicesResult>|null $salariesBulletins
     */
    public function setSalariesBulletins(?array $salariesBulletins): self
    {
        $this->initialized['salariesBulletins'] = true;
        $this->salariesBulletins = $salariesBulletins;

        return $this;
    }

    public function getMatriculeSalarie(): ?string
    {
        return $this->matriculeSalarie;
    }

    public function setMatriculeSalarie(?string $matriculeSalarie): self
    {
        $this->initialized['matriculeSalarie'] = true;
        $this->matriculeSalarie = $matriculeSalarie;

        return $this;
    }
}
