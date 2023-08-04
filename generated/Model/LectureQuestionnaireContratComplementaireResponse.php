<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureQuestionnaireContratComplementaireResponse
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
     * @var LectureChampLibelle[]|null
     */
    protected $reponseQCComp;

    /**
     * @return LectureChampLibelle[]|null
     */
    public function getReponseQCComp(): ?array
    {
        return $this->reponseQCComp;
    }

    /**
     * @param LectureChampLibelle[]|null $reponseQCComp
     */
    public function setReponseQCComp(?array $reponseQCComp): self
    {
        $this->initialized['reponseQCComp'] = true;
        $this->reponseQCComp = $reponseQCComp;

        return $this;
    }
}
