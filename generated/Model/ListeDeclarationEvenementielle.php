<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeDeclarationEvenementielle
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
    protected $dateDepot;

    /**
     * @var string|null
     */
    protected $typeDSN;

    /**
     * @var string|null
     */
    protected $salarieConcerne;

    /**
     * @var string|null
     */
    protected $periode;

    /**
     * @var string|null
     */
    protected $statut;

    public function getDateDepot(): ?\DateTime
    {
        return $this->dateDepot;
    }

    public function setDateDepot(?\DateTime $dateDepot): self
    {
        $this->initialized['dateDepot'] = true;
        $this->dateDepot = $dateDepot;

        return $this;
    }

    public function getTypeDSN(): ?string
    {
        return $this->typeDSN;
    }

    public function setTypeDSN(?string $typeDSN): self
    {
        $this->initialized['typeDSN'] = true;
        $this->typeDSN = $typeDSN;

        return $this;
    }

    public function getSalarieConcerne(): ?string
    {
        return $this->salarieConcerne;
    }

    public function setSalarieConcerne(?string $salarieConcerne): self
    {
        $this->initialized['salarieConcerne'] = true;
        $this->salarieConcerne = $salarieConcerne;

        return $this;
    }

    public function getPeriode(): ?string
    {
        return $this->periode;
    }

    public function setPeriode(?string $periode): self
    {
        $this->initialized['periode'] = true;
        $this->periode = $periode;

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
}
