<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\Entity;
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
    class EntityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return Entity::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Entity::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new Entity();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }

            if (\array_key_exists('name', $data) && null !== $data['name']) {
                $object->setName($data['name']);
            } elseif (\array_key_exists('name', $data) && null === $data['name']) {
                $object->setName(null);
            }

            if (\array_key_exists('validityEndDate', $data) && null !== $data['validityEndDate']) {
                $object->setValidityEndDate(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['validityEndDate']));
            } elseif (\array_key_exists('validityEndDate', $data) && null === $data['validityEndDate']) {
                $object->setValidityEndDate(null);
            }

            if (\array_key_exists('validityStartDate', $data) && null !== $data['validityStartDate']) {
                $object->setValidityStartDate(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['validityStartDate']));
            } elseif (\array_key_exists('validityStartDate', $data) && null === $data['validityStartDate']) {
                $object->setValidityStartDate(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }

            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }

            if ($object->isInitialized('validityEndDate') && null !== $object->getValidityEndDate()) {
                $data['validityEndDate'] = $object->getValidityEndDate()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('validityStartDate') && null !== $object->getValidityStartDate()) {
                $data['validityStartDate'] = $object->getValidityStartDate()->format('Y-m-d\TH:i:s');
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [Entity::class => false];
        }
    }
} else {
    class EntityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return Entity::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Entity::class === $data::class;
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

            $object = new Entity();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }

            if (\array_key_exists('name', $data) && null !== $data['name']) {
                $object->setName($data['name']);
            } elseif (\array_key_exists('name', $data) && null === $data['name']) {
                $object->setName(null);
            }

            if (\array_key_exists('validityEndDate', $data) && null !== $data['validityEndDate']) {
                $object->setValidityEndDate(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['validityEndDate']));
            } elseif (\array_key_exists('validityEndDate', $data) && null === $data['validityEndDate']) {
                $object->setValidityEndDate(null);
            }

            if (\array_key_exists('validityStartDate', $data) && null !== $data['validityStartDate']) {
                $object->setValidityStartDate(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['validityStartDate']));
            } elseif (\array_key_exists('validityStartDate', $data) && null === $data['validityStartDate']) {
                $object->setValidityStartDate(null);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }

            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }

            if ($object->isInitialized('validityEndDate') && null !== $object->getValidityEndDate()) {
                $data['validityEndDate'] = $object->getValidityEndDate()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('validityStartDate') && null !== $object->getValidityStartDate()) {
                $data['validityStartDate'] = $object->getValidityStartDate()->format('Y-m-d\TH:i:s');
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [Entity::class => false];
        }
    }
}
