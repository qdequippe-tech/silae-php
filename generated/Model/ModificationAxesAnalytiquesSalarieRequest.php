<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationAxesAnalytiquesSalarieRequest
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
    protected $titreCategorie;

    /**
     * @var string|null
     */
    protected $sousCategorieParDefaut;

    /**
     * @var string|null
     */
    protected $matricule;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getTitreCategorie(): ?string
    {
        return $this->titreCategorie;
    }

    public function setTitreCategorie(?string $titreCategorie): self
    {
        $this->initialized['titreCategorie'] = true;
        $this->titreCategorie = $titreCategorie;

        return $this;
    }

    public function getSousCategorieParDefaut(): ?string
    {
        return $this->sousCategorieParDefaut;
    }

    public function setSousCategorieParDefaut(?string $sousCategorieParDefaut): self
    {
        $this->initialized['sousCategorieParDefaut'] = true;
        $this->sousCategorieParDefaut = $sousCategorieParDefaut;

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
