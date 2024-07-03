<?php

namespace QdequippeTech\Silae\Api\Model;

class EditionJournalDePaieResponse
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
    protected $document;

    public function getDocument(): ?string
    {
        return $this->document;
    }

    public function setDocument(?string $document): self
    {
        $this->initialized['document'] = true;
        $this->document = $document;

        return $this;
    }
}
