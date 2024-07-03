<?php

namespace QdequippeTech\Silae\Api\Model;

class SiteGenereMotDePasseAlternatifResponse
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
    protected $motDePasseAlternatif;

    public function getMotDePasseAlternatif(): ?string
    {
        return $this->motDePasseAlternatif;
    }

    public function setMotDePasseAlternatif(?string $motDePasseAlternatif): self
    {
        $this->initialized['motDePasseAlternatif'] = true;
        $this->motDePasseAlternatif = $motDePasseAlternatif;

        return $this;
    }
}
