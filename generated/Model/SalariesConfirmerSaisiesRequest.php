<?php

namespace QdequippeTech\Silae\Api\Model;

class SalariesConfirmerSaisiesRequest
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
     * @var SalariesConfirmerSaisies|null
     */
    protected $confirmationSaisies;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getConfirmationSaisies(): ?SalariesConfirmerSaisies
    {
        return $this->confirmationSaisies;
    }

    public function setConfirmationSaisies(?SalariesConfirmerSaisies $confirmationSaisies): self
    {
        $this->initialized['confirmationSaisies'] = true;
        $this->confirmationSaisies = $confirmationSaisies;

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
