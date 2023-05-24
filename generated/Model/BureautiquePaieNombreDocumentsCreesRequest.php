<?php

namespace QdequippeTech\Silae\Api\Model;

class BureautiquePaieNombreDocumentsCreesRequest
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
    protected $nomDocument;
    /**
     * @var \DateTime|null
     */
    protected $dateDebut;
    /**
     * @var \DateTime|null
     */
    protected $dateFin;

    public function getNomDocument(): ?string
    {
        return $this->nomDocument;
    }

    public function setNomDocument(?string $nomDocument): self
    {
        $this->initialized['nomDocument'] = true;
        $this->nomDocument = $nomDocument;

        return $this;
    }

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
}
