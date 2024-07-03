<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\DeclarationEvenementielle;
use QdequippeTech\Silae\Api\Model\RechercheDeclarationEvenementielleResponse;
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
    class RechercheDeclarationEvenementielleResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return RechercheDeclarationEvenementielleResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof RechercheDeclarationEvenementielleResponse;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new RechercheDeclarationEvenementielleResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('listeDeclarationEvenementielle', $data) && null !== $data['listeDeclarationEvenementielle']) {
                $values = [];
                foreach ($data['listeDeclarationEvenementielle'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, DeclarationEvenementielle::class, 'json', $context);
                }

                $object->setListeDeclarationEvenementielle($values);
            } elseif (\array_key_exists('listeDeclarationEvenementielle', $data) && null === $data['listeDeclarationEvenementielle']) {
                $object->setListeDeclarationEvenementielle(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('listeDeclarationEvenementielle') && null !== $object->getListeDeclarationEvenementielle()) {
                $values = [];
                foreach ($object->getListeDeclarationEvenementielle() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['listeDeclarationEvenementielle'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RechercheDeclarationEvenementielleResponse::class => false];
        }
    }
} else {
    class RechercheDeclarationEvenementielleResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return RechercheDeclarationEvenementielleResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof RechercheDeclarationEvenementielleResponse;
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

            $object = new RechercheDeclarationEvenementielleResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('listeDeclarationEvenementielle', $data) && null !== $data['listeDeclarationEvenementielle']) {
                $values = [];
                foreach ($data['listeDeclarationEvenementielle'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, DeclarationEvenementielle::class, 'json', $context);
                }

                $object->setListeDeclarationEvenementielle($values);
            } elseif (\array_key_exists('listeDeclarationEvenementielle', $data) && null === $data['listeDeclarationEvenementielle']) {
                $object->setListeDeclarationEvenementielle(null);
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
            if ($object->isInitialized('listeDeclarationEvenementielle') && null !== $object->getListeDeclarationEvenementielle()) {
                $values = [];
                foreach ($object->getListeDeclarationEvenementielle() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['listeDeclarationEvenementielle'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RechercheDeclarationEvenementielleResponse::class => false];
        }
    }
}
