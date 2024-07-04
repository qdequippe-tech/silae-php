<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\UtilisateurCollaborateur;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class UtilisateurCollaborateurNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return UtilisateurCollaborateur::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && UtilisateurCollaborateur::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new UtilisateurCollaborateur();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('codeCollaborateur', $data) && null !== $data['codeCollaborateur']) {
                $object->setCodeCollaborateur($data['codeCollaborateur']);
            } elseif (\array_key_exists('codeCollaborateur', $data) && null === $data['codeCollaborateur']) {
                $object->setCodeCollaborateur(null);
            }

            if (\array_key_exists('bCivilite', $data) && null !== $data['bCivilite']) {
                $object->setBCivilite($data['bCivilite']);
            } elseif (\array_key_exists('bCivilite', $data) && null === $data['bCivilite']) {
                $object->setBCivilite(null);
            }

            if (\array_key_exists('civilite', $data) && null !== $data['civilite']) {
                $object->setCivilite($data['civilite']);
            } elseif (\array_key_exists('civilite', $data) && null === $data['civilite']) {
                $object->setCivilite(null);
            }

            if (\array_key_exists('nomNaissance', $data) && null !== $data['nomNaissance']) {
                $object->setNomNaissance($data['nomNaissance']);
            } elseif (\array_key_exists('nomNaissance', $data) && null === $data['nomNaissance']) {
                $object->setNomNaissance(null);
            }

            if (\array_key_exists('nomMarital', $data) && null !== $data['nomMarital']) {
                $object->setNomMarital($data['nomMarital']);
            } elseif (\array_key_exists('nomMarital', $data) && null === $data['nomMarital']) {
                $object->setNomMarital(null);
            }

            if (\array_key_exists('nomUsuel', $data) && null !== $data['nomUsuel']) {
                $object->setNomUsuel($data['nomUsuel']);
            } elseif (\array_key_exists('nomUsuel', $data) && null === $data['nomUsuel']) {
                $object->setNomUsuel(null);
            }

            if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
                $object->setPrenom($data['prenom']);
            } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
                $object->setPrenom(null);
            }

            if (\array_key_exists('bTelPortable', $data) && null !== $data['bTelPortable']) {
                $object->setBTelPortable($data['bTelPortable']);
            } elseif (\array_key_exists('bTelPortable', $data) && null === $data['bTelPortable']) {
                $object->setBTelPortable(null);
            }

            if (\array_key_exists('telPortable', $data) && null !== $data['telPortable']) {
                $object->setTelPortable($data['telPortable']);
            } elseif (\array_key_exists('telPortable', $data) && null === $data['telPortable']) {
                $object->setTelPortable(null);
            }

            if (\array_key_exists('bTelBureau', $data) && null !== $data['bTelBureau']) {
                $object->setBTelBureau($data['bTelBureau']);
            } elseif (\array_key_exists('bTelBureau', $data) && null === $data['bTelBureau']) {
                $object->setBTelBureau(null);
            }

            if (\array_key_exists('telBureau', $data) && null !== $data['telBureau']) {
                $object->setTelBureau($data['telBureau']);
            } elseif (\array_key_exists('telBureau', $data) && null === $data['telBureau']) {
                $object->setTelBureau(null);
            }

            if (\array_key_exists('bTelDomicile', $data) && null !== $data['bTelDomicile']) {
                $object->setBTelDomicile($data['bTelDomicile']);
            } elseif (\array_key_exists('bTelDomicile', $data) && null === $data['bTelDomicile']) {
                $object->setBTelDomicile(null);
            }

            if (\array_key_exists('telDomicile', $data) && null !== $data['telDomicile']) {
                $object->setTelDomicile($data['telDomicile']);
            } elseif (\array_key_exists('telDomicile', $data) && null === $data['telDomicile']) {
                $object->setTelDomicile(null);
            }

            if (\array_key_exists('bMail', $data) && null !== $data['bMail']) {
                $object->setBMail($data['bMail']);
            } elseif (\array_key_exists('bMail', $data) && null === $data['bMail']) {
                $object->setBMail(null);
            }

            if (\array_key_exists('mail', $data) && null !== $data['mail']) {
                $object->setMail($data['mail']);
            } elseif (\array_key_exists('mail', $data) && null === $data['mail']) {
                $object->setMail(null);
            }

            if (\array_key_exists('bCodeAgence', $data) && null !== $data['bCodeAgence']) {
                $object->setBCodeAgence($data['bCodeAgence']);
            } elseif (\array_key_exists('bCodeAgence', $data) && null === $data['bCodeAgence']) {
                $object->setBCodeAgence(null);
            }

            if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
                $object->setCodeAgence($data['codeAgence']);
            } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
                $object->setCodeAgence(null);
            }

            if (\array_key_exists('bAffectations', $data) && null !== $data['bAffectations']) {
                $object->setBAffectations($data['bAffectations']);
            } elseif (\array_key_exists('bAffectations', $data) && null === $data['bAffectations']) {
                $object->setBAffectations(null);
            }

            if (\array_key_exists('affectation1', $data) && null !== $data['affectation1']) {
                $object->setAffectation1($data['affectation1']);
            } elseif (\array_key_exists('affectation1', $data) && null === $data['affectation1']) {
                $object->setAffectation1(null);
            }

            if (\array_key_exists('affectation2', $data) && null !== $data['affectation2']) {
                $object->setAffectation2($data['affectation2']);
            } elseif (\array_key_exists('affectation2', $data) && null === $data['affectation2']) {
                $object->setAffectation2(null);
            }

            if (\array_key_exists('affectation3', $data) && null !== $data['affectation3']) {
                $object->setAffectation3($data['affectation3']);
            } elseif (\array_key_exists('affectation3', $data) && null === $data['affectation3']) {
                $object->setAffectation3(null);
            }

            if (\array_key_exists('affectation4', $data) && null !== $data['affectation4']) {
                $object->setAffectation4($data['affectation4']);
            } elseif (\array_key_exists('affectation4', $data) && null === $data['affectation4']) {
                $object->setAffectation4(null);
            }

            if (\array_key_exists('affectation5', $data) && null !== $data['affectation5']) {
                $object->setAffectation5($data['affectation5']);
            } elseif (\array_key_exists('affectation5', $data) && null === $data['affectation5']) {
                $object->setAffectation5(null);
            }

            if (\array_key_exists('affectation6', $data) && null !== $data['affectation6']) {
                $object->setAffectation6($data['affectation6']);
            } elseif (\array_key_exists('affectation6', $data) && null === $data['affectation6']) {
                $object->setAffectation6(null);
            }

            if (\array_key_exists('affectation7', $data) && null !== $data['affectation7']) {
                $object->setAffectation7($data['affectation7']);
            } elseif (\array_key_exists('affectation7', $data) && null === $data['affectation7']) {
                $object->setAffectation7(null);
            }

            if (\array_key_exists('affectation8', $data) && null !== $data['affectation8']) {
                $object->setAffectation8($data['affectation8']);
            } elseif (\array_key_exists('affectation8', $data) && null === $data['affectation8']) {
                $object->setAffectation8(null);
            }

            if (\array_key_exists('affectation9', $data) && null !== $data['affectation9']) {
                $object->setAffectation9($data['affectation9']);
            } elseif (\array_key_exists('affectation9', $data) && null === $data['affectation9']) {
                $object->setAffectation9(null);
            }

            if (\array_key_exists('identifiant', $data) && null !== $data['identifiant']) {
                $object->setIdentifiant($data['identifiant']);
            } elseif (\array_key_exists('identifiant', $data) && null === $data['identifiant']) {
                $object->setIdentifiant(null);
            }

            if (\array_key_exists('ancienMotDePasse', $data) && null !== $data['ancienMotDePasse']) {
                $object->setAncienMotDePasse($data['ancienMotDePasse']);
            } elseif (\array_key_exists('ancienMotDePasse', $data) && null === $data['ancienMotDePasse']) {
                $object->setAncienMotDePasse(null);
            }

            if (\array_key_exists('motDePasse', $data) && null !== $data['motDePasse']) {
                $object->setMotDePasse($data['motDePasse']);
            } elseif (\array_key_exists('motDePasse', $data) && null === $data['motDePasse']) {
                $object->setMotDePasse(null);
            }

            if (\array_key_exists('debutValidite', $data) && null !== $data['debutValidite']) {
                $object->setDebutValidite(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['debutValidite']));
            } elseif (\array_key_exists('debutValidite', $data) && null === $data['debutValidite']) {
                $object->setDebutValidite(null);
            }

            if (\array_key_exists('finValidite', $data) && null !== $data['finValidite']) {
                $object->setFinValidite(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['finValidite']));
            } elseif (\array_key_exists('finValidite', $data) && null === $data['finValidite']) {
                $object->setFinValidite(null);
            }

            if (\array_key_exists('bDateEntree', $data) && null !== $data['bDateEntree']) {
                $object->setBDateEntree($data['bDateEntree']);
            } elseif (\array_key_exists('bDateEntree', $data) && null === $data['bDateEntree']) {
                $object->setBDateEntree(null);
            }

            if (\array_key_exists('dateEntree', $data) && null !== $data['dateEntree']) {
                $object->setDateEntree(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateEntree']));
            } elseif (\array_key_exists('dateEntree', $data) && null === $data['dateEntree']) {
                $object->setDateEntree(null);
            }

            if (\array_key_exists('bDateSortie', $data) && null !== $data['bDateSortie']) {
                $object->setBDateSortie($data['bDateSortie']);
            } elseif (\array_key_exists('bDateSortie', $data) && null === $data['bDateSortie']) {
                $object->setBDateSortie(null);
            }

            if (\array_key_exists('dateSortie', $data) && null !== $data['dateSortie']) {
                $object->setDateSortie(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateSortie']));
            } elseif (\array_key_exists('dateSortie', $data) && null === $data['dateSortie']) {
                $object->setDateSortie(null);
            }

            if (\array_key_exists('onglet_Production', $data) && null !== $data['onglet_Production']) {
                $object->setOngletProduction($data['onglet_Production']);
            } elseif (\array_key_exists('onglet_Production', $data) && null === $data['onglet_Production']) {
                $object->setOngletProduction(null);
            }

            if (\array_key_exists('onglet_GestionInterne', $data) && null !== $data['onglet_GestionInterne']) {
                $object->setOngletGestionInterne($data['onglet_GestionInterne']);
            } elseif (\array_key_exists('onglet_GestionInterne', $data) && null === $data['onglet_GestionInterne']) {
                $object->setOngletGestionInterne(null);
            }

            if (\array_key_exists('onglet_GestionInterneSimplifiee', $data) && null !== $data['onglet_GestionInterneSimplifiee']) {
                $object->setOngletGestionInterneSimplifiee($data['onglet_GestionInterneSimplifiee']);
            } elseif (\array_key_exists('onglet_GestionInterneSimplifiee', $data) && null === $data['onglet_GestionInterneSimplifiee']) {
                $object->setOngletGestionInterneSimplifiee(null);
            }

            if (\array_key_exists('onglet_GestionDesIdentifiants', $data) && null !== $data['onglet_GestionDesIdentifiants']) {
                $object->setOngletGestionDesIdentifiants($data['onglet_GestionDesIdentifiants']);
            } elseif (\array_key_exists('onglet_GestionDesIdentifiants', $data) && null === $data['onglet_GestionDesIdentifiants']) {
                $object->setOngletGestionDesIdentifiants(null);
            }

            if (\array_key_exists('onglet_ParametragePaie', $data) && null !== $data['onglet_ParametragePaie']) {
                $object->setOngletParametragePaie($data['onglet_ParametragePaie']);
            } elseif (\array_key_exists('onglet_ParametragePaie', $data) && null === $data['onglet_ParametragePaie']) {
                $object->setOngletParametragePaie(null);
            }

            if (\array_key_exists('onglet_ParametrageCompta', $data) && null !== $data['onglet_ParametrageCompta']) {
                $object->setOngletParametrageCompta($data['onglet_ParametrageCompta']);
            } elseif (\array_key_exists('onglet_ParametrageCompta', $data) && null === $data['onglet_ParametrageCompta']) {
                $object->setOngletParametrageCompta(null);
            }

            if (\array_key_exists('onglet_RobotDePaie', $data) && null !== $data['onglet_RobotDePaie']) {
                $object->setOngletRobotDePaie($data['onglet_RobotDePaie']);
            } elseif (\array_key_exists('onglet_RobotDePaie', $data) && null === $data['onglet_RobotDePaie']) {
                $object->setOngletRobotDePaie(null);
            }

            if (\array_key_exists('onglet_Outils', $data) && null !== $data['onglet_Outils']) {
                $object->setOngletOutils($data['onglet_Outils']);
            } elseif (\array_key_exists('onglet_Outils', $data) && null === $data['onglet_Outils']) {
                $object->setOngletOutils(null);
            }

            if (\array_key_exists('onglet_AnalyseActivitePaie', $data) && null !== $data['onglet_AnalyseActivitePaie']) {
                $object->setOngletAnalyseActivitePaie($data['onglet_AnalyseActivitePaie']);
            } elseif (\array_key_exists('onglet_AnalyseActivitePaie', $data) && null === $data['onglet_AnalyseActivitePaie']) {
                $object->setOngletAnalyseActivitePaie(null);
            }

            if (\array_key_exists('onglet_AnalyseActiviteCompta', $data) && null !== $data['onglet_AnalyseActiviteCompta']) {
                $object->setOngletAnalyseActiviteCompta($data['onglet_AnalyseActiviteCompta']);
            } elseif (\array_key_exists('onglet_AnalyseActiviteCompta', $data) && null === $data['onglet_AnalyseActiviteCompta']) {
                $object->setOngletAnalyseActiviteCompta(null);
            }

            if (\array_key_exists('restrictionPaie_FicheSociete_EtatDossier', $data) && null !== $data['restrictionPaie_FicheSociete_EtatDossier']) {
                $object->setRestrictionPaieFicheSocieteEtatDossier($data['restrictionPaie_FicheSociete_EtatDossier']);
            } elseif (\array_key_exists('restrictionPaie_FicheSociete_EtatDossier', $data) && null === $data['restrictionPaie_FicheSociete_EtatDossier']) {
                $object->setRestrictionPaieFicheSocieteEtatDossier(null);
            }

            if (\array_key_exists('niveauConfidentialiteSalarie', $data) && null !== $data['niveauConfidentialiteSalarie']) {
                $object->setNiveauConfidentialiteSalarie($data['niveauConfidentialiteSalarie']);
            } elseif (\array_key_exists('niveauConfidentialiteSalarie', $data) && null === $data['niveauConfidentialiteSalarie']) {
                $object->setNiveauConfidentialiteSalarie(null);
            }

            if (\array_key_exists('droitsLimitesPaie', $data) && null !== $data['droitsLimitesPaie']) {
                $object->setDroitsLimitesPaie($data['droitsLimitesPaie']);
            } elseif (\array_key_exists('droitsLimitesPaie', $data) && null === $data['droitsLimitesPaie']) {
                $object->setDroitsLimitesPaie(null);
            }

            if (\array_key_exists('droitsLimitesCompta', $data) && null !== $data['droitsLimitesCompta']) {
                $object->setDroitsLimitesCompta($data['droitsLimitesCompta']);
            } elseif (\array_key_exists('droitsLimitesCompta', $data) && null === $data['droitsLimitesCompta']) {
                $object->setDroitsLimitesCompta(null);
            }

            if (\array_key_exists('listesCollaborateursDroits', $data) && null !== $data['listesCollaborateursDroits']) {
                $object->setListesCollaborateursDroits($data['listesCollaborateursDroits']);
            } elseif (\array_key_exists('listesCollaborateursDroits', $data) && null === $data['listesCollaborateursDroits']) {
                $object->setListesCollaborateursDroits(null);
            }

            if (\array_key_exists('requeteDroits', $data) && null !== $data['requeteDroits']) {
                $object->setRequeteDroits($data['requeteDroits']);
            } elseif (\array_key_exists('requeteDroits', $data) && null === $data['requeteDroits']) {
                $object->setRequeteDroits(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('codeCollaborateur') && null !== $object->getCodeCollaborateur()) {
                $data['codeCollaborateur'] = $object->getCodeCollaborateur();
            }

            if ($object->isInitialized('bCivilite') && null !== $object->getBCivilite()) {
                $data['bCivilite'] = $object->getBCivilite();
            }

            if ($object->isInitialized('civilite') && null !== $object->getCivilite()) {
                $data['civilite'] = $object->getCivilite();
            }

            if ($object->isInitialized('nomNaissance') && null !== $object->getNomNaissance()) {
                $data['nomNaissance'] = $object->getNomNaissance();
            }

            if ($object->isInitialized('nomMarital') && null !== $object->getNomMarital()) {
                $data['nomMarital'] = $object->getNomMarital();
            }

            if ($object->isInitialized('nomUsuel') && null !== $object->getNomUsuel()) {
                $data['nomUsuel'] = $object->getNomUsuel();
            }

            if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
                $data['prenom'] = $object->getPrenom();
            }

            if ($object->isInitialized('bTelPortable') && null !== $object->getBTelPortable()) {
                $data['bTelPortable'] = $object->getBTelPortable();
            }

            if ($object->isInitialized('telPortable') && null !== $object->getTelPortable()) {
                $data['telPortable'] = $object->getTelPortable();
            }

            if ($object->isInitialized('bTelBureau') && null !== $object->getBTelBureau()) {
                $data['bTelBureau'] = $object->getBTelBureau();
            }

            if ($object->isInitialized('telBureau') && null !== $object->getTelBureau()) {
                $data['telBureau'] = $object->getTelBureau();
            }

            if ($object->isInitialized('bTelDomicile') && null !== $object->getBTelDomicile()) {
                $data['bTelDomicile'] = $object->getBTelDomicile();
            }

            if ($object->isInitialized('telDomicile') && null !== $object->getTelDomicile()) {
                $data['telDomicile'] = $object->getTelDomicile();
            }

            if ($object->isInitialized('bMail') && null !== $object->getBMail()) {
                $data['bMail'] = $object->getBMail();
            }

            if ($object->isInitialized('mail') && null !== $object->getMail()) {
                $data['mail'] = $object->getMail();
            }

            if ($object->isInitialized('bCodeAgence') && null !== $object->getBCodeAgence()) {
                $data['bCodeAgence'] = $object->getBCodeAgence();
            }

            if ($object->isInitialized('codeAgence') && null !== $object->getCodeAgence()) {
                $data['codeAgence'] = $object->getCodeAgence();
            }

            if ($object->isInitialized('bAffectations') && null !== $object->getBAffectations()) {
                $data['bAffectations'] = $object->getBAffectations();
            }

            if ($object->isInitialized('affectation1') && null !== $object->getAffectation1()) {
                $data['affectation1'] = $object->getAffectation1();
            }

            if ($object->isInitialized('affectation2') && null !== $object->getAffectation2()) {
                $data['affectation2'] = $object->getAffectation2();
            }

            if ($object->isInitialized('affectation3') && null !== $object->getAffectation3()) {
                $data['affectation3'] = $object->getAffectation3();
            }

            if ($object->isInitialized('affectation4') && null !== $object->getAffectation4()) {
                $data['affectation4'] = $object->getAffectation4();
            }

            if ($object->isInitialized('affectation5') && null !== $object->getAffectation5()) {
                $data['affectation5'] = $object->getAffectation5();
            }

            if ($object->isInitialized('affectation6') && null !== $object->getAffectation6()) {
                $data['affectation6'] = $object->getAffectation6();
            }

            if ($object->isInitialized('affectation7') && null !== $object->getAffectation7()) {
                $data['affectation7'] = $object->getAffectation7();
            }

            if ($object->isInitialized('affectation8') && null !== $object->getAffectation8()) {
                $data['affectation8'] = $object->getAffectation8();
            }

            if ($object->isInitialized('affectation9') && null !== $object->getAffectation9()) {
                $data['affectation9'] = $object->getAffectation9();
            }

            if ($object->isInitialized('identifiant') && null !== $object->getIdentifiant()) {
                $data['identifiant'] = $object->getIdentifiant();
            }

            if ($object->isInitialized('ancienMotDePasse') && null !== $object->getAncienMotDePasse()) {
                $data['ancienMotDePasse'] = $object->getAncienMotDePasse();
            }

            if ($object->isInitialized('motDePasse') && null !== $object->getMotDePasse()) {
                $data['motDePasse'] = $object->getMotDePasse();
            }

            if ($object->isInitialized('debutValidite') && null !== $object->getDebutValidite()) {
                $data['debutValidite'] = $object->getDebutValidite()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('finValidite') && null !== $object->getFinValidite()) {
                $data['finValidite'] = $object->getFinValidite()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('bDateEntree') && null !== $object->getBDateEntree()) {
                $data['bDateEntree'] = $object->getBDateEntree();
            }

            if ($object->isInitialized('dateEntree') && null !== $object->getDateEntree()) {
                $data['dateEntree'] = $object->getDateEntree()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('bDateSortie') && null !== $object->getBDateSortie()) {
                $data['bDateSortie'] = $object->getBDateSortie();
            }

            if ($object->isInitialized('dateSortie') && null !== $object->getDateSortie()) {
                $data['dateSortie'] = $object->getDateSortie()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('ongletProduction') && null !== $object->getOngletProduction()) {
                $data['onglet_Production'] = $object->getOngletProduction();
            }

            if ($object->isInitialized('ongletGestionInterne') && null !== $object->getOngletGestionInterne()) {
                $data['onglet_GestionInterne'] = $object->getOngletGestionInterne();
            }

            if ($object->isInitialized('ongletGestionInterneSimplifiee') && null !== $object->getOngletGestionInterneSimplifiee()) {
                $data['onglet_GestionInterneSimplifiee'] = $object->getOngletGestionInterneSimplifiee();
            }

            if ($object->isInitialized('ongletGestionDesIdentifiants') && null !== $object->getOngletGestionDesIdentifiants()) {
                $data['onglet_GestionDesIdentifiants'] = $object->getOngletGestionDesIdentifiants();
            }

            if ($object->isInitialized('ongletParametragePaie') && null !== $object->getOngletParametragePaie()) {
                $data['onglet_ParametragePaie'] = $object->getOngletParametragePaie();
            }

            if ($object->isInitialized('ongletParametrageCompta') && null !== $object->getOngletParametrageCompta()) {
                $data['onglet_ParametrageCompta'] = $object->getOngletParametrageCompta();
            }

            if ($object->isInitialized('ongletRobotDePaie') && null !== $object->getOngletRobotDePaie()) {
                $data['onglet_RobotDePaie'] = $object->getOngletRobotDePaie();
            }

            if ($object->isInitialized('ongletOutils') && null !== $object->getOngletOutils()) {
                $data['onglet_Outils'] = $object->getOngletOutils();
            }

            if ($object->isInitialized('ongletAnalyseActivitePaie') && null !== $object->getOngletAnalyseActivitePaie()) {
                $data['onglet_AnalyseActivitePaie'] = $object->getOngletAnalyseActivitePaie();
            }

            if ($object->isInitialized('ongletAnalyseActiviteCompta') && null !== $object->getOngletAnalyseActiviteCompta()) {
                $data['onglet_AnalyseActiviteCompta'] = $object->getOngletAnalyseActiviteCompta();
            }

            if ($object->isInitialized('restrictionPaieFicheSocieteEtatDossier') && null !== $object->getRestrictionPaieFicheSocieteEtatDossier()) {
                $data['restrictionPaie_FicheSociete_EtatDossier'] = $object->getRestrictionPaieFicheSocieteEtatDossier();
            }

            if ($object->isInitialized('niveauConfidentialiteSalarie') && null !== $object->getNiveauConfidentialiteSalarie()) {
                $data['niveauConfidentialiteSalarie'] = $object->getNiveauConfidentialiteSalarie();
            }

            if ($object->isInitialized('droitsLimitesPaie') && null !== $object->getDroitsLimitesPaie()) {
                $data['droitsLimitesPaie'] = $object->getDroitsLimitesPaie();
            }

            if ($object->isInitialized('droitsLimitesCompta') && null !== $object->getDroitsLimitesCompta()) {
                $data['droitsLimitesCompta'] = $object->getDroitsLimitesCompta();
            }

            if ($object->isInitialized('listesCollaborateursDroits') && null !== $object->getListesCollaborateursDroits()) {
                $data['listesCollaborateursDroits'] = $object->getListesCollaborateursDroits();
            }

            if ($object->isInitialized('requeteDroits') && null !== $object->getRequeteDroits()) {
                $data['requeteDroits'] = $object->getRequeteDroits();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [UtilisateurCollaborateur::class => false];
        }
    }
} else {
    class UtilisateurCollaborateurNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return UtilisateurCollaborateur::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && UtilisateurCollaborateur::class === $data::class;
        }

        /**
         * @param mixed|null $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new UtilisateurCollaborateur();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('codeCollaborateur', $data) && null !== $data['codeCollaborateur']) {
                $object->setCodeCollaborateur($data['codeCollaborateur']);
            } elseif (\array_key_exists('codeCollaborateur', $data) && null === $data['codeCollaborateur']) {
                $object->setCodeCollaborateur(null);
            }

            if (\array_key_exists('bCivilite', $data) && null !== $data['bCivilite']) {
                $object->setBCivilite($data['bCivilite']);
            } elseif (\array_key_exists('bCivilite', $data) && null === $data['bCivilite']) {
                $object->setBCivilite(null);
            }

            if (\array_key_exists('civilite', $data) && null !== $data['civilite']) {
                $object->setCivilite($data['civilite']);
            } elseif (\array_key_exists('civilite', $data) && null === $data['civilite']) {
                $object->setCivilite(null);
            }

            if (\array_key_exists('nomNaissance', $data) && null !== $data['nomNaissance']) {
                $object->setNomNaissance($data['nomNaissance']);
            } elseif (\array_key_exists('nomNaissance', $data) && null === $data['nomNaissance']) {
                $object->setNomNaissance(null);
            }

            if (\array_key_exists('nomMarital', $data) && null !== $data['nomMarital']) {
                $object->setNomMarital($data['nomMarital']);
            } elseif (\array_key_exists('nomMarital', $data) && null === $data['nomMarital']) {
                $object->setNomMarital(null);
            }

            if (\array_key_exists('nomUsuel', $data) && null !== $data['nomUsuel']) {
                $object->setNomUsuel($data['nomUsuel']);
            } elseif (\array_key_exists('nomUsuel', $data) && null === $data['nomUsuel']) {
                $object->setNomUsuel(null);
            }

            if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
                $object->setPrenom($data['prenom']);
            } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
                $object->setPrenom(null);
            }

            if (\array_key_exists('bTelPortable', $data) && null !== $data['bTelPortable']) {
                $object->setBTelPortable($data['bTelPortable']);
            } elseif (\array_key_exists('bTelPortable', $data) && null === $data['bTelPortable']) {
                $object->setBTelPortable(null);
            }

            if (\array_key_exists('telPortable', $data) && null !== $data['telPortable']) {
                $object->setTelPortable($data['telPortable']);
            } elseif (\array_key_exists('telPortable', $data) && null === $data['telPortable']) {
                $object->setTelPortable(null);
            }

            if (\array_key_exists('bTelBureau', $data) && null !== $data['bTelBureau']) {
                $object->setBTelBureau($data['bTelBureau']);
            } elseif (\array_key_exists('bTelBureau', $data) && null === $data['bTelBureau']) {
                $object->setBTelBureau(null);
            }

            if (\array_key_exists('telBureau', $data) && null !== $data['telBureau']) {
                $object->setTelBureau($data['telBureau']);
            } elseif (\array_key_exists('telBureau', $data) && null === $data['telBureau']) {
                $object->setTelBureau(null);
            }

            if (\array_key_exists('bTelDomicile', $data) && null !== $data['bTelDomicile']) {
                $object->setBTelDomicile($data['bTelDomicile']);
            } elseif (\array_key_exists('bTelDomicile', $data) && null === $data['bTelDomicile']) {
                $object->setBTelDomicile(null);
            }

            if (\array_key_exists('telDomicile', $data) && null !== $data['telDomicile']) {
                $object->setTelDomicile($data['telDomicile']);
            } elseif (\array_key_exists('telDomicile', $data) && null === $data['telDomicile']) {
                $object->setTelDomicile(null);
            }

            if (\array_key_exists('bMail', $data) && null !== $data['bMail']) {
                $object->setBMail($data['bMail']);
            } elseif (\array_key_exists('bMail', $data) && null === $data['bMail']) {
                $object->setBMail(null);
            }

            if (\array_key_exists('mail', $data) && null !== $data['mail']) {
                $object->setMail($data['mail']);
            } elseif (\array_key_exists('mail', $data) && null === $data['mail']) {
                $object->setMail(null);
            }

            if (\array_key_exists('bCodeAgence', $data) && null !== $data['bCodeAgence']) {
                $object->setBCodeAgence($data['bCodeAgence']);
            } elseif (\array_key_exists('bCodeAgence', $data) && null === $data['bCodeAgence']) {
                $object->setBCodeAgence(null);
            }

            if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
                $object->setCodeAgence($data['codeAgence']);
            } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
                $object->setCodeAgence(null);
            }

            if (\array_key_exists('bAffectations', $data) && null !== $data['bAffectations']) {
                $object->setBAffectations($data['bAffectations']);
            } elseif (\array_key_exists('bAffectations', $data) && null === $data['bAffectations']) {
                $object->setBAffectations(null);
            }

            if (\array_key_exists('affectation1', $data) && null !== $data['affectation1']) {
                $object->setAffectation1($data['affectation1']);
            } elseif (\array_key_exists('affectation1', $data) && null === $data['affectation1']) {
                $object->setAffectation1(null);
            }

            if (\array_key_exists('affectation2', $data) && null !== $data['affectation2']) {
                $object->setAffectation2($data['affectation2']);
            } elseif (\array_key_exists('affectation2', $data) && null === $data['affectation2']) {
                $object->setAffectation2(null);
            }

            if (\array_key_exists('affectation3', $data) && null !== $data['affectation3']) {
                $object->setAffectation3($data['affectation3']);
            } elseif (\array_key_exists('affectation3', $data) && null === $data['affectation3']) {
                $object->setAffectation3(null);
            }

            if (\array_key_exists('affectation4', $data) && null !== $data['affectation4']) {
                $object->setAffectation4($data['affectation4']);
            } elseif (\array_key_exists('affectation4', $data) && null === $data['affectation4']) {
                $object->setAffectation4(null);
            }

            if (\array_key_exists('affectation5', $data) && null !== $data['affectation5']) {
                $object->setAffectation5($data['affectation5']);
            } elseif (\array_key_exists('affectation5', $data) && null === $data['affectation5']) {
                $object->setAffectation5(null);
            }

            if (\array_key_exists('affectation6', $data) && null !== $data['affectation6']) {
                $object->setAffectation6($data['affectation6']);
            } elseif (\array_key_exists('affectation6', $data) && null === $data['affectation6']) {
                $object->setAffectation6(null);
            }

            if (\array_key_exists('affectation7', $data) && null !== $data['affectation7']) {
                $object->setAffectation7($data['affectation7']);
            } elseif (\array_key_exists('affectation7', $data) && null === $data['affectation7']) {
                $object->setAffectation7(null);
            }

            if (\array_key_exists('affectation8', $data) && null !== $data['affectation8']) {
                $object->setAffectation8($data['affectation8']);
            } elseif (\array_key_exists('affectation8', $data) && null === $data['affectation8']) {
                $object->setAffectation8(null);
            }

            if (\array_key_exists('affectation9', $data) && null !== $data['affectation9']) {
                $object->setAffectation9($data['affectation9']);
            } elseif (\array_key_exists('affectation9', $data) && null === $data['affectation9']) {
                $object->setAffectation9(null);
            }

            if (\array_key_exists('identifiant', $data) && null !== $data['identifiant']) {
                $object->setIdentifiant($data['identifiant']);
            } elseif (\array_key_exists('identifiant', $data) && null === $data['identifiant']) {
                $object->setIdentifiant(null);
            }

            if (\array_key_exists('ancienMotDePasse', $data) && null !== $data['ancienMotDePasse']) {
                $object->setAncienMotDePasse($data['ancienMotDePasse']);
            } elseif (\array_key_exists('ancienMotDePasse', $data) && null === $data['ancienMotDePasse']) {
                $object->setAncienMotDePasse(null);
            }

            if (\array_key_exists('motDePasse', $data) && null !== $data['motDePasse']) {
                $object->setMotDePasse($data['motDePasse']);
            } elseif (\array_key_exists('motDePasse', $data) && null === $data['motDePasse']) {
                $object->setMotDePasse(null);
            }

            if (\array_key_exists('debutValidite', $data) && null !== $data['debutValidite']) {
                $object->setDebutValidite(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['debutValidite']));
            } elseif (\array_key_exists('debutValidite', $data) && null === $data['debutValidite']) {
                $object->setDebutValidite(null);
            }

            if (\array_key_exists('finValidite', $data) && null !== $data['finValidite']) {
                $object->setFinValidite(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['finValidite']));
            } elseif (\array_key_exists('finValidite', $data) && null === $data['finValidite']) {
                $object->setFinValidite(null);
            }

            if (\array_key_exists('bDateEntree', $data) && null !== $data['bDateEntree']) {
                $object->setBDateEntree($data['bDateEntree']);
            } elseif (\array_key_exists('bDateEntree', $data) && null === $data['bDateEntree']) {
                $object->setBDateEntree(null);
            }

            if (\array_key_exists('dateEntree', $data) && null !== $data['dateEntree']) {
                $object->setDateEntree(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateEntree']));
            } elseif (\array_key_exists('dateEntree', $data) && null === $data['dateEntree']) {
                $object->setDateEntree(null);
            }

            if (\array_key_exists('bDateSortie', $data) && null !== $data['bDateSortie']) {
                $object->setBDateSortie($data['bDateSortie']);
            } elseif (\array_key_exists('bDateSortie', $data) && null === $data['bDateSortie']) {
                $object->setBDateSortie(null);
            }

            if (\array_key_exists('dateSortie', $data) && null !== $data['dateSortie']) {
                $object->setDateSortie(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateSortie']));
            } elseif (\array_key_exists('dateSortie', $data) && null === $data['dateSortie']) {
                $object->setDateSortie(null);
            }

            if (\array_key_exists('onglet_Production', $data) && null !== $data['onglet_Production']) {
                $object->setOngletProduction($data['onglet_Production']);
            } elseif (\array_key_exists('onglet_Production', $data) && null === $data['onglet_Production']) {
                $object->setOngletProduction(null);
            }

            if (\array_key_exists('onglet_GestionInterne', $data) && null !== $data['onglet_GestionInterne']) {
                $object->setOngletGestionInterne($data['onglet_GestionInterne']);
            } elseif (\array_key_exists('onglet_GestionInterne', $data) && null === $data['onglet_GestionInterne']) {
                $object->setOngletGestionInterne(null);
            }

            if (\array_key_exists('onglet_GestionInterneSimplifiee', $data) && null !== $data['onglet_GestionInterneSimplifiee']) {
                $object->setOngletGestionInterneSimplifiee($data['onglet_GestionInterneSimplifiee']);
            } elseif (\array_key_exists('onglet_GestionInterneSimplifiee', $data) && null === $data['onglet_GestionInterneSimplifiee']) {
                $object->setOngletGestionInterneSimplifiee(null);
            }

            if (\array_key_exists('onglet_GestionDesIdentifiants', $data) && null !== $data['onglet_GestionDesIdentifiants']) {
                $object->setOngletGestionDesIdentifiants($data['onglet_GestionDesIdentifiants']);
            } elseif (\array_key_exists('onglet_GestionDesIdentifiants', $data) && null === $data['onglet_GestionDesIdentifiants']) {
                $object->setOngletGestionDesIdentifiants(null);
            }

            if (\array_key_exists('onglet_ParametragePaie', $data) && null !== $data['onglet_ParametragePaie']) {
                $object->setOngletParametragePaie($data['onglet_ParametragePaie']);
            } elseif (\array_key_exists('onglet_ParametragePaie', $data) && null === $data['onglet_ParametragePaie']) {
                $object->setOngletParametragePaie(null);
            }

            if (\array_key_exists('onglet_ParametrageCompta', $data) && null !== $data['onglet_ParametrageCompta']) {
                $object->setOngletParametrageCompta($data['onglet_ParametrageCompta']);
            } elseif (\array_key_exists('onglet_ParametrageCompta', $data) && null === $data['onglet_ParametrageCompta']) {
                $object->setOngletParametrageCompta(null);
            }

            if (\array_key_exists('onglet_RobotDePaie', $data) && null !== $data['onglet_RobotDePaie']) {
                $object->setOngletRobotDePaie($data['onglet_RobotDePaie']);
            } elseif (\array_key_exists('onglet_RobotDePaie', $data) && null === $data['onglet_RobotDePaie']) {
                $object->setOngletRobotDePaie(null);
            }

            if (\array_key_exists('onglet_Outils', $data) && null !== $data['onglet_Outils']) {
                $object->setOngletOutils($data['onglet_Outils']);
            } elseif (\array_key_exists('onglet_Outils', $data) && null === $data['onglet_Outils']) {
                $object->setOngletOutils(null);
            }

            if (\array_key_exists('onglet_AnalyseActivitePaie', $data) && null !== $data['onglet_AnalyseActivitePaie']) {
                $object->setOngletAnalyseActivitePaie($data['onglet_AnalyseActivitePaie']);
            } elseif (\array_key_exists('onglet_AnalyseActivitePaie', $data) && null === $data['onglet_AnalyseActivitePaie']) {
                $object->setOngletAnalyseActivitePaie(null);
            }

            if (\array_key_exists('onglet_AnalyseActiviteCompta', $data) && null !== $data['onglet_AnalyseActiviteCompta']) {
                $object->setOngletAnalyseActiviteCompta($data['onglet_AnalyseActiviteCompta']);
            } elseif (\array_key_exists('onglet_AnalyseActiviteCompta', $data) && null === $data['onglet_AnalyseActiviteCompta']) {
                $object->setOngletAnalyseActiviteCompta(null);
            }

            if (\array_key_exists('restrictionPaie_FicheSociete_EtatDossier', $data) && null !== $data['restrictionPaie_FicheSociete_EtatDossier']) {
                $object->setRestrictionPaieFicheSocieteEtatDossier($data['restrictionPaie_FicheSociete_EtatDossier']);
            } elseif (\array_key_exists('restrictionPaie_FicheSociete_EtatDossier', $data) && null === $data['restrictionPaie_FicheSociete_EtatDossier']) {
                $object->setRestrictionPaieFicheSocieteEtatDossier(null);
            }

            if (\array_key_exists('niveauConfidentialiteSalarie', $data) && null !== $data['niveauConfidentialiteSalarie']) {
                $object->setNiveauConfidentialiteSalarie($data['niveauConfidentialiteSalarie']);
            } elseif (\array_key_exists('niveauConfidentialiteSalarie', $data) && null === $data['niveauConfidentialiteSalarie']) {
                $object->setNiveauConfidentialiteSalarie(null);
            }

            if (\array_key_exists('droitsLimitesPaie', $data) && null !== $data['droitsLimitesPaie']) {
                $object->setDroitsLimitesPaie($data['droitsLimitesPaie']);
            } elseif (\array_key_exists('droitsLimitesPaie', $data) && null === $data['droitsLimitesPaie']) {
                $object->setDroitsLimitesPaie(null);
            }

            if (\array_key_exists('droitsLimitesCompta', $data) && null !== $data['droitsLimitesCompta']) {
                $object->setDroitsLimitesCompta($data['droitsLimitesCompta']);
            } elseif (\array_key_exists('droitsLimitesCompta', $data) && null === $data['droitsLimitesCompta']) {
                $object->setDroitsLimitesCompta(null);
            }

            if (\array_key_exists('listesCollaborateursDroits', $data) && null !== $data['listesCollaborateursDroits']) {
                $object->setListesCollaborateursDroits($data['listesCollaborateursDroits']);
            } elseif (\array_key_exists('listesCollaborateursDroits', $data) && null === $data['listesCollaborateursDroits']) {
                $object->setListesCollaborateursDroits(null);
            }

            if (\array_key_exists('requeteDroits', $data) && null !== $data['requeteDroits']) {
                $object->setRequeteDroits($data['requeteDroits']);
            } elseif (\array_key_exists('requeteDroits', $data) && null === $data['requeteDroits']) {
                $object->setRequeteDroits(null);
            }

            return $object;
        }

        /**
         * @param mixed|null $format
         *
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('codeCollaborateur') && null !== $object->getCodeCollaborateur()) {
                $data['codeCollaborateur'] = $object->getCodeCollaborateur();
            }

            if ($object->isInitialized('bCivilite') && null !== $object->getBCivilite()) {
                $data['bCivilite'] = $object->getBCivilite();
            }

            if ($object->isInitialized('civilite') && null !== $object->getCivilite()) {
                $data['civilite'] = $object->getCivilite();
            }

            if ($object->isInitialized('nomNaissance') && null !== $object->getNomNaissance()) {
                $data['nomNaissance'] = $object->getNomNaissance();
            }

            if ($object->isInitialized('nomMarital') && null !== $object->getNomMarital()) {
                $data['nomMarital'] = $object->getNomMarital();
            }

            if ($object->isInitialized('nomUsuel') && null !== $object->getNomUsuel()) {
                $data['nomUsuel'] = $object->getNomUsuel();
            }

            if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
                $data['prenom'] = $object->getPrenom();
            }

            if ($object->isInitialized('bTelPortable') && null !== $object->getBTelPortable()) {
                $data['bTelPortable'] = $object->getBTelPortable();
            }

            if ($object->isInitialized('telPortable') && null !== $object->getTelPortable()) {
                $data['telPortable'] = $object->getTelPortable();
            }

            if ($object->isInitialized('bTelBureau') && null !== $object->getBTelBureau()) {
                $data['bTelBureau'] = $object->getBTelBureau();
            }

            if ($object->isInitialized('telBureau') && null !== $object->getTelBureau()) {
                $data['telBureau'] = $object->getTelBureau();
            }

            if ($object->isInitialized('bTelDomicile') && null !== $object->getBTelDomicile()) {
                $data['bTelDomicile'] = $object->getBTelDomicile();
            }

            if ($object->isInitialized('telDomicile') && null !== $object->getTelDomicile()) {
                $data['telDomicile'] = $object->getTelDomicile();
            }

            if ($object->isInitialized('bMail') && null !== $object->getBMail()) {
                $data['bMail'] = $object->getBMail();
            }

            if ($object->isInitialized('mail') && null !== $object->getMail()) {
                $data['mail'] = $object->getMail();
            }

            if ($object->isInitialized('bCodeAgence') && null !== $object->getBCodeAgence()) {
                $data['bCodeAgence'] = $object->getBCodeAgence();
            }

            if ($object->isInitialized('codeAgence') && null !== $object->getCodeAgence()) {
                $data['codeAgence'] = $object->getCodeAgence();
            }

            if ($object->isInitialized('bAffectations') && null !== $object->getBAffectations()) {
                $data['bAffectations'] = $object->getBAffectations();
            }

            if ($object->isInitialized('affectation1') && null !== $object->getAffectation1()) {
                $data['affectation1'] = $object->getAffectation1();
            }

            if ($object->isInitialized('affectation2') && null !== $object->getAffectation2()) {
                $data['affectation2'] = $object->getAffectation2();
            }

            if ($object->isInitialized('affectation3') && null !== $object->getAffectation3()) {
                $data['affectation3'] = $object->getAffectation3();
            }

            if ($object->isInitialized('affectation4') && null !== $object->getAffectation4()) {
                $data['affectation4'] = $object->getAffectation4();
            }

            if ($object->isInitialized('affectation5') && null !== $object->getAffectation5()) {
                $data['affectation5'] = $object->getAffectation5();
            }

            if ($object->isInitialized('affectation6') && null !== $object->getAffectation6()) {
                $data['affectation6'] = $object->getAffectation6();
            }

            if ($object->isInitialized('affectation7') && null !== $object->getAffectation7()) {
                $data['affectation7'] = $object->getAffectation7();
            }

            if ($object->isInitialized('affectation8') && null !== $object->getAffectation8()) {
                $data['affectation8'] = $object->getAffectation8();
            }

            if ($object->isInitialized('affectation9') && null !== $object->getAffectation9()) {
                $data['affectation9'] = $object->getAffectation9();
            }

            if ($object->isInitialized('identifiant') && null !== $object->getIdentifiant()) {
                $data['identifiant'] = $object->getIdentifiant();
            }

            if ($object->isInitialized('ancienMotDePasse') && null !== $object->getAncienMotDePasse()) {
                $data['ancienMotDePasse'] = $object->getAncienMotDePasse();
            }

            if ($object->isInitialized('motDePasse') && null !== $object->getMotDePasse()) {
                $data['motDePasse'] = $object->getMotDePasse();
            }

            if ($object->isInitialized('debutValidite') && null !== $object->getDebutValidite()) {
                $data['debutValidite'] = $object->getDebutValidite()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('finValidite') && null !== $object->getFinValidite()) {
                $data['finValidite'] = $object->getFinValidite()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('bDateEntree') && null !== $object->getBDateEntree()) {
                $data['bDateEntree'] = $object->getBDateEntree();
            }

            if ($object->isInitialized('dateEntree') && null !== $object->getDateEntree()) {
                $data['dateEntree'] = $object->getDateEntree()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('bDateSortie') && null !== $object->getBDateSortie()) {
                $data['bDateSortie'] = $object->getBDateSortie();
            }

            if ($object->isInitialized('dateSortie') && null !== $object->getDateSortie()) {
                $data['dateSortie'] = $object->getDateSortie()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('ongletProduction') && null !== $object->getOngletProduction()) {
                $data['onglet_Production'] = $object->getOngletProduction();
            }

            if ($object->isInitialized('ongletGestionInterne') && null !== $object->getOngletGestionInterne()) {
                $data['onglet_GestionInterne'] = $object->getOngletGestionInterne();
            }

            if ($object->isInitialized('ongletGestionInterneSimplifiee') && null !== $object->getOngletGestionInterneSimplifiee()) {
                $data['onglet_GestionInterneSimplifiee'] = $object->getOngletGestionInterneSimplifiee();
            }

            if ($object->isInitialized('ongletGestionDesIdentifiants') && null !== $object->getOngletGestionDesIdentifiants()) {
                $data['onglet_GestionDesIdentifiants'] = $object->getOngletGestionDesIdentifiants();
            }

            if ($object->isInitialized('ongletParametragePaie') && null !== $object->getOngletParametragePaie()) {
                $data['onglet_ParametragePaie'] = $object->getOngletParametragePaie();
            }

            if ($object->isInitialized('ongletParametrageCompta') && null !== $object->getOngletParametrageCompta()) {
                $data['onglet_ParametrageCompta'] = $object->getOngletParametrageCompta();
            }

            if ($object->isInitialized('ongletRobotDePaie') && null !== $object->getOngletRobotDePaie()) {
                $data['onglet_RobotDePaie'] = $object->getOngletRobotDePaie();
            }

            if ($object->isInitialized('ongletOutils') && null !== $object->getOngletOutils()) {
                $data['onglet_Outils'] = $object->getOngletOutils();
            }

            if ($object->isInitialized('ongletAnalyseActivitePaie') && null !== $object->getOngletAnalyseActivitePaie()) {
                $data['onglet_AnalyseActivitePaie'] = $object->getOngletAnalyseActivitePaie();
            }

            if ($object->isInitialized('ongletAnalyseActiviteCompta') && null !== $object->getOngletAnalyseActiviteCompta()) {
                $data['onglet_AnalyseActiviteCompta'] = $object->getOngletAnalyseActiviteCompta();
            }

            if ($object->isInitialized('restrictionPaieFicheSocieteEtatDossier') && null !== $object->getRestrictionPaieFicheSocieteEtatDossier()) {
                $data['restrictionPaie_FicheSociete_EtatDossier'] = $object->getRestrictionPaieFicheSocieteEtatDossier();
            }

            if ($object->isInitialized('niveauConfidentialiteSalarie') && null !== $object->getNiveauConfidentialiteSalarie()) {
                $data['niveauConfidentialiteSalarie'] = $object->getNiveauConfidentialiteSalarie();
            }

            if ($object->isInitialized('droitsLimitesPaie') && null !== $object->getDroitsLimitesPaie()) {
                $data['droitsLimitesPaie'] = $object->getDroitsLimitesPaie();
            }

            if ($object->isInitialized('droitsLimitesCompta') && null !== $object->getDroitsLimitesCompta()) {
                $data['droitsLimitesCompta'] = $object->getDroitsLimitesCompta();
            }

            if ($object->isInitialized('listesCollaborateursDroits') && null !== $object->getListesCollaborateursDroits()) {
                $data['listesCollaborateursDroits'] = $object->getListesCollaborateursDroits();
            }

            if ($object->isInitialized('requeteDroits') && null !== $object->getRequeteDroits()) {
                $data['requeteDroits'] = $object->getRequeteDroits();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [UtilisateurCollaborateur::class => false];
        }
    }
}
