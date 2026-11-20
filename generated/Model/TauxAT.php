<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class TauxAT
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
    protected $dateEffet;

    /**
     * @var float|null
     */
    protected $taux;

    /**
     * @var string|null
     */
    protected $numeroADS;

    /**
     * @var \DateTime|null
     */
    protected $dateModification;

    public function getDateEffet(): ?\DateTime
    {
        return $this->dateEffet;
    }

    public function setDateEffet(?\DateTime $dateEffet): self
    {
        $this->initialized['dateEffet'] = true;
        $this->dateEffet = $dateEffet;

        return $this;
    }

    public function getTaux(): ?float
    {
        return $this->taux;
    }

    public function setTaux(?float $taux): self
    {
        $this->initialized['taux'] = true;
        $this->taux = $taux;

        return $this;
    }

    public function getNumeroADS(): ?string
    {
        return $this->numeroADS;
    }

    public function setNumeroADS(?string $numeroADS): self
    {
        $this->initialized['numeroADS'] = true;
        $this->numeroADS = $numeroADS;

        return $this;
    }

    public function getDateModification(): ?\DateTime
    {
        return $this->dateModification;
    }

    public function setDateModification(?\DateTime $dateModification): self
    {
        $this->initialized['dateModification'] = true;
        $this->dateModification = $dateModification;

        return $this;
    }
}
