<?php

namespace QdequippeTech\Silae\Api\Model;

class InformationsEtablissement
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
    protected $siret;

    /**
     * @var bool|null
     */
    protected $etablissementPrincipal;

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

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(?string $siret): self
    {
        $this->initialized['siret'] = true;
        $this->siret = $siret;

        return $this;
    }

    public function getEtablissementPrincipal(): ?bool
    {
        return $this->etablissementPrincipal;
    }

    public function setEtablissementPrincipal(?bool $etablissementPrincipal): self
    {
        $this->initialized['etablissementPrincipal'] = true;
        $this->etablissementPrincipal = $etablissementPrincipal;

        return $this;
    }
}
