<?php

namespace QdequippeTech\Silae\Api\Model;

class EtatDeclaration
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
    protected $numeroADS;
    /**
     * @var \DateTime|null
     */
    protected $date;
    /**
     * @var string|null
     */
    protected $typeDeclaration;
    /**
     * @var string|null
     */
    protected $nomInterneEtablissement;
    /**
     * @var string|null
     */
    protected $destinataire;
    /**
     * @var bool|null
     */
    protected $obsolete;
    /**
     * @var bool|null
     */
    protected $test;
    /**
     * @var EtatDeclarationRetour[]|null
     */
    protected $retour;

    public function getNumeroADS(): ?string
    {
        return $this->numeroADS;
    }

    public function setNumeroADS(?string $numeroADS): self
    {
        $this->initialized['numeroADS'] = true;
        $this->numeroADS = $numeroADS;

        return $this;
    }

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

    public function getTypeDeclaration(): ?string
    {
        return $this->typeDeclaration;
    }

    public function setTypeDeclaration(?string $typeDeclaration): self
    {
        $this->initialized['typeDeclaration'] = true;
        $this->typeDeclaration = $typeDeclaration;

        return $this;
    }

    public function getNomInterneEtablissement(): ?string
    {
        return $this->nomInterneEtablissement;
    }

    public function setNomInterneEtablissement(?string $nomInterneEtablissement): self
    {
        $this->initialized['nomInterneEtablissement'] = true;
        $this->nomInterneEtablissement = $nomInterneEtablissement;

        return $this;
    }

    public function getDestinataire(): ?string
    {
        return $this->destinataire;
    }

    public function setDestinataire(?string $destinataire): self
    {
        $this->initialized['destinataire'] = true;
        $this->destinataire = $destinataire;

        return $this;
    }

    public function getObsolete(): ?bool
    {
        return $this->obsolete;
    }

    public function setObsolete(?bool $obsolete): self
    {
        $this->initialized['obsolete'] = true;
        $this->obsolete = $obsolete;

        return $this;
    }

    public function getTest(): ?bool
    {
        return $this->test;
    }

    public function setTest(?bool $test): self
    {
        $this->initialized['test'] = true;
        $this->test = $test;

        return $this;
    }

    /**
     * @return EtatDeclarationRetour[]|null
     */
    public function getRetour(): ?array
    {
        return $this->retour;
    }

    /**
     * @param EtatDeclarationRetour[]|null $retour
     */
    public function setRetour(?array $retour): self
    {
        $this->initialized['retour'] = true;
        $this->retour = $retour;

        return $this;
    }
}
