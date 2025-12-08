<?php

namespace QdequippeTech\Silae\Api\Model;

class HistoriqueModification
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
     * @var \DateTime|null
     */
    protected $date;

    /**
     * @var string|null
     */
    protected $identifiantUtilisateur;

    /**
     * @var bool|null
     */
    protected $modifAPI;

    /**
     * @var string|null
     */
    protected $element;

    /**
     * @var string|null
     */
    protected $action;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    /**
     * @var string|null
     */
    protected $matriculeSalarie;

    /**
     * @var string|null
     */
    protected $descriptionModification;

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(?\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    public function getIdentifiantUtilisateur(): ?string
    {
        return $this->identifiantUtilisateur;
    }

    public function setIdentifiantUtilisateur(?string $identifiantUtilisateur): self
    {
        $this->initialized['identifiantUtilisateur'] = true;
        $this->identifiantUtilisateur = $identifiantUtilisateur;

        return $this;
    }

    public function getModifAPI(): ?bool
    {
        return $this->modifAPI;
    }

    public function setModifAPI(?bool $modifAPI): self
    {
        $this->initialized['modifAPI'] = true;
        $this->modifAPI = $modifAPI;

        return $this;
    }

    public function getElement(): ?string
    {
        return $this->element;
    }

    public function setElement(?string $element): self
    {
        $this->initialized['element'] = true;
        $this->element = $element;

        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;

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

    public function getMatriculeSalarie(): ?string
    {
        return $this->matriculeSalarie;
    }

    public function setMatriculeSalarie(?string $matriculeSalarie): self
    {
        $this->initialized['matriculeSalarie'] = true;
        $this->matriculeSalarie = $matriculeSalarie;

        return $this;
    }

    public function getDescriptionModification(): ?string
    {
        return $this->descriptionModification;
    }

    public function setDescriptionModification(?string $descriptionModification): self
    {
        $this->initialized['descriptionModification'] = true;
        $this->descriptionModification = $descriptionModification;

        return $this;
    }
}
