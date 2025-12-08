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
     * @var list<string>|null
     */
    protected $affectation;

    /**
     * @var string|null
     */
    protected $codeAgence;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    /**
     * @return list<string>|null
     */
    public function getAffectation(): ?array
    {
        return $this->affectation;
    }

    /**
     * @param list<string>|null $affectation
     */
    public function setAffectation(?array $affectation): self
    {
        $this->initialized['affectation'] = true;
        $this->affectation = $affectation;

        return $this;
    }

    public function getCodeAgence(): ?string
    {
        return $this->codeAgence;
    }

    public function setCodeAgence(?string $codeAgence): self
    {
        $this->initialized['codeAgence'] = true;
        $this->codeAgence = $codeAgence;

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
