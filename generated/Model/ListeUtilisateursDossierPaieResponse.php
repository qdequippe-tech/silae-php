<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeUtilisateursDossierPaieResponse
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
     * @var string[]|null
     */
    protected $listeUtilisateursDossierPaie;

    /**
     * @return string[]|null
     */
    public function getListeUtilisateursDossierPaie(): ?array
    {
        return $this->listeUtilisateursDossierPaie;
    }

    /**
     * @param string[]|null $listeUtilisateursDossierPaie
     */
    public function setListeUtilisateursDossierPaie(?array $listeUtilisateursDossierPaie): self
    {
        $this->initialized['listeUtilisateursDossierPaie'] = true;
        $this->listeUtilisateursDossierPaie = $listeUtilisateursDossierPaie;

        return $this;
    }
}
