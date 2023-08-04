<?php

namespace QdequippeTech\Silae\Api\Model;

class ImportDossierDemoRequest
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
    protected $tokenDossierDemo;
    /**
     * @var string|null
     */
    protected $nouveauNumeroDossier;
    /**
     * @var bool|null
     */
    protected $changerAffectations;
    /**
     * @var AffectationsDossier|null
     */
    protected $affectations;

    public function getTokenDossierDemo(): ?string
    {
        return $this->tokenDossierDemo;
    }

    public function setTokenDossierDemo(?string $tokenDossierDemo): self
    {
        $this->initialized['tokenDossierDemo'] = true;
        $this->tokenDossierDemo = $tokenDossierDemo;

        return $this;
    }

    public function getNouveauNumeroDossier(): ?string
    {
        return $this->nouveauNumeroDossier;
    }

    public function setNouveauNumeroDossier(?string $nouveauNumeroDossier): self
    {
        $this->initialized['nouveauNumeroDossier'] = true;
        $this->nouveauNumeroDossier = $nouveauNumeroDossier;

        return $this;
    }

    public function getChangerAffectations(): ?bool
    {
        return $this->changerAffectations;
    }

    public function setChangerAffectations(?bool $changerAffectations): self
    {
        $this->initialized['changerAffectations'] = true;
        $this->changerAffectations = $changerAffectations;

        return $this;
    }

    public function getAffectations(): ?AffectationsDossier
    {
        return $this->affectations;
    }

    public function setAffectations(?AffectationsDossier $affectations): self
    {
        $this->initialized['affectations'] = true;
        $this->affectations = $affectations;

        return $this;
    }
}
