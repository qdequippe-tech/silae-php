<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class LectureInformationsSalarie
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
    protected $matriculeInterne;

    /**
     * @var int|null
     */
    protected $civilite;

    /**
     * @var int|null
     */
    protected $sexe;

    /**
     * @var string|null
     */
    protected $nomNaissance;

    /**
     * @var string|null
     */
    protected $nomMarital;

    /**
     * @var string|null
     */
    protected $nomUsuel;

    /**
     * @var string|null
     */
    protected $prenom;

    /**
     * @var string|null
     */
    protected $numeroSecuriteSociale;

    /**
     * @var int|null
     */
    protected $situationFamiliale;

    /**
     * @var \DateTime|null
     */
    protected $dateNaissance;

    /**
     * @var int|null
     */
    protected $anneeNaissance;

    /**
     * @var string|null
     */
    protected $departementNaissance;

    /**
     * @var string|null
     */
    protected $communeNaissance;

    /**
     * @var string|null
     */
    protected $paysNaissanceISO;

    /**
     * @var string|null
     */
    protected $paysNaissance;

    /**
     * @var string|null
     */
    protected $paysNationaliteISO;

    /**
     * @var string|null
     */
    protected $paysNationalite;

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
    protected $complementAdresse;

    /**
     * @var string|null
     */
    protected $codePostal;

    /**
     * @var string|null
     */
    protected $nomVille;

    /**
     * @var bool|null
     */
    protected $frontalier;

    /**
     * @var string|null
     */
    protected $communeINSEE;

    /**
     * @var string|null
     */
    protected $commune;

    /**
     * @var string|null
     */
    protected $paysISO;

    /**
     * @var string|null
     */
    protected $nomPays;

    /**
     * @var string|null
     */
    protected $telDomicile;

    /**
     * @var string|null
     */
    protected $telPortable;

    /**
     * @var string|null
     */
    protected $telBureau;

    /**
     * @var string|null
     */
    protected $telPortablePro;

    /**
     * @var string|null
     */
    protected $melPerso;

    /**
     * @var string|null
     */
    protected $mel;

    /**
     * @var string|null
     */
    protected $personneAContacterUrgenceNom;

    /**
     * @var string|null
     */
    protected $personneAContacterUrgencePrenom;

    /**
     * @var string|null
     */
    protected $personneAContacterUrgenceTel;

    /**
     * @var string|null
     */
    protected $personneAContacterUrgenceMel;

    /**
     * @var string|null
     */
    protected $enTCode;

    /**
     * @var string|null
     */
    protected $enVCode;

    /**
     * @var string|null
     */
    protected $edPCode;

    /**
     * @var string|null
     */
    protected $etudesInfosComplementaires;

    /**
     * @var string|null
     */
    protected $formationPlusEleve;

    /**
     * @var string|null
     */
    protected $diplomePrepare;

    /**
     * @var string|null
     */
    protected $situationAvantEmbauche;

    /**
     * @var string|null
     */
    protected $dureePeriodeEssai1;

    /**
     * @var string|null
     */
    protected $dureePeriodeEssai2;

    /**
     * @var string|null
     */
    protected $pointure;

    /**
     * @var string|null
     */
    protected $tailleHaut;

    /**
     * @var string|null
     */
    protected $taillePantalon;

    /**
     * @var string|null
     */
    protected $tourDeTete;

    /**
     * @var string|null
     */
    protected $tourDeCou;

    /**
     * @var int|null
     */
    protected $titreSejourType;

    /**
     * @var string|null
     */
    protected $titreSejourNumOrdre;

    /**
     * @var \DateTime|null
     */
    protected $titreSejourDebut;

    /**
     * @var \DateTime|null
     */
    protected $titreSejourFin;

    /**
     * @var bool|null
     */
    protected $surveillanceMedRenforcee;

    /**
     * @var list<LectureInformationsSalarieEmploi>|null
     */
    protected $emplois;

    /**
     * @var string|null
     */
    protected $numeroDossier;

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

    public function getPaysNaissanceISO(): ?string
    {
        return $this->paysNaissanceISO;
    }

    public function setPaysNaissanceISO(?string $paysNaissanceISO): self
    {
        $this->initialized['paysNaissanceISO'] = true;
        $this->paysNaissanceISO = $paysNaissanceISO;

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

    public function getPaysNationaliteISO(): ?string
    {
        return $this->paysNationaliteISO;
    }

    public function setPaysNationaliteISO(?string $paysNationaliteISO): self
    {
        $this->initialized['paysNationaliteISO'] = true;
        $this->paysNationaliteISO = $paysNationaliteISO;

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

    public function getComplementAdresse(): ?string
    {
        return $this->complementAdresse;
    }

    public function setComplementAdresse(?string $complementAdresse): self
    {
        $this->initialized['complementAdresse'] = true;
        $this->complementAdresse = $complementAdresse;

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

    public function getFrontalier(): ?bool
    {
        return $this->frontalier;
    }

    public function setFrontalier(?bool $frontalier): self
    {
        $this->initialized['frontalier'] = true;
        $this->frontalier = $frontalier;

        return $this;
    }

    public function getCommuneINSEE(): ?string
    {
        return $this->communeINSEE;
    }

    public function setCommuneINSEE(?string $communeINSEE): self
    {
        $this->initialized['communeINSEE'] = true;
        $this->communeINSEE = $communeINSEE;

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

    public function getPaysISO(): ?string
    {
        return $this->paysISO;
    }

    public function setPaysISO(?string $paysISO): self
    {
        $this->initialized['paysISO'] = true;
        $this->paysISO = $paysISO;

        return $this;
    }

    public function getNomPays(): ?string
    {
        return $this->nomPays;
    }

    public function setNomPays(?string $nomPays): self
    {
        $this->initialized['nomPays'] = true;
        $this->nomPays = $nomPays;

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

    public function getTelPortablePro(): ?string
    {
        return $this->telPortablePro;
    }

    public function setTelPortablePro(?string $telPortablePro): self
    {
        $this->initialized['telPortablePro'] = true;
        $this->telPortablePro = $telPortablePro;

        return $this;
    }

    public function getMelPerso(): ?string
    {
        return $this->melPerso;
    }

    public function setMelPerso(?string $melPerso): self
    {
        $this->initialized['melPerso'] = true;
        $this->melPerso = $melPerso;

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

    public function getEnTCode(): ?string
    {
        return $this->enTCode;
    }

    public function setEnTCode(?string $enTCode): self
    {
        $this->initialized['enTCode'] = true;
        $this->enTCode = $enTCode;

        return $this;
    }

    public function getEnVCode(): ?string
    {
        return $this->enVCode;
    }

    public function setEnVCode(?string $enVCode): self
    {
        $this->initialized['enVCode'] = true;
        $this->enVCode = $enVCode;

        return $this;
    }

    public function getEdPCode(): ?string
    {
        return $this->edPCode;
    }

    public function setEdPCode(?string $edPCode): self
    {
        $this->initialized['edPCode'] = true;
        $this->edPCode = $edPCode;

        return $this;
    }

    public function getEtudesInfosComplementaires(): ?string
    {
        return $this->etudesInfosComplementaires;
    }

    public function setEtudesInfosComplementaires(?string $etudesInfosComplementaires): self
    {
        $this->initialized['etudesInfosComplementaires'] = true;
        $this->etudesInfosComplementaires = $etudesInfosComplementaires;

        return $this;
    }

    public function getFormationPlusEleve(): ?string
    {
        return $this->formationPlusEleve;
    }

    public function setFormationPlusEleve(?string $formationPlusEleve): self
    {
        $this->initialized['formationPlusEleve'] = true;
        $this->formationPlusEleve = $formationPlusEleve;

        return $this;
    }

    public function getDiplomePrepare(): ?string
    {
        return $this->diplomePrepare;
    }

    public function setDiplomePrepare(?string $diplomePrepare): self
    {
        $this->initialized['diplomePrepare'] = true;
        $this->diplomePrepare = $diplomePrepare;

        return $this;
    }

    public function getSituationAvantEmbauche(): ?string
    {
        return $this->situationAvantEmbauche;
    }

    public function setSituationAvantEmbauche(?string $situationAvantEmbauche): self
    {
        $this->initialized['situationAvantEmbauche'] = true;
        $this->situationAvantEmbauche = $situationAvantEmbauche;

        return $this;
    }

    public function getDureePeriodeEssai1(): ?string
    {
        return $this->dureePeriodeEssai1;
    }

    public function setDureePeriodeEssai1(?string $dureePeriodeEssai1): self
    {
        $this->initialized['dureePeriodeEssai1'] = true;
        $this->dureePeriodeEssai1 = $dureePeriodeEssai1;

        return $this;
    }

    public function getDureePeriodeEssai2(): ?string
    {
        return $this->dureePeriodeEssai2;
    }

    public function setDureePeriodeEssai2(?string $dureePeriodeEssai2): self
    {
        $this->initialized['dureePeriodeEssai2'] = true;
        $this->dureePeriodeEssai2 = $dureePeriodeEssai2;

        return $this;
    }

    public function getPointure(): ?string
    {
        return $this->pointure;
    }

    public function setPointure(?string $pointure): self
    {
        $this->initialized['pointure'] = true;
        $this->pointure = $pointure;

        return $this;
    }

    public function getTailleHaut(): ?string
    {
        return $this->tailleHaut;
    }

    public function setTailleHaut(?string $tailleHaut): self
    {
        $this->initialized['tailleHaut'] = true;
        $this->tailleHaut = $tailleHaut;

        return $this;
    }

    public function getTaillePantalon(): ?string
    {
        return $this->taillePantalon;
    }

    public function setTaillePantalon(?string $taillePantalon): self
    {
        $this->initialized['taillePantalon'] = true;
        $this->taillePantalon = $taillePantalon;

        return $this;
    }

    public function getTourDeTete(): ?string
    {
        return $this->tourDeTete;
    }

    public function setTourDeTete(?string $tourDeTete): self
    {
        $this->initialized['tourDeTete'] = true;
        $this->tourDeTete = $tourDeTete;

        return $this;
    }

    public function getTourDeCou(): ?string
    {
        return $this->tourDeCou;
    }

    public function setTourDeCou(?string $tourDeCou): self
    {
        $this->initialized['tourDeCou'] = true;
        $this->tourDeCou = $tourDeCou;

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

    public function getTitreSejourNumOrdre(): ?string
    {
        return $this->titreSejourNumOrdre;
    }

    public function setTitreSejourNumOrdre(?string $titreSejourNumOrdre): self
    {
        $this->initialized['titreSejourNumOrdre'] = true;
        $this->titreSejourNumOrdre = $titreSejourNumOrdre;

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

    public function getSurveillanceMedRenforcee(): ?bool
    {
        return $this->surveillanceMedRenforcee;
    }

    public function setSurveillanceMedRenforcee(?bool $surveillanceMedRenforcee): self
    {
        $this->initialized['surveillanceMedRenforcee'] = true;
        $this->surveillanceMedRenforcee = $surveillanceMedRenforcee;

        return $this;
    }

    /**
     * @return list<LectureInformationsSalarieEmploi>|null
     */
    public function getEmplois(): ?array
    {
        return $this->emplois;
    }

    /**
     * @param list<LectureInformationsSalarieEmploi>|null $emplois
     */
    public function setEmplois(?array $emplois): self
    {
        $this->initialized['emplois'] = true;
        $this->emplois = $emplois;

        return $this;
    }

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
}
