<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EtatDeclarationRetour;
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
    class EtatDeclarationRetourNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return EtatDeclarationRetour::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EtatDeclarationRetour::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new EtatDeclarationRetour();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['date']));
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
            }

            if (\array_key_exists('nature', $data) && null !== $data['nature']) {
                $object->setNature($data['nature']);
            } elseif (\array_key_exists('nature', $data) && null === $data['nature']) {
                $object->setNature(null);
            }

            if (\array_key_exists('etat', $data) && null !== $data['etat']) {
                $object->setEtat($data['etat']);
            } elseif (\array_key_exists('etat', $data) && null === $data['etat']) {
                $object->setEtat(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('nature') && null !== $object->getNature()) {
                $data['nature'] = $object->getNature();
            }

            if ($object->isInitialized('etat') && null !== $object->getEtat()) {
                $data['etat'] = $object->getEtat();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EtatDeclarationRetour::class => false];
        }
    }
} else {
    class EtatDeclarationRetourNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EtatDeclarationRetour::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EtatDeclarationRetour::class === $data::class;
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

            $object = new EtatDeclarationRetour();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('date', $data) && null !== $data['date']) {
                $object->setDate(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['date']));
            } elseif (\array_key_exists('date', $data) && null === $data['date']) {
                $object->setDate(null);
            }

            if (\array_key_exists('nature', $data) && null !== $data['nature']) {
                $object->setNature($data['nature']);
            } elseif (\array_key_exists('nature', $data) && null === $data['nature']) {
                $object->setNature(null);
            }

            if (\array_key_exists('etat', $data) && null !== $data['etat']) {
                $object->setEtat($data['etat']);
            } elseif (\array_key_exists('etat', $data) && null === $data['etat']) {
                $object->setEtat(null);
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
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('nature') && null !== $object->getNature()) {
                $data['nature'] = $object->getNature();
            }

            if ($object->isInitialized('etat') && null !== $object->getEtat()) {
                $data['etat'] = $object->getEtat();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EtatDeclarationRetour::class => false];
        }
    }
}
