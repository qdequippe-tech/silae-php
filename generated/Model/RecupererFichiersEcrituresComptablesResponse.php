<?php

namespace QdequippeTech\Silae\Api\Model;

class RecupererFichiersEcrituresComptablesResponse
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
     * @var list<EcrituresComptablesFichier>|null
     */
    protected $fichiers;

    /**
     * @return list<EcrituresComptablesFichier>|null
     */
    public function getFichiers(): ?array
    {
        return $this->fichiers;
    }

    /**
     * @param list<EcrituresComptablesFichier>|null $fichiers
     */
    public function setFichiers(?array $fichiers): self
    {
        $this->initialized['fichiers'] = true;
        $this->fichiers = $fichiers;

        return $this;
    }
}
