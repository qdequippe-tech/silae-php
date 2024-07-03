<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureChampLibelle
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
    protected $nomChamp;

    /**
     * @var int|null
     */
    protected $valeurByte;

    /**
     * @var string|null
     */
    protected $libelle;

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

    public function getValeurByte(): ?int
    {
        return $this->valeurByte;
    }

    public function setValeurByte(?int $valeurByte): self
    {
        $this->initialized['valeurByte'] = true;
        $this->valeurByte = $valeurByte;

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
}
