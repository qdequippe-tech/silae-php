<?php

namespace QdequippeTech\Silae\Api\Model;

class ContactInformations
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
    protected $identifiant;

    /**
     * @var string|null
     */
    protected $nom;

    /**
     * @var string|null
     */
    protected $prenom;

    /**
     * @var string|null
     */
    protected $fonction;

    /**
     * @var string|null
     */
    protected $telBureau;

    /**
     * @var string|null
     */
    protected $eMail;

    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }

    public function setIdentifiant(?string $identifiant): self
    {
        $this->initialized['identifiant'] = true;
        $this->identifiant = $identifiant;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(?string $fonction): self
    {
        $this->initialized['fonction'] = true;
        $this->fonction = $fonction;

        return $this;
    }

    public function getTelBureau(): ?string
    {
        return $this->telBureau;
    }

    public function setTelBureau(?string $telBureau): self
    {
        $this->initialized['telBureau'] = true;
        $this->telBureau = $telBureau;

        return $this;
    }

    public function getEMail(): ?string
    {
        return $this->eMail;
    }

    public function setEMail(?string $eMail): self
    {
        $this->initialized['eMail'] = true;
        $this->eMail = $eMail;

        return $this;
    }
}
