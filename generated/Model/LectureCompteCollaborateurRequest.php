<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureCompteCollaborateurRequest
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
    protected $idUtilisateur;

    /**
     * @var string|null
     */
    protected $codeCollaborateur;

    public function getIdUtilisateur(): ?string
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(?string $idUtilisateur): self
    {
        $this->initialized['idUtilisateur'] = true;
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    public function getCodeCollaborateur(): ?string
    {
        return $this->codeCollaborateur;
    }

    public function setCodeCollaborateur(?string $codeCollaborateur): self
    {
        $this->initialized['codeCollaborateur'] = true;
        $this->codeCollaborateur = $codeCollaborateur;

        return $this;
    }
}
