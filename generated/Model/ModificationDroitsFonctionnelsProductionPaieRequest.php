<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationDroitsFonctionnelsProductionPaieRequest
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
    protected $loginUtilisateur;

    /**
     * @var OngletProduction|null
     */
    protected $ongletProductionPaie;

    public function getLoginUtilisateur(): ?string
    {
        return $this->loginUtilisateur;
    }

    public function setLoginUtilisateur(?string $loginUtilisateur): self
    {
        $this->initialized['loginUtilisateur'] = true;
        $this->loginUtilisateur = $loginUtilisateur;

        return $this;
    }

    public function getOngletProductionPaie(): ?OngletProduction
    {
        return $this->ongletProductionPaie;
    }

    public function setOngletProductionPaie(?OngletProduction $ongletProductionPaie): self
    {
        $this->initialized['ongletProductionPaie'] = true;
        $this->ongletProductionPaie = $ongletProductionPaie;

        return $this;
    }
}
