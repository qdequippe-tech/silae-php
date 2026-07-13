<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class AnalyseActiviteStatutAccesOptionsRequest
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
    protected $codeAgence;

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
