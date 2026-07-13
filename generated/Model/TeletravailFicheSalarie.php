<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class TeletravailFicheSalarie
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
     * @var int|null
     */
    protected $teletravailChoixParametrage;

    /**
     * @var int|null
     */
    protected $modeSaisieTeletravail;

    /**
     * @var int|null
     */
    protected $limite;

    /**
     * @var int|null
     */
    protected $periode;

    /**
     * @var bool|null
     */
    protected $lundi;

    /**
     * @var bool|null
     */
    protected $mardi;

    /**
     * @var bool|null
     */
    protected $mercredi;

    /**
     * @var bool|null
     */
    protected $jeudi;

    /**
     * @var bool|null
     */
    protected $vendredi;

    /**
     * @var bool|null
     */
    protected $samedi;

    /**
     * @var bool|null
     */
    protected $dimanche;

    public function getTeletravailChoixParametrage(): ?int
    {
        return $this->teletravailChoixParametrage;
    }

    public function setTeletravailChoixParametrage(?int $teletravailChoixParametrage): self
    {
        $this->initialized['teletravailChoixParametrage'] = true;
        $this->teletravailChoixParametrage = $teletravailChoixParametrage;

        return $this;
    }

    public function getModeSaisieTeletravail(): ?int
    {
        return $this->modeSaisieTeletravail;
    }

    public function setModeSaisieTeletravail(?int $modeSaisieTeletravail): self
    {
        $this->initialized['modeSaisieTeletravail'] = true;
        $this->modeSaisieTeletravail = $modeSaisieTeletravail;

        return $this;
    }

    public function getLimite(): ?int
    {
        return $this->limite;
    }

    public function setLimite(?int $limite): self
    {
        $this->initialized['limite'] = true;
        $this->limite = $limite;

        return $this;
    }

    public function getPeriode(): ?int
    {
        return $this->periode;
    }

    public function setPeriode(?int $periode): self
    {
        $this->initialized['periode'] = true;
        $this->periode = $periode;

        return $this;
    }

    public function getLundi(): ?bool
    {
        return $this->lundi;
    }

    public function setLundi(?bool $lundi): self
    {
        $this->initialized['lundi'] = true;
        $this->lundi = $lundi;

        return $this;
    }

    public function getMardi(): ?bool
    {
        return $this->mardi;
    }

    public function setMardi(?bool $mardi): self
    {
        $this->initialized['mardi'] = true;
        $this->mardi = $mardi;

        return $this;
    }

    public function getMercredi(): ?bool
    {
        return $this->mercredi;
    }

    public function setMercredi(?bool $mercredi): self
    {
        $this->initialized['mercredi'] = true;
        $this->mercredi = $mercredi;

        return $this;
    }

    public function getJeudi(): ?bool
    {
        return $this->jeudi;
    }

    public function setJeudi(?bool $jeudi): self
    {
        $this->initialized['jeudi'] = true;
        $this->jeudi = $jeudi;

        return $this;
    }

    public function getVendredi(): ?bool
    {
        return $this->vendredi;
    }

    public function setVendredi(?bool $vendredi): self
    {
        $this->initialized['vendredi'] = true;
        $this->vendredi = $vendredi;

        return $this;
    }

    public function getSamedi(): ?bool
    {
        return $this->samedi;
    }

    public function setSamedi(?bool $samedi): self
    {
        $this->initialized['samedi'] = true;
        $this->samedi = $samedi;

        return $this;
    }

    public function getDimanche(): ?bool
    {
        return $this->dimanche;
    }

    public function setDimanche(?bool $dimanche): self
    {
        $this->initialized['dimanche'] = true;
        $this->dimanche = $dimanche;

        return $this;
    }
}
