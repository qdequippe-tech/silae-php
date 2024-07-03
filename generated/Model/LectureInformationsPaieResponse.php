<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureInformationsPaieResponse
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
     * @var list<LectureInfosResult>|null
     */
    protected $reponsesInfosPaie;

    /**
     * @return list<LectureInfosResult>|null
     */
    public function getReponsesInfosPaie(): ?array
    {
        return $this->reponsesInfosPaie;
    }

    /**
     * @param list<LectureInfosResult>|null $reponsesInfosPaie
     */
    public function setReponsesInfosPaie(?array $reponsesInfosPaie): self
    {
        $this->initialized['reponsesInfosPaie'] = true;
        $this->reponsesInfosPaie = $reponsesInfosPaie;

        return $this;
    }
}
