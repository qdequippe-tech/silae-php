<?php

namespace QdequippeTech\Silae\Api\Model;

class CreationDossierPaieRequest
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
     * @var Dossier|null
     */
    protected $dossier;

    public function getDossier(): ?Dossier
    {
        return $this->dossier;
    }

    public function setDossier(?Dossier $dossier): self
    {
        $this->initialized['dossier'] = true;
        $this->dossier = $dossier;

        return $this;
    }
}
