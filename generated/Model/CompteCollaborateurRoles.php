<?php

namespace QdequippeTech\Silae\Api\Model;

class CompteCollaborateurRoles
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
    protected $dataProtectionOfficier;

    /**
     * @var bool|null
     */
    protected $dirigeant;

    /**
     * @var bool|null
     */
    protected $referentPoleSocial;

    /**
     * @var bool|null
     */
    protected $responsableCommercial;

    /**
     * @var bool|null
     */
    protected $responsableFacturation;

    /**
     * @var bool|null
     */
    protected $responsableFormation;

    /**
     * @var bool|null
     */
    protected $responsableInformatique;

    public function getDataProtectionOfficier(): ?bool
    {
        return $this->dataProtectionOfficier;
    }

    public function setDataProtectionOfficier(?bool $dataProtectionOfficier): self
    {
        $this->initialized['dataProtectionOfficier'] = true;
        $this->dataProtectionOfficier = $dataProtectionOfficier;

        return $this;
    }

    public function getDirigeant(): ?bool
    {
        return $this->dirigeant;
    }

    public function setDirigeant(?bool $dirigeant): self
    {
        $this->initialized['dirigeant'] = true;
        $this->dirigeant = $dirigeant;

        return $this;
    }

    public function getReferentPoleSocial(): ?bool
    {
        return $this->referentPoleSocial;
    }

    public function setReferentPoleSocial(?bool $referentPoleSocial): self
    {
        $this->initialized['referentPoleSocial'] = true;
        $this->referentPoleSocial = $referentPoleSocial;

        return $this;
    }

    public function getResponsableCommercial(): ?bool
    {
        return $this->responsableCommercial;
    }

    public function setResponsableCommercial(?bool $responsableCommercial): self
    {
        $this->initialized['responsableCommercial'] = true;
        $this->responsableCommercial = $responsableCommercial;

        return $this;
    }

    public function getResponsableFacturation(): ?bool
    {
        return $this->responsableFacturation;
    }

    public function setResponsableFacturation(?bool $responsableFacturation): self
    {
        $this->initialized['responsableFacturation'] = true;
        $this->responsableFacturation = $responsableFacturation;

        return $this;
    }

    public function getResponsableFormation(): ?bool
    {
        return $this->responsableFormation;
    }

    public function setResponsableFormation(?bool $responsableFormation): self
    {
        $this->initialized['responsableFormation'] = true;
        $this->responsableFormation = $responsableFormation;

        return $this;
    }

    public function getResponsableInformatique(): ?bool
    {
        return $this->responsableInformatique;
    }

    public function setResponsableInformatique(?bool $responsableInformatique): self
    {
        $this->initialized['responsableInformatique'] = true;
        $this->responsableInformatique = $responsableInformatique;

        return $this;
    }
}
