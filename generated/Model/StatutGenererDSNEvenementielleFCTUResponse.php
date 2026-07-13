<?php

namespace QdequippeTech\Silae\Api\Model;

class StatutGenererDSNEvenementielleFCTUResponse
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
     * @var list<FichierResult>|null
     */
    protected $fichiers;

    /**
     * @var list<string>|null
     */
    protected $erreurs;

    /**
     * @var string|null
     */
    protected $message;

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
     * @return list<FichierResult>|null
     */
    public function getFichiers(): ?array
    {
        return $this->fichiers;
    }

    /**
     * @param list<FichierResult>|null $fichiers
     */
    public function setFichiers(?array $fichiers): self
    {
        $this->initialized['fichiers'] = true;
        $this->fichiers = $fichiers;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getErreurs(): ?array
    {
        return $this->erreurs;
    }

    /**
     * @param list<string>|null $erreurs
     */
    public function setErreurs(?array $erreurs): self
    {
        $this->initialized['erreurs'] = true;
        $this->erreurs = $erreurs;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

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
