<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class StatutEditionsGroupeesResponse
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
    protected $numeroDossier;

    /**
     * @var string|null
     */
    protected $codeEditionsGroupees;

    /**
     * @var array<string, EditionGroupeeDocument>|null
     */
    protected $documents;

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

    public function getNumeroDossier(): ?string
    {
        return $this->numeroDossier;
    }

    public function setNumeroDossier(?string $numeroDossier): self
    {
        $this->initialized['numeroDossier'] = true;
        $this->numeroDossier = $numeroDossier;

        return $this;
    }

    public function getCodeEditionsGroupees(): ?string
    {
        return $this->codeEditionsGroupees;
    }

    public function setCodeEditionsGroupees(?string $codeEditionsGroupees): self
    {
        $this->initialized['codeEditionsGroupees'] = true;
        $this->codeEditionsGroupees = $codeEditionsGroupees;

        return $this;
    }

    /**
     * @return array<string, EditionGroupeeDocument>|null
     */
    public function getDocuments(): ?iterable
    {
        return $this->documents;
    }

    /**
     * @param array<string, EditionGroupeeDocument>|null $documents
     */
    public function setDocuments(?iterable $documents): self
    {
        $this->initialized['documents'] = true;
        $this->documents = $documents;

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
