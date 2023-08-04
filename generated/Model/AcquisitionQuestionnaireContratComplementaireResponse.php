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
     * @var QuestionnaireContratComplementaire[]|null
     */
    protected $qContratComplementaire;

    /**
     * @return QuestionnaireContratComplementaire[]|null
     */
    public function getQContratComplementaire(): ?array
    {
        return $this->qContratComplementaire;
    }

    /**
     * @param QuestionnaireContratComplementaire[]|null $qContratComplementaire
     */
    public function setQContratComplementaire(?array $qContratComplementaire): self
    {
        $this->initialized['qContratComplementaire'] = true;
        $this->qContratComplementaire = $qContratComplementaire;

        return $this;
    }
}
