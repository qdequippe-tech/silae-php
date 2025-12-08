<?php

namespace QdequippeTech\Silae\Api\Model;

class Agency
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
     * ID_AGENCE de la table agence.
     *
     * @var int|null
     */
    protected $internalId;

    /**
     * Gets isPrincipal : actuellement l'agence avec l'id 0 est considérée comme l'agence principale...
     *
     * @var bool|null
     */
    protected $isPrincipal;

    /**
     * CodeClientFacturation de l'agence.
     *
     * @var string|null
     */
    protected $codeClientFacturation;

    /**
     * Nom de l'agence.
     *
     * @var string|null
     */
    protected $codeAgence;

    /**
     * ID_AGENCE de la table agence.
     */
    public function getInternalId(): ?int
    {
        return $this->internalId;
    }

    /**
     * ID_AGENCE de la table agence.
     */
    public function setInternalId(?int $internalId): self
    {
        $this->initialized['internalId'] = true;
        $this->internalId = $internalId;

        return $this;
    }

    /**
     * Gets isPrincipal : actuellement l'agence avec l'id 0 est considérée comme l'agence principale...
     */
    public function getIsPrincipal(): ?bool
    {
        return $this->isPrincipal;
    }

    /**
     * Gets isPrincipal : actuellement l'agence avec l'id 0 est considérée comme l'agence principale...
     */
    public function setIsPrincipal(?bool $isPrincipal): self
    {
        $this->initialized['isPrincipal'] = true;
        $this->isPrincipal = $isPrincipal;

        return $this;
    }

    /**
     * CodeClientFacturation de l'agence.
     */
    public function getCodeClientFacturation(): ?string
    {
        return $this->codeClientFacturation;
    }

    /**
     * CodeClientFacturation de l'agence.
     */
    public function setCodeClientFacturation(?string $codeClientFacturation): self
    {
        $this->initialized['codeClientFacturation'] = true;
        $this->codeClientFacturation = $codeClientFacturation;

        return $this;
    }

    /**
     * Nom de l'agence.
     */
    public function getCodeAgence(): ?string
    {
        return $this->codeAgence;
    }

    /**
     * Nom de l'agence.
     */
    public function setCodeAgence(?string $codeAgence): self
    {
        $this->initialized['codeAgence'] = true;
        $this->codeAgence = $codeAgence;

        return $this;
    }
}
