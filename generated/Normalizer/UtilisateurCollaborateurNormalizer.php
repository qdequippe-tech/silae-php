<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\UtilisateurCollaborateur;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

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
        if (\array_key_exists('bCivilite', $data) && \is_int($data['bCivilite'])) {
            $data['bCivilite'] = (bool) $data['bCivilite'];
        }

        if (\array_key_exists('bTelPortable', $data) && \is_int($data['bTelPortable'])) {
            $data['bTelPortable'] = (bool) $data['bTelPortable'];
        }

        if (\array_key_exists('bTelBureau', $data) && \is_int($data['bTelBureau'])) {
            $data['bTelBureau'] = (bool) $data['bTelBureau'];
        }

        if (\array_key_exists('bTelDomicile', $data) && \is_int($data['bTelDomicile'])) {
            $data['bTelDomicile'] = (bool) $data['bTelDomicile'];
        }

        if (\array_key_exists('bMail', $data) && \is_int($data['bMail'])) {
            $data['bMail'] = (bool) $data['bMail'];
        }

        if (\array_key_exists('bCodeAgence', $data) && \is_int($data['bCodeAgence'])) {
            $data['bCodeAgence'] = (bool) $data['bCodeAgence'];
        }

        if (\array_key_exists('bAffectations', $data) && \is_int($data['bAffectations'])) {
            $data['bAffectations'] = (bool) $data['bAffectations'];
        }

        if (\array_key_exists('affectation1', $data) && \is_int($data['affectation1'])) {
            $data['affectation1'] = (bool) $data['affectation1'];
        }

        if (\array_key_exists('affectation2', $data) && \is_int($data['affectation2'])) {
            $data['affectation2'] = (bool) $data['affectation2'];
        }

        if (\array_key_exists('affectation3', $data) && \is_int($data['affectation3'])) {
            $data['affectation3'] = (bool) $data['affectation3'];
        }

        if (\array_key_exists('affectation4', $data) && \is_int($data['affectation4'])) {
            $data['affectation4'] = (bool) $data['affectation4'];
        }

        if (\array_key_exists('affectation5', $data) && \is_int($data['affectation5'])) {
            $data['affectation5'] = (bool) $data['affectation5'];
        }

        if (\array_key_exists('affectation6', $data) && \is_int($data['affectation6'])) {
            $data['affectation6'] = (bool) $data['affectation6'];
        }

        if (\array_key_exists('affectation7', $data) && \is_int($data['affectation7'])) {
            $data['affectation7'] = (bool) $data['affectation7'];
        }

        if (\array_key_exists('affectation8', $data) && \is_int($data['affectation8'])) {
            $data['affectation8'] = (bool) $data['affectation8'];
        }

        if (\array_key_exists('affectation9', $data) && \is_int($data['affectation9'])) {
            $data['affectation9'] = (bool) $data['affectation9'];
        }

        if (\array_key_exists('bDateEntree', $data) && \is_int($data['bDateEntree'])) {
            $data['bDateEntree'] = (bool) $data['bDateEntree'];
        }

        if (\array_key_exists('bDateSortie', $data) && \is_int($data['bDateSortie'])) {
            $data['bDateSortie'] = (bool) $data['bDateSortie'];
        }

        if (\array_key_exists('onglet_Production', $data) && \is_int($data['onglet_Production'])) {
            $data['onglet_Production'] = (bool) $data['onglet_Production'];
        }

        if (\array_key_exists('onglet_GestionInterne', $data) && \is_int($data['onglet_GestionInterne'])) {
            $data['onglet_GestionInterne'] = (bool) $data['onglet_GestionInterne'];
        }

        if (\array_key_exists('onglet_GestionInterneSimplifiee', $data) && \is_int($data['onglet_GestionInterneSimplifiee'])) {
            $data['onglet_GestionInterneSimplifiee'] = (bool) $data['onglet_GestionInterneSimplifiee'];
        }

        if (\array_key_exists('onglet_ParametragePaie', $data) && \is_int($data['onglet_ParametragePaie'])) {
            $data['onglet_ParametragePaie'] = (bool) $data['onglet_ParametragePaie'];
        }

        if (\array_key_exists('onglet_ParametrageCompta', $data) && \is_int($data['onglet_ParametrageCompta'])) {
            $data['onglet_ParametrageCompta'] = (bool) $data['onglet_ParametrageCompta'];
        }

        if (\array_key_exists('onglet_RobotDePaie', $data) && \is_int($data['onglet_RobotDePaie'])) {
            $data['onglet_RobotDePaie'] = (bool) $data['onglet_RobotDePaie'];
        }

        if (\array_key_exists('onglet_Outils', $data) && \is_int($data['onglet_Outils'])) {
            $data['onglet_Outils'] = (bool) $data['onglet_Outils'];
        }

        if (\array_key_exists('onglet_AnalyseActivitePaie', $data) && \is_int($data['onglet_AnalyseActivitePaie'])) {
            $data['onglet_AnalyseActivitePaie'] = (bool) $data['onglet_AnalyseActivitePaie'];
        }

        if (\array_key_exists('onglet_AnalyseActiviteCompta', $data) && \is_int($data['onglet_AnalyseActiviteCompta'])) {
            $data['onglet_AnalyseActiviteCompta'] = (bool) $data['onglet_AnalyseActiviteCompta'];
        }

        if (\array_key_exists('restrictionPaie_FicheSociete_EtatDossier', $data) && \is_int($data['restrictionPaie_FicheSociete_EtatDossier'])) {
            $data['restrictionPaie_FicheSociete_EtatDossier'] = (bool) $data['restrictionPaie_FicheSociete_EtatDossier'];
        }

        if (\array_key_exists('droitsLimitesPaie', $data) && \is_int($data['droitsLimitesPaie'])) {
            $data['droitsLimitesPaie'] = (bool) $data['droitsLimitesPaie'];
        }

        if (\array_key_exists('droitsLimitesCompta', $data) && \is_int($data['droitsLimitesCompta'])) {
            $data['droitsLimitesCompta'] = (bool) $data['droitsLimitesCompta'];
        }

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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('codeCollaborateur') && null !== $data->getCodeCollaborateur()) {
            $dataArray['codeCollaborateur'] = $data->getCodeCollaborateur();
        }

        if ($data->isInitialized('bCivilite') && null !== $data->getBCivilite()) {
            $dataArray['bCivilite'] = $data->getBCivilite();
        }

        if ($data->isInitialized('civilite') && null !== $data->getCivilite()) {
            $dataArray['civilite'] = $data->getCivilite();
        }

        if ($data->isInitialized('nomNaissance') && null !== $data->getNomNaissance()) {
            $dataArray['nomNaissance'] = $data->getNomNaissance();
        }

        if ($data->isInitialized('nomMarital') && null !== $data->getNomMarital()) {
            $dataArray['nomMarital'] = $data->getNomMarital();
        }

        if ($data->isInitialized('nomUsuel') && null !== $data->getNomUsuel()) {
            $dataArray['nomUsuel'] = $data->getNomUsuel();
        }

        if ($data->isInitialized('prenom') && null !== $data->getPrenom()) {
            $dataArray['prenom'] = $data->getPrenom();
        }

        if ($data->isInitialized('bTelPortable') && null !== $data->getBTelPortable()) {
            $dataArray['bTelPortable'] = $data->getBTelPortable();
        }

        if ($data->isInitialized('telPortable') && null !== $data->getTelPortable()) {
            $dataArray['telPortable'] = $data->getTelPortable();
        }

        if ($data->isInitialized('bTelBureau') && null !== $data->getBTelBureau()) {
            $dataArray['bTelBureau'] = $data->getBTelBureau();
        }

        if ($data->isInitialized('telBureau') && null !== $data->getTelBureau()) {
            $dataArray['telBureau'] = $data->getTelBureau();
        }

        if ($data->isInitialized('bTelDomicile') && null !== $data->getBTelDomicile()) {
            $dataArray['bTelDomicile'] = $data->getBTelDomicile();
        }

        if ($data->isInitialized('telDomicile') && null !== $data->getTelDomicile()) {
            $dataArray['telDomicile'] = $data->getTelDomicile();
        }

        if ($data->isInitialized('bMail') && null !== $data->getBMail()) {
            $dataArray['bMail'] = $data->getBMail();
        }

        if ($data->isInitialized('mail') && null !== $data->getMail()) {
            $dataArray['mail'] = $data->getMail();
        }

        if ($data->isInitialized('bCodeAgence') && null !== $data->getBCodeAgence()) {
            $dataArray['bCodeAgence'] = $data->getBCodeAgence();
        }

        if ($data->isInitialized('codeAgence') && null !== $data->getCodeAgence()) {
            $dataArray['codeAgence'] = $data->getCodeAgence();
        }

        if ($data->isInitialized('bAffectations') && null !== $data->getBAffectations()) {
            $dataArray['bAffectations'] = $data->getBAffectations();
        }

        if ($data->isInitialized('affectation1') && null !== $data->getAffectation1()) {
            $dataArray['affectation1'] = $data->getAffectation1();
        }

        if ($data->isInitialized('affectation2') && null !== $data->getAffectation2()) {
            $dataArray['affectation2'] = $data->getAffectation2();
        }

        if ($data->isInitialized('affectation3') && null !== $data->getAffectation3()) {
            $dataArray['affectation3'] = $data->getAffectation3();
        }

        if ($data->isInitialized('affectation4') && null !== $data->getAffectation4()) {
            $dataArray['affectation4'] = $data->getAffectation4();
        }

        if ($data->isInitialized('affectation5') && null !== $data->getAffectation5()) {
            $dataArray['affectation5'] = $data->getAffectation5();
        }

        if ($data->isInitialized('affectation6') && null !== $data->getAffectation6()) {
            $dataArray['affectation6'] = $data->getAffectation6();
        }

        if ($data->isInitialized('affectation7') && null !== $data->getAffectation7()) {
            $dataArray['affectation7'] = $data->getAffectation7();
        }

        if ($data->isInitialized('affectation8') && null !== $data->getAffectation8()) {
            $dataArray['affectation8'] = $data->getAffectation8();
        }

        if ($data->isInitialized('affectation9') && null !== $data->getAffectation9()) {
            $dataArray['affectation9'] = $data->getAffectation9();
        }

        if ($data->isInitialized('identifiant') && null !== $data->getIdentifiant()) {
            $dataArray['identifiant'] = $data->getIdentifiant();
        }

        if ($data->isInitialized('ancienMotDePasse') && null !== $data->getAncienMotDePasse()) {
            $dataArray['ancienMotDePasse'] = $data->getAncienMotDePasse();
        }

        if ($data->isInitialized('motDePasse') && null !== $data->getMotDePasse()) {
            $dataArray['motDePasse'] = $data->getMotDePasse();
        }

        if ($data->isInitialized('debutValidite') && null !== $data->getDebutValidite()) {
            $dataArray['debutValidite'] = $data->getDebutValidite()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('finValidite') && null !== $data->getFinValidite()) {
            $dataArray['finValidite'] = $data->getFinValidite()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bDateEntree') && null !== $data->getBDateEntree()) {
            $dataArray['bDateEntree'] = $data->getBDateEntree();
        }

        if ($data->isInitialized('dateEntree') && null !== $data->getDateEntree()) {
            $dataArray['dateEntree'] = $data->getDateEntree()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bDateSortie') && null !== $data->getBDateSortie()) {
            $dataArray['bDateSortie'] = $data->getBDateSortie();
        }

        if ($data->isInitialized('dateSortie') && null !== $data->getDateSortie()) {
            $dataArray['dateSortie'] = $data->getDateSortie()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('ongletProduction') && null !== $data->getOngletProduction()) {
            $dataArray['onglet_Production'] = $data->getOngletProduction();
        }

        if ($data->isInitialized('ongletGestionInterne') && null !== $data->getOngletGestionInterne()) {
            $dataArray['onglet_GestionInterne'] = $data->getOngletGestionInterne();
        }

        if ($data->isInitialized('ongletGestionInterneSimplifiee') && null !== $data->getOngletGestionInterneSimplifiee()) {
            $dataArray['onglet_GestionInterneSimplifiee'] = $data->getOngletGestionInterneSimplifiee();
        }

        if ($data->isInitialized('ongletParametragePaie') && null !== $data->getOngletParametragePaie()) {
            $dataArray['onglet_ParametragePaie'] = $data->getOngletParametragePaie();
        }

        if ($data->isInitialized('ongletParametrageCompta') && null !== $data->getOngletParametrageCompta()) {
            $dataArray['onglet_ParametrageCompta'] = $data->getOngletParametrageCompta();
        }

        if ($data->isInitialized('ongletRobotDePaie') && null !== $data->getOngletRobotDePaie()) {
            $dataArray['onglet_RobotDePaie'] = $data->getOngletRobotDePaie();
        }

        if ($data->isInitialized('ongletOutils') && null !== $data->getOngletOutils()) {
            $dataArray['onglet_Outils'] = $data->getOngletOutils();
        }

        if ($data->isInitialized('ongletAnalyseActivitePaie') && null !== $data->getOngletAnalyseActivitePaie()) {
            $dataArray['onglet_AnalyseActivitePaie'] = $data->getOngletAnalyseActivitePaie();
        }

        if ($data->isInitialized('ongletAnalyseActiviteCompta') && null !== $data->getOngletAnalyseActiviteCompta()) {
            $dataArray['onglet_AnalyseActiviteCompta'] = $data->getOngletAnalyseActiviteCompta();
        }

        if ($data->isInitialized('restrictionPaieFicheSocieteEtatDossier') && null !== $data->getRestrictionPaieFicheSocieteEtatDossier()) {
            $dataArray['restrictionPaie_FicheSociete_EtatDossier'] = $data->getRestrictionPaieFicheSocieteEtatDossier();
        }

        if ($data->isInitialized('niveauConfidentialiteSalarie') && null !== $data->getNiveauConfidentialiteSalarie()) {
            $dataArray['niveauConfidentialiteSalarie'] = $data->getNiveauConfidentialiteSalarie();
        }

        if ($data->isInitialized('droitsLimitesPaie') && null !== $data->getDroitsLimitesPaie()) {
            $dataArray['droitsLimitesPaie'] = $data->getDroitsLimitesPaie();
        }

        if ($data->isInitialized('droitsLimitesCompta') && null !== $data->getDroitsLimitesCompta()) {
            $dataArray['droitsLimitesCompta'] = $data->getDroitsLimitesCompta();
        }

        if ($data->isInitialized('listesCollaborateursDroits') && null !== $data->getListesCollaborateursDroits()) {
            $dataArray['listesCollaborateursDroits'] = $data->getListesCollaborateursDroits();
        }

        if ($data->isInitialized('requeteDroits') && null !== $data->getRequeteDroits()) {
            $dataArray['requeteDroits'] = $data->getRequeteDroits();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [UtilisateurCollaborateur::class => false];
    }
}
