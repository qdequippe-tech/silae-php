<?php

namespace QdequippeTech\Silae\Api\Model;

class AcquisitionContenuPartielDSNResponse
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
    protected $contenuPartiel;

    public function getContenuPartiel(): ?string
    {
        return $this->contenuPartiel;
    }

    public function setContenuPartiel(?string $contenuPartiel): self
    {
        $this->initialized['contenuPartiel'] = true;
        $this->contenuPartiel = $contenuPartiel;

        return $this;
    }
}
