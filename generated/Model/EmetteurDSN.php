<?php

namespace QdequippeTech\Silae\Api\Model;

class EmetteurDSN
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
     * @var int|null
     */
    protected $civilite;
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
    protected $siret;
    /**
     * @var int|null
     */
    protected $affectation;
    /**
     * @var string|null
     */
    protected $mail;
    /**
     * @var string|null
     */
    protected $telephone;
    /**
     * @var int|null
     */
    protected $choixAdresse;
    /**
     * @var string|null
     */
    protected $codeAgence;
    /**
     * @var string|null
     */
    protected $raisonSociale;
    /**
     * @var string|null
     */
    protected $numVoie;
    /**
     * @var string|null
     */
    protected $btqc;
    /**
     * @var string|null
     */
    protected $nomVoie;
    /**
     * @var string|null
     */
    protected $codePostal;
    /**
     * @var string|null
     */
    protected $nomVille;

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

    public function getCivilite(): ?int
    {
        return $this->civilite;
    }

    public function setCivilite(?int $civilite): self
    {
        $this->initialized['civilite'] = true;
        $this->civilite = $civilite;

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

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(?string $siret): self
    {
        $this->initialized['siret'] = true;
        $this->siret = $siret;

        return $this;
    }

    public function getAffectation(): ?int
    {
        return $this->affectation;
    }

    public function setAffectation(?int $affectation): self
    {
        $this->initialized['affectation'] = true;
        $this->affectation = $affectation;

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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->initialized['telephone'] = true;
        $this->telephone = $telephone;

        return $this;
    }

    public function getChoixAdresse(): ?int
    {
        return $this->choixAdresse;
    }

    public function setChoixAdresse(?int $choixAdresse): self
    {
        $this->initialized['choixAdresse'] = true;
        $this->choixAdresse = $choixAdresse;

        return $this;
    }

    public function getCodeAgence(): ?string
    {
        return $this->codeAgence;
    }

    public function setCodeAgence(?string $codeAgence): self
    {
        $this->initialized['codeAgence'] = true;
        $this->codeAgence = $codeAgence;

        return $this;
    }

    public function getRaisonSociale(): ?string
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale(?string $raisonSociale): self
    {
        $this->initialized['raisonSociale'] = true;
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    public function getNumVoie(): ?string
    {
        return $this->numVoie;
    }

    public function setNumVoie(?string $numVoie): self
    {
        $this->initialized['numVoie'] = true;
        $this->numVoie = $numVoie;

        return $this;
    }

    public function getBtqc(): ?string
    {
        return $this->btqc;
    }

    public function setBtqc(?string $btqc): self
    {
        $this->initialized['btqc'] = true;
        $this->btqc = $btqc;

        return $this;
    }

    public function getNomVoie(): ?string
    {
        return $this->nomVoie;
    }

    public function setNomVoie(?string $nomVoie): self
    {
        $this->initialized['nomVoie'] = true;
        $this->nomVoie = $nomVoie;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(?string $codePostal): self
    {
        $this->initialized['codePostal'] = true;
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getNomVille(): ?string
    {
        return $this->nomVille;
    }

    public function setNomVille(?string $nomVille): self
    {
        $this->initialized['nomVille'] = true;
        $this->nomVille = $nomVille;

        return $this;
    }
}
