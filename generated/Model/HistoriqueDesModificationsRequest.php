<?php

namespace QdequippeTech\Silae\Api\Model;

class HistoriqueDesModificationsRequest
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
     * @var \DateTime|null
     */
    protected $dateDebut;

    /**
     * @var \DateTime|null
     */
    protected $dateFin;

    /**
     * @var string|null
     */
    protected $identifiantUtilisateur;

    /**
     * @var bool|null
     */
    protected $modifAPI;

    /**
     * @var list<string>|null
     */
    protected $elements;

    /**
     * @var list<string>|null
     */
    protected $actions;

    /**
     * @var string|null
     */
    protected $matriculeSalarie;

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

    public function getDateDebut(): ?\DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTime $dateDebut): self
    {
        $this->initialized['dateDebut'] = true;
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTime $dateFin): self
    {
        $this->initialized['dateFin'] = true;
        $this->dateFin = $dateFin;

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

    /**
     * @return list<string>|null
     */
    public function getElements(): ?array
    {
        return $this->elements;
    }

    /**
     * @param list<string>|null $elements
     */
    public function setElements(?array $elements): self
    {
        $this->initialized['elements'] = true;
        $this->elements = $elements;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getActions(): ?array
    {
        return $this->actions;
    }

    /**
     * @param list<string>|null $actions
     */
    public function setActions(?array $actions): self
    {
        $this->initialized['actions'] = true;
        $this->actions = $actions;

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
}
