<?php

namespace QdequippeTech\Silae\Api\Model;

class ExtraSalarieVacations
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
     * @var int|null
     */
    protected $identifiantEmploi;

    /**
     * @var \DateTime|null
     */
    protected $periode;

    /**
     * @var string|null
     */
    protected $nomInterneEtablissement;

    /**
     * @var list<ExtraSalarieVacation>|null
     */
    protected $vacations;

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

    /**
     * @return list<ExtraSalarieVacation>|null
     */
    public function getVacations(): ?array
    {
        return $this->vacations;
    }

    /**
     * @param list<ExtraSalarieVacation>|null $vacations
     */
    public function setVacations(?array $vacations): self
    {
        $this->initialized['vacations'] = true;
        $this->vacations = $vacations;

        return $this;
    }
}
