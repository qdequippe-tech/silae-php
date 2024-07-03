<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeDossiersDemoSilaeResponse
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
     * @var list<DossierDemoSilae>|null
     */
    protected $modeles;

    /**
     * @return list<DossierDemoSilae>|null
     */
    public function getModeles(): ?array
    {
        return $this->modeles;
    }

    /**
     * @param list<DossierDemoSilae>|null $modeles
     */
    public function setModeles(?array $modeles): self
    {
        $this->initialized['modeles'] = true;
        $this->modeles = $modeles;

        return $this;
    }
}
