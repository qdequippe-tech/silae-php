<?php

namespace QdequippeTech\Silae\Api\Model;

class CreationQuestionnaireContratComplementaireRequest
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
     * @var QuestionnaireContratComplementaire|null
     */
    protected $questionnaireContratComplementaire;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getQuestionnaireContratComplementaire(): ?QuestionnaireContratComplementaire
    {
        return $this->questionnaireContratComplementaire;
    }

    public function setQuestionnaireContratComplementaire(?QuestionnaireContratComplementaire $questionnaireContratComplementaire): self
    {
        $this->initialized['questionnaireContratComplementaire'] = true;
        $this->questionnaireContratComplementaire = $questionnaireContratComplementaire;

        return $this;
    }

    public function getNumeroDossier(): ?string
    {
        return $this->numeroDossier;
    }

    public function setNumeroDossier(?string $numeroDossier): self
    {
        $this->initialized['numeroDossier'] = true;
        $this->numeroDossier = $numeroDossier;

        return $this;
    }
}
