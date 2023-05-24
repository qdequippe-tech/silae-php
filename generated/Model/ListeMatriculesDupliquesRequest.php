<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeMatriculesDupliquesRequest
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
    protected $filtreMatricule;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getFiltreMatricule(): ?string
    {
        return $this->filtreMatricule;
    }

    public function setFiltreMatricule(?string $filtreMatricule): self
    {
        $this->initialized['filtreMatricule'] = true;
        $this->filtreMatricule = $filtreMatricule;

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
