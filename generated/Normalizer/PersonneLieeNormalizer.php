<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\PersonneLiee;
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
    class PersonneLieeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return PersonneLiee::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && PersonneLiee::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new PersonneLiee();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
                $object->setPrenom($data['prenom']);
            } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
                $object->setPrenom(null);
            }

            if (\array_key_exists('nomUsuel', $data) && null !== $data['nomUsuel']) {
                $object->setNomUsuel($data['nomUsuel']);
            } elseif (\array_key_exists('nomUsuel', $data) && null === $data['nomUsuel']) {
                $object->setNomUsuel(null);
            }

            if (\array_key_exists('typeLien', $data) && null !== $data['typeLien']) {
                $object->setTypeLien($data['typeLien']);
            } elseif (\array_key_exists('typeLien', $data) && null === $data['typeLien']) {
                $object->setTypeLien(null);
            }

            if (\array_key_exists('dateNaissance', $data) && null !== $data['dateNaissance']) {
                $object->setDateNaissance(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateNaissance']));
            } elseif (\array_key_exists('dateNaissance', $data) && null === $data['dateNaissance']) {
                $object->setDateNaissance(null);
            }

            if (\array_key_exists('numeroSS', $data) && null !== $data['numeroSS']) {
                $object->setNumeroSS($data['numeroSS']);
            } elseif (\array_key_exists('numeroSS', $data) && null === $data['numeroSS']) {
                $object->setNumeroSS(null);
            }

            if (\array_key_exists('sexe', $data) && null !== $data['sexe']) {
                $object->setSexe($data['sexe']);
            } elseif (\array_key_exists('sexe', $data) && null === $data['sexe']) {
                $object->setSexe(null);
            }

            if (\array_key_exists('aCharge', $data) && null !== $data['aCharge']) {
                $object->setACharge($data['aCharge']);
            } elseif (\array_key_exists('aCharge', $data) && null === $data['aCharge']) {
                $object->setACharge(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
                $data['prenom'] = $object->getPrenom();
            }

            if ($object->isInitialized('nomUsuel') && null !== $object->getNomUsuel()) {
                $data['nomUsuel'] = $object->getNomUsuel();
            }

            if ($object->isInitialized('typeLien') && null !== $object->getTypeLien()) {
                $data['typeLien'] = $object->getTypeLien();
            }

            if ($object->isInitialized('dateNaissance') && null !== $object->getDateNaissance()) {
                $data['dateNaissance'] = $object->getDateNaissance()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('numeroSS') && null !== $object->getNumeroSS()) {
                $data['numeroSS'] = $object->getNumeroSS();
            }

            if ($object->isInitialized('sexe') && null !== $object->getSexe()) {
                $data['sexe'] = $object->getSexe();
            }

            if ($object->isInitialized('aCharge') && null !== $object->getACharge()) {
                $data['aCharge'] = $object->getACharge();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [PersonneLiee::class => false];
        }
    }
} else {
    class PersonneLieeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return PersonneLiee::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && PersonneLiee::class === $data::class;
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

            $object = new PersonneLiee();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
                $object->setPrenom($data['prenom']);
            } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
                $object->setPrenom(null);
            }

            if (\array_key_exists('nomUsuel', $data) && null !== $data['nomUsuel']) {
                $object->setNomUsuel($data['nomUsuel']);
            } elseif (\array_key_exists('nomUsuel', $data) && null === $data['nomUsuel']) {
                $object->setNomUsuel(null);
            }

            if (\array_key_exists('typeLien', $data) && null !== $data['typeLien']) {
                $object->setTypeLien($data['typeLien']);
            } elseif (\array_key_exists('typeLien', $data) && null === $data['typeLien']) {
                $object->setTypeLien(null);
            }

            if (\array_key_exists('dateNaissance', $data) && null !== $data['dateNaissance']) {
                $object->setDateNaissance(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateNaissance']));
            } elseif (\array_key_exists('dateNaissance', $data) && null === $data['dateNaissance']) {
                $object->setDateNaissance(null);
            }

            if (\array_key_exists('numeroSS', $data) && null !== $data['numeroSS']) {
                $object->setNumeroSS($data['numeroSS']);
            } elseif (\array_key_exists('numeroSS', $data) && null === $data['numeroSS']) {
                $object->setNumeroSS(null);
            }

            if (\array_key_exists('sexe', $data) && null !== $data['sexe']) {
                $object->setSexe($data['sexe']);
            } elseif (\array_key_exists('sexe', $data) && null === $data['sexe']) {
                $object->setSexe(null);
            }

            if (\array_key_exists('aCharge', $data) && null !== $data['aCharge']) {
                $object->setACharge($data['aCharge']);
            } elseif (\array_key_exists('aCharge', $data) && null === $data['aCharge']) {
                $object->setACharge(null);
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
            if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
                $data['prenom'] = $object->getPrenom();
            }

            if ($object->isInitialized('nomUsuel') && null !== $object->getNomUsuel()) {
                $data['nomUsuel'] = $object->getNomUsuel();
            }

            if ($object->isInitialized('typeLien') && null !== $object->getTypeLien()) {
                $data['typeLien'] = $object->getTypeLien();
            }

            if ($object->isInitialized('dateNaissance') && null !== $object->getDateNaissance()) {
                $data['dateNaissance'] = $object->getDateNaissance()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('numeroSS') && null !== $object->getNumeroSS()) {
                $data['numeroSS'] = $object->getNumeroSS();
            }

            if ($object->isInitialized('sexe') && null !== $object->getSexe()) {
                $data['sexe'] = $object->getSexe();
            }

            if ($object->isInitialized('aCharge') && null !== $object->getACharge()) {
                $data['aCharge'] = $object->getACharge();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [PersonneLiee::class => false];
        }
    }
}
