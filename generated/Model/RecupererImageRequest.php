<?php

namespace QdequippeTech\Silae\Api\Model;

class RecupererImageRequest
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
    protected $natureImage;
    /**
     * @var int|null
     */
    protected $iDIMAGE;

    public function getNatureImage(): ?int
    {
        return $this->natureImage;
    }

    public function setNatureImage(?int $natureImage): self
    {
        $this->initialized['natureImage'] = true;
        $this->natureImage = $natureImage;

        return $this;
    }

    public function getIDIMAGE(): ?int
    {
        return $this->iDIMAGE;
    }

    public function setIDIMAGE(?int $iDIMAGE): self
    {
        $this->initialized['iDIMAGE'] = true;
        $this->iDIMAGE = $iDIMAGE;

        return $this;
    }
}
