<?php

namespace QdequippeTech\Silae\Api\Model;

class CompteCollaborateurHorairesAcces
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
     * @var CompteCollaborateurHoraireAccesParJour[]|null
     */
    protected $accesJours;
    /**
     * @var string|null
     */
    protected $accesJoursFeries;

    /**
     * @return CompteCollaborateurHoraireAccesParJour[]|null
     */
    public function getAccesJours(): ?array
    {
        return $this->accesJours;
    }

    /**
     * @param CompteCollaborateurHoraireAccesParJour[]|null $accesJours
     */
    public function setAccesJours(?array $accesJours): self
    {
        $this->initialized['accesJours'] = true;
        $this->accesJours = $accesJours;

        return $this;
    }

    public function getAccesJoursFeries(): ?string
    {
        return $this->accesJoursFeries;
    }

    public function setAccesJoursFeries(?string $accesJoursFeries): self
    {
        $this->initialized['accesJoursFeries'] = true;
        $this->accesJoursFeries = $accesJoursFeries;

        return $this;
    }
}
