<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationChampSalarieRequest
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
     * @var int|null
     */
    protected $identifiantEmploi;

    /**
     * @var list<ModificationChampValeursTypees>|null
     */
    protected $listeChamps;

    /**
     * @var string|null
     */
    protected $matricule;

    /**
     * @var string|null
     */
    protected $numeroDossier;

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

    /**
     * @return list<ModificationChampValeursTypees>|null
     */
    public function getListeChamps(): ?array
    {
        return $this->listeChamps;
    }

    /**
     * @param list<ModificationChampValeursTypees>|null $listeChamps
     */
    public function setListeChamps(?array $listeChamps): self
    {
        $this->initialized['listeChamps'] = true;
        $this->listeChamps = $listeChamps;

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
