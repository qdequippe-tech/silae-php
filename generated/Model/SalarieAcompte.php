<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieAcompte
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
    protected $dateAcompte;

    /**
     * @var bool|null
     */
    protected $jourNonSignificatif;

    /**
     * @var float|null
     */
    protected $montantAcompte;

    public function getDateAcompte(): ?\DateTime
    {
        return $this->dateAcompte;
    }

    public function setDateAcompte(?\DateTime $dateAcompte): self
    {
        $this->initialized['dateAcompte'] = true;
        $this->dateAcompte = $dateAcompte;

        return $this;
    }

    public function getJourNonSignificatif(): ?bool
    {
        return $this->jourNonSignificatif;
    }

    public function setJourNonSignificatif(?bool $jourNonSignificatif): self
    {
        $this->initialized['jourNonSignificatif'] = true;
        $this->jourNonSignificatif = $jourNonSignificatif;

        return $this;
    }

    public function getMontantAcompte(): ?float
    {
        return $this->montantAcompte;
    }

    public function setMontantAcompte(?float $montantAcompte): self
    {
        $this->initialized['montantAcompte'] = true;
        $this->montantAcompte = $montantAcompte;

        return $this;
    }
}
