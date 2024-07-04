<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureReponsesQuestionnaireFicheSalarieResponse
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
     * @var list<QReponse>|null
     */
    protected $reponses;

    /**
     * @return list<QReponse>|null
     */
    public function getReponses(): ?array
    {
        return $this->reponses;
    }

    /**
     * @param list<QReponse>|null $reponses
     */
    public function setReponses(?array $reponses): self
    {
        $this->initialized['reponses'] = true;
        $this->reponses = $reponses;

        return $this;
    }
}
