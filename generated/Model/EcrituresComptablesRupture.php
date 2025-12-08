<?php

namespace QdequippeTech\Silae\Api\Model;

class EcrituresComptablesRupture
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
    protected $libelle;

    /**
     * @var float|null
     */
    protected $totalDebit;

    /**
     * @var float|null
     */
    protected $totalCredit;

    /**
     * @var list<EcrituresComptablesLigneRupture>|null
     */
    protected $ecritures;

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->initialized['libelle'] = true;
        $this->libelle = $libelle;

        return $this;
    }

    public function getTotalDebit(): ?float
    {
        return $this->totalDebit;
    }

    public function setTotalDebit(?float $totalDebit): self
    {
        $this->initialized['totalDebit'] = true;
        $this->totalDebit = $totalDebit;

        return $this;
    }

    public function getTotalCredit(): ?float
    {
        return $this->totalCredit;
    }

    public function setTotalCredit(?float $totalCredit): self
    {
        $this->initialized['totalCredit'] = true;
        $this->totalCredit = $totalCredit;

        return $this;
    }

    /**
     * @return list<EcrituresComptablesLigneRupture>|null
     */
    public function getEcritures(): ?array
    {
        return $this->ecritures;
    }

    /**
     * @param list<EcrituresComptablesLigneRupture>|null $ecritures
     */
    public function setEcritures(?array $ecritures): self
    {
        $this->initialized['ecritures'] = true;
        $this->ecritures = $ecritures;

        return $this;
    }
}
