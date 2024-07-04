<?php

namespace QdequippeTech\Silae\Api\Model;

class EcritureReponsesQuestionnaireFicheSalarieRequest
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
     * @var list<QReponseSimple>|null
     */
    protected $reponses;

    /**
     * @var string|null
     */
    protected $matriculeSalarie;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    /**
     * @return list<QReponseSimple>|null
     */
    public function getReponses(): ?array
    {
        return $this->reponses;
    }

    /**
     * @param list<QReponseSimple>|null $reponses
     */
    public function setReponses(?array $reponses): self
    {
        $this->initialized['reponses'] = true;
        $this->reponses = $reponses;

        return $this;
    }

    public function getMatriculeSalarie(): ?string
    {
        return $this->matriculeSalarie;
    }

    public function setMatriculeSalarie(?string $matriculeSalarie): self
    {
        $this->initialized['matriculeSalarie'] = true;
        $this->matriculeSalarie = $matriculeSalarie;

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
