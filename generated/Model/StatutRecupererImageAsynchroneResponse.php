<?php

namespace QdequippeTech\Silae\Api\Model;

class StatutRecupererImageAsynchroneResponse
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
     * @var ImageAnnexe[]|null
     */
    protected $imagesAnnexes;
    /**
     * @var string|null
     */
    protected $warning;
    /**
     * @var string|null
     */
    protected $statut;
    /**
     * @var string|null
     */
    protected $messageErreur;
    /**
     * @var float|null
     */
    protected $progression;
    /**
     * @var string|null
     */
    protected $dureeExecution;

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
     * @return ImageAnnexe[]|null
     */
    public function getImagesAnnexes(): ?array
    {
        return $this->imagesAnnexes;
    }

    /**
     * @param ImageAnnexe[]|null $imagesAnnexes
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

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->initialized['statut'] = true;
        $this->statut = $statut;

        return $this;
    }

    public function getMessageErreur(): ?string
    {
        return $this->messageErreur;
    }

    public function setMessageErreur(?string $messageErreur): self
    {
        $this->initialized['messageErreur'] = true;
        $this->messageErreur = $messageErreur;

        return $this;
    }

    public function getProgression(): ?float
    {
        return $this->progression;
    }

    public function setProgression(?float $progression): self
    {
        $this->initialized['progression'] = true;
        $this->progression = $progression;

        return $this;
    }

    public function getDureeExecution(): ?string
    {
        return $this->dureeExecution;
    }

    public function setDureeExecution(?string $dureeExecution): self
    {
        $this->initialized['dureeExecution'] = true;
        $this->dureeExecution = $dureeExecution;

        return $this;
    }
}
