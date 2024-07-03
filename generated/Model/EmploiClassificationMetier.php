<?php

namespace QdequippeTech\Silae\Api\Model;

class EmploiClassificationMetier
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
    protected $codeClassificationMetier;

    /**
     * @var string|null
     */
    protected $clMLibelle;

    /**
     * @var string|null
     */
    protected $clMCodeConventionCollective;

    /**
     * @var list<string>|null
     */
    protected $clMCodesCSP;

    /**
     * @var list<string>|null
     */
    protected $clMCodesStatutProfessionnel;

    /**
     * @var list<string>|null
     */
    protected $clMCodesStatutCategoriel;

    /**
     * @var list<string>|null
     */
    protected $clMCodesStatutCategorielAgircArrco;

    /**
     * @var list<string>|null
     */
    protected $clMCodesCPNDUC;

    /**
     * @var list<string>|null
     */
    protected $clMCoefficients1;

    /**
     * @var list<string>|null
     */
    protected $clMCoefficients2;

    /**
     * @var list<string>|null
     */
    protected $clMCoefficients3;

    /**
     * @var list<string>|null
     */
    protected $clMCoefficients4;

    /**
     * @var \DateTime|null
     */
    protected $dateDebut;

    /**
     * @var \DateTime|null
     */
    protected $dateFin;

    public function getCodeClassificationMetier(): ?string
    {
        return $this->codeClassificationMetier;
    }

    public function setCodeClassificationMetier(?string $codeClassificationMetier): self
    {
        $this->initialized['codeClassificationMetier'] = true;
        $this->codeClassificationMetier = $codeClassificationMetier;

        return $this;
    }

    public function getClMLibelle(): ?string
    {
        return $this->clMLibelle;
    }

    public function setClMLibelle(?string $clMLibelle): self
    {
        $this->initialized['clMLibelle'] = true;
        $this->clMLibelle = $clMLibelle;

        return $this;
    }

    public function getClMCodeConventionCollective(): ?string
    {
        return $this->clMCodeConventionCollective;
    }

    public function setClMCodeConventionCollective(?string $clMCodeConventionCollective): self
    {
        $this->initialized['clMCodeConventionCollective'] = true;
        $this->clMCodeConventionCollective = $clMCodeConventionCollective;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getClMCodesCSP(): ?array
    {
        return $this->clMCodesCSP;
    }

    /**
     * @param list<string>|null $clMCodesCSP
     */
    public function setClMCodesCSP(?array $clMCodesCSP): self
    {
        $this->initialized['clMCodesCSP'] = true;
        $this->clMCodesCSP = $clMCodesCSP;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getClMCodesStatutProfessionnel(): ?array
    {
        return $this->clMCodesStatutProfessionnel;
    }

    /**
     * @param list<string>|null $clMCodesStatutProfessionnel
     */
    public function setClMCodesStatutProfessionnel(?array $clMCodesStatutProfessionnel): self
    {
        $this->initialized['clMCodesStatutProfessionnel'] = true;
        $this->clMCodesStatutProfessionnel = $clMCodesStatutProfessionnel;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getClMCodesStatutCategoriel(): ?array
    {
        return $this->clMCodesStatutCategoriel;
    }

    /**
     * @param list<string>|null $clMCodesStatutCategoriel
     */
    public function setClMCodesStatutCategoriel(?array $clMCodesStatutCategoriel): self
    {
        $this->initialized['clMCodesStatutCategoriel'] = true;
        $this->clMCodesStatutCategoriel = $clMCodesStatutCategoriel;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getClMCodesStatutCategorielAgircArrco(): ?array
    {
        return $this->clMCodesStatutCategorielAgircArrco;
    }

    /**
     * @param list<string>|null $clMCodesStatutCategorielAgircArrco
     */
    public function setClMCodesStatutCategorielAgircArrco(?array $clMCodesStatutCategorielAgircArrco): self
    {
        $this->initialized['clMCodesStatutCategorielAgircArrco'] = true;
        $this->clMCodesStatutCategorielAgircArrco = $clMCodesStatutCategorielAgircArrco;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getClMCodesCPNDUC(): ?array
    {
        return $this->clMCodesCPNDUC;
    }

    /**
     * @param list<string>|null $clMCodesCPNDUC
     */
    public function setClMCodesCPNDUC(?array $clMCodesCPNDUC): self
    {
        $this->initialized['clMCodesCPNDUC'] = true;
        $this->clMCodesCPNDUC = $clMCodesCPNDUC;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getClMCoefficients1(): ?array
    {
        return $this->clMCoefficients1;
    }

    /**
     * @param list<string>|null $clMCoefficients1
     */
    public function setClMCoefficients1(?array $clMCoefficients1): self
    {
        $this->initialized['clMCoefficients1'] = true;
        $this->clMCoefficients1 = $clMCoefficients1;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getClMCoefficients2(): ?array
    {
        return $this->clMCoefficients2;
    }

    /**
     * @param list<string>|null $clMCoefficients2
     */
    public function setClMCoefficients2(?array $clMCoefficients2): self
    {
        $this->initialized['clMCoefficients2'] = true;
        $this->clMCoefficients2 = $clMCoefficients2;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getClMCoefficients3(): ?array
    {
        return $this->clMCoefficients3;
    }

    /**
     * @param list<string>|null $clMCoefficients3
     */
    public function setClMCoefficients3(?array $clMCoefficients3): self
    {
        $this->initialized['clMCoefficients3'] = true;
        $this->clMCoefficients3 = $clMCoefficients3;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getClMCoefficients4(): ?array
    {
        return $this->clMCoefficients4;
    }

    /**
     * @param list<string>|null $clMCoefficients4
     */
    public function setClMCoefficients4(?array $clMCoefficients4): self
    {
        $this->initialized['clMCoefficients4'] = true;
        $this->clMCoefficients4 = $clMCoefficients4;

        return $this;
    }

    public function getDateDebut(): ?\DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTime $dateDebut): self
    {
        $this->initialized['dateDebut'] = true;
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTime $dateFin): self
    {
        $this->initialized['dateFin'] = true;
        $this->dateFin = $dateFin;

        return $this;
    }
}
