<?php

namespace QdequippeTech\Silae\Api\Model;

class HistoriqueDesModificationsResponse
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
     * @var list<HistoriqueModification>|null
     */
    protected $modifications;

    /**
     * @var string|null
     */
    protected $warning;

    /**
     * @return list<HistoriqueModification>|null
     */
    public function getModifications(): ?array
    {
        return $this->modifications;
    }

    /**
     * @param list<HistoriqueModification>|null $modifications
     */
    public function setModifications(?array $modifications): self
    {
        $this->initialized['modifications'] = true;
        $this->modifications = $modifications;

        return $this;
    }

    public function getWarning(): ?string
    {
        return $this->warning;
    }

    public function setWarning(?string $warning): self
    {
        $this->initialized['warning'] = true;
        $this->warning = $warning;

        return $this;
    }
}
