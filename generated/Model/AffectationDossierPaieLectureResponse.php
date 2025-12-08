<?php

namespace QdequippeTech\Silae\Api\Model;

class AffectationDossierPaieLectureResponse
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
     * @var list<string>|null
     */
    protected $affectationDossier;

    /**
     * @var string|null
     */
    protected $codeAgence;

    /**
     * @return list<string>|null
     */
    public function getAffectationDossier(): ?array
    {
        return $this->affectationDossier;
    }

    /**
     * @param list<string>|null $affectationDossier
     */
    public function setAffectationDossier(?array $affectationDossier): self
    {
        $this->initialized['affectationDossier'] = true;
        $this->affectationDossier = $affectationDossier;

        return $this;
    }

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
}
