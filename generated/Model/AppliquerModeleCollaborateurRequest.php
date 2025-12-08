<?php

namespace QdequippeTech\Silae\Api\Model;

class AppliquerModeleCollaborateurRequest
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
    protected $identifiantCollaborateur;

    /**
     * @var string|null
     */
    protected $nomModele;

    public function getIdentifiantCollaborateur(): ?string
    {
        return $this->identifiantCollaborateur;
    }

    public function setIdentifiantCollaborateur(?string $identifiantCollaborateur): self
    {
        $this->initialized['identifiantCollaborateur'] = true;
        $this->identifiantCollaborateur = $identifiantCollaborateur;

        return $this;
    }

    public function getNomModele(): ?string
    {
        return $this->nomModele;
    }

    public function setNomModele(?string $nomModele): self
    {
        $this->initialized['nomModele'] = true;
        $this->nomModele = $nomModele;

        return $this;
    }
}
