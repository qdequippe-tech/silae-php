<?php

namespace QdequippeTech\Silae\Api\Model;

class RecupererRecuDPAEResult
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
    protected $idEmploi;

    /**
     * @var string|null
     */
    protected $recuDPAE;

    public function getIdEmploi(): ?int
    {
        return $this->idEmploi;
    }

    public function setIdEmploi(?int $idEmploi): self
    {
        $this->initialized['idEmploi'] = true;
        $this->idEmploi = $idEmploi;

        return $this;
    }

    public function getRecuDPAE(): ?string
    {
        return $this->recuDPAE;
    }

    public function setRecuDPAE(?string $recuDPAE): self
    {
        $this->initialized['recuDPAE'] = true;
        $this->recuDPAE = $recuDPAE;

        return $this;
    }
}
