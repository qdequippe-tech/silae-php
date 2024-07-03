<?php

namespace QdequippeTech\Silae\Api\Model;

class InitialisationAncienNumeroContratDSN
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
    protected $numeroDossier;

    /**
     * @var string|null
     */
    protected $matriculeSalarie;

    /**
     * @var int|null
     */
    protected $identifiantEmploi;

    /**
     * @var string|null
     */
    protected $numeroContratDSN;

    /**
     * @var string|null
     */
    protected $siretDOrigine;

    /**
     * @var \DateTime|null
     */
    protected $periodeDeclaration;

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

    public function getNumeroContratDSN(): ?string
    {
        return $this->numeroContratDSN;
    }

    public function setNumeroContratDSN(?string $numeroContratDSN): self
    {
        $this->initialized['numeroContratDSN'] = true;
        $this->numeroContratDSN = $numeroContratDSN;

        return $this;
    }

    public function getSiretDOrigine(): ?string
    {
        return $this->siretDOrigine;
    }

    public function setSiretDOrigine(?string $siretDOrigine): self
    {
        $this->initialized['siretDOrigine'] = true;
        $this->siretDOrigine = $siretDOrigine;

        return $this;
    }

    public function getPeriodeDeclaration(): ?\DateTime
    {
        return $this->periodeDeclaration;
    }

    public function setPeriodeDeclaration(?\DateTime $periodeDeclaration): self
    {
        $this->initialized['periodeDeclaration'] = true;
        $this->periodeDeclaration = $periodeDeclaration;

        return $this;
    }
}
