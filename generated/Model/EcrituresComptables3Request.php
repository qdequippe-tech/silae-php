<?php

namespace QdequippeTech\Silae\Api\Model;

class EcrituresComptables3Request
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
     * @var bool|null
     */
    protected $avecLibelleParDefautDesEcritures;

    /**
     * @var bool|null
     */
    protected $avecToutesLesRepartitionsAnalytiques;

    /**
     * @var \DateTime|null
     */
    protected $periodeDebut;

    /**
     * @var \DateTime|null
     */
    protected $periodeFin;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getAvecLibelleParDefautDesEcritures(): ?bool
    {
        return $this->avecLibelleParDefautDesEcritures;
    }

    public function setAvecLibelleParDefautDesEcritures(?bool $avecLibelleParDefautDesEcritures): self
    {
        $this->initialized['avecLibelleParDefautDesEcritures'] = true;
        $this->avecLibelleParDefautDesEcritures = $avecLibelleParDefautDesEcritures;

        return $this;
    }

    public function getAvecToutesLesRepartitionsAnalytiques(): ?bool
    {
        return $this->avecToutesLesRepartitionsAnalytiques;
    }

    public function setAvecToutesLesRepartitionsAnalytiques(?bool $avecToutesLesRepartitionsAnalytiques): self
    {
        $this->initialized['avecToutesLesRepartitionsAnalytiques'] = true;
        $this->avecToutesLesRepartitionsAnalytiques = $avecToutesLesRepartitionsAnalytiques;

        return $this;
    }

    public function getPeriodeDebut(): ?\DateTime
    {
        return $this->periodeDebut;
    }

    public function setPeriodeDebut(?\DateTime $periodeDebut): self
    {
        $this->initialized['periodeDebut'] = true;
        $this->periodeDebut = $periodeDebut;

        return $this;
    }

    public function getPeriodeFin(): ?\DateTime
    {
        return $this->periodeFin;
    }

    public function setPeriodeFin(?\DateTime $periodeFin): self
    {
        $this->initialized['periodeFin'] = true;
        $this->periodeFin = $periodeFin;

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
