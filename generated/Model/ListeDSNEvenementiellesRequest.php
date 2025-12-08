<?php

namespace QdequippeTech\Silae\Api\Model;

class ListeDSNEvenementiellesRequest
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
    protected $dateDebut;

    /**
     * @var \DateTime|null
     */
    protected $dateFin;

    /**
     * @var \DateTime|null
     */
    protected $dateDebutDepot;

    /**
     * @var \DateTime|null
     */
    protected $dateFinDepot;

    /**
     * @var string|null
     */
    protected $typeDSN;

    /**
     * @var bool|null
     */
    protected $afficherDSIJ;

    /**
     * @var string|null
     */
    protected $numeroDossier;

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

    public function getDateDebutDepot(): ?\DateTime
    {
        return $this->dateDebutDepot;
    }

    public function setDateDebutDepot(?\DateTime $dateDebutDepot): self
    {
        $this->initialized['dateDebutDepot'] = true;
        $this->dateDebutDepot = $dateDebutDepot;

        return $this;
    }

    public function getDateFinDepot(): ?\DateTime
    {
        return $this->dateFinDepot;
    }

    public function setDateFinDepot(?\DateTime $dateFinDepot): self
    {
        $this->initialized['dateFinDepot'] = true;
        $this->dateFinDepot = $dateFinDepot;

        return $this;
    }

    public function getTypeDSN(): ?string
    {
        return $this->typeDSN;
    }

    public function setTypeDSN(?string $typeDSN): self
    {
        $this->initialized['typeDSN'] = true;
        $this->typeDSN = $typeDSN;

        return $this;
    }

    public function getAfficherDSIJ(): ?bool
    {
        return $this->afficherDSIJ;
    }

    public function setAfficherDSIJ(?bool $afficherDSIJ): self
    {
        $this->initialized['afficherDSIJ'] = true;
        $this->afficherDSIJ = $afficherDSIJ;

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
