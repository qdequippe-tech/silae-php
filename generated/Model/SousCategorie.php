<?php

namespace QdequippeTech\Silae\Api\Model;

class SousCategorie
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
    protected $nomSousCategorie;
    /**
     * @var string|null
     */
    protected $nouveauNomSousCategorie;

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

    public function getNouveauNomSousCategorie(): ?string
    {
        return $this->nouveauNomSousCategorie;
    }

    public function setNouveauNomSousCategorie(?string $nouveauNomSousCategorie): self
    {
        $this->initialized['nouveauNomSousCategorie'] = true;
        $this->nouveauNomSousCategorie = $nouveauNomSousCategorie;

        return $this;
    }
}
