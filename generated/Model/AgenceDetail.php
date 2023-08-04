<?php

namespace QdequippeTech\Silae\Api\Model;

class AgenceDetail
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
    protected $telBureau;
    /**
     * @var string|null
     */
    protected $mel;
    /**
     * @var string|null
     */
    protected $affectationExpediteurCollab;
    /**
     * @var string|null
     */
    protected $ediMethode;
    /**
     * @var string|null
     */
    protected $ediJdcLogin;
    /**
     * @var string|null
     */
    protected $ediAspOneLogin;
    /**
     * @var string|null
     */
    protected $ediAutreLogin;
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
    protected $siret;
    /**
     * @var string|null
     */
    protected $codePostal;
    /**
     * @var string|null
     */
    protected $nomVille;

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

    public function getMel(): ?string
    {
        return $this->mel;
    }

    public function setMel(?string $mel): self
    {
        $this->initialized['mel'] = true;
        $this->mel = $mel;

        return $this;
    }

    public function getAffectationExpediteurCollab(): ?string
    {
        return $this->affectationExpediteurCollab;
    }

    public function setAffectationExpediteurCollab(?string $affectationExpediteurCollab): self
    {
        $this->initialized['affectationExpediteurCollab'] = true;
        $this->affectationExpediteurCollab = $affectationExpediteurCollab;

        return $this;
    }

    public function getEdiMethode(): ?string
    {
        return $this->ediMethode;
    }

    public function setEdiMethode(?string $ediMethode): self
    {
        $this->initialized['ediMethode'] = true;
        $this->ediMethode = $ediMethode;

        return $this;
    }

    public function getEdiJdcLogin(): ?string
    {
        return $this->ediJdcLogin;
    }

    public function setEdiJdcLogin(?string $ediJdcLogin): self
    {
        $this->initialized['ediJdcLogin'] = true;
        $this->ediJdcLogin = $ediJdcLogin;

        return $this;
    }

    public function getEdiAspOneLogin(): ?string
    {
        return $this->ediAspOneLogin;
    }

    public function setEdiAspOneLogin(?string $ediAspOneLogin): self
    {
        $this->initialized['ediAspOneLogin'] = true;
        $this->ediAspOneLogin = $ediAspOneLogin;

        return $this;
    }

    public function getEdiAutreLogin(): ?string
    {
        return $this->ediAutreLogin;
    }

    public function setEdiAutreLogin(?string $ediAutreLogin): self
    {
        $this->initialized['ediAutreLogin'] = true;
        $this->ediAutreLogin = $ediAutreLogin;

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
