<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieAjouterActiviteJournaliereSurEmploiRequest
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
     * @var int|null
     */
    protected $identifiantEmploi;

    /**
     * @var SalarieActiviteJournalierePeriode|null
     */
    protected $activiteJournalierePeriode;

    /**
     * @var string|null
     */
    protected $matriculeSalarie;

    /**
     * @var string|null
     */
    protected $numeroDossier;

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

    public function getActiviteJournalierePeriode(): ?SalarieActiviteJournalierePeriode
    {
        return $this->activiteJournalierePeriode;
    }

    public function setActiviteJournalierePeriode(?SalarieActiviteJournalierePeriode $activiteJournalierePeriode): self
    {
        $this->initialized['activiteJournalierePeriode'] = true;
        $this->activiteJournalierePeriode = $activiteJournalierePeriode;

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
