<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureCompteCollaborateurModelesResponse
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
     * @var list<CollaborateurModele>|null
     */
    protected $modeles;

    /**
     * @return list<CollaborateurModele>|null
     */
    public function getModeles(): ?array
    {
        return $this->modeles;
    }

    /**
     * @param list<CollaborateurModele>|null $modeles
     */
    public function setModeles(?array $modeles): self
    {
        $this->initialized['modeles'] = true;
        $this->modeles = $modeles;

        return $this;
    }
}
