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
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var \DateTime|null
     */
    protected $validityEndDate;
    /**
     * @var \DateTime|null
     */
    protected $validityStartDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getValidityEndDate(): ?\DateTime
    {
        return $this->validityEndDate;
    }

    public function setValidityEndDate(?\DateTime $validityEndDate): self
    {
        $this->initialized['validityEndDate'] = true;
        $this->validityEndDate = $validityEndDate;

        return $this;
    }

    public function getValidityStartDate(): ?\DateTime
    {
        return $this->validityStartDate;
    }

    public function setValidityStartDate(?\DateTime $validityStartDate): self
    {
        $this->initialized['validityStartDate'] = true;
        $this->validityStartDate = $validityStartDate;

        return $this;
    }
}
