<?php

namespace QdequippeTech\Silae\Api\Model;

class RetourImportDSN
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
    protected $existenceErreur;
    /**
     * @var bool|null
     */
    protected $importDansDossier;
    /**
     * @var bool|null
     */
    protected $importDansDomaine;
    /**
     * @var bool|null
     */
    protected $importDansEtablissement;
    /**
     * @var bool|null
     */
    protected $dsnMensuelleExistante;
    /**
     * @var string|null
     */
    protected $erreurAnalyse;
    /**
     * @var bool|null
     */
    protected $erreurImport;
    /**
     * @var bool|null
     */
    protected $erreurBlocanteImport;
    /**
     * @var string[]|null
     */
    protected $compteRendu;
    /**
     * @var string|null
     */
    protected $numeroDossier;
    /**
     * @var string|null
     */
    protected $nomInterneEtablissementPricipal;
    /**
     * @var string|null
     */
    protected $nomInterneEtablissementDeclare;

    public function getExistenceErreur(): ?bool
    {
        return $this->existenceErreur;
    }

    public function setExistenceErreur(?bool $existenceErreur): self
    {
        $this->initialized['existenceErreur'] = true;
        $this->existenceErreur = $existenceErreur;

        return $this;
    }

    public function getImportDansDossier(): ?bool
    {
        return $this->importDansDossier;
    }

    public function setImportDansDossier(?bool $importDansDossier): self
    {
        $this->initialized['importDansDossier'] = true;
        $this->importDansDossier = $importDansDossier;

        return $this;
    }

    public function getImportDansDomaine(): ?bool
    {
        return $this->importDansDomaine;
    }

    public function setImportDansDomaine(?bool $importDansDomaine): self
    {
        $this->initialized['importDansDomaine'] = true;
        $this->importDansDomaine = $importDansDomaine;

        return $this;
    }

    public function getImportDansEtablissement(): ?bool
    {
        return $this->importDansEtablissement;
    }

    public function setImportDansEtablissement(?bool $importDansEtablissement): self
    {
        $this->initialized['importDansEtablissement'] = true;
        $this->importDansEtablissement = $importDansEtablissement;

        return $this;
    }

    public function getDsnMensuelleExistante(): ?bool
    {
        return $this->dsnMensuelleExistante;
    }

    public function setDsnMensuelleExistante(?bool $dsnMensuelleExistante): self
    {
        $this->initialized['dsnMensuelleExistante'] = true;
        $this->dsnMensuelleExistante = $dsnMensuelleExistante;

        return $this;
    }

    public function getErreurAnalyse(): ?string
    {
        return $this->erreurAnalyse;
    }

    public function setErreurAnalyse(?string $erreurAnalyse): self
    {
        $this->initialized['erreurAnalyse'] = true;
        $this->erreurAnalyse = $erreurAnalyse;

        return $this;
    }

    public function getErreurImport(): ?bool
    {
        return $this->erreurImport;
    }

    public function setErreurImport(?bool $erreurImport): self
    {
        $this->initialized['erreurImport'] = true;
        $this->erreurImport = $erreurImport;

        return $this;
    }

    public function getErreurBlocanteImport(): ?bool
    {
        return $this->erreurBlocanteImport;
    }

    public function setErreurBlocanteImport(?bool $erreurBlocanteImport): self
    {
        $this->initialized['erreurBlocanteImport'] = true;
        $this->erreurBlocanteImport = $erreurBlocanteImport;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getCompteRendu(): ?array
    {
        return $this->compteRendu;
    }

    /**
     * @param string[]|null $compteRendu
     */
    public function setCompteRendu(?array $compteRendu): self
    {
        $this->initialized['compteRendu'] = true;
        $this->compteRendu = $compteRendu;

        return $this;
    }

    public function getNumeroDossier(): ?string
    {
        return $this->numeroDossier;
    }

    public function setNumeroDossier(?string $numeroDossier): self
    {
        $this->initialized['numeroDossier'] = true;
        $this->numeroDossier = $numeroDossier;

        return $this;
    }

    public function getNomInterneEtablissementPricipal(): ?string
    {
        return $this->nomInterneEtablissementPricipal;
    }

    public function setNomInterneEtablissementPricipal(?string $nomInterneEtablissementPricipal): self
    {
        $this->initialized['nomInterneEtablissementPricipal'] = true;
        $this->nomInterneEtablissementPricipal = $nomInterneEtablissementPricipal;

        return $this;
    }

    public function getNomInterneEtablissementDeclare(): ?string
    {
        return $this->nomInterneEtablissementDeclare;
    }

    public function setNomInterneEtablissementDeclare(?string $nomInterneEtablissementDeclare): self
    {
        $this->initialized['nomInterneEtablissementDeclare'] = true;
        $this->nomInterneEtablissementDeclare = $nomInterneEtablissementDeclare;

        return $this;
    }
}
