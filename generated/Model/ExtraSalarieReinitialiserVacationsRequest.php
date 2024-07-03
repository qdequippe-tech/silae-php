<?php

namespace QdequippeTech\Silae\Api\Model;

class ExtraSalarieReinitialiserVacationsRequest
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
     * @var RequeteExtraSalarieVacations|null
     */
    protected $requeteExtraSalarieVacations;

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

    public function getRequeteExtraSalarieVacations(): ?RequeteExtraSalarieVacations
    {
        return $this->requeteExtraSalarieVacations;
    }

    public function setRequeteExtraSalarieVacations(?RequeteExtraSalarieVacations $requeteExtraSalarieVacations): self
    {
        $this->initialized['requeteExtraSalarieVacations'] = true;
        $this->requeteExtraSalarieVacations = $requeteExtraSalarieVacations;

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
