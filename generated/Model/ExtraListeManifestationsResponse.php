<?php

namespace QdequippeTech\Silae\Api\Model;

class ExtraListeManifestationsResponse
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
     * @var ExtraManifestation[]|null
     */
    protected $manifestations;

    /**
     * @return ExtraManifestation[]|null
     */
    public function getManifestations(): ?array
    {
        return $this->manifestations;
    }

    /**
     * @param ExtraManifestation[]|null $manifestations
     */
    public function setManifestations(?array $manifestations): self
    {
        $this->initialized['manifestations'] = true;
        $this->manifestations = $manifestations;

        return $this;
    }
}
