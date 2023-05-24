<?php

namespace QdequippeTech\Silae\Api\Model;

class CCNSociete
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
    protected $codeCCN;
    /**
     * @var string|null
     */
    protected $idcc;
    /**
     * @var string|null
     */
    protected $codeJO;
    /**
     * @var bool|null
     */
    protected $forceApplicationExtension;
    /**
     * @var string|null
     */
    protected $syndicat;
    /**
     * @var bool|null
     */
    protected $ccSiege;

    public function getCodeCCN(): ?string
    {
        return $this->codeCCN;
    }

    public function setCodeCCN(?string $codeCCN): self
    {
        $this->initialized['codeCCN'] = true;
        $this->codeCCN = $codeCCN;

        return $this;
    }

    public function getIdcc(): ?string
    {
        return $this->idcc;
    }

    public function setIdcc(?string $idcc): self
    {
        $this->initialized['idcc'] = true;
        $this->idcc = $idcc;

        return $this;
    }

    public function getCodeJO(): ?string
    {
        return $this->codeJO;
    }

    public function setCodeJO(?string $codeJO): self
    {
        $this->initialized['codeJO'] = true;
        $this->codeJO = $codeJO;

        return $this;
    }

    public function getForceApplicationExtension(): ?bool
    {
        return $this->forceApplicationExtension;
    }

    public function setForceApplicationExtension(?bool $forceApplicationExtension): self
    {
        $this->initialized['forceApplicationExtension'] = true;
        $this->forceApplicationExtension = $forceApplicationExtension;

        return $this;
    }

    public function getSyndicat(): ?string
    {
        return $this->syndicat;
    }

    public function setSyndicat(?string $syndicat): self
    {
        $this->initialized['syndicat'] = true;
        $this->syndicat = $syndicat;

        return $this;
    }

    public function getCcSiege(): ?bool
    {
        return $this->ccSiege;
    }

    public function setCcSiege(?bool $ccSiege): self
    {
        $this->initialized['ccSiege'] = true;
        $this->ccSiege = $ccSiege;

        return $this;
    }
}
