<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureSaisieArretResponse
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
     * @var SaisieArret[]|null
     */
    protected $saisieArrets;

    /**
     * @return SaisieArret[]|null
     */
    public function getSaisieArrets(): ?array
    {
        return $this->saisieArrets;
    }

    /**
     * @param SaisieArret[]|null $saisieArrets
     */
    public function setSaisieArrets(?array $saisieArrets): self
    {
        $this->initialized['saisieArrets'] = true;
        $this->saisieArrets = $saisieArrets;

        return $this;
    }
}
