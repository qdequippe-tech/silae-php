<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EcrituresComptablesFichier;
use QdequippeTech\Silae\Api\Model\RecupererFichiersEcrituresComptablesResponse;
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
    class RecupererFichiersEcrituresComptablesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return RecupererFichiersEcrituresComptablesResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RecupererFichiersEcrituresComptablesResponse::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new RecupererFichiersEcrituresComptablesResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('fichiers', $data) && null !== $data['fichiers']) {
                $values = [];
                foreach ($data['fichiers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, EcrituresComptablesFichier::class, 'json', $context);
                }

                $object->setFichiers($values);
            } elseif (\array_key_exists('fichiers', $data) && null === $data['fichiers']) {
                $object->setFichiers(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('fichiers') && null !== $object->getFichiers()) {
                $values = [];
                foreach ($object->getFichiers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['fichiers'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RecupererFichiersEcrituresComptablesResponse::class => false];
        }
    }
} else {
    class RecupererFichiersEcrituresComptablesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return RecupererFichiersEcrituresComptablesResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RecupererFichiersEcrituresComptablesResponse::class === $data::class;
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

            $object = new RecupererFichiersEcrituresComptablesResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('fichiers', $data) && null !== $data['fichiers']) {
                $values = [];
                foreach ($data['fichiers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, EcrituresComptablesFichier::class, 'json', $context);
                }

                $object->setFichiers($values);
            } elseif (\array_key_exists('fichiers', $data) && null === $data['fichiers']) {
                $object->setFichiers(null);
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
            if ($object->isInitialized('fichiers') && null !== $object->getFichiers()) {
                $values = [];
                foreach ($object->getFichiers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['fichiers'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RecupererFichiersEcrituresComptablesResponse::class => false];
        }
    }
}
