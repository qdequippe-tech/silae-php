<?php

namespace QdequippeTech\Silae\Api\Model;

class AffecterCleDossierRequest
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
    protected $nouvelleCle;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getNouvelleCle(): ?string
    {
        return $this->nouvelleCle;
    }

    public function setNouvelleCle(?string $nouvelleCle): self
    {
        $this->initialized['nouvelleCle'] = true;
        $this->nouvelleCle = $nouvelleCle;

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
