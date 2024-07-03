<?php

namespace QdequippeTech\Silae\Api\Model;

class RequeteSalariesDUE
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
     * @var list<string>|null
     */
    protected $matriculesSalaries;

    /**
     * @var \DateTime|null
     */
    protected $dateMinEmploi;

    /**
     * @return list<string>|null
     */
    public function getMatriculesSalaries(): ?array
    {
        return $this->matriculesSalaries;
    }

    /**
     * @param list<string>|null $matriculesSalaries
     */
    public function setMatriculesSalaries(?array $matriculesSalaries): self
    {
        $this->initialized['matriculesSalaries'] = true;
        $this->matriculesSalaries = $matriculesSalaries;

        return $this;
    }

    public function getDateMinEmploi(): ?\DateTime
    {
        return $this->dateMinEmploi;
    }

    public function setDateMinEmploi(?\DateTime $dateMinEmploi): self
    {
        $this->initialized['dateMinEmploi'] = true;
        $this->dateMinEmploi = $dateMinEmploi;

        return $this;
    }
}
