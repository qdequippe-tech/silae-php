<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieSupprimerAbsenceRequest
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
     * @var \DateTime|null
     */
    protected $dateDebutAbsence;
    /**
     * @var \DateTime|null
     */
    protected $dateFinAbsence;
    /**
     * @var string|null
     */
    protected $codeAbsence;
    /**
     * @var string|null
     */
    protected $matriculeSalarie;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getDateDebutAbsence(): ?\DateTime
    {
        return $this->dateDebutAbsence;
    }

    public function setDateDebutAbsence(?\DateTime $dateDebutAbsence): self
    {
        $this->initialized['dateDebutAbsence'] = true;
        $this->dateDebutAbsence = $dateDebutAbsence;

        return $this;
    }

    public function getDateFinAbsence(): ?\DateTime
    {
        return $this->dateFinAbsence;
    }

    public function setDateFinAbsence(?\DateTime $dateFinAbsence): self
    {
        $this->initialized['dateFinAbsence'] = true;
        $this->dateFinAbsence = $dateFinAbsence;

        return $this;
    }

    public function getCodeAbsence(): ?string
    {
        return $this->codeAbsence;
    }

    public function setCodeAbsence(?string $codeAbsence): self
    {
        $this->initialized['codeAbsence'] = true;
        $this->codeAbsence = $codeAbsence;

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
