<?php

namespace QdequippeTech\Silae\Api\Model;

class AffectationDossierPaieRequest
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
     * @var string[]|null
     */
    protected $affectation;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    /**
     * @return string[]|null
     */
    public function getAffectation(): ?array
    {
        return $this->affectation;
    }

    /**
     * @param string[]|null $affectation
     */
    public function setAffectation(?array $affectation): self
    {
        $this->initialized['affectation'] = true;
        $this->affectation = $affectation;

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
