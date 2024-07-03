<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieAcompte;
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
    class SalarieAcompteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return SalarieAcompte::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof SalarieAcompte;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new SalarieAcompte();
            if (\array_key_exists('montantAcompte', $data) && \is_int($data['montantAcompte'])) {
                $data['montantAcompte'] = (float) $data['montantAcompte'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('dateAcompte', $data) && null !== $data['dateAcompte']) {
                $object->setDateAcompte(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateAcompte']));
            } elseif (\array_key_exists('dateAcompte', $data) && null === $data['dateAcompte']) {
                $object->setDateAcompte(null);
            }

            if (\array_key_exists('jourNonSignificatif', $data) && null !== $data['jourNonSignificatif']) {
                $object->setJourNonSignificatif($data['jourNonSignificatif']);
            } elseif (\array_key_exists('jourNonSignificatif', $data) && null === $data['jourNonSignificatif']) {
                $object->setJourNonSignificatif(null);
            }

            if (\array_key_exists('montantAcompte', $data) && null !== $data['montantAcompte']) {
                $object->setMontantAcompte($data['montantAcompte']);
            } elseif (\array_key_exists('montantAcompte', $data) && null === $data['montantAcompte']) {
                $object->setMontantAcompte(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('dateAcompte') && null !== $object->getDateAcompte()) {
                $data['dateAcompte'] = $object->getDateAcompte()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('jourNonSignificatif') && null !== $object->getJourNonSignificatif()) {
                $data['jourNonSignificatif'] = $object->getJourNonSignificatif();
            }

            if ($object->isInitialized('montantAcompte') && null !== $object->getMontantAcompte()) {
                $data['montantAcompte'] = $object->getMontantAcompte();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieAcompte::class => false];
        }
    }
} else {
    class SalarieAcompteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return SalarieAcompte::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof SalarieAcompte;
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

            $object = new SalarieAcompte();
            if (\array_key_exists('montantAcompte', $data) && \is_int($data['montantAcompte'])) {
                $data['montantAcompte'] = (float) $data['montantAcompte'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('dateAcompte', $data) && null !== $data['dateAcompte']) {
                $object->setDateAcompte(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateAcompte']));
            } elseif (\array_key_exists('dateAcompte', $data) && null === $data['dateAcompte']) {
                $object->setDateAcompte(null);
            }

            if (\array_key_exists('jourNonSignificatif', $data) && null !== $data['jourNonSignificatif']) {
                $object->setJourNonSignificatif($data['jourNonSignificatif']);
            } elseif (\array_key_exists('jourNonSignificatif', $data) && null === $data['jourNonSignificatif']) {
                $object->setJourNonSignificatif(null);
            }

            if (\array_key_exists('montantAcompte', $data) && null !== $data['montantAcompte']) {
                $object->setMontantAcompte($data['montantAcompte']);
            } elseif (\array_key_exists('montantAcompte', $data) && null === $data['montantAcompte']) {
                $object->setMontantAcompte(null);
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
            if ($object->isInitialized('dateAcompte') && null !== $object->getDateAcompte()) {
                $data['dateAcompte'] = $object->getDateAcompte()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('jourNonSignificatif') && null !== $object->getJourNonSignificatif()) {
                $data['jourNonSignificatif'] = $object->getJourNonSignificatif();
            }

            if ($object->isInitialized('montantAcompte') && null !== $object->getMontantAcompte()) {
                $data['montantAcompte'] = $object->getMontantAcompte();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieAcompte::class => false];
        }
    }
}
