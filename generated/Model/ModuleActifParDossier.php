<?php

namespace QdequippeTech\Silae\Api\Model;

class ModuleActifParDossier
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
    protected $codeModule;

    /**
     * @var string|null
     */
    protected $libelleModule;

    /**
     * @var \DateTime|null
     */
    protected $dateDerniereModification;

    public function getCodeModule(): ?string
    {
        return $this->codeModule;
    }

    public function setCodeModule(?string $codeModule): self
    {
        $this->initialized['codeModule'] = true;
        $this->codeModule = $codeModule;

        return $this;
    }

    public function getLibelleModule(): ?string
    {
        return $this->libelleModule;
    }

    public function setLibelleModule(?string $libelleModule): self
    {
        $this->initialized['libelleModule'] = true;
        $this->libelleModule = $libelleModule;

        return $this;
    }

    public function getDateDerniereModification(): ?\DateTime
    {
        return $this->dateDerniereModification;
    }

    public function setDateDerniereModification(?\DateTime $dateDerniereModification): self
    {
        $this->initialized['dateDerniereModification'] = true;
        $this->dateDerniereModification = $dateDerniereModification;

        return $this;
    }
}
