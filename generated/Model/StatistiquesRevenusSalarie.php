<?php

namespace QdequippeTech\Silae\Api\Model;

class StatistiquesRevenusSalarie
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
    protected $matricule;

    /**
     * @var string|null
     */
    protected $nomUsuel;

    /**
     * @var string|null
     */
    protected $prenom;

    /**
     * @var float|null
     */
    protected $netImposableN;

    /**
     * @var float|null
     */
    protected $totalDeclareN;

    /**
     * @var float|null
     */
    protected $pasN;

    /**
     * @var float|null
     */
    protected $pasDeclareN;

    /**
     * @var float|null
     */
    protected $brutALN;

    /**
     * @var float|null
     */
    protected $brutALDeclareN;

    /**
     * @var float|null
     */
    protected $netImposableN1;

    /**
     * @var float|null
     */
    protected $totalDeclareN1;

    /**
     * @var float|null
     */
    protected $pasN1;

    /**
     * @var float|null
     */
    protected $pasDeclareN1;

    /**
     * @var float|null
     */
    protected $brutALN1;

    /**
     * @var float|null
     */
    protected $brutALDeclareN1;

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->initialized['matricule'] = true;
        $this->matricule = $matricule;

        return $this;
    }

    public function getNomUsuel(): ?string
    {
        return $this->nomUsuel;
    }

    public function setNomUsuel(?string $nomUsuel): self
    {
        $this->initialized['nomUsuel'] = true;
        $this->nomUsuel = $nomUsuel;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    public function getNetImposableN(): ?float
    {
        return $this->netImposableN;
    }

    public function setNetImposableN(?float $netImposableN): self
    {
        $this->initialized['netImposableN'] = true;
        $this->netImposableN = $netImposableN;

        return $this;
    }

    public function getTotalDeclareN(): ?float
    {
        return $this->totalDeclareN;
    }

    public function setTotalDeclareN(?float $totalDeclareN): self
    {
        $this->initialized['totalDeclareN'] = true;
        $this->totalDeclareN = $totalDeclareN;

        return $this;
    }

    public function getPasN(): ?float
    {
        return $this->pasN;
    }

    public function setPasN(?float $pasN): self
    {
        $this->initialized['pasN'] = true;
        $this->pasN = $pasN;

        return $this;
    }

    public function getPasDeclareN(): ?float
    {
        return $this->pasDeclareN;
    }

    public function setPasDeclareN(?float $pasDeclareN): self
    {
        $this->initialized['pasDeclareN'] = true;
        $this->pasDeclareN = $pasDeclareN;

        return $this;
    }

    public function getBrutALN(): ?float
    {
        return $this->brutALN;
    }

    public function setBrutALN(?float $brutALN): self
    {
        $this->initialized['brutALN'] = true;
        $this->brutALN = $brutALN;

        return $this;
    }

    public function getBrutALDeclareN(): ?float
    {
        return $this->brutALDeclareN;
    }

    public function setBrutALDeclareN(?float $brutALDeclareN): self
    {
        $this->initialized['brutALDeclareN'] = true;
        $this->brutALDeclareN = $brutALDeclareN;

        return $this;
    }

    public function getNetImposableN1(): ?float
    {
        return $this->netImposableN1;
    }

    public function setNetImposableN1(?float $netImposableN1): self
    {
        $this->initialized['netImposableN1'] = true;
        $this->netImposableN1 = $netImposableN1;

        return $this;
    }

    public function getTotalDeclareN1(): ?float
    {
        return $this->totalDeclareN1;
    }

    public function setTotalDeclareN1(?float $totalDeclareN1): self
    {
        $this->initialized['totalDeclareN1'] = true;
        $this->totalDeclareN1 = $totalDeclareN1;

        return $this;
    }

    public function getPasN1(): ?float
    {
        return $this->pasN1;
    }

    public function setPasN1(?float $pasN1): self
    {
        $this->initialized['pasN1'] = true;
        $this->pasN1 = $pasN1;

        return $this;
    }

    public function getPasDeclareN1(): ?float
    {
        return $this->pasDeclareN1;
    }

    public function setPasDeclareN1(?float $pasDeclareN1): self
    {
        $this->initialized['pasDeclareN1'] = true;
        $this->pasDeclareN1 = $pasDeclareN1;

        return $this;
    }

    public function getBrutALN1(): ?float
    {
        return $this->brutALN1;
    }

    public function setBrutALN1(?float $brutALN1): self
    {
        $this->initialized['brutALN1'] = true;
        $this->brutALN1 = $brutALN1;

        return $this;
    }

    public function getBrutALDeclareN1(): ?float
    {
        return $this->brutALDeclareN1;
    }

    public function setBrutALDeclareN1(?float $brutALDeclareN1): self
    {
        $this->initialized['brutALDeclareN1'] = true;
        $this->brutALDeclareN1 = $brutALDeclareN1;

        return $this;
    }
}
