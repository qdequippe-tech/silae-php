<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeInformationsDossiersPaieRequest
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
}
