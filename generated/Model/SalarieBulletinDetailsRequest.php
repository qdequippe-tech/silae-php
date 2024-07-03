<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBulletinDetailsRequest
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
     * @var RequeteSalarieBulletinDetails|null
     */
    protected $requeteSalarieBulletinDetails;

    /**
     * @var RequeteSalarieBulletinLignesFiltres|null
     */
    protected $requeteSalarieBulletinFiltres;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getRequeteSalarieBulletinDetails(): ?RequeteSalarieBulletinDetails
    {
        return $this->requeteSalarieBulletinDetails;
    }

    public function setRequeteSalarieBulletinDetails(?RequeteSalarieBulletinDetails $requeteSalarieBulletinDetails): self
    {
        $this->initialized['requeteSalarieBulletinDetails'] = true;
        $this->requeteSalarieBulletinDetails = $requeteSalarieBulletinDetails;

        return $this;
    }

    public function getRequeteSalarieBulletinFiltres(): ?RequeteSalarieBulletinLignesFiltres
    {
        return $this->requeteSalarieBulletinFiltres;
    }

    public function setRequeteSalarieBulletinFiltres(?RequeteSalarieBulletinLignesFiltres $requeteSalarieBulletinFiltres): self
    {
        $this->initialized['requeteSalarieBulletinFiltres'] = true;
        $this->requeteSalarieBulletinFiltres = $requeteSalarieBulletinFiltres;

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
