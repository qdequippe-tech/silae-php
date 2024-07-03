<?php

namespace QdequippeTech\Silae\Api\Model;

class TaxeTransport
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
    protected $moisDebut;

    /**
     * @var float|null
     */
    protected $pourcentageAbattement;

    public function getMoisDebut(): ?\DateTime
    {
        return $this->moisDebut;
    }

    public function setMoisDebut(?\DateTime $moisDebut): self
    {
        $this->initialized['moisDebut'] = true;
        $this->moisDebut = $moisDebut;

        return $this;
    }

    public function getPourcentageAbattement(): ?float
    {
        return $this->pourcentageAbattement;
    }

    public function setPourcentageAbattement(?float $pourcentageAbattement): self
    {
        $this->initialized['pourcentageAbattement'] = true;
        $this->pourcentageAbattement = $pourcentageAbattement;

        return $this;
    }
}
