<?php

namespace QdequippeTech\Silae\Api\Model;

class ExtraListeManifestationsRequest
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
    protected $categorie;
    /**
     * @var \DateTime|null
     */
    protected $dateDebutMin;
    /**
     * @var string|null
     */
    protected $numeroDossier;

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): self
    {
        $this->initialized['categorie'] = true;
        $this->categorie = $categorie;

        return $this;
    }

    public function getDateDebutMin(): ?\DateTime
    {
        return $this->dateDebutMin;
    }

    public function setDateDebutMin(?\DateTime $dateDebutMin): self
    {
        $this->initialized['dateDebutMin'] = true;
        $this->dateDebutMin = $dateDebutMin;

        return $this;
    }

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
}
