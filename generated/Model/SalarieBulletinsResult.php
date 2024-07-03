<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBulletinsResult
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
    protected $matriculeSalarie;

    /**
     * @var \DateTime|null
     */
    protected $periode;

    /**
     * @var list<int>|null
     */
    protected $arrIDPAIBULLETIN;

    /**
     * @var list<bool>|null
     */
    protected $arrPresenceAttestationPoleEmploi;

    public function getMatriculeSalarie(): ?string
    {
        return $this->matriculeSalarie;
    }

    public function setMatriculeSalarie(?string $matriculeSalarie): self
    {
        $this->initialized['matriculeSalarie'] = true;
        $this->matriculeSalarie = $matriculeSalarie;

        return $this;
    }

    public function getPeriode(): ?\DateTime
    {
        return $this->periode;
    }

    public function setPeriode(?\DateTime $periode): self
    {
        $this->initialized['periode'] = true;
        $this->periode = $periode;

        return $this;
    }

    /**
     * @return list<int>|null
     */
    public function getArrIDPAIBULLETIN(): ?array
    {
        return $this->arrIDPAIBULLETIN;
    }

    /**
     * @param list<int>|null $arrIDPAIBULLETIN
     */
    public function setArrIDPAIBULLETIN(?array $arrIDPAIBULLETIN): self
    {
        $this->initialized['arrIDPAIBULLETIN'] = true;
        $this->arrIDPAIBULLETIN = $arrIDPAIBULLETIN;

        return $this;
    }

    /**
     * @return list<bool>|null
     */
    public function getArrPresenceAttestationPoleEmploi(): ?array
    {
        return $this->arrPresenceAttestationPoleEmploi;
    }

    /**
     * @param list<bool>|null $arrPresenceAttestationPoleEmploi
     */
    public function setArrPresenceAttestationPoleEmploi(?array $arrPresenceAttestationPoleEmploi): self
    {
        $this->initialized['arrPresenceAttestationPoleEmploi'] = true;
        $this->arrPresenceAttestationPoleEmploi = $arrPresenceAttestationPoleEmploi;

        return $this;
    }
}
