<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EcrituresComptablesLigne;
use QdequippeTech\Silae\Api\Model\EcrituresComptablesRupture;
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
    class EcrituresComptablesRuptureNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return EcrituresComptablesRupture::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EcrituresComptablesRupture::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new EcrituresComptablesRupture();
            if (\array_key_exists('totalDebit', $data) && \is_int($data['totalDebit'])) {
                $data['totalDebit'] = (float) $data['totalDebit'];
            }

            if (\array_key_exists('totalCredit', $data) && \is_int($data['totalCredit'])) {
                $data['totalCredit'] = (float) $data['totalCredit'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
                $object->setLibelle($data['libelle']);
            } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
                $object->setLibelle(null);
            }

            if (\array_key_exists('totalDebit', $data) && null !== $data['totalDebit']) {
                $object->setTotalDebit($data['totalDebit']);
            } elseif (\array_key_exists('totalDebit', $data) && null === $data['totalDebit']) {
                $object->setTotalDebit(null);
            }

            if (\array_key_exists('totalCredit', $data) && null !== $data['totalCredit']) {
                $object->setTotalCredit($data['totalCredit']);
            } elseif (\array_key_exists('totalCredit', $data) && null === $data['totalCredit']) {
                $object->setTotalCredit(null);
            }

            if (\array_key_exists('ecritures', $data) && null !== $data['ecritures']) {
                $values = [];
                foreach ($data['ecritures'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, EcrituresComptablesLigne::class, 'json', $context);
                }

                $object->setEcritures($values);
            } elseif (\array_key_exists('ecritures', $data) && null === $data['ecritures']) {
                $object->setEcritures(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('libelle') && null !== $object->getLibelle()) {
                $data['libelle'] = $object->getLibelle();
            }

            if ($object->isInitialized('totalDebit') && null !== $object->getTotalDebit()) {
                $data['totalDebit'] = $object->getTotalDebit();
            }

            if ($object->isInitialized('totalCredit') && null !== $object->getTotalCredit()) {
                $data['totalCredit'] = $object->getTotalCredit();
            }

            if ($object->isInitialized('ecritures') && null !== $object->getEcritures()) {
                $values = [];
                foreach ($object->getEcritures() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['ecritures'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EcrituresComptablesRupture::class => false];
        }
    }
} else {
    class EcrituresComptablesRuptureNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EcrituresComptablesRupture::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EcrituresComptablesRupture::class === $data::class;
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

            $object = new EcrituresComptablesRupture();
            if (\array_key_exists('totalDebit', $data) && \is_int($data['totalDebit'])) {
                $data['totalDebit'] = (float) $data['totalDebit'];
            }

            if (\array_key_exists('totalCredit', $data) && \is_int($data['totalCredit'])) {
                $data['totalCredit'] = (float) $data['totalCredit'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
                $object->setLibelle($data['libelle']);
            } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
                $object->setLibelle(null);
            }

            if (\array_key_exists('totalDebit', $data) && null !== $data['totalDebit']) {
                $object->setTotalDebit($data['totalDebit']);
            } elseif (\array_key_exists('totalDebit', $data) && null === $data['totalDebit']) {
                $object->setTotalDebit(null);
            }

            if (\array_key_exists('totalCredit', $data) && null !== $data['totalCredit']) {
                $object->setTotalCredit($data['totalCredit']);
            } elseif (\array_key_exists('totalCredit', $data) && null === $data['totalCredit']) {
                $object->setTotalCredit(null);
            }

            if (\array_key_exists('ecritures', $data) && null !== $data['ecritures']) {
                $values = [];
                foreach ($data['ecritures'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, EcrituresComptablesLigne::class, 'json', $context);
                }

                $object->setEcritures($values);
            } elseif (\array_key_exists('ecritures', $data) && null === $data['ecritures']) {
                $object->setEcritures(null);
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

            if ($object->isInitialized('totalDebit') && null !== $object->getTotalDebit()) {
                $data['totalDebit'] = $object->getTotalDebit();
            }

            if ($object->isInitialized('totalCredit') && null !== $object->getTotalCredit()) {
                $data['totalCredit'] = $object->getTotalCredit();
            }

            if ($object->isInitialized('ecritures') && null !== $object->getEcritures()) {
                $values = [];
                foreach ($object->getEcritures() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['ecritures'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EcrituresComptablesRupture::class => false];
        }
    }
}
