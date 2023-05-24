<?php

namespace QdequippeTech\Silae\Api\Model;

class QContratComplementaire
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
    protected $code;
    /**
     * @var string|null
     */
    protected $libelle;
    /**
     * @var LibelleValeur[]|null
     */
    protected $listeChoix;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->initialized['libelle'] = true;
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return LibelleValeur[]|null
     */
    public function getListeChoix(): ?array
    {
        return $this->listeChoix;
    }

    /**
     * @param LibelleValeur[]|null $listeChoix
     */
    public function setListeChoix(?array $listeChoix): self
    {
        $this->initialized['listeChoix'] = true;
        $this->listeChoix = $listeChoix;

        return $this;
    }
}
