<?php

namespace QdequippeTech\Silae\Api\Model;

class RecupererFichierVirementResult
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
    protected $fichier;

    /**
     * @var string|null
     */
    protected $contenu;

    public function getFichier(): ?string
    {
        return $this->fichier;
    }

    public function setFichier(?string $fichier): self
    {
        $this->initialized['fichier'] = true;
        $this->fichier = $fichier;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): self
    {
        $this->initialized['contenu'] = true;
        $this->contenu = $contenu;

        return $this;
    }
}
