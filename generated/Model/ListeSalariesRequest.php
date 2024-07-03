<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeSalariesRequest
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
     * @var ListeSalariesOptions|null
     */
    protected $listeSalariesOptions;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getListeSalariesOptions(): ?ListeSalariesOptions
    {
        return $this->listeSalariesOptions;
    }

    public function setListeSalariesOptions(?ListeSalariesOptions $listeSalariesOptions): self
    {
        $this->initialized['listeSalariesOptions'] = true;
        $this->listeSalariesOptions = $listeSalariesOptions;

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
