<?php

namespace QdequippeTech\Silae\Api\Model;

class StatistiquesProductionUtilisateur
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
    protected $identifiantUtilisateur;
    /**
     * @var \DateTime|null
     */
    protected $periode;
    /**
     * @var int|null
     */
    protected $nbBulletins;

    public function getIdentifiantUtilisateur(): ?string
    {
        return $this->identifiantUtilisateur;
    }

    public function setIdentifiantUtilisateur(?string $identifiantUtilisateur): self
    {
        $this->initialized['identifiantUtilisateur'] = true;
        $this->identifiantUtilisateur = $identifiantUtilisateur;

        return $this;
    }

    public function getPeriode(): ?\DateTime
    {
        return $this->periode;
    }

    public function setPeriode(?\DateTime $periode): self
    {
        $this->initialized['periode'] = true;
        $this->periode = $periode;

        return $this;
    }

    public function getNbBulletins(): ?int
    {
        return $this->nbBulletins;
    }

    public function setNbBulletins(?int $nbBulletins): self
    {
        $this->initialized['nbBulletins'] = true;
        $this->nbBulletins = $nbBulletins;

        return $this;
    }
}
