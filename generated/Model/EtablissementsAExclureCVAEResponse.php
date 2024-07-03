<?php

namespace QdequippeTech\Silae\Api\Model;

class EtablissementsAExclureCVAEResponse
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
    protected $etablissementsTraites;

    /**
     * @return list<string>|null
     */
    public function getEtablissementsTraites(): ?array
    {
        return $this->etablissementsTraites;
    }

    /**
     * @param list<string>|null $etablissementsTraites
     */
    public function setEtablissementsTraites(?array $etablissementsTraites): self
    {
        $this->initialized['etablissementsTraites'] = true;
        $this->etablissementsTraites = $etablissementsTraites;

        return $this;
    }
}
