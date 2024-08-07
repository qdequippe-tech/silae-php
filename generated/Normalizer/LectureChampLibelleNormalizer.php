<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LectureChampLibelle;
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
    class LectureChampLibelleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return LectureChampLibelle::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && LectureChampLibelle::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new LectureChampLibelle();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomChamp', $data) && null !== $data['nomChamp']) {
                $object->setNomChamp($data['nomChamp']);
            } elseif (\array_key_exists('nomChamp', $data) && null === $data['nomChamp']) {
                $object->setNomChamp(null);
            }

            if (\array_key_exists('valeurByte', $data) && null !== $data['valeurByte']) {
                $object->setValeurByte($data['valeurByte']);
            } elseif (\array_key_exists('valeurByte', $data) && null === $data['valeurByte']) {
                $object->setValeurByte(null);
            }

            if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
                $object->setLibelle($data['libelle']);
            } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
                $object->setLibelle(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nomChamp') && null !== $object->getNomChamp()) {
                $data['nomChamp'] = $object->getNomChamp();
            }

            if ($object->isInitialized('valeurByte') && null !== $object->getValeurByte()) {
                $data['valeurByte'] = $object->getValeurByte();
            }

            if ($object->isInitialized('libelle') && null !== $object->getLibelle()) {
                $data['libelle'] = $object->getLibelle();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [LectureChampLibelle::class => false];
        }
    }
} else {
    class LectureChampLibelleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return LectureChampLibelle::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && LectureChampLibelle::class === $data::class;
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

            $object = new LectureChampLibelle();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomChamp', $data) && null !== $data['nomChamp']) {
                $object->setNomChamp($data['nomChamp']);
            } elseif (\array_key_exists('nomChamp', $data) && null === $data['nomChamp']) {
                $object->setNomChamp(null);
            }

            if (\array_key_exists('valeurByte', $data) && null !== $data['valeurByte']) {
                $object->setValeurByte($data['valeurByte']);
            } elseif (\array_key_exists('valeurByte', $data) && null === $data['valeurByte']) {
                $object->setValeurByte(null);
            }

            if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
                $object->setLibelle($data['libelle']);
            } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
                $object->setLibelle(null);
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
            if ($object->isInitialized('nomChamp') && null !== $object->getNomChamp()) {
                $data['nomChamp'] = $object->getNomChamp();
            }

            if ($object->isInitialized('valeurByte') && null !== $object->getValeurByte()) {
                $data['valeurByte'] = $object->getValeurByte();
            }

            if ($object->isInitialized('libelle') && null !== $object->getLibelle()) {
                $data['libelle'] = $object->getLibelle();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [LectureChampLibelle::class => false];
        }
    }
}
