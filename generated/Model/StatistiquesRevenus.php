<?php

namespace QdequippeTech\Silae\Api\Model;

class StatistiquesRevenus
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
    protected $numeroDossier;

    /**
     * @var string|null
     */
    protected $codeAgence;

    /**
     * @var list<StatistiquesRevenusSalarie>|null
     */
    protected $statistiquesProductionMatricule;

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

    public function getCodeAgence(): ?string
    {
        return $this->codeAgence;
    }

    public function setCodeAgence(?string $codeAgence): self
    {
        $this->initialized['codeAgence'] = true;
        $this->codeAgence = $codeAgence;

        return $this;
    }

    /**
     * @return list<StatistiquesRevenusSalarie>|null
     */
    public function getStatistiquesProductionMatricule(): ?array
    {
        return $this->statistiquesProductionMatricule;
    }

    /**
     * @param list<StatistiquesRevenusSalarie>|null $statistiquesProductionMatricule
     */
    public function setStatistiquesProductionMatricule(?array $statistiquesProductionMatricule): self
    {
        $this->initialized['statistiquesProductionMatricule'] = true;
        $this->statistiquesProductionMatricule = $statistiquesProductionMatricule;

        return $this;
    }
}
