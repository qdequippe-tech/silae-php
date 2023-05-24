<?php

namespace QdequippeTech\Silae\Api\Model;

class EtatDeclarationsRequest
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
    protected $typeDeclaration;
    /**
     * @var \DateTime|null
     */
    protected $periode;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getTypeDeclaration(): ?string
    {
        return $this->typeDeclaration;
    }

    public function setTypeDeclaration(?string $typeDeclaration): self
    {
        $this->initialized['typeDeclaration'] = true;
        $this->typeDeclaration = $typeDeclaration;

        return $this;
    }

    public function getPeriode(): ?\DateTime
    {
        return $this->periode;
    }

    public function setPeriode(?\DateTime $periode): self
    {
        $this->initialized['periode'] = true;
        $this->periode = $periode;

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
