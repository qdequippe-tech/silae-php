<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CompteCollaborateurDroitsUtilisateur;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompteCollaborateurDroitsUtilisateurNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return CompteCollaborateurDroitsUtilisateur::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && CompteCollaborateurDroitsUtilisateur::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new CompteCollaborateurDroitsUtilisateur();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('paieRelationClientGestionPortailCP', $data) && null !== $data['paieRelationClientGestionPortailCP']) {
            $object->setPaieRelationClientGestionPortailCP($data['paieRelationClientGestionPortailCP']);
        } elseif (\array_key_exists('paieRelationClientGestionPortailCP', $data) && null === $data['paieRelationClientGestionPortailCP']) {
            $object->setPaieRelationClientGestionPortailCP(null);
        }

        if (\array_key_exists('paieRelationClientContact', $data) && null !== $data['paieRelationClientContact']) {
            $object->setPaieRelationClientContact($data['paieRelationClientContact']);
        } elseif (\array_key_exists('paieRelationClientContact', $data) && null === $data['paieRelationClientContact']) {
            $object->setPaieRelationClientContact(null);
        }

        if (\array_key_exists('paieRelationClientTachesARealiser', $data) && null !== $data['paieRelationClientTachesARealiser']) {
            $object->setPaieRelationClientTachesARealiser($data['paieRelationClientTachesARealiser']);
        } elseif (\array_key_exists('paieRelationClientTachesARealiser', $data) && null === $data['paieRelationClientTachesARealiser']) {
            $object->setPaieRelationClientTachesARealiser(null);
        }

        if (\array_key_exists('paieParametrageMtPartMtPartApplicablesAuDossier', $data) && null !== $data['paieParametrageMtPartMtPartApplicablesAuDossier']) {
            $object->setPaieParametrageMtPartMtPartApplicablesAuDossier($data['paieParametrageMtPartMtPartApplicablesAuDossier']);
        } elseif (\array_key_exists('paieParametrageMtPartMtPartApplicablesAuDossier', $data) && null === $data['paieParametrageMtPartMtPartApplicablesAuDossier']) {
            $object->setPaieParametrageMtPartMtPartApplicablesAuDossier(null);
        }

        if (\array_key_exists('paieCotisationsTauxApplicablesAuDossier', $data) && null !== $data['paieCotisationsTauxApplicablesAuDossier']) {
            $object->setPaieCotisationsTauxApplicablesAuDossier($data['paieCotisationsTauxApplicablesAuDossier']);
        } elseif (\array_key_exists('paieCotisationsTauxApplicablesAuDossier', $data) && null === $data['paieCotisationsTauxApplicablesAuDossier']) {
            $object->setPaieCotisationsTauxApplicablesAuDossier(null);
        }

        if (\array_key_exists('paieRelationClientCycleDePaie', $data) && null !== $data['paieRelationClientCycleDePaie']) {
            $object->setPaieRelationClientCycleDePaie($data['paieRelationClientCycleDePaie']);
        } elseif (\array_key_exists('paieRelationClientCycleDePaie', $data) && null === $data['paieRelationClientCycleDePaie']) {
            $object->setPaieRelationClientCycleDePaie(null);
        }

        if (\array_key_exists('paieRelationClientAutomatisationDesDeclarations', $data) && null !== $data['paieRelationClientAutomatisationDesDeclarations']) {
            $object->setPaieRelationClientAutomatisationDesDeclarations($data['paieRelationClientAutomatisationDesDeclarations']);
        } elseif (\array_key_exists('paieRelationClientAutomatisationDesDeclarations', $data) && null === $data['paieRelationClientAutomatisationDesDeclarations']) {
            $object->setPaieRelationClientAutomatisationDesDeclarations(null);
        }

        if (\array_key_exists('paieRelationClientEditionsGroupees', $data) && null !== $data['paieRelationClientEditionsGroupees']) {
            $object->setPaieRelationClientEditionsGroupees($data['paieRelationClientEditionsGroupees']);
        } elseif (\array_key_exists('paieRelationClientEditionsGroupees', $data) && null === $data['paieRelationClientEditionsGroupees']) {
            $object->setPaieRelationClientEditionsGroupees(null);
        }

        if (\array_key_exists('paieRelationClientFicheSocieteEtatDossier', $data) && null !== $data['paieRelationClientFicheSocieteEtatDossier']) {
            $object->setPaieRelationClientFicheSocieteEtatDossier($data['paieRelationClientFicheSocieteEtatDossier']);
        } elseif (\array_key_exists('paieRelationClientFicheSocieteEtatDossier', $data) && null === $data['paieRelationClientFicheSocieteEtatDossier']) {
            $object->setPaieRelationClientFicheSocieteEtatDossier(null);
        }

        if (\array_key_exists('paieParametrageLiaisonComptable', $data) && null !== $data['paieParametrageLiaisonComptable']) {
            $object->setPaieParametrageLiaisonComptable($data['paieParametrageLiaisonComptable']);
        } elseif (\array_key_exists('paieParametrageLiaisonComptable', $data) && null === $data['paieParametrageLiaisonComptable']) {
            $object->setPaieParametrageLiaisonComptable(null);
        }

        if (\array_key_exists('paieRelationClientArchivageDossier', $data) && null !== $data['paieRelationClientArchivageDossier']) {
            $object->setPaieRelationClientArchivageDossier($data['paieRelationClientArchivageDossier']);
        } elseif (\array_key_exists('paieRelationClientArchivageDossier', $data) && null === $data['paieRelationClientArchivageDossier']) {
            $object->setPaieRelationClientArchivageDossier(null);
        }

        if (\array_key_exists('paieParametrageCotisationsComplementLibelles', $data) && null !== $data['paieParametrageCotisationsComplementLibelles']) {
            $object->setPaieParametrageCotisationsComplementLibelles($data['paieParametrageCotisationsComplementLibelles']);
        } elseif (\array_key_exists('paieParametrageCotisationsComplementLibelles', $data) && null === $data['paieParametrageCotisationsComplementLibelles']) {
            $object->setPaieParametrageCotisationsComplementLibelles(null);
        }

        if (\array_key_exists('paieParametrageCotisationsTaux', $data) && null !== $data['paieParametrageCotisationsTaux']) {
            $object->setPaieParametrageCotisationsTaux($data['paieParametrageCotisationsTaux']);
        } elseif (\array_key_exists('paieParametrageCotisationsTaux', $data) && null === $data['paieParametrageCotisationsTaux']) {
            $object->setPaieParametrageCotisationsTaux(null);
        }

        if (\array_key_exists('paieParametrageCotisationsTauxAT', $data) && null !== $data['paieParametrageCotisationsTauxAT']) {
            $object->setPaieParametrageCotisationsTauxAT($data['paieParametrageCotisationsTauxAT']);
        } elseif (\array_key_exists('paieParametrageCotisationsTauxAT', $data) && null === $data['paieParametrageCotisationsTauxAT']) {
            $object->setPaieParametrageCotisationsTauxAT(null);
        }

        if (\array_key_exists('paieParametragePrimesProfils', $data) && null !== $data['paieParametragePrimesProfils']) {
            $object->setPaieParametragePrimesProfils($data['paieParametragePrimesProfils']);
        } elseif (\array_key_exists('paieParametragePrimesProfils', $data) && null === $data['paieParametragePrimesProfils']) {
            $object->setPaieParametragePrimesProfils(null);
        }

        if (\array_key_exists('paiePrimesCaracteristiques', $data) && null !== $data['paiePrimesCaracteristiques']) {
            $object->setPaiePrimesCaracteristiques($data['paiePrimesCaracteristiques']);
        } elseif (\array_key_exists('paiePrimesCaracteristiques', $data) && null === $data['paiePrimesCaracteristiques']) {
            $object->setPaiePrimesCaracteristiques(null);
        }

        if (\array_key_exists('paieParametrageHeuresHeures', $data) && null !== $data['paieParametrageHeuresHeures']) {
            $object->setPaieParametrageHeuresHeures($data['paieParametrageHeuresHeures']);
        } elseif (\array_key_exists('paieParametrageHeuresHeures', $data) && null === $data['paieParametrageHeuresHeures']) {
            $object->setPaieParametrageHeuresHeures(null);
        }

        if (\array_key_exists('paieParametrageHeuresComplementLibelles', $data) && null !== $data['paieParametrageHeuresComplementLibelles']) {
            $object->setPaieParametrageHeuresComplementLibelles($data['paieParametrageHeuresComplementLibelles']);
        } elseif (\array_key_exists('paieParametrageHeuresComplementLibelles', $data) && null === $data['paieParametrageHeuresComplementLibelles']) {
            $object->setPaieParametrageHeuresComplementLibelles(null);
        }

        if (\array_key_exists('paieParametrageMtPartMtPart', $data) && null !== $data['paieParametrageMtPartMtPart']) {
            $object->setPaieParametrageMtPartMtPart($data['paieParametrageMtPartMtPart']);
        } elseif (\array_key_exists('paieParametrageMtPartMtPart', $data) && null === $data['paieParametrageMtPartMtPart']) {
            $object->setPaieParametrageMtPartMtPart(null);
        }

        if (\array_key_exists('paieParametrageVariablesASaisir', $data) && null !== $data['paieParametrageVariablesASaisir']) {
            $object->setPaieParametrageVariablesASaisir($data['paieParametrageVariablesASaisir']);
        } elseif (\array_key_exists('paieParametrageVariablesASaisir', $data) && null === $data['paieParametrageVariablesASaisir']) {
            $object->setPaieParametrageVariablesASaisir(null);
        }

        if (\array_key_exists('paieParametrageContratsComplementaires', $data) && null !== $data['paieParametrageContratsComplementaires']) {
            $object->setPaieParametrageContratsComplementaires($data['paieParametrageContratsComplementaires']);
        } elseif (\array_key_exists('paieParametrageContratsComplementaires', $data) && null === $data['paieParametrageContratsComplementaires']) {
            $object->setPaieParametrageContratsComplementaires(null);
        }

        if (\array_key_exists('paieParametrageMethodes', $data) && null !== $data['paieParametrageMethodes']) {
            $object->setPaieParametrageMethodes($data['paieParametrageMethodes']);
        } elseif (\array_key_exists('paieParametrageMethodes', $data) && null === $data['paieParametrageMethodes']) {
            $object->setPaieParametrageMethodes(null);
        }

        if (\array_key_exists('paieGestionImputationsAnalytiques', $data) && null !== $data['paieGestionImputationsAnalytiques']) {
            $object->setPaieGestionImputationsAnalytiques($data['paieGestionImputationsAnalytiques']);
        } elseif (\array_key_exists('paieGestionImputationsAnalytiques', $data) && null === $data['paieGestionImputationsAnalytiques']) {
            $object->setPaieGestionImputationsAnalytiques(null);
        }

        if (\array_key_exists('paieParametrageImportExportParams', $data) && null !== $data['paieParametrageImportExportParams']) {
            $object->setPaieParametrageImportExportParams($data['paieParametrageImportExportParams']);
        } elseif (\array_key_exists('paieParametrageImportExportParams', $data) && null === $data['paieParametrageImportExportParams']) {
            $object->setPaieParametrageImportExportParams(null);
        }

        if (\array_key_exists('paieParametrageEditionsHistoriques', $data) && null !== $data['paieParametrageEditionsHistoriques']) {
            $object->setPaieParametrageEditionsHistoriques($data['paieParametrageEditionsHistoriques']);
        } elseif (\array_key_exists('paieParametrageEditionsHistoriques', $data) && null === $data['paieParametrageEditionsHistoriques']) {
            $object->setPaieParametrageEditionsHistoriques(null);
        }

        if (\array_key_exists('paieParametrageEditionsHistoriquesNoCode', $data) && null !== $data['paieParametrageEditionsHistoriquesNoCode']) {
            $object->setPaieParametrageEditionsHistoriquesNoCode($data['paieParametrageEditionsHistoriquesNoCode']);
        } elseif (\array_key_exists('paieParametrageEditionsHistoriquesNoCode', $data) && null === $data['paieParametrageEditionsHistoriquesNoCode']) {
            $object->setPaieParametrageEditionsHistoriquesNoCode(null);
        }

        if (\array_key_exists('paieParametrageEditionsHistoriquesNoCodeHistorisation', $data) && null !== $data['paieParametrageEditionsHistoriquesNoCodeHistorisation']) {
            $object->setPaieParametrageEditionsHistoriquesNoCodeHistorisation($data['paieParametrageEditionsHistoriquesNoCodeHistorisation']);
        } elseif (\array_key_exists('paieParametrageEditionsHistoriquesNoCodeHistorisation', $data) && null === $data['paieParametrageEditionsHistoriquesNoCodeHistorisation']) {
            $object->setPaieParametrageEditionsHistoriquesNoCodeHistorisation(null);
        }

        if (\array_key_exists('paieGestionAnalytiqueEnPourcentage', $data) && null !== $data['paieGestionAnalytiqueEnPourcentage']) {
            $object->setPaieGestionAnalytiqueEnPourcentage($data['paieGestionAnalytiqueEnPourcentage']);
        } elseif (\array_key_exists('paieGestionAnalytiqueEnPourcentage', $data) && null === $data['paieGestionAnalytiqueEnPourcentage']) {
            $object->setPaieGestionAnalytiqueEnPourcentage(null);
        }

        if (\array_key_exists('analyseActiviteSpecificites', $data) && null !== $data['analyseActiviteSpecificites']) {
            $object->setAnalyseActiviteSpecificites($data['analyseActiviteSpecificites']);
        } elseif (\array_key_exists('analyseActiviteSpecificites', $data) && null === $data['analyseActiviteSpecificites']) {
            $object->setAnalyseActiviteSpecificites(null);
        }

        if (\array_key_exists('analyseActiviteProductionCollaborateur', $data) && null !== $data['analyseActiviteProductionCollaborateur']) {
            $object->setAnalyseActiviteProductionCollaborateur($data['analyseActiviteProductionCollaborateur']);
        } elseif (\array_key_exists('analyseActiviteProductionCollaborateur', $data) && null === $data['analyseActiviteProductionCollaborateur']) {
            $object->setAnalyseActiviteProductionCollaborateur(null);
        }

        if (\array_key_exists('analyseActiviteProductionUtilisateur', $data) && null !== $data['analyseActiviteProductionUtilisateur']) {
            $object->setAnalyseActiviteProductionUtilisateur($data['analyseActiviteProductionUtilisateur']);
        } elseif (\array_key_exists('analyseActiviteProductionUtilisateur', $data) && null === $data['analyseActiviteProductionUtilisateur']) {
            $object->setAnalyseActiviteProductionUtilisateur(null);
        }

        if (\array_key_exists('analyseActiviteProduction', $data) && null !== $data['analyseActiviteProduction']) {
            $object->setAnalyseActiviteProduction($data['analyseActiviteProduction']);
        } elseif (\array_key_exists('analyseActiviteProduction', $data) && null === $data['analyseActiviteProduction']) {
            $object->setAnalyseActiviteProduction(null);
        }

        if (\array_key_exists('analyseActiviteBulletins', $data) && null !== $data['analyseActiviteBulletins']) {
            $object->setAnalyseActiviteBulletins($data['analyseActiviteBulletins']);
        } elseif (\array_key_exists('analyseActiviteBulletins', $data) && null === $data['analyseActiviteBulletins']) {
            $object->setAnalyseActiviteBulletins(null);
        }

        if (\array_key_exists('analyseActiviteDossiers', $data) && null !== $data['analyseActiviteDossiers']) {
            $object->setAnalyseActiviteDossiers($data['analyseActiviteDossiers']);
        } elseif (\array_key_exists('analyseActiviteDossiers', $data) && null === $data['analyseActiviteDossiers']) {
            $object->setAnalyseActiviteDossiers(null);
        }

        if (\array_key_exists('analyseActiviteRelationClient', $data) && null !== $data['analyseActiviteRelationClient']) {
            $object->setAnalyseActiviteRelationClient($data['analyseActiviteRelationClient']);
        } elseif (\array_key_exists('analyseActiviteRelationClient', $data) && null === $data['analyseActiviteRelationClient']) {
            $object->setAnalyseActiviteRelationClient(null);
        }

        if (\array_key_exists('analyseActiviteDADSU', $data) && null !== $data['analyseActiviteDADSU']) {
            $object->setAnalyseActiviteDADSU($data['analyseActiviteDADSU']);
        } elseif (\array_key_exists('analyseActiviteDADSU', $data) && null === $data['analyseActiviteDADSU']) {
            $object->setAnalyseActiviteDADSU(null);
        }

        if (\array_key_exists('analyseActiviteDSN', $data) && null !== $data['analyseActiviteDSN']) {
            $object->setAnalyseActiviteDSN($data['analyseActiviteDSN']);
        } elseif (\array_key_exists('analyseActiviteDSN', $data) && null === $data['analyseActiviteDSN']) {
            $object->setAnalyseActiviteDSN(null);
        }

        if (\array_key_exists('analyseActiviteInfosClients', $data) && null !== $data['analyseActiviteInfosClients']) {
            $object->setAnalyseActiviteInfosClients($data['analyseActiviteInfosClients']);
        } elseif (\array_key_exists('analyseActiviteInfosClients', $data) && null === $data['analyseActiviteInfosClients']) {
            $object->setAnalyseActiviteInfosClients(null);
        }

        if (\array_key_exists('analyseActiviteListeOrganismesDSN', $data) && null !== $data['analyseActiviteListeOrganismesDSN']) {
            $object->setAnalyseActiviteListeOrganismesDSN($data['analyseActiviteListeOrganismesDSN']);
        } elseif (\array_key_exists('analyseActiviteListeOrganismesDSN', $data) && null === $data['analyseActiviteListeOrganismesDSN']) {
            $object->setAnalyseActiviteListeOrganismesDSN(null);
        }

        if (\array_key_exists('analyseActiviteRecherches', $data) && null !== $data['analyseActiviteRecherches']) {
            $object->setAnalyseActiviteRecherches($data['analyseActiviteRecherches']);
        } elseif (\array_key_exists('analyseActiviteRecherches', $data) && null === $data['analyseActiviteRecherches']) {
            $object->setAnalyseActiviteRecherches(null);
        }

        if (\array_key_exists('generalAccesFormulaireAssistance', $data) && null !== $data['generalAccesFormulaireAssistance']) {
            $object->setGeneralAccesFormulaireAssistance($data['generalAccesFormulaireAssistance']);
        } elseif (\array_key_exists('generalAccesFormulaireAssistance', $data) && null === $data['generalAccesFormulaireAssistance']) {
            $object->setGeneralAccesFormulaireAssistance(null);
        }

        if (\array_key_exists('gestionInterneParametrages', $data) && null !== $data['gestionInterneParametrages']) {
            $object->setGestionInterneParametrages($data['gestionInterneParametrages']);
        } elseif (\array_key_exists('gestionInterneParametrages', $data) && null === $data['gestionInterneParametrages']) {
            $object->setGestionInterneParametrages(null);
        }

        if (\array_key_exists('gestionInterneParametragesClients', $data) && null !== $data['gestionInterneParametragesClients']) {
            $object->setGestionInterneParametragesClients($data['gestionInterneParametragesClients']);
        } elseif (\array_key_exists('gestionInterneParametragesClients', $data) && null === $data['gestionInterneParametragesClients']) {
            $object->setGestionInterneParametragesClients(null);
        }

        if (\array_key_exists('gestionInterneParametragesClientsMenuSupprimer', $data) && null !== $data['gestionInterneParametragesClientsMenuSupprimer']) {
            $object->setGestionInterneParametragesClientsMenuSupprimer($data['gestionInterneParametragesClientsMenuSupprimer']);
        } elseif (\array_key_exists('gestionInterneParametragesClientsMenuSupprimer', $data) && null === $data['gestionInterneParametragesClientsMenuSupprimer']) {
            $object->setGestionInterneParametragesClientsMenuSupprimer(null);
        }

        if (\array_key_exists('gestionInterneParametragesClientsConfigurationAPIFichiersVirement', $data) && null !== $data['gestionInterneParametragesClientsConfigurationAPIFichiersVirement']) {
            $object->setGestionInterneParametragesClientsConfigurationAPIFichiersVirement($data['gestionInterneParametragesClientsConfigurationAPIFichiersVirement']);
        } elseif (\array_key_exists('gestionInterneParametragesClientsConfigurationAPIFichiersVirement', $data) && null === $data['gestionInterneParametragesClientsConfigurationAPIFichiersVirement']) {
            $object->setGestionInterneParametragesClientsConfigurationAPIFichiersVirement(null);
        }

        if (\array_key_exists('gestionInterneParametragesAgences', $data) && null !== $data['gestionInterneParametragesAgences']) {
            $object->setGestionInterneParametragesAgences($data['gestionInterneParametragesAgences']);
        } elseif (\array_key_exists('gestionInterneParametragesAgences', $data) && null === $data['gestionInterneParametragesAgences']) {
            $object->setGestionInterneParametragesAgences(null);
        }

        if (\array_key_exists('gestionInterneParametragesParamClesAcces', $data) && null !== $data['gestionInterneParametragesParamClesAcces']) {
            $object->setGestionInterneParametragesParamClesAcces($data['gestionInterneParametragesParamClesAcces']);
        } elseif (\array_key_exists('gestionInterneParametragesParamClesAcces', $data) && null === $data['gestionInterneParametragesParamClesAcces']) {
            $object->setGestionInterneParametragesParamClesAcces(null);
        }

        if (\array_key_exists('gestionInterneParametragesAffectationCollaborateurs', $data) && null !== $data['gestionInterneParametragesAffectationCollaborateurs']) {
            $object->setGestionInterneParametragesAffectationCollaborateurs($data['gestionInterneParametragesAffectationCollaborateurs']);
        } elseif (\array_key_exists('gestionInterneParametragesAffectationCollaborateurs', $data) && null === $data['gestionInterneParametragesAffectationCollaborateurs']) {
            $object->setGestionInterneParametragesAffectationCollaborateurs(null);
        }

        if (\array_key_exists('gestionInterneAnalyseProduction', $data) && null !== $data['gestionInterneAnalyseProduction']) {
            $object->setGestionInterneAnalyseProduction($data['gestionInterneAnalyseProduction']);
        } elseif (\array_key_exists('gestionInterneAnalyseProduction', $data) && null === $data['gestionInterneAnalyseProduction']) {
            $object->setGestionInterneAnalyseProduction(null);
        }

        if (\array_key_exists('gestionInterneAnalyseProductionSynthetique', $data) && null !== $data['gestionInterneAnalyseProductionSynthetique']) {
            $object->setGestionInterneAnalyseProductionSynthetique($data['gestionInterneAnalyseProductionSynthetique']);
        } elseif (\array_key_exists('gestionInterneAnalyseProductionSynthetique', $data) && null === $data['gestionInterneAnalyseProductionSynthetique']) {
            $object->setGestionInterneAnalyseProductionSynthetique(null);
        }

        if (\array_key_exists('gestionInterneAnalyseProductionDetaille', $data) && null !== $data['gestionInterneAnalyseProductionDetaille']) {
            $object->setGestionInterneAnalyseProductionDetaille($data['gestionInterneAnalyseProductionDetaille']);
        } elseif (\array_key_exists('gestionInterneAnalyseProductionDetaille', $data) && null === $data['gestionInterneAnalyseProductionDetaille']) {
            $object->setGestionInterneAnalyseProductionDetaille(null);
        }

        if (\array_key_exists('gestionInterneAnalyseProductionN4DS', $data) && null !== $data['gestionInterneAnalyseProductionN4DS']) {
            $object->setGestionInterneAnalyseProductionN4DS($data['gestionInterneAnalyseProductionN4DS']);
        } elseif (\array_key_exists('gestionInterneAnalyseProductionN4DS', $data) && null === $data['gestionInterneAnalyseProductionN4DS']) {
            $object->setGestionInterneAnalyseProductionN4DS(null);
        }

        if (\array_key_exists('gestionInterneInfosClients', $data) && null !== $data['gestionInterneInfosClients']) {
            $object->setGestionInterneInfosClients($data['gestionInterneInfosClients']);
        } elseif (\array_key_exists('gestionInterneInfosClients', $data) && null === $data['gestionInterneInfosClients']) {
            $object->setGestionInterneInfosClients(null);
        }

        if (\array_key_exists('gestionInterneInfosClientsInfosClients', $data) && null !== $data['gestionInterneInfosClientsInfosClients']) {
            $object->setGestionInterneInfosClientsInfosClients($data['gestionInterneInfosClientsInfosClients']);
        } elseif (\array_key_exists('gestionInterneInfosClientsInfosClients', $data) && null === $data['gestionInterneInfosClientsInfosClients']) {
            $object->setGestionInterneInfosClientsInfosClients(null);
        }

        if (\array_key_exists('gestionInterneInfosClientsInfosBancaires', $data) && null !== $data['gestionInterneInfosClientsInfosBancaires']) {
            $object->setGestionInterneInfosClientsInfosBancaires($data['gestionInterneInfosClientsInfosBancaires']);
        } elseif (\array_key_exists('gestionInterneInfosClientsInfosBancaires', $data) && null === $data['gestionInterneInfosClientsInfosBancaires']) {
            $object->setGestionInterneInfosClientsInfosBancaires(null);
        }

        if (\array_key_exists('parametragePaieConfigurationAPI', $data) && null !== $data['parametragePaieConfigurationAPI']) {
            $object->setParametragePaieConfigurationAPI($data['parametragePaieConfigurationAPI']);
        } elseif (\array_key_exists('parametragePaieConfigurationAPI', $data) && null === $data['parametragePaieConfigurationAPI']) {
            $object->setParametragePaieConfigurationAPI(null);
        }

        if (\array_key_exists('parametragePaieGenerationFichiersVirements', $data) && null !== $data['parametragePaieGenerationFichiersVirements']) {
            $object->setParametragePaieGenerationFichiersVirements($data['parametragePaieGenerationFichiersVirements']);
        } elseif (\array_key_exists('parametragePaieGenerationFichiersVirements', $data) && null === $data['parametragePaieGenerationFichiersVirements']) {
            $object->setParametragePaieGenerationFichiersVirements(null);
        }

        if (\array_key_exists('administrationConnexionAuthentificationExterne', $data) && null !== $data['administrationConnexionAuthentificationExterne']) {
            $object->setAdministrationConnexionAuthentificationExterne($data['administrationConnexionAuthentificationExterne']);
        } elseif (\array_key_exists('administrationConnexionAuthentificationExterne', $data) && null === $data['administrationConnexionAuthentificationExterne']) {
            $object->setAdministrationConnexionAuthentificationExterne(null);
        }

        if (\array_key_exists('administrationConnexionPersonnalisationEcranConnexion', $data) && null !== $data['administrationConnexionPersonnalisationEcranConnexion']) {
            $object->setAdministrationConnexionPersonnalisationEcranConnexion($data['administrationConnexionPersonnalisationEcranConnexion']);
        } elseif (\array_key_exists('administrationConnexionPersonnalisationEcranConnexion', $data) && null === $data['administrationConnexionPersonnalisationEcranConnexion']) {
            $object->setAdministrationConnexionPersonnalisationEcranConnexion(null);
        }

        if (\array_key_exists('administrationParametrages', $data) && null !== $data['administrationParametrages']) {
            $object->setAdministrationParametrages($data['administrationParametrages']);
        } elseif (\array_key_exists('administrationParametrages', $data) && null === $data['administrationParametrages']) {
            $object->setAdministrationParametrages(null);
        }

        if (\array_key_exists('administrationParametragesParametresAvances', $data) && null !== $data['administrationParametragesParametresAvances']) {
            $object->setAdministrationParametragesParametresAvances($data['administrationParametragesParametresAvances']);
        } elseif (\array_key_exists('administrationParametragesParametresAvances', $data) && null === $data['administrationParametragesParametresAvances']) {
            $object->setAdministrationParametragesParametresAvances(null);
        }

        if (\array_key_exists('administrationPilotageActivite', $data) && null !== $data['administrationPilotageActivite']) {
            $object->setAdministrationPilotageActivite($data['administrationPilotageActivite']);
        } elseif (\array_key_exists('administrationPilotageActivite', $data) && null === $data['administrationPilotageActivite']) {
            $object->setAdministrationPilotageActivite(null);
        }

        if (\array_key_exists('administrationPilotageActiviteHistoriqueConnexions', $data) && null !== $data['administrationPilotageActiviteHistoriqueConnexions']) {
            $object->setAdministrationPilotageActiviteHistoriqueConnexions($data['administrationPilotageActiviteHistoriqueConnexions']);
        } elseif (\array_key_exists('administrationPilotageActiviteHistoriqueConnexions', $data) && null === $data['administrationPilotageActiviteHistoriqueConnexions']) {
            $object->setAdministrationPilotageActiviteHistoriqueConnexions(null);
        }

        if (\array_key_exists('administrationPilotageActiviteHistoriqueModifications', $data) && null !== $data['administrationPilotageActiviteHistoriqueModifications']) {
            $object->setAdministrationPilotageActiviteHistoriqueModifications($data['administrationPilotageActiviteHistoriqueModifications']);
        } elseif (\array_key_exists('administrationPilotageActiviteHistoriqueModifications', $data) && null === $data['administrationPilotageActiviteHistoriqueModifications']) {
            $object->setAdministrationPilotageActiviteHistoriqueModifications(null);
        }

        if (\array_key_exists('administrationConfigurationExport', $data) && null !== $data['administrationConfigurationExport']) {
            $object->setAdministrationConfigurationExport($data['administrationConfigurationExport']);
        } elseif (\array_key_exists('administrationConfigurationExport', $data) && null === $data['administrationConfigurationExport']) {
            $object->setAdministrationConfigurationExport(null);
        }

        if (\array_key_exists('silaeHubLienSilaeHub', $data) && null !== $data['silaeHubLienSilaeHub']) {
            $object->setSilaeHubLienSilaeHub($data['silaeHubLienSilaeHub']);
        } elseif (\array_key_exists('silaeHubLienSilaeHub', $data) && null === $data['silaeHubLienSilaeHub']) {
            $object->setSilaeHubLienSilaeHub(null);
        }

        if (\array_key_exists('productionSuiviFPOC', $data) && null !== $data['productionSuiviFPOC']) {
            $object->setProductionSuiviFPOC($data['productionSuiviFPOC']);
        } elseif (\array_key_exists('productionSuiviFPOC', $data) && null === $data['productionSuiviFPOC']) {
            $object->setProductionSuiviFPOC(null);
        }

        if (\array_key_exists('productionSuiviFPOCTelechargerPlus', $data) && null !== $data['productionSuiviFPOCTelechargerPlus']) {
            $object->setProductionSuiviFPOCTelechargerPlus($data['productionSuiviFPOCTelechargerPlus']);
        } elseif (\array_key_exists('productionSuiviFPOCTelechargerPlus', $data) && null === $data['productionSuiviFPOCTelechargerPlus']) {
            $object->setProductionSuiviFPOCTelechargerPlus(null);
        }

        if (\array_key_exists('productionSuiviFPOCAfficherNonRattachees', $data) && null !== $data['productionSuiviFPOCAfficherNonRattachees']) {
            $object->setProductionSuiviFPOCAfficherNonRattachees($data['productionSuiviFPOCAfficherNonRattachees']);
        } elseif (\array_key_exists('productionSuiviFPOCAfficherNonRattachees', $data) && null === $data['productionSuiviFPOCAfficherNonRattachees']) {
            $object->setProductionSuiviFPOCAfficherNonRattachees(null);
        }

        if (\array_key_exists('dossierPaieOutilsSuppressionDesDonnees', $data) && null !== $data['dossierPaieOutilsSuppressionDesDonnees']) {
            $object->setDossierPaieOutilsSuppressionDesDonnees($data['dossierPaieOutilsSuppressionDesDonnees']);
        } elseif (\array_key_exists('dossierPaieOutilsSuppressionDesDonnees', $data) && null === $data['dossierPaieOutilsSuppressionDesDonnees']) {
            $object->setDossierPaieOutilsSuppressionDesDonnees(null);
        }

        if (\array_key_exists('dossierPaieDsnRegularisationManuelle', $data) && null !== $data['dossierPaieDsnRegularisationManuelle']) {
            $object->setDossierPaieDsnRegularisationManuelle($data['dossierPaieDsnRegularisationManuelle']);
        } elseif (\array_key_exists('dossierPaieDsnRegularisationManuelle', $data) && null === $data['dossierPaieDsnRegularisationManuelle']) {
            $object->setDossierPaieDsnRegularisationManuelle(null);
        }

        if (\array_key_exists('gestionInterneParametragesClientsConfigurationAPIAccesAPIDossier', $data) && null !== $data['gestionInterneParametragesClientsConfigurationAPIAccesAPIDossier']) {
            $object->setGestionInterneParametragesClientsConfigurationAPIAccesAPIDossier($data['gestionInterneParametragesClientsConfigurationAPIAccesAPIDossier']);
        } elseif (\array_key_exists('gestionInterneParametragesClientsConfigurationAPIAccesAPIDossier', $data) && null === $data['gestionInterneParametragesClientsConfigurationAPIAccesAPIDossier']) {
            $object->setGestionInterneParametragesClientsConfigurationAPIAccesAPIDossier(null);
        }

        if (\array_key_exists('gestionInterneParametragesClientsSuppressionDeDossiers', $data) && null !== $data['gestionInterneParametragesClientsSuppressionDeDossiers']) {
            $object->setGestionInterneParametragesClientsSuppressionDeDossiers($data['gestionInterneParametragesClientsSuppressionDeDossiers']);
        } elseif (\array_key_exists('gestionInterneParametragesClientsSuppressionDeDossiers', $data) && null === $data['gestionInterneParametragesClientsSuppressionDeDossiers']) {
            $object->setGestionInterneParametragesClientsSuppressionDeDossiers(null);
        }

        if (\array_key_exists('outilsPaieExportV2ExportNonChiffre', $data) && null !== $data['outilsPaieExportV2ExportNonChiffre']) {
            $object->setOutilsPaieExportV2ExportNonChiffre($data['outilsPaieExportV2ExportNonChiffre']);
        } elseif (\array_key_exists('outilsPaieExportV2ExportNonChiffre', $data) && null === $data['outilsPaieExportV2ExportNonChiffre']) {
            $object->setOutilsPaieExportV2ExportNonChiffre(null);
        }

        if (\array_key_exists('administrationConnexion', $data) && null !== $data['administrationConnexion']) {
            $object->setAdministrationConnexion($data['administrationConnexion']);
        } elseif (\array_key_exists('administrationConnexion', $data) && null === $data['administrationConnexion']) {
            $object->setAdministrationConnexion(null);
        }

        if (\array_key_exists('administrationParametragesAuthentificationExterneDossier', $data) && null !== $data['administrationParametragesAuthentificationExterneDossier']) {
            $object->setAdministrationParametragesAuthentificationExterneDossier($data['administrationParametragesAuthentificationExterneDossier']);
        } elseif (\array_key_exists('administrationParametragesAuthentificationExterneDossier', $data) && null === $data['administrationParametragesAuthentificationExterneDossier']) {
            $object->setAdministrationParametragesAuthentificationExterneDossier(null);
        }

        if (\array_key_exists('administrationPilotageActiviteBlocageAppelant', $data) && null !== $data['administrationPilotageActiviteBlocageAppelant']) {
            $object->setAdministrationPilotageActiviteBlocageAppelant($data['administrationPilotageActiviteBlocageAppelant']);
        } elseif (\array_key_exists('administrationPilotageActiviteBlocageAppelant', $data) && null === $data['administrationPilotageActiviteBlocageAppelant']) {
            $object->setAdministrationPilotageActiviteBlocageAppelant(null);
        }

        if (\array_key_exists('administrationPilotageActiviteComptesBloques', $data) && null !== $data['administrationPilotageActiviteComptesBloques']) {
            $object->setAdministrationPilotageActiviteComptesBloques($data['administrationPilotageActiviteComptesBloques']);
        } elseif (\array_key_exists('administrationPilotageActiviteComptesBloques', $data) && null === $data['administrationPilotageActiviteComptesBloques']) {
            $object->setAdministrationPilotageActiviteComptesBloques(null);
        }

        if (\array_key_exists('utilisationApi', $data) && null !== $data['utilisationApi']) {
            $object->setUtilisationApi($data['utilisationApi']);
        } elseif (\array_key_exists('utilisationApi', $data) && null === $data['utilisationApi']) {
            $object->setUtilisationApi(null);
        }

        if (\array_key_exists('utilisationApiGenerationMotDePasseAlternatif', $data) && null !== $data['utilisationApiGenerationMotDePasseAlternatif']) {
            $object->setUtilisationApiGenerationMotDePasseAlternatif($data['utilisationApiGenerationMotDePasseAlternatif']);
        } elseif (\array_key_exists('utilisationApiGenerationMotDePasseAlternatif', $data) && null === $data['utilisationApiGenerationMotDePasseAlternatif']) {
            $object->setUtilisationApiGenerationMotDePasseAlternatif(null);
        }

        if (\array_key_exists('dossierPaieSuiviModifications', $data) && null !== $data['dossierPaieSuiviModifications']) {
            $object->setDossierPaieSuiviModifications($data['dossierPaieSuiviModifications']);
        } elseif (\array_key_exists('dossierPaieSuiviModifications', $data) && null === $data['dossierPaieSuiviModifications']) {
            $object->setDossierPaieSuiviModifications(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('paieRelationClientGestionPortailCP') && null !== $data->getPaieRelationClientGestionPortailCP()) {
            $dataArray['paieRelationClientGestionPortailCP'] = $data->getPaieRelationClientGestionPortailCP();
        }

        if ($data->isInitialized('paieRelationClientContact') && null !== $data->getPaieRelationClientContact()) {
            $dataArray['paieRelationClientContact'] = $data->getPaieRelationClientContact();
        }

        if ($data->isInitialized('paieRelationClientTachesARealiser') && null !== $data->getPaieRelationClientTachesARealiser()) {
            $dataArray['paieRelationClientTachesARealiser'] = $data->getPaieRelationClientTachesARealiser();
        }

        if ($data->isInitialized('paieParametrageMtPartMtPartApplicablesAuDossier') && null !== $data->getPaieParametrageMtPartMtPartApplicablesAuDossier()) {
            $dataArray['paieParametrageMtPartMtPartApplicablesAuDossier'] = $data->getPaieParametrageMtPartMtPartApplicablesAuDossier();
        }

        if ($data->isInitialized('paieCotisationsTauxApplicablesAuDossier') && null !== $data->getPaieCotisationsTauxApplicablesAuDossier()) {
            $dataArray['paieCotisationsTauxApplicablesAuDossier'] = $data->getPaieCotisationsTauxApplicablesAuDossier();
        }

        if ($data->isInitialized('paieRelationClientCycleDePaie') && null !== $data->getPaieRelationClientCycleDePaie()) {
            $dataArray['paieRelationClientCycleDePaie'] = $data->getPaieRelationClientCycleDePaie();
        }

        if ($data->isInitialized('paieRelationClientAutomatisationDesDeclarations') && null !== $data->getPaieRelationClientAutomatisationDesDeclarations()) {
            $dataArray['paieRelationClientAutomatisationDesDeclarations'] = $data->getPaieRelationClientAutomatisationDesDeclarations();
        }

        if ($data->isInitialized('paieRelationClientEditionsGroupees') && null !== $data->getPaieRelationClientEditionsGroupees()) {
            $dataArray['paieRelationClientEditionsGroupees'] = $data->getPaieRelationClientEditionsGroupees();
        }

        if ($data->isInitialized('paieRelationClientFicheSocieteEtatDossier') && null !== $data->getPaieRelationClientFicheSocieteEtatDossier()) {
            $dataArray['paieRelationClientFicheSocieteEtatDossier'] = $data->getPaieRelationClientFicheSocieteEtatDossier();
        }

        if ($data->isInitialized('paieParametrageLiaisonComptable') && null !== $data->getPaieParametrageLiaisonComptable()) {
            $dataArray['paieParametrageLiaisonComptable'] = $data->getPaieParametrageLiaisonComptable();
        }

        if ($data->isInitialized('paieRelationClientArchivageDossier') && null !== $data->getPaieRelationClientArchivageDossier()) {
            $dataArray['paieRelationClientArchivageDossier'] = $data->getPaieRelationClientArchivageDossier();
        }

        if ($data->isInitialized('paieParametrageCotisationsComplementLibelles') && null !== $data->getPaieParametrageCotisationsComplementLibelles()) {
            $dataArray['paieParametrageCotisationsComplementLibelles'] = $data->getPaieParametrageCotisationsComplementLibelles();
        }

        if ($data->isInitialized('paieParametrageCotisationsTaux') && null !== $data->getPaieParametrageCotisationsTaux()) {
            $dataArray['paieParametrageCotisationsTaux'] = $data->getPaieParametrageCotisationsTaux();
        }

        if ($data->isInitialized('paieParametrageCotisationsTauxAT') && null !== $data->getPaieParametrageCotisationsTauxAT()) {
            $dataArray['paieParametrageCotisationsTauxAT'] = $data->getPaieParametrageCotisationsTauxAT();
        }

        if ($data->isInitialized('paieParametragePrimesProfils') && null !== $data->getPaieParametragePrimesProfils()) {
            $dataArray['paieParametragePrimesProfils'] = $data->getPaieParametragePrimesProfils();
        }

        if ($data->isInitialized('paiePrimesCaracteristiques') && null !== $data->getPaiePrimesCaracteristiques()) {
            $dataArray['paiePrimesCaracteristiques'] = $data->getPaiePrimesCaracteristiques();
        }

        if ($data->isInitialized('paieParametrageHeuresHeures') && null !== $data->getPaieParametrageHeuresHeures()) {
            $dataArray['paieParametrageHeuresHeures'] = $data->getPaieParametrageHeuresHeures();
        }

        if ($data->isInitialized('paieParametrageHeuresComplementLibelles') && null !== $data->getPaieParametrageHeuresComplementLibelles()) {
            $dataArray['paieParametrageHeuresComplementLibelles'] = $data->getPaieParametrageHeuresComplementLibelles();
        }

        if ($data->isInitialized('paieParametrageMtPartMtPart') && null !== $data->getPaieParametrageMtPartMtPart()) {
            $dataArray['paieParametrageMtPartMtPart'] = $data->getPaieParametrageMtPartMtPart();
        }

        if ($data->isInitialized('paieParametrageVariablesASaisir') && null !== $data->getPaieParametrageVariablesASaisir()) {
            $dataArray['paieParametrageVariablesASaisir'] = $data->getPaieParametrageVariablesASaisir();
        }

        if ($data->isInitialized('paieParametrageContratsComplementaires') && null !== $data->getPaieParametrageContratsComplementaires()) {
            $dataArray['paieParametrageContratsComplementaires'] = $data->getPaieParametrageContratsComplementaires();
        }

        if ($data->isInitialized('paieParametrageMethodes') && null !== $data->getPaieParametrageMethodes()) {
            $dataArray['paieParametrageMethodes'] = $data->getPaieParametrageMethodes();
        }

        if ($data->isInitialized('paieGestionImputationsAnalytiques') && null !== $data->getPaieGestionImputationsAnalytiques()) {
            $dataArray['paieGestionImputationsAnalytiques'] = $data->getPaieGestionImputationsAnalytiques();
        }

        if ($data->isInitialized('paieParametrageImportExportParams') && null !== $data->getPaieParametrageImportExportParams()) {
            $dataArray['paieParametrageImportExportParams'] = $data->getPaieParametrageImportExportParams();
        }

        if ($data->isInitialized('paieParametrageEditionsHistoriques') && null !== $data->getPaieParametrageEditionsHistoriques()) {
            $dataArray['paieParametrageEditionsHistoriques'] = $data->getPaieParametrageEditionsHistoriques();
        }

        if ($data->isInitialized('paieParametrageEditionsHistoriquesNoCode') && null !== $data->getPaieParametrageEditionsHistoriquesNoCode()) {
            $dataArray['paieParametrageEditionsHistoriquesNoCode'] = $data->getPaieParametrageEditionsHistoriquesNoCode();
        }

        if ($data->isInitialized('paieParametrageEditionsHistoriquesNoCodeHistorisation') && null !== $data->getPaieParametrageEditionsHistoriquesNoCodeHistorisation()) {
            $dataArray['paieParametrageEditionsHistoriquesNoCodeHistorisation'] = $data->getPaieParametrageEditionsHistoriquesNoCodeHistorisation();
        }

        if ($data->isInitialized('paieGestionAnalytiqueEnPourcentage') && null !== $data->getPaieGestionAnalytiqueEnPourcentage()) {
            $dataArray['paieGestionAnalytiqueEnPourcentage'] = $data->getPaieGestionAnalytiqueEnPourcentage();
        }

        if ($data->isInitialized('analyseActiviteSpecificites') && null !== $data->getAnalyseActiviteSpecificites()) {
            $dataArray['analyseActiviteSpecificites'] = $data->getAnalyseActiviteSpecificites();
        }

        if ($data->isInitialized('analyseActiviteProductionCollaborateur') && null !== $data->getAnalyseActiviteProductionCollaborateur()) {
            $dataArray['analyseActiviteProductionCollaborateur'] = $data->getAnalyseActiviteProductionCollaborateur();
        }

        if ($data->isInitialized('analyseActiviteProductionUtilisateur') && null !== $data->getAnalyseActiviteProductionUtilisateur()) {
            $dataArray['analyseActiviteProductionUtilisateur'] = $data->getAnalyseActiviteProductionUtilisateur();
        }

        if ($data->isInitialized('analyseActiviteProduction') && null !== $data->getAnalyseActiviteProduction()) {
            $dataArray['analyseActiviteProduction'] = $data->getAnalyseActiviteProduction();
        }

        if ($data->isInitialized('analyseActiviteBulletins') && null !== $data->getAnalyseActiviteBulletins()) {
            $dataArray['analyseActiviteBulletins'] = $data->getAnalyseActiviteBulletins();
        }

        if ($data->isInitialized('analyseActiviteDossiers') && null !== $data->getAnalyseActiviteDossiers()) {
            $dataArray['analyseActiviteDossiers'] = $data->getAnalyseActiviteDossiers();
        }

        if ($data->isInitialized('analyseActiviteRelationClient') && null !== $data->getAnalyseActiviteRelationClient()) {
            $dataArray['analyseActiviteRelationClient'] = $data->getAnalyseActiviteRelationClient();
        }

        if ($data->isInitialized('analyseActiviteDADSU') && null !== $data->getAnalyseActiviteDADSU()) {
            $dataArray['analyseActiviteDADSU'] = $data->getAnalyseActiviteDADSU();
        }

        if ($data->isInitialized('analyseActiviteDSN') && null !== $data->getAnalyseActiviteDSN()) {
            $dataArray['analyseActiviteDSN'] = $data->getAnalyseActiviteDSN();
        }

        if ($data->isInitialized('analyseActiviteInfosClients') && null !== $data->getAnalyseActiviteInfosClients()) {
            $dataArray['analyseActiviteInfosClients'] = $data->getAnalyseActiviteInfosClients();
        }

        if ($data->isInitialized('analyseActiviteListeOrganismesDSN') && null !== $data->getAnalyseActiviteListeOrganismesDSN()) {
            $dataArray['analyseActiviteListeOrganismesDSN'] = $data->getAnalyseActiviteListeOrganismesDSN();
        }

        if ($data->isInitialized('analyseActiviteRecherches') && null !== $data->getAnalyseActiviteRecherches()) {
            $dataArray['analyseActiviteRecherches'] = $data->getAnalyseActiviteRecherches();
        }

        if ($data->isInitialized('generalAccesFormulaireAssistance') && null !== $data->getGeneralAccesFormulaireAssistance()) {
            $dataArray['generalAccesFormulaireAssistance'] = $data->getGeneralAccesFormulaireAssistance();
        }

        if ($data->isInitialized('gestionInterneParametrages') && null !== $data->getGestionInterneParametrages()) {
            $dataArray['gestionInterneParametrages'] = $data->getGestionInterneParametrages();
        }

        if ($data->isInitialized('gestionInterneParametragesClients') && null !== $data->getGestionInterneParametragesClients()) {
            $dataArray['gestionInterneParametragesClients'] = $data->getGestionInterneParametragesClients();
        }

        if ($data->isInitialized('gestionInterneParametragesClientsMenuSupprimer') && null !== $data->getGestionInterneParametragesClientsMenuSupprimer()) {
            $dataArray['gestionInterneParametragesClientsMenuSupprimer'] = $data->getGestionInterneParametragesClientsMenuSupprimer();
        }

        if ($data->isInitialized('gestionInterneParametragesClientsConfigurationAPIFichiersVirement') && null !== $data->getGestionInterneParametragesClientsConfigurationAPIFichiersVirement()) {
            $dataArray['gestionInterneParametragesClientsConfigurationAPIFichiersVirement'] = $data->getGestionInterneParametragesClientsConfigurationAPIFichiersVirement();
        }

        if ($data->isInitialized('gestionInterneParametragesAgences') && null !== $data->getGestionInterneParametragesAgences()) {
            $dataArray['gestionInterneParametragesAgences'] = $data->getGestionInterneParametragesAgences();
        }

        if ($data->isInitialized('gestionInterneParametragesParamClesAcces') && null !== $data->getGestionInterneParametragesParamClesAcces()) {
            $dataArray['gestionInterneParametragesParamClesAcces'] = $data->getGestionInterneParametragesParamClesAcces();
        }

        if ($data->isInitialized('gestionInterneParametragesAffectationCollaborateurs') && null !== $data->getGestionInterneParametragesAffectationCollaborateurs()) {
            $dataArray['gestionInterneParametragesAffectationCollaborateurs'] = $data->getGestionInterneParametragesAffectationCollaborateurs();
        }

        if ($data->isInitialized('gestionInterneAnalyseProduction') && null !== $data->getGestionInterneAnalyseProduction()) {
            $dataArray['gestionInterneAnalyseProduction'] = $data->getGestionInterneAnalyseProduction();
        }

        if ($data->isInitialized('gestionInterneAnalyseProductionSynthetique') && null !== $data->getGestionInterneAnalyseProductionSynthetique()) {
            $dataArray['gestionInterneAnalyseProductionSynthetique'] = $data->getGestionInterneAnalyseProductionSynthetique();
        }

        if ($data->isInitialized('gestionInterneAnalyseProductionDetaille') && null !== $data->getGestionInterneAnalyseProductionDetaille()) {
            $dataArray['gestionInterneAnalyseProductionDetaille'] = $data->getGestionInterneAnalyseProductionDetaille();
        }

        if ($data->isInitialized('gestionInterneAnalyseProductionN4DS') && null !== $data->getGestionInterneAnalyseProductionN4DS()) {
            $dataArray['gestionInterneAnalyseProductionN4DS'] = $data->getGestionInterneAnalyseProductionN4DS();
        }

        if ($data->isInitialized('gestionInterneInfosClients') && null !== $data->getGestionInterneInfosClients()) {
            $dataArray['gestionInterneInfosClients'] = $data->getGestionInterneInfosClients();
        }

        if ($data->isInitialized('gestionInterneInfosClientsInfosClients') && null !== $data->getGestionInterneInfosClientsInfosClients()) {
            $dataArray['gestionInterneInfosClientsInfosClients'] = $data->getGestionInterneInfosClientsInfosClients();
        }

        if ($data->isInitialized('gestionInterneInfosClientsInfosBancaires') && null !== $data->getGestionInterneInfosClientsInfosBancaires()) {
            $dataArray['gestionInterneInfosClientsInfosBancaires'] = $data->getGestionInterneInfosClientsInfosBancaires();
        }

        if ($data->isInitialized('parametragePaieConfigurationAPI') && null !== $data->getParametragePaieConfigurationAPI()) {
            $dataArray['parametragePaieConfigurationAPI'] = $data->getParametragePaieConfigurationAPI();
        }

        if ($data->isInitialized('parametragePaieGenerationFichiersVirements') && null !== $data->getParametragePaieGenerationFichiersVirements()) {
            $dataArray['parametragePaieGenerationFichiersVirements'] = $data->getParametragePaieGenerationFichiersVirements();
        }

        if ($data->isInitialized('administrationConnexionAuthentificationExterne') && null !== $data->getAdministrationConnexionAuthentificationExterne()) {
            $dataArray['administrationConnexionAuthentificationExterne'] = $data->getAdministrationConnexionAuthentificationExterne();
        }

        if ($data->isInitialized('administrationConnexionPersonnalisationEcranConnexion') && null !== $data->getAdministrationConnexionPersonnalisationEcranConnexion()) {
            $dataArray['administrationConnexionPersonnalisationEcranConnexion'] = $data->getAdministrationConnexionPersonnalisationEcranConnexion();
        }

        if ($data->isInitialized('administrationParametrages') && null !== $data->getAdministrationParametrages()) {
            $dataArray['administrationParametrages'] = $data->getAdministrationParametrages();
        }

        if ($data->isInitialized('administrationParametragesParametresAvances') && null !== $data->getAdministrationParametragesParametresAvances()) {
            $dataArray['administrationParametragesParametresAvances'] = $data->getAdministrationParametragesParametresAvances();
        }

        if ($data->isInitialized('administrationPilotageActivite') && null !== $data->getAdministrationPilotageActivite()) {
            $dataArray['administrationPilotageActivite'] = $data->getAdministrationPilotageActivite();
        }

        if ($data->isInitialized('administrationPilotageActiviteHistoriqueConnexions') && null !== $data->getAdministrationPilotageActiviteHistoriqueConnexions()) {
            $dataArray['administrationPilotageActiviteHistoriqueConnexions'] = $data->getAdministrationPilotageActiviteHistoriqueConnexions();
        }

        if ($data->isInitialized('administrationPilotageActiviteHistoriqueModifications') && null !== $data->getAdministrationPilotageActiviteHistoriqueModifications()) {
            $dataArray['administrationPilotageActiviteHistoriqueModifications'] = $data->getAdministrationPilotageActiviteHistoriqueModifications();
        }

        if ($data->isInitialized('administrationConfigurationExport') && null !== $data->getAdministrationConfigurationExport()) {
            $dataArray['administrationConfigurationExport'] = $data->getAdministrationConfigurationExport();
        }

        if ($data->isInitialized('silaeHubLienSilaeHub') && null !== $data->getSilaeHubLienSilaeHub()) {
            $dataArray['silaeHubLienSilaeHub'] = $data->getSilaeHubLienSilaeHub();
        }

        if ($data->isInitialized('productionSuiviFPOC') && null !== $data->getProductionSuiviFPOC()) {
            $dataArray['productionSuiviFPOC'] = $data->getProductionSuiviFPOC();
        }

        if ($data->isInitialized('productionSuiviFPOCTelechargerPlus') && null !== $data->getProductionSuiviFPOCTelechargerPlus()) {
            $dataArray['productionSuiviFPOCTelechargerPlus'] = $data->getProductionSuiviFPOCTelechargerPlus();
        }

        if ($data->isInitialized('productionSuiviFPOCAfficherNonRattachees') && null !== $data->getProductionSuiviFPOCAfficherNonRattachees()) {
            $dataArray['productionSuiviFPOCAfficherNonRattachees'] = $data->getProductionSuiviFPOCAfficherNonRattachees();
        }

        if ($data->isInitialized('dossierPaieOutilsSuppressionDesDonnees') && null !== $data->getDossierPaieOutilsSuppressionDesDonnees()) {
            $dataArray['dossierPaieOutilsSuppressionDesDonnees'] = $data->getDossierPaieOutilsSuppressionDesDonnees();
        }

        if ($data->isInitialized('dossierPaieDsnRegularisationManuelle') && null !== $data->getDossierPaieDsnRegularisationManuelle()) {
            $dataArray['dossierPaieDsnRegularisationManuelle'] = $data->getDossierPaieDsnRegularisationManuelle();
        }

        if ($data->isInitialized('gestionInterneParametragesClientsConfigurationAPIAccesAPIDossier') && null !== $data->getGestionInterneParametragesClientsConfigurationAPIAccesAPIDossier()) {
            $dataArray['gestionInterneParametragesClientsConfigurationAPIAccesAPIDossier'] = $data->getGestionInterneParametragesClientsConfigurationAPIAccesAPIDossier();
        }

        if ($data->isInitialized('gestionInterneParametragesClientsSuppressionDeDossiers') && null !== $data->getGestionInterneParametragesClientsSuppressionDeDossiers()) {
            $dataArray['gestionInterneParametragesClientsSuppressionDeDossiers'] = $data->getGestionInterneParametragesClientsSuppressionDeDossiers();
        }

        if ($data->isInitialized('outilsPaieExportV2ExportNonChiffre') && null !== $data->getOutilsPaieExportV2ExportNonChiffre()) {
            $dataArray['outilsPaieExportV2ExportNonChiffre'] = $data->getOutilsPaieExportV2ExportNonChiffre();
        }

        if ($data->isInitialized('administrationConnexion') && null !== $data->getAdministrationConnexion()) {
            $dataArray['administrationConnexion'] = $data->getAdministrationConnexion();
        }

        if ($data->isInitialized('administrationParametragesAuthentificationExterneDossier') && null !== $data->getAdministrationParametragesAuthentificationExterneDossier()) {
            $dataArray['administrationParametragesAuthentificationExterneDossier'] = $data->getAdministrationParametragesAuthentificationExterneDossier();
        }

        if ($data->isInitialized('administrationPilotageActiviteBlocageAppelant') && null !== $data->getAdministrationPilotageActiviteBlocageAppelant()) {
            $dataArray['administrationPilotageActiviteBlocageAppelant'] = $data->getAdministrationPilotageActiviteBlocageAppelant();
        }

        if ($data->isInitialized('administrationPilotageActiviteComptesBloques') && null !== $data->getAdministrationPilotageActiviteComptesBloques()) {
            $dataArray['administrationPilotageActiviteComptesBloques'] = $data->getAdministrationPilotageActiviteComptesBloques();
        }

        if ($data->isInitialized('utilisationApi') && null !== $data->getUtilisationApi()) {
            $dataArray['utilisationApi'] = $data->getUtilisationApi();
        }

        if ($data->isInitialized('utilisationApiGenerationMotDePasseAlternatif') && null !== $data->getUtilisationApiGenerationMotDePasseAlternatif()) {
            $dataArray['utilisationApiGenerationMotDePasseAlternatif'] = $data->getUtilisationApiGenerationMotDePasseAlternatif();
        }

        if ($data->isInitialized('dossierPaieSuiviModifications') && null !== $data->getDossierPaieSuiviModifications()) {
            $dataArray['dossierPaieSuiviModifications'] = $data->getDossierPaieSuiviModifications();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CompteCollaborateurDroitsUtilisateur::class => false];
    }
}
