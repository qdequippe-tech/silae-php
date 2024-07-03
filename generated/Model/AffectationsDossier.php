<?php

namespace QdequippeTech\Silae\Api\Model;

class AffectationsDossier
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
    protected $codeAgence;

    /**
     * @var string|null
     */
    protected $rG1;

    /**
     * @var string|null
     */
    protected $rG2;

    /**
     * @var string|null
     */
    protected $rG3;

    /**
     * @var string|null
     */
    protected $rG4;

    /**
     * @var string|null
     */
    protected $rG5;

    /**
     * @var string|null
     */
    protected $rG6;

    /**
     * @var string|null
     */
    protected $rG7;

    /**
     * @var string|null
     */
    protected $rG8;

    /**
     * @var string|null
     */
    protected $rG9;

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

    public function getRG1(): ?string
    {
        return $this->rG1;
    }

    public function setRG1(?string $rG1): self
    {
        $this->initialized['rG1'] = true;
        $this->rG1 = $rG1;

        return $this;
    }

    public function getRG2(): ?string
    {
        return $this->rG2;
    }

    public function setRG2(?string $rG2): self
    {
        $this->initialized['rG2'] = true;
        $this->rG2 = $rG2;

        return $this;
    }

    public function getRG3(): ?string
    {
        return $this->rG3;
    }

    public function setRG3(?string $rG3): self
    {
        $this->initialized['rG3'] = true;
        $this->rG3 = $rG3;

        return $this;
    }

    public function getRG4(): ?string
    {
        return $this->rG4;
    }

    public function setRG4(?string $rG4): self
    {
        $this->initialized['rG4'] = true;
        $this->rG4 = $rG4;

        return $this;
    }

    public function getRG5(): ?string
    {
        return $this->rG5;
    }

    public function setRG5(?string $rG5): self
    {
        $this->initialized['rG5'] = true;
        $this->rG5 = $rG5;

        return $this;
    }

    public function getRG6(): ?string
    {
        return $this->rG6;
    }

    public function setRG6(?string $rG6): self
    {
        $this->initialized['rG6'] = true;
        $this->rG6 = $rG6;

        return $this;
    }

    public function getRG7(): ?string
    {
        return $this->rG7;
    }

    public function setRG7(?string $rG7): self
    {
        $this->initialized['rG7'] = true;
        $this->rG7 = $rG7;

        return $this;
    }

    public function getRG8(): ?string
    {
        return $this->rG8;
    }

    public function setRG8(?string $rG8): self
    {
        $this->initialized['rG8'] = true;
        $this->rG8 = $rG8;

        return $this;
    }

    public function getRG9(): ?string
    {
        return $this->rG9;
    }

    public function setRG9(?string $rG9): self
    {
        $this->initialized['rG9'] = true;
        $this->rG9 = $rG9;

        return $this;
    }
}
