<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class HistoriqueConnexion
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
     * @var \DateTime|null
     */
    protected $date;

    /**
     * @var \DateTime|null
     */
    protected $deconnexion;

    /**
     * @var string|null
     */
    protected $identifiantUtilisateur;

    /**
     * @var bool|null
     */
    protected $modifAPI;

    /**
     * @var string|null
     */
    protected $identifiantMachine;

    /**
     * @var string|null
     */
    protected $retourConnexion;

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(?\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    public function getDeconnexion(): ?\DateTime
    {
        return $this->deconnexion;
    }

    public function setDeconnexion(?\DateTime $deconnexion): self
    {
        $this->initialized['deconnexion'] = true;
        $this->deconnexion = $deconnexion;

        return $this;
    }

    public function getIdentifiantUtilisateur(): ?string
    {
        return $this->identifiantUtilisateur;
    }

    public function setIdentifiantUtilisateur(?string $identifiantUtilisateur): self
    {
        $this->initialized['identifiantUtilisateur'] = true;
        $this->identifiantUtilisateur = $identifiantUtilisateur;

        return $this;
    }

    public function getModifAPI(): ?bool
    {
        return $this->modifAPI;
    }

    public function setModifAPI(?bool $modifAPI): self
    {
        $this->initialized['modifAPI'] = true;
        $this->modifAPI = $modifAPI;

        return $this;
    }

    public function getIdentifiantMachine(): ?string
    {
        return $this->identifiantMachine;
    }

    public function setIdentifiantMachine(?string $identifiantMachine): self
    {
        $this->initialized['identifiantMachine'] = true;
        $this->identifiantMachine = $identifiantMachine;

        return $this;
    }

    public function getRetourConnexion(): ?string
    {
        return $this->retourConnexion;
    }

    public function setRetourConnexion(?string $retourConnexion): self
    {
        $this->initialized['retourConnexion'] = true;
        $this->retourConnexion = $retourConnexion;

        return $this;
    }
}
