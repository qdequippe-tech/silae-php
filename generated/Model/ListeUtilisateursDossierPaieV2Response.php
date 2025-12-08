<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeUtilisateursDossierPaieV2Response
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
     * @var list<ContactInformations>|null
     */
    protected $listeUtilisateursDossierPaie;

    /**
     * @return list<ContactInformations>|null
     */
    public function getListeUtilisateursDossierPaie(): ?array
    {
        return $this->listeUtilisateursDossierPaie;
    }

    /**
     * @param list<ContactInformations>|null $listeUtilisateursDossierPaie
     */
    public function setListeUtilisateursDossierPaie(?array $listeUtilisateursDossierPaie): self
    {
        $this->initialized['listeUtilisateursDossierPaie'] = true;
        $this->listeUtilisateursDossierPaie = $listeUtilisateursDossierPaie;

        return $this;
    }
}
