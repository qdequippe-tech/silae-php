<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ModificationDroitsFonctionnelsProductionPaieRequest;
use QdequippeTech\Silae\Api\Model\OngletProduction;
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
    class ModificationDroitsFonctionnelsProductionPaieRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return ModificationDroitsFonctionnelsProductionPaieRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && ModificationDroitsFonctionnelsProductionPaieRequest::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new ModificationDroitsFonctionnelsProductionPaieRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('loginUtilisateur', $data) && null !== $data['loginUtilisateur']) {
                $object->setLoginUtilisateur($data['loginUtilisateur']);
            } elseif (\array_key_exists('loginUtilisateur', $data) && null === $data['loginUtilisateur']) {
                $object->setLoginUtilisateur(null);
            }

            if (\array_key_exists('ongletProductionPaie', $data) && null !== $data['ongletProductionPaie']) {
                $object->setOngletProductionPaie($this->denormalizer->denormalize($data['ongletProductionPaie'], OngletProduction::class, 'json', $context));
            } elseif (\array_key_exists('ongletProductionPaie', $data) && null === $data['ongletProductionPaie']) {
                $object->setOngletProductionPaie(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('loginUtilisateur') && null !== $object->getLoginUtilisateur()) {
                $data['loginUtilisateur'] = $object->getLoginUtilisateur();
            }

            if ($object->isInitialized('ongletProductionPaie') && null !== $object->getOngletProductionPaie()) {
                $data['ongletProductionPaie'] = $this->normalizer->normalize($object->getOngletProductionPaie(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ModificationDroitsFonctionnelsProductionPaieRequest::class => false];
        }
    }
} else {
    class ModificationDroitsFonctionnelsProductionPaieRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return ModificationDroitsFonctionnelsProductionPaieRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && ModificationDroitsFonctionnelsProductionPaieRequest::class === $data::class;
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

            $object = new ModificationDroitsFonctionnelsProductionPaieRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('loginUtilisateur', $data) && null !== $data['loginUtilisateur']) {
                $object->setLoginUtilisateur($data['loginUtilisateur']);
            } elseif (\array_key_exists('loginUtilisateur', $data) && null === $data['loginUtilisateur']) {
                $object->setLoginUtilisateur(null);
            }

            if (\array_key_exists('ongletProductionPaie', $data) && null !== $data['ongletProductionPaie']) {
                $object->setOngletProductionPaie($this->denormalizer->denormalize($data['ongletProductionPaie'], OngletProduction::class, 'json', $context));
            } elseif (\array_key_exists('ongletProductionPaie', $data) && null === $data['ongletProductionPaie']) {
                $object->setOngletProductionPaie(null);
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
            if ($object->isInitialized('loginUtilisateur') && null !== $object->getLoginUtilisateur()) {
                $data['loginUtilisateur'] = $object->getLoginUtilisateur();
            }

            if ($object->isInitialized('ongletProductionPaie') && null !== $object->getOngletProductionPaie()) {
                $data['ongletProductionPaie'] = $this->normalizer->normalize($object->getOngletProductionPaie(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ModificationDroitsFonctionnelsProductionPaieRequest::class => false];
        }
    }
}
