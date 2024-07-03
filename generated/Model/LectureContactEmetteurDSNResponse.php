<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureContactEmetteurDSNResponse
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
     * @var LectureContactEmetteurDSN|null
     */
    protected $emetteurDSN;

    public function getEmetteurDSN(): ?LectureContactEmetteurDSN
    {
        return $this->emetteurDSN;
    }

    public function setEmetteurDSN(?LectureContactEmetteurDSN $emetteurDSN): self
    {
        $this->initialized['emetteurDSN'] = true;
        $this->emetteurDSN = $emetteurDSN;

        return $this;
    }
}
