<?php

namespace QdequippeTech\Silae\Api\Model;

class ImportXmlParametrageOrganismeDSNRequest
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
    protected $xmlEnByteArray;

    public function getXmlEnByteArray(): ?string
    {
        return $this->xmlEnByteArray;
    }

    public function setXmlEnByteArray(?string $xmlEnByteArray): self
    {
        $this->initialized['xmlEnByteArray'] = true;
        $this->xmlEnByteArray = $xmlEnByteArray;

        return $this;
    }
}
