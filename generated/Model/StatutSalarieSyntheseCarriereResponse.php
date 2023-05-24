<?php

namespace QdequippeTech\Silae\Api\Model;

class StatutSalarieSyntheseCarriereResponse
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
     * @var SalarieElementCarriere[]|null
     */
    protected $syntheseCarriere;
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

    /**
     * @return SalarieElementCarriere[]|null
     */
    public function getSyntheseCarriere(): ?array
    {
        return $this->syntheseCarriere;
    }

    /**
     * @param SalarieElementCarriere[]|null $syntheseCarriere
     */
    public function setSyntheseCarriere(?array $syntheseCarriere): self
    {
        $this->initialized['syntheseCarriere'] = true;
        $this->syntheseCarriere = $syntheseCarriere;

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
