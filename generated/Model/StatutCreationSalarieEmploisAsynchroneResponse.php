<?php

namespace QdequippeTech\Silae\Api\Model;

class StatutCreationSalarieEmploisAsynchroneResponse
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
     * @var list<CreationSalarieEmploiResult>|null
     */
    protected $resultatsCreationsEmplois;

    /**
     * @var int|null
     */
    protected $erreurNumero;

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
     * @return list<CreationSalarieEmploiResult>|null
     */
    public function getResultatsCreationsEmplois(): ?array
    {
        return $this->resultatsCreationsEmplois;
    }

    /**
     * @param list<CreationSalarieEmploiResult>|null $resultatsCreationsEmplois
     */
    public function setResultatsCreationsEmplois(?array $resultatsCreationsEmplois): self
    {
        $this->initialized['resultatsCreationsEmplois'] = true;
        $this->resultatsCreationsEmplois = $resultatsCreationsEmplois;

        return $this;
    }

    public function getErreurNumero(): ?int
    {
        return $this->erreurNumero;
    }

    public function setErreurNumero(?int $erreurNumero): self
    {
        $this->initialized['erreurNumero'] = true;
        $this->erreurNumero = $erreurNumero;

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
