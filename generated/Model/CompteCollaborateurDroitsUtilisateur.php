<?php

namespace QdequippeTech\Silae\Api\Model;

class CompteCollaborateurDroitsUtilisateur
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
    protected $paieRelationClientGestionPortailCP;
    /**
     * @var string|null
     */
    protected $paieRelationClientContact;
    /**
     * @var string|null
     */
    protected $paieRelationClientTachesARealiser;
    /**
     * @var string|null
     */
    protected $paieParametrageMtPartMtPartApplicablesAuDossier;
    /**
     * @var string|null
     */
    protected $paieCotisationsTauxApplicablesAuDossier;
    /**
     * @var string|null
     */
    protected $paieRelationClientCycleDePaie;
    /**
     * @var string|null
     */
    protected $paieRelationClientAutomatisationDesDeclarations;
    /**
     * @var string|null
     */
    protected $paieRelationClientEditionsGroupees;
    /**
     * @var string|null
     */
    protected $paieRelationClientFicheSocieteEtatDossier;
    /**
     * @var string|null
     */
    protected $paieParametrageLiaisonComptable;
    /**
     * @var string|null
     */
    protected $paieRelationClientArchivageDossier;
    /**
     * @var string|null
     */
    protected $paieParametrageCotisationsComplementLibelles;
    /**
     * @var string|null
     */
    protected $paieParametrageCotisationsTaux;
    /**
     * @var string|null
     */
    protected $paieParametrageCotisationsTauxAT;
    /**
     * @var string|null
     */
    protected $paieParametragePrimesProfils;
    /**
     * @var string|null
     */
    protected $paiePrimesCaracteristiques;
    /**
     * @var string|null
     */
    protected $paieParametrageHeuresHeures;
    /**
     * @var string|null
     */
    protected $paieParametrageHeuresComplementLibelles;
    /**
     * @var string|null
     */
    protected $paieParametrageMtPartMtPart;
    /**
     * @var string|null
     */
    protected $paieParametrageVariablesASaisir;
    /**
     * @var string|null
     */
    protected $paieParametrageContratsComplementaires;
    /**
     * @var string|null
     */
    protected $paieParametrageMethodes;
    /**
     * @var string|null
     */
    protected $paieGestionImputationsAnalytiques;
    /**
     * @var string|null
     */
    protected $paieGestionAnalytiqueEnPourcentage;
    /**
     * @var string|null
     */
    protected $analyseActiviteSpecificites;
    /**
     * @var string|null
     */
    protected $analyseActiviteProductionCollaborateur;
    /**
     * @var string|null
     */
    protected $analyseActiviteProductionUtilisateur;
    /**
     * @var string|null
     */
    protected $analyseActiviteProduction;
    /**
     * @var string|null
     */
    protected $analyseActiviteBulletins;
    /**
     * @var string|null
     */
    protected $analyseActiviteDossiers;
    /**
     * @var string|null
     */
    protected $analyseActiviteRelationClient;
    /**
     * @var string|null
     */
    protected $analyseActiviteDADSU;
    /**
     * @var string|null
     */
    protected $analyseActiviteDSN;
    /**
     * @var string|null
     */
    protected $analyseActiviteInfosClients;
    /**
     * @var string|null
     */
    protected $analyseActiviteListeOrganismesDSN;
    /**
     * @var string|null
     */
    protected $analyseActiviteRecherches;
    /**
     * @var string|null
     */
    protected $generalAccesFormulaireAssistance;
    /**
     * @var string|null
     */
    protected $gestionInterneParametrages;
    /**
     * @var string|null
     */
    protected $gestionInterneParametragesClients;
    /**
     * @var string|null
     */
    protected $gestionInterneParametragesClientsMenuSupprimer;
    /**
     * @var string|null
     */
    protected $gestionInterneParametragesCollaborateurs;
    /**
     * @var string|null
     */
    protected $gestionInterneParametragesClientsConfigurationAPIFichiersVirement;
    /**
     * @var string|null
     */
    protected $gestionInterneParametragesCollaborateursGestionRoles;
    /**
     * @var string|null
     */
    protected $gestionInterneParametragesAgences;
    /**
     * @var string|null
     */
    protected $gestionInterneParametragesParamClesAcces;
    /**
     * @var string|null
     */
    protected $gestionInterneParametragesAffectationCollaborateurs;
    /**
     * @var string|null
     */
    protected $gestionInterneAnalyseProduction;
    /**
     * @var string|null
     */
    protected $gestionInterneAnalyseProductionSynthetique;
    /**
     * @var string|null
     */
    protected $gestionInterneAnalyseProductionDetaille;
    /**
     * @var string|null
     */
    protected $gestionInterneAnalyseProductionN4DS;
    /**
     * @var string|null
     */
    protected $gestionInterneInfosClients;
    /**
     * @var string|null
     */
    protected $gestionInterneInfosClientsInfosClients;
    /**
     * @var string|null
     */
    protected $gestionInterneInfosClientsInfosBancaires;
    /**
     * @var string|null
     */
    protected $parametragePaieConfigurationAPI;
    /**
     * @var string|null
     */
    protected $parametragePaieGenerationFichiersVirements;
    /**
     * @var string|null
     */
    protected $administrationConnexionAuthentificationExterne;
    /**
     * @var string|null
     */
    protected $administrationConnexionPersonnalisationEcranConnexion;
    /**
     * @var string|null
     */
    protected $administrationPilotageActivite;
    /**
     * @var string|null
     */
    protected $administrationPilotageActiviteHistoriqueConnexions;
    /**
     * @var string|null
     */
    protected $administrationPilotageActiviteHistoriqueModifications;
    /**
     * @var string|null
     */
    protected $administrationConfigurationExport;
    /**
     * @var string|null
     */
    protected $productionLienSilaeHub;

    public function getPaieRelationClientGestionPortailCP(): ?string
    {
        return $this->paieRelationClientGestionPortailCP;
    }

    public function setPaieRelationClientGestionPortailCP(?string $paieRelationClientGestionPortailCP): self
    {
        $this->initialized['paieRelationClientGestionPortailCP'] = true;
        $this->paieRelationClientGestionPortailCP = $paieRelationClientGestionPortailCP;

        return $this;
    }

    public function getPaieRelationClientContact(): ?string
    {
        return $this->paieRelationClientContact;
    }

    public function setPaieRelationClientContact(?string $paieRelationClientContact): self
    {
        $this->initialized['paieRelationClientContact'] = true;
        $this->paieRelationClientContact = $paieRelationClientContact;

        return $this;
    }

    public function getPaieRelationClientTachesARealiser(): ?string
    {
        return $this->paieRelationClientTachesARealiser;
    }

    public function setPaieRelationClientTachesARealiser(?string $paieRelationClientTachesARealiser): self
    {
        $this->initialized['paieRelationClientTachesARealiser'] = true;
        $this->paieRelationClientTachesARealiser = $paieRelationClientTachesARealiser;

        return $this;
    }

    public function getPaieParametrageMtPartMtPartApplicablesAuDossier(): ?string
    {
        return $this->paieParametrageMtPartMtPartApplicablesAuDossier;
    }

    public function setPaieParametrageMtPartMtPartApplicablesAuDossier(?string $paieParametrageMtPartMtPartApplicablesAuDossier): self
    {
        $this->initialized['paieParametrageMtPartMtPartApplicablesAuDossier'] = true;
        $this->paieParametrageMtPartMtPartApplicablesAuDossier = $paieParametrageMtPartMtPartApplicablesAuDossier;

        return $this;
    }

    public function getPaieCotisationsTauxApplicablesAuDossier(): ?string
    {
        return $this->paieCotisationsTauxApplicablesAuDossier;
    }

    public function setPaieCotisationsTauxApplicablesAuDossier(?string $paieCotisationsTauxApplicablesAuDossier): self
    {
        $this->initialized['paieCotisationsTauxApplicablesAuDossier'] = true;
        $this->paieCotisationsTauxApplicablesAuDossier = $paieCotisationsTauxApplicablesAuDossier;

        return $this;
    }

    public function getPaieRelationClientCycleDePaie(): ?string
    {
        return $this->paieRelationClientCycleDePaie;
    }

    public function setPaieRelationClientCycleDePaie(?string $paieRelationClientCycleDePaie): self
    {
        $this->initialized['paieRelationClientCycleDePaie'] = true;
        $this->paieRelationClientCycleDePaie = $paieRelationClientCycleDePaie;

        return $this;
    }

    public function getPaieRelationClientAutomatisationDesDeclarations(): ?string
    {
        return $this->paieRelationClientAutomatisationDesDeclarations;
    }

    public function setPaieRelationClientAutomatisationDesDeclarations(?string $paieRelationClientAutomatisationDesDeclarations): self
    {
        $this->initialized['paieRelationClientAutomatisationDesDeclarations'] = true;
        $this->paieRelationClientAutomatisationDesDeclarations = $paieRelationClientAutomatisationDesDeclarations;

        return $this;
    }

    public function getPaieRelationClientEditionsGroupees(): ?string
    {
        return $this->paieRelationClientEditionsGroupees;
    }

    public function setPaieRelationClientEditionsGroupees(?string $paieRelationClientEditionsGroupees): self
    {
        $this->initialized['paieRelationClientEditionsGroupees'] = true;
        $this->paieRelationClientEditionsGroupees = $paieRelationClientEditionsGroupees;

        return $this;
    }

    public function getPaieRelationClientFicheSocieteEtatDossier(): ?string
    {
        return $this->paieRelationClientFicheSocieteEtatDossier;
    }

    public function setPaieRelationClientFicheSocieteEtatDossier(?string $paieRelationClientFicheSocieteEtatDossier): self
    {
        $this->initialized['paieRelationClientFicheSocieteEtatDossier'] = true;
        $this->paieRelationClientFicheSocieteEtatDossier = $paieRelationClientFicheSocieteEtatDossier;

        return $this;
    }

    public function getPaieParametrageLiaisonComptable(): ?string
    {
        return $this->paieParametrageLiaisonComptable;
    }

    public function setPaieParametrageLiaisonComptable(?string $paieParametrageLiaisonComptable): self
    {
        $this->initialized['paieParametrageLiaisonComptable'] = true;
        $this->paieParametrageLiaisonComptable = $paieParametrageLiaisonComptable;

        return $this;
    }

    public function getPaieRelationClientArchivageDossier(): ?string
    {
        return $this->paieRelationClientArchivageDossier;
    }

    public function setPaieRelationClientArchivageDossier(?string $paieRelationClientArchivageDossier): self
    {
        $this->initialized['paieRelationClientArchivageDossier'] = true;
        $this->paieRelationClientArchivageDossier = $paieRelationClientArchivageDossier;

        return $this;
    }

    public function getPaieParametrageCotisationsComplementLibelles(): ?string
    {
        return $this->paieParametrageCotisationsComplementLibelles;
    }

    public function setPaieParametrageCotisationsComplementLibelles(?string $paieParametrageCotisationsComplementLibelles): self
    {
        $this->initialized['paieParametrageCotisationsComplementLibelles'] = true;
        $this->paieParametrageCotisationsComplementLibelles = $paieParametrageCotisationsComplementLibelles;

        return $this;
    }

    public function getPaieParametrageCotisationsTaux(): ?string
    {
        return $this->paieParametrageCotisationsTaux;
    }

    public function setPaieParametrageCotisationsTaux(?string $paieParametrageCotisationsTaux): self
    {
        $this->initialized['paieParametrageCotisationsTaux'] = true;
        $this->paieParametrageCotisationsTaux = $paieParametrageCotisationsTaux;

        return $this;
    }

    public function getPaieParametrageCotisationsTauxAT(): ?string
    {
        return $this->paieParametrageCotisationsTauxAT;
    }

    public function setPaieParametrageCotisationsTauxAT(?string $paieParametrageCotisationsTauxAT): self
    {
        $this->initialized['paieParametrageCotisationsTauxAT'] = true;
        $this->paieParametrageCotisationsTauxAT = $paieParametrageCotisationsTauxAT;

        return $this;
    }

    public function getPaieParametragePrimesProfils(): ?string
    {
        return $this->paieParametragePrimesProfils;
    }

    public function setPaieParametragePrimesProfils(?string $paieParametragePrimesProfils): self
    {
        $this->initialized['paieParametragePrimesProfils'] = true;
        $this->paieParametragePrimesProfils = $paieParametragePrimesProfils;

        return $this;
    }

    public function getPaiePrimesCaracteristiques(): ?string
    {
        return $this->paiePrimesCaracteristiques;
    }

    public function setPaiePrimesCaracteristiques(?string $paiePrimesCaracteristiques): self
    {
        $this->initialized['paiePrimesCaracteristiques'] = true;
        $this->paiePrimesCaracteristiques = $paiePrimesCaracteristiques;

        return $this;
    }

    public function getPaieParametrageHeuresHeures(): ?string
    {
        return $this->paieParametrageHeuresHeures;
    }

    public function setPaieParametrageHeuresHeures(?string $paieParametrageHeuresHeures): self
    {
        $this->initialized['paieParametrageHeuresHeures'] = true;
        $this->paieParametrageHeuresHeures = $paieParametrageHeuresHeures;

        return $this;
    }

    public function getPaieParametrageHeuresComplementLibelles(): ?string
    {
        return $this->paieParametrageHeuresComplementLibelles;
    }

    public function setPaieParametrageHeuresComplementLibelles(?string $paieParametrageHeuresComplementLibelles): self
    {
        $this->initialized['paieParametrageHeuresComplementLibelles'] = true;
        $this->paieParametrageHeuresComplementLibelles = $paieParametrageHeuresComplementLibelles;

        return $this;
    }

    public function getPaieParametrageMtPartMtPart(): ?string
    {
        return $this->paieParametrageMtPartMtPart;
    }

    public function setPaieParametrageMtPartMtPart(?string $paieParametrageMtPartMtPart): self
    {
        $this->initialized['paieParametrageMtPartMtPart'] = true;
        $this->paieParametrageMtPartMtPart = $paieParametrageMtPartMtPart;

        return $this;
    }

    public function getPaieParametrageVariablesASaisir(): ?string
    {
        return $this->paieParametrageVariablesASaisir;
    }

    public function setPaieParametrageVariablesASaisir(?string $paieParametrageVariablesASaisir): self
    {
        $this->initialized['paieParametrageVariablesASaisir'] = true;
        $this->paieParametrageVariablesASaisir = $paieParametrageVariablesASaisir;

        return $this;
    }

    public function getPaieParametrageContratsComplementaires(): ?string
    {
        return $this->paieParametrageContratsComplementaires;
    }

    public function setPaieParametrageContratsComplementaires(?string $paieParametrageContratsComplementaires): self
    {
        $this->initialized['paieParametrageContratsComplementaires'] = true;
        $this->paieParametrageContratsComplementaires = $paieParametrageContratsComplementaires;

        return $this;
    }

    public function getPaieParametrageMethodes(): ?string
    {
        return $this->paieParametrageMethodes;
    }

    public function setPaieParametrageMethodes(?string $paieParametrageMethodes): self
    {
        $this->initialized['paieParametrageMethodes'] = true;
        $this->paieParametrageMethodes = $paieParametrageMethodes;

        return $this;
    }

    public function getPaieGestionImputationsAnalytiques(): ?string
    {
        return $this->paieGestionImputationsAnalytiques;
    }

    public function setPaieGestionImputationsAnalytiques(?string $paieGestionImputationsAnalytiques): self
    {
        $this->initialized['paieGestionImputationsAnalytiques'] = true;
        $this->paieGestionImputationsAnalytiques = $paieGestionImputationsAnalytiques;

        return $this;
    }

    public function getPaieGestionAnalytiqueEnPourcentage(): ?string
    {
        return $this->paieGestionAnalytiqueEnPourcentage;
    }

    public function setPaieGestionAnalytiqueEnPourcentage(?string $paieGestionAnalytiqueEnPourcentage): self
    {
        $this->initialized['paieGestionAnalytiqueEnPourcentage'] = true;
        $this->paieGestionAnalytiqueEnPourcentage = $paieGestionAnalytiqueEnPourcentage;

        return $this;
    }

    public function getAnalyseActiviteSpecificites(): ?string
    {
        return $this->analyseActiviteSpecificites;
    }

    public function setAnalyseActiviteSpecificites(?string $analyseActiviteSpecificites): self
    {
        $this->initialized['analyseActiviteSpecificites'] = true;
        $this->analyseActiviteSpecificites = $analyseActiviteSpecificites;

        return $this;
    }

    public function getAnalyseActiviteProductionCollaborateur(): ?string
    {
        return $this->analyseActiviteProductionCollaborateur;
    }

    public function setAnalyseActiviteProductionCollaborateur(?string $analyseActiviteProductionCollaborateur): self
    {
        $this->initialized['analyseActiviteProductionCollaborateur'] = true;
        $this->analyseActiviteProductionCollaborateur = $analyseActiviteProductionCollaborateur;

        return $this;
    }

    public function getAnalyseActiviteProductionUtilisateur(): ?string
    {
        return $this->analyseActiviteProductionUtilisateur;
    }

    public function setAnalyseActiviteProductionUtilisateur(?string $analyseActiviteProductionUtilisateur): self
    {
        $this->initialized['analyseActiviteProductionUtilisateur'] = true;
        $this->analyseActiviteProductionUtilisateur = $analyseActiviteProductionUtilisateur;

        return $this;
    }

    public function getAnalyseActiviteProduction(): ?string
    {
        return $this->analyseActiviteProduction;
    }

    public function setAnalyseActiviteProduction(?string $analyseActiviteProduction): self
    {
        $this->initialized['analyseActiviteProduction'] = true;
        $this->analyseActiviteProduction = $analyseActiviteProduction;

        return $this;
    }

    public function getAnalyseActiviteBulletins(): ?string
    {
        return $this->analyseActiviteBulletins;
    }

    public function setAnalyseActiviteBulletins(?string $analyseActiviteBulletins): self
    {
        $this->initialized['analyseActiviteBulletins'] = true;
        $this->analyseActiviteBulletins = $analyseActiviteBulletins;

        return $this;
    }

    public function getAnalyseActiviteDossiers(): ?string
    {
        return $this->analyseActiviteDossiers;
    }

    public function setAnalyseActiviteDossiers(?string $analyseActiviteDossiers): self
    {
        $this->initialized['analyseActiviteDossiers'] = true;
        $this->analyseActiviteDossiers = $analyseActiviteDossiers;

        return $this;
    }

    public function getAnalyseActiviteRelationClient(): ?string
    {
        return $this->analyseActiviteRelationClient;
    }

    public function setAnalyseActiviteRelationClient(?string $analyseActiviteRelationClient): self
    {
        $this->initialized['analyseActiviteRelationClient'] = true;
        $this->analyseActiviteRelationClient = $analyseActiviteRelationClient;

        return $this;
    }

    public function getAnalyseActiviteDADSU(): ?string
    {
        return $this->analyseActiviteDADSU;
    }

    public function setAnalyseActiviteDADSU(?string $analyseActiviteDADSU): self
    {
        $this->initialized['analyseActiviteDADSU'] = true;
        $this->analyseActiviteDADSU = $analyseActiviteDADSU;

        return $this;
    }

    public function getAnalyseActiviteDSN(): ?string
    {
        return $this->analyseActiviteDSN;
    }

    public function setAnalyseActiviteDSN(?string $analyseActiviteDSN): self
    {
        $this->initialized['analyseActiviteDSN'] = true;
        $this->analyseActiviteDSN = $analyseActiviteDSN;

        return $this;
    }

    public function getAnalyseActiviteInfosClients(): ?string
    {
        return $this->analyseActiviteInfosClients;
    }

    public function setAnalyseActiviteInfosClients(?string $analyseActiviteInfosClients): self
    {
        $this->initialized['analyseActiviteInfosClients'] = true;
        $this->analyseActiviteInfosClients = $analyseActiviteInfosClients;

        return $this;
    }

    public function getAnalyseActiviteListeOrganismesDSN(): ?string
    {
        return $this->analyseActiviteListeOrganismesDSN;
    }

    public function setAnalyseActiviteListeOrganismesDSN(?string $analyseActiviteListeOrganismesDSN): self
    {
        $this->initialized['analyseActiviteListeOrganismesDSN'] = true;
        $this->analyseActiviteListeOrganismesDSN = $analyseActiviteListeOrganismesDSN;

        return $this;
    }

    public function getAnalyseActiviteRecherches(): ?string
    {
        return $this->analyseActiviteRecherches;
    }

    public function setAnalyseActiviteRecherches(?string $analyseActiviteRecherches): self
    {
        $this->initialized['analyseActiviteRecherches'] = true;
        $this->analyseActiviteRecherches = $analyseActiviteRecherches;

        return $this;
    }

    public function getGeneralAccesFormulaireAssistance(): ?string
    {
        return $this->generalAccesFormulaireAssistance;
    }

    public function setGeneralAccesFormulaireAssistance(?string $generalAccesFormulaireAssistance): self
    {
        $this->initialized['generalAccesFormulaireAssistance'] = true;
        $this->generalAccesFormulaireAssistance = $generalAccesFormulaireAssistance;

        return $this;
    }

    public function getGestionInterneParametrages(): ?string
    {
        return $this->gestionInterneParametrages;
    }

    public function setGestionInterneParametrages(?string $gestionInterneParametrages): self
    {
        $this->initialized['gestionInterneParametrages'] = true;
        $this->gestionInterneParametrages = $gestionInterneParametrages;

        return $this;
    }

    public function getGestionInterneParametragesClients(): ?string
    {
        return $this->gestionInterneParametragesClients;
    }

    public function setGestionInterneParametragesClients(?string $gestionInterneParametragesClients): self
    {
        $this->initialized['gestionInterneParametragesClients'] = true;
        $this->gestionInterneParametragesClients = $gestionInterneParametragesClients;

        return $this;
    }

    public function getGestionInterneParametragesClientsMenuSupprimer(): ?string
    {
        return $this->gestionInterneParametragesClientsMenuSupprimer;
    }

    public function setGestionInterneParametragesClientsMenuSupprimer(?string $gestionInterneParametragesClientsMenuSupprimer): self
    {
        $this->initialized['gestionInterneParametragesClientsMenuSupprimer'] = true;
        $this->gestionInterneParametragesClientsMenuSupprimer = $gestionInterneParametragesClientsMenuSupprimer;

        return $this;
    }

    public function getGestionInterneParametragesCollaborateurs(): ?string
    {
        return $this->gestionInterneParametragesCollaborateurs;
    }

    public function setGestionInterneParametragesCollaborateurs(?string $gestionInterneParametragesCollaborateurs): self
    {
        $this->initialized['gestionInterneParametragesCollaborateurs'] = true;
        $this->gestionInterneParametragesCollaborateurs = $gestionInterneParametragesCollaborateurs;

        return $this;
    }

    public function getGestionInterneParametragesClientsConfigurationAPIFichiersVirement(): ?string
    {
        return $this->gestionInterneParametragesClientsConfigurationAPIFichiersVirement;
    }

    public function setGestionInterneParametragesClientsConfigurationAPIFichiersVirement(?string $gestionInterneParametragesClientsConfigurationAPIFichiersVirement): self
    {
        $this->initialized['gestionInterneParametragesClientsConfigurationAPIFichiersVirement'] = true;
        $this->gestionInterneParametragesClientsConfigurationAPIFichiersVirement = $gestionInterneParametragesClientsConfigurationAPIFichiersVirement;

        return $this;
    }

    public function getGestionInterneParametragesCollaborateursGestionRoles(): ?string
    {
        return $this->gestionInterneParametragesCollaborateursGestionRoles;
    }

    public function setGestionInterneParametragesCollaborateursGestionRoles(?string $gestionInterneParametragesCollaborateursGestionRoles): self
    {
        $this->initialized['gestionInterneParametragesCollaborateursGestionRoles'] = true;
        $this->gestionInterneParametragesCollaborateursGestionRoles = $gestionInterneParametragesCollaborateursGestionRoles;

        return $this;
    }

    public function getGestionInterneParametragesAgences(): ?string
    {
        return $this->gestionInterneParametragesAgences;
    }

    public function setGestionInterneParametragesAgences(?string $gestionInterneParametragesAgences): self
    {
        $this->initialized['gestionInterneParametragesAgences'] = true;
        $this->gestionInterneParametragesAgences = $gestionInterneParametragesAgences;

        return $this;
    }

    public function getGestionInterneParametragesParamClesAcces(): ?string
    {
        return $this->gestionInterneParametragesParamClesAcces;
    }

    public function setGestionInterneParametragesParamClesAcces(?string $gestionInterneParametragesParamClesAcces): self
    {
        $this->initialized['gestionInterneParametragesParamClesAcces'] = true;
        $this->gestionInterneParametragesParamClesAcces = $gestionInterneParametragesParamClesAcces;

        return $this;
    }

    public function getGestionInterneParametragesAffectationCollaborateurs(): ?string
    {
        return $this->gestionInterneParametragesAffectationCollaborateurs;
    }

    public function setGestionInterneParametragesAffectationCollaborateurs(?string $gestionInterneParametragesAffectationCollaborateurs): self
    {
        $this->initialized['gestionInterneParametragesAffectationCollaborateurs'] = true;
        $this->gestionInterneParametragesAffectationCollaborateurs = $gestionInterneParametragesAffectationCollaborateurs;

        return $this;
    }

    public function getGestionInterneAnalyseProduction(): ?string
    {
        return $this->gestionInterneAnalyseProduction;
    }

    public function setGestionInterneAnalyseProduction(?string $gestionInterneAnalyseProduction): self
    {
        $this->initialized['gestionInterneAnalyseProduction'] = true;
        $this->gestionInterneAnalyseProduction = $gestionInterneAnalyseProduction;

        return $this;
    }

    public function getGestionInterneAnalyseProductionSynthetique(): ?string
    {
        return $this->gestionInterneAnalyseProductionSynthetique;
    }

    public function setGestionInterneAnalyseProductionSynthetique(?string $gestionInterneAnalyseProductionSynthetique): self
    {
        $this->initialized['gestionInterneAnalyseProductionSynthetique'] = true;
        $this->gestionInterneAnalyseProductionSynthetique = $gestionInterneAnalyseProductionSynthetique;

        return $this;
    }

    public function getGestionInterneAnalyseProductionDetaille(): ?string
    {
        return $this->gestionInterneAnalyseProductionDetaille;
    }

    public function setGestionInterneAnalyseProductionDetaille(?string $gestionInterneAnalyseProductionDetaille): self
    {
        $this->initialized['gestionInterneAnalyseProductionDetaille'] = true;
        $this->gestionInterneAnalyseProductionDetaille = $gestionInterneAnalyseProductionDetaille;

        return $this;
    }

    public function getGestionInterneAnalyseProductionN4DS(): ?string
    {
        return $this->gestionInterneAnalyseProductionN4DS;
    }

    public function setGestionInterneAnalyseProductionN4DS(?string $gestionInterneAnalyseProductionN4DS): self
    {
        $this->initialized['gestionInterneAnalyseProductionN4DS'] = true;
        $this->gestionInterneAnalyseProductionN4DS = $gestionInterneAnalyseProductionN4DS;

        return $this;
    }

    public function getGestionInterneInfosClients(): ?string
    {
        return $this->gestionInterneInfosClients;
    }

    public function setGestionInterneInfosClients(?string $gestionInterneInfosClients): self
    {
        $this->initialized['gestionInterneInfosClients'] = true;
        $this->gestionInterneInfosClients = $gestionInterneInfosClients;

        return $this;
    }

    public function getGestionInterneInfosClientsInfosClients(): ?string
    {
        return $this->gestionInterneInfosClientsInfosClients;
    }

    public function setGestionInterneInfosClientsInfosClients(?string $gestionInterneInfosClientsInfosClients): self
    {
        $this->initialized['gestionInterneInfosClientsInfosClients'] = true;
        $this->gestionInterneInfosClientsInfosClients = $gestionInterneInfosClientsInfosClients;

        return $this;
    }

    public function getGestionInterneInfosClientsInfosBancaires(): ?string
    {
        return $this->gestionInterneInfosClientsInfosBancaires;
    }

    public function setGestionInterneInfosClientsInfosBancaires(?string $gestionInterneInfosClientsInfosBancaires): self
    {
        $this->initialized['gestionInterneInfosClientsInfosBancaires'] = true;
        $this->gestionInterneInfosClientsInfosBancaires = $gestionInterneInfosClientsInfosBancaires;

        return $this;
    }

    public function getParametragePaieConfigurationAPI(): ?string
    {
        return $this->parametragePaieConfigurationAPI;
    }

    public function setParametragePaieConfigurationAPI(?string $parametragePaieConfigurationAPI): self
    {
        $this->initialized['parametragePaieConfigurationAPI'] = true;
        $this->parametragePaieConfigurationAPI = $parametragePaieConfigurationAPI;

        return $this;
    }

    public function getParametragePaieGenerationFichiersVirements(): ?string
    {
        return $this->parametragePaieGenerationFichiersVirements;
    }

    public function setParametragePaieGenerationFichiersVirements(?string $parametragePaieGenerationFichiersVirements): self
    {
        $this->initialized['parametragePaieGenerationFichiersVirements'] = true;
        $this->parametragePaieGenerationFichiersVirements = $parametragePaieGenerationFichiersVirements;

        return $this;
    }

    public function getAdministrationConnexionAuthentificationExterne(): ?string
    {
        return $this->administrationConnexionAuthentificationExterne;
    }

    public function setAdministrationConnexionAuthentificationExterne(?string $administrationConnexionAuthentificationExterne): self
    {
        $this->initialized['administrationConnexionAuthentificationExterne'] = true;
        $this->administrationConnexionAuthentificationExterne = $administrationConnexionAuthentificationExterne;

        return $this;
    }

    public function getAdministrationConnexionPersonnalisationEcranConnexion(): ?string
    {
        return $this->administrationConnexionPersonnalisationEcranConnexion;
    }

    public function setAdministrationConnexionPersonnalisationEcranConnexion(?string $administrationConnexionPersonnalisationEcranConnexion): self
    {
        $this->initialized['administrationConnexionPersonnalisationEcranConnexion'] = true;
        $this->administrationConnexionPersonnalisationEcranConnexion = $administrationConnexionPersonnalisationEcranConnexion;

        return $this;
    }

    public function getAdministrationPilotageActivite(): ?string
    {
        return $this->administrationPilotageActivite;
    }

    public function setAdministrationPilotageActivite(?string $administrationPilotageActivite): self
    {
        $this->initialized['administrationPilotageActivite'] = true;
        $this->administrationPilotageActivite = $administrationPilotageActivite;

        return $this;
    }

    public function getAdministrationPilotageActiviteHistoriqueConnexions(): ?string
    {
        return $this->administrationPilotageActiviteHistoriqueConnexions;
    }

    public function setAdministrationPilotageActiviteHistoriqueConnexions(?string $administrationPilotageActiviteHistoriqueConnexions): self
    {
        $this->initialized['administrationPilotageActiviteHistoriqueConnexions'] = true;
        $this->administrationPilotageActiviteHistoriqueConnexions = $administrationPilotageActiviteHistoriqueConnexions;

        return $this;
    }

    public function getAdministrationPilotageActiviteHistoriqueModifications(): ?string
    {
        return $this->administrationPilotageActiviteHistoriqueModifications;
    }

    public function setAdministrationPilotageActiviteHistoriqueModifications(?string $administrationPilotageActiviteHistoriqueModifications): self
    {
        $this->initialized['administrationPilotageActiviteHistoriqueModifications'] = true;
        $this->administrationPilotageActiviteHistoriqueModifications = $administrationPilotageActiviteHistoriqueModifications;

        return $this;
    }

    public function getAdministrationConfigurationExport(): ?string
    {
        return $this->administrationConfigurationExport;
    }

    public function setAdministrationConfigurationExport(?string $administrationConfigurationExport): self
    {
        $this->initialized['administrationConfigurationExport'] = true;
        $this->administrationConfigurationExport = $administrationConfigurationExport;

        return $this;
    }

    public function getProductionLienSilaeHub(): ?string
    {
        return $this->productionLienSilaeHub;
    }

    public function setProductionLienSilaeHub(?string $productionLienSilaeHub): self
    {
        $this->initialized['productionLienSilaeHub'] = true;
        $this->productionLienSilaeHub = $productionLienSilaeHub;

        return $this;
    }
}
