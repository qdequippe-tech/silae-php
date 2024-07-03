<?php

namespace QdequippeTech\Silae\Api\Model;

class InformationsDossier
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
     * @var list<string>|null
     */
    protected $conventionsCollectives;

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
     * @return list<string>|null
     */
    public function getConventionsCollectives(): ?array
    {
        return $this->conventionsCollectives;
    }

    /**
     * @param list<string>|null $conventionsCollectives
     */
    public function setConventionsCollectives(?array $conventionsCollectives): self
    {
        $this->initialized['conventionsCollectives'] = true;
        $this->conventionsCollectives = $conventionsCollectives;

        return $this;
    }
}
