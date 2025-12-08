<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieActiviteJournaliereSaisie
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
    protected $jour;

    /**
     * @var float|null
     */
    protected $nombreHeures;

    /**
     * @var float|null
     */
    protected $heureDebut1;

    /**
     * @var float|null
     */
    protected $heureFin1;

    /**
     * @var float|null
     */
    protected $heureDebut2;

    /**
     * @var float|null
     */
    protected $heureFin2;

    /**
     * @var float|null
     */
    protected $heureDebut3;

    /**
     * @var float|null
     */
    protected $heureFin3;

    public function getJour(): ?\DateTime
    {
        return $this->jour;
    }

    public function setJour(?\DateTime $jour): self
    {
        $this->initialized['jour'] = true;
        $this->jour = $jour;

        return $this;
    }

    public function getNombreHeures(): ?float
    {
        return $this->nombreHeures;
    }

    public function setNombreHeures(?float $nombreHeures): self
    {
        $this->initialized['nombreHeures'] = true;
        $this->nombreHeures = $nombreHeures;

        return $this;
    }

    public function getHeureDebut1(): ?float
    {
        return $this->heureDebut1;
    }

    public function setHeureDebut1(?float $heureDebut1): self
    {
        $this->initialized['heureDebut1'] = true;
        $this->heureDebut1 = $heureDebut1;

        return $this;
    }

    public function getHeureFin1(): ?float
    {
        return $this->heureFin1;
    }

    public function setHeureFin1(?float $heureFin1): self
    {
        $this->initialized['heureFin1'] = true;
        $this->heureFin1 = $heureFin1;

        return $this;
    }

    public function getHeureDebut2(): ?float
    {
        return $this->heureDebut2;
    }

    public function setHeureDebut2(?float $heureDebut2): self
    {
        $this->initialized['heureDebut2'] = true;
        $this->heureDebut2 = $heureDebut2;

        return $this;
    }

    public function getHeureFin2(): ?float
    {
        return $this->heureFin2;
    }

    public function setHeureFin2(?float $heureFin2): self
    {
        $this->initialized['heureFin2'] = true;
        $this->heureFin2 = $heureFin2;

        return $this;
    }

    public function getHeureDebut3(): ?float
    {
        return $this->heureDebut3;
    }

    public function setHeureDebut3(?float $heureDebut3): self
    {
        $this->initialized['heureDebut3'] = true;
        $this->heureDebut3 = $heureDebut3;

        return $this;
    }

    public function getHeureFin3(): ?float
    {
        return $this->heureFin3;
    }

    public function setHeureFin3(?float $heureFin3): self
    {
        $this->initialized['heureFin3'] = true;
        $this->heureFin3 = $heureFin3;

        return $this;
    }
}
