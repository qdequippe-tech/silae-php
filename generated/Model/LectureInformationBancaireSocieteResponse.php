<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureInformationBancaireSocieteResponse
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
    protected $sepaModeComptabilisation;
    /**
     * @var InformationBancaireSociete[]|null
     */
    protected $informationBancaireSociete;

    public function getSepaModeComptabilisation(): ?int
    {
        return $this->sepaModeComptabilisation;
    }

    public function setSepaModeComptabilisation(?int $sepaModeComptabilisation): self
    {
        $this->initialized['sepaModeComptabilisation'] = true;
        $this->sepaModeComptabilisation = $sepaModeComptabilisation;

        return $this;
    }

    /**
     * @return InformationBancaireSociete[]|null
     */
    public function getInformationBancaireSociete(): ?array
    {
        return $this->informationBancaireSociete;
    }

    /**
     * @param InformationBancaireSociete[]|null $informationBancaireSociete
     */
    public function setInformationBancaireSociete(?array $informationBancaireSociete): self
    {
        $this->initialized['informationBancaireSociete'] = true;
        $this->informationBancaireSociete = $informationBancaireSociete;

        return $this;
    }
}
