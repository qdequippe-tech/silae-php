<?php

namespace QdequippeTech\Silae\Api\Model;

class Domain
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
     * Guid extrait de DOM_Nombase utilisé par le portail comme Id.
     *
     * @var string|null
     */
    protected $id;

    /**
     * ID_DOMAINE de la table domaine.
     *
     * @var int|null
     */
    protected $internalId;

    /**
     * Groupe d'appartenance du domaine.
     *
     * @var string|null
     */
    protected $groupName;

    /**
     * Nom du domaine.
     *
     * @var string|null
     */
    protected $name;

    /**
     * Date de début de validité, valide si non renseignée.
     *
     * @var \DateTime|null
     */
    protected $validityStartDate;

    /**
     * Date de fin de validité, valide si non renseignée.
     *
     * @var \DateTime|null
     */
    protected $validityEndDate;

    /**
     * Url d'appel de l'api rest composée à partir du sous-domaine.
     *
     * @var string|null
     */
    protected $silaePaieApiUrl;

    /**
     * Guid extrait de DOM_Nombase utilisé par le portail comme Id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Guid extrait de DOM_Nombase utilisé par le portail comme Id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * ID_DOMAINE de la table domaine.
     */
    public function getInternalId(): ?int
    {
        return $this->internalId;
    }

    /**
     * ID_DOMAINE de la table domaine.
     */
    public function setInternalId(?int $internalId): self
    {
        $this->initialized['internalId'] = true;
        $this->internalId = $internalId;

        return $this;
    }

    /**
     * Groupe d'appartenance du domaine.
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    /**
     * Groupe d'appartenance du domaine.
     */
    public function setGroupName(?string $groupName): self
    {
        $this->initialized['groupName'] = true;
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Nom du domaine.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Nom du domaine.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Date de début de validité, valide si non renseignée.
     */
    public function getValidityStartDate(): ?\DateTime
    {
        return $this->validityStartDate;
    }

    /**
     * Date de début de validité, valide si non renseignée.
     */
    public function setValidityStartDate(?\DateTime $validityStartDate): self
    {
        $this->initialized['validityStartDate'] = true;
        $this->validityStartDate = $validityStartDate;

        return $this;
    }

    /**
     * Date de fin de validité, valide si non renseignée.
     */
    public function getValidityEndDate(): ?\DateTime
    {
        return $this->validityEndDate;
    }

    /**
     * Date de fin de validité, valide si non renseignée.
     */
    public function setValidityEndDate(?\DateTime $validityEndDate): self
    {
        $this->initialized['validityEndDate'] = true;
        $this->validityEndDate = $validityEndDate;

        return $this;
    }

    /**
     * Url d'appel de l'api rest composée à partir du sous-domaine.
     */
    public function getSilaePaieApiUrl(): ?string
    {
        return $this->silaePaieApiUrl;
    }

    /**
     * Url d'appel de l'api rest composée à partir du sous-domaine.
     */
    public function setSilaePaieApiUrl(?string $silaePaieApiUrl): self
    {
        $this->initialized['silaePaieApiUrl'] = true;
        $this->silaePaieApiUrl = $silaePaieApiUrl;

        return $this;
    }
}
