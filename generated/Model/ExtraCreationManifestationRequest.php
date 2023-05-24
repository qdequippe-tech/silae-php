<?php

namespace QdequippeTech\Silae\Api\Model;

class ExtraCreationManifestationRequest
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
    protected $categorie;
    /**
     * @var ExtraManifestation|null
     */
    protected $structManifestation;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): self
    {
        $this->initialized['categorie'] = true;
        $this->categorie = $categorie;

        return $this;
    }

    public function getStructManifestation(): ?ExtraManifestation
    {
        return $this->structManifestation;
    }

    public function setStructManifestation(?ExtraManifestation $structManifestation): self
    {
        $this->initialized['structManifestation'] = true;
        $this->structManifestation = $structManifestation;

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
