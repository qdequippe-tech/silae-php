<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBulletinResult
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
    protected $identifiantBulletin;
    /**
     * @var SalarieBulletinEnteteSimpleResult|null
     */
    protected $entete;
    /**
     * @var LigneBulletin[]|null
     */
    protected $lignesBulletin;

    public function getIdentifiantBulletin(): ?int
    {
        return $this->identifiantBulletin;
    }

    public function setIdentifiantBulletin(?int $identifiantBulletin): self
    {
        $this->initialized['identifiantBulletin'] = true;
        $this->identifiantBulletin = $identifiantBulletin;

        return $this;
    }

    public function getEntete(): ?SalarieBulletinEnteteSimpleResult
    {
        return $this->entete;
    }

    public function setEntete(?SalarieBulletinEnteteSimpleResult $entete): self
    {
        $this->initialized['entete'] = true;
        $this->entete = $entete;

        return $this;
    }

    /**
     * @return LigneBulletin[]|null
     */
    public function getLignesBulletin(): ?array
    {
        return $this->lignesBulletin;
    }

    /**
     * @param LigneBulletin[]|null $lignesBulletin
     */
    public function setLignesBulletin(?array $lignesBulletin): self
    {
        $this->initialized['lignesBulletin'] = true;
        $this->lignesBulletin = $lignesBulletin;

        return $this;
    }
}
