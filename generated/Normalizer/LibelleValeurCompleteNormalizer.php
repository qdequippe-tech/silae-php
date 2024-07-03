<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LibelleValeurComplete;
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
    class LibelleValeurCompleteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return LibelleValeurComplete::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof LibelleValeurComplete;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new LibelleValeurComplete();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
                $object->setLibelle($data['libelle']);
            } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
                $object->setLibelle(null);
            }

            if (\array_key_exists('valeur', $data) && null !== $data['valeur']) {
                $object->setValeur($data['valeur']);
            } elseif (\array_key_exists('valeur', $data) && null === $data['valeur']) {
                $object->setValeur(null);
            }

            if (\array_key_exists('reference', $data) && null !== $data['reference']) {
                $object->setReference($data['reference']);
            } elseif (\array_key_exists('reference', $data) && null === $data['reference']) {
                $object->setReference(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('libelle') && null !== $object->getLibelle()) {
                $data['libelle'] = $object->getLibelle();
            }

            if ($object->isInitialized('valeur') && null !== $object->getValeur()) {
                $data['valeur'] = $object->getValeur();
            }

            if ($object->isInitialized('reference') && null !== $object->getReference()) {
                $data['reference'] = $object->getReference();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [LibelleValeurComplete::class => false];
        }
    }
} else {
    class LibelleValeurCompleteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return LibelleValeurComplete::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof LibelleValeurComplete;
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

            $object = new LibelleValeurComplete();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
                $object->setLibelle($data['libelle']);
            } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
                $object->setLibelle(null);
            }

            if (\array_key_exists('valeur', $data) && null !== $data['valeur']) {
                $object->setValeur($data['valeur']);
            } elseif (\array_key_exists('valeur', $data) && null === $data['valeur']) {
                $object->setValeur(null);
            }

            if (\array_key_exists('reference', $data) && null !== $data['reference']) {
                $object->setReference($data['reference']);
            } elseif (\array_key_exists('reference', $data) && null === $data['reference']) {
                $object->setReference(null);
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
            if ($object->isInitialized('libelle') && null !== $object->getLibelle()) {
                $data['libelle'] = $object->getLibelle();
            }

            if ($object->isInitialized('valeur') && null !== $object->getValeur()) {
                $data['valeur'] = $object->getValeur();
            }

            if ($object->isInitialized('reference') && null !== $object->getReference()) {
                $data['reference'] = $object->getReference();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [LibelleValeurComplete::class => false];
        }
    }
}
