<?php

namespace QdequippeTech\Silae\Api\Model;

class ControlerBulletinsPeriodeResponse
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
    protected $nbBulletinsControles;

    public function getNbBulletinsControles(): ?int
    {
        return $this->nbBulletinsControles;
    }

    public function setNbBulletinsControles(?int $nbBulletinsControles): self
    {
        $this->initialized['nbBulletinsControles'] = true;
        $this->nbBulletinsControles = $nbBulletinsControles;

        return $this;
    }
}
