<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieElementVariable
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
    protected $periodeElementVariable;

    /**
     * @var string|null
     */
    protected $codeElementVariable;

    /**
     * @var float|null
     */
    protected $montantElementVariable;

    /**
     * @var string|null
     */
    protected $valeurChaineElementVariable;

    public function getPeriodeElementVariable(): ?\DateTime
    {
        return $this->periodeElementVariable;
    }

    public function setPeriodeElementVariable(?\DateTime $periodeElementVariable): self
    {
        $this->initialized['periodeElementVariable'] = true;
        $this->periodeElementVariable = $periodeElementVariable;

        return $this;
    }

    public function getCodeElementVariable(): ?string
    {
        return $this->codeElementVariable;
    }

    public function setCodeElementVariable(?string $codeElementVariable): self
    {
        $this->initialized['codeElementVariable'] = true;
        $this->codeElementVariable = $codeElementVariable;

        return $this;
    }

    public function getMontantElementVariable(): ?float
    {
        return $this->montantElementVariable;
    }

    public function setMontantElementVariable(?float $montantElementVariable): self
    {
        $this->initialized['montantElementVariable'] = true;
        $this->montantElementVariable = $montantElementVariable;

        return $this;
    }

    public function getValeurChaineElementVariable(): ?string
    {
        return $this->valeurChaineElementVariable;
    }

    public function setValeurChaineElementVariable(?string $valeurChaineElementVariable): self
    {
        $this->initialized['valeurChaineElementVariable'] = true;
        $this->valeurChaineElementVariable = $valeurChaineElementVariable;

        return $this;
    }
}
