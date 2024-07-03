<?php

namespace QdequippeTech\Silae\Api\Model;

class StatistiquesBureautique
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
    protected $numeroDossier;

    /**
     * @var int|null
     */
    protected $nbDocumentsCrees;

    public function getNumeroDossier(): ?string
    {
        return $this->numeroDossier;
    }

    public function setNumeroDossier(?string $numeroDossier): self
    {
        $this->initialized['numeroDossier'] = true;
        $this->numeroDossier = $numeroDossier;

        return $this;
    }

    public function getNbDocumentsCrees(): ?int
    {
        return $this->nbDocumentsCrees;
    }

    public function setNbDocumentsCrees(?int $nbDocumentsCrees): self
    {
        $this->initialized['nbDocumentsCrees'] = true;
        $this->nbDocumentsCrees = $nbDocumentsCrees;

        return $this;
    }
}
