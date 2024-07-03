<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationChamp
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
    protected $nomChamp;

    /**
     * @var mixed|null
     */
    protected $valeur;

    public function getNomChamp(): ?string
    {
        return $this->nomChamp;
    }

    public function setNomChamp(?string $nomChamp): self
    {
        $this->initialized['nomChamp'] = true;
        $this->nomChamp = $nomChamp;

        return $this;
    }

    public function getValeur()
    {
        return $this->valeur;
    }

    public function setValeur(mixed $valeur): self
    {
        $this->initialized['valeur'] = true;
        $this->valeur = $valeur;

        return $this;
    }
}
