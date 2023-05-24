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
     * @var string[]|null
     */
    protected $affectationDossier;

    /**
     * @return string[]|null
     */
    public function getAffectationDossier(): ?array
    {
        return $this->affectationDossier;
    }

    /**
     * @param string[]|null $affectationDossier
     */
    public function setAffectationDossier(?array $affectationDossier): self
    {
        $this->initialized['affectationDossier'] = true;
        $this->affectationDossier = $affectationDossier;

        return $this;
    }
}
