<?php

namespace QdequippeTech\Silae\Api\Model;

class DonneesAxeAnalytiqueSalarie
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
     * @var SousCategoriesEnPC[]|null
     */
    protected $sousCategoriesEnPC;

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

    /**
     * @return SousCategoriesEnPC[]|null
     */
    public function getSousCategoriesEnPC(): ?array
    {
        return $this->sousCategoriesEnPC;
    }

    /**
     * @param SousCategoriesEnPC[]|null $sousCategoriesEnPC
     */
    public function setSousCategoriesEnPC(?array $sousCategoriesEnPC): self
    {
        $this->initialized['sousCategoriesEnPC'] = true;
        $this->sousCategoriesEnPC = $sousCategoriesEnPC;

        return $this;
    }
}
