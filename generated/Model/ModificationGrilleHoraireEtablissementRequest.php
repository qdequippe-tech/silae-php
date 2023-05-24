<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationGrilleHoraireEtablissementRequest
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
    protected $nomEtablissement;
    /**
     * @var ModificationHoraireEtablissement|null
     */
    protected $horaire;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getNomEtablissement(): ?string
    {
        return $this->nomEtablissement;
    }

    public function setNomEtablissement(?string $nomEtablissement): self
    {
        $this->initialized['nomEtablissement'] = true;
        $this->nomEtablissement = $nomEtablissement;

        return $this;
    }

    public function getHoraire(): ?ModificationHoraireEtablissement
    {
        return $this->horaire;
    }

    public function setHoraire(?ModificationHoraireEtablissement $horaire): self
    {
        $this->initialized['horaire'] = true;
        $this->horaire = $horaire;

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
