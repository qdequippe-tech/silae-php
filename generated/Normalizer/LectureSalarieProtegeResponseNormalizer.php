<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LectureSalarieProtegeResponse;
use QdequippeTech\Silae\Api\Model\SalarieProtege;
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
    class LectureSalarieProtegeResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return LectureSalarieProtegeResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof LectureSalarieProtegeResponse;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new LectureSalarieProtegeResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('salarieProtege', $data) && null !== $data['salarieProtege']) {
                $values = [];
                foreach ($data['salarieProtege'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, SalarieProtege::class, 'json', $context);
                }

                $object->setSalarieProtege($values);
            } elseif (\array_key_exists('salarieProtege', $data) && null === $data['salarieProtege']) {
                $object->setSalarieProtege(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('salarieProtege') && null !== $object->getSalarieProtege()) {
                $values = [];
                foreach ($object->getSalarieProtege() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['salarieProtege'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [LectureSalarieProtegeResponse::class => false];
        }
    }
} else {
    class LectureSalarieProtegeResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return LectureSalarieProtegeResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof LectureSalarieProtegeResponse;
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

            $object = new LectureSalarieProtegeResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('salarieProtege', $data) && null !== $data['salarieProtege']) {
                $values = [];
                foreach ($data['salarieProtege'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, SalarieProtege::class, 'json', $context);
                }

                $object->setSalarieProtege($values);
            } elseif (\array_key_exists('salarieProtege', $data) && null === $data['salarieProtege']) {
                $object->setSalarieProtege(null);
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
            if ($object->isInitialized('salarieProtege') && null !== $object->getSalarieProtege()) {
                $values = [];
                foreach ($object->getSalarieProtege() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['salarieProtege'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [LectureSalarieProtegeResponse::class => false];
        }
    }
}
