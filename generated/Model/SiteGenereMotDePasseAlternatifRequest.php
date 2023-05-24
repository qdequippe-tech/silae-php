<?php

namespace QdequippeTech\Silae\Api\Model;

class SiteGenereMotDePasseAlternatifRequest
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
    protected $codeUtilisateur;

    public function getCodeUtilisateur(): ?string
    {
        return $this->codeUtilisateur;
    }

    public function setCodeUtilisateur(?string $codeUtilisateur): self
    {
        $this->initialized['codeUtilisateur'] = true;
        $this->codeUtilisateur = $codeUtilisateur;

        return $this;
    }
}
