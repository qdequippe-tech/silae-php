<?php

namespace QdequippeTech\Silae\Api\Model;

class ModulesMySilaeParDossier
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
    protected $numeroDossier;

    /**
     * @var list<ModuleMySilaeParDossier>|null
     */
    protected $modules;

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

    /**
     * @return list<ModuleMySilaeParDossier>|null
     */
    public function getModules(): ?array
    {
        return $this->modules;
    }

    /**
     * @param list<ModuleMySilaeParDossier>|null $modules
     */
    public function setModules(?array $modules): self
    {
        $this->initialized['modules'] = true;
        $this->modules = $modules;

        return $this;
    }
}
