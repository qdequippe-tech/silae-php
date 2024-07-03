<?php

namespace QdequippeTech\Silae\Api\Model;

class CreationUtilisateurClientPaieRequest
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
     * @var UtilisateurClient|null
     */
    protected $utilisateurClient;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getUtilisateurClient(): ?UtilisateurClient
    {
        return $this->utilisateurClient;
    }

    public function setUtilisateurClient(?UtilisateurClient $utilisateurClient): self
    {
        $this->initialized['utilisateurClient'] = true;
        $this->utilisateurClient = $utilisateurClient;

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
