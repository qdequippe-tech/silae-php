<?php

namespace QdequippeTech\Silae\Api\Model;

class ApiErrors
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
     * @var ApiError[]|null
     */
    protected $errors;
    /**
     * @var bool|null
     */
    protected $recoverable;
    /**
     * @var string|null
     */
    protected $source;

    /**
     * @return ApiError[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param ApiError[]|null $errors
     */
    public function setErrors(?array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }

    public function getRecoverable(): ?bool
    {
        return $this->recoverable;
    }

    public function setRecoverable(?bool $recoverable): self
    {
        $this->initialized['recoverable'] = true;
        $this->recoverable = $recoverable;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;

        return $this;
    }
}
