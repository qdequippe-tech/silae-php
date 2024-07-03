<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\RecupererImageRequest;
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
    class RecupererImageRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return RecupererImageRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof RecupererImageRequest;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new RecupererImageRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('natureImage', $data) && null !== $data['natureImage']) {
                $object->setNatureImage($data['natureImage']);
            } elseif (\array_key_exists('natureImage', $data) && null === $data['natureImage']) {
                $object->setNatureImage(null);
            }

            if (\array_key_exists('iD_IMAGE', $data) && null !== $data['iD_IMAGE']) {
                $object->setIDIMAGE($data['iD_IMAGE']);
            } elseif (\array_key_exists('iD_IMAGE', $data) && null === $data['iD_IMAGE']) {
                $object->setIDIMAGE(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('natureImage') && null !== $object->getNatureImage()) {
                $data['natureImage'] = $object->getNatureImage();
            }

            if ($object->isInitialized('iDIMAGE') && null !== $object->getIDIMAGE()) {
                $data['iD_IMAGE'] = $object->getIDIMAGE();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RecupererImageRequest::class => false];
        }
    }
} else {
    class RecupererImageRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return RecupererImageRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof RecupererImageRequest;
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

            $object = new RecupererImageRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('natureImage', $data) && null !== $data['natureImage']) {
                $object->setNatureImage($data['natureImage']);
            } elseif (\array_key_exists('natureImage', $data) && null === $data['natureImage']) {
                $object->setNatureImage(null);
            }

            if (\array_key_exists('iD_IMAGE', $data) && null !== $data['iD_IMAGE']) {
                $object->setIDIMAGE($data['iD_IMAGE']);
            } elseif (\array_key_exists('iD_IMAGE', $data) && null === $data['iD_IMAGE']) {
                $object->setIDIMAGE(null);
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
            if ($object->isInitialized('natureImage') && null !== $object->getNatureImage()) {
                $data['natureImage'] = $object->getNatureImage();
            }

            if ($object->isInitialized('iDIMAGE') && null !== $object->getIDIMAGE()) {
                $data['iD_IMAGE'] = $object->getIDIMAGE();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RecupererImageRequest::class => false];
        }
    }
}
