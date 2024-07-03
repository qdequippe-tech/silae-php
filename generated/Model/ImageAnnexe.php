<?php

namespace QdequippeTech\Silae\Api\Model;

class ImageAnnexe
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
    protected $image;

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;

        return $this;
    }
}
