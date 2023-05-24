<?php

namespace QdequippeTech\Silae\Api\Model;

class AjoutSousCategorieAxeAnalytiqueRequest
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
    protected $nomAxe;
    /**
     * @var string|null
     */
    protected $nomSousCategorie;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getNomAxe(): ?string
    {
        return $this->nomAxe;
    }

    public function setNomAxe(?string $nomAxe): self
    {
        $this->initialized['nomAxe'] = true;
        $this->nomAxe = $nomAxe;

        return $this;
    }

    public function getNomSousCategorie(): ?string
    {
        return $this->nomSousCategorie;
    }

    public function setNomSousCategorie(?string $nomSousCategorie): self
    {
        $this->initialized['nomSousCategorie'] = true;
        $this->nomSousCategorie = $nomSousCategorie;

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
