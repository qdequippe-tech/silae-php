<?php

namespace QdequippeTech\Silae\Api\Model;

class AcquisitionQuestionnaireContratComplementaireRequest
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
    protected $codeStatutCategoriel;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getCodeStatutCategoriel(): ?string
    {
        return $this->codeStatutCategoriel;
    }

    public function setCodeStatutCategoriel(?string $codeStatutCategoriel): self
    {
        $this->initialized['codeStatutCategoriel'] = true;
        $this->codeStatutCategoriel = $codeStatutCategoriel;

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
