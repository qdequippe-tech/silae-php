<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class LectureInformationsSalarieResponse
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
     * @var LectureInformationsSalarie|null
     */
    protected $salarie;

    public function getSalarie(): ?LectureInformationsSalarie
    {
        return $this->salarie;
    }

    public function setSalarie(?LectureInformationsSalarie $salarie): self
    {
        $this->initialized['salarie'] = true;
        $this->salarie = $salarie;

        return $this;
    }
}
