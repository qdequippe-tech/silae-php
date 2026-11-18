<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class LectureTauxATEtablissementResponse
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
     * @var list<TauxAT>|null
     */
    protected $tauxAccidentTravail;

    /**
     * @var string|null
     */
    protected $nomInterneEtablissement;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    /**
     * @return list<TauxAT>|null
     */
    public function getTauxAccidentTravail(): ?array
    {
        return $this->tauxAccidentTravail;
    }

    /**
     * @param list<TauxAT>|null $tauxAccidentTravail
     */
    public function setTauxAccidentTravail(?array $tauxAccidentTravail): self
    {
        $this->initialized['tauxAccidentTravail'] = true;
        $this->tauxAccidentTravail = $tauxAccidentTravail;

        return $this;
    }

    public function getNomInterneEtablissement(): ?string
    {
        return $this->nomInterneEtablissement;
    }

    public function setNomInterneEtablissement(?string $nomInterneEtablissement): self
    {
        $this->initialized['nomInterneEtablissement'] = true;
        $this->nomInterneEtablissement = $nomInterneEtablissement;

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
