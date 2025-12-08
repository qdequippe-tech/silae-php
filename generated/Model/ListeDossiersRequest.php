<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeDossiersRequest
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
     * @var int|null
     */
    protected $typeDossiers;

    /**
     * @var int|null
     */
    protected $etatDossier;

    public function getTypeDossiers(): ?int
    {
        return $this->typeDossiers;
    }

    public function setTypeDossiers(?int $typeDossiers): self
    {
        $this->initialized['typeDossiers'] = true;
        $this->typeDossiers = $typeDossiers;

        return $this;
    }

    public function getEtatDossier(): ?int
    {
        return $this->etatDossier;
    }

    public function setEtatDossier(?int $etatDossier): self
    {
        $this->initialized['etatDossier'] = true;
        $this->etatDossier = $etatDossier;

        return $this;
    }
}
