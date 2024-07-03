<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\UtilisateurClient;
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
    class UtilisateurClientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return UtilisateurClient::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UtilisateurClient;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new UtilisateurClient();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nom', $data) && null !== $data['nom']) {
                $object->setNom($data['nom']);
            } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
                $object->setNom(null);
            }

            if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
                $object->setPrenom($data['prenom']);
            } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
                $object->setPrenom(null);
            }

            if (\array_key_exists('mail', $data) && null !== $data['mail']) {
                $object->setMail($data['mail']);
            } elseif (\array_key_exists('mail', $data) && null === $data['mail']) {
                $object->setMail(null);
            }

            if (\array_key_exists('identifiant', $data) && null !== $data['identifiant']) {
                $object->setIdentifiant($data['identifiant']);
            } elseif (\array_key_exists('identifiant', $data) && null === $data['identifiant']) {
                $object->setIdentifiant(null);
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

            if (\array_key_exists('accesComplet', $data) && null !== $data['accesComplet']) {
                $object->setAccesComplet($data['accesComplet']);
            } elseif (\array_key_exists('accesComplet', $data) && null === $data['accesComplet']) {
                $object->setAccesComplet(null);
            }

            if (\array_key_exists('accesComplet_AvecParametrageSimplifie', $data) && null !== $data['accesComplet_AvecParametrageSimplifie']) {
                $object->setAccesCompletAvecParametrageSimplifie($data['accesComplet_AvecParametrageSimplifie']);
            } elseif (\array_key_exists('accesComplet_AvecParametrageSimplifie', $data) && null === $data['accesComplet_AvecParametrageSimplifie']) {
                $object->setAccesCompletAvecParametrageSimplifie(null);
            }

            if (\array_key_exists('accesComplet_AvecParametrageComplet', $data) && null !== $data['accesComplet_AvecParametrageComplet']) {
                $object->setAccesCompletAvecParametrageComplet($data['accesComplet_AvecParametrageComplet']);
            } elseif (\array_key_exists('accesComplet_AvecParametrageComplet', $data) && null === $data['accesComplet_AvecParametrageComplet']) {
                $object->setAccesCompletAvecParametrageComplet(null);
            }

            if (\array_key_exists('accesComplet_AccesBureautique', $data) && null !== $data['accesComplet_AccesBureautique']) {
                $object->setAccesCompletAccesBureautique($data['accesComplet_AccesBureautique']);
            } elseif (\array_key_exists('accesComplet_AccesBureautique', $data) && null === $data['accesComplet_AccesBureautique']) {
                $object->setAccesCompletAccesBureautique(null);
            }

            if (\array_key_exists('accesComplet_AccesRelationClient', $data) && null !== $data['accesComplet_AccesRelationClient']) {
                $object->setAccesCompletAccesRelationClient($data['accesComplet_AccesRelationClient']);
            } elseif (\array_key_exists('accesComplet_AccesRelationClient', $data) && null === $data['accesComplet_AccesRelationClient']) {
                $object->setAccesCompletAccesRelationClient(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nom') && null !== $object->getNom()) {
                $data['nom'] = $object->getNom();
            }

            if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
                $data['prenom'] = $object->getPrenom();
            }

            if ($object->isInitialized('mail') && null !== $object->getMail()) {
                $data['mail'] = $object->getMail();
            }

            if ($object->isInitialized('identifiant') && null !== $object->getIdentifiant()) {
                $data['identifiant'] = $object->getIdentifiant();
            }

            if ($object->isInitialized('debutValidite') && null !== $object->getDebutValidite()) {
                $data['debutValidite'] = $object->getDebutValidite()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('finValidite') && null !== $object->getFinValidite()) {
                $data['finValidite'] = $object->getFinValidite()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('accesComplet') && null !== $object->getAccesComplet()) {
                $data['accesComplet'] = $object->getAccesComplet();
            }

            if ($object->isInitialized('accesCompletAvecParametrageSimplifie') && null !== $object->getAccesCompletAvecParametrageSimplifie()) {
                $data['accesComplet_AvecParametrageSimplifie'] = $object->getAccesCompletAvecParametrageSimplifie();
            }

            if ($object->isInitialized('accesCompletAvecParametrageComplet') && null !== $object->getAccesCompletAvecParametrageComplet()) {
                $data['accesComplet_AvecParametrageComplet'] = $object->getAccesCompletAvecParametrageComplet();
            }

            if ($object->isInitialized('accesCompletAccesBureautique') && null !== $object->getAccesCompletAccesBureautique()) {
                $data['accesComplet_AccesBureautique'] = $object->getAccesCompletAccesBureautique();
            }

            if ($object->isInitialized('accesCompletAccesRelationClient') && null !== $object->getAccesCompletAccesRelationClient()) {
                $data['accesComplet_AccesRelationClient'] = $object->getAccesCompletAccesRelationClient();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [UtilisateurClient::class => false];
        }
    }
} else {
    class UtilisateurClientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return UtilisateurClient::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UtilisateurClient;
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

            $object = new UtilisateurClient();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nom', $data) && null !== $data['nom']) {
                $object->setNom($data['nom']);
            } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
                $object->setNom(null);
            }

            if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
                $object->setPrenom($data['prenom']);
            } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
                $object->setPrenom(null);
            }

            if (\array_key_exists('mail', $data) && null !== $data['mail']) {
                $object->setMail($data['mail']);
            } elseif (\array_key_exists('mail', $data) && null === $data['mail']) {
                $object->setMail(null);
            }

            if (\array_key_exists('identifiant', $data) && null !== $data['identifiant']) {
                $object->setIdentifiant($data['identifiant']);
            } elseif (\array_key_exists('identifiant', $data) && null === $data['identifiant']) {
                $object->setIdentifiant(null);
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

            if (\array_key_exists('accesComplet', $data) && null !== $data['accesComplet']) {
                $object->setAccesComplet($data['accesComplet']);
            } elseif (\array_key_exists('accesComplet', $data) && null === $data['accesComplet']) {
                $object->setAccesComplet(null);
            }

            if (\array_key_exists('accesComplet_AvecParametrageSimplifie', $data) && null !== $data['accesComplet_AvecParametrageSimplifie']) {
                $object->setAccesCompletAvecParametrageSimplifie($data['accesComplet_AvecParametrageSimplifie']);
            } elseif (\array_key_exists('accesComplet_AvecParametrageSimplifie', $data) && null === $data['accesComplet_AvecParametrageSimplifie']) {
                $object->setAccesCompletAvecParametrageSimplifie(null);
            }

            if (\array_key_exists('accesComplet_AvecParametrageComplet', $data) && null !== $data['accesComplet_AvecParametrageComplet']) {
                $object->setAccesCompletAvecParametrageComplet($data['accesComplet_AvecParametrageComplet']);
            } elseif (\array_key_exists('accesComplet_AvecParametrageComplet', $data) && null === $data['accesComplet_AvecParametrageComplet']) {
                $object->setAccesCompletAvecParametrageComplet(null);
            }

            if (\array_key_exists('accesComplet_AccesBureautique', $data) && null !== $data['accesComplet_AccesBureautique']) {
                $object->setAccesCompletAccesBureautique($data['accesComplet_AccesBureautique']);
            } elseif (\array_key_exists('accesComplet_AccesBureautique', $data) && null === $data['accesComplet_AccesBureautique']) {
                $object->setAccesCompletAccesBureautique(null);
            }

            if (\array_key_exists('accesComplet_AccesRelationClient', $data) && null !== $data['accesComplet_AccesRelationClient']) {
                $object->setAccesCompletAccesRelationClient($data['accesComplet_AccesRelationClient']);
            } elseif (\array_key_exists('accesComplet_AccesRelationClient', $data) && null === $data['accesComplet_AccesRelationClient']) {
                $object->setAccesCompletAccesRelationClient(null);
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
            if ($object->isInitialized('nom') && null !== $object->getNom()) {
                $data['nom'] = $object->getNom();
            }

            if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
                $data['prenom'] = $object->getPrenom();
            }

            if ($object->isInitialized('mail') && null !== $object->getMail()) {
                $data['mail'] = $object->getMail();
            }

            if ($object->isInitialized('identifiant') && null !== $object->getIdentifiant()) {
                $data['identifiant'] = $object->getIdentifiant();
            }

            if ($object->isInitialized('debutValidite') && null !== $object->getDebutValidite()) {
                $data['debutValidite'] = $object->getDebutValidite()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('finValidite') && null !== $object->getFinValidite()) {
                $data['finValidite'] = $object->getFinValidite()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('accesComplet') && null !== $object->getAccesComplet()) {
                $data['accesComplet'] = $object->getAccesComplet();
            }

            if ($object->isInitialized('accesCompletAvecParametrageSimplifie') && null !== $object->getAccesCompletAvecParametrageSimplifie()) {
                $data['accesComplet_AvecParametrageSimplifie'] = $object->getAccesCompletAvecParametrageSimplifie();
            }

            if ($object->isInitialized('accesCompletAvecParametrageComplet') && null !== $object->getAccesCompletAvecParametrageComplet()) {
                $data['accesComplet_AvecParametrageComplet'] = $object->getAccesCompletAvecParametrageComplet();
            }

            if ($object->isInitialized('accesCompletAccesBureautique') && null !== $object->getAccesCompletAccesBureautique()) {
                $data['accesComplet_AccesBureautique'] = $object->getAccesCompletAccesBureautique();
            }

            if ($object->isInitialized('accesCompletAccesRelationClient') && null !== $object->getAccesCompletAccesRelationClient()) {
                $data['accesComplet_AccesRelationClient'] = $object->getAccesCompletAccesRelationClient();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [UtilisateurClient::class => false];
        }
    }
}
