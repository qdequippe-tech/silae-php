<?php

namespace QdequippeTech\Silae\Api\Model;

class ClassificationMetierCompleteRequest
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
    protected $codeConventionCollective;

    public function getCodeConventionCollective(): ?string
    {
        return $this->codeConventionCollective;
    }

    public function setCodeConventionCollective(?string $codeConventionCollective): self
    {
        $this->initialized['codeConventionCollective'] = true;
        $this->codeConventionCollective = $codeConventionCollective;

        return $this;
    }
}
