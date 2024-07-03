<?php

namespace QdequippeTech\Silae\Api\Model;

class EtatDeclarationsResponse
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
     * @var list<EtatDeclaration>|null
     */
    protected $etatDeclarations;

    /**
     * @return list<EtatDeclaration>|null
     */
    public function getEtatDeclarations(): ?array
    {
        return $this->etatDeclarations;
    }

    /**
     * @param list<EtatDeclaration>|null $etatDeclarations
     */
    public function setEtatDeclarations(?array $etatDeclarations): self
    {
        $this->initialized['etatDeclarations'] = true;
        $this->etatDeclarations = $etatDeclarations;

        return $this;
    }
}
