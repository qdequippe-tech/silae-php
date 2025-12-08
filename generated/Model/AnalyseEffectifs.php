<?php

namespace QdequippeTech\Silae\Api\Model;

class AnalyseEffectifs
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
    protected $numeroDossier;

    /**
     * @var string|null
     */
    protected $codeAgence;

    /**
     * @var float|null
     */
    protected $effectifSecuriteSociale;

    /**
     * @var float|null
     */
    protected $effectifCodeDuTravail;

    /**
     * @var float|null
     */
    protected $effectifOeth;

    /**
     * @var float|null
     */
    protected $effectifBoeth;

    /**
     * @var float|null
     */
    protected $effectifEcap;

    /**
     * @var float|null
     */
    protected $effectifCsa;

    /**
     * @var float|null
     */
    protected $effectifCsaCfip;

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

    public function getCodeAgence(): ?string
    {
        return $this->codeAgence;
    }

    public function setCodeAgence(?string $codeAgence): self
    {
        $this->initialized['codeAgence'] = true;
        $this->codeAgence = $codeAgence;

        return $this;
    }

    public function getEffectifSecuriteSociale(): ?float
    {
        return $this->effectifSecuriteSociale;
    }

    public function setEffectifSecuriteSociale(?float $effectifSecuriteSociale): self
    {
        $this->initialized['effectifSecuriteSociale'] = true;
        $this->effectifSecuriteSociale = $effectifSecuriteSociale;

        return $this;
    }

    public function getEffectifCodeDuTravail(): ?float
    {
        return $this->effectifCodeDuTravail;
    }

    public function setEffectifCodeDuTravail(?float $effectifCodeDuTravail): self
    {
        $this->initialized['effectifCodeDuTravail'] = true;
        $this->effectifCodeDuTravail = $effectifCodeDuTravail;

        return $this;
    }

    public function getEffectifOeth(): ?float
    {
        return $this->effectifOeth;
    }

    public function setEffectifOeth(?float $effectifOeth): self
    {
        $this->initialized['effectifOeth'] = true;
        $this->effectifOeth = $effectifOeth;

        return $this;
    }

    public function getEffectifBoeth(): ?float
    {
        return $this->effectifBoeth;
    }

    public function setEffectifBoeth(?float $effectifBoeth): self
    {
        $this->initialized['effectifBoeth'] = true;
        $this->effectifBoeth = $effectifBoeth;

        return $this;
    }

    public function getEffectifEcap(): ?float
    {
        return $this->effectifEcap;
    }

    public function setEffectifEcap(?float $effectifEcap): self
    {
        $this->initialized['effectifEcap'] = true;
        $this->effectifEcap = $effectifEcap;

        return $this;
    }

    public function getEffectifCsa(): ?float
    {
        return $this->effectifCsa;
    }

    public function setEffectifCsa(?float $effectifCsa): self
    {
        $this->initialized['effectifCsa'] = true;
        $this->effectifCsa = $effectifCsa;

        return $this;
    }

    public function getEffectifCsaCfip(): ?float
    {
        return $this->effectifCsaCfip;
    }

    public function setEffectifCsaCfip(?float $effectifCsaCfip): self
    {
        $this->initialized['effectifCsaCfip'] = true;
        $this->effectifCsaCfip = $effectifCsaCfip;

        return $this;
    }
}
