<?php

namespace QdequippeTech\Silae\Api\Model;

class SoldeRepos
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
     * @var \DateTime|null
     */
    protected $periode;

    /**
     * @var list<SoldeReposSalarie>|null
     */
    protected $soldeReposSalaries;

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

    public function getPeriode(): ?\DateTime
    {
        return $this->periode;
    }

    public function setPeriode(?\DateTime $periode): self
    {
        $this->initialized['periode'] = true;
        $this->periode = $periode;

        return $this;
    }

    /**
     * @return list<SoldeReposSalarie>|null
     */
    public function getSoldeReposSalaries(): ?array
    {
        return $this->soldeReposSalaries;
    }

    /**
     * @param list<SoldeReposSalarie>|null $soldeReposSalaries
     */
    public function setSoldeReposSalaries(?array $soldeReposSalaries): self
    {
        $this->initialized['soldeReposSalaries'] = true;
        $this->soldeReposSalaries = $soldeReposSalaries;

        return $this;
    }
}
