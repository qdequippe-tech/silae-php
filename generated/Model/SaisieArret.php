<?php

namespace QdequippeTech\Silae\Api\Model;

class SaisieArret
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
    protected $reference;
    /**
     * @var string|null
     */
    protected $demandeur;
    /**
     * @var \DateTime|null
     */
    protected $dateDemande;
    /**
     * @var float|null
     */
    protected $montantCreance;
    /**
     * @var \DateTime|null
     */
    protected $dateDebutPrelevement;
    /**
     * @var int|null
     */
    protected $type;
    /**
     * @var int|null
     */
    protected $priorite;
    /**
     * @var string|null
     */
    protected $libelleBulletin;
    /**
     * @var float|null
     */
    protected $montantsDejaVerses;

    public function getReference(): ?int
    {
        return $this->reference;
    }

    public function setReference(?int $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;

        return $this;
    }

    public function getDemandeur(): ?string
    {
        return $this->demandeur;
    }

    public function setDemandeur(?string $demandeur): self
    {
        $this->initialized['demandeur'] = true;
        $this->demandeur = $demandeur;

        return $this;
    }

    public function getDateDemande(): ?\DateTime
    {
        return $this->dateDemande;
    }

    public function setDateDemande(?\DateTime $dateDemande): self
    {
        $this->initialized['dateDemande'] = true;
        $this->dateDemande = $dateDemande;

        return $this;
    }

    public function getMontantCreance(): ?float
    {
        return $this->montantCreance;
    }

    public function setMontantCreance(?float $montantCreance): self
    {
        $this->initialized['montantCreance'] = true;
        $this->montantCreance = $montantCreance;

        return $this;
    }

    public function getDateDebutPrelevement(): ?\DateTime
    {
        return $this->dateDebutPrelevement;
    }

    public function setDateDebutPrelevement(?\DateTime $dateDebutPrelevement): self
    {
        $this->initialized['dateDebutPrelevement'] = true;
        $this->dateDebutPrelevement = $dateDebutPrelevement;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getPriorite(): ?int
    {
        return $this->priorite;
    }

    public function setPriorite(?int $priorite): self
    {
        $this->initialized['priorite'] = true;
        $this->priorite = $priorite;

        return $this;
    }

    public function getLibelleBulletin(): ?string
    {
        return $this->libelleBulletin;
    }

    public function setLibelleBulletin(?string $libelleBulletin): self
    {
        $this->initialized['libelleBulletin'] = true;
        $this->libelleBulletin = $libelleBulletin;

        return $this;
    }

    public function getMontantsDejaVerses(): ?float
    {
        return $this->montantsDejaVerses;
    }

    public function setMontantsDejaVerses(?float $montantsDejaVerses): self
    {
        $this->initialized['montantsDejaVerses'] = true;
        $this->montantsDejaVerses = $montantsDejaVerses;

        return $this;
    }
}
