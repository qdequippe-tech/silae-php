<?php

namespace QdequippeTech\Silae\Api\Model;

class AdministrationCollaborateurLectureRequest
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
    protected $codeCollaborateur;

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
