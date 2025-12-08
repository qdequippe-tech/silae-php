<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CompteCollaborateur;
use QdequippeTech\Silae\Api\Model\CompteCollaborateurDroits;
use QdequippeTech\Silae\Api\Model\CompteCollaborateurHorairesAcces;
use QdequippeTech\Silae\Api\Model\CompteCollaborateurRoles;
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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return CompteCollaborateur::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && CompteCollaborateur::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new CompteCollaborateur();
        if (\array_key_exists('droitsLimitesEnPaie', $data) && \is_int($data['droitsLimitesEnPaie'])) {
            $data['droitsLimitesEnPaie'] = (bool) $data['droitsLimitesEnPaie'];
        }

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
            $object->setDateDebutValidite(\DateTime::createFromFormat('Y-m-d', $data['dateDebutValidite'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('dateDebutValidite', $data) && null === $data['dateDebutValidite']) {
            $object->setDateDebutValidite(null);
        }

        if (\array_key_exists('dateFinValidite', $data) && null !== $data['dateFinValidite']) {
            $object->setDateFinValidite(\DateTime::createFromFormat('Y-m-d', $data['dateFinValidite'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('dateFinValidite', $data) && null === $data['dateFinValidite']) {
            $object->setDateFinValidite(null);
        }

        if (\array_key_exists('roles', $data) && null !== $data['roles']) {
            $object->setRoles($this->denormalizer->denormalize($data['roles'], CompteCollaborateurRoles::class, 'json', $context));
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
            $object->setDroits($this->denormalizer->denormalize($data['droits'], CompteCollaborateurDroits::class, 'json', $context));
        } elseif (\array_key_exists('droits', $data) && null === $data['droits']) {
            $object->setDroits(null);
        }

        if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
            $object->setCodeAgence($data['codeAgence']);
        } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
            $object->setCodeAgence(null);
        }

        if (\array_key_exists('horairesAcces', $data) && null !== $data['horairesAcces']) {
            $object->setHorairesAcces($this->denormalizer->denormalize($data['horairesAcces'], CompteCollaborateurHorairesAcces::class, 'json', $context));
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('identifiant') && null !== $data->getIdentifiant()) {
            $dataArray['identifiant'] = $data->getIdentifiant();
        }

        if ($data->isInitialized('codeCollaborateur') && null !== $data->getCodeCollaborateur()) {
            $dataArray['codeCollaborateur'] = $data->getCodeCollaborateur();
        }

        if ($data->isInitialized('accesDroitsFonctionnels') && null !== $data->getAccesDroitsFonctionnels()) {
            $dataArray['accesDroitsFonctionnels'] = $data->getAccesDroitsFonctionnels();
        }

        if ($data->isInitialized('accesDroitsFonctionnelsMode') && null !== $data->getAccesDroitsFonctionnelsMode()) {
            $dataArray['accesDroitsFonctionnelsMode'] = $data->getAccesDroitsFonctionnelsMode();
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

        if ($data->isInitialized('droitsLimitesEnPaie') && null !== $data->getDroitsLimitesEnPaie()) {
            $dataArray['droitsLimitesEnPaie'] = $data->getDroitsLimitesEnPaie();
        }

        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $dataArray['email'] = $data->getEmail();
        }

        if ($data->isInitialized('telephonePortable') && null !== $data->getTelephonePortable()) {
            $dataArray['telephonePortable'] = $data->getTelephonePortable();
        }

        if ($data->isInitialized('telephoneBureau') && null !== $data->getTelephoneBureau()) {
            $dataArray['telephoneBureau'] = $data->getTelephoneBureau();
        }

        if ($data->isInitialized('telephoneDomicile') && null !== $data->getTelephoneDomicile()) {
            $dataArray['telephoneDomicile'] = $data->getTelephoneDomicile();
        }

        if ($data->isInitialized('dateDebutValidite') && null !== $data->getDateDebutValidite()) {
            $dataArray['dateDebutValidite'] = $data->getDateDebutValidite()->format('Y-m-d');
        }

        if ($data->isInitialized('dateFinValidite') && null !== $data->getDateFinValidite()) {
            $dataArray['dateFinValidite'] = $data->getDateFinValidite()->format('Y-m-d');
        }

        if ($data->isInitialized('roles') && null !== $data->getRoles()) {
            $dataArray['roles'] = $this->normalizer->normalize($data->getRoles(), 'json', $context);
        }

        if ($data->isInitialized('requeteAccesDossiers') && null !== $data->getRequeteAccesDossiers()) {
            $dataArray['requeteAccesDossiers'] = $data->getRequeteAccesDossiers();
        }

        if ($data->isInitialized('niveauConfidentialite') && null !== $data->getNiveauConfidentialite()) {
            $dataArray['niveauConfidentialite'] = $data->getNiveauConfidentialite();
        }

        if ($data->isInitialized('droits') && null !== $data->getDroits()) {
            $dataArray['droits'] = $this->normalizer->normalize($data->getDroits(), 'json', $context);
        }

        if ($data->isInitialized('codeAgence') && null !== $data->getCodeAgence()) {
            $dataArray['codeAgence'] = $data->getCodeAgence();
        }

        if ($data->isInitialized('horairesAcces') && null !== $data->getHorairesAcces()) {
            $dataArray['horairesAcces'] = $this->normalizer->normalize($data->getHorairesAcces(), 'json', $context);
        }

        if ($data->isInitialized('affectations') && null !== $data->getAffectations()) {
            $values = [];
            foreach ($data->getAffectations() as $value) {
                $values[] = $value;
            }

            $dataArray['affectations'] = $values;
        }

        if ($data->isInitialized('domaineInterventionEmetteurDads') && null !== $data->getDomaineInterventionEmetteurDads()) {
            $dataArray['domaineInterventionEmetteurDads'] = $data->getDomaineInterventionEmetteurDads();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CompteCollaborateur::class => false];
    }
}
