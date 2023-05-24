<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationPersonnesLieesRequest
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
     * @var PersonneLiee|null
     */
    protected $conjoint;
    /**
     * @var PersonneLiee[]|null
     */
    protected $personnesLiees;
    /**
     * @var string|null
     */
    protected $matricule;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getConjoint(): ?PersonneLiee
    {
        return $this->conjoint;
    }

    public function setConjoint(?PersonneLiee $conjoint): self
    {
        $this->initialized['conjoint'] = true;
        $this->conjoint = $conjoint;

        return $this;
    }

    /**
     * @return PersonneLiee[]|null
     */
    public function getPersonnesLiees(): ?array
    {
        return $this->personnesLiees;
    }

    /**
     * @param PersonneLiee[]|null $personnesLiees
     */
    public function setPersonnesLiees(?array $personnesLiees): self
    {
        $this->initialized['personnesLiees'] = true;
        $this->personnesLiees = $personnesLiees;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->initialized['matricule'] = true;
        $this->matricule = $matricule;

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
