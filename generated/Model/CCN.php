<?php

namespace QdequippeTech\Silae\Api\Model;

class CCN
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
    protected $libelleCCN;

    /**
     * @var string|null
     */
    protected $codeIDCC;

    /**
     * @var string|null
     */
    protected $libelleIDCC;

    /**
     * @var string|null
     */
    protected $codeJO;

    /**
     * @var string|null
     */
    protected $libelleJO;

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

    public function getLibelleCCN(): ?string
    {
        return $this->libelleCCN;
    }

    public function setLibelleCCN(?string $libelleCCN): self
    {
        $this->initialized['libelleCCN'] = true;
        $this->libelleCCN = $libelleCCN;

        return $this;
    }

    public function getCodeIDCC(): ?string
    {
        return $this->codeIDCC;
    }

    public function setCodeIDCC(?string $codeIDCC): self
    {
        $this->initialized['codeIDCC'] = true;
        $this->codeIDCC = $codeIDCC;

        return $this;
    }

    public function getLibelleIDCC(): ?string
    {
        return $this->libelleIDCC;
    }

    public function setLibelleIDCC(?string $libelleIDCC): self
    {
        $this->initialized['libelleIDCC'] = true;
        $this->libelleIDCC = $libelleIDCC;

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

    public function getLibelleJO(): ?string
    {
        return $this->libelleJO;
    }

    public function setLibelleJO(?string $libelleJO): self
    {
        $this->initialized['libelleJO'] = true;
        $this->libelleJO = $libelleJO;

        return $this;
    }
}
