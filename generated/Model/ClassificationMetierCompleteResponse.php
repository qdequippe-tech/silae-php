<?php

namespace QdequippeTech\Silae\Api\Model;

class ClassificationMetierCompleteResponse
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
     * @var list<EmploiClassificationMetier>|null
     */
    protected $emploisClassificationsMetiers;

    /**
     * @return list<EmploiClassificationMetier>|null
     */
    public function getEmploisClassificationsMetiers(): ?array
    {
        return $this->emploisClassificationsMetiers;
    }

    /**
     * @param list<EmploiClassificationMetier>|null $emploisClassificationsMetiers
     */
    public function setEmploisClassificationsMetiers(?array $emploisClassificationsMetiers): self
    {
        $this->initialized['emploisClassificationsMetiers'] = true;
        $this->emploisClassificationsMetiers = $emploisClassificationsMetiers;

        return $this;
    }
}
