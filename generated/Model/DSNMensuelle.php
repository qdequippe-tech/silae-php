<?php

namespace QdequippeTech\Silae\Api\Model;

class DSNMensuelle
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
    protected $etablissement;
    /**
     * @var string|null
     */
    protected $codeOrganisme;
    /**
     * @var string|null
     */
    protected $numeroAffiliation;
    /**
     * @var int|null
     */
    protected $typeDSN;

    public function getEtablissement(): ?string
    {
        return $this->etablissement;
    }

    public function setEtablissement(?string $etablissement): self
    {
        $this->initialized['etablissement'] = true;
        $this->etablissement = $etablissement;

        return $this;
    }

    public function getCodeOrganisme(): ?string
    {
        return $this->codeOrganisme;
    }

    public function setCodeOrganisme(?string $codeOrganisme): self
    {
        $this->initialized['codeOrganisme'] = true;
        $this->codeOrganisme = $codeOrganisme;

        return $this;
    }

    public function getNumeroAffiliation(): ?string
    {
        return $this->numeroAffiliation;
    }

    public function setNumeroAffiliation(?string $numeroAffiliation): self
    {
        $this->initialized['numeroAffiliation'] = true;
        $this->numeroAffiliation = $numeroAffiliation;

        return $this;
    }

    public function getTypeDSN(): ?int
    {
        return $this->typeDSN;
    }

    public function setTypeDSN(?int $typeDSN): self
    {
        $this->initialized['typeDSN'] = true;
        $this->typeDSN = $typeDSN;

        return $this;
    }
}
