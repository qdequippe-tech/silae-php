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
     * @var EtatDeclaration[]|null
     */
    protected $etatDeclarations;

    /**
     * @return EtatDeclaration[]|null
     */
    public function getEtatDeclarations(): ?array
    {
        return $this->etatDeclarations;
    }

    /**
     * @param EtatDeclaration[]|null $etatDeclarations
     */
    public function setEtatDeclarations(?array $etatDeclarations): self
    {
        $this->initialized['etatDeclarations'] = true;
        $this->etatDeclarations = $etatDeclarations;

        return $this;
    }
}
