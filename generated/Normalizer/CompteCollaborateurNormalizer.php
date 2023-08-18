<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CompteCollaborateur;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompteCollaborateurNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\CompteCollaborateur' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof CompteCollaborateur;
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
        $object = new CompteCollaborateur();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('identifiant', $data) && null !== $data['identifiant']) {
            $object->setIdentifiant($data['identifiant']);
        } elseif (\array_key_exists('identifiant', $data) && null === $data['identifiant']) {
            $object->setIdentifiant(null);
        }
        if (\array_key_exists('codeCollaborateur', $data) && null !== $data['codeCollaborateur']) {
            $object->setCodeCollaborateur($data['codeCollaborateur']);
        } elseif (\array_key_exists('codeCollaborateur', $data) && null === $data['codeCollaborateur']) {
            $object->setCodeCollaborateur(null);
        }
        if (\array_key_exists('accesDroitsFonctionnels', $data) && null !== $data['accesDroitsFonctionnels']) {
            $object->setAccesDroitsFonctionnels($data['accesDroitsFonctionnels']);
        } elseif (\array_key_exists('accesDroitsFonctionnels', $data) && null === $data['accesDroitsFonctionnels']) {
            $object->setAccesDroitsFonctionnels(null);
        }
        if (\array_key_exists('accesDroitsFonctionnelsMode', $data) && null !== $data['accesDroitsFonctionnelsMode']) {
            $object->setAccesDroitsFonctionnelsMode($data['accesDroitsFonctionnelsMode']);
        } elseif (\array_key_exists('accesDroitsFonctionnelsMode', $data) && null === $data['accesDroitsFonctionnelsMode']) {
            $object->setAccesDroitsFonctionnelsMode(null);
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
        if (\array_key_exists('droitsLimitesEnPaie', $data) && null !== $data['droitsLimitesEnPaie']) {
            $object->setDroitsLimitesEnPaie($data['droitsLimitesEnPaie']);
        } elseif (\array_key_exists('droitsLimitesEnPaie', $data) && null === $data['droitsLimitesEnPaie']) {
            $object->setDroitsLimitesEnPaie(null);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('telephonePortable', $data) && null !== $data['telephonePortable']) {
            $object->setTelephonePortable($data['telephonePortable']);
        } elseif (\array_key_exists('telephonePortable', $data) && null === $data['telephonePortable']) {
            $object->setTelephonePortable(null);
        }
        if (\array_key_exists('telephoneBureau', $data) && null !== $data['telephoneBureau']) {
            $object->setTelephoneBureau($data['telephoneBureau']);
        } elseif (\array_key_exists('telephoneBureau', $data) && null === $data['telephoneBureau']) {
            $object->setTelephoneBureau(null);
        }
        if (\array_key_exists('telephoneDomicile', $data) && null !== $data['telephoneDomicile']) {
            $object->setTelephoneDomicile($data['telephoneDomicile']);
        } elseif (\array_key_exists('telephoneDomicile', $data) && null === $data['telephoneDomicile']) {
            $object->setTelephoneDomicile(null);
        }
        if (\array_key_exists('dateDebutValidite', $data) && null !== $data['dateDebutValidite']) {
            $object->setDateDebutValidite(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['dateDebutValidite']));
        } elseif (\array_key_exists('dateDebutValidite', $data) && null === $data['dateDebutValidite']) {
            $object->setDateDebutValidite(null);
        }
        if (\array_key_exists('dateFinValidite', $data) && null !== $data['dateFinValidite']) {
            $object->setDateFinValidite(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['dateFinValidite']));
        } elseif (\array_key_exists('dateFinValidite', $data) && null === $data['dateFinValidite']) {
            $object->setDateFinValidite(null);
        }
        if (\array_key_exists('roles', $data) && null !== $data['roles']) {
            $object->setRoles($this->denormalizer->denormalize($data['roles'], 'QdequippeTech\\Silae\\Api\\Model\\CompteCollaborateurRoles', 'json', $context));
        } elseif (\array_key_exists('roles', $data) && null === $data['roles']) {
            $object->setRoles(null);
        }
        if (\array_key_exists('requeteAccesDossiers', $data) && null !== $data['requeteAccesDossiers']) {
            $object->setRequeteAccesDossiers($data['requeteAccesDossiers']);
        } elseif (\array_key_exists('requeteAccesDossiers', $data) && null === $data['requeteAccesDossiers']) {
            $object->setRequeteAccesDossiers(null);
        }
        if (\array_key_exists('niveauConfidentialite', $data) && null !== $data['niveauConfidentialite']) {
            $object->setNiveauConfidentialite($data['niveauConfidentialite']);
        } elseif (\array_key_exists('niveauConfidentialite', $data) && null === $data['niveauConfidentialite']) {
            $object->setNiveauConfidentialite(null);
        }
        if (\array_key_exists('droits', $data) && null !== $data['droits']) {
            $object->setDroits($this->denormalizer->denormalize($data['droits'], 'QdequippeTech\\Silae\\Api\\Model\\CompteCollaborateurDroits', 'json', $context));
        } elseif (\array_key_exists('droits', $data) && null === $data['droits']) {
            $object->setDroits(null);
        }
        if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
            $object->setCodeAgence($data['codeAgence']);
        } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
            $object->setCodeAgence(null);
        }
        if (\array_key_exists('horairesAcces', $data) && null !== $data['horairesAcces']) {
            $object->setHorairesAcces($this->denormalizer->denormalize($data['horairesAcces'], 'QdequippeTech\\Silae\\Api\\Model\\CompteCollaborateurHorairesAcces', 'json', $context));
        } elseif (\array_key_exists('horairesAcces', $data) && null === $data['horairesAcces']) {
            $object->setHorairesAcces(null);
        }
        if (\array_key_exists('affectations', $data) && null !== $data['affectations']) {
            $values = [];
            foreach ($data['affectations'] as $value) {
                $values[] = $value;
            }
            $object->setAffectations($values);
        } elseif (\array_key_exists('affectations', $data) && null === $data['affectations']) {
            $object->setAffectations(null);
        }
        if (\array_key_exists('domaineInterventionEmetteurDads', $data) && null !== $data['domaineInterventionEmetteurDads']) {
            $object->setDomaineInterventionEmetteurDads($data['domaineInterventionEmetteurDads']);
        } elseif (\array_key_exists('domaineInterventionEmetteurDads', $data) && null === $data['domaineInterventionEmetteurDads']) {
            $object->setDomaineInterventionEmetteurDads(null);
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
        if ($object->isInitialized('identifiant') && null !== $object->getIdentifiant()) {
            $data['identifiant'] = $object->getIdentifiant();
        }
        if ($object->isInitialized('codeCollaborateur') && null !== $object->getCodeCollaborateur()) {
            $data['codeCollaborateur'] = $object->getCodeCollaborateur();
        }
        if ($object->isInitialized('accesDroitsFonctionnels') && null !== $object->getAccesDroitsFonctionnels()) {
            $data['accesDroitsFonctionnels'] = $object->getAccesDroitsFonctionnels();
        }
        if ($object->isInitialized('accesDroitsFonctionnelsMode') && null !== $object->getAccesDroitsFonctionnelsMode()) {
            $data['accesDroitsFonctionnelsMode'] = $object->getAccesDroitsFonctionnelsMode();
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
        if ($object->isInitialized('droitsLimitesEnPaie') && null !== $object->getDroitsLimitesEnPaie()) {
            $data['droitsLimitesEnPaie'] = $object->getDroitsLimitesEnPaie();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('telephonePortable') && null !== $object->getTelephonePortable()) {
            $data['telephonePortable'] = $object->getTelephonePortable();
        }
        if ($object->isInitialized('telephoneBureau') && null !== $object->getTelephoneBureau()) {
            $data['telephoneBureau'] = $object->getTelephoneBureau();
        }
        if ($object->isInitialized('telephoneDomicile') && null !== $object->getTelephoneDomicile()) {
            $data['telephoneDomicile'] = $object->getTelephoneDomicile();
        }
        if ($object->isInitialized('dateDebutValidite') && null !== $object->getDateDebutValidite()) {
            $data['dateDebutValidite'] = $object->getDateDebutValidite()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('dateFinValidite') && null !== $object->getDateFinValidite()) {
            $data['dateFinValidite'] = $object->getDateFinValidite()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('roles') && null !== $object->getRoles()) {
            $data['roles'] = $this->normalizer->normalize($object->getRoles(), 'json', $context);
        }
        if ($object->isInitialized('requeteAccesDossiers') && null !== $object->getRequeteAccesDossiers()) {
            $data['requeteAccesDossiers'] = $object->getRequeteAccesDossiers();
        }
        if ($object->isInitialized('niveauConfidentialite') && null !== $object->getNiveauConfidentialite()) {
            $data['niveauConfidentialite'] = $object->getNiveauConfidentialite();
        }
        if ($object->isInitialized('droits') && null !== $object->getDroits()) {
            $data['droits'] = $this->normalizer->normalize($object->getDroits(), 'json', $context);
        }
        if ($object->isInitialized('codeAgence') && null !== $object->getCodeAgence()) {
            $data['codeAgence'] = $object->getCodeAgence();
        }
        if ($object->isInitialized('horairesAcces') && null !== $object->getHorairesAcces()) {
            $data['horairesAcces'] = $this->normalizer->normalize($object->getHorairesAcces(), 'json', $context);
        }
        if ($object->isInitialized('affectations') && null !== $object->getAffectations()) {
            $values = [];
            foreach ($object->getAffectations() as $value) {
                $values[] = $value;
            }
            $data['affectations'] = $values;
        }
        if ($object->isInitialized('domaineInterventionEmetteurDads') && null !== $object->getDomaineInterventionEmetteurDads()) {
            $data['domaineInterventionEmetteurDads'] = $object->getDomaineInterventionEmetteurDads();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\CompteCollaborateur' => false];
    }
}
