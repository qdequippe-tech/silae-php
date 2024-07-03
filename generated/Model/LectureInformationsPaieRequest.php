<?php

namespace QdequippeTech\Silae\Api\Model;

class LectureInformationsPaieRequest
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
     * @var RequeteLectureInfos|null
     */
    protected $requeteLectureInfos;

    public function getRequeteLectureInfos(): ?RequeteLectureInfos
    {
        return $this->requeteLectureInfos;
    }

    public function setRequeteLectureInfos(?RequeteLectureInfos $requeteLectureInfos): self
    {
        $this->initialized['requeteLectureInfos'] = true;
        $this->requeteLectureInfos = $requeteLectureInfos;

        return $this;
    }
}
