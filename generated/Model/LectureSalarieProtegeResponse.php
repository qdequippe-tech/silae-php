<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureSalarieProtegeResponse
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
     * @var SalarieProtege[]|null
     */
    protected $salarieProtege;

    /**
     * @return SalarieProtege[]|null
     */
    public function getSalarieProtege(): ?array
    {
        return $this->salarieProtege;
    }

    /**
     * @param SalarieProtege[]|null $salarieProtege
     */
    public function setSalarieProtege(?array $salarieProtege): self
    {
        $this->initialized['salarieProtege'] = true;
        $this->salarieProtege = $salarieProtege;

        return $this;
    }
}
