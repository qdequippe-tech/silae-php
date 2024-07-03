<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationSaisieArretRequest
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
     * @var list<SaisieArret>|null
     */
    protected $saisieArrets;

    /**
     * @var string|null
     */
    protected $matriculeSalarie;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    /**
     * @return list<SaisieArret>|null
     */
    public function getSaisieArrets(): ?array
    {
        return $this->saisieArrets;
    }

    /**
     * @param list<SaisieArret>|null $saisieArrets
     */
    public function setSaisieArrets(?array $saisieArrets): self
    {
        $this->initialized['saisieArrets'] = true;
        $this->saisieArrets = $saisieArrets;

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
