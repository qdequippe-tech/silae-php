<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeVariablesASaisirResponse
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
     * @var list<VariableASaisir>|null
     */
    protected $listeVariablesASaisir;

    /**
     * @return list<VariableASaisir>|null
     */
    public function getListeVariablesASaisir(): ?array
    {
        return $this->listeVariablesASaisir;
    }

    /**
     * @param list<VariableASaisir>|null $listeVariablesASaisir
     */
    public function setListeVariablesASaisir(?array $listeVariablesASaisir): self
    {
        $this->initialized['listeVariablesASaisir'] = true;
        $this->listeVariablesASaisir = $listeVariablesASaisir;

        return $this;
    }
}
