<?php

namespace QdequippeTech\Silae\Api\Model;

class AxeAnalytique
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
     * @var SousCategorie[]|null
     */
    protected $sousCategorie;

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

    /**
     * @return SousCategorie[]|null
     */
    public function getSousCategorie(): ?array
    {
        return $this->sousCategorie;
    }

    /**
     * @param SousCategorie[]|null $sousCategorie
     */
    public function setSousCategorie(?array $sousCategorie): self
    {
        $this->initialized['sousCategorie'] = true;
        $this->sousCategorie = $sousCategorie;

        return $this;
    }
}
