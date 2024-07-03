<?php

namespace QdequippeTech\Silae\Api\Model;

class LecturePersonnesLieesResponse
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
     * @var list<PersonneLiee>|null
     */
    protected $personnesLiees;

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
     * @return list<PersonneLiee>|null
     */
    public function getPersonnesLiees(): ?array
    {
        return $this->personnesLiees;
    }

    /**
     * @param list<PersonneLiee>|null $personnesLiees
     */
    public function setPersonnesLiees(?array $personnesLiees): self
    {
        $this->initialized['personnesLiees'] = true;
        $this->personnesLiees = $personnesLiees;

        return $this;
    }
}
