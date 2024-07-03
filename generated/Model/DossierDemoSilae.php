<?php

namespace QdequippeTech\Silae\Api\Model;

class DossierDemoSilae
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
    protected $tokenDossierDemo;

    /**
     * @var string|null
     */
    protected $nomDossier;

    public function getTokenDossierDemo(): ?string
    {
        return $this->tokenDossierDemo;
    }

    public function setTokenDossierDemo(?string $tokenDossierDemo): self
    {
        $this->initialized['tokenDossierDemo'] = true;
        $this->tokenDossierDemo = $tokenDossierDemo;

        return $this;
    }

    public function getNomDossier(): ?string
    {
        return $this->nomDossier;
    }

    public function setNomDossier(?string $nomDossier): self
    {
        $this->initialized['nomDossier'] = true;
        $this->nomDossier = $nomDossier;

        return $this;
    }
}
