<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class EditionsGroupeesResponse
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
     * @var string|null
     */
    protected $codeEditionsGroupees;

    /**
     * @var array<string, EditionGroupeeDocument>|null
     */
    protected $documents;

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

    public function getCodeEditionsGroupees(): ?string
    {
        return $this->codeEditionsGroupees;
    }

    public function setCodeEditionsGroupees(?string $codeEditionsGroupees): self
    {
        $this->initialized['codeEditionsGroupees'] = true;
        $this->codeEditionsGroupees = $codeEditionsGroupees;

        return $this;
    }

    /**
     * @return array<string, EditionGroupeeDocument>|null
     */
    public function getDocuments(): ?iterable
    {
        return $this->documents;
    }

    /**
     * @param array<string, EditionGroupeeDocument>|null $documents
     */
    public function setDocuments(?iterable $documents): self
    {
        $this->initialized['documents'] = true;
        $this->documents = $documents;

        return $this;
    }
}
