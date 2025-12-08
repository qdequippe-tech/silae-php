<?php

namespace QdequippeTech\Silae\Api\Model;

class LotsVirement
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
    protected $numeroLotVirement;

    /**
     * @var \DateTime|null
     */
    protected $date;

    public function getNumeroLotVirement(): ?int
    {
        return $this->numeroLotVirement;
    }

    public function setNumeroLotVirement(?int $numeroLotVirement): self
    {
        $this->initialized['numeroLotVirement'] = true;
        $this->numeroLotVirement = $numeroLotVirement;

        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(?\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }
}
