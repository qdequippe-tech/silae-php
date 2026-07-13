<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class HistoriqueDesConnexionsResponse
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
     * @var list<HistoriqueConnexion>|null
     */
    protected $connexions;

    /**
     * @var string|null
     */
    protected $warning;

    /**
     * @return list<HistoriqueConnexion>|null
     */
    public function getConnexions(): ?array
    {
        return $this->connexions;
    }

    /**
     * @param list<HistoriqueConnexion>|null $connexions
     */
    public function setConnexions(?array $connexions): self
    {
        $this->initialized['connexions'] = true;
        $this->connexions = $connexions;

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
