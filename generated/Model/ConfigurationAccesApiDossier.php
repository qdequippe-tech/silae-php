<?php

namespace QdequippeTech\Silae\Api\Model;

class ConfigurationAccesApiDossier
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
    protected $numeroDossier;
    /**
     * @var string|null
     */
    protected $raisonSociale;
    /**
     * @var string|null
     */
    protected $agence;
    /**
     * @var string|null
     */
    protected $groupe;

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

    public function getRaisonSociale(): ?string
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale(?string $raisonSociale): self
    {
        $this->initialized['raisonSociale'] = true;
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    public function getAgence(): ?string
    {
        return $this->agence;
    }

    public function setAgence(?string $agence): self
    {
        $this->initialized['agence'] = true;
        $this->agence = $agence;

        return $this;
    }

    public function getGroupe(): ?string
    {
        return $this->groupe;
    }

    public function setGroupe(?string $groupe): self
    {
        $this->initialized['groupe'] = true;
        $this->groupe = $groupe;

        return $this;
    }
}
