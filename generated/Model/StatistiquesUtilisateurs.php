<?php

namespace QdequippeTech\Silae\Api\Model;

class StatistiquesUtilisateurs
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
     * @var list<StatistiquesProductionUtilisateur>|null
     */
    protected $statistiquesProductionUtilisateurs;

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
     * @return list<StatistiquesProductionUtilisateur>|null
     */
    public function getStatistiquesProductionUtilisateurs(): ?array
    {
        return $this->statistiquesProductionUtilisateurs;
    }

    /**
     * @param list<StatistiquesProductionUtilisateur>|null $statistiquesProductionUtilisateurs
     */
    public function setStatistiquesProductionUtilisateurs(?array $statistiquesProductionUtilisateurs): self
    {
        $this->initialized['statistiquesProductionUtilisateurs'] = true;
        $this->statistiquesProductionUtilisateurs = $statistiquesProductionUtilisateurs;

        return $this;
    }
}
