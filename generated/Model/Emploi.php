<?php

namespace QdequippeTech\Silae\Api\Model;

class Emploi
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
     * @var int|null
     */
    protected $identifiantEmploi;

    /**
     * @var int|null
     */
    protected $identifiantEmploiModele;

    /**
     * @var bool|null
     */
    protected $envoiDUEEdi;

    /**
     * @var bool|null
     */
    protected $envoiDUEEdiSansCreerEmploi;

    /**
     * @var string|null
     */
    protected $nomInterneEtablissement;

    /**
     * @var \DateTime|null
     */
    protected $dateDebut;

    /**
     * @var \DateTime|null
     */
    protected $dateFin;

    /**
     * @var string|null
     */
    protected $codeConventionCollective;

    /**
     * @var bool|null
     */
    protected $bCodeConventionCollective;

    /**
     * @var string|null
     */
    protected $codeClassificationMetier;

    /**
     * @var bool|null
     */
    protected $bCodeClassificationMetier;

    /**
     * @var string|null
     */
    protected $intituleEmploi;

    /**
     * @var bool|null
     */
    protected $bIntituleEmploi;

    /**
     * @var string|null
     */
    protected $codeContratTravail;

    /**
     * @var bool|null
     */
    protected $bCodeContratTravail;

    /**
     * @var string|null
     */
    protected $motifCDD;

    /**
     * @var bool|null
     */
    protected $bMotifCDD;

    /**
     * @var int|null
     */
    protected $dureeInitialeCDD;

    /**
     * @var bool|null
     */
    protected $bDureeInitialeCDD;

    /**
     * @var string|null
     */
    protected $motifDebutEmploi;

    /**
     * @var bool|null
     */
    protected $bMotifDebutEmploi;

    /**
     * @var string|null
     */
    protected $motifFinEmploi;

    /**
     * @var bool|null
     */
    protected $bMotifFinEmploi;

    /**
     * @var string|null
     */
    protected $codeCaracteristiqueActivite;

    /**
     * @var bool|null
     */
    protected $bCodeCaracteristiqueActivite;

    /**
     * @var string|null
     */
    protected $codeStatutProfessionnel;

    /**
     * @var bool|null
     */
    protected $bCodeStatutProfessionnel;

    /**
     * @var string|null
     */
    protected $codeStatutCategoriel;

    /**
     * @var bool|null
     */
    protected $bCodeStatutCategoriel;

    /**
     * @var string|null
     */
    protected $codeStatutCategorielAgircArrco;

    /**
     * @var bool|null
     */
    protected $bCodeStatutCategorielAgircArrco;

    /**
     * @var string|null
     */
    protected $coefficient1;

    /**
     * @var bool|null
     */
    protected $bCoefficient1;

    /**
     * @var string|null
     */
    protected $coefficient2;

    /**
     * @var bool|null
     */
    protected $bCoefficient2;

    /**
     * @var string|null
     */
    protected $coefficient3;

    /**
     * @var bool|null
     */
    protected $bCoefficient3;

    /**
     * @var string|null
     */
    protected $coefficient4;

    /**
     * @var bool|null
     */
    protected $bCoefficient4;

    /**
     * @var string|null
     */
    protected $codeCSP;

    /**
     * @var bool|null
     */
    protected $bCodeCSP;

    /**
     * @var string|null
     */
    protected $codeCPNDUC;

    /**
     * @var bool|null
     */
    protected $bCodeCPNDUC;

    /**
     * @var string|null
     */
    protected $spectacleCodeEmploi;

    /**
     * @var bool|null
     */
    protected $bSpectacleCodeEmploi;

    /**
     * @var string|null
     */
    protected $spectacleNumeroConges;

    /**
     * @var bool|null
     */
    protected $bSpectacleNumeroConges;

    /**
     * @var float|null
     */
    protected $pctAbattement;

    /**
     * @var bool|null
     */
    protected $bPctAbattement;

    /**
     * @var bool|null
     */
    protected $salaireDeBaseEstHoraire;

    /**
     * @var bool|null
     */
    protected $bSalaireDeBaseEstHoraire;

    /**
     * @var string|null
     */
    protected $salaireDeBase;

    /**
     * @var bool|null
     */
    protected $bSalaireDeBase;

    /**
     * @var float|null
     */
    protected $salaireNetGaranti;

    /**
     * @var bool|null
     */
    protected $bSalaireNetGaranti;

    /**
     * @var list<float>|null
     */
    protected $nbHeuresTravaillees;

    /**
     * @var list<float>|null
     */
    protected $nbHeuresDeNuitTravaillees;

    /**
     * @var bool|null
     */
    protected $bNbHeuresTravaillees;

    /**
     * @var float|null
     */
    protected $nbHeuresMensuellesNormales;

    /**
     * @var bool|null
     */
    protected $bNbHeuresMensuellesNormales;

    /**
     * @var float|null
     */
    protected $nbHeuresMensuellesMajorees;

    /**
     * @var bool|null
     */
    protected $bNbHeuresMensuellesMajorees;

    /**
     * @var float|null
     */
    protected $pctHeuresMensuellesMajorees;

    /**
     * @var bool|null
     */
    protected $bPctHeuresMensuellesMajorees;

    /**
     * @var list<float>|null
     */
    protected $nbHeuresMensuellesLibres;

    /**
     * @var list<string>|null
     */
    protected $codesHeuresMensuellesLibres;

    /**
     * @var bool|null
     */
    protected $bHeuresMensuellesLibres;

    /**
     * @var bool|null
     */
    protected $confirmationObligatoireDesHeures;

    /**
     * @var bool|null
     */
    protected $bConfirmationObligatoireDesHeures;

    /**
     * @var bool|null
     */
    protected $activerCalculKilometrique;

    /**
     * @var bool|null
     */
    protected $bActiverCalculKilometrique;

    /**
     * @var int|null
     */
    protected $typeDeVehicule;

    /**
     * @var bool|null
     */
    protected $bTypeDeVehicule;

    /**
     * @var int|null
     */
    protected $trancheKilometrique;

    /**
     * @var bool|null
     */
    protected $bTrancheKilometrique;

    /**
     * @var float|null
     */
    protected $prixDuKilometre;

    /**
     * @var bool|null
     */
    protected $bPrixDuKilometre;

    /**
     * @var bool|null
     */
    protected $activerActiviteJournaliere;

    /**
     * @var bool|null
     */
    protected $bActiverActiviteJournaliere;

    /**
     * @var int|null
     */
    protected $decoupageActiviteJournaliere;

    /**
     * @var bool|null
     */
    protected $bDecoupageActiviteJournaliere;

    /**
     * @var int|null
     */
    protected $modeSaisieActiviteJournaliere;

    /**
     * @var bool|null
     */
    protected $bModeSaisieActiviteJournaliere;

    /**
     * @var string|null
     */
    protected $exonerationCode;

    /**
     * @var bool|null
     */
    protected $bExonerationCode;

    /**
     * @var \DateTime|null
     */
    protected $exonerationDebut;

    /**
     * @var bool|null
     */
    protected $bExonerationDebut;

    /**
     * @var \DateTime|null
     */
    protected $exonerationFin;

    /**
     * @var bool|null
     */
    protected $bExonerationFin;

    /**
     * @var float|null
     */
    protected $exonerationTaux;

    /**
     * @var bool|null
     */
    protected $bExonerationTaux;

    /**
     * @var string|null
     */
    protected $titreTransportCode;

    /**
     * @var bool|null
     */
    protected $bTitreTransportCode;

    /**
     * @var float|null
     */
    protected $titreTransportRemboursement;

    /**
     * @var bool|null
     */
    protected $bTitreTransportRemboursement;

    /**
     * @var float|null
     */
    protected $autreTitreTransportMontant;

    /**
     * @var bool|null
     */
    protected $bAutreTitreTransportMontant;

    /**
     * @var float|null
     */
    protected $autreTitreTransportRemboursement;

    /**
     * @var bool|null
     */
    protected $bAutreTitreTransportRemboursement;

    /**
     * @var int|null
     */
    protected $ticketRestaurant;

    /**
     * @var bool|null
     */
    protected $bTicketRestaurant;

    public function getIdentifiantEmploi(): ?int
    {
        return $this->identifiantEmploi;
    }

    public function setIdentifiantEmploi(?int $identifiantEmploi): self
    {
        $this->initialized['identifiantEmploi'] = true;
        $this->identifiantEmploi = $identifiantEmploi;

        return $this;
    }

    public function getIdentifiantEmploiModele(): ?int
    {
        return $this->identifiantEmploiModele;
    }

    public function setIdentifiantEmploiModele(?int $identifiantEmploiModele): self
    {
        $this->initialized['identifiantEmploiModele'] = true;
        $this->identifiantEmploiModele = $identifiantEmploiModele;

        return $this;
    }

    public function getEnvoiDUEEdi(): ?bool
    {
        return $this->envoiDUEEdi;
    }

    public function setEnvoiDUEEdi(?bool $envoiDUEEdi): self
    {
        $this->initialized['envoiDUEEdi'] = true;
        $this->envoiDUEEdi = $envoiDUEEdi;

        return $this;
    }

    public function getEnvoiDUEEdiSansCreerEmploi(): ?bool
    {
        return $this->envoiDUEEdiSansCreerEmploi;
    }

    public function setEnvoiDUEEdiSansCreerEmploi(?bool $envoiDUEEdiSansCreerEmploi): self
    {
        $this->initialized['envoiDUEEdiSansCreerEmploi'] = true;
        $this->envoiDUEEdiSansCreerEmploi = $envoiDUEEdiSansCreerEmploi;

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

    public function getDateDebut(): ?\DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTime $dateDebut): self
    {
        $this->initialized['dateDebut'] = true;
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTime $dateFin): self
    {
        $this->initialized['dateFin'] = true;
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getCodeConventionCollective(): ?string
    {
        return $this->codeConventionCollective;
    }

    public function setCodeConventionCollective(?string $codeConventionCollective): self
    {
        $this->initialized['codeConventionCollective'] = true;
        $this->codeConventionCollective = $codeConventionCollective;

        return $this;
    }

    public function getBCodeConventionCollective(): ?bool
    {
        return $this->bCodeConventionCollective;
    }

    public function setBCodeConventionCollective(?bool $bCodeConventionCollective): self
    {
        $this->initialized['bCodeConventionCollective'] = true;
        $this->bCodeConventionCollective = $bCodeConventionCollective;

        return $this;
    }

    public function getCodeClassificationMetier(): ?string
    {
        return $this->codeClassificationMetier;
    }

    public function setCodeClassificationMetier(?string $codeClassificationMetier): self
    {
        $this->initialized['codeClassificationMetier'] = true;
        $this->codeClassificationMetier = $codeClassificationMetier;

        return $this;
    }

    public function getBCodeClassificationMetier(): ?bool
    {
        return $this->bCodeClassificationMetier;
    }

    public function setBCodeClassificationMetier(?bool $bCodeClassificationMetier): self
    {
        $this->initialized['bCodeClassificationMetier'] = true;
        $this->bCodeClassificationMetier = $bCodeClassificationMetier;

        return $this;
    }

    public function getIntituleEmploi(): ?string
    {
        return $this->intituleEmploi;
    }

    public function setIntituleEmploi(?string $intituleEmploi): self
    {
        $this->initialized['intituleEmploi'] = true;
        $this->intituleEmploi = $intituleEmploi;

        return $this;
    }

    public function getBIntituleEmploi(): ?bool
    {
        return $this->bIntituleEmploi;
    }

    public function setBIntituleEmploi(?bool $bIntituleEmploi): self
    {
        $this->initialized['bIntituleEmploi'] = true;
        $this->bIntituleEmploi = $bIntituleEmploi;

        return $this;
    }

    public function getCodeContratTravail(): ?string
    {
        return $this->codeContratTravail;
    }

    public function setCodeContratTravail(?string $codeContratTravail): self
    {
        $this->initialized['codeContratTravail'] = true;
        $this->codeContratTravail = $codeContratTravail;

        return $this;
    }

    public function getBCodeContratTravail(): ?bool
    {
        return $this->bCodeContratTravail;
    }

    public function setBCodeContratTravail(?bool $bCodeContratTravail): self
    {
        $this->initialized['bCodeContratTravail'] = true;
        $this->bCodeContratTravail = $bCodeContratTravail;

        return $this;
    }

    public function getMotifCDD(): ?string
    {
        return $this->motifCDD;
    }

    public function setMotifCDD(?string $motifCDD): self
    {
        $this->initialized['motifCDD'] = true;
        $this->motifCDD = $motifCDD;

        return $this;
    }

    public function getBMotifCDD(): ?bool
    {
        return $this->bMotifCDD;
    }

    public function setBMotifCDD(?bool $bMotifCDD): self
    {
        $this->initialized['bMotifCDD'] = true;
        $this->bMotifCDD = $bMotifCDD;

        return $this;
    }

    public function getDureeInitialeCDD(): ?int
    {
        return $this->dureeInitialeCDD;
    }

    public function setDureeInitialeCDD(?int $dureeInitialeCDD): self
    {
        $this->initialized['dureeInitialeCDD'] = true;
        $this->dureeInitialeCDD = $dureeInitialeCDD;

        return $this;
    }

    public function getBDureeInitialeCDD(): ?bool
    {
        return $this->bDureeInitialeCDD;
    }

    public function setBDureeInitialeCDD(?bool $bDureeInitialeCDD): self
    {
        $this->initialized['bDureeInitialeCDD'] = true;
        $this->bDureeInitialeCDD = $bDureeInitialeCDD;

        return $this;
    }

    public function getMotifDebutEmploi(): ?string
    {
        return $this->motifDebutEmploi;
    }

    public function setMotifDebutEmploi(?string $motifDebutEmploi): self
    {
        $this->initialized['motifDebutEmploi'] = true;
        $this->motifDebutEmploi = $motifDebutEmploi;

        return $this;
    }

    public function getBMotifDebutEmploi(): ?bool
    {
        return $this->bMotifDebutEmploi;
    }

    public function setBMotifDebutEmploi(?bool $bMotifDebutEmploi): self
    {
        $this->initialized['bMotifDebutEmploi'] = true;
        $this->bMotifDebutEmploi = $bMotifDebutEmploi;

        return $this;
    }

    public function getMotifFinEmploi(): ?string
    {
        return $this->motifFinEmploi;
    }

    public function setMotifFinEmploi(?string $motifFinEmploi): self
    {
        $this->initialized['motifFinEmploi'] = true;
        $this->motifFinEmploi = $motifFinEmploi;

        return $this;
    }

    public function getBMotifFinEmploi(): ?bool
    {
        return $this->bMotifFinEmploi;
    }

    public function setBMotifFinEmploi(?bool $bMotifFinEmploi): self
    {
        $this->initialized['bMotifFinEmploi'] = true;
        $this->bMotifFinEmploi = $bMotifFinEmploi;

        return $this;
    }

    public function getCodeCaracteristiqueActivite(): ?string
    {
        return $this->codeCaracteristiqueActivite;
    }

    public function setCodeCaracteristiqueActivite(?string $codeCaracteristiqueActivite): self
    {
        $this->initialized['codeCaracteristiqueActivite'] = true;
        $this->codeCaracteristiqueActivite = $codeCaracteristiqueActivite;

        return $this;
    }

    public function getBCodeCaracteristiqueActivite(): ?bool
    {
        return $this->bCodeCaracteristiqueActivite;
    }

    public function setBCodeCaracteristiqueActivite(?bool $bCodeCaracteristiqueActivite): self
    {
        $this->initialized['bCodeCaracteristiqueActivite'] = true;
        $this->bCodeCaracteristiqueActivite = $bCodeCaracteristiqueActivite;

        return $this;
    }

    public function getCodeStatutProfessionnel(): ?string
    {
        return $this->codeStatutProfessionnel;
    }

    public function setCodeStatutProfessionnel(?string $codeStatutProfessionnel): self
    {
        $this->initialized['codeStatutProfessionnel'] = true;
        $this->codeStatutProfessionnel = $codeStatutProfessionnel;

        return $this;
    }

    public function getBCodeStatutProfessionnel(): ?bool
    {
        return $this->bCodeStatutProfessionnel;
    }

    public function setBCodeStatutProfessionnel(?bool $bCodeStatutProfessionnel): self
    {
        $this->initialized['bCodeStatutProfessionnel'] = true;
        $this->bCodeStatutProfessionnel = $bCodeStatutProfessionnel;

        return $this;
    }

    public function getCodeStatutCategoriel(): ?string
    {
        return $this->codeStatutCategoriel;
    }

    public function setCodeStatutCategoriel(?string $codeStatutCategoriel): self
    {
        $this->initialized['codeStatutCategoriel'] = true;
        $this->codeStatutCategoriel = $codeStatutCategoriel;

        return $this;
    }

    public function getBCodeStatutCategoriel(): ?bool
    {
        return $this->bCodeStatutCategoriel;
    }

    public function setBCodeStatutCategoriel(?bool $bCodeStatutCategoriel): self
    {
        $this->initialized['bCodeStatutCategoriel'] = true;
        $this->bCodeStatutCategoriel = $bCodeStatutCategoriel;

        return $this;
    }

    public function getCodeStatutCategorielAgircArrco(): ?string
    {
        return $this->codeStatutCategorielAgircArrco;
    }

    public function setCodeStatutCategorielAgircArrco(?string $codeStatutCategorielAgircArrco): self
    {
        $this->initialized['codeStatutCategorielAgircArrco'] = true;
        $this->codeStatutCategorielAgircArrco = $codeStatutCategorielAgircArrco;

        return $this;
    }

    public function getBCodeStatutCategorielAgircArrco(): ?bool
    {
        return $this->bCodeStatutCategorielAgircArrco;
    }

    public function setBCodeStatutCategorielAgircArrco(?bool $bCodeStatutCategorielAgircArrco): self
    {
        $this->initialized['bCodeStatutCategorielAgircArrco'] = true;
        $this->bCodeStatutCategorielAgircArrco = $bCodeStatutCategorielAgircArrco;

        return $this;
    }

    public function getCoefficient1(): ?string
    {
        return $this->coefficient1;
    }

    public function setCoefficient1(?string $coefficient1): self
    {
        $this->initialized['coefficient1'] = true;
        $this->coefficient1 = $coefficient1;

        return $this;
    }

    public function getBCoefficient1(): ?bool
    {
        return $this->bCoefficient1;
    }

    public function setBCoefficient1(?bool $bCoefficient1): self
    {
        $this->initialized['bCoefficient1'] = true;
        $this->bCoefficient1 = $bCoefficient1;

        return $this;
    }

    public function getCoefficient2(): ?string
    {
        return $this->coefficient2;
    }

    public function setCoefficient2(?string $coefficient2): self
    {
        $this->initialized['coefficient2'] = true;
        $this->coefficient2 = $coefficient2;

        return $this;
    }

    public function getBCoefficient2(): ?bool
    {
        return $this->bCoefficient2;
    }

    public function setBCoefficient2(?bool $bCoefficient2): self
    {
        $this->initialized['bCoefficient2'] = true;
        $this->bCoefficient2 = $bCoefficient2;

        return $this;
    }

    public function getCoefficient3(): ?string
    {
        return $this->coefficient3;
    }

    public function setCoefficient3(?string $coefficient3): self
    {
        $this->initialized['coefficient3'] = true;
        $this->coefficient3 = $coefficient3;

        return $this;
    }

    public function getBCoefficient3(): ?bool
    {
        return $this->bCoefficient3;
    }

    public function setBCoefficient3(?bool $bCoefficient3): self
    {
        $this->initialized['bCoefficient3'] = true;
        $this->bCoefficient3 = $bCoefficient3;

        return $this;
    }

    public function getCoefficient4(): ?string
    {
        return $this->coefficient4;
    }

    public function setCoefficient4(?string $coefficient4): self
    {
        $this->initialized['coefficient4'] = true;
        $this->coefficient4 = $coefficient4;

        return $this;
    }

    public function getBCoefficient4(): ?bool
    {
        return $this->bCoefficient4;
    }

    public function setBCoefficient4(?bool $bCoefficient4): self
    {
        $this->initialized['bCoefficient4'] = true;
        $this->bCoefficient4 = $bCoefficient4;

        return $this;
    }

    public function getCodeCSP(): ?string
    {
        return $this->codeCSP;
    }

    public function setCodeCSP(?string $codeCSP): self
    {
        $this->initialized['codeCSP'] = true;
        $this->codeCSP = $codeCSP;

        return $this;
    }

    public function getBCodeCSP(): ?bool
    {
        return $this->bCodeCSP;
    }

    public function setBCodeCSP(?bool $bCodeCSP): self
    {
        $this->initialized['bCodeCSP'] = true;
        $this->bCodeCSP = $bCodeCSP;

        return $this;
    }

    public function getCodeCPNDUC(): ?string
    {
        return $this->codeCPNDUC;
    }

    public function setCodeCPNDUC(?string $codeCPNDUC): self
    {
        $this->initialized['codeCPNDUC'] = true;
        $this->codeCPNDUC = $codeCPNDUC;

        return $this;
    }

    public function getBCodeCPNDUC(): ?bool
    {
        return $this->bCodeCPNDUC;
    }

    public function setBCodeCPNDUC(?bool $bCodeCPNDUC): self
    {
        $this->initialized['bCodeCPNDUC'] = true;
        $this->bCodeCPNDUC = $bCodeCPNDUC;

        return $this;
    }

    public function getSpectacleCodeEmploi(): ?string
    {
        return $this->spectacleCodeEmploi;
    }

    public function setSpectacleCodeEmploi(?string $spectacleCodeEmploi): self
    {
        $this->initialized['spectacleCodeEmploi'] = true;
        $this->spectacleCodeEmploi = $spectacleCodeEmploi;

        return $this;
    }

    public function getBSpectacleCodeEmploi(): ?bool
    {
        return $this->bSpectacleCodeEmploi;
    }

    public function setBSpectacleCodeEmploi(?bool $bSpectacleCodeEmploi): self
    {
        $this->initialized['bSpectacleCodeEmploi'] = true;
        $this->bSpectacleCodeEmploi = $bSpectacleCodeEmploi;

        return $this;
    }

    public function getSpectacleNumeroConges(): ?string
    {
        return $this->spectacleNumeroConges;
    }

    public function setSpectacleNumeroConges(?string $spectacleNumeroConges): self
    {
        $this->initialized['spectacleNumeroConges'] = true;
        $this->spectacleNumeroConges = $spectacleNumeroConges;

        return $this;
    }

    public function getBSpectacleNumeroConges(): ?bool
    {
        return $this->bSpectacleNumeroConges;
    }

    public function setBSpectacleNumeroConges(?bool $bSpectacleNumeroConges): self
    {
        $this->initialized['bSpectacleNumeroConges'] = true;
        $this->bSpectacleNumeroConges = $bSpectacleNumeroConges;

        return $this;
    }

    public function getPctAbattement(): ?float
    {
        return $this->pctAbattement;
    }

    public function setPctAbattement(?float $pctAbattement): self
    {
        $this->initialized['pctAbattement'] = true;
        $this->pctAbattement = $pctAbattement;

        return $this;
    }

    public function getBPctAbattement(): ?bool
    {
        return $this->bPctAbattement;
    }

    public function setBPctAbattement(?bool $bPctAbattement): self
    {
        $this->initialized['bPctAbattement'] = true;
        $this->bPctAbattement = $bPctAbattement;

        return $this;
    }

    public function getSalaireDeBaseEstHoraire(): ?bool
    {
        return $this->salaireDeBaseEstHoraire;
    }

    public function setSalaireDeBaseEstHoraire(?bool $salaireDeBaseEstHoraire): self
    {
        $this->initialized['salaireDeBaseEstHoraire'] = true;
        $this->salaireDeBaseEstHoraire = $salaireDeBaseEstHoraire;

        return $this;
    }

    public function getBSalaireDeBaseEstHoraire(): ?bool
    {
        return $this->bSalaireDeBaseEstHoraire;
    }

    public function setBSalaireDeBaseEstHoraire(?bool $bSalaireDeBaseEstHoraire): self
    {
        $this->initialized['bSalaireDeBaseEstHoraire'] = true;
        $this->bSalaireDeBaseEstHoraire = $bSalaireDeBaseEstHoraire;

        return $this;
    }

    public function getSalaireDeBase(): ?string
    {
        return $this->salaireDeBase;
    }

    public function setSalaireDeBase(?string $salaireDeBase): self
    {
        $this->initialized['salaireDeBase'] = true;
        $this->salaireDeBase = $salaireDeBase;

        return $this;
    }

    public function getBSalaireDeBase(): ?bool
    {
        return $this->bSalaireDeBase;
    }

    public function setBSalaireDeBase(?bool $bSalaireDeBase): self
    {
        $this->initialized['bSalaireDeBase'] = true;
        $this->bSalaireDeBase = $bSalaireDeBase;

        return $this;
    }

    public function getSalaireNetGaranti(): ?float
    {
        return $this->salaireNetGaranti;
    }

    public function setSalaireNetGaranti(?float $salaireNetGaranti): self
    {
        $this->initialized['salaireNetGaranti'] = true;
        $this->salaireNetGaranti = $salaireNetGaranti;

        return $this;
    }

    public function getBSalaireNetGaranti(): ?bool
    {
        return $this->bSalaireNetGaranti;
    }

    public function setBSalaireNetGaranti(?bool $bSalaireNetGaranti): self
    {
        $this->initialized['bSalaireNetGaranti'] = true;
        $this->bSalaireNetGaranti = $bSalaireNetGaranti;

        return $this;
    }

    /**
     * @return list<float>|null
     */
    public function getNbHeuresTravaillees(): ?array
    {
        return $this->nbHeuresTravaillees;
    }

    /**
     * @param list<float>|null $nbHeuresTravaillees
     */
    public function setNbHeuresTravaillees(?array $nbHeuresTravaillees): self
    {
        $this->initialized['nbHeuresTravaillees'] = true;
        $this->nbHeuresTravaillees = $nbHeuresTravaillees;

        return $this;
    }

    /**
     * @return list<float>|null
     */
    public function getNbHeuresDeNuitTravaillees(): ?array
    {
        return $this->nbHeuresDeNuitTravaillees;
    }

    /**
     * @param list<float>|null $nbHeuresDeNuitTravaillees
     */
    public function setNbHeuresDeNuitTravaillees(?array $nbHeuresDeNuitTravaillees): self
    {
        $this->initialized['nbHeuresDeNuitTravaillees'] = true;
        $this->nbHeuresDeNuitTravaillees = $nbHeuresDeNuitTravaillees;

        return $this;
    }

    public function getBNbHeuresTravaillees(): ?bool
    {
        return $this->bNbHeuresTravaillees;
    }

    public function setBNbHeuresTravaillees(?bool $bNbHeuresTravaillees): self
    {
        $this->initialized['bNbHeuresTravaillees'] = true;
        $this->bNbHeuresTravaillees = $bNbHeuresTravaillees;

        return $this;
    }

    public function getNbHeuresMensuellesNormales(): ?float
    {
        return $this->nbHeuresMensuellesNormales;
    }

    public function setNbHeuresMensuellesNormales(?float $nbHeuresMensuellesNormales): self
    {
        $this->initialized['nbHeuresMensuellesNormales'] = true;
        $this->nbHeuresMensuellesNormales = $nbHeuresMensuellesNormales;

        return $this;
    }

    public function getBNbHeuresMensuellesNormales(): ?bool
    {
        return $this->bNbHeuresMensuellesNormales;
    }

    public function setBNbHeuresMensuellesNormales(?bool $bNbHeuresMensuellesNormales): self
    {
        $this->initialized['bNbHeuresMensuellesNormales'] = true;
        $this->bNbHeuresMensuellesNormales = $bNbHeuresMensuellesNormales;

        return $this;
    }

    public function getNbHeuresMensuellesMajorees(): ?float
    {
        return $this->nbHeuresMensuellesMajorees;
    }

    public function setNbHeuresMensuellesMajorees(?float $nbHeuresMensuellesMajorees): self
    {
        $this->initialized['nbHeuresMensuellesMajorees'] = true;
        $this->nbHeuresMensuellesMajorees = $nbHeuresMensuellesMajorees;

        return $this;
    }

    public function getBNbHeuresMensuellesMajorees(): ?bool
    {
        return $this->bNbHeuresMensuellesMajorees;
    }

    public function setBNbHeuresMensuellesMajorees(?bool $bNbHeuresMensuellesMajorees): self
    {
        $this->initialized['bNbHeuresMensuellesMajorees'] = true;
        $this->bNbHeuresMensuellesMajorees = $bNbHeuresMensuellesMajorees;

        return $this;
    }

    public function getPctHeuresMensuellesMajorees(): ?float
    {
        return $this->pctHeuresMensuellesMajorees;
    }

    public function setPctHeuresMensuellesMajorees(?float $pctHeuresMensuellesMajorees): self
    {
        $this->initialized['pctHeuresMensuellesMajorees'] = true;
        $this->pctHeuresMensuellesMajorees = $pctHeuresMensuellesMajorees;

        return $this;
    }

    public function getBPctHeuresMensuellesMajorees(): ?bool
    {
        return $this->bPctHeuresMensuellesMajorees;
    }

    public function setBPctHeuresMensuellesMajorees(?bool $bPctHeuresMensuellesMajorees): self
    {
        $this->initialized['bPctHeuresMensuellesMajorees'] = true;
        $this->bPctHeuresMensuellesMajorees = $bPctHeuresMensuellesMajorees;

        return $this;
    }

    /**
     * @return list<float>|null
     */
    public function getNbHeuresMensuellesLibres(): ?array
    {
        return $this->nbHeuresMensuellesLibres;
    }

    /**
     * @param list<float>|null $nbHeuresMensuellesLibres
     */
    public function setNbHeuresMensuellesLibres(?array $nbHeuresMensuellesLibres): self
    {
        $this->initialized['nbHeuresMensuellesLibres'] = true;
        $this->nbHeuresMensuellesLibres = $nbHeuresMensuellesLibres;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getCodesHeuresMensuellesLibres(): ?array
    {
        return $this->codesHeuresMensuellesLibres;
    }

    /**
     * @param list<string>|null $codesHeuresMensuellesLibres
     */
    public function setCodesHeuresMensuellesLibres(?array $codesHeuresMensuellesLibres): self
    {
        $this->initialized['codesHeuresMensuellesLibres'] = true;
        $this->codesHeuresMensuellesLibres = $codesHeuresMensuellesLibres;

        return $this;
    }

    public function getBHeuresMensuellesLibres(): ?bool
    {
        return $this->bHeuresMensuellesLibres;
    }

    public function setBHeuresMensuellesLibres(?bool $bHeuresMensuellesLibres): self
    {
        $this->initialized['bHeuresMensuellesLibres'] = true;
        $this->bHeuresMensuellesLibres = $bHeuresMensuellesLibres;

        return $this;
    }

    public function getConfirmationObligatoireDesHeures(): ?bool
    {
        return $this->confirmationObligatoireDesHeures;
    }

    public function setConfirmationObligatoireDesHeures(?bool $confirmationObligatoireDesHeures): self
    {
        $this->initialized['confirmationObligatoireDesHeures'] = true;
        $this->confirmationObligatoireDesHeures = $confirmationObligatoireDesHeures;

        return $this;
    }

    public function getBConfirmationObligatoireDesHeures(): ?bool
    {
        return $this->bConfirmationObligatoireDesHeures;
    }

    public function setBConfirmationObligatoireDesHeures(?bool $bConfirmationObligatoireDesHeures): self
    {
        $this->initialized['bConfirmationObligatoireDesHeures'] = true;
        $this->bConfirmationObligatoireDesHeures = $bConfirmationObligatoireDesHeures;

        return $this;
    }

    public function getActiverCalculKilometrique(): ?bool
    {
        return $this->activerCalculKilometrique;
    }

    public function setActiverCalculKilometrique(?bool $activerCalculKilometrique): self
    {
        $this->initialized['activerCalculKilometrique'] = true;
        $this->activerCalculKilometrique = $activerCalculKilometrique;

        return $this;
    }

    public function getBActiverCalculKilometrique(): ?bool
    {
        return $this->bActiverCalculKilometrique;
    }

    public function setBActiverCalculKilometrique(?bool $bActiverCalculKilometrique): self
    {
        $this->initialized['bActiverCalculKilometrique'] = true;
        $this->bActiverCalculKilometrique = $bActiverCalculKilometrique;

        return $this;
    }

    public function getTypeDeVehicule(): ?int
    {
        return $this->typeDeVehicule;
    }

    public function setTypeDeVehicule(?int $typeDeVehicule): self
    {
        $this->initialized['typeDeVehicule'] = true;
        $this->typeDeVehicule = $typeDeVehicule;

        return $this;
    }

    public function getBTypeDeVehicule(): ?bool
    {
        return $this->bTypeDeVehicule;
    }

    public function setBTypeDeVehicule(?bool $bTypeDeVehicule): self
    {
        $this->initialized['bTypeDeVehicule'] = true;
        $this->bTypeDeVehicule = $bTypeDeVehicule;

        return $this;
    }

    public function getTrancheKilometrique(): ?int
    {
        return $this->trancheKilometrique;
    }

    public function setTrancheKilometrique(?int $trancheKilometrique): self
    {
        $this->initialized['trancheKilometrique'] = true;
        $this->trancheKilometrique = $trancheKilometrique;

        return $this;
    }

    public function getBTrancheKilometrique(): ?bool
    {
        return $this->bTrancheKilometrique;
    }

    public function setBTrancheKilometrique(?bool $bTrancheKilometrique): self
    {
        $this->initialized['bTrancheKilometrique'] = true;
        $this->bTrancheKilometrique = $bTrancheKilometrique;

        return $this;
    }

    public function getPrixDuKilometre(): ?float
    {
        return $this->prixDuKilometre;
    }

    public function setPrixDuKilometre(?float $prixDuKilometre): self
    {
        $this->initialized['prixDuKilometre'] = true;
        $this->prixDuKilometre = $prixDuKilometre;

        return $this;
    }

    public function getBPrixDuKilometre(): ?bool
    {
        return $this->bPrixDuKilometre;
    }

    public function setBPrixDuKilometre(?bool $bPrixDuKilometre): self
    {
        $this->initialized['bPrixDuKilometre'] = true;
        $this->bPrixDuKilometre = $bPrixDuKilometre;

        return $this;
    }

    public function getActiverActiviteJournaliere(): ?bool
    {
        return $this->activerActiviteJournaliere;
    }

    public function setActiverActiviteJournaliere(?bool $activerActiviteJournaliere): self
    {
        $this->initialized['activerActiviteJournaliere'] = true;
        $this->activerActiviteJournaliere = $activerActiviteJournaliere;

        return $this;
    }

    public function getBActiverActiviteJournaliere(): ?bool
    {
        return $this->bActiverActiviteJournaliere;
    }

    public function setBActiverActiviteJournaliere(?bool $bActiverActiviteJournaliere): self
    {
        $this->initialized['bActiverActiviteJournaliere'] = true;
        $this->bActiverActiviteJournaliere = $bActiverActiviteJournaliere;

        return $this;
    }

    public function getDecoupageActiviteJournaliere(): ?int
    {
        return $this->decoupageActiviteJournaliere;
    }

    public function setDecoupageActiviteJournaliere(?int $decoupageActiviteJournaliere): self
    {
        $this->initialized['decoupageActiviteJournaliere'] = true;
        $this->decoupageActiviteJournaliere = $decoupageActiviteJournaliere;

        return $this;
    }

    public function getBDecoupageActiviteJournaliere(): ?bool
    {
        return $this->bDecoupageActiviteJournaliere;
    }

    public function setBDecoupageActiviteJournaliere(?bool $bDecoupageActiviteJournaliere): self
    {
        $this->initialized['bDecoupageActiviteJournaliere'] = true;
        $this->bDecoupageActiviteJournaliere = $bDecoupageActiviteJournaliere;

        return $this;
    }

    public function getModeSaisieActiviteJournaliere(): ?int
    {
        return $this->modeSaisieActiviteJournaliere;
    }

    public function setModeSaisieActiviteJournaliere(?int $modeSaisieActiviteJournaliere): self
    {
        $this->initialized['modeSaisieActiviteJournaliere'] = true;
        $this->modeSaisieActiviteJournaliere = $modeSaisieActiviteJournaliere;

        return $this;
    }

    public function getBModeSaisieActiviteJournaliere(): ?bool
    {
        return $this->bModeSaisieActiviteJournaliere;
    }

    public function setBModeSaisieActiviteJournaliere(?bool $bModeSaisieActiviteJournaliere): self
    {
        $this->initialized['bModeSaisieActiviteJournaliere'] = true;
        $this->bModeSaisieActiviteJournaliere = $bModeSaisieActiviteJournaliere;

        return $this;
    }

    public function getExonerationCode(): ?string
    {
        return $this->exonerationCode;
    }

    public function setExonerationCode(?string $exonerationCode): self
    {
        $this->initialized['exonerationCode'] = true;
        $this->exonerationCode = $exonerationCode;

        return $this;
    }

    public function getBExonerationCode(): ?bool
    {
        return $this->bExonerationCode;
    }

    public function setBExonerationCode(?bool $bExonerationCode): self
    {
        $this->initialized['bExonerationCode'] = true;
        $this->bExonerationCode = $bExonerationCode;

        return $this;
    }

    public function getExonerationDebut(): ?\DateTime
    {
        return $this->exonerationDebut;
    }

    public function setExonerationDebut(?\DateTime $exonerationDebut): self
    {
        $this->initialized['exonerationDebut'] = true;
        $this->exonerationDebut = $exonerationDebut;

        return $this;
    }

    public function getBExonerationDebut(): ?bool
    {
        return $this->bExonerationDebut;
    }

    public function setBExonerationDebut(?bool $bExonerationDebut): self
    {
        $this->initialized['bExonerationDebut'] = true;
        $this->bExonerationDebut = $bExonerationDebut;

        return $this;
    }

    public function getExonerationFin(): ?\DateTime
    {
        return $this->exonerationFin;
    }

    public function setExonerationFin(?\DateTime $exonerationFin): self
    {
        $this->initialized['exonerationFin'] = true;
        $this->exonerationFin = $exonerationFin;

        return $this;
    }

    public function getBExonerationFin(): ?bool
    {
        return $this->bExonerationFin;
    }

    public function setBExonerationFin(?bool $bExonerationFin): self
    {
        $this->initialized['bExonerationFin'] = true;
        $this->bExonerationFin = $bExonerationFin;

        return $this;
    }

    public function getExonerationTaux(): ?float
    {
        return $this->exonerationTaux;
    }

    public function setExonerationTaux(?float $exonerationTaux): self
    {
        $this->initialized['exonerationTaux'] = true;
        $this->exonerationTaux = $exonerationTaux;

        return $this;
    }

    public function getBExonerationTaux(): ?bool
    {
        return $this->bExonerationTaux;
    }

    public function setBExonerationTaux(?bool $bExonerationTaux): self
    {
        $this->initialized['bExonerationTaux'] = true;
        $this->bExonerationTaux = $bExonerationTaux;

        return $this;
    }

    public function getTitreTransportCode(): ?string
    {
        return $this->titreTransportCode;
    }

    public function setTitreTransportCode(?string $titreTransportCode): self
    {
        $this->initialized['titreTransportCode'] = true;
        $this->titreTransportCode = $titreTransportCode;

        return $this;
    }

    public function getBTitreTransportCode(): ?bool
    {
        return $this->bTitreTransportCode;
    }

    public function setBTitreTransportCode(?bool $bTitreTransportCode): self
    {
        $this->initialized['bTitreTransportCode'] = true;
        $this->bTitreTransportCode = $bTitreTransportCode;

        return $this;
    }

    public function getTitreTransportRemboursement(): ?float
    {
        return $this->titreTransportRemboursement;
    }

    public function setTitreTransportRemboursement(?float $titreTransportRemboursement): self
    {
        $this->initialized['titreTransportRemboursement'] = true;
        $this->titreTransportRemboursement = $titreTransportRemboursement;

        return $this;
    }

    public function getBTitreTransportRemboursement(): ?bool
    {
        return $this->bTitreTransportRemboursement;
    }

    public function setBTitreTransportRemboursement(?bool $bTitreTransportRemboursement): self
    {
        $this->initialized['bTitreTransportRemboursement'] = true;
        $this->bTitreTransportRemboursement = $bTitreTransportRemboursement;

        return $this;
    }

    public function getAutreTitreTransportMontant(): ?float
    {
        return $this->autreTitreTransportMontant;
    }

    public function setAutreTitreTransportMontant(?float $autreTitreTransportMontant): self
    {
        $this->initialized['autreTitreTransportMontant'] = true;
        $this->autreTitreTransportMontant = $autreTitreTransportMontant;

        return $this;
    }

    public function getBAutreTitreTransportMontant(): ?bool
    {
        return $this->bAutreTitreTransportMontant;
    }

    public function setBAutreTitreTransportMontant(?bool $bAutreTitreTransportMontant): self
    {
        $this->initialized['bAutreTitreTransportMontant'] = true;
        $this->bAutreTitreTransportMontant = $bAutreTitreTransportMontant;

        return $this;
    }

    public function getAutreTitreTransportRemboursement(): ?float
    {
        return $this->autreTitreTransportRemboursement;
    }

    public function setAutreTitreTransportRemboursement(?float $autreTitreTransportRemboursement): self
    {
        $this->initialized['autreTitreTransportRemboursement'] = true;
        $this->autreTitreTransportRemboursement = $autreTitreTransportRemboursement;

        return $this;
    }

    public function getBAutreTitreTransportRemboursement(): ?bool
    {
        return $this->bAutreTitreTransportRemboursement;
    }

    public function setBAutreTitreTransportRemboursement(?bool $bAutreTitreTransportRemboursement): self
    {
        $this->initialized['bAutreTitreTransportRemboursement'] = true;
        $this->bAutreTitreTransportRemboursement = $bAutreTitreTransportRemboursement;

        return $this;
    }

    public function getTicketRestaurant(): ?int
    {
        return $this->ticketRestaurant;
    }

    public function setTicketRestaurant(?int $ticketRestaurant): self
    {
        $this->initialized['ticketRestaurant'] = true;
        $this->ticketRestaurant = $ticketRestaurant;

        return $this;
    }

    public function getBTicketRestaurant(): ?bool
    {
        return $this->bTicketRestaurant;
    }

    public function setBTicketRestaurant(?bool $bTicketRestaurant): self
    {
        $this->initialized['bTicketRestaurant'] = true;
        $this->bTicketRestaurant = $bTicketRestaurant;

        return $this;
    }
}
