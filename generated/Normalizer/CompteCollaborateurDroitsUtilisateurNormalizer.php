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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\CompteCollaborateurDroitsUtilisateur' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof CompteCollaborateurDroitsUtilisateur;
    }

    /**
     * @param mixed|null $format
     * @param mixed      $data
     * @param mixed      $class
     */
    public function denormalize($data, $class, $format = null, array $context = [])
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
        if (\array_key_exists('gestionInterneParametragesCollaborateurs', $data) && null !== $data['gestionInterneParametragesCollaborateurs']) {
            $object->setGestionInterneParametragesCollaborateurs($data['gestionInterneParametragesCollaborateurs']);
        } elseif (\array_key_exists('gestionInterneParametragesCollaborateurs', $data) && null === $data['gestionInterneParametragesCollaborateurs']) {
            $object->setGestionInterneParametragesCollaborateurs(null);
        }
        if (\array_key_exists('gestionInterneParametragesClientsConfigurationAPIFichiersVirement', $data) && null !== $data['gestionInterneParametragesClientsConfigurationAPIFichiersVirement']) {
            $object->setGestionInterneParametragesClientsConfigurationAPIFichiersVirement($data['gestionInterneParametragesClientsConfigurationAPIFichiersVirement']);
        } elseif (\array_key_exists('gestionInterneParametragesClientsConfigurationAPIFichiersVirement', $data) && null === $data['gestionInterneParametragesClientsConfigurationAPIFichiersVirement']) {
            $object->setGestionInterneParametragesClientsConfigurationAPIFichiersVirement(null);
        }
        if (\array_key_exists('gestionInterneParametragesCollaborateursGestionRoles', $data) && null !== $data['gestionInterneParametragesCollaborateursGestionRoles']) {
            $object->setGestionInterneParametragesCollaborateursGestionRoles($data['gestionInterneParametragesCollaborateursGestionRoles']);
        } elseif (\array_key_exists('gestionInterneParametragesCollaborateursGestionRoles', $data) && null === $data['gestionInterneParametragesCollaborateursGestionRoles']) {
            $object->setGestionInterneParametragesCollaborateursGestionRoles(null);
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
        if (\array_key_exists('productionLienSilaeHub', $data) && null !== $data['productionLienSilaeHub']) {
            $object->setProductionLienSilaeHub($data['productionLienSilaeHub']);
        } elseif (\array_key_exists('productionLienSilaeHub', $data) && null === $data['productionLienSilaeHub']) {
            $object->setProductionLienSilaeHub(null);
        }

        return $object;
    }

    /**
     * @param mixed|null $format
     * @param mixed      $object
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('paieRelationClientGestionPortailCP') && null !== $object->getPaieRelationClientGestionPortailCP()) {
            $data['paieRelationClientGestionPortailCP'] = $object->getPaieRelationClientGestionPortailCP();
        }
        if ($object->isInitialized('paieRelationClientContact') && null !== $object->getPaieRelationClientContact()) {
            $data['paieRelationClientContact'] = $object->getPaieRelationClientContact();
        }
        if ($object->isInitialized('paieRelationClientTachesARealiser') && null !== $object->getPaieRelationClientTachesARealiser()) {
            $data['paieRelationClientTachesARealiser'] = $object->getPaieRelationClientTachesARealiser();
        }
        if ($object->isInitialized('paieParametrageMtPartMtPartApplicablesAuDossier') && null !== $object->getPaieParametrageMtPartMtPartApplicablesAuDossier()) {
            $data['paieParametrageMtPartMtPartApplicablesAuDossier'] = $object->getPaieParametrageMtPartMtPartApplicablesAuDossier();
        }
        if ($object->isInitialized('paieCotisationsTauxApplicablesAuDossier') && null !== $object->getPaieCotisationsTauxApplicablesAuDossier()) {
            $data['paieCotisationsTauxApplicablesAuDossier'] = $object->getPaieCotisationsTauxApplicablesAuDossier();
        }
        if ($object->isInitialized('paieRelationClientCycleDePaie') && null !== $object->getPaieRelationClientCycleDePaie()) {
            $data['paieRelationClientCycleDePaie'] = $object->getPaieRelationClientCycleDePaie();
        }
        if ($object->isInitialized('paieRelationClientAutomatisationDesDeclarations') && null !== $object->getPaieRelationClientAutomatisationDesDeclarations()) {
            $data['paieRelationClientAutomatisationDesDeclarations'] = $object->getPaieRelationClientAutomatisationDesDeclarations();
        }
        if ($object->isInitialized('paieRelationClientEditionsGroupees') && null !== $object->getPaieRelationClientEditionsGroupees()) {
            $data['paieRelationClientEditionsGroupees'] = $object->getPaieRelationClientEditionsGroupees();
        }
        if ($object->isInitialized('paieRelationClientFicheSocieteEtatDossier') && null !== $object->getPaieRelationClientFicheSocieteEtatDossier()) {
            $data['paieRelationClientFicheSocieteEtatDossier'] = $object->getPaieRelationClientFicheSocieteEtatDossier();
        }
        if ($object->isInitialized('paieParametrageLiaisonComptable') && null !== $object->getPaieParametrageLiaisonComptable()) {
            $data['paieParametrageLiaisonComptable'] = $object->getPaieParametrageLiaisonComptable();
        }
        if ($object->isInitialized('paieRelationClientArchivageDossier') && null !== $object->getPaieRelationClientArchivageDossier()) {
            $data['paieRelationClientArchivageDossier'] = $object->getPaieRelationClientArchivageDossier();
        }
        if ($object->isInitialized('paieParametrageCotisationsComplementLibelles') && null !== $object->getPaieParametrageCotisationsComplementLibelles()) {
            $data['paieParametrageCotisationsComplementLibelles'] = $object->getPaieParametrageCotisationsComplementLibelles();
        }
        if ($object->isInitialized('paieParametrageCotisationsTaux') && null !== $object->getPaieParametrageCotisationsTaux()) {
            $data['paieParametrageCotisationsTaux'] = $object->getPaieParametrageCotisationsTaux();
        }
        if ($object->isInitialized('paieParametrageCotisationsTauxAT') && null !== $object->getPaieParametrageCotisationsTauxAT()) {
            $data['paieParametrageCotisationsTauxAT'] = $object->getPaieParametrageCotisationsTauxAT();
        }
        if ($object->isInitialized('paieParametragePrimesProfils') && null !== $object->getPaieParametragePrimesProfils()) {
            $data['paieParametragePrimesProfils'] = $object->getPaieParametragePrimesProfils();
        }
        if ($object->isInitialized('paiePrimesCaracteristiques') && null !== $object->getPaiePrimesCaracteristiques()) {
            $data['paiePrimesCaracteristiques'] = $object->getPaiePrimesCaracteristiques();
        }
        if ($object->isInitialized('paieParametrageHeuresHeures') && null !== $object->getPaieParametrageHeuresHeures()) {
            $data['paieParametrageHeuresHeures'] = $object->getPaieParametrageHeuresHeures();
        }
        if ($object->isInitialized('paieParametrageHeuresComplementLibelles') && null !== $object->getPaieParametrageHeuresComplementLibelles()) {
            $data['paieParametrageHeuresComplementLibelles'] = $object->getPaieParametrageHeuresComplementLibelles();
        }
        if ($object->isInitialized('paieParametrageMtPartMtPart') && null !== $object->getPaieParametrageMtPartMtPart()) {
            $data['paieParametrageMtPartMtPart'] = $object->getPaieParametrageMtPartMtPart();
        }
        if ($object->isInitialized('paieParametrageVariablesASaisir') && null !== $object->getPaieParametrageVariablesASaisir()) {
            $data['paieParametrageVariablesASaisir'] = $object->getPaieParametrageVariablesASaisir();
        }
        if ($object->isInitialized('paieParametrageContratsComplementaires') && null !== $object->getPaieParametrageContratsComplementaires()) {
            $data['paieParametrageContratsComplementaires'] = $object->getPaieParametrageContratsComplementaires();
        }
        if ($object->isInitialized('paieParametrageMethodes') && null !== $object->getPaieParametrageMethodes()) {
            $data['paieParametrageMethodes'] = $object->getPaieParametrageMethodes();
        }
        if ($object->isInitialized('paieGestionImputationsAnalytiques') && null !== $object->getPaieGestionImputationsAnalytiques()) {
            $data['paieGestionImputationsAnalytiques'] = $object->getPaieGestionImputationsAnalytiques();
        }
        if ($object->isInitialized('paieGestionAnalytiqueEnPourcentage') && null !== $object->getPaieGestionAnalytiqueEnPourcentage()) {
            $data['paieGestionAnalytiqueEnPourcentage'] = $object->getPaieGestionAnalytiqueEnPourcentage();
        }
        if ($object->isInitialized('analyseActiviteSpecificites') && null !== $object->getAnalyseActiviteSpecificites()) {
            $data['analyseActiviteSpecificites'] = $object->getAnalyseActiviteSpecificites();
        }
        if ($object->isInitialized('analyseActiviteProductionCollaborateur') && null !== $object->getAnalyseActiviteProductionCollaborateur()) {
            $data['analyseActiviteProductionCollaborateur'] = $object->getAnalyseActiviteProductionCollaborateur();
        }
        if ($object->isInitialized('analyseActiviteProductionUtilisateur') && null !== $object->getAnalyseActiviteProductionUtilisateur()) {
            $data['analyseActiviteProductionUtilisateur'] = $object->getAnalyseActiviteProductionUtilisateur();
        }
        if ($object->isInitialized('analyseActiviteProduction') && null !== $object->getAnalyseActiviteProduction()) {
            $data['analyseActiviteProduction'] = $object->getAnalyseActiviteProduction();
        }
        if ($object->isInitialized('analyseActiviteBulletins') && null !== $object->getAnalyseActiviteBulletins()) {
            $data['analyseActiviteBulletins'] = $object->getAnalyseActiviteBulletins();
        }
        if ($object->isInitialized('analyseActiviteDossiers') && null !== $object->getAnalyseActiviteDossiers()) {
            $data['analyseActiviteDossiers'] = $object->getAnalyseActiviteDossiers();
        }
        if ($object->isInitialized('analyseActiviteRelationClient') && null !== $object->getAnalyseActiviteRelationClient()) {
            $data['analyseActiviteRelationClient'] = $object->getAnalyseActiviteRelationClient();
        }
        if ($object->isInitialized('analyseActiviteDADSU') && null !== $object->getAnalyseActiviteDADSU()) {
            $data['analyseActiviteDADSU'] = $object->getAnalyseActiviteDADSU();
        }
        if ($object->isInitialized('analyseActiviteDSN') && null !== $object->getAnalyseActiviteDSN()) {
            $data['analyseActiviteDSN'] = $object->getAnalyseActiviteDSN();
        }
        if ($object->isInitialized('analyseActiviteInfosClients') && null !== $object->getAnalyseActiviteInfosClients()) {
            $data['analyseActiviteInfosClients'] = $object->getAnalyseActiviteInfosClients();
        }
        if ($object->isInitialized('analyseActiviteListeOrganismesDSN') && null !== $object->getAnalyseActiviteListeOrganismesDSN()) {
            $data['analyseActiviteListeOrganismesDSN'] = $object->getAnalyseActiviteListeOrganismesDSN();
        }
        if ($object->isInitialized('analyseActiviteRecherches') && null !== $object->getAnalyseActiviteRecherches()) {
            $data['analyseActiviteRecherches'] = $object->getAnalyseActiviteRecherches();
        }
        if ($object->isInitialized('generalAccesFormulaireAssistance') && null !== $object->getGeneralAccesFormulaireAssistance()) {
            $data['generalAccesFormulaireAssistance'] = $object->getGeneralAccesFormulaireAssistance();
        }
        if ($object->isInitialized('gestionInterneParametrages') && null !== $object->getGestionInterneParametrages()) {
            $data['gestionInterneParametrages'] = $object->getGestionInterneParametrages();
        }
        if ($object->isInitialized('gestionInterneParametragesClients') && null !== $object->getGestionInterneParametragesClients()) {
            $data['gestionInterneParametragesClients'] = $object->getGestionInterneParametragesClients();
        }
        if ($object->isInitialized('gestionInterneParametragesClientsMenuSupprimer') && null !== $object->getGestionInterneParametragesClientsMenuSupprimer()) {
            $data['gestionInterneParametragesClientsMenuSupprimer'] = $object->getGestionInterneParametragesClientsMenuSupprimer();
        }
        if ($object->isInitialized('gestionInterneParametragesCollaborateurs') && null !== $object->getGestionInterneParametragesCollaborateurs()) {
            $data['gestionInterneParametragesCollaborateurs'] = $object->getGestionInterneParametragesCollaborateurs();
        }
        if ($object->isInitialized('gestionInterneParametragesClientsConfigurationAPIFichiersVirement') && null !== $object->getGestionInterneParametragesClientsConfigurationAPIFichiersVirement()) {
            $data['gestionInterneParametragesClientsConfigurationAPIFichiersVirement'] = $object->getGestionInterneParametragesClientsConfigurationAPIFichiersVirement();
        }
        if ($object->isInitialized('gestionInterneParametragesCollaborateursGestionRoles') && null !== $object->getGestionInterneParametragesCollaborateursGestionRoles()) {
            $data['gestionInterneParametragesCollaborateursGestionRoles'] = $object->getGestionInterneParametragesCollaborateursGestionRoles();
        }
        if ($object->isInitialized('gestionInterneParametragesAgences') && null !== $object->getGestionInterneParametragesAgences()) {
            $data['gestionInterneParametragesAgences'] = $object->getGestionInterneParametragesAgences();
        }
        if ($object->isInitialized('gestionInterneParametragesParamClesAcces') && null !== $object->getGestionInterneParametragesParamClesAcces()) {
            $data['gestionInterneParametragesParamClesAcces'] = $object->getGestionInterneParametragesParamClesAcces();
        }
        if ($object->isInitialized('gestionInterneParametragesAffectationCollaborateurs') && null !== $object->getGestionInterneParametragesAffectationCollaborateurs()) {
            $data['gestionInterneParametragesAffectationCollaborateurs'] = $object->getGestionInterneParametragesAffectationCollaborateurs();
        }
        if ($object->isInitialized('gestionInterneAnalyseProduction') && null !== $object->getGestionInterneAnalyseProduction()) {
            $data['gestionInterneAnalyseProduction'] = $object->getGestionInterneAnalyseProduction();
        }
        if ($object->isInitialized('gestionInterneAnalyseProductionSynthetique') && null !== $object->getGestionInterneAnalyseProductionSynthetique()) {
            $data['gestionInterneAnalyseProductionSynthetique'] = $object->getGestionInterneAnalyseProductionSynthetique();
        }
        if ($object->isInitialized('gestionInterneAnalyseProductionDetaille') && null !== $object->getGestionInterneAnalyseProductionDetaille()) {
            $data['gestionInterneAnalyseProductionDetaille'] = $object->getGestionInterneAnalyseProductionDetaille();
        }
        if ($object->isInitialized('gestionInterneAnalyseProductionN4DS') && null !== $object->getGestionInterneAnalyseProductionN4DS()) {
            $data['gestionInterneAnalyseProductionN4DS'] = $object->getGestionInterneAnalyseProductionN4DS();
        }
        if ($object->isInitialized('gestionInterneInfosClients') && null !== $object->getGestionInterneInfosClients()) {
            $data['gestionInterneInfosClients'] = $object->getGestionInterneInfosClients();
        }
        if ($object->isInitialized('gestionInterneInfosClientsInfosClients') && null !== $object->getGestionInterneInfosClientsInfosClients()) {
            $data['gestionInterneInfosClientsInfosClients'] = $object->getGestionInterneInfosClientsInfosClients();
        }
        if ($object->isInitialized('gestionInterneInfosClientsInfosBancaires') && null !== $object->getGestionInterneInfosClientsInfosBancaires()) {
            $data['gestionInterneInfosClientsInfosBancaires'] = $object->getGestionInterneInfosClientsInfosBancaires();
        }
        if ($object->isInitialized('parametragePaieConfigurationAPI') && null !== $object->getParametragePaieConfigurationAPI()) {
            $data['parametragePaieConfigurationAPI'] = $object->getParametragePaieConfigurationAPI();
        }
        if ($object->isInitialized('parametragePaieGenerationFichiersVirements') && null !== $object->getParametragePaieGenerationFichiersVirements()) {
            $data['parametragePaieGenerationFichiersVirements'] = $object->getParametragePaieGenerationFichiersVirements();
        }
        if ($object->isInitialized('administrationConnexionAuthentificationExterne') && null !== $object->getAdministrationConnexionAuthentificationExterne()) {
            $data['administrationConnexionAuthentificationExterne'] = $object->getAdministrationConnexionAuthentificationExterne();
        }
        if ($object->isInitialized('administrationConnexionPersonnalisationEcranConnexion') && null !== $object->getAdministrationConnexionPersonnalisationEcranConnexion()) {
            $data['administrationConnexionPersonnalisationEcranConnexion'] = $object->getAdministrationConnexionPersonnalisationEcranConnexion();
        }
        if ($object->isInitialized('administrationPilotageActivite') && null !== $object->getAdministrationPilotageActivite()) {
            $data['administrationPilotageActivite'] = $object->getAdministrationPilotageActivite();
        }
        if ($object->isInitialized('administrationPilotageActiviteHistoriqueConnexions') && null !== $object->getAdministrationPilotageActiviteHistoriqueConnexions()) {
            $data['administrationPilotageActiviteHistoriqueConnexions'] = $object->getAdministrationPilotageActiviteHistoriqueConnexions();
        }
        if ($object->isInitialized('administrationPilotageActiviteHistoriqueModifications') && null !== $object->getAdministrationPilotageActiviteHistoriqueModifications()) {
            $data['administrationPilotageActiviteHistoriqueModifications'] = $object->getAdministrationPilotageActiviteHistoriqueModifications();
        }
        if ($object->isInitialized('administrationConfigurationExport') && null !== $object->getAdministrationConfigurationExport()) {
            $data['administrationConfigurationExport'] = $object->getAdministrationConfigurationExport();
        }
        if ($object->isInitialized('productionLienSilaeHub') && null !== $object->getProductionLienSilaeHub()) {
            $data['productionLienSilaeHub'] = $object->getProductionLienSilaeHub();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\CompteCollaborateurDroitsUtilisateur' => false];
    }
}
