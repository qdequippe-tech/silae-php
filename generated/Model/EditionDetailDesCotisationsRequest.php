<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class EditionDetailDesCotisationsRequest
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
    protected $detailSalaries;

    /**
     * @var string|null
     */
    protected $format;

    /**
     * @var string|null
     */
    protected $axeAnalytique;

    /**
     * @var bool|null
     */
    protected $grouperParOrganismes;

    /**
     * @var bool|null
     */
    protected $grouperEnIgnorantLesCodesDucs;

    /**
     * @var string|null
     */
    protected $grouperPar;

    /**
     * @var bool|null
     */
    protected $detailParNatureDeCotisation;

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

    public function getDetailSalaries(): ?bool
    {
        return $this->detailSalaries;
    }

    public function setDetailSalaries(?bool $detailSalaries): self
    {
        $this->initialized['detailSalaries'] = true;
        $this->detailSalaries = $detailSalaries;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->initialized['format'] = true;
        $this->format = $format;

        return $this;
    }

    public function getAxeAnalytique(): ?string
    {
        return $this->axeAnalytique;
    }

    public function setAxeAnalytique(?string $axeAnalytique): self
    {
        $this->initialized['axeAnalytique'] = true;
        $this->axeAnalytique = $axeAnalytique;

        return $this;
    }

    public function getGrouperParOrganismes(): ?bool
    {
        return $this->grouperParOrganismes;
    }

    public function setGrouperParOrganismes(?bool $grouperParOrganismes): self
    {
        $this->initialized['grouperParOrganismes'] = true;
        $this->grouperParOrganismes = $grouperParOrganismes;

        return $this;
    }

    public function getGrouperEnIgnorantLesCodesDucs(): ?bool
    {
        return $this->grouperEnIgnorantLesCodesDucs;
    }

    public function setGrouperEnIgnorantLesCodesDucs(?bool $grouperEnIgnorantLesCodesDucs): self
    {
        $this->initialized['grouperEnIgnorantLesCodesDucs'] = true;
        $this->grouperEnIgnorantLesCodesDucs = $grouperEnIgnorantLesCodesDucs;

        return $this;
    }

    public function getGrouperPar(): ?string
    {
        return $this->grouperPar;
    }

    public function setGrouperPar(?string $grouperPar): self
    {
        $this->initialized['grouperPar'] = true;
        $this->grouperPar = $grouperPar;

        return $this;
    }

    public function getDetailParNatureDeCotisation(): ?bool
    {
        return $this->detailParNatureDeCotisation;
    }

    public function setDetailParNatureDeCotisation(?bool $detailParNatureDeCotisation): self
    {
        $this->initialized['detailParNatureDeCotisation'] = true;
        $this->detailParNatureDeCotisation = $detailParNatureDeCotisation;

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
