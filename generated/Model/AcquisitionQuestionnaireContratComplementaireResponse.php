<?php

namespace QdequippeTech\Silae\Api\Model;

class AcquisitionQuestionnaireContratComplementaireResponse
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
     * @var QContratComplementaire[]|null
     */
    protected $qContratComplementaire;

    /**
     * @return QContratComplementaire[]|null
     */
    public function getQContratComplementaire(): ?array
    {
        return $this->qContratComplementaire;
    }

    /**
     * @param QContratComplementaire[]|null $qContratComplementaire
     */
    public function setQContratComplementaire(?array $qContratComplementaire): self
    {
        $this->initialized['qContratComplementaire'] = true;
        $this->qContratComplementaire = $qContratComplementaire;

        return $this;
    }
}
