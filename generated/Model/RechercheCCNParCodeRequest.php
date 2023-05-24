<?php

namespace QdequippeTech\Silae\Api\Model;

class RechercheCCNParCodeRequest
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
    protected $codeCCN;

    public function getCodeCCN(): ?string
    {
        return $this->codeCCN;
    }

    public function setCodeCCN(?string $codeCCN): self
    {
        $this->initialized['codeCCN'] = true;
        $this->codeCCN = $codeCCN;

        return $this;
    }
}
