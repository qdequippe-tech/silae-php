<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieEmploiClassificationMetierRequest
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
    protected $codeClassificationMetier;

    public function getCodeClassificationMetier(): ?string
    {
        return $this->codeClassificationMetier;
    }

    public function setCodeClassificationMetier(?string $codeClassificationMetier): self
    {
        $this->initialized['codeClassificationMetier'] = true;
        $this->codeClassificationMetier = $codeClassificationMetier;

        return $this;
    }
}
