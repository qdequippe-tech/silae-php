<?php

namespace QdequippeTech\Silae\Api\Model;

class QCCN
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
    protected $libelleQuestion;

    /**
     * @var string|null
     */
    protected $nomChamp;

    /**
     * @var string|null
     */
    protected $typeChamp;

    /**
     * @var int|null
     */
    protected $nombreEntier;

    /**
     * @var int|null
     */
    protected $nombreDecimale;

    /**
     * @var list<LibelleValeur>|null
     */
    protected $listeChoix;

    public function getLibelleQuestion(): ?string
    {
        return $this->libelleQuestion;
    }

    public function setLibelleQuestion(?string $libelleQuestion): self
    {
        $this->initialized['libelleQuestion'] = true;
        $this->libelleQuestion = $libelleQuestion;

        return $this;
    }

    public function getNomChamp(): ?string
    {
        return $this->nomChamp;
    }

    public function setNomChamp(?string $nomChamp): self
    {
        $this->initialized['nomChamp'] = true;
        $this->nomChamp = $nomChamp;

        return $this;
    }

    public function getTypeChamp(): ?string
    {
        return $this->typeChamp;
    }

    public function setTypeChamp(?string $typeChamp): self
    {
        $this->initialized['typeChamp'] = true;
        $this->typeChamp = $typeChamp;

        return $this;
    }

    public function getNombreEntier(): ?int
    {
        return $this->nombreEntier;
    }

    public function setNombreEntier(?int $nombreEntier): self
    {
        $this->initialized['nombreEntier'] = true;
        $this->nombreEntier = $nombreEntier;

        return $this;
    }

    public function getNombreDecimale(): ?int
    {
        return $this->nombreDecimale;
    }

    public function setNombreDecimale(?int $nombreDecimale): self
    {
        $this->initialized['nombreDecimale'] = true;
        $this->nombreDecimale = $nombreDecimale;

        return $this;
    }

    /**
     * @return list<LibelleValeur>|null
     */
    public function getListeChoix(): ?array
    {
        return $this->listeChoix;
    }

    /**
     * @param list<LibelleValeur>|null $listeChoix
     */
    public function setListeChoix(?array $listeChoix): self
    {
        $this->initialized['listeChoix'] = true;
        $this->listeChoix = $listeChoix;

        return $this;
    }
}
