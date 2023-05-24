<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBulletinEnteteRequest
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
     * @var RequeteSalarieBulletinEntete|null
     */
    protected $requeteSalarieBulletinEntete;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getRequeteSalarieBulletinEntete(): ?RequeteSalarieBulletinEntete
    {
        return $this->requeteSalarieBulletinEntete;
    }

    public function setRequeteSalarieBulletinEntete(?RequeteSalarieBulletinEntete $requeteSalarieBulletinEntete): self
    {
        $this->initialized['requeteSalarieBulletinEntete'] = true;
        $this->requeteSalarieBulletinEntete = $requeteSalarieBulletinEntete;

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
