<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationQuestionnaireCCNEtablissementRequest
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
    protected $nomInterneEtablissement;

    /**
     * @var string|null
     */
    protected $codeCCN;

    /**
     * @var list<ModificationChampValeursTypees>|null
     */
    protected $listeChamps;

    /**
     * @var string|null
     */
    protected $numeroDossier;

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

    public function getCodeCCN(): ?string
    {
        return $this->codeCCN;
    }

    public function setCodeCCN(?string $codeCCN): self
    {
        $this->initialized['codeCCN'] = true;
        $this->codeCCN = $codeCCN;

        return $this;
    }

    /**
     * @return list<ModificationChampValeursTypees>|null
     */
    public function getListeChamps(): ?array
    {
        return $this->listeChamps;
    }

    /**
     * @param list<ModificationChampValeursTypees>|null $listeChamps
     */
    public function setListeChamps(?array $listeChamps): self
    {
        $this->initialized['listeChamps'] = true;
        $this->listeChamps = $listeChamps;

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
}
