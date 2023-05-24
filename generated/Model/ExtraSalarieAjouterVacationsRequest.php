<?php

namespace QdequippeTech\Silae\Api\Model;

class ExtraSalarieAjouterVacationsRequest
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
    protected $categorie;
    /**
     * @var ExtraSalarieVacations|null
     */
    protected $extraSalarieVacations;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): self
    {
        $this->initialized['categorie'] = true;
        $this->categorie = $categorie;

        return $this;
    }

    public function getExtraSalarieVacations(): ?ExtraSalarieVacations
    {
        return $this->extraSalarieVacations;
    }

    public function setExtraSalarieVacations(?ExtraSalarieVacations $extraSalarieVacations): self
    {
        $this->initialized['extraSalarieVacations'] = true;
        $this->extraSalarieVacations = $extraSalarieVacations;

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
