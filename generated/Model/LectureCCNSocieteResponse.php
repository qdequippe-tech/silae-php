<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureCCNSocieteResponse
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
     * @var list<CCNSociete>|null
     */
    protected $ccnSociete;

    /**
     * @var bool|null
     */
    protected $pasDeCCSiege;

    /**
     * @return list<CCNSociete>|null
     */
    public function getCcnSociete(): ?array
    {
        return $this->ccnSociete;
    }

    /**
     * @param list<CCNSociete>|null $ccnSociete
     */
    public function setCcnSociete(?array $ccnSociete): self
    {
        $this->initialized['ccnSociete'] = true;
        $this->ccnSociete = $ccnSociete;

        return $this;
    }

    public function getPasDeCCSiege(): ?bool
    {
        return $this->pasDeCCSiege;
    }

    public function setPasDeCCSiege(?bool $pasDeCCSiege): self
    {
        $this->initialized['pasDeCCSiege'] = true;
        $this->pasDeCCSiege = $pasDeCCSiege;

        return $this;
    }
}
