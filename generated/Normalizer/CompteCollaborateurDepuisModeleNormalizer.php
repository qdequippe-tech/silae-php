<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CompteCollaborateurDepuisModele;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompteCollaborateurDepuisModeleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return CompteCollaborateurDepuisModele::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && CompteCollaborateurDepuisModele::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new CompteCollaborateurDepuisModele();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nomModele', $data) && null !== $data['nomModele']) {
            $object->setNomModele($data['nomModele']);
        } elseif (\array_key_exists('nomModele', $data) && null === $data['nomModele']) {
            $object->setNomModele(null);
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

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nomModele') && null !== $data->getNomModele()) {
            $dataArray['nomModele'] = $data->getNomModele();
        }

        if ($data->isInitialized('identifiant') && null !== $data->getIdentifiant()) {
            $dataArray['identifiant'] = $data->getIdentifiant();
        }

        if ($data->isInitialized('codeCollaborateur') && null !== $data->getCodeCollaborateur()) {
            $dataArray['codeCollaborateur'] = $data->getCodeCollaborateur();
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

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CompteCollaborateurDepuisModele::class => false];
    }
}
