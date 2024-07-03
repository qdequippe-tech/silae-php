<?php

namespace QdequippeTech\Silae\Api\Model;

class AdministrationCollaborateurLectureParIdentifiantRequest
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
}
