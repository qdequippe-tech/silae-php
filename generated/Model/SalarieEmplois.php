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
}
