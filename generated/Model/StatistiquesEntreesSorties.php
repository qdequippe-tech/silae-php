<?php

namespace QdequippeTech\Silae\Api\Model;

class StatistiquesEntreesSorties
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
     * @var StatistiquesEntreesSortiesDetails[]|null
     */
    protected $statistiquesEntreesSortiesDetails;

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
     * @return StatistiquesEntreesSortiesDetails[]|null
     */
    public function getStatistiquesEntreesSortiesDetails(): ?array
    {
        return $this->statistiquesEntreesSortiesDetails;
    }

    /**
     * @param StatistiquesEntreesSortiesDetails[]|null $statistiquesEntreesSortiesDetails
     */
    public function setStatistiquesEntreesSortiesDetails(?array $statistiquesEntreesSortiesDetails): self
    {
        $this->initialized['statistiquesEntreesSortiesDetails'] = true;
        $this->statistiquesEntreesSortiesDetails = $statistiquesEntreesSortiesDetails;

        return $this;
    }
}
