<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeInformationsDossiersPaieResponse
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
     * @var list<InformationsDossier>|null
     */
    protected $informationsDossiersDePaie;

    /**
     * @return list<InformationsDossier>|null
     */
    public function getInformationsDossiersDePaie(): ?array
    {
        return $this->informationsDossiersDePaie;
    }

    /**
     * @param list<InformationsDossier>|null $informationsDossiersDePaie
     */
    public function setInformationsDossiersDePaie(?array $informationsDossiersDePaie): self
    {
        $this->initialized['informationsDossiersDePaie'] = true;
        $this->informationsDossiersDePaie = $informationsDossiersDePaie;

        return $this;
    }
}
