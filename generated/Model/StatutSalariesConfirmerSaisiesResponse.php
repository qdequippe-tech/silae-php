<?php

namespace QdequippeTech\Silae\Api\Model;

class StatutSalariesConfirmerSaisiesResponse
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
     * @var int|null
     */
    protected $saisiesHeuresConfirmees;

    /**
     * @var int|null
     */
    protected $saisiesPrimesConfirmees;

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

    public function getSaisiesHeuresConfirmees(): ?int
    {
        return $this->saisiesHeuresConfirmees;
    }

    public function setSaisiesHeuresConfirmees(?int $saisiesHeuresConfirmees): self
    {
        $this->initialized['saisiesHeuresConfirmees'] = true;
        $this->saisiesHeuresConfirmees = $saisiesHeuresConfirmees;

        return $this;
    }

    public function getSaisiesPrimesConfirmees(): ?int
    {
        return $this->saisiesPrimesConfirmees;
    }

    public function setSaisiesPrimesConfirmees(?int $saisiesPrimesConfirmees): self
    {
        $this->initialized['saisiesPrimesConfirmees'] = true;
        $this->saisiesPrimesConfirmees = $saisiesPrimesConfirmees;

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
