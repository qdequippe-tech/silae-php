<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBulletinStatutEtatAvancementReponse
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
     * @var int|null
     */
    protected $statutEtatAvancement;

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

    public function getStatutEtatAvancement(): ?int
    {
        return $this->statutEtatAvancement;
    }

    public function setStatutEtatAvancement(?int $statutEtatAvancement): self
    {
        $this->initialized['statutEtatAvancement'] = true;
        $this->statutEtatAvancement = $statutEtatAvancement;

        return $this;
    }
}
