<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieEmploiInformations;
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
    class SalarieEmploiInformationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return SalarieEmploiInformations::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && SalarieEmploiInformations::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new SalarieEmploiInformations();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('identifiantEmploi', $data) && null !== $data['identifiantEmploi']) {
                $object->setIdentifiantEmploi($data['identifiantEmploi']);
            } elseif (\array_key_exists('identifiantEmploi', $data) && null === $data['identifiantEmploi']) {
                $object->setIdentifiantEmploi(null);
            }

            if (\array_key_exists('dateDebut', $data) && null !== $data['dateDebut']) {
                $object->setDateDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDebut']));
            } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
                $object->setDateDebut(null);
            }

            if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
                $object->setDateFin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateFin']));
            } elseif (\array_key_exists('dateFin', $data) && null === $data['dateFin']) {
                $object->setDateFin(null);
            }

            if (\array_key_exists('intituleEmploi', $data) && null !== $data['intituleEmploi']) {
                $object->setIntituleEmploi($data['intituleEmploi']);
            } elseif (\array_key_exists('intituleEmploi', $data) && null === $data['intituleEmploi']) {
                $object->setIntituleEmploi(null);
            }

            if (\array_key_exists('emploiArchive', $data) && null !== $data['emploiArchive']) {
                $object->setEmploiArchive($data['emploiArchive']);
            } elseif (\array_key_exists('emploiArchive', $data) && null === $data['emploiArchive']) {
                $object->setEmploiArchive(null);
            }

            if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
            } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('identifiantEmploi') && null !== $object->getIdentifiantEmploi()) {
                $data['identifiantEmploi'] = $object->getIdentifiantEmploi();
            }

            if ($object->isInitialized('dateDebut') && null !== $object->getDateDebut()) {
                $data['dateDebut'] = $object->getDateDebut()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('dateFin') && null !== $object->getDateFin()) {
                $data['dateFin'] = $object->getDateFin()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('intituleEmploi') && null !== $object->getIntituleEmploi()) {
                $data['intituleEmploi'] = $object->getIntituleEmploi();
            }

            if ($object->isInitialized('emploiArchive') && null !== $object->getEmploiArchive()) {
                $data['emploiArchive'] = $object->getEmploiArchive();
            }

            if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
                $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieEmploiInformations::class => false];
        }
    }
} else {
    class SalarieEmploiInformationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return SalarieEmploiInformations::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && SalarieEmploiInformations::class === $data::class;
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

            $object = new SalarieEmploiInformations();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('identifiantEmploi', $data) && null !== $data['identifiantEmploi']) {
                $object->setIdentifiantEmploi($data['identifiantEmploi']);
            } elseif (\array_key_exists('identifiantEmploi', $data) && null === $data['identifiantEmploi']) {
                $object->setIdentifiantEmploi(null);
            }

            if (\array_key_exists('dateDebut', $data) && null !== $data['dateDebut']) {
                $object->setDateDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDebut']));
            } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
                $object->setDateDebut(null);
            }

            if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
                $object->setDateFin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateFin']));
            } elseif (\array_key_exists('dateFin', $data) && null === $data['dateFin']) {
                $object->setDateFin(null);
            }

            if (\array_key_exists('intituleEmploi', $data) && null !== $data['intituleEmploi']) {
                $object->setIntituleEmploi($data['intituleEmploi']);
            } elseif (\array_key_exists('intituleEmploi', $data) && null === $data['intituleEmploi']) {
                $object->setIntituleEmploi(null);
            }

            if (\array_key_exists('emploiArchive', $data) && null !== $data['emploiArchive']) {
                $object->setEmploiArchive($data['emploiArchive']);
            } elseif (\array_key_exists('emploiArchive', $data) && null === $data['emploiArchive']) {
                $object->setEmploiArchive(null);
            }

            if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
            } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement(null);
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
            if ($object->isInitialized('identifiantEmploi') && null !== $object->getIdentifiantEmploi()) {
                $data['identifiantEmploi'] = $object->getIdentifiantEmploi();
            }

            if ($object->isInitialized('dateDebut') && null !== $object->getDateDebut()) {
                $data['dateDebut'] = $object->getDateDebut()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('dateFin') && null !== $object->getDateFin()) {
                $data['dateFin'] = $object->getDateFin()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('intituleEmploi') && null !== $object->getIntituleEmploi()) {
                $data['intituleEmploi'] = $object->getIntituleEmploi();
            }

            if ($object->isInitialized('emploiArchive') && null !== $object->getEmploiArchive()) {
                $data['emploiArchive'] = $object->getEmploiArchive();
            }

            if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
                $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieEmploiInformations::class => false];
        }
    }
}
