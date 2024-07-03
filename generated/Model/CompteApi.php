<?php

namespace QdequippeTech\Silae\Api\Model;

class CompteApi
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
    protected $clientId;

    /**
     * @var string|null
     */
    protected $nomCompteAPI;

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(?string $clientId): self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;

        return $this;
    }

    public function getNomCompteAPI(): ?string
    {
        return $this->nomCompteAPI;
    }

    public function setNomCompteAPI(?string $nomCompteAPI): self
    {
        $this->initialized['nomCompteAPI'] = true;
        $this->nomCompteAPI = $nomCompteAPI;

        return $this;
    }
}
