<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LigneBulletin;
use QdequippeTech\Silae\Api\Model\SalarieBulletinEnteteSimpleResult;
use QdequippeTech\Silae\Api\Model\SalarieBulletinResult;
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
    class SalarieBulletinResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return SalarieBulletinResult::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof SalarieBulletinResult;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new SalarieBulletinResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('identifiantBulletin', $data) && null !== $data['identifiantBulletin']) {
                $object->setIdentifiantBulletin($data['identifiantBulletin']);
            } elseif (\array_key_exists('identifiantBulletin', $data) && null === $data['identifiantBulletin']) {
                $object->setIdentifiantBulletin(null);
            }

            if (\array_key_exists('entete', $data) && null !== $data['entete']) {
                $object->setEntete($this->denormalizer->denormalize($data['entete'], SalarieBulletinEnteteSimpleResult::class, 'json', $context));
            } elseif (\array_key_exists('entete', $data) && null === $data['entete']) {
                $object->setEntete(null);
            }

            if (\array_key_exists('lignesBulletin', $data) && null !== $data['lignesBulletin']) {
                $values = [];
                foreach ($data['lignesBulletin'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, LigneBulletin::class, 'json', $context);
                }

                $object->setLignesBulletin($values);
            } elseif (\array_key_exists('lignesBulletin', $data) && null === $data['lignesBulletin']) {
                $object->setLignesBulletin(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('identifiantBulletin') && null !== $object->getIdentifiantBulletin()) {
                $data['identifiantBulletin'] = $object->getIdentifiantBulletin();
            }

            if ($object->isInitialized('entete') && null !== $object->getEntete()) {
                $data['entete'] = $this->normalizer->normalize($object->getEntete(), 'json', $context);
            }

            if ($object->isInitialized('lignesBulletin') && null !== $object->getLignesBulletin()) {
                $values = [];
                foreach ($object->getLignesBulletin() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['lignesBulletin'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieBulletinResult::class => false];
        }
    }
} else {
    class SalarieBulletinResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return SalarieBulletinResult::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof SalarieBulletinResult;
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

            $object = new SalarieBulletinResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('identifiantBulletin', $data) && null !== $data['identifiantBulletin']) {
                $object->setIdentifiantBulletin($data['identifiantBulletin']);
            } elseif (\array_key_exists('identifiantBulletin', $data) && null === $data['identifiantBulletin']) {
                $object->setIdentifiantBulletin(null);
            }

            if (\array_key_exists('entete', $data) && null !== $data['entete']) {
                $object->setEntete($this->denormalizer->denormalize($data['entete'], SalarieBulletinEnteteSimpleResult::class, 'json', $context));
            } elseif (\array_key_exists('entete', $data) && null === $data['entete']) {
                $object->setEntete(null);
            }

            if (\array_key_exists('lignesBulletin', $data) && null !== $data['lignesBulletin']) {
                $values = [];
                foreach ($data['lignesBulletin'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, LigneBulletin::class, 'json', $context);
                }

                $object->setLignesBulletin($values);
            } elseif (\array_key_exists('lignesBulletin', $data) && null === $data['lignesBulletin']) {
                $object->setLignesBulletin(null);
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
            if ($object->isInitialized('identifiantBulletin') && null !== $object->getIdentifiantBulletin()) {
                $data['identifiantBulletin'] = $object->getIdentifiantBulletin();
            }

            if ($object->isInitialized('entete') && null !== $object->getEntete()) {
                $data['entete'] = $this->normalizer->normalize($object->getEntete(), 'json', $context);
            }

            if ($object->isInitialized('lignesBulletin') && null !== $object->getLignesBulletin()) {
                $values = [];
                foreach ($object->getLignesBulletin() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['lignesBulletin'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieBulletinResult::class => false];
        }
    }
}
