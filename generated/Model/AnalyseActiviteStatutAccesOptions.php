<?php

namespace QdequippeTech\Silae\Api\Model;

class AnalyseActiviteStatutAccesOptions
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
     * @var bool|null
     */
    protected $mySilaeActif;

    /**
     * @var float|null
     */
    protected $loginsActifs;

    /**
     * @var bool|null
     */
    protected $absencesMobiliteActif;

    /**
     * @var bool|null
     */
    protected $gestionTempsActif;

    /**
     * @var bool|null
     */
    protected $saisieVariableActif;

    /**
     * @var bool|null
     */
    protected $accesBulletinActif;

    /**
     * @var bool|null
     */
    protected $accesVirementActif;

    /**
     * @var bool|null
     */
    protected $signatureElectroniqueActif;

    /**
     * @var bool|null
     */
    protected $entretiensActif;

    /**
     * @var bool|null
     */
    protected $acomptesActif;

    /**
     * @var bool|null
     */
    protected $gestionSalariesActif;

    /**
     * @var bool|null
     */
    protected $visitesMedicalesActif;

    /**
     * @var bool|null
     */
    protected $mySilaeSanteActif;

    /**
     * @var bool|null
     */
    protected $mySilaeExpenseActif;

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

    public function getMySilaeActif(): ?bool
    {
        return $this->mySilaeActif;
    }

    public function setMySilaeActif(?bool $mySilaeActif): self
    {
        $this->initialized['mySilaeActif'] = true;
        $this->mySilaeActif = $mySilaeActif;

        return $this;
    }

    public function getLoginsActifs(): ?float
    {
        return $this->loginsActifs;
    }

    public function setLoginsActifs(?float $loginsActifs): self
    {
        $this->initialized['loginsActifs'] = true;
        $this->loginsActifs = $loginsActifs;

        return $this;
    }

    public function getAbsencesMobiliteActif(): ?bool
    {
        return $this->absencesMobiliteActif;
    }

    public function setAbsencesMobiliteActif(?bool $absencesMobiliteActif): self
    {
        $this->initialized['absencesMobiliteActif'] = true;
        $this->absencesMobiliteActif = $absencesMobiliteActif;

        return $this;
    }

    public function getGestionTempsActif(): ?bool
    {
        return $this->gestionTempsActif;
    }

    public function setGestionTempsActif(?bool $gestionTempsActif): self
    {
        $this->initialized['gestionTempsActif'] = true;
        $this->gestionTempsActif = $gestionTempsActif;

        return $this;
    }

    public function getSaisieVariableActif(): ?bool
    {
        return $this->saisieVariableActif;
    }

    public function setSaisieVariableActif(?bool $saisieVariableActif): self
    {
        $this->initialized['saisieVariableActif'] = true;
        $this->saisieVariableActif = $saisieVariableActif;

        return $this;
    }

    public function getAccesBulletinActif(): ?bool
    {
        return $this->accesBulletinActif;
    }

    public function setAccesBulletinActif(?bool $accesBulletinActif): self
    {
        $this->initialized['accesBulletinActif'] = true;
        $this->accesBulletinActif = $accesBulletinActif;

        return $this;
    }

    public function getAccesVirementActif(): ?bool
    {
        return $this->accesVirementActif;
    }

    public function setAccesVirementActif(?bool $accesVirementActif): self
    {
        $this->initialized['accesVirementActif'] = true;
        $this->accesVirementActif = $accesVirementActif;

        return $this;
    }

    public function getSignatureElectroniqueActif(): ?bool
    {
        return $this->signatureElectroniqueActif;
    }

    public function setSignatureElectroniqueActif(?bool $signatureElectroniqueActif): self
    {
        $this->initialized['signatureElectroniqueActif'] = true;
        $this->signatureElectroniqueActif = $signatureElectroniqueActif;

        return $this;
    }

    public function getEntretiensActif(): ?bool
    {
        return $this->entretiensActif;
    }

    public function setEntretiensActif(?bool $entretiensActif): self
    {
        $this->initialized['entretiensActif'] = true;
        $this->entretiensActif = $entretiensActif;

        return $this;
    }

    public function getAcomptesActif(): ?bool
    {
        return $this->acomptesActif;
    }

    public function setAcomptesActif(?bool $acomptesActif): self
    {
        $this->initialized['acomptesActif'] = true;
        $this->acomptesActif = $acomptesActif;

        return $this;
    }

    public function getGestionSalariesActif(): ?bool
    {
        return $this->gestionSalariesActif;
    }

    public function setGestionSalariesActif(?bool $gestionSalariesActif): self
    {
        $this->initialized['gestionSalariesActif'] = true;
        $this->gestionSalariesActif = $gestionSalariesActif;

        return $this;
    }

    public function getVisitesMedicalesActif(): ?bool
    {
        return $this->visitesMedicalesActif;
    }

    public function setVisitesMedicalesActif(?bool $visitesMedicalesActif): self
    {
        $this->initialized['visitesMedicalesActif'] = true;
        $this->visitesMedicalesActif = $visitesMedicalesActif;

        return $this;
    }

    public function getMySilaeSanteActif(): ?bool
    {
        return $this->mySilaeSanteActif;
    }

    public function setMySilaeSanteActif(?bool $mySilaeSanteActif): self
    {
        $this->initialized['mySilaeSanteActif'] = true;
        $this->mySilaeSanteActif = $mySilaeSanteActif;

        return $this;
    }

    public function getMySilaeExpenseActif(): ?bool
    {
        return $this->mySilaeExpenseActif;
    }

    public function setMySilaeExpenseActif(?bool $mySilaeExpenseActif): self
    {
        $this->initialized['mySilaeExpenseActif'] = true;
        $this->mySilaeExpenseActif = $mySilaeExpenseActif;

        return $this;
    }
}
