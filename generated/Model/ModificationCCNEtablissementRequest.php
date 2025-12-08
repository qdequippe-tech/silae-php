<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationCCNEtablissementRequest
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
    protected $nomInterne;

    /**
     * @var string|null
     */
    protected $codeCCN;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getNomInterne(): ?string
    {
        return $this->nomInterne;
    }

    public function setNomInterne(?string $nomInterne): self
    {
        $this->initialized['nomInterne'] = true;
        $this->nomInterne = $nomInterne;

        return $this;
    }

    public function getCodeCCN(): ?string
    {
        return $this->codeCCN;
    }

    public function setCodeCCN(?string $codeCCN): self
    {
        $this->initialized['codeCCN'] = true;
        $this->codeCCN = $codeCCN;

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
