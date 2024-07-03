<?php

namespace QdequippeTech\Silae\Api\Model;

class Agency
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
     * @var int|null
     */
    protected $internalId;

    /**
     * @var bool|null
     */
    protected $isPrincipal;

    /**
     * @var string|null
     */
    protected $codeClientFacturation;

    /**
     * @var string|null
     */
    protected $codeAgence;

    public function getInternalId(): ?int
    {
        return $this->internalId;
    }

    public function setInternalId(?int $internalId): self
    {
        $this->initialized['internalId'] = true;
        $this->internalId = $internalId;

        return $this;
    }

    public function getIsPrincipal(): ?bool
    {
        return $this->isPrincipal;
    }

    public function setIsPrincipal(?bool $isPrincipal): self
    {
        $this->initialized['isPrincipal'] = true;
        $this->isPrincipal = $isPrincipal;

        return $this;
    }

    public function getCodeClientFacturation(): ?string
    {
        return $this->codeClientFacturation;
    }

    public function setCodeClientFacturation(?string $codeClientFacturation): self
    {
        $this->initialized['codeClientFacturation'] = true;
        $this->codeClientFacturation = $codeClientFacturation;

        return $this;
    }

    public function getCodeAgence(): ?string
    {
        return $this->codeAgence;
    }

    public function setCodeAgence(?string $codeAgence): self
    {
        $this->initialized['codeAgence'] = true;
        $this->codeAgence = $codeAgence;

        return $this;
    }
}
