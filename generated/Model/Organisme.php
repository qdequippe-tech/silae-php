<?php

namespace QdequippeTech\Silae\Api\Model;

class Organisme
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
    protected $codeOrganisme;
    /**
     * @var string|null
     */
    protected $codeInterne;
    /**
     * @var string|null
     */
    protected $codeNature;
    /**
     * @var string|null
     */
    protected $nomInterneEtablissement;
    /**
     * @var string|null
     */
    protected $numeroAffiliation;
    /**
     * @var int|null
     */
    protected $periodicite;
    /**
     * @var int|null
     */
    protected $jourPaiement;
    /**
     * @var string|null
     */
    protected $filtreSalaries;
    /**
     * @var string|null
     */
    protected $filtreCodesLibelles;
    /**
     * @var bool|null
     */
    protected $edi;
    /**
     * @var int|null
     */
    protected $ediModePaiement;
    /**
     * @var string|null
     */
    protected $numeroRattachement;
    /**
     * @var string|null
     */
    protected $codePopulation;
    /**
     * @var string|null
     */
    protected $codeOption;
    /**
     * @var string|null
     */
    protected $codeDelegataireDeGestion;

    public function getCodeOrganisme(): ?string
    {
        return $this->codeOrganisme;
    }

    public function setCodeOrganisme(?string $codeOrganisme): self
    {
        $this->initialized['codeOrganisme'] = true;
        $this->codeOrganisme = $codeOrganisme;

        return $this;
    }

    public function getCodeInterne(): ?string
    {
        return $this->codeInterne;
    }

    public function setCodeInterne(?string $codeInterne): self
    {
        $this->initialized['codeInterne'] = true;
        $this->codeInterne = $codeInterne;

        return $this;
    }

    public function getCodeNature(): ?string
    {
        return $this->codeNature;
    }

    public function setCodeNature(?string $codeNature): self
    {
        $this->initialized['codeNature'] = true;
        $this->codeNature = $codeNature;

        return $this;
    }

    public function getNomInterneEtablissement(): ?string
    {
        return $this->nomInterneEtablissement;
    }

    public function setNomInterneEtablissement(?string $nomInterneEtablissement): self
    {
        $this->initialized['nomInterneEtablissement'] = true;
        $this->nomInterneEtablissement = $nomInterneEtablissement;

        return $this;
    }

    public function getNumeroAffiliation(): ?string
    {
        return $this->numeroAffiliation;
    }

    public function setNumeroAffiliation(?string $numeroAffiliation): self
    {
        $this->initialized['numeroAffiliation'] = true;
        $this->numeroAffiliation = $numeroAffiliation;

        return $this;
    }

    public function getPeriodicite(): ?int
    {
        return $this->periodicite;
    }

    public function setPeriodicite(?int $periodicite): self
    {
        $this->initialized['periodicite'] = true;
        $this->periodicite = $periodicite;

        return $this;
    }

    public function getJourPaiement(): ?int
    {
        return $this->jourPaiement;
    }

    public function setJourPaiement(?int $jourPaiement): self
    {
        $this->initialized['jourPaiement'] = true;
        $this->jourPaiement = $jourPaiement;

        return $this;
    }

    public function getFiltreSalaries(): ?string
    {
        return $this->filtreSalaries;
    }

    public function setFiltreSalaries(?string $filtreSalaries): self
    {
        $this->initialized['filtreSalaries'] = true;
        $this->filtreSalaries = $filtreSalaries;

        return $this;
    }

    public function getFiltreCodesLibelles(): ?string
    {
        return $this->filtreCodesLibelles;
    }

    public function setFiltreCodesLibelles(?string $filtreCodesLibelles): self
    {
        $this->initialized['filtreCodesLibelles'] = true;
        $this->filtreCodesLibelles = $filtreCodesLibelles;

        return $this;
    }

    public function getEdi(): ?bool
    {
        return $this->edi;
    }

    public function setEdi(?bool $edi): self
    {
        $this->initialized['edi'] = true;
        $this->edi = $edi;

        return $this;
    }

    public function getEdiModePaiement(): ?int
    {
        return $this->ediModePaiement;
    }

    public function setEdiModePaiement(?int $ediModePaiement): self
    {
        $this->initialized['ediModePaiement'] = true;
        $this->ediModePaiement = $ediModePaiement;

        return $this;
    }

    public function getNumeroRattachement(): ?string
    {
        return $this->numeroRattachement;
    }

    public function setNumeroRattachement(?string $numeroRattachement): self
    {
        $this->initialized['numeroRattachement'] = true;
        $this->numeroRattachement = $numeroRattachement;

        return $this;
    }

    public function getCodePopulation(): ?string
    {
        return $this->codePopulation;
    }

    public function setCodePopulation(?string $codePopulation): self
    {
        $this->initialized['codePopulation'] = true;
        $this->codePopulation = $codePopulation;

        return $this;
    }

    public function getCodeOption(): ?string
    {
        return $this->codeOption;
    }

    public function setCodeOption(?string $codeOption): self
    {
        $this->initialized['codeOption'] = true;
        $this->codeOption = $codeOption;

        return $this;
    }

    public function getCodeDelegataireDeGestion(): ?string
    {
        return $this->codeDelegataireDeGestion;
    }

    public function setCodeDelegataireDeGestion(?string $codeDelegataireDeGestion): self
    {
        $this->initialized['codeDelegataireDeGestion'] = true;
        $this->codeDelegataireDeGestion = $codeDelegataireDeGestion;

        return $this;
    }
}
