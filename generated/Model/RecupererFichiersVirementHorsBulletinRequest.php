<?php

namespace QdequippeTech\Silae\Api\Model;

class RecupererFichiersVirementHorsBulletinRequest
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
    protected $libelleVirement;

    /**
     * @var list<string>|null
     */
    protected $matriculeSalaries;

    /**
     * @var \DateTime|null
     */
    protected $periodeDebut;

    /**
     * @var \DateTime|null
     */
    protected $periodeFin;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getLibelleVirement(): ?string
    {
        return $this->libelleVirement;
    }

    public function setLibelleVirement(?string $libelleVirement): self
    {
        $this->initialized['libelleVirement'] = true;
        $this->libelleVirement = $libelleVirement;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getMatriculeSalaries(): ?array
    {
        return $this->matriculeSalaries;
    }

    /**
     * @param list<string>|null $matriculeSalaries
     */
    public function setMatriculeSalaries(?array $matriculeSalaries): self
    {
        $this->initialized['matriculeSalaries'] = true;
        $this->matriculeSalaries = $matriculeSalaries;

        return $this;
    }

    public function getPeriodeDebut(): ?\DateTime
    {
        return $this->periodeDebut;
    }

    public function setPeriodeDebut(?\DateTime $periodeDebut): self
    {
        $this->initialized['periodeDebut'] = true;
        $this->periodeDebut = $periodeDebut;

        return $this;
    }

    public function getPeriodeFin(): ?\DateTime
    {
        return $this->periodeFin;
    }

    public function setPeriodeFin(?\DateTime $periodeFin): self
    {
        $this->initialized['periodeFin'] = true;
        $this->periodeFin = $periodeFin;

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
