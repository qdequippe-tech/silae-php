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
     * @var PersonneLieeV2|null
     */
    protected $conjoint;

    /**
     * @var list<PersonneLieeV2>|null
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

    public function getConjoint(): ?PersonneLieeV2
    {
        return $this->conjoint;
    }

    public function setConjoint(?PersonneLieeV2 $conjoint): self
    {
        $this->initialized['conjoint'] = true;
        $this->conjoint = $conjoint;

        return $this;
    }

    /**
     * @return list<PersonneLieeV2>|null
     */
    public function getPersonnesLiees(): ?array
    {
        return $this->personnesLiees;
    }

    /**
     * @param list<PersonneLieeV2>|null $personnesLiees
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
