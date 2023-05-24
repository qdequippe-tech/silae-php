<?php

namespace QdequippeTech\Silae\Api\Model;

class MiseAJourFicheSocieteRequest
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
     * @var SocieteInfoSup|null
     */
    protected $societeInfoSup;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getSocieteInfoSup(): ?SocieteInfoSup
    {
        return $this->societeInfoSup;
    }

    public function setSocieteInfoSup(?SocieteInfoSup $societeInfoSup): self
    {
        $this->initialized['societeInfoSup'] = true;
        $this->societeInfoSup = $societeInfoSup;

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
