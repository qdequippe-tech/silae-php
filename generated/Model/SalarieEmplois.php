<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieEmplois
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
    protected $matriculeSalarie;

    /**
     * @var string|null
     */
    protected $numeroSecuriteSociale;

    /**
     * @var string|null
     */
    protected $matriculeSalarieModele;

    /**
     * @var string|null
     */
    protected $numeroDossierSalarieModele;

    /**
     * @var bool|null
     */
    protected $copieIntegraleSalarieModele;

    /**
     * @var bool|null
     */
    protected $calculerElementsNaissance;

    /**
     * @var bool|null
     */
    protected $calculerCommune;

    /**
     * @var string|null
     */
    protected $matriculeInterne;

    /**
     * @var bool|null
     */
    protected $bMatriculeInterne;

    /**
     * @var string|null
     */
    protected $nomNaissance;

    /**
     * @var bool|null
     */
    protected $bNomNaissance;

    /**
     * @var string|null
     */
    protected $nomMarital;

    /**
     * @var bool|null
     */
    protected $bNomMarital;

    /**
     * @var string|null
     */
    protected $nomUsuel;

    /**
     * @var bool|null
     */
    protected $bNomUsuel;

    /**
     * @var string|null
     */
    protected $prenom;

    /**
     * @var bool|null
     */
    protected $bPrenom;

    /**
     * @var int|null
     */
    protected $civilite;

    /**
     * @var bool|null
     */
    protected $bCivilite;

    /**
     * @var int|null
     */
    protected $situationFamiliale;

    /**
     * @var bool|null
     */
    protected $bSituationFamiliale;

    /**
     * @var \DateTime|null
     */
    protected $dateNaissance;

    /**
     * @var bool|null
     */
    protected $bDateNaissance;

    /**
     * @var string|null
     */
    protected $departementNaissance;

    /**
     * @var bool|null
     */
    protected $bDepartementNaissance;

    /**
     * @var string|null
     */
    protected $communeNaissance;

    /**
     * @var bool|null
     */
    protected $bCommuneNaissance;

    /**
     * @var string|null
     */
    protected $codePaysNaissance;

    /**
     * @var bool|null
     */
    protected $bCodePaysNaissance;

    /**
     * @var string|null
     */
    protected $paysNaissance;

    /**
     * @var bool|null
     */
    protected $bPaysNaissance;

    /**
     * @var string|null
     */
    protected $codePaysNationalite;

    /**
     * @var bool|null
     */
    protected $bCodePaysNationalite;

    /**
     * @var string|null
     */
    protected $paysNationalite;

    /**
     * @var bool|null
     */
    protected $bPaysNationalite;

    /**
     * @var int|null
     */
    protected $titreSejourType;

    /**
     * @var bool|null
     */
    protected $bTitreSejourType;

    /**
     * @var string|null
     */
    protected $titreSejourNumeroOrdre;

    /**
     * @var bool|null
     */
    protected $bTitreSejourNumeroOrdre;

    /**
     * @var \DateTime|null
     */
    protected $titreSejourDebut;

    /**
     * @var bool|null
     */
    protected $bTitreSejourDebut;

    /**
     * @var \DateTime|null
     */
    protected $titreSejourFin;

    /**
     * @var bool|null
     */
    protected $bTitreSejourFin;

    /**
     * @var string|null
     */
    protected $numVoie;

    /**
     * @var bool|null
     */
    protected $bNumVoie;

    /**
     * @var string|null
     */
    protected $btqc;

    /**
     * @var bool|null
     */
    protected $bBTQC;

    /**
     * @var string|null
     */
    protected $nomVoie;

    /**
     * @var bool|null
     */
    protected $bNomVoie;

    /**
     * @var string|null
     */
    protected $complement;

    /**
     * @var bool|null
     */
    protected $bComplement;

    /**
     * @var string|null
     */
    protected $codePostal;

    /**
     * @var bool|null
     */
    protected $bCodePostal;

    /**
     * @var string|null
     */
    protected $nomVille;

    /**
     * @var bool|null
     */
    protected $bNomVille;

    /**
     * @var string|null
     */
    protected $codeOfficielCommune;

    /**
     * @var bool|null
     */
    protected $bCodeOfficielCommune;

    /**
     * @var string|null
     */
    protected $commune;

    /**
     * @var bool|null
     */
    protected $bCommune;

    /**
     * @var string|null
     */
    protected $codePays;

    /**
     * @var bool|null
     */
    protected $bCodePays;

    /**
     * @var string|null
     */
    protected $pays;

    /**
     * @var bool|null
     */
    protected $bPays;

    /**
     * @var bool|null
     */
    protected $domicilieFiscalementHorsFrance;

    /**
     * @var bool|null
     */
    protected $bDomicilieFiscalementHorsFrance;

    /**
     * @var string|null
     */
    protected $telDomicile;

    /**
     * @var bool|null
     */
    protected $bTelDomicile;

    /**
     * @var string|null
     */
    protected $telPortable;

    /**
     * @var bool|null
     */
    protected $bTelPortable;

    /**
     * @var string|null
     */
    protected $eMail;

    /**
     * @var bool|null
     */
    protected $bEMail;

    /**
     * @var string|null
     */
    protected $rib;

    /**
     * @var bool|null
     */
    protected $bRib;

    /**
     * @var string|null
     */
    protected $iBan;

    /**
     * @var bool|null
     */
    protected $bIBan;

    /**
     * @var string|null
     */
    protected $bic;

    /**
     * @var bool|null
     */
    protected $bBic;

    /**
     * @var string|null
     */
    protected $affectation1;

    /**
     * @var bool|null
     */
    protected $bAffectation1;

    /**
     * @var string|null
     */
    protected $affectation2;

    /**
     * @var bool|null
     */
    protected $bAffectation2;

    /**
     * @var string|null
     */
    protected $affectation3;

    /**
     * @var bool|null
     */
    protected $bAffectation3;

    /**
     * @var string|null
     */
    protected $affectation4;

    /**
     * @var bool|null
     */
    protected $bAffectation4;

    /**
     * @var string|null
     */
    protected $affectation5;

    /**
     * @var bool|null
     */
    protected $bAffectation5;

    /**
     * @var string|null
     */
    protected $affectation6;

    /**
     * @var bool|null
     */
    protected $bAffectation6;

    /**
     * @var string|null
     */
    protected $affectation7;

    /**
     * @var bool|null
     */
    protected $bAffectation7;

    /**
     * @var list<Emploi>|null
     */
    protected $emplois;

    /**
     * @var int|null
     */
    protected $anneeNaissance;

    /**
     * @var bool|null
     */
    protected $bAnneeNaissance;

    /**
     * @var string|null
     */
    protected $eMailPro;

    /**
     * @var bool|null
     */
    protected $bEMailPro;

    /**
     * @var string|null
     */
    protected $personneAContacterUrgenceNom;

    /**
     * @var bool|null
     */
    protected $bPersonneAContacterUrgenceNom;

    /**
     * @var string|null
     */
    protected $personneAContacterUrgencePrenom;

    /**
     * @var bool|null
     */
    protected $bPersonneAContacterUrgencePrenom;

    /**
     * @var string|null
     */
    protected $personneAContacterUrgenceTel;

    /**
     * @var bool|null
     */
    protected $bPersonneAContacterUrgenceTel;

    /**
     * @var string|null
     */
    protected $personneAContacterUrgenceMel;

    /**
     * @var bool|null
     */
    protected $bPersonneAContacterUrgenceMel;

    /**
     * @var bool|null
     */
    protected $ribPourVirements;

    /**
     * @var bool|null
     */
    protected $bRibPourVirements;

    /**
     * @var float|null
     */
    protected $ribVersementPlafond;

    /**
     * @var bool|null
     */
    protected $bRibVersementPlafond;

    /**
     * @var bool|null
     */
    protected $paiementEspeces;

    /**
     * @var bool|null
     */
    protected $bPaiementEspeces;

    /**
     * @var int|null
     */
    protected $dureePeriodeEssai1;

    /**
     * @var bool|null
     */
    protected $bDureePeriodeEssai1;

    /**
     * @var int|null
     */
    protected $dureePeriodeEssai2;

    /**
     * @var bool|null
     */
    protected $bDureePeriodeEssai2;

    /**
     * @var int|null
     */
    protected $nbPersACharge;

    /**
     * @var bool|null
     */
    protected $bNbPersACharge;

    /**
     * @var string|null
     */
    protected $rib2;

    /**
     * @var bool|null
     */
    protected $bRib2;

    /**
     * @var string|null
     */
    protected $iBan2;

    /**
     * @var bool|null
     */
    protected $bIBan2;

    /**
     * @var string|null
     */
    protected $bic2;

    /**
     * @var bool|null
     */
    protected $bBic2;

    /**
     * @var bool|null
     */
    protected $rib2PourVirements;

    /**
     * @var bool|null
     */
    protected $bRib2PourVirements;

    /**
     * @var float|null
     */
    protected $rib2VersementPlafond;

    /**
     * @var bool|null
     */
    protected $bRib2VersementPlafond;

    /**
     * @var string|null
     */
    protected $rib3;

    /**
     * @var bool|null
     */
    protected $bRib3;

    /**
     * @var string|null
     */
    protected $iBan3;

    /**
     * @var bool|null
     */
    protected $bIBan3;

    /**
     * @var string|null
     */
    protected $bic3;

    /**
     * @var bool|null
     */
    protected $bBic3;

    /**
     * @var bool|null
     */
    protected $rib3PourVirements;

    /**
     * @var bool|null
     */
    protected $bRib3PourVirements;

    /**
     * @var float|null
     */
    protected $rib3VersementPlafond;

    /**
     * @var bool|null
     */
    protected $bRib3VersementPlafond;

    /**
     * @var int|null
     */
    protected $sexe;

    /**
     * @var bool|null
     */
    protected $bSexe;

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

    public function getNumeroSecuriteSociale(): ?string
    {
        return $this->numeroSecuriteSociale;
    }

    public function setNumeroSecuriteSociale(?string $numeroSecuriteSociale): self
    {
        $this->initialized['numeroSecuriteSociale'] = true;
        $this->numeroSecuriteSociale = $numeroSecuriteSociale;

        return $this;
    }

    public function getMatriculeSalarieModele(): ?string
    {
        return $this->matriculeSalarieModele;
    }

    public function setMatriculeSalarieModele(?string $matriculeSalarieModele): self
    {
        $this->initialized['matriculeSalarieModele'] = true;
        $this->matriculeSalarieModele = $matriculeSalarieModele;

        return $this;
    }

    public function getNumeroDossierSalarieModele(): ?string
    {
        return $this->numeroDossierSalarieModele;
    }

    public function setNumeroDossierSalarieModele(?string $numeroDossierSalarieModele): self
    {
        $this->initialized['numeroDossierSalarieModele'] = true;
        $this->numeroDossierSalarieModele = $numeroDossierSalarieModele;

        return $this;
    }

    public function getCopieIntegraleSalarieModele(): ?bool
    {
        return $this->copieIntegraleSalarieModele;
    }

    public function setCopieIntegraleSalarieModele(?bool $copieIntegraleSalarieModele): self
    {
        $this->initialized['copieIntegraleSalarieModele'] = true;
        $this->copieIntegraleSalarieModele = $copieIntegraleSalarieModele;

        return $this;
    }

    public function getCalculerElementsNaissance(): ?bool
    {
        return $this->calculerElementsNaissance;
    }

    public function setCalculerElementsNaissance(?bool $calculerElementsNaissance): self
    {
        $this->initialized['calculerElementsNaissance'] = true;
        $this->calculerElementsNaissance = $calculerElementsNaissance;

        return $this;
    }

    public function getCalculerCommune(): ?bool
    {
        return $this->calculerCommune;
    }

    public function setCalculerCommune(?bool $calculerCommune): self
    {
        $this->initialized['calculerCommune'] = true;
        $this->calculerCommune = $calculerCommune;

        return $this;
    }

    public function getMatriculeInterne(): ?string
    {
        return $this->matriculeInterne;
    }

    public function setMatriculeInterne(?string $matriculeInterne): self
    {
        $this->initialized['matriculeInterne'] = true;
        $this->matriculeInterne = $matriculeInterne;

        return $this;
    }

    public function getBMatriculeInterne(): ?bool
    {
        return $this->bMatriculeInterne;
    }

    public function setBMatriculeInterne(?bool $bMatriculeInterne): self
    {
        $this->initialized['bMatriculeInterne'] = true;
        $this->bMatriculeInterne = $bMatriculeInterne;

        return $this;
    }

    public function getNomNaissance(): ?string
    {
        return $this->nomNaissance;
    }

    public function setNomNaissance(?string $nomNaissance): self
    {
        $this->initialized['nomNaissance'] = true;
        $this->nomNaissance = $nomNaissance;

        return $this;
    }

    public function getBNomNaissance(): ?bool
    {
        return $this->bNomNaissance;
    }

    public function setBNomNaissance(?bool $bNomNaissance): self
    {
        $this->initialized['bNomNaissance'] = true;
        $this->bNomNaissance = $bNomNaissance;

        return $this;
    }

    public function getNomMarital(): ?string
    {
        return $this->nomMarital;
    }

    public function setNomMarital(?string $nomMarital): self
    {
        $this->initialized['nomMarital'] = true;
        $this->nomMarital = $nomMarital;

        return $this;
    }

    public function getBNomMarital(): ?bool
    {
        return $this->bNomMarital;
    }

    public function setBNomMarital(?bool $bNomMarital): self
    {
        $this->initialized['bNomMarital'] = true;
        $this->bNomMarital = $bNomMarital;

        return $this;
    }

    public function getNomUsuel(): ?string
    {
        return $this->nomUsuel;
    }

    public function setNomUsuel(?string $nomUsuel): self
    {
        $this->initialized['nomUsuel'] = true;
        $this->nomUsuel = $nomUsuel;

        return $this;
    }

    public function getBNomUsuel(): ?bool
    {
        return $this->bNomUsuel;
    }

    public function setBNomUsuel(?bool $bNomUsuel): self
    {
        $this->initialized['bNomUsuel'] = true;
        $this->bNomUsuel = $bNomUsuel;

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

    public function getBPrenom(): ?bool
    {
        return $this->bPrenom;
    }

    public function setBPrenom(?bool $bPrenom): self
    {
        $this->initialized['bPrenom'] = true;
        $this->bPrenom = $bPrenom;

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

    public function getBCivilite(): ?bool
    {
        return $this->bCivilite;
    }

    public function setBCivilite(?bool $bCivilite): self
    {
        $this->initialized['bCivilite'] = true;
        $this->bCivilite = $bCivilite;

        return $this;
    }

    public function getSituationFamiliale(): ?int
    {
        return $this->situationFamiliale;
    }

    public function setSituationFamiliale(?int $situationFamiliale): self
    {
        $this->initialized['situationFamiliale'] = true;
        $this->situationFamiliale = $situationFamiliale;

        return $this;
    }

    public function getBSituationFamiliale(): ?bool
    {
        return $this->bSituationFamiliale;
    }

    public function setBSituationFamiliale(?bool $bSituationFamiliale): self
    {
        $this->initialized['bSituationFamiliale'] = true;
        $this->bSituationFamiliale = $bSituationFamiliale;

        return $this;
    }

    public function getDateNaissance(): ?\DateTime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?\DateTime $dateNaissance): self
    {
        $this->initialized['dateNaissance'] = true;
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getBDateNaissance(): ?bool
    {
        return $this->bDateNaissance;
    }

    public function setBDateNaissance(?bool $bDateNaissance): self
    {
        $this->initialized['bDateNaissance'] = true;
        $this->bDateNaissance = $bDateNaissance;

        return $this;
    }

    public function getDepartementNaissance(): ?string
    {
        return $this->departementNaissance;
    }

    public function setDepartementNaissance(?string $departementNaissance): self
    {
        $this->initialized['departementNaissance'] = true;
        $this->departementNaissance = $departementNaissance;

        return $this;
    }

    public function getBDepartementNaissance(): ?bool
    {
        return $this->bDepartementNaissance;
    }

    public function setBDepartementNaissance(?bool $bDepartementNaissance): self
    {
        $this->initialized['bDepartementNaissance'] = true;
        $this->bDepartementNaissance = $bDepartementNaissance;

        return $this;
    }

    public function getCommuneNaissance(): ?string
    {
        return $this->communeNaissance;
    }

    public function setCommuneNaissance(?string $communeNaissance): self
    {
        $this->initialized['communeNaissance'] = true;
        $this->communeNaissance = $communeNaissance;

        return $this;
    }

    public function getBCommuneNaissance(): ?bool
    {
        return $this->bCommuneNaissance;
    }

    public function setBCommuneNaissance(?bool $bCommuneNaissance): self
    {
        $this->initialized['bCommuneNaissance'] = true;
        $this->bCommuneNaissance = $bCommuneNaissance;

        return $this;
    }

    public function getCodePaysNaissance(): ?string
    {
        return $this->codePaysNaissance;
    }

    public function setCodePaysNaissance(?string $codePaysNaissance): self
    {
        $this->initialized['codePaysNaissance'] = true;
        $this->codePaysNaissance = $codePaysNaissance;

        return $this;
    }

    public function getBCodePaysNaissance(): ?bool
    {
        return $this->bCodePaysNaissance;
    }

    public function setBCodePaysNaissance(?bool $bCodePaysNaissance): self
    {
        $this->initialized['bCodePaysNaissance'] = true;
        $this->bCodePaysNaissance = $bCodePaysNaissance;

        return $this;
    }

    public function getPaysNaissance(): ?string
    {
        return $this->paysNaissance;
    }

    public function setPaysNaissance(?string $paysNaissance): self
    {
        $this->initialized['paysNaissance'] = true;
        $this->paysNaissance = $paysNaissance;

        return $this;
    }

    public function getBPaysNaissance(): ?bool
    {
        return $this->bPaysNaissance;
    }

    public function setBPaysNaissance(?bool $bPaysNaissance): self
    {
        $this->initialized['bPaysNaissance'] = true;
        $this->bPaysNaissance = $bPaysNaissance;

        return $this;
    }

    public function getCodePaysNationalite(): ?string
    {
        return $this->codePaysNationalite;
    }

    public function setCodePaysNationalite(?string $codePaysNationalite): self
    {
        $this->initialized['codePaysNationalite'] = true;
        $this->codePaysNationalite = $codePaysNationalite;

        return $this;
    }

    public function getBCodePaysNationalite(): ?bool
    {
        return $this->bCodePaysNationalite;
    }

    public function setBCodePaysNationalite(?bool $bCodePaysNationalite): self
    {
        $this->initialized['bCodePaysNationalite'] = true;
        $this->bCodePaysNationalite = $bCodePaysNationalite;

        return $this;
    }

    public function getPaysNationalite(): ?string
    {
        return $this->paysNationalite;
    }

    public function setPaysNationalite(?string $paysNationalite): self
    {
        $this->initialized['paysNationalite'] = true;
        $this->paysNationalite = $paysNationalite;

        return $this;
    }

    public function getBPaysNationalite(): ?bool
    {
        return $this->bPaysNationalite;
    }

    public function setBPaysNationalite(?bool $bPaysNationalite): self
    {
        $this->initialized['bPaysNationalite'] = true;
        $this->bPaysNationalite = $bPaysNationalite;

        return $this;
    }

    public function getTitreSejourType(): ?int
    {
        return $this->titreSejourType;
    }

    public function setTitreSejourType(?int $titreSejourType): self
    {
        $this->initialized['titreSejourType'] = true;
        $this->titreSejourType = $titreSejourType;

        return $this;
    }

    public function getBTitreSejourType(): ?bool
    {
        return $this->bTitreSejourType;
    }

    public function setBTitreSejourType(?bool $bTitreSejourType): self
    {
        $this->initialized['bTitreSejourType'] = true;
        $this->bTitreSejourType = $bTitreSejourType;

        return $this;
    }

    public function getTitreSejourNumeroOrdre(): ?string
    {
        return $this->titreSejourNumeroOrdre;
    }

    public function setTitreSejourNumeroOrdre(?string $titreSejourNumeroOrdre): self
    {
        $this->initialized['titreSejourNumeroOrdre'] = true;
        $this->titreSejourNumeroOrdre = $titreSejourNumeroOrdre;

        return $this;
    }

    public function getBTitreSejourNumeroOrdre(): ?bool
    {
        return $this->bTitreSejourNumeroOrdre;
    }

    public function setBTitreSejourNumeroOrdre(?bool $bTitreSejourNumeroOrdre): self
    {
        $this->initialized['bTitreSejourNumeroOrdre'] = true;
        $this->bTitreSejourNumeroOrdre = $bTitreSejourNumeroOrdre;

        return $this;
    }

    public function getTitreSejourDebut(): ?\DateTime
    {
        return $this->titreSejourDebut;
    }

    public function setTitreSejourDebut(?\DateTime $titreSejourDebut): self
    {
        $this->initialized['titreSejourDebut'] = true;
        $this->titreSejourDebut = $titreSejourDebut;

        return $this;
    }

    public function getBTitreSejourDebut(): ?bool
    {
        return $this->bTitreSejourDebut;
    }

    public function setBTitreSejourDebut(?bool $bTitreSejourDebut): self
    {
        $this->initialized['bTitreSejourDebut'] = true;
        $this->bTitreSejourDebut = $bTitreSejourDebut;

        return $this;
    }

    public function getTitreSejourFin(): ?\DateTime
    {
        return $this->titreSejourFin;
    }

    public function setTitreSejourFin(?\DateTime $titreSejourFin): self
    {
        $this->initialized['titreSejourFin'] = true;
        $this->titreSejourFin = $titreSejourFin;

        return $this;
    }

    public function getBTitreSejourFin(): ?bool
    {
        return $this->bTitreSejourFin;
    }

    public function setBTitreSejourFin(?bool $bTitreSejourFin): self
    {
        $this->initialized['bTitreSejourFin'] = true;
        $this->bTitreSejourFin = $bTitreSejourFin;

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

    public function getBNumVoie(): ?bool
    {
        return $this->bNumVoie;
    }

    public function setBNumVoie(?bool $bNumVoie): self
    {
        $this->initialized['bNumVoie'] = true;
        $this->bNumVoie = $bNumVoie;

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

    public function getBBTQC(): ?bool
    {
        return $this->bBTQC;
    }

    public function setBBTQC(?bool $bBTQC): self
    {
        $this->initialized['bBTQC'] = true;
        $this->bBTQC = $bBTQC;

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

    public function getBNomVoie(): ?bool
    {
        return $this->bNomVoie;
    }

    public function setBNomVoie(?bool $bNomVoie): self
    {
        $this->initialized['bNomVoie'] = true;
        $this->bNomVoie = $bNomVoie;

        return $this;
    }

    public function getComplement(): ?string
    {
        return $this->complement;
    }

    public function setComplement(?string $complement): self
    {
        $this->initialized['complement'] = true;
        $this->complement = $complement;

        return $this;
    }

    public function getBComplement(): ?bool
    {
        return $this->bComplement;
    }

    public function setBComplement(?bool $bComplement): self
    {
        $this->initialized['bComplement'] = true;
        $this->bComplement = $bComplement;

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

    public function getBCodePostal(): ?bool
    {
        return $this->bCodePostal;
    }

    public function setBCodePostal(?bool $bCodePostal): self
    {
        $this->initialized['bCodePostal'] = true;
        $this->bCodePostal = $bCodePostal;

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

    public function getBNomVille(): ?bool
    {
        return $this->bNomVille;
    }

    public function setBNomVille(?bool $bNomVille): self
    {
        $this->initialized['bNomVille'] = true;
        $this->bNomVille = $bNomVille;

        return $this;
    }

    public function getCodeOfficielCommune(): ?string
    {
        return $this->codeOfficielCommune;
    }

    public function setCodeOfficielCommune(?string $codeOfficielCommune): self
    {
        $this->initialized['codeOfficielCommune'] = true;
        $this->codeOfficielCommune = $codeOfficielCommune;

        return $this;
    }

    public function getBCodeOfficielCommune(): ?bool
    {
        return $this->bCodeOfficielCommune;
    }

    public function setBCodeOfficielCommune(?bool $bCodeOfficielCommune): self
    {
        $this->initialized['bCodeOfficielCommune'] = true;
        $this->bCodeOfficielCommune = $bCodeOfficielCommune;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(?string $commune): self
    {
        $this->initialized['commune'] = true;
        $this->commune = $commune;

        return $this;
    }

    public function getBCommune(): ?bool
    {
        return $this->bCommune;
    }

    public function setBCommune(?bool $bCommune): self
    {
        $this->initialized['bCommune'] = true;
        $this->bCommune = $bCommune;

        return $this;
    }

    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    public function setCodePays(?string $codePays): self
    {
        $this->initialized['codePays'] = true;
        $this->codePays = $codePays;

        return $this;
    }

    public function getBCodePays(): ?bool
    {
        return $this->bCodePays;
    }

    public function setBCodePays(?bool $bCodePays): self
    {
        $this->initialized['bCodePays'] = true;
        $this->bCodePays = $bCodePays;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): self
    {
        $this->initialized['pays'] = true;
        $this->pays = $pays;

        return $this;
    }

    public function getBPays(): ?bool
    {
        return $this->bPays;
    }

    public function setBPays(?bool $bPays): self
    {
        $this->initialized['bPays'] = true;
        $this->bPays = $bPays;

        return $this;
    }

    public function getDomicilieFiscalementHorsFrance(): ?bool
    {
        return $this->domicilieFiscalementHorsFrance;
    }

    public function setDomicilieFiscalementHorsFrance(?bool $domicilieFiscalementHorsFrance): self
    {
        $this->initialized['domicilieFiscalementHorsFrance'] = true;
        $this->domicilieFiscalementHorsFrance = $domicilieFiscalementHorsFrance;

        return $this;
    }

    public function getBDomicilieFiscalementHorsFrance(): ?bool
    {
        return $this->bDomicilieFiscalementHorsFrance;
    }

    public function setBDomicilieFiscalementHorsFrance(?bool $bDomicilieFiscalementHorsFrance): self
    {
        $this->initialized['bDomicilieFiscalementHorsFrance'] = true;
        $this->bDomicilieFiscalementHorsFrance = $bDomicilieFiscalementHorsFrance;

        return $this;
    }

    public function getTelDomicile(): ?string
    {
        return $this->telDomicile;
    }

    public function setTelDomicile(?string $telDomicile): self
    {
        $this->initialized['telDomicile'] = true;
        $this->telDomicile = $telDomicile;

        return $this;
    }

    public function getBTelDomicile(): ?bool
    {
        return $this->bTelDomicile;
    }

    public function setBTelDomicile(?bool $bTelDomicile): self
    {
        $this->initialized['bTelDomicile'] = true;
        $this->bTelDomicile = $bTelDomicile;

        return $this;
    }

    public function getTelPortable(): ?string
    {
        return $this->telPortable;
    }

    public function setTelPortable(?string $telPortable): self
    {
        $this->initialized['telPortable'] = true;
        $this->telPortable = $telPortable;

        return $this;
    }

    public function getBTelPortable(): ?bool
    {
        return $this->bTelPortable;
    }

    public function setBTelPortable(?bool $bTelPortable): self
    {
        $this->initialized['bTelPortable'] = true;
        $this->bTelPortable = $bTelPortable;

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

    public function getBEMail(): ?bool
    {
        return $this->bEMail;
    }

    public function setBEMail(?bool $bEMail): self
    {
        $this->initialized['bEMail'] = true;
        $this->bEMail = $bEMail;

        return $this;
    }

    public function getRib(): ?string
    {
        return $this->rib;
    }

    public function setRib(?string $rib): self
    {
        $this->initialized['rib'] = true;
        $this->rib = $rib;

        return $this;
    }

    public function getBRib(): ?bool
    {
        return $this->bRib;
    }

    public function setBRib(?bool $bRib): self
    {
        $this->initialized['bRib'] = true;
        $this->bRib = $bRib;

        return $this;
    }

    public function getIBan(): ?string
    {
        return $this->iBan;
    }

    public function setIBan(?string $iBan): self
    {
        $this->initialized['iBan'] = true;
        $this->iBan = $iBan;

        return $this;
    }

    public function getBIBan(): ?bool
    {
        return $this->bIBan;
    }

    public function setBIBan(?bool $bIBan): self
    {
        $this->initialized['bIBan'] = true;
        $this->bIBan = $bIBan;

        return $this;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): self
    {
        $this->initialized['bic'] = true;
        $this->bic = $bic;

        return $this;
    }

    public function getBBic(): ?bool
    {
        return $this->bBic;
    }

    public function setBBic(?bool $bBic): self
    {
        $this->initialized['bBic'] = true;
        $this->bBic = $bBic;

        return $this;
    }

    public function getAffectation1(): ?string
    {
        return $this->affectation1;
    }

    public function setAffectation1(?string $affectation1): self
    {
        $this->initialized['affectation1'] = true;
        $this->affectation1 = $affectation1;

        return $this;
    }

    public function getBAffectation1(): ?bool
    {
        return $this->bAffectation1;
    }

    public function setBAffectation1(?bool $bAffectation1): self
    {
        $this->initialized['bAffectation1'] = true;
        $this->bAffectation1 = $bAffectation1;

        return $this;
    }

    public function getAffectation2(): ?string
    {
        return $this->affectation2;
    }

    public function setAffectation2(?string $affectation2): self
    {
        $this->initialized['affectation2'] = true;
        $this->affectation2 = $affectation2;

        return $this;
    }

    public function getBAffectation2(): ?bool
    {
        return $this->bAffectation2;
    }

    public function setBAffectation2(?bool $bAffectation2): self
    {
        $this->initialized['bAffectation2'] = true;
        $this->bAffectation2 = $bAffectation2;

        return $this;
    }

    public function getAffectation3(): ?string
    {
        return $this->affectation3;
    }

    public function setAffectation3(?string $affectation3): self
    {
        $this->initialized['affectation3'] = true;
        $this->affectation3 = $affectation3;

        return $this;
    }

    public function getBAffectation3(): ?bool
    {
        return $this->bAffectation3;
    }

    public function setBAffectation3(?bool $bAffectation3): self
    {
        $this->initialized['bAffectation3'] = true;
        $this->bAffectation3 = $bAffectation3;

        return $this;
    }

    public function getAffectation4(): ?string
    {
        return $this->affectation4;
    }

    public function setAffectation4(?string $affectation4): self
    {
        $this->initialized['affectation4'] = true;
        $this->affectation4 = $affectation4;

        return $this;
    }

    public function getBAffectation4(): ?bool
    {
        return $this->bAffectation4;
    }

    public function setBAffectation4(?bool $bAffectation4): self
    {
        $this->initialized['bAffectation4'] = true;
        $this->bAffectation4 = $bAffectation4;

        return $this;
    }

    public function getAffectation5(): ?string
    {
        return $this->affectation5;
    }

    public function setAffectation5(?string $affectation5): self
    {
        $this->initialized['affectation5'] = true;
        $this->affectation5 = $affectation5;

        return $this;
    }

    public function getBAffectation5(): ?bool
    {
        return $this->bAffectation5;
    }

    public function setBAffectation5(?bool $bAffectation5): self
    {
        $this->initialized['bAffectation5'] = true;
        $this->bAffectation5 = $bAffectation5;

        return $this;
    }

    public function getAffectation6(): ?string
    {
        return $this->affectation6;
    }

    public function setAffectation6(?string $affectation6): self
    {
        $this->initialized['affectation6'] = true;
        $this->affectation6 = $affectation6;

        return $this;
    }

    public function getBAffectation6(): ?bool
    {
        return $this->bAffectation6;
    }

    public function setBAffectation6(?bool $bAffectation6): self
    {
        $this->initialized['bAffectation6'] = true;
        $this->bAffectation6 = $bAffectation6;

        return $this;
    }

    public function getAffectation7(): ?string
    {
        return $this->affectation7;
    }

    public function setAffectation7(?string $affectation7): self
    {
        $this->initialized['affectation7'] = true;
        $this->affectation7 = $affectation7;

        return $this;
    }

    public function getBAffectation7(): ?bool
    {
        return $this->bAffectation7;
    }

    public function setBAffectation7(?bool $bAffectation7): self
    {
        $this->initialized['bAffectation7'] = true;
        $this->bAffectation7 = $bAffectation7;

        return $this;
    }

    /**
     * @return list<Emploi>|null
     */
    public function getEmplois(): ?array
    {
        return $this->emplois;
    }

    /**
     * @param list<Emploi>|null $emplois
     */
    public function setEmplois(?array $emplois): self
    {
        $this->initialized['emplois'] = true;
        $this->emplois = $emplois;

        return $this;
    }

    public function getAnneeNaissance(): ?int
    {
        return $this->anneeNaissance;
    }

    public function setAnneeNaissance(?int $anneeNaissance): self
    {
        $this->initialized['anneeNaissance'] = true;
        $this->anneeNaissance = $anneeNaissance;

        return $this;
    }

    public function getBAnneeNaissance(): ?bool
    {
        return $this->bAnneeNaissance;
    }

    public function setBAnneeNaissance(?bool $bAnneeNaissance): self
    {
        $this->initialized['bAnneeNaissance'] = true;
        $this->bAnneeNaissance = $bAnneeNaissance;

        return $this;
    }

    public function getEMailPro(): ?string
    {
        return $this->eMailPro;
    }

    public function setEMailPro(?string $eMailPro): self
    {
        $this->initialized['eMailPro'] = true;
        $this->eMailPro = $eMailPro;

        return $this;
    }

    public function getBEMailPro(): ?bool
    {
        return $this->bEMailPro;
    }

    public function setBEMailPro(?bool $bEMailPro): self
    {
        $this->initialized['bEMailPro'] = true;
        $this->bEMailPro = $bEMailPro;

        return $this;
    }

    public function getPersonneAContacterUrgenceNom(): ?string
    {
        return $this->personneAContacterUrgenceNom;
    }

    public function setPersonneAContacterUrgenceNom(?string $personneAContacterUrgenceNom): self
    {
        $this->initialized['personneAContacterUrgenceNom'] = true;
        $this->personneAContacterUrgenceNom = $personneAContacterUrgenceNom;

        return $this;
    }

    public function getBPersonneAContacterUrgenceNom(): ?bool
    {
        return $this->bPersonneAContacterUrgenceNom;
    }

    public function setBPersonneAContacterUrgenceNom(?bool $bPersonneAContacterUrgenceNom): self
    {
        $this->initialized['bPersonneAContacterUrgenceNom'] = true;
        $this->bPersonneAContacterUrgenceNom = $bPersonneAContacterUrgenceNom;

        return $this;
    }

    public function getPersonneAContacterUrgencePrenom(): ?string
    {
        return $this->personneAContacterUrgencePrenom;
    }

    public function setPersonneAContacterUrgencePrenom(?string $personneAContacterUrgencePrenom): self
    {
        $this->initialized['personneAContacterUrgencePrenom'] = true;
        $this->personneAContacterUrgencePrenom = $personneAContacterUrgencePrenom;

        return $this;
    }

    public function getBPersonneAContacterUrgencePrenom(): ?bool
    {
        return $this->bPersonneAContacterUrgencePrenom;
    }

    public function setBPersonneAContacterUrgencePrenom(?bool $bPersonneAContacterUrgencePrenom): self
    {
        $this->initialized['bPersonneAContacterUrgencePrenom'] = true;
        $this->bPersonneAContacterUrgencePrenom = $bPersonneAContacterUrgencePrenom;

        return $this;
    }

    public function getPersonneAContacterUrgenceTel(): ?string
    {
        return $this->personneAContacterUrgenceTel;
    }

    public function setPersonneAContacterUrgenceTel(?string $personneAContacterUrgenceTel): self
    {
        $this->initialized['personneAContacterUrgenceTel'] = true;
        $this->personneAContacterUrgenceTel = $personneAContacterUrgenceTel;

        return $this;
    }

    public function getBPersonneAContacterUrgenceTel(): ?bool
    {
        return $this->bPersonneAContacterUrgenceTel;
    }

    public function setBPersonneAContacterUrgenceTel(?bool $bPersonneAContacterUrgenceTel): self
    {
        $this->initialized['bPersonneAContacterUrgenceTel'] = true;
        $this->bPersonneAContacterUrgenceTel = $bPersonneAContacterUrgenceTel;

        return $this;
    }

    public function getPersonneAContacterUrgenceMel(): ?string
    {
        return $this->personneAContacterUrgenceMel;
    }

    public function setPersonneAContacterUrgenceMel(?string $personneAContacterUrgenceMel): self
    {
        $this->initialized['personneAContacterUrgenceMel'] = true;
        $this->personneAContacterUrgenceMel = $personneAContacterUrgenceMel;

        return $this;
    }

    public function getBPersonneAContacterUrgenceMel(): ?bool
    {
        return $this->bPersonneAContacterUrgenceMel;
    }

    public function setBPersonneAContacterUrgenceMel(?bool $bPersonneAContacterUrgenceMel): self
    {
        $this->initialized['bPersonneAContacterUrgenceMel'] = true;
        $this->bPersonneAContacterUrgenceMel = $bPersonneAContacterUrgenceMel;

        return $this;
    }

    public function getRibPourVirements(): ?bool
    {
        return $this->ribPourVirements;
    }

    public function setRibPourVirements(?bool $ribPourVirements): self
    {
        $this->initialized['ribPourVirements'] = true;
        $this->ribPourVirements = $ribPourVirements;

        return $this;
    }

    public function getBRibPourVirements(): ?bool
    {
        return $this->bRibPourVirements;
    }

    public function setBRibPourVirements(?bool $bRibPourVirements): self
    {
        $this->initialized['bRibPourVirements'] = true;
        $this->bRibPourVirements = $bRibPourVirements;

        return $this;
    }

    public function getRibVersementPlafond(): ?float
    {
        return $this->ribVersementPlafond;
    }

    public function setRibVersementPlafond(?float $ribVersementPlafond): self
    {
        $this->initialized['ribVersementPlafond'] = true;
        $this->ribVersementPlafond = $ribVersementPlafond;

        return $this;
    }

    public function getBRibVersementPlafond(): ?bool
    {
        return $this->bRibVersementPlafond;
    }

    public function setBRibVersementPlafond(?bool $bRibVersementPlafond): self
    {
        $this->initialized['bRibVersementPlafond'] = true;
        $this->bRibVersementPlafond = $bRibVersementPlafond;

        return $this;
    }

    public function getPaiementEspeces(): ?bool
    {
        return $this->paiementEspeces;
    }

    public function setPaiementEspeces(?bool $paiementEspeces): self
    {
        $this->initialized['paiementEspeces'] = true;
        $this->paiementEspeces = $paiementEspeces;

        return $this;
    }

    public function getBPaiementEspeces(): ?bool
    {
        return $this->bPaiementEspeces;
    }

    public function setBPaiementEspeces(?bool $bPaiementEspeces): self
    {
        $this->initialized['bPaiementEspeces'] = true;
        $this->bPaiementEspeces = $bPaiementEspeces;

        return $this;
    }

    public function getDureePeriodeEssai1(): ?int
    {
        return $this->dureePeriodeEssai1;
    }

    public function setDureePeriodeEssai1(?int $dureePeriodeEssai1): self
    {
        $this->initialized['dureePeriodeEssai1'] = true;
        $this->dureePeriodeEssai1 = $dureePeriodeEssai1;

        return $this;
    }

    public function getBDureePeriodeEssai1(): ?bool
    {
        return $this->bDureePeriodeEssai1;
    }

    public function setBDureePeriodeEssai1(?bool $bDureePeriodeEssai1): self
    {
        $this->initialized['bDureePeriodeEssai1'] = true;
        $this->bDureePeriodeEssai1 = $bDureePeriodeEssai1;

        return $this;
    }

    public function getDureePeriodeEssai2(): ?int
    {
        return $this->dureePeriodeEssai2;
    }

    public function setDureePeriodeEssai2(?int $dureePeriodeEssai2): self
    {
        $this->initialized['dureePeriodeEssai2'] = true;
        $this->dureePeriodeEssai2 = $dureePeriodeEssai2;

        return $this;
    }

    public function getBDureePeriodeEssai2(): ?bool
    {
        return $this->bDureePeriodeEssai2;
    }

    public function setBDureePeriodeEssai2(?bool $bDureePeriodeEssai2): self
    {
        $this->initialized['bDureePeriodeEssai2'] = true;
        $this->bDureePeriodeEssai2 = $bDureePeriodeEssai2;

        return $this;
    }

    public function getNbPersACharge(): ?int
    {
        return $this->nbPersACharge;
    }

    public function setNbPersACharge(?int $nbPersACharge): self
    {
        $this->initialized['nbPersACharge'] = true;
        $this->nbPersACharge = $nbPersACharge;

        return $this;
    }

    public function getBNbPersACharge(): ?bool
    {
        return $this->bNbPersACharge;
    }

    public function setBNbPersACharge(?bool $bNbPersACharge): self
    {
        $this->initialized['bNbPersACharge'] = true;
        $this->bNbPersACharge = $bNbPersACharge;

        return $this;
    }

    public function getRib2(): ?string
    {
        return $this->rib2;
    }

    public function setRib2(?string $rib2): self
    {
        $this->initialized['rib2'] = true;
        $this->rib2 = $rib2;

        return $this;
    }

    public function getBRib2(): ?bool
    {
        return $this->bRib2;
    }

    public function setBRib2(?bool $bRib2): self
    {
        $this->initialized['bRib2'] = true;
        $this->bRib2 = $bRib2;

        return $this;
    }

    public function getIBan2(): ?string
    {
        return $this->iBan2;
    }

    public function setIBan2(?string $iBan2): self
    {
        $this->initialized['iBan2'] = true;
        $this->iBan2 = $iBan2;

        return $this;
    }

    public function getBIBan2(): ?bool
    {
        return $this->bIBan2;
    }

    public function setBIBan2(?bool $bIBan2): self
    {
        $this->initialized['bIBan2'] = true;
        $this->bIBan2 = $bIBan2;

        return $this;
    }

    public function getBic2(): ?string
    {
        return $this->bic2;
    }

    public function setBic2(?string $bic2): self
    {
        $this->initialized['bic2'] = true;
        $this->bic2 = $bic2;

        return $this;
    }

    public function getBBic2(): ?bool
    {
        return $this->bBic2;
    }

    public function setBBic2(?bool $bBic2): self
    {
        $this->initialized['bBic2'] = true;
        $this->bBic2 = $bBic2;

        return $this;
    }

    public function getRib2PourVirements(): ?bool
    {
        return $this->rib2PourVirements;
    }

    public function setRib2PourVirements(?bool $rib2PourVirements): self
    {
        $this->initialized['rib2PourVirements'] = true;
        $this->rib2PourVirements = $rib2PourVirements;

        return $this;
    }

    public function getBRib2PourVirements(): ?bool
    {
        return $this->bRib2PourVirements;
    }

    public function setBRib2PourVirements(?bool $bRib2PourVirements): self
    {
        $this->initialized['bRib2PourVirements'] = true;
        $this->bRib2PourVirements = $bRib2PourVirements;

        return $this;
    }

    public function getRib2VersementPlafond(): ?float
    {
        return $this->rib2VersementPlafond;
    }

    public function setRib2VersementPlafond(?float $rib2VersementPlafond): self
    {
        $this->initialized['rib2VersementPlafond'] = true;
        $this->rib2VersementPlafond = $rib2VersementPlafond;

        return $this;
    }

    public function getBRib2VersementPlafond(): ?bool
    {
        return $this->bRib2VersementPlafond;
    }

    public function setBRib2VersementPlafond(?bool $bRib2VersementPlafond): self
    {
        $this->initialized['bRib2VersementPlafond'] = true;
        $this->bRib2VersementPlafond = $bRib2VersementPlafond;

        return $this;
    }

    public function getRib3(): ?string
    {
        return $this->rib3;
    }

    public function setRib3(?string $rib3): self
    {
        $this->initialized['rib3'] = true;
        $this->rib3 = $rib3;

        return $this;
    }

    public function getBRib3(): ?bool
    {
        return $this->bRib3;
    }

    public function setBRib3(?bool $bRib3): self
    {
        $this->initialized['bRib3'] = true;
        $this->bRib3 = $bRib3;

        return $this;
    }

    public function getIBan3(): ?string
    {
        return $this->iBan3;
    }

    public function setIBan3(?string $iBan3): self
    {
        $this->initialized['iBan3'] = true;
        $this->iBan3 = $iBan3;

        return $this;
    }

    public function getBIBan3(): ?bool
    {
        return $this->bIBan3;
    }

    public function setBIBan3(?bool $bIBan3): self
    {
        $this->initialized['bIBan3'] = true;
        $this->bIBan3 = $bIBan3;

        return $this;
    }

    public function getBic3(): ?string
    {
        return $this->bic3;
    }

    public function setBic3(?string $bic3): self
    {
        $this->initialized['bic3'] = true;
        $this->bic3 = $bic3;

        return $this;
    }

    public function getBBic3(): ?bool
    {
        return $this->bBic3;
    }

    public function setBBic3(?bool $bBic3): self
    {
        $this->initialized['bBic3'] = true;
        $this->bBic3 = $bBic3;

        return $this;
    }

    public function getRib3PourVirements(): ?bool
    {
        return $this->rib3PourVirements;
    }

    public function setRib3PourVirements(?bool $rib3PourVirements): self
    {
        $this->initialized['rib3PourVirements'] = true;
        $this->rib3PourVirements = $rib3PourVirements;

        return $this;
    }

    public function getBRib3PourVirements(): ?bool
    {
        return $this->bRib3PourVirements;
    }

    public function setBRib3PourVirements(?bool $bRib3PourVirements): self
    {
        $this->initialized['bRib3PourVirements'] = true;
        $this->bRib3PourVirements = $bRib3PourVirements;

        return $this;
    }

    public function getRib3VersementPlafond(): ?float
    {
        return $this->rib3VersementPlafond;
    }

    public function setRib3VersementPlafond(?float $rib3VersementPlafond): self
    {
        $this->initialized['rib3VersementPlafond'] = true;
        $this->rib3VersementPlafond = $rib3VersementPlafond;

        return $this;
    }

    public function getBRib3VersementPlafond(): ?bool
    {
        return $this->bRib3VersementPlafond;
    }

    public function setBRib3VersementPlafond(?bool $bRib3VersementPlafond): self
    {
        $this->initialized['bRib3VersementPlafond'] = true;
        $this->bRib3VersementPlafond = $bRib3VersementPlafond;

        return $this;
    }

    public function getSexe(): ?int
    {
        return $this->sexe;
    }

    public function setSexe(?int $sexe): self
    {
        $this->initialized['sexe'] = true;
        $this->sexe = $sexe;

        return $this;
    }

    public function getBSexe(): ?bool
    {
        return $this->bSexe;
    }

    public function setBSexe(?bool $bSexe): self
    {
        $this->initialized['bSexe'] = true;
        $this->bSexe = $bSexe;

        return $this;
    }
}
