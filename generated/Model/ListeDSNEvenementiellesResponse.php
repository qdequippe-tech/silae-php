<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeDSNEvenementiellesResponse
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
     * @var list<ListeDeclarationEvenementielle>|null
     */
    protected $declarationsEvenementielles;

    /**
     * @return list<ListeDeclarationEvenementielle>|null
     */
    public function getDeclarationsEvenementielles(): ?array
    {
        return $this->declarationsEvenementielles;
    }

    /**
     * @param list<ListeDeclarationEvenementielle>|null $declarationsEvenementielles
     */
    public function setDeclarationsEvenementielles(?array $declarationsEvenementielles): self
    {
        $this->initialized['declarationsEvenementielles'] = true;
        $this->declarationsEvenementielles = $declarationsEvenementielles;

        return $this;
    }
}
