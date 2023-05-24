<?php

namespace QdequippeTech\Silae\Api\Model;

class SoldeReposSalarie
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
    protected $matricule;
    /**
     * @var string|null
     */
    protected $nomAffiche;
    /**
     * @var float|null
     */
    protected $cpN1Acquis;
    /**
     * @var float|null
     */
    protected $cpN1Pris;
    /**
     * @var float|null
     */
    protected $cpN1Solde;
    /**
     * @var float|null
     */
    protected $cpN1Provision;
    /**
     * @var float|null
     */
    protected $cpnAcquis;
    /**
     * @var float|null
     */
    protected $cpnPris;
    /**
     * @var float|null
     */
    protected $cpnSolde;
    /**
     * @var float|null
     */
    protected $cpnProvision;
    /**
     * @var float|null
     */
    protected $cpProvision;
    /**
     * @var float|null
     */
    protected $cpTauxChargesPatronales;
    /**
     * @var float|null
     */
    protected $cpMontantChargesPatronales;
    /**
     * @var float|null
     */
    protected $cpTotalProvision;
    /**
     * @var float|null
     */
    protected $rttAcquis;
    /**
     * @var float|null
     */
    protected $rttPris;
    /**
     * @var float|null
     */
    protected $rttSolde;
    /**
     * @var float|null
     */
    protected $rttProvision;
    /**
     * @var float|null
     */
    protected $rttMontantChargesPatronales;
    /**
     * @var float|null
     */
    protected $rttTotalProvision;
    /**
     * @var float|null
     */
    protected $cpSupAcquis;
    /**
     * @var float|null
     */
    protected $cpSupPris;
    /**
     * @var float|null
     */
    protected $cpSupSolde;
    /**
     * @var float|null
     */
    protected $cpSupProvision;
    /**
     * @var float|null
     */
    protected $cpSupMontantChargesPatronales;
    /**
     * @var float|null
     */
    protected $cpSupTotalProvision;
    /**
     * @var float|null
     */
    protected $cpSup2Acquis;
    /**
     * @var float|null
     */
    protected $cpSup2Pris;
    /**
     * @var float|null
     */
    protected $cpSup2Solde;
    /**
     * @var float|null
     */
    protected $cpSup2Provision;
    /**
     * @var float|null
     */
    protected $cpSup2MontantChargesPatronales;
    /**
     * @var float|null
     */
    protected $cpSup2TotalProvision;
    /**
     * @var float|null
     */
    protected $rcrAcquis;
    /**
     * @var float|null
     */
    protected $rcrPris;
    /**
     * @var float|null
     */
    protected $rcrSolde;
    /**
     * @var float|null
     */
    protected $rcrProvision;
    /**
     * @var float|null
     */
    protected $rccAcquis;
    /**
     * @var float|null
     */
    protected $rccPris;
    /**
     * @var float|null
     */
    protected $rccSolde;
    /**
     * @var float|null
     */
    protected $rccProvision;
    /**
     * @var float|null
     */
    protected $rcoAcquis;
    /**
     * @var float|null
     */
    protected $rcoPris;
    /**
     * @var float|null
     */
    protected $rcoSolde;
    /**
     * @var float|null
     */
    protected $rcoProvision;
    /**
     * @var float|null
     */
    protected $rcAcquis;
    /**
     * @var float|null
     */
    protected $rcPris;
    /**
     * @var float|null
     */
    protected $rcSolde;
    /**
     * @var float|null
     */
    protected $rcProvision;

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->initialized['matricule'] = true;
        $this->matricule = $matricule;

        return $this;
    }

    public function getNomAffiche(): ?string
    {
        return $this->nomAffiche;
    }

    public function setNomAffiche(?string $nomAffiche): self
    {
        $this->initialized['nomAffiche'] = true;
        $this->nomAffiche = $nomAffiche;

        return $this;
    }

    public function getCpN1Acquis(): ?float
    {
        return $this->cpN1Acquis;
    }

    public function setCpN1Acquis(?float $cpN1Acquis): self
    {
        $this->initialized['cpN1Acquis'] = true;
        $this->cpN1Acquis = $cpN1Acquis;

        return $this;
    }

    public function getCpN1Pris(): ?float
    {
        return $this->cpN1Pris;
    }

    public function setCpN1Pris(?float $cpN1Pris): self
    {
        $this->initialized['cpN1Pris'] = true;
        $this->cpN1Pris = $cpN1Pris;

        return $this;
    }

    public function getCpN1Solde(): ?float
    {
        return $this->cpN1Solde;
    }

    public function setCpN1Solde(?float $cpN1Solde): self
    {
        $this->initialized['cpN1Solde'] = true;
        $this->cpN1Solde = $cpN1Solde;

        return $this;
    }

    public function getCpN1Provision(): ?float
    {
        return $this->cpN1Provision;
    }

    public function setCpN1Provision(?float $cpN1Provision): self
    {
        $this->initialized['cpN1Provision'] = true;
        $this->cpN1Provision = $cpN1Provision;

        return $this;
    }

    public function getCpnAcquis(): ?float
    {
        return $this->cpnAcquis;
    }

    public function setCpnAcquis(?float $cpnAcquis): self
    {
        $this->initialized['cpnAcquis'] = true;
        $this->cpnAcquis = $cpnAcquis;

        return $this;
    }

    public function getCpnPris(): ?float
    {
        return $this->cpnPris;
    }

    public function setCpnPris(?float $cpnPris): self
    {
        $this->initialized['cpnPris'] = true;
        $this->cpnPris = $cpnPris;

        return $this;
    }

    public function getCpnSolde(): ?float
    {
        return $this->cpnSolde;
    }

    public function setCpnSolde(?float $cpnSolde): self
    {
        $this->initialized['cpnSolde'] = true;
        $this->cpnSolde = $cpnSolde;

        return $this;
    }

    public function getCpnProvision(): ?float
    {
        return $this->cpnProvision;
    }

    public function setCpnProvision(?float $cpnProvision): self
    {
        $this->initialized['cpnProvision'] = true;
        $this->cpnProvision = $cpnProvision;

        return $this;
    }

    public function getCpProvision(): ?float
    {
        return $this->cpProvision;
    }

    public function setCpProvision(?float $cpProvision): self
    {
        $this->initialized['cpProvision'] = true;
        $this->cpProvision = $cpProvision;

        return $this;
    }

    public function getCpTauxChargesPatronales(): ?float
    {
        return $this->cpTauxChargesPatronales;
    }

    public function setCpTauxChargesPatronales(?float $cpTauxChargesPatronales): self
    {
        $this->initialized['cpTauxChargesPatronales'] = true;
        $this->cpTauxChargesPatronales = $cpTauxChargesPatronales;

        return $this;
    }

    public function getCpMontantChargesPatronales(): ?float
    {
        return $this->cpMontantChargesPatronales;
    }

    public function setCpMontantChargesPatronales(?float $cpMontantChargesPatronales): self
    {
        $this->initialized['cpMontantChargesPatronales'] = true;
        $this->cpMontantChargesPatronales = $cpMontantChargesPatronales;

        return $this;
    }

    public function getCpTotalProvision(): ?float
    {
        return $this->cpTotalProvision;
    }

    public function setCpTotalProvision(?float $cpTotalProvision): self
    {
        $this->initialized['cpTotalProvision'] = true;
        $this->cpTotalProvision = $cpTotalProvision;

        return $this;
    }

    public function getRttAcquis(): ?float
    {
        return $this->rttAcquis;
    }

    public function setRttAcquis(?float $rttAcquis): self
    {
        $this->initialized['rttAcquis'] = true;
        $this->rttAcquis = $rttAcquis;

        return $this;
    }

    public function getRttPris(): ?float
    {
        return $this->rttPris;
    }

    public function setRttPris(?float $rttPris): self
    {
        $this->initialized['rttPris'] = true;
        $this->rttPris = $rttPris;

        return $this;
    }

    public function getRttSolde(): ?float
    {
        return $this->rttSolde;
    }

    public function setRttSolde(?float $rttSolde): self
    {
        $this->initialized['rttSolde'] = true;
        $this->rttSolde = $rttSolde;

        return $this;
    }

    public function getRttProvision(): ?float
    {
        return $this->rttProvision;
    }

    public function setRttProvision(?float $rttProvision): self
    {
        $this->initialized['rttProvision'] = true;
        $this->rttProvision = $rttProvision;

        return $this;
    }

    public function getRttMontantChargesPatronales(): ?float
    {
        return $this->rttMontantChargesPatronales;
    }

    public function setRttMontantChargesPatronales(?float $rttMontantChargesPatronales): self
    {
        $this->initialized['rttMontantChargesPatronales'] = true;
        $this->rttMontantChargesPatronales = $rttMontantChargesPatronales;

        return $this;
    }

    public function getRttTotalProvision(): ?float
    {
        return $this->rttTotalProvision;
    }

    public function setRttTotalProvision(?float $rttTotalProvision): self
    {
        $this->initialized['rttTotalProvision'] = true;
        $this->rttTotalProvision = $rttTotalProvision;

        return $this;
    }

    public function getCpSupAcquis(): ?float
    {
        return $this->cpSupAcquis;
    }

    public function setCpSupAcquis(?float $cpSupAcquis): self
    {
        $this->initialized['cpSupAcquis'] = true;
        $this->cpSupAcquis = $cpSupAcquis;

        return $this;
    }

    public function getCpSupPris(): ?float
    {
        return $this->cpSupPris;
    }

    public function setCpSupPris(?float $cpSupPris): self
    {
        $this->initialized['cpSupPris'] = true;
        $this->cpSupPris = $cpSupPris;

        return $this;
    }

    public function getCpSupSolde(): ?float
    {
        return $this->cpSupSolde;
    }

    public function setCpSupSolde(?float $cpSupSolde): self
    {
        $this->initialized['cpSupSolde'] = true;
        $this->cpSupSolde = $cpSupSolde;

        return $this;
    }

    public function getCpSupProvision(): ?float
    {
        return $this->cpSupProvision;
    }

    public function setCpSupProvision(?float $cpSupProvision): self
    {
        $this->initialized['cpSupProvision'] = true;
        $this->cpSupProvision = $cpSupProvision;

        return $this;
    }

    public function getCpSupMontantChargesPatronales(): ?float
    {
        return $this->cpSupMontantChargesPatronales;
    }

    public function setCpSupMontantChargesPatronales(?float $cpSupMontantChargesPatronales): self
    {
        $this->initialized['cpSupMontantChargesPatronales'] = true;
        $this->cpSupMontantChargesPatronales = $cpSupMontantChargesPatronales;

        return $this;
    }

    public function getCpSupTotalProvision(): ?float
    {
        return $this->cpSupTotalProvision;
    }

    public function setCpSupTotalProvision(?float $cpSupTotalProvision): self
    {
        $this->initialized['cpSupTotalProvision'] = true;
        $this->cpSupTotalProvision = $cpSupTotalProvision;

        return $this;
    }

    public function getCpSup2Acquis(): ?float
    {
        return $this->cpSup2Acquis;
    }

    public function setCpSup2Acquis(?float $cpSup2Acquis): self
    {
        $this->initialized['cpSup2Acquis'] = true;
        $this->cpSup2Acquis = $cpSup2Acquis;

        return $this;
    }

    public function getCpSup2Pris(): ?float
    {
        return $this->cpSup2Pris;
    }

    public function setCpSup2Pris(?float $cpSup2Pris): self
    {
        $this->initialized['cpSup2Pris'] = true;
        $this->cpSup2Pris = $cpSup2Pris;

        return $this;
    }

    public function getCpSup2Solde(): ?float
    {
        return $this->cpSup2Solde;
    }

    public function setCpSup2Solde(?float $cpSup2Solde): self
    {
        $this->initialized['cpSup2Solde'] = true;
        $this->cpSup2Solde = $cpSup2Solde;

        return $this;
    }

    public function getCpSup2Provision(): ?float
    {
        return $this->cpSup2Provision;
    }

    public function setCpSup2Provision(?float $cpSup2Provision): self
    {
        $this->initialized['cpSup2Provision'] = true;
        $this->cpSup2Provision = $cpSup2Provision;

        return $this;
    }

    public function getCpSup2MontantChargesPatronales(): ?float
    {
        return $this->cpSup2MontantChargesPatronales;
    }

    public function setCpSup2MontantChargesPatronales(?float $cpSup2MontantChargesPatronales): self
    {
        $this->initialized['cpSup2MontantChargesPatronales'] = true;
        $this->cpSup2MontantChargesPatronales = $cpSup2MontantChargesPatronales;

        return $this;
    }

    public function getCpSup2TotalProvision(): ?float
    {
        return $this->cpSup2TotalProvision;
    }

    public function setCpSup2TotalProvision(?float $cpSup2TotalProvision): self
    {
        $this->initialized['cpSup2TotalProvision'] = true;
        $this->cpSup2TotalProvision = $cpSup2TotalProvision;

        return $this;
    }

    public function getRcrAcquis(): ?float
    {
        return $this->rcrAcquis;
    }

    public function setRcrAcquis(?float $rcrAcquis): self
    {
        $this->initialized['rcrAcquis'] = true;
        $this->rcrAcquis = $rcrAcquis;

        return $this;
    }

    public function getRcrPris(): ?float
    {
        return $this->rcrPris;
    }

    public function setRcrPris(?float $rcrPris): self
    {
        $this->initialized['rcrPris'] = true;
        $this->rcrPris = $rcrPris;

        return $this;
    }

    public function getRcrSolde(): ?float
    {
        return $this->rcrSolde;
    }

    public function setRcrSolde(?float $rcrSolde): self
    {
        $this->initialized['rcrSolde'] = true;
        $this->rcrSolde = $rcrSolde;

        return $this;
    }

    public function getRcrProvision(): ?float
    {
        return $this->rcrProvision;
    }

    public function setRcrProvision(?float $rcrProvision): self
    {
        $this->initialized['rcrProvision'] = true;
        $this->rcrProvision = $rcrProvision;

        return $this;
    }

    public function getRccAcquis(): ?float
    {
        return $this->rccAcquis;
    }

    public function setRccAcquis(?float $rccAcquis): self
    {
        $this->initialized['rccAcquis'] = true;
        $this->rccAcquis = $rccAcquis;

        return $this;
    }

    public function getRccPris(): ?float
    {
        return $this->rccPris;
    }

    public function setRccPris(?float $rccPris): self
    {
        $this->initialized['rccPris'] = true;
        $this->rccPris = $rccPris;

        return $this;
    }

    public function getRccSolde(): ?float
    {
        return $this->rccSolde;
    }

    public function setRccSolde(?float $rccSolde): self
    {
        $this->initialized['rccSolde'] = true;
        $this->rccSolde = $rccSolde;

        return $this;
    }

    public function getRccProvision(): ?float
    {
        return $this->rccProvision;
    }

    public function setRccProvision(?float $rccProvision): self
    {
        $this->initialized['rccProvision'] = true;
        $this->rccProvision = $rccProvision;

        return $this;
    }

    public function getRcoAcquis(): ?float
    {
        return $this->rcoAcquis;
    }

    public function setRcoAcquis(?float $rcoAcquis): self
    {
        $this->initialized['rcoAcquis'] = true;
        $this->rcoAcquis = $rcoAcquis;

        return $this;
    }

    public function getRcoPris(): ?float
    {
        return $this->rcoPris;
    }

    public function setRcoPris(?float $rcoPris): self
    {
        $this->initialized['rcoPris'] = true;
        $this->rcoPris = $rcoPris;

        return $this;
    }

    public function getRcoSolde(): ?float
    {
        return $this->rcoSolde;
    }

    public function setRcoSolde(?float $rcoSolde): self
    {
        $this->initialized['rcoSolde'] = true;
        $this->rcoSolde = $rcoSolde;

        return $this;
    }

    public function getRcoProvision(): ?float
    {
        return $this->rcoProvision;
    }

    public function setRcoProvision(?float $rcoProvision): self
    {
        $this->initialized['rcoProvision'] = true;
        $this->rcoProvision = $rcoProvision;

        return $this;
    }

    public function getRcAcquis(): ?float
    {
        return $this->rcAcquis;
    }

    public function setRcAcquis(?float $rcAcquis): self
    {
        $this->initialized['rcAcquis'] = true;
        $this->rcAcquis = $rcAcquis;

        return $this;
    }

    public function getRcPris(): ?float
    {
        return $this->rcPris;
    }

    public function setRcPris(?float $rcPris): self
    {
        $this->initialized['rcPris'] = true;
        $this->rcPris = $rcPris;

        return $this;
    }

    public function getRcSolde(): ?float
    {
        return $this->rcSolde;
    }

    public function setRcSolde(?float $rcSolde): self
    {
        $this->initialized['rcSolde'] = true;
        $this->rcSolde = $rcSolde;

        return $this;
    }

    public function getRcProvision(): ?float
    {
        return $this->rcProvision;
    }

    public function setRcProvision(?float $rcProvision): self
    {
        $this->initialized['rcProvision'] = true;
        $this->rcProvision = $rcProvision;

        return $this;
    }
}
