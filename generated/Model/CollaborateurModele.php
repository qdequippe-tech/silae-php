<?php

namespace QdequippeTech\Silae\Api\Model;

class CollaborateurModele
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
    protected $nomModele;

    /**
     * @var bool|null
     */
    protected $defaut;

    /**
     * @var \DateTime|null
     */
    protected $dateCreation;

    public function getNomModele(): ?string
    {
        return $this->nomModele;
    }

    public function setNomModele(?string $nomModele): self
    {
        $this->initialized['nomModele'] = true;
        $this->nomModele = $nomModele;

        return $this;
    }

    public function getDefaut(): ?bool
    {
        return $this->defaut;
    }

    public function setDefaut(?bool $defaut): self
    {
        $this->initialized['defaut'] = true;
        $this->defaut = $defaut;

        return $this;
    }

    public function getDateCreation(): ?\DateTime
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTime $dateCreation): self
    {
        $this->initialized['dateCreation'] = true;
        $this->dateCreation = $dateCreation;

        return $this;
    }
}
