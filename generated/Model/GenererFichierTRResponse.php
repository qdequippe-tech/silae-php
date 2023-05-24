<?php

namespace QdequippeTech\Silae\Api\Model;

class GenererFichierTRResponse
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
    protected $nomFichier;
    /**
     * @var string|null
     */
    protected $document;

    public function getNomFichier(): ?string
    {
        return $this->nomFichier;
    }

    public function setNomFichier(?string $nomFichier): self
    {
        $this->initialized['nomFichier'] = true;
        $this->nomFichier = $nomFichier;

        return $this;
    }

    public function getDocument(): ?string
    {
        return $this->document;
    }

    public function setDocument(?string $document): self
    {
        $this->initialized['document'] = true;
        $this->document = $document;

        return $this;
    }
}
