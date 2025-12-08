<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeOrganismesRequest
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
    protected $codeOrganisme;

    /**
     * @var string|null
     */
    protected $codeNature;

    /**
     * @var string|null
     */
    protected $nomInterneEtablissement;

    /**
     * @var string|null
     */
    protected $numeroDossier;

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

    public function getCodeNature(): ?string
    {
        return $this->codeNature;
    }

    public function setCodeNature(?string $codeNature): self
    {
        $this->initialized['codeNature'] = true;
        $this->codeNature = $codeNature;

        return $this;
    }

    public function getNomInterneEtablissement(): ?string
    {
        return $this->nomInterneEtablissement;
    }

    public function setNomInterneEtablissement(?string $nomInterneEtablissement): self
    {
        $this->initialized['nomInterneEtablissement'] = true;
        $this->nomInterneEtablissement = $nomInterneEtablissement;

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
