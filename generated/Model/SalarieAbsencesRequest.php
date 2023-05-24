<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieAbsencesRequest
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
     * @var RequeteSalarieAbsences|null
     */
    protected $requeteSalarieAbsences;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getRequeteSalarieAbsences(): ?RequeteSalarieAbsences
    {
        return $this->requeteSalarieAbsences;
    }

    public function setRequeteSalarieAbsences(?RequeteSalarieAbsences $requeteSalarieAbsences): self
    {
        $this->initialized['requeteSalarieAbsences'] = true;
        $this->requeteSalarieAbsences = $requeteSalarieAbsences;

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
