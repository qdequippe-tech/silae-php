<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBulletinsIndicesResult
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
    protected $periode;

    /**
     * @var list<SalarieBulletinIndiceResult>|null
     */
    protected $indices;

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
     * @return list<SalarieBulletinIndiceResult>|null
     */
    public function getIndices(): ?array
    {
        return $this->indices;
    }

    /**
     * @param list<SalarieBulletinIndiceResult>|null $indices
     */
    public function setIndices(?array $indices): self
    {
        $this->initialized['indices'] = true;
        $this->indices = $indices;

        return $this;
    }
}
