<?php

namespace QdequippeTech\Silae\Api\Model;

class CompteCollaborateurHoraireAccesParJour
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
    protected $jourSemaine;
    /**
     * @var string|null
     */
    protected $horaires;

    public function getJourSemaine(): ?string
    {
        return $this->jourSemaine;
    }

    public function setJourSemaine(?string $jourSemaine): self
    {
        $this->initialized['jourSemaine'] = true;
        $this->jourSemaine = $jourSemaine;

        return $this;
    }

    public function getHoraires(): ?string
    {
        return $this->horaires;
    }

    public function setHoraires(?string $horaires): self
    {
        $this->initialized['horaires'] = true;
        $this->horaires = $horaires;

        return $this;
    }
}
