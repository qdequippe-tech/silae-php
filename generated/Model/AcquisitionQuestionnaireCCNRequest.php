<?php

namespace QdequippeTech\Silae\Api\Model;

class AcquisitionQuestionnaireCCNRequest
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
    protected $codeCCN;
    /**
     * @var ModificationChampValeursTypees[]|null
     */
    protected $listeChamps;

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
     * @return ModificationChampValeursTypees[]|null
     */
    public function getListeChamps(): ?array
    {
        return $this->listeChamps;
    }

    /**
     * @param ModificationChampValeursTypees[]|null $listeChamps
     */
    public function setListeChamps(?array $listeChamps): self
    {
        $this->initialized['listeChamps'] = true;
        $this->listeChamps = $listeChamps;

        return $this;
    }
}
