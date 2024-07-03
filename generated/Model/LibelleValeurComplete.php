<?php

namespace QdequippeTech\Silae\Api\Model;

class LibelleValeurComplete
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
    protected $libelle;

    /**
     * @var int|null
     */
    protected $valeur;

    /**
     * @var string|null
     */
    protected $reference;

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->initialized['libelle'] = true;
        $this->libelle = $libelle;

        return $this;
    }

    public function getValeur(): ?int
    {
        return $this->valeur;
    }

    public function setValeur(?int $valeur): self
    {
        $this->initialized['valeur'] = true;
        $this->valeur = $valeur;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;

        return $this;
    }
}
