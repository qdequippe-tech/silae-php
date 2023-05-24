<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationChampValeursTypees
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
    protected $nomChamp;
    /**
     * @var string|null
     */
    protected $typeValeur;
    /**
     * @var int|null
     */
    protected $valeurINT32;
    /**
     * @var float|null
     */
    protected $valeurDOUBLE;
    /**
     * @var string|null
     */
    protected $valeurSTRING;
    /**
     * @var \DateTime|null
     */
    protected $valeurDATETIME;
    /**
     * @var int|null
     */
    protected $valeurBYTE;
    /**
     * @var bool|null
     */
    protected $valeurBOOL;

    public function getNomChamp(): ?string
    {
        return $this->nomChamp;
    }

    public function setNomChamp(?string $nomChamp): self
    {
        $this->initialized['nomChamp'] = true;
        $this->nomChamp = $nomChamp;

        return $this;
    }

    public function getTypeValeur(): ?string
    {
        return $this->typeValeur;
    }

    public function setTypeValeur(?string $typeValeur): self
    {
        $this->initialized['typeValeur'] = true;
        $this->typeValeur = $typeValeur;

        return $this;
    }

    public function getValeurINT32(): ?int
    {
        return $this->valeurINT32;
    }

    public function setValeurINT32(?int $valeurINT32): self
    {
        $this->initialized['valeurINT32'] = true;
        $this->valeurINT32 = $valeurINT32;

        return $this;
    }

    public function getValeurDOUBLE(): ?float
    {
        return $this->valeurDOUBLE;
    }

    public function setValeurDOUBLE(?float $valeurDOUBLE): self
    {
        $this->initialized['valeurDOUBLE'] = true;
        $this->valeurDOUBLE = $valeurDOUBLE;

        return $this;
    }

    public function getValeurSTRING(): ?string
    {
        return $this->valeurSTRING;
    }

    public function setValeurSTRING(?string $valeurSTRING): self
    {
        $this->initialized['valeurSTRING'] = true;
        $this->valeurSTRING = $valeurSTRING;

        return $this;
    }

    public function getValeurDATETIME(): ?\DateTime
    {
        return $this->valeurDATETIME;
    }

    public function setValeurDATETIME(?\DateTime $valeurDATETIME): self
    {
        $this->initialized['valeurDATETIME'] = true;
        $this->valeurDATETIME = $valeurDATETIME;

        return $this;
    }

    public function getValeurBYTE(): ?int
    {
        return $this->valeurBYTE;
    }

    public function setValeurBYTE(?int $valeurBYTE): self
    {
        $this->initialized['valeurBYTE'] = true;
        $this->valeurBYTE = $valeurBYTE;

        return $this;
    }

    public function getValeurBOOL(): ?bool
    {
        return $this->valeurBOOL;
    }

    public function setValeurBOOL(?bool $valeurBOOL): self
    {
        $this->initialized['valeurBOOL'] = true;
        $this->valeurBOOL = $valeurBOOL;

        return $this;
    }
}
