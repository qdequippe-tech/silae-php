<?php

namespace QdequippeTech\Silae\Api\Model;

class CreationSalarieEmploisRequest
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
     * @var SalarieEmplois|null
     */
    protected $salarieEmplois;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getSalarieEmplois(): ?SalarieEmplois
    {
        return $this->salarieEmplois;
    }

    public function setSalarieEmplois(?SalarieEmplois $salarieEmplois): self
    {
        $this->initialized['salarieEmplois'] = true;
        $this->salarieEmplois = $salarieEmplois;

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
