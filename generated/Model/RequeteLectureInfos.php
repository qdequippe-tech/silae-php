<?php

namespace QdequippeTech\Silae\Api\Model;

class RequeteLectureInfos
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
    protected $tableInformations;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    /**
     * @var string|null
     */
    protected $nomInterneEtablissement;

    /**
     * @var string|null
     */
    protected $matriculeSalarie;

    /**
     * @var int|null
     */
    protected $identifiantEmploi;

    /**
     * @var list<string>|null
     */
    protected $champs;

    public function getTableInformations(): ?string
    {
        return $this->tableInformations;
    }

    public function setTableInformations(?string $tableInformations): self
    {
        $this->initialized['tableInformations'] = true;
        $this->tableInformations = $tableInformations;

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

    public function getMatriculeSalarie(): ?string
    {
        return $this->matriculeSalarie;
    }

    public function setMatriculeSalarie(?string $matriculeSalarie): self
    {
        $this->initialized['matriculeSalarie'] = true;
        $this->matriculeSalarie = $matriculeSalarie;

        return $this;
    }

    public function getIdentifiantEmploi(): ?int
    {
        return $this->identifiantEmploi;
    }

    public function setIdentifiantEmploi(?int $identifiantEmploi): self
    {
        $this->initialized['identifiantEmploi'] = true;
        $this->identifiantEmploi = $identifiantEmploi;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getChamps(): ?array
    {
        return $this->champs;
    }

    /**
     * @param list<string>|null $champs
     */
    public function setChamps(?array $champs): self
    {
        $this->initialized['champs'] = true;
        $this->champs = $champs;

        return $this;
    }
}
