<?php

namespace QdequippeTech\Silae\Api\Model;

class StatutEcrituresComptables4AsynchroneResponse
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
     * @var EcrituresComptablesAvecRuptures|null
     */
    protected $ecrituresComptables;

    /**
     * @var string|null
     */
    protected $statut;

    /**
     * @var string|null
     */
    protected $messageErreur;

    /**
     * @var float|null
     */
    protected $progression;

    /**
     * @var string|null
     */
    protected $dureeExecution;

    public function getEcrituresComptables(): ?EcrituresComptablesAvecRuptures
    {
        return $this->ecrituresComptables;
    }

    public function setEcrituresComptables(?EcrituresComptablesAvecRuptures $ecrituresComptables): self
    {
        $this->initialized['ecrituresComptables'] = true;
        $this->ecrituresComptables = $ecrituresComptables;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->initialized['statut'] = true;
        $this->statut = $statut;

        return $this;
    }

    public function getMessageErreur(): ?string
    {
        return $this->messageErreur;
    }

    public function setMessageErreur(?string $messageErreur): self
    {
        $this->initialized['messageErreur'] = true;
        $this->messageErreur = $messageErreur;

        return $this;
    }

    public function getProgression(): ?float
    {
        return $this->progression;
    }

    public function setProgression(?float $progression): self
    {
        $this->initialized['progression'] = true;
        $this->progression = $progression;

        return $this;
    }

    public function getDureeExecution(): ?string
    {
        return $this->dureeExecution;
    }

    public function setDureeExecution(?string $dureeExecution): self
    {
        $this->initialized['dureeExecution'] = true;
        $this->dureeExecution = $dureeExecution;

        return $this;
    }
}
