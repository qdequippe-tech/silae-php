<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureGrilleHoraireFicheSalarieResponse
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
     * @var LectureHoraireSalarie|null
     */
    protected $horaires;

    public function getHoraires(): ?LectureHoraireSalarie
    {
        return $this->horaires;
    }

    public function setHoraires(?LectureHoraireSalarie $horaires): self
    {
        $this->initialized['horaires'] = true;
        $this->horaires = $horaires;

        return $this;
    }
}
