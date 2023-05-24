<?php

namespace QdequippeTech\Silae\Api\Model;

class CreationCompteCollaborateurRequest
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
     * @var CompteCollaborateur|null
     */
    protected $utilisateurCollaborateur;

    public function getUtilisateurCollaborateur(): ?CompteCollaborateur
    {
        return $this->utilisateurCollaborateur;
    }

    public function setUtilisateurCollaborateur(?CompteCollaborateur $utilisateurCollaborateur): self
    {
        $this->initialized['utilisateurCollaborateur'] = true;
        $this->utilisateurCollaborateur = $utilisateurCollaborateur;

        return $this;
    }
}
