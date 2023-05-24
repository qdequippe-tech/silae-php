<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBulletinLignesRequest
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
     * @var RequeteSalarieBulletinLignes|null
     */
    protected $requeteSalarieBulletinLignes;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getRequeteSalarieBulletinLignes(): ?RequeteSalarieBulletinLignes
    {
        return $this->requeteSalarieBulletinLignes;
    }

    public function setRequeteSalarieBulletinLignes(?RequeteSalarieBulletinLignes $requeteSalarieBulletinLignes): self
    {
        $this->initialized['requeteSalarieBulletinLignes'] = true;
        $this->requeteSalarieBulletinLignes = $requeteSalarieBulletinLignes;

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
