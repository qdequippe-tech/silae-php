<?php

namespace QdequippeTech\Silae\Api\Model;

class EcrituresComptablesLigne
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
    protected $periode;

    /**
     * @var string|null
     */
    protected $compte;

    /**
     * @var string|null
     */
    protected $libelle;

    /**
     * @var string|null
     */
    protected $sens;

    /**
     * @var int|null
     */
    protected $indexRepartition;

    /**
     * @var float|null
     */
    protected $valeur;

    /**
     * @var float|null
     */
    protected $pctRepartition;

    public function getPeriode(): ?\DateTime
    {
        return $this->periode;
    }

    public function setPeriode(?\DateTime $periode): self
    {
        $this->initialized['periode'] = true;
        $this->periode = $periode;

        return $this;
    }

    public function getCompte(): ?string
    {
        return $this->compte;
    }

    public function setCompte(?string $compte): self
    {
        $this->initialized['compte'] = true;
        $this->compte = $compte;

        return $this;
    }

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

    public function getSens(): ?string
    {
        return $this->sens;
    }

    public function setSens(?string $sens): self
    {
        $this->initialized['sens'] = true;
        $this->sens = $sens;

        return $this;
    }

    public function getIndexRepartition(): ?int
    {
        return $this->indexRepartition;
    }

    public function setIndexRepartition(?int $indexRepartition): self
    {
        $this->initialized['indexRepartition'] = true;
        $this->indexRepartition = $indexRepartition;

        return $this;
    }

    public function getValeur(): ?float
    {
        return $this->valeur;
    }

    public function setValeur(?float $valeur): self
    {
        $this->initialized['valeur'] = true;
        $this->valeur = $valeur;

        return $this;
    }

    public function getPctRepartition(): ?float
    {
        return $this->pctRepartition;
    }

    public function setPctRepartition(?float $pctRepartition): self
    {
        $this->initialized['pctRepartition'] = true;
        $this->pctRepartition = $pctRepartition;

        return $this;
    }
}
