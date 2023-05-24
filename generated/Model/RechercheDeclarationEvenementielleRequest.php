<?php

namespace QdequippeTech\Silae\Api\Model;

class RechercheDeclarationEvenementielleRequest
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
    protected $etatDeclaration;
    /**
     * @var \DateTime|null
     */
    protected $periode;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getEtatDeclaration(): ?int
    {
        return $this->etatDeclaration;
    }

    public function setEtatDeclaration(?int $etatDeclaration): self
    {
        $this->initialized['etatDeclaration'] = true;
        $this->etatDeclaration = $etatDeclaration;

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
