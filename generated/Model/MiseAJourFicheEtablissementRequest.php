<?php

namespace QdequippeTech\Silae\Api\Model;

class MiseAJourFicheEtablissementRequest
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
     * @var EtablissementInfoSup|null
     */
    protected $etablissementInfoSup;
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

    public function getEtablissementInfoSup(): ?EtablissementInfoSup
    {
        return $this->etablissementInfoSup;
    }

    public function setEtablissementInfoSup(?EtablissementInfoSup $etablissementInfoSup): self
    {
        $this->initialized['etablissementInfoSup'] = true;
        $this->etablissementInfoSup = $etablissementInfoSup;

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
