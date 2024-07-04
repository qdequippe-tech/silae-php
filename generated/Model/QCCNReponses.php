<?php

namespace QdequippeTech\Silae\Api\Model;

class QCCNReponses
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

    /**
     * @var list<QReponse>|null
     */
    protected $reponses;

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

    /**
     * @return list<QReponse>|null
     */
    public function getReponses(): ?array
    {
        return $this->reponses;
    }

    /**
     * @param list<QReponse>|null $reponses
     */
    public function setReponses(?array $reponses): self
    {
        $this->initialized['reponses'] = true;
        $this->reponses = $reponses;

        return $this;
    }
}
