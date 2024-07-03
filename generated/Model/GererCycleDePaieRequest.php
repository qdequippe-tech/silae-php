<?php

namespace QdequippeTech\Silae\Api\Model;

class GererCycleDePaieRequest
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
     * @var DossierTache|null
     */
    protected $dossierTache;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getDossierTache(): ?DossierTache
    {
        return $this->dossierTache;
    }

    public function setDossierTache(?DossierTache $dossierTache): self
    {
        $this->initialized['dossierTache'] = true;
        $this->dossierTache = $dossierTache;

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
