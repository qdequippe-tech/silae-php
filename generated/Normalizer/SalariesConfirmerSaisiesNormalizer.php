<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalariesConfirmerSaisies;
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
    class SalariesConfirmerSaisiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return SalariesConfirmerSaisies::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && SalariesConfirmerSaisies::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new SalariesConfirmerSaisies();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('periodeConfirmation', $data) && null !== $data['periodeConfirmation']) {
                $object->setPeriodeConfirmation(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeConfirmation']));
            } elseif (\array_key_exists('periodeConfirmation', $data) && null === $data['periodeConfirmation']) {
                $object->setPeriodeConfirmation(null);
            }

            if (\array_key_exists('confirmerHeures', $data) && null !== $data['confirmerHeures']) {
                $object->setConfirmerHeures($data['confirmerHeures']);
            } elseif (\array_key_exists('confirmerHeures', $data) && null === $data['confirmerHeures']) {
                $object->setConfirmerHeures(null);
            }

            if (\array_key_exists('confirmerPrimes', $data) && null !== $data['confirmerPrimes']) {
                $object->setConfirmerPrimes($data['confirmerPrimes']);
            } elseif (\array_key_exists('confirmerPrimes', $data) && null === $data['confirmerPrimes']) {
                $object->setConfirmerPrimes(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('periodeConfirmation') && null !== $object->getPeriodeConfirmation()) {
                $data['periodeConfirmation'] = $object->getPeriodeConfirmation()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('confirmerHeures') && null !== $object->getConfirmerHeures()) {
                $data['confirmerHeures'] = $object->getConfirmerHeures();
            }

            if ($object->isInitialized('confirmerPrimes') && null !== $object->getConfirmerPrimes()) {
                $data['confirmerPrimes'] = $object->getConfirmerPrimes();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalariesConfirmerSaisies::class => false];
        }
    }
} else {
    class SalariesConfirmerSaisiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return SalariesConfirmerSaisies::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && SalariesConfirmerSaisies::class === $data::class;
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

            $object = new SalariesConfirmerSaisies();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('periodeConfirmation', $data) && null !== $data['periodeConfirmation']) {
                $object->setPeriodeConfirmation(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeConfirmation']));
            } elseif (\array_key_exists('periodeConfirmation', $data) && null === $data['periodeConfirmation']) {
                $object->setPeriodeConfirmation(null);
            }

            if (\array_key_exists('confirmerHeures', $data) && null !== $data['confirmerHeures']) {
                $object->setConfirmerHeures($data['confirmerHeures']);
            } elseif (\array_key_exists('confirmerHeures', $data) && null === $data['confirmerHeures']) {
                $object->setConfirmerHeures(null);
            }

            if (\array_key_exists('confirmerPrimes', $data) && null !== $data['confirmerPrimes']) {
                $object->setConfirmerPrimes($data['confirmerPrimes']);
            } elseif (\array_key_exists('confirmerPrimes', $data) && null === $data['confirmerPrimes']) {
                $object->setConfirmerPrimes(null);
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
            if ($object->isInitialized('periodeConfirmation') && null !== $object->getPeriodeConfirmation()) {
                $data['periodeConfirmation'] = $object->getPeriodeConfirmation()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('confirmerHeures') && null !== $object->getConfirmerHeures()) {
                $data['confirmerHeures'] = $object->getConfirmerHeures();
            }

            if ($object->isInitialized('confirmerPrimes') && null !== $object->getConfirmerPrimes()) {
                $data['confirmerPrimes'] = $object->getConfirmerPrimes();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalariesConfirmerSaisies::class => false];
        }
    }
}
