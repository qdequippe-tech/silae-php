<?php

namespace QdequippeTech\Silae\Api\Model;

class RecupererImageResponse
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

    /**
     * @var list<ImageAnnexe>|null
     */
    protected $imagesAnnexes;

    /**
     * @var string|null
     */
    protected $warning;

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

    /**
     * @return list<ImageAnnexe>|null
     */
    public function getImagesAnnexes(): ?array
    {
        return $this->imagesAnnexes;
    }

    /**
     * @param list<ImageAnnexe>|null $imagesAnnexes
     */
    public function setImagesAnnexes(?array $imagesAnnexes): self
    {
        $this->initialized['imagesAnnexes'] = true;
        $this->imagesAnnexes = $imagesAnnexes;

        return $this;
    }

    public function getWarning(): ?string
    {
        return $this->warning;
    }

    public function setWarning(?string $warning): self
    {
        $this->initialized['warning'] = true;
        $this->warning = $warning;

        return $this;
    }
}
