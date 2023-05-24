<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationHoraireEtablissement
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
     * @var bool|null
     */
    protected $bNomGrilleHoraire;
    /**
     * @var string|null
     */
    protected $nomGrilleHoraire;
    /**
     * @var bool|null
     */
    protected $bHeuresTravaillees;
    /**
     * @var float[]|null
     */
    protected $heuresTravaillees;
    /**
     * @var float[]|null
     */
    protected $heuresDeNuit;
    /**
     * @var bool|null
     */
    protected $bHeuresPayees;
    /**
     * @var float[]|null
     */
    protected $heuresPayeesNormales;
    /**
     * @var float[]|null
     */
    protected $heuresPayeesMajorees;
    /**
     * @var bool|null
     */
    protected $bHeuresLibres1;
    /**
     * @var string|null
     */
    protected $codeHeuresLibres1;
    /**
     * @var float[]|null
     */
    protected $heuresLibres1;
    /**
     * @var bool|null
     */
    protected $bHeuresLibres2;
    /**
     * @var string|null
     */
    protected $codeHeuresLibres2;
    /**
     * @var float[]|null
     */
    protected $heuresLibres2;
    /**
     * @var bool|null
     */
    protected $bHeuresLibres3;
    /**
     * @var string|null
     */
    protected $codeHeuresLibres3;
    /**
     * @var float[]|null
     */
    protected $heuresLibres3;
    /**
     * @var bool|null
     */
    protected $bTotalMensuelHeuresNormales;
    /**
     * @var float|null
     */
    protected $totalMensuelHeuresNormales;
    /**
     * @var bool|null
     */
    protected $bTotalMensuelHeuresMajorees;
    /**
     * @var float|null
     */
    protected $totalMensuelHeuresMajorees;
    /**
     * @var float|null
     */
    protected $pourcentageHeuresMajorees;
    /**
     * @var bool|null
     */
    protected $bTotalMensuelHeuresLibres1;
    /**
     * @var float|null
     */
    protected $totalMensuelHeuresLibres1;
    /**
     * @var bool|null
     */
    protected $bTotalMensuelHeuresLibres2;
    /**
     * @var float|null
     */
    protected $totalMensuelHeuresLibres2;
    /**
     * @var bool|null
     */
    protected $bTotalMensuelHeuresLibres3;
    /**
     * @var float|null
     */
    protected $totalMensuelHeuresLibres3;

    public function getBNomGrilleHoraire(): ?bool
    {
        return $this->bNomGrilleHoraire;
    }

    public function setBNomGrilleHoraire(?bool $bNomGrilleHoraire): self
    {
        $this->initialized['bNomGrilleHoraire'] = true;
        $this->bNomGrilleHoraire = $bNomGrilleHoraire;

        return $this;
    }

    public function getNomGrilleHoraire(): ?string
    {
        return $this->nomGrilleHoraire;
    }

    public function setNomGrilleHoraire(?string $nomGrilleHoraire): self
    {
        $this->initialized['nomGrilleHoraire'] = true;
        $this->nomGrilleHoraire = $nomGrilleHoraire;

        return $this;
    }

    public function getBHeuresTravaillees(): ?bool
    {
        return $this->bHeuresTravaillees;
    }

    public function setBHeuresTravaillees(?bool $bHeuresTravaillees): self
    {
        $this->initialized['bHeuresTravaillees'] = true;
        $this->bHeuresTravaillees = $bHeuresTravaillees;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getHeuresTravaillees(): ?array
    {
        return $this->heuresTravaillees;
    }

    /**
     * @param float[]|null $heuresTravaillees
     */
    public function setHeuresTravaillees(?array $heuresTravaillees): self
    {
        $this->initialized['heuresTravaillees'] = true;
        $this->heuresTravaillees = $heuresTravaillees;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getHeuresDeNuit(): ?array
    {
        return $this->heuresDeNuit;
    }

    /**
     * @param float[]|null $heuresDeNuit
     */
    public function setHeuresDeNuit(?array $heuresDeNuit): self
    {
        $this->initialized['heuresDeNuit'] = true;
        $this->heuresDeNuit = $heuresDeNuit;

        return $this;
    }

    public function getBHeuresPayees(): ?bool
    {
        return $this->bHeuresPayees;
    }

    public function setBHeuresPayees(?bool $bHeuresPayees): self
    {
        $this->initialized['bHeuresPayees'] = true;
        $this->bHeuresPayees = $bHeuresPayees;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getHeuresPayeesNormales(): ?array
    {
        return $this->heuresPayeesNormales;
    }

    /**
     * @param float[]|null $heuresPayeesNormales
     */
    public function setHeuresPayeesNormales(?array $heuresPayeesNormales): self
    {
        $this->initialized['heuresPayeesNormales'] = true;
        $this->heuresPayeesNormales = $heuresPayeesNormales;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getHeuresPayeesMajorees(): ?array
    {
        return $this->heuresPayeesMajorees;
    }

    /**
     * @param float[]|null $heuresPayeesMajorees
     */
    public function setHeuresPayeesMajorees(?array $heuresPayeesMajorees): self
    {
        $this->initialized['heuresPayeesMajorees'] = true;
        $this->heuresPayeesMajorees = $heuresPayeesMajorees;

        return $this;
    }

    public function getBHeuresLibres1(): ?bool
    {
        return $this->bHeuresLibres1;
    }

    public function setBHeuresLibres1(?bool $bHeuresLibres1): self
    {
        $this->initialized['bHeuresLibres1'] = true;
        $this->bHeuresLibres1 = $bHeuresLibres1;

        return $this;
    }

    public function getCodeHeuresLibres1(): ?string
    {
        return $this->codeHeuresLibres1;
    }

    public function setCodeHeuresLibres1(?string $codeHeuresLibres1): self
    {
        $this->initialized['codeHeuresLibres1'] = true;
        $this->codeHeuresLibres1 = $codeHeuresLibres1;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getHeuresLibres1(): ?array
    {
        return $this->heuresLibres1;
    }

    /**
     * @param float[]|null $heuresLibres1
     */
    public function setHeuresLibres1(?array $heuresLibres1): self
    {
        $this->initialized['heuresLibres1'] = true;
        $this->heuresLibres1 = $heuresLibres1;

        return $this;
    }

    public function getBHeuresLibres2(): ?bool
    {
        return $this->bHeuresLibres2;
    }

    public function setBHeuresLibres2(?bool $bHeuresLibres2): self
    {
        $this->initialized['bHeuresLibres2'] = true;
        $this->bHeuresLibres2 = $bHeuresLibres2;

        return $this;
    }

    public function getCodeHeuresLibres2(): ?string
    {
        return $this->codeHeuresLibres2;
    }

    public function setCodeHeuresLibres2(?string $codeHeuresLibres2): self
    {
        $this->initialized['codeHeuresLibres2'] = true;
        $this->codeHeuresLibres2 = $codeHeuresLibres2;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getHeuresLibres2(): ?array
    {
        return $this->heuresLibres2;
    }

    /**
     * @param float[]|null $heuresLibres2
     */
    public function setHeuresLibres2(?array $heuresLibres2): self
    {
        $this->initialized['heuresLibres2'] = true;
        $this->heuresLibres2 = $heuresLibres2;

        return $this;
    }

    public function getBHeuresLibres3(): ?bool
    {
        return $this->bHeuresLibres3;
    }

    public function setBHeuresLibres3(?bool $bHeuresLibres3): self
    {
        $this->initialized['bHeuresLibres3'] = true;
        $this->bHeuresLibres3 = $bHeuresLibres3;

        return $this;
    }

    public function getCodeHeuresLibres3(): ?string
    {
        return $this->codeHeuresLibres3;
    }

    public function setCodeHeuresLibres3(?string $codeHeuresLibres3): self
    {
        $this->initialized['codeHeuresLibres3'] = true;
        $this->codeHeuresLibres3 = $codeHeuresLibres3;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getHeuresLibres3(): ?array
    {
        return $this->heuresLibres3;
    }

    /**
     * @param float[]|null $heuresLibres3
     */
    public function setHeuresLibres3(?array $heuresLibres3): self
    {
        $this->initialized['heuresLibres3'] = true;
        $this->heuresLibres3 = $heuresLibres3;

        return $this;
    }

    public function getBTotalMensuelHeuresNormales(): ?bool
    {
        return $this->bTotalMensuelHeuresNormales;
    }

    public function setBTotalMensuelHeuresNormales(?bool $bTotalMensuelHeuresNormales): self
    {
        $this->initialized['bTotalMensuelHeuresNormales'] = true;
        $this->bTotalMensuelHeuresNormales = $bTotalMensuelHeuresNormales;

        return $this;
    }

    public function getTotalMensuelHeuresNormales(): ?float
    {
        return $this->totalMensuelHeuresNormales;
    }

    public function setTotalMensuelHeuresNormales(?float $totalMensuelHeuresNormales): self
    {
        $this->initialized['totalMensuelHeuresNormales'] = true;
        $this->totalMensuelHeuresNormales = $totalMensuelHeuresNormales;

        return $this;
    }

    public function getBTotalMensuelHeuresMajorees(): ?bool
    {
        return $this->bTotalMensuelHeuresMajorees;
    }

    public function setBTotalMensuelHeuresMajorees(?bool $bTotalMensuelHeuresMajorees): self
    {
        $this->initialized['bTotalMensuelHeuresMajorees'] = true;
        $this->bTotalMensuelHeuresMajorees = $bTotalMensuelHeuresMajorees;

        return $this;
    }

    public function getTotalMensuelHeuresMajorees(): ?float
    {
        return $this->totalMensuelHeuresMajorees;
    }

    public function setTotalMensuelHeuresMajorees(?float $totalMensuelHeuresMajorees): self
    {
        $this->initialized['totalMensuelHeuresMajorees'] = true;
        $this->totalMensuelHeuresMajorees = $totalMensuelHeuresMajorees;

        return $this;
    }

    public function getPourcentageHeuresMajorees(): ?float
    {
        return $this->pourcentageHeuresMajorees;
    }

    public function setPourcentageHeuresMajorees(?float $pourcentageHeuresMajorees): self
    {
        $this->initialized['pourcentageHeuresMajorees'] = true;
        $this->pourcentageHeuresMajorees = $pourcentageHeuresMajorees;

        return $this;
    }

    public function getBTotalMensuelHeuresLibres1(): ?bool
    {
        return $this->bTotalMensuelHeuresLibres1;
    }

    public function setBTotalMensuelHeuresLibres1(?bool $bTotalMensuelHeuresLibres1): self
    {
        $this->initialized['bTotalMensuelHeuresLibres1'] = true;
        $this->bTotalMensuelHeuresLibres1 = $bTotalMensuelHeuresLibres1;

        return $this;
    }

    public function getTotalMensuelHeuresLibres1(): ?float
    {
        return $this->totalMensuelHeuresLibres1;
    }

    public function setTotalMensuelHeuresLibres1(?float $totalMensuelHeuresLibres1): self
    {
        $this->initialized['totalMensuelHeuresLibres1'] = true;
        $this->totalMensuelHeuresLibres1 = $totalMensuelHeuresLibres1;

        return $this;
    }

    public function getBTotalMensuelHeuresLibres2(): ?bool
    {
        return $this->bTotalMensuelHeuresLibres2;
    }

    public function setBTotalMensuelHeuresLibres2(?bool $bTotalMensuelHeuresLibres2): self
    {
        $this->initialized['bTotalMensuelHeuresLibres2'] = true;
        $this->bTotalMensuelHeuresLibres2 = $bTotalMensuelHeuresLibres2;

        return $this;
    }

    public function getTotalMensuelHeuresLibres2(): ?float
    {
        return $this->totalMensuelHeuresLibres2;
    }

    public function setTotalMensuelHeuresLibres2(?float $totalMensuelHeuresLibres2): self
    {
        $this->initialized['totalMensuelHeuresLibres2'] = true;
        $this->totalMensuelHeuresLibres2 = $totalMensuelHeuresLibres2;

        return $this;
    }

    public function getBTotalMensuelHeuresLibres3(): ?bool
    {
        return $this->bTotalMensuelHeuresLibres3;
    }

    public function setBTotalMensuelHeuresLibres3(?bool $bTotalMensuelHeuresLibres3): self
    {
        $this->initialized['bTotalMensuelHeuresLibres3'] = true;
        $this->bTotalMensuelHeuresLibres3 = $bTotalMensuelHeuresLibres3;

        return $this;
    }

    public function getTotalMensuelHeuresLibres3(): ?float
    {
        return $this->totalMensuelHeuresLibres3;
    }

    public function setTotalMensuelHeuresLibres3(?float $totalMensuelHeuresLibres3): self
    {
        $this->initialized['totalMensuelHeuresLibres3'] = true;
        $this->totalMensuelHeuresLibres3 = $totalMensuelHeuresLibres3;

        return $this;
    }
}
