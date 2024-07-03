<?php

namespace QdequippeTech\Silae\Api\Model;

class DossierRecupererPeriodeEnCoursResponse
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
     * @var \DateTime|null
     */
    protected $periodeEnCours;

    public function getPeriodeEnCours(): ?\DateTime
    {
        return $this->periodeEnCours;
    }

    public function setPeriodeEnCours(?\DateTime $periodeEnCours): self
    {
        $this->initialized['periodeEnCours'] = true;
        $this->periodeEnCours = $periodeEnCours;

        return $this;
    }
}
