<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\RecupererFichierVirementResult;
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
    class RecupererFichierVirementResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return RecupererFichierVirementResult::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof RecupererFichierVirementResult;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new RecupererFichierVirementResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('fichier', $data) && null !== $data['fichier']) {
                $object->setFichier($data['fichier']);
            } elseif (\array_key_exists('fichier', $data) && null === $data['fichier']) {
                $object->setFichier(null);
            }

            if (\array_key_exists('contenu', $data) && null !== $data['contenu']) {
                $object->setContenu($data['contenu']);
            } elseif (\array_key_exists('contenu', $data) && null === $data['contenu']) {
                $object->setContenu(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('fichier') && null !== $object->getFichier()) {
                $data['fichier'] = $object->getFichier();
            }

            if ($object->isInitialized('contenu') && null !== $object->getContenu()) {
                $data['contenu'] = $object->getContenu();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RecupererFichierVirementResult::class => false];
        }
    }
} else {
    class RecupererFichierVirementResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return RecupererFichierVirementResult::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof RecupererFichierVirementResult;
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

            $object = new RecupererFichierVirementResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('fichier', $data) && null !== $data['fichier']) {
                $object->setFichier($data['fichier']);
            } elseif (\array_key_exists('fichier', $data) && null === $data['fichier']) {
                $object->setFichier(null);
            }

            if (\array_key_exists('contenu', $data) && null !== $data['contenu']) {
                $object->setContenu($data['contenu']);
            } elseif (\array_key_exists('contenu', $data) && null === $data['contenu']) {
                $object->setContenu(null);
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
            if ($object->isInitialized('fichier') && null !== $object->getFichier()) {
                $data['fichier'] = $object->getFichier();
            }

            if ($object->isInitialized('contenu') && null !== $object->getContenu()) {
                $data['contenu'] = $object->getContenu();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RecupererFichierVirementResult::class => false];
        }
    }
}
