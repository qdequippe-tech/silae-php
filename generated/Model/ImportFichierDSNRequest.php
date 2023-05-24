<?php

namespace QdequippeTech\Silae\Api\Model;

class ImportFichierDSNRequest
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
     * @var string|null
     */
    protected $dsnEnByteArray;
    /**
     * @var string|null
     */
    protected $numeroDossierSiCreation;

    public function getDsnEnByteArray(): ?string
    {
        return $this->dsnEnByteArray;
    }

    public function setDsnEnByteArray(?string $dsnEnByteArray): self
    {
        $this->initialized['dsnEnByteArray'] = true;
        $this->dsnEnByteArray = $dsnEnByteArray;

        return $this;
    }

    public function getNumeroDossierSiCreation(): ?string
    {
        return $this->numeroDossierSiCreation;
    }

    public function setNumeroDossierSiCreation(?string $numeroDossierSiCreation): self
    {
        $this->initialized['numeroDossierSiCreation'] = true;
        $this->numeroDossierSiCreation = $numeroDossierSiCreation;

        return $this;
    }
}
