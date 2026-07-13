<?php

namespace QdequippeTech\Silae\Api\Model;

class GenererDSNEvenementielleFCTURequest
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
    protected $periode;

    /**
     * @var bool|null
     */
    protected $envoiEdi;

    /**
     * @var string|null
     */
    protected $matricule;

    /**
     * @var string|null
     */
    protected $numeroDossier;

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

    public function getEnvoiEdi(): ?bool
    {
        return $this->envoiEdi;
    }

    public function setEnvoiEdi(?bool $envoiEdi): self
    {
        $this->initialized['envoiEdi'] = true;
        $this->envoiEdi = $envoiEdi;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->initialized['matricule'] = true;
        $this->matricule = $matricule;

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
