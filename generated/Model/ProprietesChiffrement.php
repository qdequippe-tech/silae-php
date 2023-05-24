<?php

namespace QdequippeTech\Silae\Api\Model;

class ProprietesChiffrement
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
    protected $cle;
    /**
     * @var string|null
     */
    protected $algorithmeSymetrique;

    public function getCle(): ?string
    {
        return $this->cle;
    }

    public function setCle(?string $cle): self
    {
        $this->initialized['cle'] = true;
        $this->cle = $cle;

        return $this;
    }

    public function getAlgorithmeSymetrique(): ?string
    {
        return $this->algorithmeSymetrique;
    }

    public function setAlgorithmeSymetrique(?string $algorithmeSymetrique): self
    {
        $this->initialized['algorithmeSymetrique'] = true;
        $this->algorithmeSymetrique = $algorithmeSymetrique;

        return $this;
    }
}
