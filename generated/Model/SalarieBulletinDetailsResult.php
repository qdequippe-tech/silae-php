<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBulletinDetailsResult
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
    protected $intituleEmploi;

    /**
     * @var string|null
     */
    protected $codeContratTravail;

    /**
     * @var list<SalarieBulletinResult>|null
     */
    protected $bulletins;

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

    public function getIntituleEmploi(): ?string
    {
        return $this->intituleEmploi;
    }

    public function setIntituleEmploi(?string $intituleEmploi): self
    {
        $this->initialized['intituleEmploi'] = true;
        $this->intituleEmploi = $intituleEmploi;

        return $this;
    }

    public function getCodeContratTravail(): ?string
    {
        return $this->codeContratTravail;
    }

    public function setCodeContratTravail(?string $codeContratTravail): self
    {
        $this->initialized['codeContratTravail'] = true;
        $this->codeContratTravail = $codeContratTravail;

        return $this;
    }

    /**
     * @return list<SalarieBulletinResult>|null
     */
    public function getBulletins(): ?array
    {
        return $this->bulletins;
    }

    /**
     * @param list<SalarieBulletinResult>|null $bulletins
     */
    public function setBulletins(?array $bulletins): self
    {
        $this->initialized['bulletins'] = true;
        $this->bulletins = $bulletins;

        return $this;
    }
}
