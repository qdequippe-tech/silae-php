<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class HistoriqueDesConnexionsRequest
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
    protected $dateDebut;

    /**
     * @var \DateTime|null
     */
    protected $dateFin;

    /**
     * @var string|null
     */
    protected $filtre;

    public function getDateDebut(): ?\DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTime $dateDebut): self
    {
        $this->initialized['dateDebut'] = true;
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTime $dateFin): self
    {
        $this->initialized['dateFin'] = true;
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getFiltre(): ?string
    {
        return $this->filtre;
    }

    public function setFiltre(?string $filtre): self
    {
        $this->initialized['filtre'] = true;
        $this->filtre = $filtre;

        return $this;
    }
}
