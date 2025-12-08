<?php

namespace QdequippeTech\Silae\Api\Model;

class Entity
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
     * Id de l'entité.
     *
     * @var int|null
     */
    protected $id;

    /**
     * Id de l'entité.
     *
     * @var string|null
     */
    protected $name;

    /**
     * Date de fin de validité, valide si non renseignée.
     *
     * @var \DateTime|null
     */
    protected $validityEndDate;

    /**
     * Date de début de validité, valide si non renseignée.
     *
     * @var \DateTime|null
     */
    protected $validityStartDate;

    /**
     * Id de l'entité.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Id de l'entité.
     */
    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Id de l'entité.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Id de l'entité.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

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
}
