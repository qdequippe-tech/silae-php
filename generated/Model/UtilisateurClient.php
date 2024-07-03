<?php

namespace QdequippeTech\Silae\Api\Model;

class UtilisateurClient
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
    protected $nom;

    /**
     * @var string|null
     */
    protected $prenom;

    /**
     * @var string|null
     */
    protected $mail;

    /**
     * @var string|null
     */
    protected $identifiant;

    /**
     * @var \DateTime|null
     */
    protected $debutValidite;

    /**
     * @var \DateTime|null
     */
    protected $finValidite;

    /**
     * @var bool|null
     */
    protected $accesComplet;

    /**
     * @var bool|null
     */
    protected $accesCompletAvecParametrageSimplifie;

    /**
     * @var bool|null
     */
    protected $accesCompletAvecParametrageComplet;

    /**
     * @var bool|null
     */
    protected $accesCompletAccesBureautique;

    /**
     * @var bool|null
     */
    protected $accesCompletAccesRelationClient;

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

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->initialized['mail'] = true;
        $this->mail = $mail;

        return $this;
    }

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

    public function getDebutValidite(): ?\DateTime
    {
        return $this->debutValidite;
    }

    public function setDebutValidite(?\DateTime $debutValidite): self
    {
        $this->initialized['debutValidite'] = true;
        $this->debutValidite = $debutValidite;

        return $this;
    }

    public function getFinValidite(): ?\DateTime
    {
        return $this->finValidite;
    }

    public function setFinValidite(?\DateTime $finValidite): self
    {
        $this->initialized['finValidite'] = true;
        $this->finValidite = $finValidite;

        return $this;
    }

    public function getAccesComplet(): ?bool
    {
        return $this->accesComplet;
    }

    public function setAccesComplet(?bool $accesComplet): self
    {
        $this->initialized['accesComplet'] = true;
        $this->accesComplet = $accesComplet;

        return $this;
    }

    public function getAccesCompletAvecParametrageSimplifie(): ?bool
    {
        return $this->accesCompletAvecParametrageSimplifie;
    }

    public function setAccesCompletAvecParametrageSimplifie(?bool $accesCompletAvecParametrageSimplifie): self
    {
        $this->initialized['accesCompletAvecParametrageSimplifie'] = true;
        $this->accesCompletAvecParametrageSimplifie = $accesCompletAvecParametrageSimplifie;

        return $this;
    }

    public function getAccesCompletAvecParametrageComplet(): ?bool
    {
        return $this->accesCompletAvecParametrageComplet;
    }

    public function setAccesCompletAvecParametrageComplet(?bool $accesCompletAvecParametrageComplet): self
    {
        $this->initialized['accesCompletAvecParametrageComplet'] = true;
        $this->accesCompletAvecParametrageComplet = $accesCompletAvecParametrageComplet;

        return $this;
    }

    public function getAccesCompletAccesBureautique(): ?bool
    {
        return $this->accesCompletAccesBureautique;
    }

    public function setAccesCompletAccesBureautique(?bool $accesCompletAccesBureautique): self
    {
        $this->initialized['accesCompletAccesBureautique'] = true;
        $this->accesCompletAccesBureautique = $accesCompletAccesBureautique;

        return $this;
    }

    public function getAccesCompletAccesRelationClient(): ?bool
    {
        return $this->accesCompletAccesRelationClient;
    }

    public function setAccesCompletAccesRelationClient(?bool $accesCompletAccesRelationClient): self
    {
        $this->initialized['accesCompletAccesRelationClient'] = true;
        $this->accesCompletAccesRelationClient = $accesCompletAccesRelationClient;

        return $this;
    }
}
