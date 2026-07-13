<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class RequeteAnalyseProductionRevenus
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
    protected $millesime;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    /**
     * @var string|null
     */
    protected $codeAgence;

    /**
     * @var int|null
     */
    protected $typeAnalyse;

    public function getMillesime(): ?int
    {
        return $this->millesime;
    }

    public function setMillesime(?int $millesime): self
    {
        $this->initialized['millesime'] = true;
        $this->millesime = $millesime;

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

    public function getTypeAnalyse(): ?int
    {
        return $this->typeAnalyse;
    }

    public function setTypeAnalyse(?int $typeAnalyse): self
    {
        $this->initialized['typeAnalyse'] = true;
        $this->typeAnalyse = $typeAnalyse;

        return $this;
    }
}
