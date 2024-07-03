<?php

namespace QdequippeTech\Silae\Api\Model;

class CreationDossierParImportFichierDSNRequest
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
    protected $dsnEnByteArray;

    /**
     * @var \DateTime|null
     */
    protected $periodeMin;

    /**
     * @var \DateTime|null
     */
    protected $periodeMax;

    /**
     * @var bool|null
     */
    protected $dernierFichier;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getDsnEnByteArray(): ?string
    {
        return $this->dsnEnByteArray;
    }

    public function setDsnEnByteArray(?string $dsnEnByteArray): self
    {
        $this->initialized['dsnEnByteArray'] = true;
        $this->dsnEnByteArray = $dsnEnByteArray;

        return $this;
    }

    public function getPeriodeMin(): ?\DateTime
    {
        return $this->periodeMin;
    }

    public function setPeriodeMin(?\DateTime $periodeMin): self
    {
        $this->initialized['periodeMin'] = true;
        $this->periodeMin = $periodeMin;

        return $this;
    }

    public function getPeriodeMax(): ?\DateTime
    {
        return $this->periodeMax;
    }

    public function setPeriodeMax(?\DateTime $periodeMax): self
    {
        $this->initialized['periodeMax'] = true;
        $this->periodeMax = $periodeMax;

        return $this;
    }

    public function getDernierFichier(): ?bool
    {
        return $this->dernierFichier;
    }

    public function setDernierFichier(?bool $dernierFichier): self
    {
        $this->initialized['dernierFichier'] = true;
        $this->dernierFichier = $dernierFichier;

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
