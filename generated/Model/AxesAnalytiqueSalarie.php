<?php

namespace QdequippeTech\Silae\Api\Model;

class AxesAnalytiqueSalarie
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
    protected $matriculeSalarie;
    /**
     * @var string|null
     */
    protected $nomAffiche;
    /**
     * @var DonneesAxeAnalytiqueSalarie[]|null
     */
    protected $affectationAnalytique;

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

    public function getNomAffiche(): ?string
    {
        return $this->nomAffiche;
    }

    public function setNomAffiche(?string $nomAffiche): self
    {
        $this->initialized['nomAffiche'] = true;
        $this->nomAffiche = $nomAffiche;

        return $this;
    }

    /**
     * @return DonneesAxeAnalytiqueSalarie[]|null
     */
    public function getAffectationAnalytique(): ?array
    {
        return $this->affectationAnalytique;
    }

    /**
     * @param DonneesAxeAnalytiqueSalarie[]|null $affectationAnalytique
     */
    public function setAffectationAnalytique(?array $affectationAnalytique): self
    {
        $this->initialized['affectationAnalytique'] = true;
        $this->affectationAnalytique = $affectationAnalytique;

        return $this;
    }
}
