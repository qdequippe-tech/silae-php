<?php

namespace QdequippeTech\Silae\Api\Model;

class AdministrationCollaborateurEnregistrementRequest
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
     * @var UtilisateurCollaborateur|null
     */
    protected $utilisateurCollaborateur;

    public function getUtilisateurCollaborateur(): ?UtilisateurCollaborateur
    {
        return $this->utilisateurCollaborateur;
    }

    public function setUtilisateurCollaborateur(?UtilisateurCollaborateur $utilisateurCollaborateur): self
    {
        $this->initialized['utilisateurCollaborateur'] = true;
        $this->utilisateurCollaborateur = $utilisateurCollaborateur;

        return $this;
    }
}
