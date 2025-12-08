<?php

namespace QdequippeTech\Silae\Api\Model;

class CreationCompteCollaborateurDepuisModeleRequest
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
     * @var CompteCollaborateurDepuisModele|null
     */
    protected $utilisateurCollaborateur;

    public function getUtilisateurCollaborateur(): ?CompteCollaborateurDepuisModele
    {
        return $this->utilisateurCollaborateur;
    }

    public function setUtilisateurCollaborateur(?CompteCollaborateurDepuisModele $utilisateurCollaborateur): self
    {
        $this->initialized['utilisateurCollaborateur'] = true;
        $this->utilisateurCollaborateur = $utilisateurCollaborateur;

        return $this;
    }
}
