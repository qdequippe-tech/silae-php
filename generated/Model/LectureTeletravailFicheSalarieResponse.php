<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class LectureTeletravailFicheSalarieResponse
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
     * @var TeletravailFicheSalarie|null
     */
    protected $teletravail;

    public function getTeletravail(): ?TeletravailFicheSalarie
    {
        return $this->teletravail;
    }

    public function setTeletravail(?TeletravailFicheSalarie $teletravail): self
    {
        $this->initialized['teletravail'] = true;
        $this->teletravail = $teletravail;

        return $this;
    }
}
