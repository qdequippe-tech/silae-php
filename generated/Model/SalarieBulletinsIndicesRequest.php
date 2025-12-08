<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBulletinsIndicesRequest
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
     * @var RequeteSalarieBulletinIndices|null
     */
    protected $requeteSalariesBulletins;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getRequeteSalariesBulletins(): ?RequeteSalarieBulletinIndices
    {
        return $this->requeteSalariesBulletins;
    }

    public function setRequeteSalariesBulletins(?RequeteSalarieBulletinIndices $requeteSalariesBulletins): self
    {
        $this->initialized['requeteSalariesBulletins'] = true;
        $this->requeteSalariesBulletins = $requeteSalariesBulletins;

        return $this;
    }

    public function getNumeroDossier(): ?string
    {
        return $this->numeroDossier;
    }

    public function setNumeroDossier(?string $numeroDossier): self
    {
        $this->initialized['numeroDossier'] = true;
        $this->numeroDossier = $numeroDossier;

        return $this;
    }
}
