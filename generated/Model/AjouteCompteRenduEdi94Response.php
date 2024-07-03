<?php

namespace QdequippeTech\Silae\Api\Model;

class AjouteCompteRenduEdi94Response
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
    protected $nbSalariesPresentsXML;

    /**
     * @var int|null
     */
    protected $nbSalariesTrouves;

    /**
     * @var int|null
     */
    protected $nbTauxSalariesCrees;

    /**
     * @var int|null
     */
    protected $nbTauxSalariesMisAJour;

    public function getNbSalariesPresentsXML(): ?int
    {
        return $this->nbSalariesPresentsXML;
    }

    public function setNbSalariesPresentsXML(?int $nbSalariesPresentsXML): self
    {
        $this->initialized['nbSalariesPresentsXML'] = true;
        $this->nbSalariesPresentsXML = $nbSalariesPresentsXML;

        return $this;
    }

    public function getNbSalariesTrouves(): ?int
    {
        return $this->nbSalariesTrouves;
    }

    public function setNbSalariesTrouves(?int $nbSalariesTrouves): self
    {
        $this->initialized['nbSalariesTrouves'] = true;
        $this->nbSalariesTrouves = $nbSalariesTrouves;

        return $this;
    }

    public function getNbTauxSalariesCrees(): ?int
    {
        return $this->nbTauxSalariesCrees;
    }

    public function setNbTauxSalariesCrees(?int $nbTauxSalariesCrees): self
    {
        $this->initialized['nbTauxSalariesCrees'] = true;
        $this->nbTauxSalariesCrees = $nbTauxSalariesCrees;

        return $this;
    }

    public function getNbTauxSalariesMisAJour(): ?int
    {
        return $this->nbTauxSalariesMisAJour;
    }

    public function setNbTauxSalariesMisAJour(?int $nbTauxSalariesMisAJour): self
    {
        $this->initialized['nbTauxSalariesMisAJour'] = true;
        $this->nbTauxSalariesMisAJour = $nbTauxSalariesMisAJour;

        return $this;
    }
}
