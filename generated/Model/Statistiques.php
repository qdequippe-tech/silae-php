<?php

namespace QdequippeTech\Silae\Api\Model;

class Statistiques
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
     * @var StatistiquesProduction[]|null
     */
    protected $statistiquesProduction;
    /**
     * @var StatistiquesDADS[]|null
     */
    protected $statistiquesDADS;

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
     * @return StatistiquesProduction[]|null
     */
    public function getStatistiquesProduction(): ?array
    {
        return $this->statistiquesProduction;
    }

    /**
     * @param StatistiquesProduction[]|null $statistiquesProduction
     */
    public function setStatistiquesProduction(?array $statistiquesProduction): self
    {
        $this->initialized['statistiquesProduction'] = true;
        $this->statistiquesProduction = $statistiquesProduction;

        return $this;
    }

    /**
     * @return StatistiquesDADS[]|null
     */
    public function getStatistiquesDADS(): ?array
    {
        return $this->statistiquesDADS;
    }

    /**
     * @param StatistiquesDADS[]|null $statistiquesDADS
     */
    public function setStatistiquesDADS(?array $statistiquesDADS): self
    {
        $this->initialized['statistiquesDADS'] = true;
        $this->statistiquesDADS = $statistiquesDADS;

        return $this;
    }
}
