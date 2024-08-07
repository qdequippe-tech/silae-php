<?php

namespace QdequippeTech\Silae\Api\Model;

class RechercheDeclarationEvenementielleResponse
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
     * @var list<DeclarationEvenementielle>|null
     */
    protected $listeDeclarationEvenementielle;

    /**
     * @return list<DeclarationEvenementielle>|null
     */
    public function getListeDeclarationEvenementielle(): ?array
    {
        return $this->listeDeclarationEvenementielle;
    }

    /**
     * @param list<DeclarationEvenementielle>|null $listeDeclarationEvenementielle
     */
    public function setListeDeclarationEvenementielle(?array $listeDeclarationEvenementielle): self
    {
        $this->initialized['listeDeclarationEvenementielle'] = true;
        $this->listeDeclarationEvenementielle = $listeDeclarationEvenementielle;

        return $this;
    }
}
