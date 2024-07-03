<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBulletinLignesResult
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
     * @var list<LigneBulletin>|null
     */
    protected $lignesBulletin;

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

    /**
     * @return list<LigneBulletin>|null
     */
    public function getLignesBulletin(): ?array
    {
        return $this->lignesBulletin;
    }

    /**
     * @param list<LigneBulletin>|null $lignesBulletin
     */
    public function setLignesBulletin(?array $lignesBulletin): self
    {
        $this->initialized['lignesBulletin'] = true;
        $this->lignesBulletin = $lignesBulletin;

        return $this;
    }
}
