<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureHandicapResponse
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
     * @var bool|null
     */
    protected $salarieHandicape;

    /**
     * @var list<Handicap>|null
     */
    protected $handicap;

    public function getSalarieHandicape(): ?bool
    {
        return $this->salarieHandicape;
    }

    public function setSalarieHandicape(?bool $salarieHandicape): self
    {
        $this->initialized['salarieHandicape'] = true;
        $this->salarieHandicape = $salarieHandicape;

        return $this;
    }

    /**
     * @return list<Handicap>|null
     */
    public function getHandicap(): ?array
    {
        return $this->handicap;
    }

    /**
     * @param list<Handicap>|null $handicap
     */
    public function setHandicap(?array $handicap): self
    {
        $this->initialized['handicap'] = true;
        $this->handicap = $handicap;

        return $this;
    }
}
