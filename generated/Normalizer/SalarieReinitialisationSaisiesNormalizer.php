<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieReinitialisationSaisies;
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
    class SalarieReinitialisationSaisiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return SalarieReinitialisationSaisies::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof SalarieReinitialisationSaisies;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new SalarieReinitialisationSaisies();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('periodeReinitialisation', $data) && null !== $data['periodeReinitialisation']) {
                $object->setPeriodeReinitialisation(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeReinitialisation']));
            } elseif (\array_key_exists('periodeReinitialisation', $data) && null === $data['periodeReinitialisation']) {
                $object->setPeriodeReinitialisation(null);
            }

            if (\array_key_exists('reinitialiserHeures', $data) && null !== $data['reinitialiserHeures']) {
                $object->setReinitialiserHeures($data['reinitialiserHeures']);
            } elseif (\array_key_exists('reinitialiserHeures', $data) && null === $data['reinitialiserHeures']) {
                $object->setReinitialiserHeures(null);
            }

            if (\array_key_exists('reinitialiserPrimes', $data) && null !== $data['reinitialiserPrimes']) {
                $object->setReinitialiserPrimes($data['reinitialiserPrimes']);
            } elseif (\array_key_exists('reinitialiserPrimes', $data) && null === $data['reinitialiserPrimes']) {
                $object->setReinitialiserPrimes(null);
            }

            if (\array_key_exists('reinitialiserAbsences', $data) && null !== $data['reinitialiserAbsences']) {
                $object->setReinitialiserAbsences($data['reinitialiserAbsences']);
            } elseif (\array_key_exists('reinitialiserAbsences', $data) && null === $data['reinitialiserAbsences']) {
                $object->setReinitialiserAbsences(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('periodeReinitialisation') && null !== $object->getPeriodeReinitialisation()) {
                $data['periodeReinitialisation'] = $object->getPeriodeReinitialisation()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('reinitialiserHeures') && null !== $object->getReinitialiserHeures()) {
                $data['reinitialiserHeures'] = $object->getReinitialiserHeures();
            }

            if ($object->isInitialized('reinitialiserPrimes') && null !== $object->getReinitialiserPrimes()) {
                $data['reinitialiserPrimes'] = $object->getReinitialiserPrimes();
            }

            if ($object->isInitialized('reinitialiserAbsences') && null !== $object->getReinitialiserAbsences()) {
                $data['reinitialiserAbsences'] = $object->getReinitialiserAbsences();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieReinitialisationSaisies::class => false];
        }
    }
} else {
    class SalarieReinitialisationSaisiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return SalarieReinitialisationSaisies::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof SalarieReinitialisationSaisies;
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

            $object = new SalarieReinitialisationSaisies();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('periodeReinitialisation', $data) && null !== $data['periodeReinitialisation']) {
                $object->setPeriodeReinitialisation(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeReinitialisation']));
            } elseif (\array_key_exists('periodeReinitialisation', $data) && null === $data['periodeReinitialisation']) {
                $object->setPeriodeReinitialisation(null);
            }

            if (\array_key_exists('reinitialiserHeures', $data) && null !== $data['reinitialiserHeures']) {
                $object->setReinitialiserHeures($data['reinitialiserHeures']);
            } elseif (\array_key_exists('reinitialiserHeures', $data) && null === $data['reinitialiserHeures']) {
                $object->setReinitialiserHeures(null);
            }

            if (\array_key_exists('reinitialiserPrimes', $data) && null !== $data['reinitialiserPrimes']) {
                $object->setReinitialiserPrimes($data['reinitialiserPrimes']);
            } elseif (\array_key_exists('reinitialiserPrimes', $data) && null === $data['reinitialiserPrimes']) {
                $object->setReinitialiserPrimes(null);
            }

            if (\array_key_exists('reinitialiserAbsences', $data) && null !== $data['reinitialiserAbsences']) {
                $object->setReinitialiserAbsences($data['reinitialiserAbsences']);
            } elseif (\array_key_exists('reinitialiserAbsences', $data) && null === $data['reinitialiserAbsences']) {
                $object->setReinitialiserAbsences(null);
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
            if ($object->isInitialized('periodeReinitialisation') && null !== $object->getPeriodeReinitialisation()) {
                $data['periodeReinitialisation'] = $object->getPeriodeReinitialisation()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('reinitialiserHeures') && null !== $object->getReinitialiserHeures()) {
                $data['reinitialiserHeures'] = $object->getReinitialiserHeures();
            }

            if ($object->isInitialized('reinitialiserPrimes') && null !== $object->getReinitialiserPrimes()) {
                $data['reinitialiserPrimes'] = $object->getReinitialiserPrimes();
            }

            if ($object->isInitialized('reinitialiserAbsences') && null !== $object->getReinitialiserAbsences()) {
                $data['reinitialiserAbsences'] = $object->getReinitialiserAbsences();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieReinitialisationSaisies::class => false];
        }
    }
}
