<?php

namespace QdequippeTech\Silae\Api\Model;

class ModificationCCNSocieteRequest
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
    protected $pasDeCCSiege;
    /**
     * @var CCNSociete[]|null
     */
    protected $ccnSociete;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getPasDeCCSiege(): ?bool
    {
        return $this->pasDeCCSiege;
    }

    public function setPasDeCCSiege(?bool $pasDeCCSiege): self
    {
        $this->initialized['pasDeCCSiege'] = true;
        $this->pasDeCCSiege = $pasDeCCSiege;

        return $this;
    }

    /**
     * @return CCNSociete[]|null
     */
    public function getCcnSociete(): ?array
    {
        return $this->ccnSociete;
    }

    /**
     * @param CCNSociete[]|null $ccnSociete
     */
    public function setCcnSociete(?array $ccnSociete): self
    {
        $this->initialized['ccnSociete'] = true;
        $this->ccnSociete = $ccnSociete;

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
