<?php

namespace QdequippeTech\Silae\Api\Model;

class StatistiquesProductionBulletinCoffreFort
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
     * @var \DateTime|null
     */
    protected $periodePaie;

    /**
     * @var int|null
     */
    protected $nbBulletinsCoffresForts;

    /**
     * @var int|null
     */
    protected $nbBulletinsCoffresFortsEditique;

    /**
     * @var int|null
     */
    protected $nbDocsSortieCoffresForts;

    public function getPeriodePaie(): ?\DateTime
    {
        return $this->periodePaie;
    }

    public function setPeriodePaie(?\DateTime $periodePaie): self
    {
        $this->initialized['periodePaie'] = true;
        $this->periodePaie = $periodePaie;

        return $this;
    }

    public function getNbBulletinsCoffresForts(): ?int
    {
        return $this->nbBulletinsCoffresForts;
    }

    public function setNbBulletinsCoffresForts(?int $nbBulletinsCoffresForts): self
    {
        $this->initialized['nbBulletinsCoffresForts'] = true;
        $this->nbBulletinsCoffresForts = $nbBulletinsCoffresForts;

        return $this;
    }

    public function getNbBulletinsCoffresFortsEditique(): ?int
    {
        return $this->nbBulletinsCoffresFortsEditique;
    }

    public function setNbBulletinsCoffresFortsEditique(?int $nbBulletinsCoffresFortsEditique): self
    {
        $this->initialized['nbBulletinsCoffresFortsEditique'] = true;
        $this->nbBulletinsCoffresFortsEditique = $nbBulletinsCoffresFortsEditique;

        return $this;
    }

    public function getNbDocsSortieCoffresForts(): ?int
    {
        return $this->nbDocsSortieCoffresForts;
    }

    public function setNbDocsSortieCoffresForts(?int $nbDocsSortieCoffresForts): self
    {
        $this->initialized['nbDocsSortieCoffresForts'] = true;
        $this->nbDocsSortieCoffresForts = $nbDocsSortieCoffresForts;

        return $this;
    }
}
