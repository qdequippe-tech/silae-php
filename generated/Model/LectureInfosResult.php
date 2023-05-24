<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureInfosResult
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
    protected $champ;
    /**
     * @var mixed|null
     */
    protected $valeur;

    public function getChamp(): ?string
    {
        return $this->champ;
    }

    public function setChamp(?string $champ): self
    {
        $this->initialized['champ'] = true;
        $this->champ = $champ;

        return $this;
    }

    public function getValeur()
    {
        return $this->valeur;
    }

    public function setValeur($valeur): self
    {
        $this->initialized['valeur'] = true;
        $this->valeur = $valeur;

        return $this;
    }
}
