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
     * @var string|null
     */
    protected $id;
    /**
     * @var int|null
     */
    protected $internalId;
    /**
     * @var string|null
     */
    protected $groupName;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var \DateTime|null
     */
    protected $validityStartDate;
    /**
     * @var \DateTime|null
     */
    protected $validityEndDate;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getInternalId(): ?int
    {
        return $this->internalId;
    }

    public function setInternalId(?int $internalId): self
    {
        $this->initialized['internalId'] = true;
        $this->internalId = $internalId;

        return $this;
    }

    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    public function setGroupName(?string $groupName): self
    {
        $this->initialized['groupName'] = true;
        $this->groupName = $groupName;

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
}
