<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationFNALRequest
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
     * @var FNAL|null
     */
    protected $fnal;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getFnal(): ?FNAL
    {
        return $this->fnal;
    }

    public function setFnal(?FNAL $fnal): self
    {
        $this->initialized['fnal'] = true;
        $this->fnal = $fnal;

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
